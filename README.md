# Getting started


The Telstra SMS Messaging API allows your applications to send and receive SMS text messages from Australia's leading network operator.

It also allows your application to track the delivery status of both sent and received SMS messages.


## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

### [For Windows Users Only] Configuring CURL Certificate Path in php.ini

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```ini
[curl]
; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
;curl.cainfo =
```

## Initialization

### Example

```php
<?php
require_once __DIR__.'/vendor/autoload.php';

use TelstraMessagingAPILib\Models\OAuthScopeEnum;

// Client configuration
$oAuthClientId = 'oAuthClientId';
$oAuthClientSecret = 'oAuthClientSecret';

$client = new TelstraMessagingAPILib\TelstraMessagingAPIClient($oAuthClientId, $oAuthClientSecret);

// obtain a new access token
$token = $client->auth()->authorize([OAuthScopeEnum::NSMS]);

// the client is now authorized; you can use $client to make endpoint calls
```

See the documentation at [Dev.Telstra.com](https://dev.telstra.com/content/messaging-api) for more information

# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [ProvisioningController](#provisioning_controller)
* [MessagingController](#messaging_controller)

## <a name="provisioning_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ProvisioningController") ProvisioningController

### Get singleton instance

The singleton instance of the ``` ProvisioningController ``` class can be accessed from the API Client.

```php
$provisioning = $client->getProvisioning();
```

### <a name="delete_subscription"></a>![Method: ](https://apidocs.io/img/method.png ".ProvisioningController.deleteSubscription") deleteSubscription

> Delete Subscription

#### Example Usage

```php

$provisioning->deleteSubscription();

```

See the documentation at [Dev.Telstra.com](https://dev.telstra.com/content/messaging-api) for more information

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid or missing request parameters |
| 401 | Invalid or no credentials passed in the request |
| 403 | Authorization credentials passed and accepted but account does not have permission |
| 404 | The requested URI does not exist |
| 0 | An internal error occurred when processing the request |



### <a name="create_subscription"></a>![Method: ](https://apidocs.io/img/method.png ".ProvisioningController.createSubscription") createSubscription

> Create Subscription

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | A JSON payload containing the required attributes |



#### Example Usage

```php
$body = new ProvisionNumberRequest();

$result = $provisioning->createSubscription($body);

```

See the documentation at [Dev.Telstra.com](https://dev.telstra.com/content/messaging-api) for more information

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid or missing request parameters |
| 401 | Invalid or no credentials passed in the request |
| 403 | Authorization credentials passed and accepted but account does not have permission |
| 404 | The requested URI does not exist |
| 0 | An internal error occurred when processing the request |



### <a name="get_subscription"></a>![Method: ](https://apidocs.io/img/method.png ".ProvisioningController.getSubscription") getSubscription

> Get Subscription


#### Example Usage

```php

$result = $provisioning->getSubscription();

```

See the documentation at [Dev.Telstra.com](https://dev.telstra.com/content/messaging-api) for more information

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid or missing request parameters |
| 401 | Invalid or no credentials passed in the request |
| 403 | Authorization credentials passed and accepted but account does not have permission |
| 404 | The requested URI does not exist |
| 0 | An internal error occurred when processing the request |



[Back to List of Controllers](#list_of_controllers)

## <a name="messaging_controller"></a>![Class: ](https://apidocs.io/img/class.png ".MessagingController") MessagingController

### Get singleton instance

The singleton instance of the ``` MessagingController ``` class can be accessed from the API Client.

```php
$messaging = $client->getMessaging();
```

### <a name="create_send_sms"></a>![Method: ](https://apidocs.io/img/method.png ".MessagingController.createSendSMS") createSendSMS

> Send SMS

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| payload |  ``` Required ```  | A JSON or XML payload containing the recipient's phone number and text message.

The recipient number should be in the format '04xxxxxxxx' where x is a digit |



#### Example Usage

```php
$payload = new SendSMSRequest();

$result = $messaging->createSendSMS($payload);

```

See the documentation at [Dev.Telstra.com](https://dev.telstra.com/content/messaging-api) for more information

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid or missing request parameters |
| 401 | Invalid or no credentials passed in the request |
| 403 | Authorization credentials passed and accepted but account does<br>not have permission |
| 404 | The requested URI does not exist |
| 405 | The requested resource does not support the supplied verb |
| 415 | API does not support the requested content type |
| 422 | The request is formed correctly, but due to some condition<br>the request cannot be processed e.g. email is required and it is not provided<br>in the request |
| 501 | The HTTP method being used has not yet been implemented for<br>the requested resource |
| 503 | The service requested is currently unavailable |
| 0 | An internal error occurred when processing the request |



### <a name="get_sms_status"></a>![Method: ](https://apidocs.io/img/method.png ".MessagingController.getSMSStatus") getSMSStatus

> Get SMS Status

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| messageId |  ``` Required ```  | Unique identifier of a message - it is the value returned from a previous POST call to https://api.telstra.com/v2/messages/sms |



#### Example Usage

```php
$messageId = 'messageId';

$result = $messaging->getSMSStatus($messageId);

```

See the documentation at [Dev.Telstra.com](https://dev.telstra.com/content/messaging-api) for more information

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid or missing request parameters |
| 401 | Invalid or no credentials passed in the request |
| 403 | Authorization credentials passed and accepted but account does<br>not have permission |
| 404 | The requested URI does not exist |
| 405 | The requested resource does not support the supplied verb |
| 415 | API does not support the requested content type |
| 422 | The request is formed correctly, but due to some condition<br>the request cannot be processed e.g. email is required and it is not provided<br>in the request |
| 501 | The HTTP method being used has not yet been implemented for<br>the requested resource |
| 503 | The service requested is currently unavailable |
| 0 | An internal error occurred when processing the request |



### <a name="create_send_mms"></a>![Method: ](https://apidocs.io/img/method.png ".MessagingController.createSendMMS") createSendMMS

> Send MMS

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | A JSON or XML payload containing the recipient's phone number
and MMS message.The recipient number should be in the format '04xxxxxxxx'
where x is a digit |



#### Example Usage

```php

$body = array(
	    'to' => '+61400000000', //either with + country code format
	    'body' => 'Hello World', 
	    'from' => '+61400000000', //number from provisioned line in + country code format
	    'validity' => 60, //
	    'scheduledDelivery' => 1,
	    'notifyURL' => '', //return url registration
	    'replyRequest' => false //
	);

$result = $messaging->createSendMMS($body);

```

See the documentation at [Dev.Telstra.com](https://dev.telstra.com/content/messaging-api) for more information

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid or missing request parameters |
| 401 | Invalid or no credentials passed in the request |
| 403 | Authorization credentials passed and accepted but account does<br>not have permission |
| 404 | The requested URI does not exist |
| 405 | The requested resource does not support the supplied verb |
| 415 | API does not support the requested content type |
| 422 | The request is formed correctly, but due to some condition<br>the request cannot be processed e.g. email is required and it is not provided<br>in the request |
| 501 | The HTTP method being used has not yet been implemented for<br>the requested resource |
| 503 | The service requested is currently unavailable |
| 0 | An internal error occurred when processing the request |



### <a name="get_mms_status"></a>![Method: ](https://apidocs.io/img/method.png ".MessagingController.getMMSStatus") getMMSStatus

> Get MMS Status

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| messageid |  ``` Required ```  | Unique identifier of a message - it is the value returned from
a previous POST call to https://api.telstra.com/v2/messages/mms |



#### Example Usage

```php
$messageid = 'messageid';

$result = $messaging->getMMSStatus($messageid);

```

See the documentation at [Dev.Telstra.com](https://dev.telstra.com/content/messaging-api) for more information

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid or missing request parameters |
| 401 | Invalid or no credentials passed in the request |
| 403 | Authorization credentials passed and accepted but account does<br>not have permission |
| 404 | The requested URI does not exist |
| 405 | The requested resource does not support the supplied verb |
| 415 | API does not support the requested content type |
| 422 | The request is formed correctly, but due to some condition<br>the request cannot be processed e.g. email is required and it is not provided<br>in the request |
| 501 | The HTTP method being used has not yet been implemented for<br>the requested resource |
| 503 | The service requested is currently unavailable |
| 0 | An internal error occurred when processing the request |



### <a name="retrieve_sms_responses"></a>![Method: ](https://apidocs.io/img/method.png ".MessagingController.retrieveSMSResponses") retrieveSMSResponses

> Retrieve SMS Responses

#### Example Usage

```php

$result = $messaging->retrieveSMSResponses();

```

See the documentation at [Dev.Telstra.com](https://dev.telstra.com/content/messaging-api) for more information

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid or missing request parameters |
| 401 | Invalid or no credentials passed in the request |
| 403 | Authorization credentials passed and accepted but account does<br>not have permission |
| 404 | The requested URI does not exist |
| 405 | The requested resource does not support the supplied verb |
| 415 | API does not support the requested content type |
| 422 | The request is formed correctly, but due to some condition<br>the request cannot be processed e.g. email is required and it is not provided<br>in the request |
| 501 | The HTTP method being used has not yet been implemented for<br>the requested resource |
| 503 | The service requested is currently unavailable |
| 0 | An internal error occurred when processing the request |



[Back to List of Controllers](#list_of_controllers)



