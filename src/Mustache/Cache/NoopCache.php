<?php

class Mustache_Cache_NoopCache extends Mustache_Cache_AbstractCache
{
    public function load($key)
    {
        return false;
    }

    public function cache($key, $compiled)
    {
        $this->log(
            Mustache_Logger::WARNING,
            'Template cache disabled, evaluating class at runtime',
            array()
        );
        eval("?>".$compiled);
    }
}
