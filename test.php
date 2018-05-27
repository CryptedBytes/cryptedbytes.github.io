$content = "some text here";
$fp = fopen("myText.txt","wb");
fwrite($fp,$content);
fclose($fp);