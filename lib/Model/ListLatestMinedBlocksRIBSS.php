<?php
/**
 * ListLatestMinedBlocksRIBSS
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
 * ListLatestMinedBlocksRIBSS Class Doc Comment
 *
 * @category Class
 * @description Stellar
 * @package  com.cryptoapis.rest_apis.sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ListLatestMinedBlocksRIBSS implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListLatestMinedBlocksRIBSS';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'base_fee' => 'string',
        'base_reserve' => 'string',
        'failed_transactions' => 'int',
        'protocol_version' => 'string',
        'total_coins' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'base_fee' => null,
        'base_reserve' => null,
        'failed_transactions' => null,
        'protocol_version' => null,
        'total_coins' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'base_fee' => false,
        'base_reserve' => false,
        'failed_transactions' => false,
        'protocol_version' => false,
        'total_coins' => false
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
        'base_fee' => 'baseFee',
        'base_reserve' => 'baseReserve',
        'failed_transactions' => 'failedTransactions',
        'protocol_version' => 'protocolVersion',
        'total_coins' => 'totalCoins'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'base_fee' => 'setBaseFee',
        'base_reserve' => 'setBaseReserve',
        'failed_transactions' => 'setFailedTransactions',
        'protocol_version' => 'setProtocolVersion',
        'total_coins' => 'setTotalCoins'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'base_fee' => 'getBaseFee',
        'base_reserve' => 'getBaseReserve',
        'failed_transactions' => 'getFailedTransactions',
        'protocol_version' => 'getProtocolVersion',
        'total_coins' => 'getTotalCoins'
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
        $this->setIfExists('base_fee', $data ?? [], null);
        $this->setIfExists('base_reserve', $data ?? [], null);
        $this->setIfExists('failed_transactions', $data ?? [], null);
        $this->setIfExists('protocol_version', $data ?? [], null);
        $this->setIfExists('total_coins', $data ?? [], null);
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

        if ($this->container['base_fee'] === null) {
            $invalidProperties[] = "'base_fee' can't be null";
        }
        if ($this->container['base_reserve'] === null) {
            $invalidProperties[] = "'base_reserve' can't be null";
        }
        if ($this->container['failed_transactions'] === null) {
            $invalidProperties[] = "'failed_transactions' can't be null";
        }
        if ($this->container['protocol_version'] === null) {
            $invalidProperties[] = "'protocol_version' can't be null";
        }
        if ($this->container['total_coins'] === null) {
            $invalidProperties[] = "'total_coins' can't be null";
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
     * Gets base_fee
     *
     * @return string
     */
    public function getBaseFee()
    {
        return $this->container['base_fee'];
    }

    /**
     * Sets base_fee
     *
     * @param string $base_fee Representation of the base fee
     *
     * @return self
     */
    public function setBaseFee($base_fee)
    {
        if (is_null($base_fee)) {
            throw new \InvalidArgumentException('non-nullable base_fee cannot be null');
        }
        $this->container['base_fee'] = $base_fee;

        return $this;
    }

    /**
     * Gets base_reserve
     *
     * @return string
     */
    public function getBaseReserve()
    {
        return $this->container['base_reserve'];
    }

    /**
     * Sets base_reserve
     *
     * @param string $base_reserve Representation of the base reserve that refers to the minimum amount of XLM (the native cryptocurrency of the Stellar network) that an account must hold as a reserve as minimum balance.
     *
     * @return self
     */
    public function setBaseReserve($base_reserve)
    {
        if (is_null($base_reserve)) {
            throw new \InvalidArgumentException('non-nullable base_reserve cannot be null');
        }
        $this->container['base_reserve'] = $base_reserve;

        return $this;
    }

    /**
     * Gets failed_transactions
     *
     * @return int
     */
    public function getFailedTransactions()
    {
        return $this->container['failed_transactions'];
    }

    /**
     * Sets failed_transactions
     *
     * @param int $failed_transactions Representation of the blocks' failed transactions count
     *
     * @return self
     */
    public function setFailedTransactions($failed_transactions)
    {
        if (is_null($failed_transactions)) {
            throw new \InvalidArgumentException('non-nullable failed_transactions cannot be null');
        }
        $this->container['failed_transactions'] = $failed_transactions;

        return $this;
    }

    /**
     * Gets protocol_version
     *
     * @return string
     */
    public function getProtocolVersion()
    {
        return $this->container['protocol_version'];
    }

    /**
     * Sets protocol_version
     *
     * @param string $protocol_version Representation of protocol version which refers to the specific set of rules and standards that govern the behavior of the network's nodes and participants.
     *
     * @return self
     */
    public function setProtocolVersion($protocol_version)
    {
        if (is_null($protocol_version)) {
            throw new \InvalidArgumentException('non-nullable protocol_version cannot be null');
        }
        $this->container['protocol_version'] = $protocol_version;

        return $this;
    }

    /**
     * Gets total_coins
     *
     * @return string
     */
    public function getTotalCoins()
    {
        return $this->container['total_coins'];
    }

    /**
     * Sets total_coins
     *
     * @param string $total_coins Representation of the total coins
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


