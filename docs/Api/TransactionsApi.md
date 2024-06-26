# com.cryptoapis.rest_apis.sdk\TransactionsApi

All URIs are relative to https://rest.cryptoapis.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCoinsTransactionFromAddressForWholeAmount()**](TransactionsApi.md#createCoinsTransactionFromAddressForWholeAmount) | **POST** /wallet-as-a-service/wallets/{walletId}/{blockchain}/{network}/addresses/{address}/all-transaction-requests | Create Coins Transaction From Address For Whole Amount |
| [**createCoinsTransactionRequestFromAddress()**](TransactionsApi.md#createCoinsTransactionRequestFromAddress) | **POST** /wallet-as-a-service/wallets/{walletId}/{blockchain}/{network}/addresses/{address}/transaction-requests | Create Coins Transaction Request from Address |
| [**createCoinsTransactionRequestFromWallet()**](TransactionsApi.md#createCoinsTransactionRequestFromWallet) | **POST** /wallet-as-a-service/wallets/{walletId}/{blockchain}/{network}/transaction-requests | Create Coins Transaction Request from Wallet |
| [**createFungibleTokenTransactionRequestFromAddressWithoutFeePriority()**](TransactionsApi.md#createFungibleTokenTransactionRequestFromAddressWithoutFeePriority) | **POST** /wallet-as-a-service/wallets/{walletId}/{blockchain}/{network}/addresses/{senderAddress}/feeless-token-transaction-requests | Create Fungible Token Transaction Request From Address Without Fee Priority |
| [**createFungibleTokensTransactionRequestFromAddress()**](TransactionsApi.md#createFungibleTokensTransactionRequestFromAddress) | **POST** /wallet-as-a-service/wallets/{walletId}/{blockchain}/{network}/addresses/{senderAddress}/token-transaction-requests | Create Fungible Tokens Transaction Request from Address |
| [**createSingleTransactionRequestFromAddressWithoutFeePriority()**](TransactionsApi.md#createSingleTransactionRequestFromAddressWithoutFeePriority) | **POST** /wallet-as-a-service/wallets/{walletId}/{blockchain}/{network}/addresses/{address}/feeless-transaction-requests | Create Single Transaction Request From Address Without Fee Priority |


## `createCoinsTransactionFromAddressForWholeAmount()`

```php
createCoinsTransactionFromAddressForWholeAmount($address, $blockchain, $network, $wallet_id, $context, $create_coins_transaction_from_address_for_whole_amount_rb): \com.cryptoapis.rest_apis.sdk\Model\CreateCoinsTransactionFromAddressForWholeAmountR
```

Create Coins Transaction From Address For Whole Amount

Through this endpoint customers can create a new transaction from address for **coins** specifically, which will transfer over the entire available amount.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = com.cryptoapis.rest_apis.sdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = com.cryptoapis.rest_apis.sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new com.cryptoapis.rest_apis.sdk\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = 0x0902a667d6a3f287835e0a4593cae4167384abc6; // string | Defines the source address.
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = goerli; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"goerli\" are test networks.
$wallet_id = 629df9dbae857c00073de9c8; // string | Represents the sender's specific and unique Wallet ID of the sender.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$create_coins_transaction_from_address_for_whole_amount_rb = new \com.cryptoapis.rest_apis.sdk\Model\CreateCoinsTransactionFromAddressForWholeAmountRB(); // \com.cryptoapis.rest_apis.sdk\Model\CreateCoinsTransactionFromAddressForWholeAmountRB

try {
    $result = $apiInstance->createCoinsTransactionFromAddressForWholeAmount($address, $blockchain, $network, $wallet_id, $context, $create_coins_transaction_from_address_for_whole_amount_rb);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->createCoinsTransactionFromAddressForWholeAmount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Defines the source address. | |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;goerli\&quot; are test networks. | |
| **wallet_id** | **string**| Represents the sender&#39;s specific and unique Wallet ID of the sender. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **create_coins_transaction_from_address_for_whole_amount_rb** | [**\com.cryptoapis.rest_apis.sdk\Model\CreateCoinsTransactionFromAddressForWholeAmountRB**](../Model/CreateCoinsTransactionFromAddressForWholeAmountRB.md)|  | [optional] |

### Return type

[**\com.cryptoapis.rest_apis.sdk\Model\CreateCoinsTransactionFromAddressForWholeAmountR**](../Model/CreateCoinsTransactionFromAddressForWholeAmountR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCoinsTransactionRequestFromAddress()`

```php
createCoinsTransactionRequestFromAddress($address, $blockchain, $network, $wallet_id, $context, $create_coins_transaction_request_from_address_rb): \com.cryptoapis.rest_apis.sdk\Model\CreateCoinsTransactionRequestFromAddressR
```

Create Coins Transaction Request from Address

Through this endpoint users can create a new single transaction request from one address to another.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = com.cryptoapis.rest_apis.sdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = com.cryptoapis.rest_apis.sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new com.cryptoapis.rest_apis.sdk\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = 0x0902a667d6a3f287835e0a4593cae4167384abc6; // string | Defines the specific source address for the transaction. For XRP we also support the X-address format.
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = goerli; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"goerli\" are test networks.
$wallet_id = 629df9dbae857c00073de9c8; // string | Represents the sender's specific and unique Wallet ID of the sender.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$create_coins_transaction_request_from_address_rb = new \com.cryptoapis.rest_apis.sdk\Model\CreateCoinsTransactionRequestFromAddressRB(); // \com.cryptoapis.rest_apis.sdk\Model\CreateCoinsTransactionRequestFromAddressRB

try {
    $result = $apiInstance->createCoinsTransactionRequestFromAddress($address, $blockchain, $network, $wallet_id, $context, $create_coins_transaction_request_from_address_rb);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->createCoinsTransactionRequestFromAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Defines the specific source address for the transaction. For XRP we also support the X-address format. | |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;goerli\&quot; are test networks. | |
| **wallet_id** | **string**| Represents the sender&#39;s specific and unique Wallet ID of the sender. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **create_coins_transaction_request_from_address_rb** | [**\com.cryptoapis.rest_apis.sdk\Model\CreateCoinsTransactionRequestFromAddressRB**](../Model/CreateCoinsTransactionRequestFromAddressRB.md)|  | [optional] |

### Return type

[**\com.cryptoapis.rest_apis.sdk\Model\CreateCoinsTransactionRequestFromAddressR**](../Model/CreateCoinsTransactionRequestFromAddressR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCoinsTransactionRequestFromWallet()`

```php
createCoinsTransactionRequestFromWallet($blockchain, $network, $wallet_id, $context, $create_coins_transaction_request_from_wallet_rb): \com.cryptoapis.rest_apis.sdk\Model\CreateCoinsTransactionRequestFromWalletR
```

Create Coins Transaction Request from Wallet

Through this endpoint users can create a new transaction request from the entire Wallet instead from just a specific address. This endpoint can generate transactions from multiple to multiple addresses.    {warning}This is available **only** for UTXO-based protocols such as Bitcoin, Bitcoin Cash, Litecoin, etc. It **is not** available for Account-based protocols like Ethereum.{/warning}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = com.cryptoapis.rest_apis.sdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = com.cryptoapis.rest_apis.sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new com.cryptoapis.rest_apis.sdk\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"goerli\" are test networks.
$wallet_id = 609e221675d04500068718dc; // string | Represents the sender's specific and unique Wallet ID of the sender.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$create_coins_transaction_request_from_wallet_rb = new \com.cryptoapis.rest_apis.sdk\Model\CreateCoinsTransactionRequestFromWalletRB(); // \com.cryptoapis.rest_apis.sdk\Model\CreateCoinsTransactionRequestFromWalletRB

try {
    $result = $apiInstance->createCoinsTransactionRequestFromWallet($blockchain, $network, $wallet_id, $context, $create_coins_transaction_request_from_wallet_rb);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->createCoinsTransactionRequestFromWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;goerli\&quot; are test networks. | [default to &#39;testnet&#39;] |
| **wallet_id** | **string**| Represents the sender&#39;s specific and unique Wallet ID of the sender. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **create_coins_transaction_request_from_wallet_rb** | [**\com.cryptoapis.rest_apis.sdk\Model\CreateCoinsTransactionRequestFromWalletRB**](../Model/CreateCoinsTransactionRequestFromWalletRB.md)|  | [optional] |

### Return type

[**\com.cryptoapis.rest_apis.sdk\Model\CreateCoinsTransactionRequestFromWalletR**](../Model/CreateCoinsTransactionRequestFromWalletR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFungibleTokenTransactionRequestFromAddressWithoutFeePriority()`

```php
createFungibleTokenTransactionRequestFromAddressWithoutFeePriority($blockchain, $network, $sender_address, $wallet_id, $context, $create_fungible_token_transaction_request_from_address_without_fee_priority_rb): \com.cryptoapis.rest_apis.sdk\Model\CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityR
```

Create Fungible Token Transaction Request From Address Without Fee Priority

Through this endpoint customers can make a single feeless token transaction on the Tron blockchain protocol. TRX transactions burn certain resources called Bandwidth and Energy. Each account has 1500 bandwidth free for use every 24 hours and more can be obtained by staking TRX. The unit price of Energy is 280 SUN and of bandwidth - 1000 SUN. If the resources are insufficient, TRX will be burned to pay for them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = com.cryptoapis.rest_apis.sdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = com.cryptoapis.rest_apis.sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new com.cryptoapis.rest_apis.sdk\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = tron; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = nile; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"goerli\" are test networks.
$sender_address = TX8VXpdEoNNrKeEuNTfbEXfa9eZivcyUwD; // string | Defines the specific source address for the transaction.
$wallet_id = 62b9b5c3b97f4b0008092714; // string | Defines the unique ID of the Wallet.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$create_fungible_token_transaction_request_from_address_without_fee_priority_rb = new \com.cryptoapis.rest_apis.sdk\Model\CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRB(); // \com.cryptoapis.rest_apis.sdk\Model\CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRB

try {
    $result = $apiInstance->createFungibleTokenTransactionRequestFromAddressWithoutFeePriority($blockchain, $network, $sender_address, $wallet_id, $context, $create_fungible_token_transaction_request_from_address_without_fee_priority_rb);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->createFungibleTokenTransactionRequestFromAddressWithoutFeePriority: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;goerli\&quot; are test networks. | |
| **sender_address** | **string**| Defines the specific source address for the transaction. | |
| **wallet_id** | **string**| Defines the unique ID of the Wallet. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **create_fungible_token_transaction_request_from_address_without_fee_priority_rb** | [**\com.cryptoapis.rest_apis.sdk\Model\CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRB**](../Model/CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRB.md)|  | [optional] |

### Return type

[**\com.cryptoapis.rest_apis.sdk\Model\CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityR**](../Model/CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFungibleTokensTransactionRequestFromAddress()`

```php
createFungibleTokensTransactionRequestFromAddress($blockchain, $network, $sender_address, $wallet_id, $context, $create_fungible_tokens_transaction_request_from_address_rb): \com.cryptoapis.rest_apis.sdk\Model\CreateFungibleTokensTransactionRequestFromAddressR
```

Create Fungible Tokens Transaction Request from Address

Through this endpoint users can make a single token transaction.    {note}To have an operational callback subscription, you need to first verify a domain for the Callback URL. Please see more information on Callbacks [here](https://developers.cryptoapis.io/technical-documentation/general-information/callbacks#callback-url).{/note}    {warning}Crypto APIs will notify the user **only when** the event occurs. There are cases when the specific event doesn't happen at all, or takes a long time to do so. A callback notification **will not** be sent if the event does not or cannot occur, or will take long time to occur.{/warning}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = com.cryptoapis.rest_apis.sdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = com.cryptoapis.rest_apis.sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new com.cryptoapis.rest_apis.sdk\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = goerli; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"goerli\" are test networks.
$sender_address = 0x0902a667d6a3f287835e0a4593cae4167384abc6; // string | Defines the specific source address for the transaction.
$wallet_id = 609e221675d04500068718dc; // string | Defines the unique ID of the Wallet.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$create_fungible_tokens_transaction_request_from_address_rb = new \com.cryptoapis.rest_apis.sdk\Model\CreateFungibleTokensTransactionRequestFromAddressRB(); // \com.cryptoapis.rest_apis.sdk\Model\CreateFungibleTokensTransactionRequestFromAddressRB

try {
    $result = $apiInstance->createFungibleTokensTransactionRequestFromAddress($blockchain, $network, $sender_address, $wallet_id, $context, $create_fungible_tokens_transaction_request_from_address_rb);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->createFungibleTokensTransactionRequestFromAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;goerli\&quot; are test networks. | |
| **sender_address** | **string**| Defines the specific source address for the transaction. | |
| **wallet_id** | **string**| Defines the unique ID of the Wallet. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **create_fungible_tokens_transaction_request_from_address_rb** | [**\com.cryptoapis.rest_apis.sdk\Model\CreateFungibleTokensTransactionRequestFromAddressRB**](../Model/CreateFungibleTokensTransactionRequestFromAddressRB.md)|  | [optional] |

### Return type

[**\com.cryptoapis.rest_apis.sdk\Model\CreateFungibleTokensTransactionRequestFromAddressR**](../Model/CreateFungibleTokensTransactionRequestFromAddressR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSingleTransactionRequestFromAddressWithoutFeePriority()`

```php
createSingleTransactionRequestFromAddressWithoutFeePriority($address, $blockchain, $network, $wallet_id, $context, $create_single_transaction_request_from_address_without_fee_priority_rb): \com.cryptoapis.rest_apis.sdk\Model\CreateSingleTransactionRequestFromAddressWithoutFeePriorityR
```

Create Single Transaction Request From Address Without Fee Priority

Through this endpoint users can create a new single transaction request from one address to another. The difference between this endpoint and \"Create Coins Transaction Request from Address\"  is that for Tron blockchain there is no Fee Priority that defines how fast a transaction can be mined.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = com.cryptoapis.rest_apis.sdk\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = com.cryptoapis.rest_apis.sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new com.cryptoapis.rest_apis.sdk\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = TX8VXpdEoNNrKeEuNTfbEXfa9eZivcyUwD; // string | Defines the specific source address for the transaction.
$blockchain = tron; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = nile; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"goerli\" are test networks.
$wallet_id = 62b9b5c3b97f4b0008092714; // string | Represents the sender's specific and unique Wallet ID of the sender.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$create_single_transaction_request_from_address_without_fee_priority_rb = new \com.cryptoapis.rest_apis.sdk\Model\CreateSingleTransactionRequestFromAddressWithoutFeePriorityRB(); // \com.cryptoapis.rest_apis.sdk\Model\CreateSingleTransactionRequestFromAddressWithoutFeePriorityRB

try {
    $result = $apiInstance->createSingleTransactionRequestFromAddressWithoutFeePriority($address, $blockchain, $network, $wallet_id, $context, $create_single_transaction_request_from_address_without_fee_priority_rb);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->createSingleTransactionRequestFromAddressWithoutFeePriority: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Defines the specific source address for the transaction. | |
| **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | |
| **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;goerli\&quot; are test networks. | |
| **wallet_id** | **string**| Represents the sender&#39;s specific and unique Wallet ID of the sender. | |
| **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional] |
| **create_single_transaction_request_from_address_without_fee_priority_rb** | [**\com.cryptoapis.rest_apis.sdk\Model\CreateSingleTransactionRequestFromAddressWithoutFeePriorityRB**](../Model/CreateSingleTransactionRequestFromAddressWithoutFeePriorityRB.md)|  | [optional] |

### Return type

[**\com.cryptoapis.rest_apis.sdk\Model\CreateSingleTransactionRequestFromAddressWithoutFeePriorityR**](../Model/CreateSingleTransactionRequestFromAddressWithoutFeePriorityR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
