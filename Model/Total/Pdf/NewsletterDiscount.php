<?php

namespace AriyaInfoTech\NewsletterDiscountPro\Model\Total\Pdf;

class NewsletterDiscount extends
    \Magento\Sales\Model\Order\Pdf\Total\DefaultTotal
{
    /**
     *
     * @return mixed
     */
    public function getAmount()
    {
        return -$this->getSource()->getNewsletterDiscount();
    }
}