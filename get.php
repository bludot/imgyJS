<?php
$path = './' . $name[0];
$results = scandir($path);
//fo through all files and pic only images
foreach ($results as $result) {
    if ($result === '.' or $result === '..')
    {
     continue;
    }

    if (is_file($path . '/' . $result)) {
        //code to use if directory
        $temp = $result;
        $string = strtolower(substr($result, -3));
        $png = 'png';
        $jpg = 'jpg';
        $jpeg = 'jpeg';
        $gif = 'gif';
        $pos = strpos($string, $png) | strpos($string, $jpg) | strpos($string, $jpeg);
        if (strpos($string, $png) !== false || strpos($string, $jpg) !== false  || strpos($string, $jpeg) !== false || strpos($string, $gif) !== false) {
			echo $temp.",";
        }
    }
}
?>
