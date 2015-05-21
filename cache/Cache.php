<?php

interface Cache
{
    function set($key, $value, $ttl);

    function get($key);
}