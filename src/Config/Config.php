<?php

namespace Tstelling\Converter\Config;

class Config
{
    /**
     * Returns a value from the config file.
     *
     * @param  string $key
     * @return mixed
     */
    public static function get($key)
    {
        list($group, $key) = explode('.', $key, 2);

        $config = (new ConfigLoader())->load($group);

        return isset($config[$key]) ? $config[$key] : null;
    }
}