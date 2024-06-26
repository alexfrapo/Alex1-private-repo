# # PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRBDataItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_data** | **string** | Representation of the additional data. | [optional]
**locktime** | **int** | Represents the time at which a particular transaction can be added to the blockchain. | [optional]
**xpub** | **string** | Defines the account extended publicly known key which is used to derive all child public keys. |
**fee** | [**\com.cryptoapis.rest_apis.sdk\Model\PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRBDataItemFee**](PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRBDataItemFee.md) |  |
**prepare_strategy** | **string** | Representation of the transaction&#39;s strategy type | [optional]
**recipients** | [**\com.cryptoapis.rest_apis.sdk\Model\PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRBDataItemRecipientsInner[]**](PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRBDataItemRecipientsInner.md) | Object Array representation of transaction receivers |
**replaceable** | **bool** | Representation of whether the transaction is replaceable. This is an Optional attribute that is not supported for Dogecoin, Dash and Bitcoin-Cash. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
