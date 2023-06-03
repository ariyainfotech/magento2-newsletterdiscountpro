<?php

namespace AriyaInfoTech\NewsletterDiscountPro\Model\ResourceModel\Program;

class Collection extends
    \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('AriyaInfoTech\NewsletterDiscountPro\Model\Program', 'AriyaInfoTech\NewsletterDiscountPro\Model\ResourceModel\Program');
    }
}