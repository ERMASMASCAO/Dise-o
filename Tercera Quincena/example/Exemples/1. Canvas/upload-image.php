<?php
 
if (array_key_exists('img',$_REQUEST)) {
    echo $_REQUEST['img'];

    $imgData = base64_decode(substr($_REQUEST['img'],22));
 
    $file = 'image.png';
    if (file_exists($file)) { unlink($file); }
 
        $fp = fopen($file, 'w');
        fwrite($fp, $imgData);
        fclose($fp);
}
?>