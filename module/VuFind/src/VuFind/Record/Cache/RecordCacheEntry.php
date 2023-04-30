<?php

namespace VuFind\Record\Cache;

final class RecordCacheEntry
{
    /** @var string */
    public $source;

    /** @var mixed[] */
    public $data;

    /** mixed[] */
    public function __construct (string $source, array $data)
    {
        $this->source = $source;
        $this->data = $data;
    }
}
