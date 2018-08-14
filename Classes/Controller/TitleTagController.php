<?php
namespace Haassie\SeoDemoExtension\Controller;

use Haassie\SeoDemoExtension\TitleTagProvider\Demo1TitleTagProvider;
use Haassie\SeoDemoExtension\TitleTagProvider\Demo2TitleTagProvider;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class TitleTagController extends ActionController
{
    public function demo1Action()
    {
        $title = 'Demo 1:' . date('d-m-Y H:i:s');
//        $GLOBALS['TSFE']->altPageTitle = 'alt-' . $title;
        $provider = GeneralUtility::makeInstance(Demo1TitleTagProvider::class);
        $provider->setTitle($title);

        $this->view->assign('action', 'demo1');
    }

    public function demo2Action()
    {
        $title = 'Demo 2:' . date('d-m-Y H:i:s');
//        $GLOBALS['TSFE']->altPageTitle = 'alt-' . $title;

        $provider = GeneralUtility::makeInstance(Demo2TitleTagProvider::class);
        $provider->setTitle($title);

        $this->view->assign('action', 'demo2');
    }
}
