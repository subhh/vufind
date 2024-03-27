<?php

namespace VuFind\Record\Cache;

interface RecordCacheStrategyInterface
{
    public function update (string $recordId, RecordCacheEntry $record) : void;
    public function get (string $recordId, string $source) : ?RecordCacheEntry;
}
