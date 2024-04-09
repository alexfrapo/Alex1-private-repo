<?php
/**
 * DecodeRawTransactionHexRISB22
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
 * DecodeRawTransactionHexRISB22 Class Doc Comment
 *
 * @category Class
 * @description Binance Smart Chain
 * @package  com.cryptoapis.rest_apis.sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DecodeRawTransactionHexRISB22 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DecodeRawTransactionHexRISB22';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'approximate_fee' => 'string',
        'approximate_minimum_required_fee' => 'string',
        'gas_limit' => 'string',
        'gas_paid_for_data' => 'string',
        'gas_price' => 'string',
        'input_data' => 'string',
        'nonce' => 'int',
        'r' => 'string',
        'recipient' => 'string',
        's' => 'string',
        'sender' => 'string',
        'type' => 'int',
        'v' => 'string',
        'value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'approximate_fee' => null,
        'approximate_minimum_required_fee' => null,
        'gas_limit' => null,
        'gas_paid_for_data' => null,
        'gas_price' => null,
        'input_data' => null,
        'nonce' => null,
        'r' => null,
        'recipient' => null,
        's' => null,
        'sender' => null,
        'type' => null,
        'v' => null,
        'value' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'approximate_fee' => false,
        'approximate_minimum_required_fee' => false,
        'gas_limit' => false,
        'gas_paid_for_data' => false,
        'gas_price' => false,
        'input_data' => false,
        'nonce' => false,
        'r' => false,
        'recipient' => false,
        's' => false,
        'sender' => false,
        'type' => false,
        'v' => false,
        'value' => false
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
        'approximate_fee' => 'approximateFee',
        'approximate_minimum_required_fee' => 'approximateMinimumRequiredFee',
        'gas_limit' => 'gasLimit',
        'gas_paid_for_data' => 'gasPaidForData',
        'gas_price' => 'gasPrice',
        'input_data' => 'inputData',
        'nonce' => 'nonce',
        'r' => 'r',
        'recipient' => 'recipient',
        's' => 's',
        'sender' => 'sender',
        'type' => 'type',
        'v' => 'v',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'approximate_fee' => 'setApproximateFee',
        'approximate_minimum_required_fee' => 'setApproximateMinimumRequiredFee',
        'gas_limit' => 'setGasLimit',
        'gas_paid_for_data' => 'setGasPaidForData',
        'gas_price' => 'setGasPrice',
        'input_data' => 'setInputData',
        'nonce' => 'setNonce',
        'r' => 'setR',
        'recipient' => 'setRecipient',
        's' => 'setS',
        'sender' => 'setSender',
        'type' => 'setType',
        'v' => 'setV',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'approximate_fee' => 'getApproximateFee',
        'approximate_minimum_required_fee' => 'getApproximateMinimumRequiredFee',
        'gas_limit' => 'getGasLimit',
        'gas_paid_for_data' => 'getGasPaidForData',
        'gas_price' => 'getGasPrice',
        'input_data' => 'getInputData',
        'nonce' => 'getNonce',
        'r' => 'getR',
        'recipient' => 'getRecipient',
        's' => 'getS',
        'sender' => 'getSender',
        'type' => 'getType',
        'v' => 'getV',
        'value' => 'getValue'
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
        $this->setIfExists('approximate_fee', $data ?? [], null);
        $this->setIfExists('approximate_minimum_required_fee', $data ?? [], null);
        $this->setIfExists('gas_limit', $data ?? [], null);
        $this->setIfExists('gas_paid_for_data', $data ?? [], null);
        $this->setIfExists('gas_price', $data ?? [], null);
        $this->setIfExists('input_data', $data ?? [], null);
        $this->setIfExists('nonce', $data ?? [], null);
        $this->setIfExists('r', $data ?? [], null);
        $this->setIfExists('recipient', $data ?? [], null);
        $this->setIfExists('s', $data ?? [], null);
        $this->setIfExists('sender', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('v', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
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

        if ($this->container['gas_limit'] === null) {
            $invalidProperties[] = "'gas_limit' can't be null";
        }
        if ($this->container['nonce'] === null) {
            $invalidProperties[] = "'nonce' can't be null";
        }
        if ($this->container['recipient'] === null) {
            $invalidProperties[] = "'recipient' can't be null";
        }
        if ($this->container['sender'] === null) {
            $invalidProperties[] = "'sender' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * Gets approximate_fee
     *
     * @return string|null
     */
    public function getApproximateFee()
    {
        return $this->container['approximate_fee'];
    }

    /**
     * Sets approximate_fee
     *
     * @param string|null $approximate_fee Defines the approximate fee value. When isConfirmed is True - Defines the amount of the transaction fee When isConfirmed is False - For ETH-based blockchains this attribute represents the max fee value.
     *
     * @return self
     */
    public function setApproximateFee($approximate_fee)
    {
        if (is_null($approximate_fee)) {
            throw new \InvalidArgumentException('non-nullable approximate_fee cannot be null');
        }
        $this->container['approximate_fee'] = $approximate_fee;

        return $this;
    }

    /**
     * Gets approximate_minimum_required_fee
     *
     * @return string|null
     */
    public function getApproximateMinimumRequiredFee()
    {
        return $this->container['approximate_minimum_required_fee'];
    }

    /**
     * Sets approximate_minimum_required_fee
     *
     * @param string|null $approximate_minimum_required_fee Defines the approximate minimum fee that is required for the transaction.
     *
     * @return self
     */
    public function setApproximateMinimumRequiredFee($approximate_minimum_required_fee)
    {
        if (is_null($approximate_minimum_required_fee)) {
            throw new \InvalidArgumentException('non-nullable approximate_minimum_required_fee cannot be null');
        }
        $this->container['approximate_minimum_required_fee'] = $approximate_minimum_required_fee;

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
     * @param string $gas_limit Represents the amount of gas used by this specific transaction alone.
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
     * Gets gas_paid_for_data
     *
     * @return string|null
     */
    public function getGasPaidForData()
    {
        return $this->container['gas_paid_for_data'];
    }

    /**
     * Sets gas_paid_for_data
     *
     * @param string|null $gas_paid_for_data Represents the amount of gas paid for the data in the transaction.
     *
     * @return self
     */
    public function setGasPaidForData($gas_paid_for_data)
    {
        if (is_null($gas_paid_for_data)) {
            throw new \InvalidArgumentException('non-nullable gas_paid_for_data cannot be null');
        }
        $this->container['gas_paid_for_data'] = $gas_paid_for_data;

        return $this;
    }

    /**
     * Gets gas_price
     *
     * @return string|null
     */
    public function getGasPrice()
    {
        return $this->container['gas_price'];
    }

    /**
     * Sets gas_price
     *
     * @param string|null $gas_price Represents the price offered to the miner to purchase this amount of gas.
     *
     * @return self
     */
    public function setGasPrice($gas_price)
    {
        if (is_null($gas_price)) {
            throw new \InvalidArgumentException('non-nullable gas_price cannot be null');
        }
        $this->container['gas_price'] = $gas_price;

        return $this;
    }

    /**
     * Gets input_data
     *
     * @return string|null
     */
    public function getInputData()
    {
        return $this->container['input_data'];
    }

    /**
     * Sets input_data
     *
     * @param string|null $input_data Represents additional information that is required for the transaction.
     *
     * @return self
     */
    public function setInputData($input_data)
    {
        if (is_null($input_data)) {
            throw new \InvalidArgumentException('non-nullable input_data cannot be null');
        }
        $this->container['input_data'] = $input_data;

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
     * @param int $nonce Represents the sequential running number for an address, starting from 0 for the first transaction. E.g., if the nonce of a transaction is 10, it would be the 11th transaction sent from the sender's address.
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
     * Gets r
     *
     * @return string|null
     */
    public function getR()
    {
        return $this->container['r'];
    }

    /**
     * Sets r
     *
     * @param string|null $r Represents output of an ECDSA signature.
     *
     * @return self
     */
    public function setR($r)
    {
        if (is_null($r)) {
            throw new \InvalidArgumentException('non-nullable r cannot be null');
        }
        $this->container['r'] = $r;

        return $this;
    }

    /**
     * Gets recipient
     *
     * @return string
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param string $recipient The address which receives this transaction. In UTXO-based protocols like Bitcoin there could be several senders while in account-based protocols like Ethereum there is always only one recipient.
     *
     * @return self
     */
    public function setRecipient($recipient)
    {
        if (is_null($recipient)) {
            throw new \InvalidArgumentException('non-nullable recipient cannot be null');
        }
        $this->container['recipient'] = $recipient;

        return $this;
    }

    /**
     * Gets s
     *
     * @return string|null
     */
    public function getS()
    {
        return $this->container['s'];
    }

    /**
     * Sets s
     *
     * @param string|null $s Represents output of an ECDSA signature.
     *
     * @return self
     */
    public function setS($s)
    {
        if (is_null($s)) {
            throw new \InvalidArgumentException('non-nullable s cannot be null');
        }
        $this->container['s'] = $s;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return string
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param string $sender Represents the address which sends this transaction. In UTXO-based protocols like Bitcoin there could be several senders while in account-based protocols like Ethereum there is always only one sender.
     *
     * @return self
     */
    public function setSender($sender)
    {
        if (is_null($sender)) {
            throw new \InvalidArgumentException('non-nullable sender cannot be null');
        }
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int $type Specifies the transaction type as one from three options: if response returns a `\"0\"` it means the raw transaction includes legacy transaction data, if it is `\"1\"` - includes access lists for EIP2930, and if it is `\"2\"` - EIP1559 data.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets v
     *
     * @return string|null
     */
    public function getV()
    {
        return $this->container['v'];
    }

    /**
     * Sets v
     *
     * @param string|null $v Defines the the recovery id.
     *
     * @return self
     */
    public function setV($v)
    {
        if (is_null($v)) {
            throw new \InvalidArgumentException('non-nullable v cannot be null');
        }
        $this->container['v'] = $v;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string|null $value Represents the sent/received amount.
     *
     * @return self
     */
    public function setValue($value)
    {
        if (is_null($value)) {
            throw new \InvalidArgumentException('non-nullable value cannot be null');
        }
        $this->container['value'] = $value;

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


