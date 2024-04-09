<?php
/**
 * PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRIBSBCVinInner
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
 * PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRIBSBCVinInner Class Doc Comment
 *
 * @category Class
 * @package  com.cryptoapis.rest_apis.sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRIBSBCVinInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PrepareAUTXO_BasedTransactionFromHDWalletXPubYPubZPubRIBSBC_vin_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => 'string',
        'change' => 'int',
        'derivation_index' => 'int',
        'output_index' => 'int',
        'satoshis' => 'int',
        'script' => 'string',
        'sighash' => 'string',
        'transaction_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address' => null,
        'change' => 'int64',
        'derivation_index' => 'int64',
        'output_index' => null,
        'satoshis' => 'int64',
        'script' => null,
        'sighash' => null,
        'transaction_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'address' => false,
        'change' => false,
        'derivation_index' => false,
        'output_index' => false,
        'satoshis' => false,
        'script' => false,
        'sighash' => false,
        'transaction_id' => false
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
        'address' => 'address',
        'change' => 'change',
        'derivation_index' => 'derivationIndex',
        'output_index' => 'outputIndex',
        'satoshis' => 'satoshis',
        'script' => 'script',
        'sighash' => 'sighash',
        'transaction_id' => 'transactionId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'change' => 'setChange',
        'derivation_index' => 'setDerivationIndex',
        'output_index' => 'setOutputIndex',
        'satoshis' => 'setSatoshis',
        'script' => 'setScript',
        'sighash' => 'setSighash',
        'transaction_id' => 'setTransactionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'change' => 'getChange',
        'derivation_index' => 'getDerivationIndex',
        'output_index' => 'getOutputIndex',
        'satoshis' => 'getSatoshis',
        'script' => 'getScript',
        'sighash' => 'getSighash',
        'transaction_id' => 'getTransactionId'
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
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('change', $data ?? [], null);
        $this->setIfExists('derivation_index', $data ?? [], null);
        $this->setIfExists('output_index', $data ?? [], null);
        $this->setIfExists('satoshis', $data ?? [], null);
        $this->setIfExists('script', $data ?? [], null);
        $this->setIfExists('sighash', $data ?? [], null);
        $this->setIfExists('transaction_id', $data ?? [], null);
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

        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['change'] === null) {
            $invalidProperties[] = "'change' can't be null";
        }
        if ($this->container['derivation_index'] === null) {
            $invalidProperties[] = "'derivation_index' can't be null";
        }
        if ($this->container['output_index'] === null) {
            $invalidProperties[] = "'output_index' can't be null";
        }
        if ($this->container['satoshis'] === null) {
            $invalidProperties[] = "'satoshis' can't be null";
        }
        if ($this->container['script'] === null) {
            $invalidProperties[] = "'script' can't be null";
        }
        if ($this->container['sighash'] === null) {
            $invalidProperties[] = "'sighash' can't be null";
        }
        if ($this->container['transaction_id'] === null) {
            $invalidProperties[] = "'transaction_id' can't be null";
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
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address Representation of the address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets change
     *
     * @return int
     */
    public function getChange()
    {
        return $this->container['change'];
    }

    /**
     * Sets change
     *
     * @param int $change Representation of the change value
     *
     * @return self
     */
    public function setChange($change)
    {
        if (is_null($change)) {
            throw new \InvalidArgumentException('non-nullable change cannot be null');
        }
        $this->container['change'] = $change;

        return $this;
    }

    /**
     * Gets derivation_index
     *
     * @return int
     */
    public function getDerivationIndex()
    {
        return $this->container['derivation_index'];
    }

    /**
     * Sets derivation_index
     *
     * @param int $derivation_index Representation of the derivation index of the xpub address.
     *
     * @return self
     */
    public function setDerivationIndex($derivation_index)
    {
        if (is_null($derivation_index)) {
            throw new \InvalidArgumentException('non-nullable derivation_index cannot be null');
        }
        $this->container['derivation_index'] = $derivation_index;

        return $this;
    }

    /**
     * Gets output_index
     *
     * @return int
     */
    public function getOutputIndex()
    {
        return $this->container['output_index'];
    }

    /**
     * Sets output_index
     *
     * @param int $output_index Representation of the output index
     *
     * @return self
     */
    public function setOutputIndex($output_index)
    {
        if (is_null($output_index)) {
            throw new \InvalidArgumentException('non-nullable output_index cannot be null');
        }
        $this->container['output_index'] = $output_index;

        return $this;
    }

    /**
     * Gets satoshis
     *
     * @return int
     */
    public function getSatoshis()
    {
        return $this->container['satoshis'];
    }

    /**
     * Sets satoshis
     *
     * @param int $satoshis Representation of the satoshis value
     *
     * @return self
     */
    public function setSatoshis($satoshis)
    {
        if (is_null($satoshis)) {
            throw new \InvalidArgumentException('non-nullable satoshis cannot be null');
        }
        $this->container['satoshis'] = $satoshis;

        return $this;
    }

    /**
     * Gets script
     *
     * @return string
     */
    public function getScript()
    {
        return $this->container['script'];
    }

    /**
     * Sets script
     *
     * @param string $script Representation of the script string
     *
     * @return self
     */
    public function setScript($script)
    {
        if (is_null($script)) {
            throw new \InvalidArgumentException('non-nullable script cannot be null');
        }
        $this->container['script'] = $script;

        return $this;
    }

    /**
     * Gets sighash
     *
     * @return string
     */
    public function getSighash()
    {
        return $this->container['sighash'];
    }

    /**
     * Sets sighash
     *
     * @param string $sighash Representation of the hash that should be signed.
     *
     * @return self
     */
    public function setSighash($sighash)
    {
        if (is_null($sighash)) {
            throw new \InvalidArgumentException('non-nullable sighash cannot be null');
        }
        $this->container['sighash'] = $sighash;

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
     * @param string $transaction_id Represents the reference transaction identifier.
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


