<?php

namespace Omnipay\Beanstream\Message;

/**
 * Capture Request
 */
class XoffCaptureRequest extends XoffAuthorizeRequest
{
    public function getTransactionType()
    {
        return 'capture';
    }
}
