<?php

require_once 'FileCache.php';

$fileCache = new FileCache();
$fileCache->set('1', array('1', '2', '3', '4'), 0);