<?php
namespace Jeland\QuickView\Block;

use Magento\Framework\View\Element\Template;
use Jeland\QuickView\Model\Config;

class QuickView extends Template
{
    protected $config;

    public function __construct(
        Template\Context $context,
        Config $config,
        array $data = []
    ) {
        $this->config = $config;
        parent::__construct($context, $data);
    }

    public function isEnabled()
    {
        return $this->config->isEnabled();
    }

    public function getModalTitle()
    {
        return $this->config->getModalTitle();
    }
}
