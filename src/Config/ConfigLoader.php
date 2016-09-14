<?php

namespace Tstelling\Converter\Config;

class ConfigLoader
{
    /**
     * Load the config file.
     *
     * @param  string $group
     * @return array
     */
    public function load($group)
    {
        $file = $this->getFilePath($group);

        if (! file_exists($file)) {
            return [];
        }

        return require $file;
    }

    /**
     * Returns the file path for the specified group.
     *
     * @param  string $group
     * @return string
     */
    private function getFilePath($group)
    {
        return __DIR__ . '/../../config/' . $group . '.php';
    }
}