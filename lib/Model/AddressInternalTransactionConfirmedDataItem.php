<?php
/**
 * AddressInternalTransactionConfirmedDataItem
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
 * AddressInternalTransactionConfirmedDataItem Class Doc Comment
 *
 * @category Class
 * @description Defines an &#x60;item&#x60; as one result.
 * @package  com.cryptoapis.rest_apis.sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AddressInternalTransactionConfirmedDataItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AddressInternalTransactionConfirmed_data_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'blockchain' => 'string',
        'network' => 'string',
        'address' => 'string',
        'mined_in_block' => '\com.cryptoapis.rest_apis.sdk\Model\AddressInternalTransactionConfirmedDataItemMinedInBlock',
        'parent_transaction_id' => 'string',
        'operation_id' => 'string',
        'amount' => 'string',
        'unit' => 'string',
        'direction' => 'string'
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
        'address' => null,
        'mined_in_block' => null,
        'parent_transaction_id' => null,
        'operation_id' => null,
        'amount' => null,
        'unit' => null,
        'direction' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'blockchain' => false,
        'network' => false,
        'address' => false,
        'mined_in_block' => false,
        'parent_transaction_id' => false,
        'operation_id' => false,
        'amount' => false,
        'unit' => false,
        'direction' => false
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
        'address' => 'address',
        'mined_in_block' => 'minedInBlock',
        'parent_transaction_id' => 'parentTransactionId',
        'operation_id' => 'operationId',
        'amount' => 'amount',
        'unit' => 'unit',
        'direction' => 'direction'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'blockchain' => 'setBlockchain',
        'network' => 'setNetwork',
        'address' => 'setAddress',
        'mined_in_block' => 'setMinedInBlock',
        'parent_transaction_id' => 'setParentTransactionId',
        'operation_id' => 'setOperationId',
        'amount' => 'setAmount',
        'unit' => 'setUnit',
        'direction' => 'setDirection'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'blockchain' => 'getBlockchain',
        'network' => 'getNetwork',
        'address' => 'getAddress',
        'mined_in_block' => 'getMinedInBlock',
        'parent_transaction_id' => 'getParentTransactionId',
        'operation_id' => 'getOperationId',
        'amount' => 'getAmount',
        'unit' => 'getUnit',
        'direction' => 'getDirection'
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

    public const DIRECTION_INCOMING = 'incoming';
    public const DIRECTION_OUTGOING = 'outgoing';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDirectionAllowableValues()
    {
        return [
            self::DIRECTION_INCOMING,
            self::DIRECTION_OUTGOING,
        ];
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
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('mined_in_block', $data ?? [], null);
        $this->setIfExists('parent_transaction_id', $data ?? [], null);
        $this->setIfExists('operation_id', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('unit', $data ?? [], null);
        $this->setIfExists('direction', $data ?? [], null);
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
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['mined_in_block'] === null) {
            $invalidProperties[] = "'mined_in_block' can't be null";
        }
        if ($this->container['parent_transaction_id'] === null) {
            $invalidProperties[] = "'parent_transaction_id' can't be null";
        }
        if ($this->container['operation_id'] === null) {
            $invalidProperties[] = "'operation_id' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['unit'] === null) {
            $invalidProperties[] = "'unit' can't be null";
        }
        if ($this->container['direction'] === null) {
            $invalidProperties[] = "'direction' can't be null";
        }
        $allowedValues = $this->getDirectionAllowableValues();
        if (!is_null($this->container['direction']) && !in_array($this->container['direction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'direction', must be one of '%s'",
                $this->container['direction'],
                implode("', '", $allowedValues)
            );
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
     * @param string $address Defines the specific address of the internal transaction.
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
     * Gets mined_in_block
     *
     * @return \com.cryptoapis.rest_apis.sdk\Model\AddressInternalTransactionConfirmedDataItemMinedInBlock
     */
    public function getMinedInBlock()
    {
        return $this->container['mined_in_block'];
    }

    /**
     * Sets mined_in_block
     *
     * @param \com.cryptoapis.rest_apis.sdk\Model\AddressInternalTransactionConfirmedDataItemMinedInBlock $mined_in_block mined_in_block
     *
     * @return self
     */
    public function setMinedInBlock($mined_in_block)
    {
        if (is_null($mined_in_block)) {
            throw new \InvalidArgumentException('non-nullable mined_in_block cannot be null');
        }
        $this->container['mined_in_block'] = $mined_in_block;

        return $this;
    }

    /**
     * Gets parent_transaction_id
     *
     * @return string
     */
    public function getParentTransactionId()
    {
        return $this->container['parent_transaction_id'];
    }

    /**
     * Sets parent_transaction_id
     *
     * @param string $parent_transaction_id Defines the Parent Transaction's unique ID.
     *
     * @return self
     */
    public function setParentTransactionId($parent_transaction_id)
    {
        if (is_null($parent_transaction_id)) {
            throw new \InvalidArgumentException('non-nullable parent_transaction_id cannot be null');
        }
        $this->container['parent_transaction_id'] = $parent_transaction_id;

        return $this;
    }

    /**
     * Gets operation_id
     *
     * @return string
     */
    public function getOperationId()
    {
        return $this->container['operation_id'];
    }

    /**
     * Sets operation_id
     *
     * @param string $operation_id Defines the specific operation's unique ID.
     *
     * @return self
     */
    public function setOperationId($operation_id)
    {
        if (is_null($operation_id)) {
            throw new \InvalidArgumentException('non-nullable operation_id cannot be null');
        }
        $this->container['operation_id'] = $operation_id;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount Defines the amount of coins sent with the confirmed transaction.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string $unit Defines the unit of the transaction, e.g. Gwei.
     *
     * @return self
     */
    public function setUnit($unit)
    {
        if (is_null($unit)) {
            throw new \InvalidArgumentException('non-nullable unit cannot be null');
        }
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets direction
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param string $direction Defines whether the transaction is \"incoming\" or \"outgoing\".
     *
     * @return self
     */
    public function setDirection($direction)
    {
        if (is_null($direction)) {
            throw new \InvalidArgumentException('non-nullable direction cannot be null');
        }
        $allowedValues = $this->getDirectionAllowableValues();
        if (!in_array($direction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'direction', must be one of '%s'",
                    $direction,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['direction'] = $direction;

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

