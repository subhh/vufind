<?php

namespace VuFind\Record\Cache;

use VuFind\Db\Table\Record;

final class RecordCacheDbStrategy implements RecordCacheStrategyInterface
{
    /** @var Record */
    private $recordTable;

    public function __construct (Record $recordTable)
    {
        $this->recordTable = $recordTable;
    }

    public function update (string $recordId, RecordCacheEntry $record) : void
    {
        $this->recordTable->updateRecord($recordId, $record->source, $record->data);
    }

    public function get (string $recordId, string $source) : ?RecordCacheEntry
    {
        if ($record = $this->recordTable->findRecord($recordId, $source)) {
            return new RecordCacheEntry($record['source'], $record['data']);
        }
        return null;
    }
}
