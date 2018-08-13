<?php
namespace Haassie\SeoDemoExtension\Controller;

use Haassie\SeoDemoExtension\TitleTagProvider\Demo1TitleTagProvider;
use Haassie\SeoDemoExtension\TitleTagProvider\Demo2TitleTagProvider;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class TitleTagController extends ActionController
{
    public function demo1Action()
    {
        $provider = GeneralUtility::makeInstance(Demo1TitleTagProvider::class);
        $provider->setTitle('Demo 1');

        $this->view->assign('action', 'demo1');
    }

    public function demo2Action()
    {
        $provider = GeneralUtility::makeInstance(Demo2TitleTagProvider::class);
        $provider->setTitle('Demo 2');

        $this->view->assign('action', 'demo2');
    }
}
