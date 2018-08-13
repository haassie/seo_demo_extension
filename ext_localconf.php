<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Haassie.SeoDemoExtension',
    'TitleTagDemo1',
    [
        'TitleTag' => 'demo1',
    ],
    [
    ]
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Haassie.SeoDemoExtension',
    'TitleTagDemo2',
    [
        'TitleTag' => 'demo2',
    ],
    [
    ]
);


$titleTagProviderRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\TitleTag\TitleTagProviderRegistry::class);
$titleTagProviderRegistry->registerProvider(
    'demo1',
    \Haassie\SeoDemoExtension\TitleTagProvider\Demo1TitleTagProvider::class
);

$titleTagProviderRegistry->registerProvider(
    'demo2',
    \Haassie\SeoDemoExtension\TitleTagProvider\Demo2TitleTagProvider::class
);
