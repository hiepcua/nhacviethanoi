<?php
session_start();
define('incl_path','../../global/libs/');
define('libs_path','../../libs/');
require_once(incl_path.'gfconfig.php');
require_once(incl_path.'gfinit.php');
require_once(incl_path.'gffunc.php');
require_once(incl_path.'gffunc_user.php');
require_once(libs_path.'cls.mysql.php');
require_once('functions.php');

listDir(MEDIA_HOST,2);

// function getDirContents($dir, &$results = array()) {
//     $files = scandir($dir);

//     foreach ($files as $key => $value) {
//         $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
//         if (!is_dir($path)) {
//             $results[] = $path;
//         } else if ($value != "." && $value != "..") {
//             getDirContents($path, $results);
//             $results[] = $path;
//         }
//     }

//     return $results;
// }

// var_dump(getDirContents(MEDIA_HOST));