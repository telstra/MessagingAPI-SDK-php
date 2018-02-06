# Telstra_Messaging\ProvisioningApi

All URIs are relative to *https://tapi.telstra.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSubscription**](ProvisioningApi.md#createSubscription) | **POST** /messages/provisioning/subscriptions | Create Subscription
[**deleteSubscription**](ProvisioningApi.md#deleteSubscription) | **DELETE** /messages/provisioning/subscriptions | Delete Subscription
[**getSubscription**](ProvisioningApi.md#getSubscription) | **GET** /messages/provisioning/subscriptions | Get Subscription


# **createSubscription**
> \Telstra_Messaging\Model\ProvisionNumberResponse createSubscription($authorization, $body)

Create Subscription

Provision a mobile number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth
$config = Telstra_Messaging\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Telstra_Messaging\Api\ProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | An OAUTH bearer token that is entitled to use the 'SUBSCRIPTION' scope.
$body = new \Telstra_Messaging\Model\ProvisionNumberRequest(); // \Telstra_Messaging\Model\ProvisionNumberRequest | A JSON payload containing the required attributes

try {
    $result = $apiInstance->createSubscription($authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningApi->createSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An OAUTH bearer token that is entitled to use the &#39;SUBSCRIPTION&#39; scope. |
 **body** | [**\Telstra_Messaging\Model\ProvisionNumberRequest**](../Model/ProvisionNumberRequest.md)| A JSON payload containing the required attributes |

### Return type

[**\Telstra_Messaging\Model\ProvisionNumberResponse**](../Model/ProvisionNumberResponse.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubscription**
> deleteSubscription($authorization)

Delete Subscription

Delete a mobile number subscription from an account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth
$config = Telstra_Messaging\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Telstra_Messaging\Api\ProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | An OAUTH bearer token that is entitled to use the 'SUBSCRIPTION' scope.

try {
    $apiInstance->deleteSubscription($authorization);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningApi->deleteSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An OAUTH bearer token that is entitled to use the &#39;SUBSCRIPTION&#39; scope. |

### Return type

void (empty response body)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscription**
> \Telstra_Messaging\Model\ProvisionNumberResponse[] getSubscription($authorization)

Get Subscription

Get mobile number subscription for an account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth
$config = Telstra_Messaging\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Telstra_Messaging\Api\ProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | An OAUTH bearer token that is entitled to use the 'SUBSCRIPTION' scope.

try {
    $result = $apiInstance->getSubscription($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningApi->getSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An OAUTH bearer token that is entitled to use the &#39;SUBSCRIPTION&#39; scope. |

### Return type

[**\Telstra_Messaging\Model\ProvisionNumberResponse[]**](../Model/ProvisionNumberResponse.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

