<?php
$user_name = "nanc";
$file_name = $_SERVER['DOCUMENT_ROOT']."/../HiddenPage.html";

if ($user_name=="nancy") 
{
include($file_name);
} else {
echo "Access forbidden";
}
?>