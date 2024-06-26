# # ListConfirmedTransactionsByAddressRIBSE

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contract** | **string** | Represents the specific transaction contract. | [optional]
**gas_limit** | **string** | Represents the amount of gas used by this specific transaction alone. |
**gas_price** | [**\com.cryptoapis.rest_apis.sdk\Model\ListConfirmedTransactionsByAddressRIBSEGasPrice**](ListConfirmedTransactionsByAddressRIBSEGasPrice.md) |  |
**gas_used** | **string** | Represents the exact unit of gas that was used for the transaction. |
**input_data** | **string** | Represents additional information that is required for the transaction. | [optional]
**internal_transactions_count** | **int** | Represents the total internal transactions count. |
**nonce** | **int** | Represents the sequential running number for an address, starting from 0 for the first transaction. E.g., if the nonce of a transaction is 10, it would be the 11th transaction sent from the sender&#39;s address. |
**token_transfers_count** | **int** | Represents the total token transfers count. |
**transaction_status** | **string** | String representation of the transaction status |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
