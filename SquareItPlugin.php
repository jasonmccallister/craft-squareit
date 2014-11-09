<?php
namespace Craft;

class SquareItPlugin extends BasePlugin
{
    public function init()
    {
        parent::init();

        if (craft()->request->isCpRequest())
        {
            $this->_squareItCss();
        }
    }

    public function getName()
    {
        return Craft::t('Square It');
    }

    public function getVersion()
    {
        return '1.0';
    }

    public function getDeveloper()
    {
        return 'Let Coder';
    }

    public function getDeveloperUrl()
    {
        return 'http://www.letcoder.com';
    }

    private function _squareItCss()
    {
        craft()->templates->includeCssFile('resources/squareit/css/squareit.css');
    }
}
