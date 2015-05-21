<?php

require_once 'MemoryCache.php';

$memcache = new MemoryCache();
$content = $memcache->get('cacheKey');
var_dump($content);