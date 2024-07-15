<?php

declare(strict_types=1);

namespace VuFind\Record\Cache;

use Memcached;

final class MemcachedAdapter implements AdapterInterface
{
    /** @var Memcached */
    private $memcache;

    public function __construct (Memcached $memcache)
    {
        $this->memcache = $memcache;
    }

    public function put ($sourceId, $recordId, $data)
    {
        $key = $sourceId . '|' . $recordId;
        $this->memcache->set($key, $data);
    }

    public function get ($sourceId, $recordId)
    {
        $key = $sourceId . '|' . $recordId;
        return $this->memcache->get($key);
    }

}
