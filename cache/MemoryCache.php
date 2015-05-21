<?php

include 'Cache.php';

class MemoryCache extends Memcache implements Cache
{

    public function __construct()
    {
        parent::addserver('127.0.0.1');
    }


    function set($key, $value, $ttl)
    {
        return parent::set($key, $value, null, $ttl);
    }

    function get($key)
    {
        return parent::get($key);
    }
}