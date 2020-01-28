<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Telstra_Messaging\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = getenv('CLIENT_ID'); // string | 
$client_secret = getenv('CLIENT_SECRET'); // string | 
$grant_type = 'client_credentials'; // string | 
$scope = 'NSMS'; // string | NSMS

try {
    $result = $apiInstance->authToken($client_id, $client_secret, $grant_type, $scope);
    
    $config = Telstra_Messaging\Configuration::getDefaultConfiguration()->setAccessToken($result["access_token"]);

    $apiInstance = new Telstra_Messaging\Api\ProvisioningApi(
        new GuzzleHttp\Client(),
        $config
    );
    $body = new \Telstra_Messaging\Model\ProvisionNumberRequest(array("active_days" => 30));

    $result = $apiInstance->createSubscription($body);
    
    $apiInstance = new Telstra_Messaging\Api\MessagingApi(
      // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
      // This is optional, `GuzzleHttp\Client` will be used as default.
      new GuzzleHttp\Client(),
      $config
    );

    $message = array(
      "to" => getenv('PHONE_NO'),
      "body" => "Testing PHP SDK backward compatibility tests",
      "from" => getenv('FROM_ALIAS'),
    );
    $payload = new \Telstra_Messaging\Model\SendSMSRequest($message);

    $result = $apiInstance->sendSMS($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authToken: ', $e->getMessage(), PHP_EOL;
}

?>