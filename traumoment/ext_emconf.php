<?php

/**
 * Extension Manager/Repository config file for ext "traumoment".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'traumoment',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '11.0.0-11.0.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Traumoment\\Traumoment\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Marileen Stamer',
    'author_email' => 'marileen.stamer@gmail.com',
    'author_company' => 'Traumoment',
    'version' => '1.0.0',
];
