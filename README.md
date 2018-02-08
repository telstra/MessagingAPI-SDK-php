The Telstra SMS Messaging API allows your applications to send and receive SMS text messages from Australia's leading network operator.  It also allows your application to track the delivery status of both sent and received SMS messages.


- API version: 2.2.4
- Package version: 1.0.2

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
      "url": "https://github.com/Telstra/Telstra_Messaging.git"
    }
  ],
  "require": {
    "Telstra/Telstra_Messaging": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
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
$client_id = "client_id_example"; // string | 
$client_secret = "client_secret_example"; // string | 
$grant_type = "client_credentials"; // string | 

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
*AuthenticationApi* | [**authToken**](docs/Api/AuthenticationApi.md#authtoken) | **POST** /oauth/token | Generate authentication token
*MessagingApi* | [**getMMSStatus**](docs/Api/MessagingApi.md#getmmsstatus) | **GET** /messages/mms/{messageid}/status | Get MMS Status
*MessagingApi* | [**getSMSStatus**](docs/Api/MessagingApi.md#getsmsstatus) | **GET** /messages/sms/{messageId}/status | Get SMS Status
*MessagingApi* | [**retrieveSMSResponses**](docs/Api/MessagingApi.md#retrievesmsresponses) | **GET** /messages/sms | Retrieve SMS Responses
*MessagingApi* | [**sendMMS**](docs/Api/MessagingApi.md#sendmms) | **POST** /messages/mms | Send MMS
*MessagingApi* | [**sendSMS**](docs/Api/MessagingApi.md#sendsms) | **POST** /messages/sms | Send SMS
*ProvisioningApi* | [**createSubscription**](docs/Api/ProvisioningApi.md#createsubscription) | **POST** /messages/provisioning/subscriptions | Create Subscription
*ProvisioningApi* | [**deleteSubscription**](docs/Api/ProvisioningApi.md#deletesubscription) | **DELETE** /messages/provisioning/subscriptions | Delete Subscription
*ProvisioningApi* | [**getSubscription**](docs/Api/ProvisioningApi.md#getsubscription) | **GET** /messages/provisioning/subscriptions | Get Subscription


## Documentation For Models

 - [ErrorError](docs/Model/ErrorError.md)
 - [ErrorErrorError](docs/Model/ErrorErrorError.md)
 - [InboundPollResponse](docs/Model/InboundPollResponse.md)
 - [MMSContent](docs/Model/MMSContent.md)
 - [Message](docs/Model/Message.md)
 - [MessageSentResponse](docs/Model/MessageSentResponse.md)
 - [MessageType](docs/Model/MessageType.md)
 - [OAuthRequest](docs/Model/OAuthRequest.md)
 - [OAuthResponse](docs/Model/OAuthResponse.md)
 - [OutboundPollResponse](docs/Model/OutboundPollResponse.md)
 - [ProvisionNumberRequest](docs/Model/ProvisionNumberRequest.md)
 - [ProvisionNumberResponse](docs/Model/ProvisionNumberResponse.md)
 - [SendMmsRequest](docs/Model/SendMmsRequest.md)
 - [SendSMSRequest](docs/Model/SendSMSRequest.md)
 - [Status](docs/Model/Status.md)


## Documentation For Authorization


## auth

- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: 
 - **NSMS**: NSMS


## Author




