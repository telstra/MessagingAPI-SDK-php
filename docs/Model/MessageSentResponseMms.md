# # MessageSentResponseMms

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**messages** | [**\Telstra_Messaging\Model\Message[]**](Message.md) | An array of messages. | 
**mms_media_kb** | **int** | Indicates the message size in kB of the MMS sent. | [optional] 
**country** | **object[]** | An array of the countries to which the destination MSISDNs belong. | [optional] 
**message_type** | **string** | This returns whether the message sent was a SMS or MMS. | 
**number_segments** | **int** | MMS with numberSegments below 600 are classed as Small whereas those that are bigger than 600 are classed as Large. They will be charged accordingly. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


