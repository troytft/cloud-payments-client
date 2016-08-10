<?php

namespace CloudPayments\Exception;

class PaymentException extends BaseException
{
    /**
     * @var string
     */
    protected $reason;

    /**
     * @var integer
     */
    protected $reasonCode;

    /**
     * @var string
     */
    protected $cardHolderMessage;

    public function __construct($response)
    {
        $this->reason = $response['Model']['Reason'];
        $this->reasonCode = $response['Model']['ReasonCode'];
        $this->cardHolderMessage = $response['Model']['CardHolderMessage'];

        parent::__construct($this->reason);
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @return integer
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * @return string
     */
    public function getCardHolderMessage()
    {
        return $this->cardHolderMessage;
    }
}