<?php

namespace VuFind\Record\Cache;

use Interop\Container\ContainerInterface;

use Laminas\ServiceManager\Factory\FactoryInterface;

final class RecordCacheDbStrategyFactory implements FactoryInterface
{
    public function __invoke(
        ContainerInterface $container,
        $requestedName,
        array $options = null
    ) {
        if (!empty($options)) {
            throw new \Exception('Unexpected options passed to factory.');
        }

        $table = $container->get(\VuFind\Db\Table\PluginManager::class)->get('Record');
        return new RecordCacheDbStrategy($table);
    }
}
