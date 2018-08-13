<?php
$EM_CONF['seo_demo_extension'] = [
    'title' => 'TYPO3 CMS SEO features - Demo extension',
    'description' => '',
    'category' => 'fe',
    'state' => 'stable',
    'author' => 'Richard Haeser',
    'author_email' => 'richardhaeser@gmail.com',
    'version' => '1.0.0',
    'autoload' => array(
        'psr-4' => array('Haassie\\SeoDemoExtension\\' => 'Classes')
    ),
    'constraints' => [
        'depends' => [],
        'conflicts' => [],
        'suggests' => []
    ],
];
