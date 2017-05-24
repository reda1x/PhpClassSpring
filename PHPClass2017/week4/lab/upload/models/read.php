<?php
$filename = filter_input(INPUT_GET, 'file');
$finfo = new finfo(FILEINFO_MIME_TYPE);
$type = $finfo->file('../uploads' . DIRECTORY_SEPARATOR . $filename);
$file = new SplFileObject("../uploads" . DIRECTORY_SEPARATOR . $filename);
$size = $file->getSize();
$date=date("l F j, Y, g:i a", $file->getMTime());
?>


<h1>File type : <?php echo $type ?></h1>
<h1>File size : <?php echo $size ?></h1>
<h1>Date of creation : <?php echo $date ?></h1>
<?php

        
        
list($first, $last) = explode('/', $type);

if (strpos($type, 'image') !== false) {
    ?><img src="<?php echo "../uploads" . DIRECTORY_SEPARATOR . $filename ?>"><?php
} else if (strpos($type, 'text/plain') !== false) {
    ?><textarea cols="20" rows="6"><?php
    while (!$file->eof()) {
        echo $file->fgets();
    }
    ?></textarea><?php
    } else if (strpos($type, 'pdf') !== false || strpos($type, 'html') !== false) {
        ?>
    <iframe src="<?php echo "../uploads" . DIRECTORY_SEPARATOR . $filename ?>" width="100%" height="800px"></iframe>
    <?php
} else {
    ?> <a href="download.php?file=<?php echo $filename ?>">Download</a><?php
}
?>


