<?php
/**
 * GetExchangeRateByAssetsIDsRI
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
 * GetExchangeRateByAssetsIDsRI Class Doc Comment
 *
 * @category Class
 * @package  com.cryptoapis.rest_apis.sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetExchangeRateByAssetsIDsRI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetExchangeRateByAssetsIDsRI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'calculation_timestamp' => 'int',
        'from_asset_id' => 'string',
        'from_asset_symbol' => 'string',
        'rate' => 'string',
        'to_asset_id' => 'string',
        'to_asset_symbol' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'calculation_timestamp' => null,
        'from_asset_id' => null,
        'from_asset_symbol' => null,
        'rate' => null,
        'to_asset_id' => null,
        'to_asset_symbol' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'calculation_timestamp' => false,
        'from_asset_id' => false,
        'from_asset_symbol' => false,
        'rate' => false,
        'to_asset_id' => false,
        'to_asset_symbol' => false
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
        'calculation_timestamp' => 'calculationTimestamp',
        'from_asset_id' => 'fromAssetId',
        'from_asset_symbol' => 'fromAssetSymbol',
        'rate' => 'rate',
        'to_asset_id' => 'toAssetId',
        'to_asset_symbol' => 'toAssetSymbol'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'calculation_timestamp' => 'setCalculationTimestamp',
        'from_asset_id' => 'setFromAssetId',
        'from_asset_symbol' => 'setFromAssetSymbol',
        'rate' => 'setRate',
        'to_asset_id' => 'setToAssetId',
        'to_asset_symbol' => 'setToAssetSymbol'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'calculation_timestamp' => 'getCalculationTimestamp',
        'from_asset_id' => 'getFromAssetId',
        'from_asset_symbol' => 'getFromAssetSymbol',
        'rate' => 'getRate',
        'to_asset_id' => 'getToAssetId',
        'to_asset_symbol' => 'getToAssetSymbol'
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
        $this->setIfExists('calculation_timestamp', $data ?? [], null);
        $this->setIfExists('from_asset_id', $data ?? [], null);
        $this->setIfExists('from_asset_symbol', $data ?? [], null);
        $this->setIfExists('rate', $data ?? [], null);
        $this->setIfExists('to_asset_id', $data ?? [], null);
        $this->setIfExists('to_asset_symbol', $data ?? [], null);
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

        if ($this->container['calculation_timestamp'] === null) {
            $invalidProperties[] = "'calculation_timestamp' can't be null";
        }
        if ($this->container['from_asset_id'] === null) {
            $invalidProperties[] = "'from_asset_id' can't be null";
        }
        if ($this->container['from_asset_symbol'] === null) {
            $invalidProperties[] = "'from_asset_symbol' can't be null";
        }
        if ($this->container['rate'] === null) {
            $invalidProperties[] = "'rate' can't be null";
        }
        if ($this->container['to_asset_id'] === null) {
            $invalidProperties[] = "'to_asset_id' can't be null";
        }
        if ($this->container['to_asset_symbol'] === null) {
            $invalidProperties[] = "'to_asset_symbol' can't be null";
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
     * Gets calculation_timestamp
     *
     * @return int
     */
    public function getCalculationTimestamp()
    {
        return $this->container['calculation_timestamp'];
    }

    /**
     * Sets calculation_timestamp
     *
     * @param int $calculation_timestamp Defines the time of the market data used to calculate the exchange rate in UNIX Timestamp. Oldest possible timestamp is 30 days.
     *
     * @return self
     */
    public function setCalculationTimestamp($calculation_timestamp)
    {
        if (is_null($calculation_timestamp)) {
            throw new \InvalidArgumentException('non-nullable calculation_timestamp cannot be null');
        }
        $this->container['calculation_timestamp'] = $calculation_timestamp;

        return $this;
    }

    /**
     * Gets from_asset_id
     *
     * @return string
     */
    public function getFromAssetId()
    {
        return $this->container['from_asset_id'];
    }

    /**
     * Sets from_asset_id
     *
     * @param string $from_asset_id Defines the base asset Reference ID to get a rate for.
     *
     * @return self
     */
    public function setFromAssetId($from_asset_id)
    {
        if (is_null($from_asset_id)) {
            throw new \InvalidArgumentException('non-nullable from_asset_id cannot be null');
        }
        $this->container['from_asset_id'] = $from_asset_id;

        return $this;
    }

    /**
     * Gets from_asset_symbol
     *
     * @return string
     */
    public function getFromAssetSymbol()
    {
        return $this->container['from_asset_symbol'];
    }

    /**
     * Sets from_asset_symbol
     *
     * @param string $from_asset_symbol Defines the base asset symbol to get a rate for.
     *
     * @return self
     */
    public function setFromAssetSymbol($from_asset_symbol)
    {
        if (is_null($from_asset_symbol)) {
            throw new \InvalidArgumentException('non-nullable from_asset_symbol cannot be null');
        }
        $this->container['from_asset_symbol'] = $from_asset_symbol;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return string
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param string $rate Defines the exchange rate between assets calculated by weighted average of the last trades in every exchange for the last 24 hours by giving more weight to exchanges with higher volume.
     *
     * @return self
     */
    public function setRate($rate)
    {
        if (is_null($rate)) {
            throw new \InvalidArgumentException('non-nullable rate cannot be null');
        }
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets to_asset_id
     *
     * @return string
     */
    public function getToAssetId()
    {
        return $this->container['to_asset_id'];
    }

    /**
     * Sets to_asset_id
     *
     * @param string $to_asset_id Defines the relation asset Reference ID in which the base asset rate will be displayed.
     *
     * @return self
     */
    public function setToAssetId($to_asset_id)
    {
        if (is_null($to_asset_id)) {
            throw new \InvalidArgumentException('non-nullable to_asset_id cannot be null');
        }
        $this->container['to_asset_id'] = $to_asset_id;

        return $this;
    }

    /**
     * Gets to_asset_symbol
     *
     * @return string
     */
    public function getToAssetSymbol()
    {
        return $this->container['to_asset_symbol'];
    }

    /**
     * Sets to_asset_symbol
     *
     * @param string $to_asset_symbol Defines the relation asset symbol in which the base asset rate will be displayed.
     *
     * @return self
     */
    public function setToAssetSymbol($to_asset_symbol)
    {
        if (is_null($to_asset_symbol)) {
            throw new \InvalidArgumentException('non-nullable to_asset_symbol cannot be null');
        }
        $this->container['to_asset_symbol'] = $to_asset_symbol;

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


