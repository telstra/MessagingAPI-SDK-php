# # GetMmsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | The final state of the message. | 
**destination_address** | **string** | The number the message was sent to. | 
**sender_address** | **string** | The number the message was sent from. | 
**subject** | **string** | The subject assigned to the message. | [optional] 
**message_id** | **string** | Message Id assigned by the MMSC. | [optional] 
**api_msg_id** | **string** | Message Id assigned by the API. | [optional] 
**sent_timestamp** | **string** | Time handling of the message ended. | 
**mms_content** | [**\Telstra_Messaging\Model\MMSContent[]**](MMSContent.md) | An array of content that was received in an MMS message. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


