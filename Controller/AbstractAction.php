<?php

namespace AriyaInfoTech\NewsletterDiscountPro\Controller;

abstract class AbstractAction extends
    \Magento\Framework\App\Action\Action
{
    /**
     * @var \AriyaInfoTech\NewsletterDiscountPro\Model\ProgramFactory
     */
    protected $programFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \AriyaInfoTech\NewsletterDiscountPro\Model\ProgramFactory $programFactory
    ) {
        parent::__construct($context);
        $this->programFactory = $programFactory;
    }
}