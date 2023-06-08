<?php

namespace AmazonPaymentServicesSdk\AmazonPaymentServices\Model\Maintenance;

use AmazonPaymentServicesSdk\AmazonPaymentServices\Core\APSConstants;
use AmazonPaymentServicesSdk\AmazonPaymentServices\Model\PaymentTypeAdapterApi;

class PaymentCheckStatusModel extends PaymentTypeAdapterApi
{
    public string $paymentType = APSConstants::PAYMENT_TYPE_CREDIT_CARD;
    public string $integrationType = APSConstants::INTEGRATION_TYPE_STANDARD;

    public string $command = APSConstants::PAYMENT_COMMAND_CHECK_STATUS;

    public array $requiredParameters = [
        'query_command',
        'merchant_reference',
        'language',
    ];

    public array $optionalParameters = [
        'fort_id'
    ];
}
