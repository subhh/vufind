<?php

namespace VuFind\Record\Cache;

interface RecordCacheStrategyInterface
{
    public function update ($recordId, RecordCacheEntry $record) : void;
    public function get ($recordId, $source) : ?RecordCacheEntry;
}
