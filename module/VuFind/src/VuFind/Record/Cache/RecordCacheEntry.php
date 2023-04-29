<?php

namespace VuFind\Record\Cache;

final class RecordCacheEntry
{
    /** @var string */
    public $source;

    /** @var string */
    public $data;

    public function __construct (string $source, string $data)
    {
        $this->source = $source;
        $this->data = $data;
    }
}
