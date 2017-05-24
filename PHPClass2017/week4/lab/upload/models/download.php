<?php $filename = filter_input(INPUT_GET, 'file');
?>
<object src="<?php echo "../uploads" . DIRECTORY_SEPARATOR . $filename ?>"><embed src="<?php echo "../uploads" . DIRECTORY_SEPARATOR . $filename ?>"></embed></object>

