<?php

namespace CloudPayments\Model;

class Transaction
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var float
     */
    protected $amount;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var integer
     */
    protected $currencyCode;

    /**
     * @var string
     */
    protected $invoiceId;

    /**
     * @var string
     */
    protected $accountId;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var array
     */
    protected $data;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var \DateTime
     */
    protected $authorizedAt;

    /**
     * @var \DateTime
     */
    protected $confirmedAt;

    /**
     * @var string
     */
    protected $authCode;

    /**
     * @var boolean
     */
    protected $testMode;

    /**
     * @var string
     */
    protected $ipAddress;

    /**
     * @var string
     */
    protected $ipCountry;

    /**
     * @var string
     */
    protected $ipCity;

    /**
     * @var string
     */
    protected $ipRegion;

    /**
     * @var string
     */
    protected $ipDistrict;

    /**
     * @var float
     */
    protected $ipLatitude;

    /**
     * @var float
     */
    protected $ipLongitude;

    /**
     * @var string
     */
    protected $cardFirstSix;

    /**
     * @var string
     */
    protected $cardLastFour;

    /**
     * @var integer
     */
    protected $cardExpiredMonth;

    /**
     * @var integer
     */
    protected $cardExpiredYear;

    /**
     * @var string
     */
    protected $cardType;

    /**
     * @var integer
     */
    protected $cardTypeCode;

    /**
     * @var string
     */
    protected $issuer;

    /**
     * @var string
     */
    protected $issuerBankCountry;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var integer
     */
    protected $statusCode;

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

    /**
     * @var string
     */
    protected $cardHolderName;

    /**
     * @var string
     */
    protected $token;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $value
     * @return $this
     */
    public function setAmount($value)
    {
        $this->amount = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setCurrency($value)
    {
        $this->currency = $value;

        return $this;
    }

    /**
     * @return integer
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @param integer $value
     * @return $this
     */
    public function setCurrencyCode($value)
    {
        $this->currencyCode = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setInvoiceId($value)
    {
        $this->invoiceId = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setAccountId($value)
    {
        $this->accountId = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setEmail($value)
    {
        $this->email = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setDescription($value)
    {
        $this->description = $value;

        return $this;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $value
     * @return $this
     */
    public function setData($value)
    {
        $this->data = $value;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $value
     * @return $this
     */
    public function setCreatedAt($value)
    {
        $this->createdAt = $value;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAuthorizedAt()
    {
        return $this->authorizedAt;
    }

    /**
     * @param \DateTime $value
     * @return $this
     */
    public function setAuthorizedAt($value)
    {
        $this->authorizedAt = $value;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getConfirmedAt()
    {
        return $this->confirmedAt;
    }

    /**
     * @param \DateTime $value
     * @return $this
     */
    public function setConfirmedAt($value)
    {
        $this->confirmedAt = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthCode()
    {
        return $this->authCode;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setAuthCode($value)
    {
        $this->authCode = $value;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isTestMode()
    {
        return $this->testMode;
    }

    /**
     * @param boolean $value
     * @return $this
     */
    public function setTestMode($value)
    {
        $this->testMode = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setIpAddress($value)
    {
        $this->ipAddress = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getIpCountry()
    {
        return $this->ipCountry;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setIpCountry($value)
    {
        $this->ipCountry = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getIpCity()
    {
        return $this->ipCity;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setIpCity($value)
    {
        $this->ipCity = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getIpRegion()
    {
        return $this->ipRegion;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setIpRegion($value)
    {
        $this->ipRegion = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getIpDistrict()
    {
        return $this->ipDistrict;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setIpDistrict($value)
    {
        $this->ipDistrict = $value;

        return $this;
    }

    /**
     * @return float
     */
    public function getIpLatitude()
    {
        return $this->ipLatitude;
    }

    /**
     * @param float $value
     * @return $this
     */
    public function setIpLatitude($value)
    {
        $this->ipLatitude = $value;

        return $this;
    }

    /**
     * @return float
     */
    public function getIpLongitude()
    {
        return $this->ipLongitude;
    }

    /**
     * @param float $value
     * @return $this
     */
    public function setIpLongitude($value)
    {
        $this->ipLongitude = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardFirstSix()
    {
        return $this->cardFirstSix;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setCardFirstSix($value)
    {
        $this->cardFirstSix = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardLastFour()
    {
        return $this->cardLastFour;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setCardLastFour($value)
    {
        $this->cardLastFour = $value;

        return $this;
    }

    /**
     * @return integer
     */
    public function getCardExpiredMonth()
    {
        return $this->cardExpiredMonth;
    }

    /**
     * @param integer $value
     * @return $this
     */
    public function setCardExpiredMonth($value)
    {
        $this->cardExpiredMonth = $value;

        return $this;
    }

    /**
     * @return integer
     */
    public function getCardExpiredYear()
    {
        return $this->cardExpiredYear;
    }

    /**
     * @param integer $value
     * @return $this
     */
    public function setCardExpiredYear($value)
    {
        $this->cardExpiredYear = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setCardType($value)
    {
        $this->cardType = $value;

        return $this;
    }

    /**
     * @return integer
     */
    public function getCardTypeCode()
    {
        return $this->cardTypeCode;
    }

    /**
     * @param integer $value
     * @return $this
     */
    public function setCardTypeCode($value)
    {
        $this->cardTypeCode = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setIssuer($value)
    {
        $this->issuer = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getIssuerBankCountry()
    {
        return $this->issuerBankCountry;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setIssuerBankCountry($value)
    {
        $this->issuerBankCountry = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setStatus($value)
    {
        $this->status = $value;

        return $this;
    }

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param integer $value
     * @return $this
     */
    public function setStatusCode($value)
    {
        $this->statusCode = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setReason($value)
    {
        $this->reason = $value;

        return $this;
    }

    /**
     * @return integer
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * @param integer $value
     * @return $this
     */
    public function setReasonCode($value)
    {
        $this->reasonCode = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardHolderMessage()
    {
        return $this->cardHolderMessage;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setCardHolderMessage($value)
    {
        $this->cardHolderMessage = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardHolderName()
    {
        return $this->cardHolderName;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setCardHolderName($value)
    {
        $this->cardHolderName = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setToken($value)
    {
        $this->token = $value;

        return $this;
    }

    /**
     * @param $params
     * @return Transaction
     */
    public static function fromArray($params)
    {
        $transaction = new Transaction();

        $transaction->setId($params['TransactionId']);
        $transaction->setAmount($params['Amount']);
        $transaction->setCurrency($params['Currency']);
        $transaction->setCurrencyCode($params['CurrencyCode']);
        $transaction->setCardFirstSix($params['CardFirstSix']);
        $transaction->setCardLastFour($params['CardLastFour']);
        $transaction->setCardExpiredMonth(explode('/', $params['CardExpDate'])[0]);
        $transaction->setCardExpiredYear(substr(date('Y'), 0, 2) . explode('/', $params['CardExpDate'])[1]);

        if (isset($params['InvoiceId'])) {
            $transaction->setInvoiceId($params['InvoiceId']);
        }
        
        if (isset($params['AccountId'])) {
            $transaction->setAccountId($params['AccountId']);
        }

        if (isset($params['Email'])) {
            $transaction->setEmail($params['Email']);
        }

        if (isset($params['Description'])) {
            $transaction->setDescription($params['Description']);
        }

        if (isset($params['JsonData'])) {
            $transaction->setData((array)$params['JsonData']);
        }

        if (isset($params['CreatedDateIso'])) {
            $transaction->setCreatedAt(new \DateTime($params['CreatedDateIso']));
        }

        if (isset($params['AuthDateIso'])) {
            $transaction->setAuthorizedAt(new \DateTime($params['AuthDateIso']));
        }

        if (isset($params['ConfirmDateIso'])) {
            $transaction->setConfirmedAt(new \DateTime($params['ConfirmDateIso']));
        }

        if (isset($params['AuthCode'])) {
            $transaction->setAuthCode($params['AuthCode']);
        }

        if (isset($params['TestMode'])) {
            $transaction->setTestMode($params['TestMode']);
        }

        if (isset($params['IpAddress'])) {
            $transaction->setIpAddress($params['IpAddress']);
        }

        if (isset($params['IpCountry'])) {
            $transaction->setIpCountry($params['IpCountry']);
        }

        if (isset($params['IpCity'])) {
            $transaction->setIpCity($params['IpCity']);
        }

        if (isset($params['IpRegion'])) {
            $transaction->setIpRegion($params['IpRegion']);
        }

        if (isset($params['IpDistrict'])) {
            $transaction->setIpDistrict($params['IpDistrict']);
        }

        if (isset($params['IpLatitude'])) {
            $transaction->setIpLatitude($params['IpLatitude']);
        }

        if (isset($params['IpLongitude'])) {
            $transaction->setIpLongitude($params['IpLongitude']);
        }

        if (isset($params['CardType'])) {
            $transaction->setCardType(strtolower($params['CardType']));
        }

        if (isset($params['CardTypeCode'])) {
            $transaction->setCardTypeCode($params['CardTypeCode']);
        }

        if (isset($params['Issuer'])) {
            $transaction->setIssuer($params['Issuer']);
        }

        if (isset($params['IssuerBankCountry'])) {
            $transaction->setIssuerBankCountry($params['IssuerBankCountry']);
        }

        if (isset($params['Status'])) {
            $transaction->setStatus(strtolower($params['Status']));
        }

        if (isset($params['StatusCode'])) {
            $transaction->setStatusCode($params['StatusCode']);
        }

        if (isset($params['Reason'])) {
            $transaction->setReason($params['Reason']);
        }

        if (isset($params['ReasonCode'])) {
            $transaction->setReasonCode($params['ReasonCode']);
        }

        if (isset($params['CardHolderMessage'])) {
            $transaction->setCardHolderMessage($params['CardHolderMessage']);
        }

        if (isset($params['Name'])) {
            $transaction->setCardHolderName($params['Name']);
        }

        if (isset($params['Token'])) {
            $transaction->setToken($params['Token']);
        }

        return $transaction;
    }
}