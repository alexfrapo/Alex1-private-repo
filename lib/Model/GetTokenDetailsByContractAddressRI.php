<?php
/**
 * GetTokenDetailsByContractAddressRI
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
 * GetTokenDetailsByContractAddressRI Class Doc Comment
 *
 * @category Class
 * @package  com.cryptoapis.rest_apis.sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetTokenDetailsByContractAddressRI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetTokenDetailsByContractAddressRI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'token_type' => 'string',
        'token_decimals' => 'string',
        'token_name' => 'string',
        'token_symbol' => 'string',
        'total_supply' => 'string',
        'blockchain_specific' => '\com.cryptoapis.rest_apis.sdk\Model\GetTokenDetailsByContractAddressRIBS'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'token_type' => null,
        'token_decimals' => null,
        'token_name' => null,
        'token_symbol' => null,
        'total_supply' => null,
        'blockchain_specific' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'token_type' => false,
        'token_decimals' => false,
        'token_name' => false,
        'token_symbol' => false,
        'total_supply' => false,
        'blockchain_specific' => false
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
        'token_type' => 'tokenType',
        'token_decimals' => 'tokenDecimals',
        'token_name' => 'tokenName',
        'token_symbol' => 'tokenSymbol',
        'total_supply' => 'totalSupply',
        'blockchain_specific' => 'blockchainSpecific'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'token_type' => 'setTokenType',
        'token_decimals' => 'setTokenDecimals',
        'token_name' => 'setTokenName',
        'token_symbol' => 'setTokenSymbol',
        'total_supply' => 'setTotalSupply',
        'blockchain_specific' => 'setBlockchainSpecific'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'token_type' => 'getTokenType',
        'token_decimals' => 'getTokenDecimals',
        'token_name' => 'getTokenName',
        'token_symbol' => 'getTokenSymbol',
        'total_supply' => 'getTotalSupply',
        'blockchain_specific' => 'getBlockchainSpecific'
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
        $this->setIfExists('token_type', $data ?? [], null);
        $this->setIfExists('token_decimals', $data ?? [], null);
        $this->setIfExists('token_name', $data ?? [], null);
        $this->setIfExists('token_symbol', $data ?? [], null);
        $this->setIfExists('total_supply', $data ?? [], null);
        $this->setIfExists('blockchain_specific', $data ?? [], null);
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

        if ($this->container['token_type'] === null) {
            $invalidProperties[] = "'token_type' can't be null";
        }
        if ($this->container['blockchain_specific'] === null) {
            $invalidProperties[] = "'blockchain_specific' can't be null";
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
     * Gets token_type
     *
     * @return string
     */
    public function getTokenType()
    {
        return $this->container['token_type'];
    }

    /**
     * Sets token_type
     *
     * @param string $token_type Defines the type of the token.
     *
     * @return self
     */
    public function setTokenType($token_type)
    {
        if (is_null($token_type)) {
            throw new \InvalidArgumentException('non-nullable token_type cannot be null');
        }
        $this->container['token_type'] = $token_type;

        return $this;
    }

    /**
     * Gets token_decimals
     *
     * @return string|null
     */
    public function getTokenDecimals()
    {
        return $this->container['token_decimals'];
    }

    /**
     * Sets token_decimals
     *
     * @param string|null $token_decimals Defines the token decimals value
     *
     * @return self
     */
    public function setTokenDecimals($token_decimals)
    {
        if (is_null($token_decimals)) {
            throw new \InvalidArgumentException('non-nullable token_decimals cannot be null');
        }
        $this->container['token_decimals'] = $token_decimals;

        return $this;
    }

    /**
     * Gets token_name
     *
     * @return string|null
     */
    public function getTokenName()
    {
        return $this->container['token_name'];
    }

    /**
     * Sets token_name
     *
     * @param string|null $token_name Specifies the token's name.
     *
     * @return self
     */
    public function setTokenName($token_name)
    {
        if (is_null($token_name)) {
            throw new \InvalidArgumentException('non-nullable token_name cannot be null');
        }
        $this->container['token_name'] = $token_name;

        return $this;
    }

    /**
     * Gets token_symbol
     *
     * @return string|null
     */
    public function getTokenSymbol()
    {
        return $this->container['token_symbol'];
    }

    /**
     * Sets token_symbol
     *
     * @param string|null $token_symbol Defines the identifier of the asset code
     *
     * @return self
     */
    public function setTokenSymbol($token_symbol)
    {
        if (is_null($token_symbol)) {
            throw new \InvalidArgumentException('non-nullable token_symbol cannot be null');
        }
        $this->container['token_symbol'] = $token_symbol;

        return $this;
    }

    /**
     * Gets total_supply
     *
     * @return string|null
     */
    public function getTotalSupply()
    {
        return $this->container['total_supply'];
    }

    /**
     * Sets total_supply
     *
     * @param string|null $total_supply Defines the total number of tokens created that exist on the market minus the ones that have been burned.
     *
     * @return self
     */
    public function setTotalSupply($total_supply)
    {
        if (is_null($total_supply)) {
            throw new \InvalidArgumentException('non-nullable total_supply cannot be null');
        }
        $this->container['total_supply'] = $total_supply;

        return $this;
    }

    /**
     * Gets blockchain_specific
     *
     * @return \com.cryptoapis.rest_apis.sdk\Model\GetTokenDetailsByContractAddressRIBS
     */
    public function getBlockchainSpecific()
    {
        return $this->container['blockchain_specific'];
    }

    /**
     * Sets blockchain_specific
     *
     * @param \com.cryptoapis.rest_apis.sdk\Model\GetTokenDetailsByContractAddressRIBS $blockchain_specific blockchain_specific
     *
     * @return self
     */
    public function setBlockchainSpecific($blockchain_specific)
    {
        if (is_null($blockchain_specific)) {
            throw new \InvalidArgumentException('non-nullable blockchain_specific cannot be null');
        }
        $this->container['blockchain_specific'] = $blockchain_specific;

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


