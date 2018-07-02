# Messaging SDK


- API version: 2.2.7
- Package version: 1.0.5

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/Telstra/MessagingAPI-SDK-php.git"
    }
  ],
  "require": {
    "Telstra/MessagingAPI-SDK-php": "*@master"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Telstra_Messaging\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string | 
$client_secret = 'client_secret_example'; // string | 
$grant_type = 'client_credentials'; // string | 

try {
    $result = $apiInstance->authToken($client_id, $client_secret, $grant_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authToken: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://tapi.telstra.com/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthenticationApi* | [**authToken**](docs/Api/AuthenticationApi.md#authtoken) | **POST** /oauth/token | Generate OAuth2 token
*MessagingApi* | [**getMMSStatus**](docs/Api/MessagingApi.md#getmmsstatus) | **GET** /messages/mms/{messageid}/status | Get MMS Status
*MessagingApi* | [**getSMSStatus**](docs/Api/MessagingApi.md#getsmsstatus) | **GET** /messages/sms/{messageId}/status | Get SMS Status
*MessagingApi* | [**retrieveMMSResponses**](docs/Api/MessagingApi.md#retrievemmsresponses) | **GET** /messages/mms | Retrieve MMS Responses
*MessagingApi* | [**retrieveSMSResponses**](docs/Api/MessagingApi.md#retrievesmsresponses) | **GET** /messages/sms | Retrieve SMS Responses
*MessagingApi* | [**sendMMS**](docs/Api/MessagingApi.md#sendmms) | **POST** /messages/mms | Send MMS
*MessagingApi* | [**sendSMS**](docs/Api/MessagingApi.md#sendsms) | **POST** /messages/sms | Send SMS
*ProvisioningApi* | [**createSubscription**](docs/Api/ProvisioningApi.md#createsubscription) | **POST** /messages/provisioning/subscriptions | Create Subscription
*ProvisioningApi* | [**deleteSubscription**](docs/Api/ProvisioningApi.md#deletesubscription) | **DELETE** /messages/provisioning/subscriptions | Delete Subscription
*ProvisioningApi* | [**getSubscription**](docs/Api/ProvisioningApi.md#getsubscription) | **GET** /messages/provisioning/subscriptions | Get Subscription


## Documentation For Models

 - [DeleteNumberRequest](docs/Model/DeleteNumberRequest.md)
 - [GetSubscriptionResponse](docs/Model/GetSubscriptionResponse.md)
 - [InboundPollResponse](docs/Model/InboundPollResponse.md)
 - [MMSContent](docs/Model/MMSContent.md)
 - [Message](docs/Model/Message.md)
 - [MessageSentResponse](docs/Model/MessageSentResponse.md)
 - [OAuthResponse](docs/Model/OAuthResponse.md)
 - [OutboundPollResponse](docs/Model/OutboundPollResponse.md)
 - [ProvisionNumberRequest](docs/Model/ProvisionNumberRequest.md)
 - [ProvisionNumberResponse](docs/Model/ProvisionNumberResponse.md)
 - [SendMmsRequest](docs/Model/SendMmsRequest.md)
 - [SendSMSRequest](docs/Model/SendSMSRequest.md)
 - [Status](docs/Model/Status.md)


## Documentation For Authorisation


## auth

- **Type**: OAuth
- **Flow**: application
- **Authorisation URL**: 
- **Scopes**: 
 - **NSMS**: NSMS


## Author




