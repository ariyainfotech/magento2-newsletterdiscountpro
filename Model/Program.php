<?php


namespace AriyaInfoTech\NewsletterDiscountPro\Model;


class Program extends
    \Magento\Framework\Model\AbstractModel
{
    const SUBTOTAL   = 'subtotal';
    const GRANDTOTAL = 'grandtotal';
    const FIXED      = 'fixed';
    const PERCENT    = 'percent';
    protected $_eventObject = 'newsletterdiscountpro_program';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('AriyaInfoTech\NewsletterDiscountPro\Model\ResourceModel\Program');
    }

}