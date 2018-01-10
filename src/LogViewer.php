<?php

namespace vataman\logviewer;
use yii\base\Widget;

class LogViewer extends Widget
{
    /**
     * Render <script></script>.
     * @var bool
     */
    public $omitScriptTag = false;

    /**
     * @var array
     */
    private $_viewParams;

    public function init()
    {
        $this->_viewParams = [
            'omitScriptTag' => 123,
            'trackingId' => 123,
            'trackingConfig' => 124,
            'trackingFilename' => 123,
            'trackingDebugTraceInit' => 124,
            'plugins' => 124,
        ];
    }
    /**
     * @inheritdoc
     */
    public function run()
    {
        echo $this->render('index', $this->_viewParams);
    }
}