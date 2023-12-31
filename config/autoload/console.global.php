<?php

return [
    'dependencies' => [
        'invokables' => [
            '\\Qore\\Console\\Commands\\ProjectManager',
            '\\Qore\\Console\\Commands\\ClearCache',
            '\\Qore\\Console\\Commands\\OrmInpect',
            '\\Qore\\SynapseManager\\Command\\CodeBuilder',
            '\\Qore\\SynapseManager\\Command\\DataSynchronizer',
            '\\Qore\\SynapseManager\\Plugin\\Indexer\\IndexerCommand',
            '\\Qore\\SynapseManager\\Plugin\\Indexer\\IndexerProcess',
        ],
    ],
    'console' => [
        'commands' => [
            '\\Qore\\Console\\Commands\\ProjectManager',
            '\\Qore\\Console\\Commands\\ClearCache',
            '\\Qore\\Console\\Commands\\OrmInpect',
            '\\Qore\\SynapseManager\\Command\\CodeBuilder',
            '\\Qore\\SynapseManager\\Command\\DataSynchronizer',
            '\\Qore\\SynapseManager\\Plugin\\Indexer\\IndexerCommand',
            '\\Qore\\SynapseManager\\Plugin\\Indexer\\IndexerProcess',
        ],
    ],
];
