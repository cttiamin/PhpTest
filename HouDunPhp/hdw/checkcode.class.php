<?php
/**
 * �����  http://www.houdunwang.com
 * 2011-5-12 ����4:16:08
 * @authorAdministrator
 * @encode:GBK
 */

class checkcode{
	//��Դ
	private $img;
	//�������
	public $width=85;
	//�����߶�
	public $height=25;
	//������ɫ
	public $bg_color="#ffffff";
	//��֤��
	public $code;
	//��֤����������
	public $code_str="329832983DSDSKDSLKQWEWQ2lkfDSFSDjfdsfdsjwlkfj93290KFDSKJFDSOIDSLK";
	//��֤�볤��
	public $code_len=4;
	//��֤������
	public $font;
	//��֤�������С
	public $font_size=16;
	//��֤��������ɫ 
	public $font_color = "#000000";
	/**
	 * ���캯��
	 */
	public function __construct(){
		$this->font= "font".DIRECTORY_SEPARATOR.'msyh.ttf';
	}
	/**
	 * ������֤��
	 */
	private function create_code(){
		$code = '';
		for($i=0;$i<$this->code_len;$i++){
			$code.=$this->code_str[mt_rand(0,strlen($this->code_str)-1)];
		}
		$this->code = $code;
	}
	/**
	 * ������֤��
	 */
	public function getcode(){
		return strtoupper($this->code);
	}
	/**
	 * ������
	 */
	public function getimage(){
		$w = $this->width;
		$h = $this->height;
		$bg_color= $this->bg_color;
		if(!$this->checkgd())return false;
		$img = imagecreatetruecolor($w, $h);
	    $bg_color = imagecolorallocate($img, 
	    hexdec(substr($bg_color, 1,2)), hexdec(substr($bg_color, 3,2)), hexdec(substr($bg_color, 5,2)));
	    imagefill($img, 0, 0, $bg_color);
	    $this->img = $img;
	    $this->create_font();
	    $this->create_pix();
	    $this->show_code();
	}
	/**
	 * д����֤������ 
	 */
    private function create_font()
    {
		$this->create_code();
		$color= $this->font_color;
		$font_color = imagecolorallocate($this->img, 
	    hexdec(substr($color, 1,2)), hexdec(substr($color, 3,2)), hexdec(substr($color, 5,2)));
	     $x = $this->width/$this->code_len;
        for($i=0;$i<$this->code_len;$i++)
        {
	    	imagettftext($this->img, $this->font_size, mt_rand(-30, 30), $x*$i+mt_rand(3,6), mt_rand($this->height/1.2,$this->height-5), $font_color, $this->font, $this->code[$i]);
	    }
	    $this->font_color = $font_color;
	}
	/**
	 * ����
	 */
	private function create_pix(){
		$pix_color= $this->font_color;
		for($i=0;$i<100;$i++){
			imagesetpixel($this->img, mt_rand(0, $this->width),mt_rand(0, $this->height), $pix_color);
		}
		for($j=0;$j<2;$j++){
			imagesetthickness($this->img, mt_rand(1, 2));
			imageline($this->img, mt_rand(0, $this->width), mt_rand(0, $this->height),  mt_rand(0, $this->width), mt_rand(0, $this->height), $pix_color);
		}
	}
	/**
	 * ��ʾ��֤��
	 */
	private function show_code(){
		header("Content-type:image/png");
		imagepng($this->img);
		imagedestroy($this->img);
	}
	/**
	 * ��֤GD���ǲ����imagepng�����Ƿ����
	 */
	private function checkgd(){
		return extension_loaded('gd')&&function_exists("imagepng");
	}
	

}
