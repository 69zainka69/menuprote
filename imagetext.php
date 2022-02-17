<?php
$time_start = microtime(true);
ini_set("memory_limit","512M");
ini_set('max_execution_time', 600003);
include_once('/var/www/prote/data/www/prote.ua/config.php');
include_once('/var/www/prote/data/www/prote.ua/system/library/image.php');

$gd['WebP Support'] = true;
$EXTERNAL_STATIC_SERVER = "/var/www/prote/data/www/prote.ua/";

$size = array(
    '237' => 400,
    '400' => 237,
    '220' => 220,
    '350' => 350,
    '300' => 300,
    '1260' =>430,
    '430' =>1260,
);

$dbcnx = new \mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);
if ($dbcnx->connect_error) {
  trigger_error('Error: Could not make a database link (' . $dbcnx->connect_errno . ') ' . $dbcnx->connect_error);
  exit();
}


$sql = "SELECT * FROM `oc_articles` ORDER BY `date_added` DESC limit 3";
//$sql = "SELECT * FROM `oc_product` ORDER BY `date_added` DESC";
$result = $dbcnx->query($sql);
foreach($result as $ress){

    $prodid =  $ress['articles_id']; 

    $sql = "SELECT * FROM `oc_articles` WHERE `articles_id` = $prodid ORDER BY `date_added` DESC";
    $results = $dbcnx->query($sql);
    foreach($results as $ressi){

    $filename = $ressi['image'];   
 
    $files = explode("/", $filename);

    $filess = $files[2];

    $oldest = explode(".", $filename);

    $old = $oldest[0];


        $siz = explode("_", $filess);
        $width = substr($siz[0], -3);

$he = $siz[1];
$height = $he[0].$he[1].$he[2];


    $extensions = explode(".", $filess);

    $extension = $extensions[1];


    $file = $extensions[0];

    $new_image_webp = 'cachewebp/' . $old. '-ukr-' . (int)$width . 'x' . (int)$height . '.webp';
    $old_image =  $old.'-ukr.'.$extension;


if (file_exists(DIR_IMAGE . $new_image_webp)) {
       
}else{ if (file_exists(DIR_IMAGE . $old_image)) {

$path = '';
$directories = explode('/', dirname($new_image_webp));

foreach ($directories as $directory) {
$path = $path . '/' . $directory;

if (!is_dir(DIR_IMAGE . $path)) {
@mkdir(DIR_IMAGE . $path, 0777);
}
}

$image_webp = new Image(DIR_IMAGE . $old_image);

$image_webp->resize($width, $height);

$image_webp->save_webp(DIR_IMAGE .$new_image_webp);



$path = '';

$directories = explode('/', dirname($new_image_webp));

foreach ($directories as $directory) {
$path = $path . '/' . $directory;

if (!is_dir(DIR_IMAGE . $path)) {
@mkdir(DIR_IMAGE . $path, 0777);
}
}

$image_webp = new Image(DIR_IMAGE . $old_image);
$image_webp->resize($width, $height);
$image_webp->save_webp(DIR_IMAGE . $new_image_webp);
}
}


                    foreach($size as $key => $value){
                        $width = $key;
                        $height = $value;


                    $new_image_webp = 'cachewebp/' . $old. '-ukr-' . (int)$width . 'x' . (int)$height . '.webp';
                    $old_image =  $old.'-ukr.'.$extension;
                
               
                if (file_exists(DIR_IMAGE . $new_image_webp)) {
                       
                }else{ if (file_exists(DIR_IMAGE . $old_image)) {
               
            $path = '';
        $directories = explode('/', dirname($new_image_webp));
   
        foreach ($directories as $directory) {
            $path = $path . '/' . $directory;

            if (!is_dir(DIR_IMAGE . $path)) {
                @mkdir(DIR_IMAGE . $path, 0777);
            }
        }

        $image_webp = new Image(DIR_IMAGE . $old_image);
    
        $image_webp->resize($width, $height);
     
       $image_webp->save_webp(DIR_IMAGE .$new_image_webp);
 


    $path = '';

    $directories = explode('/', dirname($new_image_webp));

    foreach ($directories as $directory) {
        $path = $path . '/' . $directory;

        if (!is_dir(DIR_IMAGE . $path)) {
            @mkdir(DIR_IMAGE . $path, 0777);
        }
    }

    $image_webp = new Image(DIR_IMAGE . $old_image);
    $image_webp->resize($width, $height);
    $image_webp->save_webp(DIR_IMAGE . $new_image_webp);
}
}
            }
            foreach($size as $key => $value){
                $width = $key;
                $height = $value;


            $new_image_webp = 'cachewebp/' . $old. '-ru-' . (int)$width . 'x' . (int)$height . '.webp';
            $old_image =  $old.'-ru.'.$extension;
        
       
        if (file_exists(DIR_IMAGE . $new_image_webp)) {
               
        }else{ if (file_exists(DIR_IMAGE . $old_image)) {
       
    $path = '';
$directories = explode('/', dirname($new_image_webp));

foreach ($directories as $directory) {
    $path = $path . '/' . $directory;

    if (!is_dir(DIR_IMAGE . $path)) {
        @mkdir(DIR_IMAGE . $path, 0777);
    }
}

$image_webp = new Image(DIR_IMAGE . $old_image);

$image_webp->resize($width, $height);

$image_webp->save_webp(DIR_IMAGE .$new_image_webp);



$path = '';

$directories = explode('/', dirname($new_image_webp));

foreach ($directories as $directory) {
$path = $path . '/' . $directory;

if (!is_dir(DIR_IMAGE . $path)) {
    @mkdir(DIR_IMAGE . $path, 0777);
}
}

$image_webp = new Image(DIR_IMAGE . $old_image);
$image_webp->resize($width, $height);
$image_webp->save_webp(DIR_IMAGE . $new_image_webp);
}
}
    }

    foreach($size as $key => $value){
        $width = $key;
        $height = $value;


    $new_image_webp = 'cachewebp/' . $old. '-' . (int)$width . 'x' . (int)$height . '.webp';
    $old_image =  $old.'.'.$extension;


if (file_exists(DIR_IMAGE . $new_image_webp)) {
       
}else{ if (file_exists(DIR_IMAGE . $old_image)) {

$path = '';
$directories = explode('/', dirname($new_image_webp));

foreach ($directories as $directory) {
$path = $path . '/' . $directory;

if (!is_dir(DIR_IMAGE . $path)) {
@mkdir(DIR_IMAGE . $path, 0777);
}
}

$image_webp = new Image(DIR_IMAGE . $old_image);

$image_webp->resize($width, $height);

$image_webp->save_webp(DIR_IMAGE .$new_image_webp);



$path = '';

$directories = explode('/', dirname($new_image_webp));

foreach ($directories as $directory) {
$path = $path . '/' . $directory;

if (!is_dir(DIR_IMAGE . $path)) {
@mkdir(DIR_IMAGE . $path, 0777);
}
}

$image_webp = new Image(DIR_IMAGE . $old_image);
$image_webp->resize($width, $height);
$image_webp->save_webp(DIR_IMAGE . $new_image_webp);
}
}
}







    }
        }



?>
