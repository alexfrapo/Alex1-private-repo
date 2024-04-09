<?php
/**
 * DecodeRawTransactionHexRISD2
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
 * DecodeRawTransactionHexRISD2 Class Doc Comment
 *
 * @category Class
 * @description Dogecoin
 * @package  com.cryptoapis.rest_apis.sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DecodeRawTransactionHexRISD2 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DecodeRawTransactionHexRISD2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'locktime' => 'int',
        'transaction_hash' => 'string',
        'v_size' => 'int',
        'version' => 'int',
        'vin' => '\com.cryptoapis.rest_apis.sdk\Model\DecodeRawTransactionHexRISD2VinInner[]',
        'vout' => '\com.cryptoapis.rest_apis.sdk\Model\DecodeRawTransactionHexRISD2VoutInner[]',
        'weight' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'locktime' => null,
        'transaction_hash' => null,
        'v_size' => null,
        'version' => null,
        'vin' => null,
        'vout' => null,
        'weight' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'locktime' => false,
        'transaction_hash' => false,
        'v_size' => false,
        'version' => false,
        'vin' => false,
        'vout' => false,
        'weight' => false
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
        'locktime' => 'locktime',
        'transaction_hash' => 'transactionHash',
        'v_size' => 'vSize',
        'version' => 'version',
        'vin' => 'vin',
        'vout' => 'vout',
        'weight' => 'weight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'locktime' => 'setLocktime',
        'transaction_hash' => 'setTransactionHash',
        'v_size' => 'setVSize',
        'version' => 'setVersion',
        'vin' => 'setVin',
        'vout' => 'setVout',
        'weight' => 'setWeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'locktime' => 'getLocktime',
        'transaction_hash' => 'getTransactionHash',
        'v_size' => 'getVSize',
        'version' => 'getVersion',
        'vin' => 'getVin',
        'vout' => 'getVout',
        'weight' => 'getWeight'
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
        $this->setIfExists('locktime', $data ?? [], null);
        $this->setIfExists('transaction_hash', $data ?? [], null);
        $this->setIfExists('v_size', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('vin', $data ?? [], null);
        $this->setIfExists('vout', $data ?? [], null);
        $this->setIfExists('weight', $data ?? [], null);
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

        if ($this->container['locktime'] === null) {
            $invalidProperties[] = "'locktime' can't be null";
        }
        if ($this->container['transaction_hash'] === null) {
            $invalidProperties[] = "'transaction_hash' can't be null";
        }
        if ($this->container['v_size'] === null) {
            $invalidProperties[] = "'v_size' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['vin'] === null) {
            $invalidProperties[] = "'vin' can't be null";
        }
        if ($this->container['vout'] === null) {
            $invalidProperties[] = "'vout' can't be null";
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
     * Gets locktime
     *
     * @return int
     */
    public function getLocktime()
    {
        return $this->container['locktime'];
    }

    /**
     * Sets locktime
     *
     * @param int $locktime Represents the time at which a particular transaction can be added to the blockchain.
     *
     * @return self
     */
    public function setLocktime($locktime)
    {
        if (is_null($locktime)) {
            throw new \InvalidArgumentException('non-nullable locktime cannot be null');
        }
        $this->container['locktime'] = $locktime;

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
     * @param string $transaction_hash Represents the same as transactionId for account-based protocols like Ethereum, while it could be different in UTXO-based protocols like Bitcoin. E.g., in UTXO-based protocols hash is different from transactionId for SegWit transactions.
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
     * Gets v_size
     *
     * @return int
     */
    public function getVSize()
    {
        return $this->container['v_size'];
    }

    /**
     * Sets v_size
     *
     * @param int $v_size Represents the virtual size of this transaction.
     *
     * @return self
     */
    public function setVSize($v_size)
    {
        if (is_null($v_size)) {
            throw new \InvalidArgumentException('non-nullable v_size cannot be null');
        }
        $this->container['v_size'] = $v_size;

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
     * @param int $version Represents transaction version number
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
     * Gets vin
     *
     * @return \com.cryptoapis.rest_apis.sdk\Model\DecodeRawTransactionHexRISD2VinInner[]
     */
    public function getVin()
    {
        return $this->container['vin'];
    }

    /**
     * Sets vin
     *
     * @param \com.cryptoapis.rest_apis.sdk\Model\DecodeRawTransactionHexRISD2VinInner[] $vin Represents the transaction inputs.
     *
     * @return self
     */
    public function setVin($vin)
    {
        if (is_null($vin)) {
            throw new \InvalidArgumentException('non-nullable vin cannot be null');
        }
        $this->container['vin'] = $vin;

        return $this;
    }

    /**
     * Gets vout
     *
     * @return \com.cryptoapis.rest_apis.sdk\Model\DecodeRawTransactionHexRISD2VoutInner[]
     */
    public function getVout()
    {
        return $this->container['vout'];
    }

    /**
     * Sets vout
     *
     * @param \com.cryptoapis.rest_apis.sdk\Model\DecodeRawTransactionHexRISD2VoutInner[] $vout Represents the transaction outputs.
     *
     * @return self
     */
    public function setVout($vout)
    {
        if (is_null($vout)) {
            throw new \InvalidArgumentException('non-nullable vout cannot be null');
        }
        $this->container['vout'] = $vout;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return int|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param int|null $weight Represents the size of a block, measured in weight units and including the segwit discount.
     *
     * @return self
     */
    public function setWeight($weight)
    {
        if (is_null($weight)) {
            throw new \InvalidArgumentException('non-nullable weight cannot be null');
        }
        $this->container['weight'] = $weight;

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


