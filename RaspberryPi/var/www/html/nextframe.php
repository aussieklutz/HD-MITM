<?php
$frames = preg_grep('#.jp[e]{0,1}g$#', scandir('/var/www/html/frames/'));
$ordered_frames = array();
foreach ($frames as $nextframe) {
	$ordered_frames[filemtime('/var/www/html/frames/' . basename($nextframe))] = $nextframe;
}
ksort($ordered_frames);
//print_r($ordered_frames);
$frame = array_pop($ordered_frames);
//echo $frame;
header('Content-Type: image/jpeg');
$image = imagecreatefromjpeg('/var/www/html/frames/' . basename($frame));
imagejpeg($image);
imagedestroy($image);
?>
