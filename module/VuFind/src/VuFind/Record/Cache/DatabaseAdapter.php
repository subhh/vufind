<?php

declare(strict_types=1);

namespace VuFind\Record\Cache;

use VuFind\Db\Table\Record;

final class DatabaseAdapter implements AdapterInterface
{
    /** @var Record */
    private $records;

    public function __construct (Record $records)
    {
        $this->records = $records;
    }

    public function put ($sourceId, $recordId, $data)
    {
        $this->records->updateRecord($recordId, $sourceId, $data);
    }

    public function get ($sourceId, $recordId)
    {
        if ($record = $this->records->findRecord($recordId, $sourceId)) {
            return $record['data'];
        }
        return false;
    }
}
