# # GetLastMinedBlockRIBSD2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bits** | **string** | Represents a specific sub-unit of Dash. Bits have two-decimal precision. |
**chainwork** | **string** | Represents a hexadecimal number of all the hashes necessary to produce the current chain. E.g., when converting 0000000000000000000000000000000000000000000086859f7a841475b236fd to a decimal you get 635262017308958427068157 hashes, or 635262 exahashes. |
**difficulty** | **string** | Numeric representation of the block difficulty | [optional]
**merkle_root** | **string** | Defines the single and final (root) node of a Merkle tree. It is the combined hash of all transactions&#39; hashes that are part of a blockchain block. |
**nonce** | **int** | Numeric representation of the block nonce |
**size** | **int** | Represents the total size of the block in Bytes. |
**version** | **int** | Represents the version of the specific block on the blockchain. |
**version_hex** | **string** | Is the hexadecimal string representation of the block&#39;s version. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
