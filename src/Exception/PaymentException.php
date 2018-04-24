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
        $this->reason = null;
        $this->reasonCode = null;
        $this->cardHolderMessage = null;

        if(isset($response['Model'])) {
            if(isset($response['Model']['Reason'])) $this->reason = $response['Model']['Reason'];
            if(isset($response['Model']['ReasonCode'])) $this->reasonCode = $response['Model']['ReasonCode'];
            if(isset($response['Model']['CardHolderMessage'])) $this->cardHolderMessage = $response['Model']['CardHolderMessage'];
        }

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