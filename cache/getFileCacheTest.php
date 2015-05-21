<?php

require_once 'FileCache.php';

$fileCache = new FileCache();
$content = $fileCache->get('1');
print_r($content);