<?php

namespace Yo\Controller\Component;

use Cake\Controller\Component;
use Cake\Core\Configure;
use Ivory\HttpAdapter\CurlHttpAdapter;
use Yo\Yo;

class YoComponent extends Component
{
    protected $_defaultConfig = [];
    protected $apiKey;

    /**
     * {@inheritDoc}
     */
    public function initialize(array $config)
    {
        $this->apiKey = Configure::read('Yo.apiKey');
    }

    /**
     * @return \Yo\Yo
     */
    public function getYo()
    {
        return new Yo(new CurlHttpAdapter, $this->apiKey);
    }
}
