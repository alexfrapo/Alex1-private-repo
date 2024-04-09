<?php
/**
 * ListHDWalletXPubYPubZPubTransactionsRI
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  com.cryptoapis.rest_apis.sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CryptoAPIs
 *
 * Crypto APIs is a complex and innovative infrastructure layer that radically simplifies the development of any Blockchain and Crypto related applications. Organized around REST, Crypto APIs can assist both novice Bitcoin/Ethereum enthusiasts and crypto experts with the development of their blockchain applications. Crypto APIs provides unified endpoints and data, raw data, automatic tokens and coins forwardings, callback functionalities, and much more.
 *
 * The version of the OpenAPI document: 2023-04-25
 * Contact: developers@cryptoapis.io
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace com.cryptoapis.rest_apis.sdk\Model;

use \ArrayAccess;
use \com.cryptoapis.rest_apis.sdk\ObjectSerializer;

/**
 * ListHDWalletXPubYPubZPubTransactionsRI Class Doc Comment
 *
 * @category Class
 * @package  com.cryptoapis.rest_apis.sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ListHDWalletXPubYPubZPubTransactionsRI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListHDWalletXPubYPubZPubTransactionsRI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'index' => 'int',
        'mined_in_block_hash' => 'string',
        'mined_in_block_height' => 'int',
        'recipients' => '\com.cryptoapis.rest_apis.sdk\Model\ListHDWalletXPubYPubZPubTransactionsRIRecipientsInner[]',
        'senders' => '\com.cryptoapis.rest_apis.sdk\Model\ListHDWalletXPubYPubZPubTransactionsRISendersInner[]',
        'timestamp' => 'int',
        'transaction_hash' => 'string',
        'transaction_id' => 'string',
        'fee' => '\com.cryptoapis.rest_apis.sdk\Model\ListHDWalletXPubYPubZPubTransactionsRIFee'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'index' => null,
        'mined_in_block_hash' => null,
        'mined_in_block_height' => 'int64',
        'recipients' => null,
        'senders' => null,
        'timestamp' => null,
        'transaction_hash' => null,
        'transaction_id' => null,
        'fee' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'index' => false,
        'mined_in_block_hash' => false,
        'mined_in_block_height' => false,
        'recipients' => false,
        'senders' => false,
        'timestamp' => false,
        'transaction_hash' => false,
        'transaction_id' => false,
        'fee' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'index' => 'index',
        'mined_in_block_hash' => 'minedInBlockHash',
        'mined_in_block_height' => 'minedInBlockHeight',
        'recipients' => 'recipients',
        'senders' => 'senders',
        'timestamp' => 'timestamp',
        'transaction_hash' => 'transactionHash',
        'transaction_id' => 'transactionId',
        'fee' => 'fee'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'index' => 'setIndex',
        'mined_in_block_hash' => 'setMinedInBlockHash',
        'mined_in_block_height' => 'setMinedInBlockHeight',
        'recipients' => 'setRecipients',
        'senders' => 'setSenders',
        'timestamp' => 'setTimestamp',
        'transaction_hash' => 'setTransactionHash',
        'transaction_id' => 'setTransactionId',
        'fee' => 'setFee'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'index' => 'getIndex',
        'mined_in_block_hash' => 'getMinedInBlockHash',
        'mined_in_block_height' => 'getMinedInBlockHeight',
        'recipients' => 'getRecipients',
        'senders' => 'getSenders',
        'timestamp' => 'getTimestamp',
        'transaction_hash' => 'getTransactionHash',
        'transaction_id' => 'getTransactionId',
        'fee' => 'getFee'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('index', $data ?? [], null);
        $this->setIfExists('mined_in_block_hash', $data ?? [], null);
        $this->setIfExists('mined_in_block_height', $data ?? [], null);
        $this->setIfExists('recipients', $data ?? [], null);
        $this->setIfExists('senders', $data ?? [], null);
        $this->setIfExists('timestamp', $data ?? [], null);
        $this->setIfExists('transaction_hash', $data ?? [], null);
        $this->setIfExists('transaction_id', $data ?? [], null);
        $this->setIfExists('fee', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['index'] === null) {
            $invalidProperties[] = "'index' can't be null";
        }
        if ($this->container['mined_in_block_hash'] === null) {
            $invalidProperties[] = "'mined_in_block_hash' can't be null";
        }
        if ($this->container['mined_in_block_height'] === null) {
            $invalidProperties[] = "'mined_in_block_height' can't be null";
        }
        if ($this->container['recipients'] === null) {
            $invalidProperties[] = "'recipients' can't be null";
        }
        if ($this->container['senders'] === null) {
            $invalidProperties[] = "'senders' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ($this->container['transaction_hash'] === null) {
            $invalidProperties[] = "'transaction_hash' can't be null";
        }
        if ($this->container['transaction_id'] === null) {
            $invalidProperties[] = "'transaction_id' can't be null";
        }
        if ($this->container['fee'] === null) {
            $invalidProperties[] = "'fee' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets index
     *
     * @return int
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param int $index Represents the index position of the transaction in the block.
     *
     * @return self
     */
    public function setIndex($index)
    {
        if (is_null($index)) {
            throw new \InvalidArgumentException('non-nullable index cannot be null');
        }
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets mined_in_block_hash
     *
     * @return string
     */
    public function getMinedInBlockHash()
    {
        return $this->container['mined_in_block_hash'];
    }

    /**
     * Sets mined_in_block_hash
     *
     * @param string $mined_in_block_hash Represents the hash of the block where this transaction was mined/confirmed for first time. The hash is defined as a cryptographic digital fingerprint made by hashing the block header twice through the SHA256 algorithm.
     *
     * @return self
     */
    public function setMinedInBlockHash($mined_in_block_hash)
    {
        if (is_null($mined_in_block_hash)) {
            throw new \InvalidArgumentException('non-nullable mined_in_block_hash cannot be null');
        }
        $this->container['mined_in_block_hash'] = $mined_in_block_hash;

        return $this;
    }

    /**
     * Gets mined_in_block_height
     *
     * @return int
     */
    public function getMinedInBlockHeight()
    {
        return $this->container['mined_in_block_height'];
    }

    /**
     * Sets mined_in_block_height
     *
     * @param int $mined_in_block_height Represents the hight of the block where this transaction was mined/confirmed for first time. The height is defined as the number of blocks in the blockchain preceding this specific block.
     *
     * @return self
     */
    public function setMinedInBlockHeight($mined_in_block_height)
    {
        if (is_null($mined_in_block_height)) {
            throw new \InvalidArgumentException('non-nullable mined_in_block_height cannot be null');
        }
        $this->container['mined_in_block_height'] = $mined_in_block_height;

        return $this;
    }

    /**
     * Gets recipients
     *
     * @return \com.cryptoapis.rest_apis.sdk\Model\ListHDWalletXPubYPubZPubTransactionsRIRecipientsInner[]
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     *
     * @param \com.cryptoapis.rest_apis.sdk\Model\ListHDWalletXPubYPubZPubTransactionsRIRecipientsInner[] $recipients Represents a list of recipient addresses with the respective amounts. In account-based protocols like Ethereum there is only one address in this list.
     *
     * @return self
     */
    public function setRecipients($recipients)
    {
        if (is_null($recipients)) {
            throw new \InvalidArgumentException('non-nullable recipients cannot be null');
        }
        $this->container['recipients'] = $recipients;

        return $this;
    }

    /**
     * Gets senders
     *
     * @return \com.cryptoapis.rest_apis.sdk\Model\ListHDWalletXPubYPubZPubTransactionsRISendersInner[]
     */
    public function getSenders()
    {
        return $this->container['senders'];
    }

    /**
     * Sets senders
     *
     * @param \com.cryptoapis.rest_apis.sdk\Model\ListHDWalletXPubYPubZPubTransactionsRISendersInner[] $senders Represents a list of sender addresses with the respective amounts. In account-based protocols like Ethereum there is only one address in this list.
     *
     * @return self
     */
    public function setSenders($senders)
    {
        if (is_null($senders)) {
            throw new \InvalidArgumentException('non-nullable senders cannot be null');
        }
        $this->container['senders'] = $senders;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return int
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param int $timestamp Defines the exact date/time in Unix Timestamp when this transaction was mined, confirmed or first seen in Mempool, if it is unconfirmed.
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        if (is_null($timestamp)) {
            throw new \InvalidArgumentException('non-nullable timestamp cannot be null');
        }
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets transaction_hash
     *
     * @return string
     */
    public function getTransactionHash()
    {
        return $this->container['transaction_hash'];
    }

    /**
     * Sets transaction_hash
     *
     * @param string $transaction_hash Represents the same as `transactionId` for account-based protocols like Ethereum, while it could be different in UTXO-based protocols like Bitcoin. E.g., in UTXO-based protocols `hash` is different from `transactionId` for SegWit transactions.
     *
     * @return self
     */
    public function setTransactionHash($transaction_hash)
    {
        if (is_null($transaction_hash)) {
            throw new \InvalidArgumentException('non-nullable transaction_hash cannot be null');
        }
        $this->container['transaction_hash'] = $transaction_hash;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string $transaction_id Represents the unique identifier of a transaction, i.e. it could be `transactionId` in UTXO-based protocols like Bitcoin, and transaction `hash` in Ethereum blockchain.
     *
     * @return self
     */
    public function setTransactionId($transaction_id)
    {
        if (is_null($transaction_id)) {
            throw new \InvalidArgumentException('non-nullable transaction_id cannot be null');
        }
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return \com.cryptoapis.rest_apis.sdk\Model\ListHDWalletXPubYPubZPubTransactionsRIFee
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param \com.cryptoapis.rest_apis.sdk\Model\ListHDWalletXPubYPubZPubTransactionsRIFee $fee fee
     *
     * @return self
     */
    public function setFee($fee)
    {
        if (is_null($fee)) {
            throw new \InvalidArgumentException('non-nullable fee cannot be null');
        }
        $this->container['fee'] = $fee;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


