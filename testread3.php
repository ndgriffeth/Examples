<?php
$filearray = file("/Users/nancyg/Data/junk");
echo "<pre>";
foreach($filearray as $entry) {
    echo "$entry";
}
echo "</pre>";
?>
