<?php

namespace Omnipay\Beanstream\Message;

/**
 * Purchase Request
 */
class XoffPurchaseRequest extends XoffAuthorizeRequest
{
    public function getTransactionType()
    {
        return 'sale';
    }
}
