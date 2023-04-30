<?php

namespace VuFind\Record\Cache;

final class RecordCacheEntry
{
    /** @var string */
    public $source;

    /** @var mixed */
    public $data;

    /** mixed[] */
    public function __construct (string $source, $data)
    {
        $this->source = $source;
        $this->data = $data;
    }
}
