<?php 
$dir = "./public/img";
$list = scandir($dir);
$countlist = count($list) - 2; //  -2 для того, чтобы исключить '.' и '..'
for($i = 0; $i <= $countlist - 1; $i++){
$file = $dir.DIRECTORY_SEPARATOR.$list[$i + 2]; // путь к i-й картинке (смещаемся на 2 из-за '.' и '..')
    /* далее проверяем, является ли то, что мы хотим вывести, изображением с помощью mime_content_type */
if(mime_content_type($file) == 'image/jpeg') { ?> 
<a href = "<?=$file?>" target="_blank"><img src="<?=$file?>" width="200px"></a><br/>
<?php                    }}?>

