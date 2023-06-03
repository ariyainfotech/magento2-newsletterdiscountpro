<?php


namespace AriyaInfoTech\NewsletterDiscountPro\Ui\Component\Listing\Column;


class DiscountType implements
    \Magento\Framework\Data\OptionSourceInterface
{
    public function toOptionArray()
    {
        return [
            ['label' => __('Fixed'), 'value' => \AriyaInfoTech\NewsletterDiscountPro\Model\Program::FIXED],
            ['label' => __('Percentage'), 'value' => \AriyaInfoTech\NewsletterDiscountPro\Model\Program::PERCENT],
        ];
    }
}