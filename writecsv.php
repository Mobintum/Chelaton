<?php
$data= file_get_contents("php://input");
$file = 'message.csv';

if ($data){
    $fp = fopen($file, 'a+');
    fputs($fp, $data.chr(10).chr(13));
    fclose($fp);
    echo 1;
}else{
	echo 0;
}

?>