<?php

$image_name = "icon-60nf.png";

$path_detail = pathinfo( $image_name );
$new_image_name = sprintf( "%s%s%s%s" . $path_detail['filename'] . time() . rand( 0,9999) . "." . $path_detail['extension']);

echo $new_image_name;

?>