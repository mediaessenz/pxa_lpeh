<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Local Page Error Handler',
    'description' => 'Speeds up error page handling and frees up PHP workers by loading local page content without issuing an external HTTP request.',
    'category' => 'fe',
    'author' => 'Pixelant',
    'author_email' => 'info@pixelant.net',
    'author_company' => 'Pixelant',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.2.0',
    'constraints' => [
        'depends' => [
            'typo3'  => '9.5.0-12.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
