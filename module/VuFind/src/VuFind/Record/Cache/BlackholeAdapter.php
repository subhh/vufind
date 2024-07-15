<?php

declare(strict_types=1);

namespace VuFind\Record\Cache;

final class BlackholeAdapter implements AdapterInterface
{
    public function put ($sourceId, $recordId, $data)
    {
    }

    public function get ($sourceId, $recordId)
    {
        return false;
    }
}
