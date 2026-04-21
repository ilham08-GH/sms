<?php

namespace PhpOffice\PhpSpreadsheet\Collection\Memory;

use DateInterval;
use Psr\SimpleCache\CacheInterface;

class SimpleCache1 implements CacheInterface
{
    private $cache = [];

    public function get($key, $default = null)
    {
        return $this->cache[$key] ?? $default;
    }

    public function set($key, $value, $ttl = null)
    {
        $this->cache[$key] = $value;
        return true;
    }

    public function delete($key)
    {
        unset($this->cache[$key]);
        return true;
    }

    public function clear()
    {
        $this->cache = [];
        return true;
    }

    public function getMultiple($keys, $default = null)
    {
        $result = [];
        foreach ($keys as $key) {
            $result[$key] = $this->get($key, $default);
        }
        return $result;
    }

    public function setMultiple($values, $ttl = null)
    {
        foreach ($values as $key => $value) {
            $this->set($key, $value);
        }
        return true;
    }

    public function deleteMultiple($keys)
    {
        foreach ($keys as $key) {
            $this->delete($key);
        }
        return true;
    }

    public function has($key)
    {
        return array_key_exists($key, $this->cache);
    }
}
