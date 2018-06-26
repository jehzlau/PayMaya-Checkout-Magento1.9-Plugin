<?php

class PayMaya_Checkout_Block_Info extends Mage_Payment_Block_Info
{
    protected $_instructions;

    public function getInstructions()
    {
        if (is_null($this->_instructions)) {
            $this->_instructions = $this->getMethod()->getInstructions();
        }
        return $this->_instructions;
    }

    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('paymaya/info.phtml');
    }
}
