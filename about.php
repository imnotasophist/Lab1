<?php 
$title = 'Размер';
require '/tpl/header.php'; 
?>
<main>
    <div class="container">
        <section>
            <h2>Размер сайта</h2>
            <p class="main__text_mt">
<?php 
function getFilesSize($path)
{
    $fileSize = 0;
    $dir = scandir($path);

    foreach($dir as $file)
    {
        if (($file!='.') && ($file!='..'))
            if(is_dir($path . '/' . $file))
                $fileSize += getFilesSize($path.'/'.$file);
            else
                $fileSize += filesize($path . '/' . $file);
    }

    return $fileSize;
}
$size = getFilesSize('C:\WebServers\home\Lab4').' байт';
echo $size;
?>
            </p>
        </section>
    </div>
</main>
<?php include_once '/tpl/footer.php'; ?>