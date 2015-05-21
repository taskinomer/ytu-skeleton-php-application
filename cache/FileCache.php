<?php

require 'Cache.php';

class FileCache implements Cache
{

    private $cacheDir = "/tmp/";
    private $cacheKeyPrefix = "ch_";
    private $cacheKeySuffix = ".cache";


    function set($key, $value, $ttl)
    {
        $fileName = $this->getFileName($key);
        $file = fopen($fileName, "w+");
        $writed = fwrite($file, serialize($value));
        fclose($file);

        return ($writed > 0);
    }

    private function getFileName($key)
    {
        $encryptedCacheKey = $this->encryptCacheKey($key);
        $fileName = $this->cacheDir . $this->cacheKeyPrefix . $encryptedCacheKey . $this->cacheKeySuffix;

        return $fileName;
    }

    private function encryptCacheKey($key)
    {
        return sha1($key);
    }

    function get($key)
    {
        $fileName = $this->getFileName($key);
        $file = fopen($fileName, "r+");
        $content = fgets($file);

        if ($content === false) {
            return false;
        }

        return unserialize($content);
    }
}