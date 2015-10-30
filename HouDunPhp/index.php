<?php
/*获取后缀名 
function extend_1($file_name)   
{   
    $retval="";   
    $pt=strrpos($file_name, ".");   
    if ($pt) $retval=substr($file_name, $pt+1, strlen($file_name) - $pt);   
    return ($retval);   
}
*/

function scand($dir)
{
    static $i = 0;
    static $d = 0; //文件夹
    $count = '';

    $dirInfo = scandir( $dir );
    foreach ( $dirInfo as $v )
    {
        if( $v != '.' && $v != '..')
        {
            $dirname = $dir . '\\' .$v;
            echo $dirname .'<br/>';
            if(is_dir( $dirname))
            {
                $count['dir'] = ++$d;
                scand( $dirname );               
            }else{       
                $count['file'] = ++$i;
            }
        }
    }
    return $count;
}
$dir =  dirname(dirname(__FILE__));
echo $dir;
//$count = scand($dir);








?>
