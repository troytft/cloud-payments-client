# CloudPayments PHP Client Library

Клиент для платежного сервиса [CloudPayments](http://cloudpayments.ru/).
Позволяет обращаться к [API CloudPayments](http://cloudpayments.ru/Docs/Api) из кода на PHP.

## Установка
```bash
composer require troytft/cloud-payments-client
```

## Использование
```php
$client = new \CloudPayments\Manager($publicKey, $privateKey);
$transaction = $client->chargeToken($amount, $currency, $accountId, $cardToken);

print $transaction->getId();
```