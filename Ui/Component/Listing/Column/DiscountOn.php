<?php


namespace AriyaInfoTech\NewsletterDiscountPro\Ui\Component\Listing\Column;


class DiscountOn implements
    \Magento\Framework\Data\OptionSourceInterface
{
    public function toOptionArray()
    {
        return [
            ['label' => __('Subtotal'), 'value' => \AriyaInfoTech\NewsletterDiscountPro\Model\Program::SUBTOTAL],
            ['label' => __('Grand Total'), 'value' => \AriyaInfoTech\NewsletterDiscountPro\Model\Program::GRANDTOTAL],
        ];
    }
}