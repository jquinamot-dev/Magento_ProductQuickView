<?php
namespace Jeland\QuickView\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Config
{
    const XML_PATH_ENABLED = 'quickview/general/enabled';
    const XML_PATH_MODAL_TITLE = 'quickview/general/modal_title';

    protected $scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function isEnabled()
    {
        return $this->scopeConfig->isSetFlag(self::XML_PATH_ENABLED);
    }

    public function getModalTitle()
    {
        return $this->scopeConfig->getValue(self::XML_PATH_MODAL_TITLE);
    }
}
