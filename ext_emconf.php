<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'groupdelegation',
    'description' => 'Allows generating Sub-Admin be_user by groups which can handle access of other be_user by groups',
    'category' => 'be',
    'author' => 'Sebastian Mueller, Bernhard Maier, Franz Kugelmann, Marcus Schwemer, Andreas Sommer',
    'author_email' => 'sebastian.mueller@abezet.de, maier@tum.de, franz.kugelmann@elementare-teilchen.de, marcus@schwemer.de, a.sommer@tum.de',
    'author_company' => 'A.BE.ZET GmbH, TU München, Elementare Teilchen GmbH, in2code GmbH',
    'conflicts' => '',
    'priority' => '',
    'module' => 'mod1',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => 0,
    'createDirs' => '',
    'modify_tables' => '',
    'clearCacheOnLoad' => 0,
    'lockType' => '',
    'version' => '3.1.1',
    'constraints' => [
        'depends' => [
            'typo3' => '8.4.0 - 8.99.99',
            'php' => '7.0.0-7.2.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
    'suggests' => [
    ],
];
