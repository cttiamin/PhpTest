<?php
/**
 * 后盾网  http://www.houdunwang.com
 * 2011-5-22 下午05:26:22
 */
class image {
	//是否应用水印
	private $watermark_on;
	//水印图片
	public $water_img;
	//水印的位置
	public $pos;
	//水印的透明度
	public $pct;
	//图像的压缩比
	public $quality = 80;
	//水印文字内容
	public $text;
	//水印文字大小
	public $text_size = 12;
	//水印文字的颜色
	public $color = "#000000";
	//水印的文字的字体
	public $font = "font/simfang.ttf";
	//是否开启缩略图功能
	private $thumb_on;
	//生成缩略图的方式 
	public $thumb_type;
	//缩略图的宽度
	public $thumb_width = 200;
	//缩略图的高度
	public $thumb_height = 200;
	//生成缩略图文件名后缀
	public $thumb_fix;
	/**
	 * 构造函数
	 */
	function __construct() {
		$config = require_once '105_pic_config.php';
		$this->watermark_on = $config ['web'] ['watermark_on'];
		$this->thumb_on = $config['thumb']['thumb_on'];
		$this->thumb_fix = $config['thumb']['thumb_fix'];
		$this->thumb_type = $config['thumb']['thumb_type'];
		$this->conf ( $config ['watermark'] );
	}
	private function conf($config) {
		$this->water_img = $config ['water_img'];
		$this->pos = $config ['pos'];
		$this->pct = $config ['pct'];
		$this->text = $config ['text'];
	}
	/**
	 * 环境验证
	 * @param $img			图像路径 
	 * return boolean
	 */
	private function check($img) {
		$type = array (".jpg", ".jpeg", ".png", ".gif" );
		$img_type = strtolower ( strrchr ( $img, '.' ) );
		return extension_loaded ( 'gd' ) && file_exists ( $img ) && in_array ( $img_type, $type );
	}
	/**
	 * 
	 * 获得缩略图的尺寸信息
	 * @param  $img_w		原图宽度
	 * @param  $img_h		原图高度
	 * @param  $t_w			缩略图宽度
	 * @param  $t_h			缩略图的高度
	 * @parrm  $t_type    	处理方式
	 * return array
	 */
	private function thumb_size($img_w, $img_h, $t_w, $t_h, $t_type) {
		//初始化缩略图尺寸
		$w = $t_w;
		$h = $t_h;
		//初始化原图尺寸
		$cut_w = $img_w;
		$cut_h = $img_h;
		
		if ($img_w <= $t_w && $img_h <= $t_h) {
			$w = $img_w;
			$h = $img_h;
		} else {
			switch ($t_type) {
				case 1 :
					//固定宽度  高度自增
					$h = $t_w / $img_w * $img_h;
					break;
				case 2 :
					//固定高度  宽度自增
					$w = $t_h / $img_h * $img_w;
					break;
				case 3 :
					//固定宽度  高度裁切
					$cut_h = $img_w / $t_w * $t_h;
					break;
				case 4 :
					//固定高度  宽度裁切
					$cut_w = $img_h / $t_h * $t_w;
					break;
				case 5 :
				default :
					if (($img_w / $t_w) > ($img_h / $t_h)) {
						$h = $t_w / $img_w * $img_h;
					} elseif (($img_w / $t_w) < ($img_h / $t_h)) {
						$w = $t_h / $img_h * $img_w;
					} else {
						$w = $t_w;
						$h = $t_h;
					}
			}
		}
		$arr [0] = $w;
		$arr [1] = $h;
		$arr [2] = $cut_w;
		$arr [3] = $cut_h;
		return $arr;
	}
	/**
	 * 
	 * 图片裁切处理
	 * @param $img			操作的图片路径 
	 * @param $outfile		输出文件路径 
	 * @param $t_type		裁切图片的方式 
	 * @param $t_w			缩略图宽度
	 * @param $t_h			缩略图高度
	 * return $string 		处理后的文件名
	 */
	public function thumb($img, $outfile = '', $t_type = '', $t_w = '', $t_h = '') {
		if (! $this->thumb_on || ! $this->check ( $img ))
			return false;
		
		//基础配置
		$t_type = $t_type ? $t_type : $this->thumb_type;
		$t_w = $t_w ? $t_w : $this->thumb_width;
		$t_h = $t_h ? $t_h : $this->thumb_height;
		//获得图像信息
		$img_info = getimagesize ( $img );
		$img_w = $img_info [0];
		$img_h = $img_info [1];
		$img_type = image_type_to_extension ( $img_info [2] );
		//获得相关尺寸
		$thumb_size = $this->thumb_size ( $img_w, $img_h, $t_w, $t_h, $t_type );
		//原始图像资源
		$func = "imagecreatefrom" . substr ( $img_type, 1 );
		$res_img = $func ( $img );
		//缩略图的资源
		if ($img_type == '.gif' || $img_type == '.png') {
			$res_thumb = imagecreate ( $thumb_size [0], $thumb_size [1] );
			$color = imagecolorallocate ( $res_thumb, 255, 0, 0 );
		} else {
			$res_thumb = imagecreatetruecolor ( $thumb_size [0], $thumb_size [1] );
		}
		//制制缩略图
		if (function_exists ( "imagecopyresampled" )) {
			imagecopyresampled ( $res_thumb, $res_img, 0, 0, 0, 0, $thumb_size [0], $thumb_size [1], $thumb_size [2], $thumb_size [3] );
		} else {
			imagecopyresized ( $res_thumb, $res_img, 0, 0, 0, 0, $thumb_size [0], $thumb_size [1], $thumb_size [2], $thumb_size [3] );
		}
		//处理透明色
		if ($img_type == '.gif' || $img_type == '.png') {
			imagecolortransparent($res_thumb,$color);
		}
		//配置输出文件名
		$outfile = $outfile?$outfile:substr($img, 0,strpos($img, '.')).$this->thumb_fix.$img_type;
		
		$func = "image".substr($img_type,1);
		$func($res_thumb,$outfile);
		if(isset($res_thumb))imagedestroy($res_thumb);
		if(isset($res_img))imagedestroy($res_img);
		return $outfile;
	}
	/**
	 * 水印处理
	 * @param $img 			操作的图像
	 * @param $out_img		另存的图像
	 * @param $water_img 	水印图片
	 * @param $pos			水印位置
	 * @param $text			文字水印内容
	 * @param $pct			透明度
	 * return boolean
	 */
	public function watermark($img, $out_img = '', $water_img = '', $pos = '', $text = "", $pct = '') {
		//验证原图像
		if (! $this->check ( $img ) || ! $this->watermark_on)
			return false;
		
		//验证水印图像
		$water_img = $water_img ? $water_img : $this->water_img;
		$waterimg_on = $this->check ( $water_img ) ? 1 : 0;
		//判断另存图像
		$out_img = $out_img ? $out_img : $img;
		//水印位置
		$pos = $pos ? $pos : $this->pos;
		//水印文字 
		$text = $text ? $text : $this->text;
		//水印透明度
		$pct = $pct ? $pct : $this->pct;
		$img_info = getimagesize ( $img );
		$img_w = $img_info [0];
		$img_h = $img_info [1];
		//获得水印信息
		if ($waterimg_on) {
			$w_info = getimagesize ( $water_img );
			$w_w = $w_info [0];
			$w_h = $w_info [1];
			switch ($w_info [2]) {
				case 1 :
					$w_img = imagecreatefromgif ( $water_img );
					break;
				case 2 :
					$w_img = imagecreatefromjpeg ( $water_img );
					break;
				case 3 :
					$w_img = imagecreatefrompng ( $water_img );
					break;
			}
		} else {
			if (empty ( $text ) || strlen ( $this->color ) != 7)
				return false;
			$text_info = imagettfbbox ( $this->text_size, 0, $this->font, $text );
			$w_w = $text_info [2] - $text_info [6];
			$w_h = $text_info [3] - $text_info [7];
		}
		//建立原图资源
		if ($img_h < $w_h || $img_w < $w_w)
			return false;
		switch ($img_info [2]) {
			case 1 :
				$res_img = imagecreatefromgif ( $img );
				break;
			case 2 :
				$res_img = imagecreatefromjpeg ( $img );
				break;
			case 3 :
				$res_img = imagecreatefrompng ( $img );
				break;
		}
		//水印位置处理方法
		switch ($pos) {
			case 1 :
				$x = $y = 25;
				break;
			case 2 :
				$x = ($img_w - $w_w) / 2;
				$y = 25;
				break;
			case 3 :
				$x = $img_w - $w_w;
				$y = 25;
				break;
			case 4 :
				$x = 25;
				$y = ($img_h - $w_h) / 2;
			case 5 :
				$x = ($img_w - $w_w) / 2;
				$y = ($img_h - $w_h) / 2;
				break;
			case 6 :
				$x = $img_w - $w_w;
				$y = ($img_h - $w_h) / 2;
				break;
			case 7 :
				$x = 25;
				$y = $img_h - $w_h;
				break;
			case 8 :
				$x = ($img_w - $w_w) / 2;
				$y = $img_h - $w_h;
				break;
			case 9 :
				$x = $img_w - $w_w;
				$y = $img_h - $w_h;
				break;
			default :
				$x = mt_rand ( 25, $img_w - $w_w );
				$y = mt_rand ( 25, $img_h - $w_h );
		}
		
		if ($waterimg_on) {
			if ($w_info [2] == 3) {
				imagecopy ( $res_img, $w_img, $x, $y, 0, 0, $w_w, $w_h );
			} else {
				imagecopymerge ( $res_img, $w_img, $x, $y, 0, 0, $w_w, $w_h, $pct );
			}
		} else {
			$r = hexdec ( substr ( $this->color, 1, 2 ) );
			$g = hexdec ( substr ( $this->color, 3, 2 ) );
			$b = hexdec ( substr ( $this->color, 5, 2 ) );
			$color = imagecolorallocate ( $res_img, $r, $g, $b );
			imagettftext ( $res_img, $this->text_size, 0, $x, $y, $color, $this->font, iconv ( 'gbk', 'utf-8', $text ) );
		}
		switch ($img_info [2]) {
			case 1 :
				imagegif ( $res_img, $out_img );
				break;
			case 2 :
				imagejpeg ( $res_img, $out_img, $this->quality );
				break;
			case 3 :
				imagepng ( $res_img, $out_img );
				break;
		}
		if (isset ( $res_img ))
			imagedestroy ( $res_img );
		if (isset ( $w_img ))
			imagedestroy ( $w_img );
		return true;
	}

}

