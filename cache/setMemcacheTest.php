<?php

require_once 'MemoryCache.php';

$fileCache = new MemoryCache();
$cached = $fileCache->set('cacheKey', array('1', '2', '3', '4', '5'), 10);

var_dump($cached);