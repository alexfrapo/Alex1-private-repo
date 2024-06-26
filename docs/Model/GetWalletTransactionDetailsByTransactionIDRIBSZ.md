# # GetWalletTransactionDetailsByTransactionIDRIBSZ

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**binding_sig** | **string** | It is used to enforce balance of Spend and Output transfers, in order to prevent their replay across transactions. |
**expiry_height** | **int** | Represents a block height after which the transaction will expire. |
**join_split_pub_key** | **string** | Represents an encoding of a JoinSplitSig public validating key. |
**join_split_sig** | **string** | Is used to sign transactions that contain at least one JoinSplit description. |
**locktime** | **int** | Represents the time at which a particular transaction can be added to the blockchain. |
**overwintered** | **bool** | \&quot;Overwinter\&quot; is the network upgrade for the Zcash blockchain. |
**size** | **int** | Represents the total size of this transaction. |
**v_join_split** | [**\com.cryptoapis.rest_apis.sdk\Model\GetTransactionDetailsByTransactionIDRIBSZVJoinSplitInner[]**](GetTransactionDetailsByTransactionIDRIBSZVJoinSplitInner.md) | Represents a sequence of JoinSplit descriptions using BCTV14 proofs. | [optional]
**v_shielded_output** | [**\com.cryptoapis.rest_apis.sdk\Model\GetTransactionDetailsByTransactionIDRIBSZVShieldedOutputInner[]**](GetTransactionDetailsByTransactionIDRIBSZVShieldedOutputInner.md) | Object Array representation of transaction output descriptions | [optional]
**v_shielded_spend** | [**\com.cryptoapis.rest_apis.sdk\Model\GetTransactionDetailsByTransactionIDRIBSZVShieldedSpendInner[]**](GetTransactionDetailsByTransactionIDRIBSZVShieldedSpendInner.md) | Object Array representation of transaction spend descriptions | [optional]
**value_balance** | **string** | String representation of the transaction value balance |
**version** | **int** | Represents the transaction version number. |
**version_group_id** | **string** | Represents the transaction version group ID. |
**vin** | [**\com.cryptoapis.rest_apis.sdk\Model\GetWalletTransactionDetailsByTransactionIDRIBSZVinInner[]**](GetWalletTransactionDetailsByTransactionIDRIBSZVinInner.md) | Object Array representation of transaction inputs |
**vout** | [**\com.cryptoapis.rest_apis.sdk\Model\ListTransactionsByBlockHeightRIBSZVoutInner[]**](ListTransactionsByBlockHeightRIBSZVoutInner.md) | Object Array representation of transaction outputs |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
