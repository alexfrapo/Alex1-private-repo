# # CreateCoinsTransactionRequestFromWalletRBDataItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**callback_secret_key** | **string** | Represents the Secret Key value provided by the customer. This field is used for security purposes during the callback notification, in order to prove the sender of the callback as Crypto APIs. For more information please see our [Documentation](https://developers.cryptoapis.io/technical-documentation/general-information/callbacks#callback-security). | [optional]
**callback_url** | **string** | Represents the URL that is set by the customer where the callback will be received at. The callback notification will be received only if and when the event occurs. &#x60;We support ONLY httpS type of protocol&#x60;. | [optional]
**fee_priority** | **string** | Represents the fee priority of the automation, whether it is \&quot;slow\&quot;, \&quot;standard\&quot; or \&quot;fast\&quot;. |
**note** | **string** | Represents an optional note to add a free text in, explaining or providing additional detail on the transaction request. | [optional]
**prepare_strategy** | **string** | Refers to a model of a UTXO spending strategy, where customers can choose how to spend their transaction outputs from multiple Bitcoin addresses. Two options available - \&quot;minimize-dust\&quot; (select lower amounts from multiple addresses) or \&quot;optimize-size\&quot; (select higher amounts from less addresses). | [optional] [default to 'minimize-dust']
**recipients** | [**\com.cryptoapis.rest_apis.sdk\Model\CreateCoinsTransactionRequestFromWalletRBDataItemRecipientsInner[]**](CreateCoinsTransactionRequestFromWalletRBDataItemRecipientsInner.md) | Defines the destination of the transaction, whether it is incoming or outgoing. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
