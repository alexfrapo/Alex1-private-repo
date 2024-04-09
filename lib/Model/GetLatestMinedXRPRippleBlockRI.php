<?php
/**
 * GetLatestMinedXRPRippleBlockRI
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
 * GetLatestMinedXRPRippleBlockRI Class Doc Comment
 *
 * @category Class
 * @package  com.cryptoapis.rest_apis.sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetLatestMinedXRPRippleBlockRI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetLatestMinedXRPRippleBlockRI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'block_hash' => 'string',
        'block_height' => 'int',
        'previous_block_hash' => 'string',
        'timestamp' => 'int',
        'transactions_count' => 'int',
        'total_coins' => '\com.cryptoapis.rest_apis.sdk\Model\GetLatestMinedXRPRippleBlockRITotalCoins',
        'total_fees' => '\com.cryptoapis.rest_apis.sdk\Model\GetLatestMinedXRPRippleBlockRITotalFees'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'block_hash' => null,
        'block_height' => null,
        'previous_block_hash' => null,
        'timestamp' => null,
        'transactions_count' => null,
        'total_coins' => null,
        'total_fees' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'block_hash' => false,
        'block_height' => false,
        'previous_block_hash' => false,
        'timestamp' => false,
        'transactions_count' => false,
        'total_coins' => false,
        'total_fees' => false
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
        'block_hash' => 'blockHash',
        'block_height' => 'blockHeight',
        'previous_block_hash' => 'previousBlockHash',
        'timestamp' => 'timestamp',
        'transactions_count' => 'transactionsCount',
        'total_coins' => 'totalCoins',
        'total_fees' => 'totalFees'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'block_hash' => 'setBlockHash',
        'block_height' => 'setBlockHeight',
        'previous_block_hash' => 'setPreviousBlockHash',
        'timestamp' => 'setTimestamp',
        'transactions_count' => 'setTransactionsCount',
        'total_coins' => 'setTotalCoins',
        'total_fees' => 'setTotalFees'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'block_hash' => 'getBlockHash',
        'block_height' => 'getBlockHeight',
        'previous_block_hash' => 'getPreviousBlockHash',
        'timestamp' => 'getTimestamp',
        'transactions_count' => 'getTransactionsCount',
        'total_coins' => 'getTotalCoins',
        'total_fees' => 'getTotalFees'
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
        $this->setIfExists('block_hash', $data ?? [], null);
        $this->setIfExists('block_height', $data ?? [], null);
        $this->setIfExists('previous_block_hash', $data ?? [], null);
        $this->setIfExists('timestamp', $data ?? [], null);
        $this->setIfExists('transactions_count', $data ?? [], null);
        $this->setIfExists('total_coins', $data ?? [], null);
        $this->setIfExists('total_fees', $data ?? [], null);
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

        if ($this->container['block_hash'] === null) {
            $invalidProperties[] = "'block_hash' can't be null";
        }
        if ($this->container['block_height'] === null) {
            $invalidProperties[] = "'block_height' can't be null";
        }
        if ($this->container['previous_block_hash'] === null) {
            $invalidProperties[] = "'previous_block_hash' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ($this->container['transactions_count'] === null) {
            $invalidProperties[] = "'transactions_count' can't be null";
        }
        if ($this->container['total_coins'] === null) {
            $invalidProperties[] = "'total_coins' can't be null";
        }
        if ($this->container['total_fees'] === null) {
            $invalidProperties[] = "'total_fees' can't be null";
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
     * Gets block_hash
     *
     * @return string
     */
    public function getBlockHash()
    {
        return $this->container['block_hash'];
    }

    /**
     * Sets block_hash
     *
     * @param string $block_hash Represents the hash of the block, which is its unique identifier. It represents a cryptographic digital fingerprint made by hashing the block header twice through the SHA256 algorithm.
     *
     * @return self
     */
    public function setBlockHash($block_hash)
    {
        if (is_null($block_hash)) {
            throw new \InvalidArgumentException('non-nullable block_hash cannot be null');
        }
        $this->container['block_hash'] = $block_hash;

        return $this;
    }

    /**
     * Gets block_height
     *
     * @return int
     */
    public function getBlockHeight()
    {
        return $this->container['block_height'];
    }

    /**
     * Sets block_height
     *
     * @param int $block_height Represents the number of blocks in the blockchain preceding this specific block. Block numbers have no gaps. A blockchain usually starts with block 0 called the \"Genesis block\".
     *
     * @return self
     */
    public function setBlockHeight($block_height)
    {
        if (is_null($block_height)) {
            throw new \InvalidArgumentException('non-nullable block_height cannot be null');
        }
        $this->container['block_height'] = $block_height;

        return $this;
    }

    /**
     * Gets previous_block_hash
     *
     * @return string
     */
    public function getPreviousBlockHash()
    {
        return $this->container['previous_block_hash'];
    }

    /**
     * Sets previous_block_hash
     *
     * @param string $previous_block_hash Represents the hash of the previous block, also known as the parent block.
     *
     * @return self
     */
    public function setPreviousBlockHash($previous_block_hash)
    {
        if (is_null($previous_block_hash)) {
            throw new \InvalidArgumentException('non-nullable previous_block_hash cannot be null');
        }
        $this->container['previous_block_hash'] = $previous_block_hash;

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
     * @param int $timestamp Defines the exact date/time when this block was mined in Unix Timestamp.
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
     * Gets transactions_count
     *
     * @return int
     */
    public function getTransactionsCount()
    {
        return $this->container['transactions_count'];
    }

    /**
     * Sets transactions_count
     *
     * @param int $transactions_count Represents the total number of all transactions as part of this block.
     *
     * @return self
     */
    public function setTransactionsCount($transactions_count)
    {
        if (is_null($transactions_count)) {
            throw new \InvalidArgumentException('non-nullable transactions_count cannot be null');
        }
        $this->container['transactions_count'] = $transactions_count;

        return $this;
    }

    /**
     * Gets total_coins
     *
     * @return \com.cryptoapis.rest_apis.sdk\Model\GetLatestMinedXRPRippleBlockRITotalCoins
     */
    public function getTotalCoins()
    {
        return $this->container['total_coins'];
    }

    /**
     * Sets total_coins
     *
     * @param \com.cryptoapis.rest_apis.sdk\Model\GetLatestMinedXRPRippleBlockRITotalCoins $total_coins total_coins
     *
     * @return self
     */
    public function setTotalCoins($total_coins)
    {
        if (is_null($total_coins)) {
            throw new \InvalidArgumentException('non-nullable total_coins cannot be null');
        }
        $this->container['total_coins'] = $total_coins;

        return $this;
    }

    /**
     * Gets total_fees
     *
     * @return \com.cryptoapis.rest_apis.sdk\Model\GetLatestMinedXRPRippleBlockRITotalFees
     */
    public function getTotalFees()
    {
        return $this->container['total_fees'];
    }

    /**
     * Sets total_fees
     *
     * @param \com.cryptoapis.rest_apis.sdk\Model\GetLatestMinedXRPRippleBlockRITotalFees $total_fees total_fees
     *
     * @return self
     */
    public function setTotalFees($total_fees)
    {
        if (is_null($total_fees)) {
            throw new \InvalidArgumentException('non-nullable total_fees cannot be null');
        }
        $this->container['total_fees'] = $total_fees;

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


