<?php
/**
 * GetBlockDetailsByBlockHeightFromCallbackRIBSD
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
 * GetBlockDetailsByBlockHeightFromCallbackRIBSD Class Doc Comment
 *
 * @category Class
 * @description Dash
 * @package  com.cryptoapis.rest_apis.sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetBlockDetailsByBlockHeightFromCallbackRIBSD implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetBlockDetailsByBlockHeightFromCallbackRIBSD';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bits' => 'string',
        'chainwork' => 'string',
        'difficulty' => 'string',
        'merkle_root' => 'string',
        'nonce' => 'int',
        'size' => 'int',
        'version' => 'int',
        'version_hex' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bits' => null,
        'chainwork' => null,
        'difficulty' => null,
        'merkle_root' => null,
        'nonce' => 'int64',
        'size' => null,
        'version' => null,
        'version_hex' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'bits' => false,
        'chainwork' => false,
        'difficulty' => false,
        'merkle_root' => false,
        'nonce' => false,
        'size' => false,
        'version' => false,
        'version_hex' => false
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
        'bits' => 'bits',
        'chainwork' => 'chainwork',
        'difficulty' => 'difficulty',
        'merkle_root' => 'merkleRoot',
        'nonce' => 'nonce',
        'size' => 'size',
        'version' => 'version',
        'version_hex' => 'versionHex'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bits' => 'setBits',
        'chainwork' => 'setChainwork',
        'difficulty' => 'setDifficulty',
        'merkle_root' => 'setMerkleRoot',
        'nonce' => 'setNonce',
        'size' => 'setSize',
        'version' => 'setVersion',
        'version_hex' => 'setVersionHex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bits' => 'getBits',
        'chainwork' => 'getChainwork',
        'difficulty' => 'getDifficulty',
        'merkle_root' => 'getMerkleRoot',
        'nonce' => 'getNonce',
        'size' => 'getSize',
        'version' => 'getVersion',
        'version_hex' => 'getVersionHex'
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
        $this->setIfExists('bits', $data ?? [], null);
        $this->setIfExists('chainwork', $data ?? [], null);
        $this->setIfExists('difficulty', $data ?? [], null);
        $this->setIfExists('merkle_root', $data ?? [], null);
        $this->setIfExists('nonce', $data ?? [], null);
        $this->setIfExists('size', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('version_hex', $data ?? [], null);
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

        if ($this->container['bits'] === null) {
            $invalidProperties[] = "'bits' can't be null";
        }
        if ($this->container['chainwork'] === null) {
            $invalidProperties[] = "'chainwork' can't be null";
        }
        if ($this->container['difficulty'] === null) {
            $invalidProperties[] = "'difficulty' can't be null";
        }
        if ($this->container['merkle_root'] === null) {
            $invalidProperties[] = "'merkle_root' can't be null";
        }
        if ($this->container['nonce'] === null) {
            $invalidProperties[] = "'nonce' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['version_hex'] === null) {
            $invalidProperties[] = "'version_hex' can't be null";
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
     * Gets bits
     *
     * @return string
     */
    public function getBits()
    {
        return $this->container['bits'];
    }

    /**
     * Sets bits
     *
     * @param string $bits Represents a specific sub-unit of Dash. Bits have two-decimal precision.
     *
     * @return self
     */
    public function setBits($bits)
    {
        if (is_null($bits)) {
            throw new \InvalidArgumentException('non-nullable bits cannot be null');
        }
        $this->container['bits'] = $bits;

        return $this;
    }

    /**
     * Gets chainwork
     *
     * @return string
     */
    public function getChainwork()
    {
        return $this->container['chainwork'];
    }

    /**
     * Sets chainwork
     *
     * @param string $chainwork Represents a hexadecimal number of all the hashes necessary to produce the current chain. E.g., when converting 0000000000000000000000000000000000000000000086859f7a841475b236fd to a decimal you get 635262017308958427068157 hashes, or 635262 exahashes.
     *
     * @return self
     */
    public function setChainwork($chainwork)
    {
        if (is_null($chainwork)) {
            throw new \InvalidArgumentException('non-nullable chainwork cannot be null');
        }
        $this->container['chainwork'] = $chainwork;

        return $this;
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
     * Gets merkle_root
     *
     * @return string
     */
    public function getMerkleRoot()
    {
        return $this->container['merkle_root'];
    }

    /**
     * Sets merkle_root
     *
     * @param string $merkle_root Defines the single and final (root) node of a Merkle tree. It is the combined hash of all transactions' hashes that are part of a blockchain block.
     *
     * @return self
     */
    public function setMerkleRoot($merkle_root)
    {
        if (is_null($merkle_root)) {
            throw new \InvalidArgumentException('non-nullable merkle_root cannot be null');
        }
        $this->container['merkle_root'] = $merkle_root;

        return $this;
    }

    /**
     * Gets nonce
     *
     * @return int
     */
    public function getNonce()
    {
        return $this->container['nonce'];
    }

    /**
     * Sets nonce
     *
     * @param int $nonce Represents a random value that can be adjusted to satisfy the proof of work
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
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version Represents the version of the specific block on the blockchain.
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets version_hex
     *
     * @return string
     */
    public function getVersionHex()
    {
        return $this->container['version_hex'];
    }

    /**
     * Sets version_hex
     *
     * @param string $version_hex Is the hexadecimal string representation of the block's version.
     *
     * @return self
     */
    public function setVersionHex($version_hex)
    {
        if (is_null($version_hex)) {
            throw new \InvalidArgumentException('non-nullable version_hex cannot be null');
        }
        $this->container['version_hex'] = $version_hex;

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


