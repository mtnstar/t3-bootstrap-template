<?php

/**
 * Extension Manager/Repository config file for ext "mountain_star_bootstrap_template".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Mountain Star Bootstrap Template',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '13.0.0-14.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'MountainStar\\MountainStarBootstrapTemplate\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Mountain Star',
    'author_email' => 'p@mtnstar.net',
    'author_company' => 'Mountain Star',
    'version' => '1.0.0',
];
