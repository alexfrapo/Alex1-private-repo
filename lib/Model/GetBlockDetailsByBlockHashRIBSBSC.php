<?php
/**
 * GetBlockDetailsByBlockHashRIBSBSC
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
 * GetBlockDetailsByBlockHashRIBSBSC Class Doc Comment
 *
 * @category Class
 * @description Binance Smart Chain
 * @package  com.cryptoapis.rest_apis.sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetBlockDetailsByBlockHashRIBSBSC implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetBlockDetailsByBlockHashRIBSBSC';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'difficulty' => 'string',
        'extra_data' => 'string',
        'gas_limit' => 'string',
        'gas_used' => 'string',
        'mined_in_seconds' => 'int',
        'nonce' => 'string',
        'sha3_uncles' => 'string',
        'size' => 'int',
        'total_difficulty' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'difficulty' => null,
        'extra_data' => null,
        'gas_limit' => null,
        'gas_used' => null,
        'mined_in_seconds' => null,
        'nonce' => null,
        'sha3_uncles' => null,
        'size' => null,
        'total_difficulty' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'difficulty' => false,
        'extra_data' => false,
        'gas_limit' => false,
        'gas_used' => false,
        'mined_in_seconds' => false,
        'nonce' => false,
        'sha3_uncles' => false,
        'size' => false,
        'total_difficulty' => false
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
        'difficulty' => 'difficulty',
        'extra_data' => 'extraData',
        'gas_limit' => 'gasLimit',
        'gas_used' => 'gasUsed',
        'mined_in_seconds' => 'minedInSeconds',
        'nonce' => 'nonce',
        'sha3_uncles' => 'sha3Uncles',
        'size' => 'size',
        'total_difficulty' => 'totalDifficulty'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'difficulty' => 'setDifficulty',
        'extra_data' => 'setExtraData',
        'gas_limit' => 'setGasLimit',
        'gas_used' => 'setGasUsed',
        'mined_in_seconds' => 'setMinedInSeconds',
        'nonce' => 'setNonce',
        'sha3_uncles' => 'setSha3Uncles',
        'size' => 'setSize',
        'total_difficulty' => 'setTotalDifficulty'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'difficulty' => 'getDifficulty',
        'extra_data' => 'getExtraData',
        'gas_limit' => 'getGasLimit',
        'gas_used' => 'getGasUsed',
        'mined_in_seconds' => 'getMinedInSeconds',
        'nonce' => 'getNonce',
        'sha3_uncles' => 'getSha3Uncles',
        'size' => 'getSize',
        'total_difficulty' => 'getTotalDifficulty'
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
        $this->setIfExists('difficulty', $data ?? [], null);
        $this->setIfExists('extra_data', $data ?? [], null);
        $this->setIfExists('gas_limit', $data ?? [], null);
        $this->setIfExists('gas_used', $data ?? [], null);
        $this->setIfExists('mined_in_seconds', $data ?? [], null);
        $this->setIfExists('nonce', $data ?? [], null);
        $this->setIfExists('sha3_uncles', $data ?? [], null);
        $this->setIfExists('size', $data ?? [], null);
        $this->setIfExists('total_difficulty', $data ?? [], null);
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

        if ($this->container['difficulty'] === null) {
            $invalidProperties[] = "'difficulty' can't be null";
        }
        if ($this->container['extra_data'] === null) {
            $invalidProperties[] = "'extra_data' can't be null";
        }
        if ($this->container['gas_limit'] === null) {
            $invalidProperties[] = "'gas_limit' can't be null";
        }
        if ($this->container['gas_used'] === null) {
            $invalidProperties[] = "'gas_used' can't be null";
        }
        if ($this->container['mined_in_seconds'] === null) {
            $invalidProperties[] = "'mined_in_seconds' can't be null";
        }
        if ($this->container['nonce'] === null) {
            $invalidProperties[] = "'nonce' can't be null";
        }
        if ($this->container['sha3_uncles'] === null) {
            $invalidProperties[] = "'sha3_uncles' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['total_difficulty'] === null) {
            $invalidProperties[] = "'total_difficulty' can't be null";
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
     * Gets difficulty
     *
     * @return string
     */
    public function getDifficulty()
    {
        return $this->container['difficulty'];
    }

    /**
     * Sets difficulty
     *
     * @param string $difficulty Represents a mathematical value of how hard it is to find a valid hash for this block.
     *
     * @return self
     */
    public function setDifficulty($difficulty)
    {
        if (is_null($difficulty)) {
            throw new \InvalidArgumentException('non-nullable difficulty cannot be null');
        }
        $this->container['difficulty'] = $difficulty;

        return $this;
    }

    /**
     * Gets extra_data
     *
     * @return string
     */
    public function getExtraData()
    {
        return $this->container['extra_data'];
    }

    /**
     * Sets extra_data
     *
     * @param string $extra_data Represents any data that can be included by the miner in the block.
     *
     * @return self
     */
    public function setExtraData($extra_data)
    {
        if (is_null($extra_data)) {
            throw new \InvalidArgumentException('non-nullable extra_data cannot be null');
        }
        $this->container['extra_data'] = $extra_data;

        return $this;
    }

    /**
     * Gets gas_limit
     *
     * @return string
     */
    public function getGasLimit()
    {
        return $this->container['gas_limit'];
    }

    /**
     * Sets gas_limit
     *
     * @param string $gas_limit Defines the total gas limit of all transactions in the block.
     *
     * @return self
     */
    public function setGasLimit($gas_limit)
    {
        if (is_null($gas_limit)) {
            throw new \InvalidArgumentException('non-nullable gas_limit cannot be null');
        }
        $this->container['gas_limit'] = $gas_limit;

        return $this;
    }

    /**
     * Gets gas_used
     *
     * @return string
     */
    public function getGasUsed()
    {
        return $this->container['gas_used'];
    }

    /**
     * Sets gas_used
     *
     * @param string $gas_used Represents the total amount of gas used by all transactions in this block.
     *
     * @return self
     */
    public function setGasUsed($gas_used)
    {
        if (is_null($gas_used)) {
            throw new \InvalidArgumentException('non-nullable gas_used cannot be null');
        }
        $this->container['gas_used'] = $gas_used;

        return $this;
    }

    /**
     * Gets mined_in_seconds
     *
     * @return int
     */
    public function getMinedInSeconds()
    {
        return $this->container['mined_in_seconds'];
    }

    /**
     * Sets mined_in_seconds
     *
     * @param int $mined_in_seconds Specifies the amount of time required for the block to be mined in seconds.
     *
     * @return self
     */
    public function setMinedInSeconds($mined_in_seconds)
    {
        if (is_null($mined_in_seconds)) {
            throw new \InvalidArgumentException('non-nullable mined_in_seconds cannot be null');
        }
        $this->container['mined_in_seconds'] = $mined_in_seconds;

        return $this;
    }

    /**
     * Gets nonce
     *
     * @return string
     */
    public function getNonce()
    {
        return $this->container['nonce'];
    }

    /**
     * Sets nonce
     *
     * @param string $nonce Represents a random value that can be adjusted to satisfy the Proof of Work.
     *
     * @return self
     */
    public function setNonce($nonce)
    {
        if (is_null($nonce)) {
            throw new \InvalidArgumentException('non-nullable nonce cannot be null');
        }
        $this->container['nonce'] = $nonce;

        return $this;
    }

    /**
     * Gets sha3_uncles
     *
     * @return string
     */
    public function getSha3Uncles()
    {
        return $this->container['sha3_uncles'];
    }

    /**
     * Sets sha3_uncles
     *
     * @param string $sha3_uncles Defines the combined hash of all uncles for a given parent.
     *
     * @return self
     */
    public function setSha3Uncles($sha3_uncles)
    {
        if (is_null($sha3_uncles)) {
            throw new \InvalidArgumentException('non-nullable sha3_uncles cannot be null');
        }
        $this->container['sha3_uncles'] = $sha3_uncles;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int $size Represents the total size of the block in Bytes.
     *
     * @return self
     */
    public function setSize($size)
    {
        if (is_null($size)) {
            throw new \InvalidArgumentException('non-nullable size cannot be null');
        }
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets total_difficulty
     *
     * @return string
     */
    public function getTotalDifficulty()
    {
        return $this->container['total_difficulty'];
    }

    /**
     * Sets total_difficulty
     *
     * @param string $total_difficulty Defines the total difficulty of the chain until this block, i.e. how difficult it is for a specific miner to mine a new block.
     *
     * @return self
     */
    public function setTotalDifficulty($total_difficulty)
    {
        if (is_null($total_difficulty)) {
            throw new \InvalidArgumentException('non-nullable total_difficulty cannot be null');
        }
        $this->container['total_difficulty'] = $total_difficulty;

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


