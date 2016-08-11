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
        $transaction->setInvoiceId($params['InvoiceId']);
        $transaction->setAccountId(['AccountId']);
        $transaction->setEmail($params['Email']);
        $transaction->setDescription($params['Description']);
        $transaction->setData((array) $params['JsonData']);
        $transaction->setCreatedAt(new \DateTime($params['CreatedDateIso']));
        $transaction->setAuthorizedAt(new \DateTime($params['AuthDateIso']));
        $transaction->setConfirmedAt(new \DateTime($params['ConfirmDateIso']));
        $transaction->setAuthCode($params['AuthCode']);
        $transaction->setTestMode($params['TestMode']);
        $transaction->setIpAddress($params['IpAddress']);
        $transaction->setIpCountry($params['IpCountry']);
        $transaction->setIpCity($params['IpCity']);
        $transaction->setIpRegion($params['IpRegion']);
        $transaction->setIpDistrict($params['IpDistrict']);
        $transaction->setIpLatitude($params['IpLatitude']);
        $transaction->setIpLongitude($params['IpLongitude']);
        $transaction->setCardFirstSix($params['CardFirstSix']);
        $transaction->setCardLastFour($params['CardLastFour']);
        $transaction->setCardExpiredMonth(explode('/', $params['CardExpDate'])[0]);
        $transaction->setCardExpiredYear(substr(date('Y'), 0, 2) . explode('/', $params['CardExpDate'])[1]);
        $transaction->setCardType(strtolower($params['CardType']));
        $transaction->setCardTypeCode($params['CardTypeCode']);
        $transaction->setIssuer($params['Issuer']);
        $transaction->setIssuerBankCountry($params['IssuerBankCountry']);
        $transaction->setStatus(strtolower($params['Status']));
        $transaction->setStatusCode($params['StatusCode']);
        $transaction->setReason($params['Reason']);
        $transaction->setReasonCode($params['ReasonCode']);
        $transaction->setCardHolderMessage($params['CardHolderMessage']);
        $transaction->setCardHolderName($params['Name']);
        $transaction->setToken($params['Token']);

        return $transaction;
    }
}