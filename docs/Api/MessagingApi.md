# Telstra_Messaging\MessagingApi

All URIs are relative to *https://tapi.telstra.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMMSStatus**](MessagingApi.md#getMMSStatus) | **GET** /messages/mms/{messageid}/status | Get MMS Status
[**getSMSStatus**](MessagingApi.md#getSMSStatus) | **GET** /messages/sms/{messageId}/status | Get SMS Status
[**retrieveSMSResponses**](MessagingApi.md#retrieveSMSResponses) | **GET** /messages/sms | Retrieve SMS Responses
[**sendMMS**](MessagingApi.md#sendMMS) | **POST** /messages/mms | Send MMS
[**sendSMS**](MessagingApi.md#sendSMS) | **POST** /messages/sms | Send SMS


# **getMMSStatus**
> \Telstra_Messaging\Model\OutboundPollResponse[] getMMSStatus($messageid)

Get MMS Status

Get MMS Status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth
$config = Telstra_Messaging\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Telstra_Messaging\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$messageid = "messageid_example"; // string | Unique identifier of a message - it is the value returned from a previous POST call to https://api.telstra.com/v2/messages/mms

try {
    $result = $apiInstance->getMMSStatus($messageid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->getMMSStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **messageid** | **string**| Unique identifier of a message - it is the value returned from a previous POST call to https://api.telstra.com/v2/messages/mms |

### Return type

[**\Telstra_Messaging\Model\OutboundPollResponse[]**](../Model/OutboundPollResponse.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSMSStatus**
> \Telstra_Messaging\Model\OutboundPollResponse[] getSMSStatus($message_id)

Get SMS Status

If no notification URL has been specified, it is possible to poll for the message status. <pre><code class=\"language-sh\">  #!/bin/bash   #!/bin/bash   # Example of how to poll for a message status   AccessToken=\"Consumer Access Token\"   MessageId=\"Previous supplied Message Id, URL encoded\"   curl -X get -H \"Authorization: Bearer $AccessToken\" \\     -H \"Content-Type: application/json\" \\     \"https://tapi.telstra.com/v2/messages/sms/$MessageId\" </code></pre>  Note that the `MessageId` that appears in the URL must be URL encoded, just copying the `MessageId` as it was supplied when submitting the message may not work.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth
$config = Telstra_Messaging\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Telstra_Messaging\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = "message_id_example"; // string | Unique identifier of a message - it is the value returned from a previous POST call to https://api.telstra.com/v2/messages/sms.

try {
    $result = $apiInstance->getSMSStatus($message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->getSMSStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_id** | **string**| Unique identifier of a message - it is the value returned from a previous POST call to https://api.telstra.com/v2/messages/sms. |

### Return type

[**\Telstra_Messaging\Model\OutboundPollResponse[]**](../Model/OutboundPollResponse.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveSMSResponses**
> \Telstra_Messaging\Model\InboundPollResponse retrieveSMSResponses()

Retrieve SMS Responses

Messages are retrieved one at a time, starting with the earliest response. The API supports the encoding of the full range of emojis in the reply message. The emojis will be in their UTF-8 format. If the subscription has a `notifyURL`, response messages will be logged there instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth
$config = Telstra_Messaging\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Telstra_Messaging\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieveSMSResponses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->retrieveSMSResponses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Telstra_Messaging\Model\InboundPollResponse**](../Model/InboundPollResponse.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendMMS**
> \Telstra_Messaging\Model\MessageSentResponse sendMMS($body)

Send MMS

Send MMS

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth
$config = Telstra_Messaging\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Telstra_Messaging\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Telstra_Messaging\Model\SendMmsRequest(); // \Telstra_Messaging\Model\SendMmsRequest | A JSON or XML payload containing the recipient's phone number and MMS message.The recipient number should be in the format '04xxxxxxxx' where x is a digit

try {
    $result = $apiInstance->sendMMS($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendMMS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Telstra_Messaging\Model\SendMmsRequest**](../Model/SendMmsRequest.md)| A JSON or XML payload containing the recipient&#39;s phone number and MMS message.The recipient number should be in the format &#39;04xxxxxxxx&#39; where x is a digit |

### Return type

[**\Telstra_Messaging\Model\MessageSentResponse**](../Model/MessageSentResponse.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendSMS**
> \Telstra_Messaging\Model\MessageSentResponse sendSMS($payload)

Send SMS

Send an SMS Message to a single or multiple mobile number/s.  <h3>Send message to a single number: </h3> <pre><code class=\"language-sh\">  #!/bin/bash   # Use the Messaging API-v2 to send an SMS   # Note: only to: and body: are required   AccessToken=\"Access Token\"   Dest=\"Destination number\"   curl -X POST -H \"Authorization: Bearer $AccessToken\" -H \"Content-Type: application/json\" -d \"{     \\\"to\\\":\\\"$Dest\\\",     \\\"body\\\":\\\"Test Message\\\",     \\\"from\\\": \\\"+61412345678\\\",     \\\"validity\\\": 5,     \\\"scheduledDelivery\\\": 1,     \\\"notifyURL\\\": \\\"\\\",     \\\"replyRequest\\\": false     \\\"priority\\\": true   }\" \"https://tapi.telstra.com/v2/messages/sms\" </code></pre>  \\ <h3>Send message to multiple numbers: </h3> <pre><code class=\"language-sh\"> #!/bin/bash   # Use the Messaging API to send an SMS   AccessToken=\"Access Token\"   Dest=\"Destination number\"   curl -X post -H \"Authorization: Bearer $AccessToken\" \\     -H \"Content-Type: application/json\" \\     -d '{ \"to\":\"$dest1, $dest2, $dest3\", \"body\":\"Test Message\" }' \\     https://tapi.telstra.com/v2/messages/sms   <pre><code class=\"language-sh\">

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth
$config = Telstra_Messaging\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Telstra_Messaging\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \Telstra_Messaging\Model\SendSMSRequest(); // \Telstra_Messaging\Model\SendSMSRequest | A JSON or XML payload containing the recipient's phone number and text message.  This number can be in international format if preceeded by a â€˜+â€™ or in national format ('04xxxxxxxx') where x is a digit.

try {
    $result = $apiInstance->sendSMS($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendSMS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\Telstra_Messaging\Model\SendSMSRequest**](../Model/SendSMSRequest.md)| A JSON or XML payload containing the recipient&#39;s phone number and text message.  This number can be in international format if preceeded by a â€˜+â€™ or in national format (&#39;04xxxxxxxx&#39;) where x is a digit. |

### Return type

[**\Telstra_Messaging\Model\MessageSentResponse**](../Model/MessageSentResponse.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

