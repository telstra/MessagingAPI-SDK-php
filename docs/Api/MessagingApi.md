# Telstra_Messaging\MessagingApi

All URIs are relative to *https://tapi.telstra.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMMSStatus**](MessagingApi.md#getMMSStatus) | **GET** /messages/mms/{messageid}/status | Get MMS Status
[**getSMSStatus**](MessagingApi.md#getSMSStatus) | **GET** /messages/sms/{messageId}/status | Get SMS Status
[**retrieveMMSResponses**](MessagingApi.md#retrieveMMSResponses) | **GET** /messages/mms | Retrieve MMS Responses
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
$messageid = 'messageid_example'; // string | Unique identifier of a message - it is the value returned from a previous POST call to https://api.telstra.com/v2/messages/mms

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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSMSStatus**
> \Telstra_Messaging\Model\OutboundPollResponse[] getSMSStatus($message_id)

Get SMS Status

If no notification URL has been specified, it is possible to poll for the message status. Note that the `MessageId` that appears in the URL must be URL encoded. Just copying the `MessageId` as it was supplied when submitting the message may not work.  SMS Status with Notification URL --- When a message has reached its final state, the API will send a POST to the URL that has been previously specified. <pre><code class=\"language-sh\">{     to: '+61418123456'     sentTimestamp: '2017-03-17T10:05:22+10:00'     receivedTimestamp: '2017-03-17T10:05:23+10:00'     messageId: /cccb284200035236000000000ee9d074019e0301/1261418123456     deliveryStatus: DELIVRD   } </code></pre>  The fields are: <table>   <thead>     <tr>       <th>Field</th>       <th>Description</th>     </tr>   </thead>   <tbody>     <tr>       <td><code>to</code></td>       <td>The number the message was sent to.</td>     </tr>     <tr>       <td><code>receivedTimestamp</code></td>       <td>Time the message was sent to the API.</td>     </tr>     <tr>       <td><code>sentTimestamp</code></td>       <td>Time handling of the message ended.</td>     </tr>     <tr>       <td><code>deliveryStatus</code></td>       <td>The final state of the message.</td>     </tr>     <tr>       <td><code>messageId</code></td>       <td>The same reference that was returned when the original message was sent.</td>     </tr>     <tr>       <td><code>receivedTimestamp</code></td>       <td>Time the message was sent to the API.</td>     </tr>   </tbody> </table>  Upon receiving this call it is expected that your servers will give a 204 (No Content) response. Anything else will cause the API to reattempt the call 5 minutes later.

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
$message_id = 'message_id_example'; // string | Unique identifier of a message - it is the value returned from a previous POST call to https://api.telstra.com/v2/messages/sms.

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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveMMSResponses**
> \Telstra_Messaging\Model\MMSContent[] retrieveMMSResponses()

Retrieve MMS Responses

Messages are retrieved one at a time, starting with the earliest response. If the subscription has a `notifyURL`, response messages will be logged there instead.  # Notification URL Format for MMS Replies  <pre><code class=\"language-sh\">{   \"status\": \"RECEIVED\",   \"destinationAddress\": \"+61418123456\",   \"senderAddress\": \"+61421987654\",   \"subject\": \"Foo\",   \"sentTimestamp\": \"2018-03-23T12:15:45+10:00\",   \"envelope\": \"string\",   \"MMSContent\":     [       {         \"type\": \"text/plain\",         \"filename\": \"text_1.txt\",         \"payload\": \"string\"       },       {         \"type\": \"image/jpeg\",         \"filename\": \"sample.jpeg\",         \"payload\": \"string\"       }     ] }</code></pre>  The fields are: | Field | Description | | --- | --- | | `status` | The final state of the message. | | `destinationAddress` |The number the message was sent to. | | `senderAddress` | The number the message was sent from. | | `subject` | The subject assigned to the message. | | `sentTimestamp` | Time handling of the message ended. | | `envelope` | Information about about terminal type and originating operator. | | `MMSContent` | An array of the actual content of the reply message. | | `type` | The content type of the message. | | `filename` | The filename for the message content. | | `payload` | The content of the message. |

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
    $result = $apiInstance->retrieveMMSResponses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->retrieveMMSResponses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Telstra_Messaging\Model\MMSContent[]**](../Model/MMSContent.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveSMSResponses**
> \Telstra_Messaging\Model\InboundPollResponse retrieveSMSResponses()

Retrieve SMS Responses

Messages are retrieved one at a time, starting with the earliest response. The API supports the encoding of the full range of emojis in the reply message. The emojis will be in their UTF-8 format. If the subscription has a `notifyURL`, response messages will be logged there instead.  # Notification URL Format for SMS Response  <pre><code class=\"language-sh\">{   \"to\":\"+61472880123\",   \"from\":\"+61412345678\",   \"body\":\"Foo4\",   \"sentTimestamp\":\"2018-04-20T14:24:35\",   \"messageId\":\"DMASApiA0000000146\" }</code></pre>  The fields are: | Field | Description | | --- |--- | | `to` | The number the message was sent to. | | `from` | The number the message was sent from. | | `body` | The content of the SMS response. | | `sentTimestamp` | Time handling of the message ended. | | `messageId` | The ID assigned to the message. |

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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendMMS**
> \Telstra_Messaging\Model\MessageSentResponse sendMMS($send_mms_request)

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
$send_mms_request = new \Telstra_Messaging\Model\SendMmsRequest(); // \Telstra_Messaging\Model\SendMmsRequest | A JSON or XML payload containing the recipient's phone number and MMS message.
The recipient number should be in the format '04xxxxxxxx' where x is a digit.


try {
    $result = $apiInstance->sendMMS($send_mms_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendMMS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **send_mms_request** | [**\Telstra_Messaging\Model\SendMmsRequest**](../Model/SendMmsRequest.md)| A JSON or XML payload containing the recipient&#39;s phone number and MMS message.
The recipient number should be in the format &#39;04xxxxxxxx&#39; where x is a digit.
 |

### Return type

[**\Telstra_Messaging\Model\MessageSentResponse**](../Model/MessageSentResponse.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendSMS**
> \Telstra_Messaging\Model\MessageSentResponse sendSMS($send_sms_request)

Send SMS

Send an SMS Message to a single or multiple mobile number/s.

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
$send_sms_request = new \Telstra_Messaging\Model\SendSMSRequest(); // \Telstra_Messaging\Model\SendSMSRequest | A JSON or XML payload containing the recipient's phone number and text message.
This number can be in international format if preceeded by a â€˜+â€™ or in national format ('04xxxxxxxx') where x is a digit.


try {
    $result = $apiInstance->sendSMS($send_sms_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendSMS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **send_sms_request** | [**\Telstra_Messaging\Model\SendSMSRequest**](../Model/SendSMSRequest.md)| A JSON or XML payload containing the recipient&#39;s phone number and text message.
This number can be in international format if preceeded by a â€˜+â€™ or in national format (&#39;04xxxxxxxx&#39;) where x is a digit.
 |

### Return type

[**\Telstra_Messaging\Model\MessageSentResponse**](../Model/MessageSentResponse.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

