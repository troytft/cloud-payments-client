<?php

namespace CloudPayments\Model;

class Required3DS
{
    /**
     * @var integer
     */
    protected $transactionId;

    /**
     * @var string
     */
    protected $token;

    /**
     * @var string
     */
    protected $url;

    /**
     * @return integer
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param integer $value
     * @return $this
     */
    public function setTransactionId($value)
    {
        $this->transactionId = $value;

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
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setUrl($value)
    {
        $this->url = $value;

        return $this;
    }

    /**
     * @param $params
     * @return Required3DS
     */
    public static function fromArray($params)
    {
        $model = new Required3DS();
        $model->setTransactionId($params['TransactionId']);
        $model->setToken($params['PaReq']);
        $model->setUrl($params['AcsUrl']);

        return $model;
    }
}