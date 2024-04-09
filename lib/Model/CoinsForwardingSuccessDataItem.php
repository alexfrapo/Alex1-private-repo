<?php
/**
 * CoinsForwardingSuccessDataItem
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
 * CoinsForwardingSuccessDataItem Class Doc Comment
 *
 * @category Class
 * @description Defines an &#x60;item&#x60; as one result.
 * @package  com.cryptoapis.rest_apis.sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CoinsForwardingSuccessDataItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CoinsForwardingSuccess_data_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'blockchain' => 'string',
        'network' => 'string',
        'from_address' => 'string',
        'to_address' => 'string',
        'forwarded_amount' => 'string',
        'forwarded_unit' => 'string',
        'spent_fees_amount' => 'string',
        'spent_fees_unit' => 'string',
        'trigger_transaction_id' => 'string',
        'forwarding_transaction_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'blockchain' => null,
        'network' => null,
        'from_address' => null,
        'to_address' => null,
        'forwarded_amount' => null,
        'forwarded_unit' => null,
        'spent_fees_amount' => null,
        'spent_fees_unit' => null,
        'trigger_transaction_id' => null,
        'forwarding_transaction_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'blockchain' => false,
        'network' => false,
        'from_address' => false,
        'to_address' => false,
        'forwarded_amount' => false,
        'forwarded_unit' => false,
        'spent_fees_amount' => false,
        'spent_fees_unit' => false,
        'trigger_transaction_id' => false,
        'forwarding_transaction_id' => false
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
        'blockchain' => 'blockchain',
        'network' => 'network',
        'from_address' => 'fromAddress',
        'to_address' => 'toAddress',
        'forwarded_amount' => 'forwardedAmount',
        'forwarded_unit' => 'forwardedUnit',
        'spent_fees_amount' => 'spentFeesAmount',
        'spent_fees_unit' => 'spentFeesUnit',
        'trigger_transaction_id' => 'triggerTransactionId',
        'forwarding_transaction_id' => 'forwardingTransactionId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'blockchain' => 'setBlockchain',
        'network' => 'setNetwork',
        'from_address' => 'setFromAddress',
        'to_address' => 'setToAddress',
        'forwarded_amount' => 'setForwardedAmount',
        'forwarded_unit' => 'setForwardedUnit',
        'spent_fees_amount' => 'setSpentFeesAmount',
        'spent_fees_unit' => 'setSpentFeesUnit',
        'trigger_transaction_id' => 'setTriggerTransactionId',
        'forwarding_transaction_id' => 'setForwardingTransactionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'blockchain' => 'getBlockchain',
        'network' => 'getNetwork',
        'from_address' => 'getFromAddress',
        'to_address' => 'getToAddress',
        'forwarded_amount' => 'getForwardedAmount',
        'forwarded_unit' => 'getForwardedUnit',
        'spent_fees_amount' => 'getSpentFeesAmount',
        'spent_fees_unit' => 'getSpentFeesUnit',
        'trigger_transaction_id' => 'getTriggerTransactionId',
        'forwarding_transaction_id' => 'getForwardingTransactionId'
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
        $this->setIfExists('blockchain', $data ?? [], null);
        $this->setIfExists('network', $data ?? [], null);
        $this->setIfExists('from_address', $data ?? [], null);
        $this->setIfExists('to_address', $data ?? [], null);
        $this->setIfExists('forwarded_amount', $data ?? [], null);
        $this->setIfExists('forwarded_unit', $data ?? [], null);
        $this->setIfExists('spent_fees_amount', $data ?? [], null);
        $this->setIfExists('spent_fees_unit', $data ?? [], null);
        $this->setIfExists('trigger_transaction_id', $data ?? [], null);
        $this->setIfExists('forwarding_transaction_id', $data ?? [], null);
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

        if ($this->container['blockchain'] === null) {
            $invalidProperties[] = "'blockchain' can't be null";
        }
        if ($this->container['network'] === null) {
            $invalidProperties[] = "'network' can't be null";
        }
        if ($this->container['from_address'] === null) {
            $invalidProperties[] = "'from_address' can't be null";
        }
        if ($this->container['to_address'] === null) {
            $invalidProperties[] = "'to_address' can't be null";
        }
        if ($this->container['forwarded_amount'] === null) {
            $invalidProperties[] = "'forwarded_amount' can't be null";
        }
        if ($this->container['forwarded_unit'] === null) {
            $invalidProperties[] = "'forwarded_unit' can't be null";
        }
        if ($this->container['spent_fees_amount'] === null) {
            $invalidProperties[] = "'spent_fees_amount' can't be null";
        }
        if ($this->container['spent_fees_unit'] === null) {
            $invalidProperties[] = "'spent_fees_unit' can't be null";
        }
        if ($this->container['trigger_transaction_id'] === null) {
            $invalidProperties[] = "'trigger_transaction_id' can't be null";
        }
        if ($this->container['forwarding_transaction_id'] === null) {
            $invalidProperties[] = "'forwarding_transaction_id' can't be null";
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
     * Gets blockchain
     *
     * @return string
     */
    public function getBlockchain()
    {
        return $this->container['blockchain'];
    }

    /**
     * Sets blockchain
     *
     * @param string $blockchain Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
     *
     * @return self
     */
    public function setBlockchain($blockchain)
    {
        if (is_null($blockchain)) {
            throw new \InvalidArgumentException('non-nullable blockchain cannot be null');
        }
        $this->container['blockchain'] = $blockchain;

        return $this;
    }

    /**
     * Gets network
     *
     * @return string
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     *
     * @param string $network Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\", \"rinkeby\" are test networks.
     *
     * @return self
     */
    public function setNetwork($network)
    {
        if (is_null($network)) {
            throw new \InvalidArgumentException('non-nullable network cannot be null');
        }
        $this->container['network'] = $network;

        return $this;
    }

    /**
     * Gets from_address
     *
     * @return string
     */
    public function getFromAddress()
    {
        return $this->container['from_address'];
    }

    /**
     * Sets from_address
     *
     * @param string $from_address Represents the hash of the address that provides the coins.
     *
     * @return self
     */
    public function setFromAddress($from_address)
    {
        if (is_null($from_address)) {
            throw new \InvalidArgumentException('non-nullable from_address cannot be null');
        }
        $this->container['from_address'] = $from_address;

        return $this;
    }

    /**
     * Gets to_address
     *
     * @return string
     */
    public function getToAddress()
    {
        return $this->container['to_address'];
    }

    /**
     * Sets to_address
     *
     * @param string $to_address Represents the hash of the address to forward the coins to.
     *
     * @return self
     */
    public function setToAddress($to_address)
    {
        if (is_null($to_address)) {
            throw new \InvalidArgumentException('non-nullable to_address cannot be null');
        }
        $this->container['to_address'] = $to_address;

        return $this;
    }

    /**
     * Gets forwarded_amount
     *
     * @return string
     */
    public function getForwardedAmount()
    {
        return $this->container['forwarded_amount'];
    }

    /**
     * Sets forwarded_amount
     *
     * @param string $forwarded_amount Represents the amount of coins that have been forwarded.
     *
     * @return self
     */
    public function setForwardedAmount($forwarded_amount)
    {
        if (is_null($forwarded_amount)) {
            throw new \InvalidArgumentException('non-nullable forwarded_amount cannot be null');
        }
        $this->container['forwarded_amount'] = $forwarded_amount;

        return $this;
    }

    /**
     * Gets forwarded_unit
     *
     * @return string
     */
    public function getForwardedUnit()
    {
        return $this->container['forwarded_unit'];
    }

    /**
     * Sets forwarded_unit
     *
     * @param string $forwarded_unit Represents the unit of coins that have been forwarded, e.g. BTC.
     *
     * @return self
     */
    public function setForwardedUnit($forwarded_unit)
    {
        if (is_null($forwarded_unit)) {
            throw new \InvalidArgumentException('non-nullable forwarded_unit cannot be null');
        }
        $this->container['forwarded_unit'] = $forwarded_unit;

        return $this;
    }

    /**
     * Gets spent_fees_amount
     *
     * @return string
     */
    public function getSpentFeesAmount()
    {
        return $this->container['spent_fees_amount'];
    }

    /**
     * Sets spent_fees_amount
     *
     * @param string $spent_fees_amount Represents the amount of the fee spent for the coins to be forwarded.
     *
     * @return self
     */
    public function setSpentFeesAmount($spent_fees_amount)
    {
        if (is_null($spent_fees_amount)) {
            throw new \InvalidArgumentException('non-nullable spent_fees_amount cannot be null');
        }
        $this->container['spent_fees_amount'] = $spent_fees_amount;

        return $this;
    }

    /**
     * Gets spent_fees_unit
     *
     * @return string
     */
    public function getSpentFeesUnit()
    {
        return $this->container['spent_fees_unit'];
    }

    /**
     * Sets spent_fees_unit
     *
     * @param string $spent_fees_unit Represents the unit of the fee spent for the coins to be forwarded, e.g. BTC.
     *
     * @return self
     */
    public function setSpentFeesUnit($spent_fees_unit)
    {
        if (is_null($spent_fees_unit)) {
            throw new \InvalidArgumentException('non-nullable spent_fees_unit cannot be null');
        }
        $this->container['spent_fees_unit'] = $spent_fees_unit;

        return $this;
    }

    /**
     * Gets trigger_transaction_id
     *
     * @return string
     */
    public function getTriggerTransactionId()
    {
        return $this->container['trigger_transaction_id'];
    }

    /**
     * Sets trigger_transaction_id
     *
     * @param string $trigger_transaction_id Defines the unique Transaction ID that triggered the coin forwarding.
     *
     * @return self
     */
    public function setTriggerTransactionId($trigger_transaction_id)
    {
        if (is_null($trigger_transaction_id)) {
            throw new \InvalidArgumentException('non-nullable trigger_transaction_id cannot be null');
        }
        $this->container['trigger_transaction_id'] = $trigger_transaction_id;

        return $this;
    }

    /**
     * Gets forwarding_transaction_id
     *
     * @return string
     */
    public function getForwardingTransactionId()
    {
        return $this->container['forwarding_transaction_id'];
    }

    /**
     * Sets forwarding_transaction_id
     *
     * @param string $forwarding_transaction_id Defines the unique Transaction ID that forwarded the coins.
     *
     * @return self
     */
    public function setForwardingTransactionId($forwarding_transaction_id)
    {
        if (is_null($forwarding_transaction_id)) {
            throw new \InvalidArgumentException('non-nullable forwarding_transaction_id cannot be null');
        }
        $this->container['forwarding_transaction_id'] = $forwarding_transaction_id;

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

