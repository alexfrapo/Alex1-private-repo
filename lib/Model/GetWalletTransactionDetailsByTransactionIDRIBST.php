<?php
/**
 * GetWalletTransactionDetailsByTransactionIDRIBST
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
 * GetWalletTransactionDetailsByTransactionIDRIBST Class Doc Comment
 *
 * @category Class
 * @description Tron
 * @package  com.cryptoapis.rest_apis.sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetWalletTransactionDetailsByTransactionIDRIBST implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetWalletTransactionDetailsByTransactionIDRIBST';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'string',
        'bandwidth_used' => 'string',
        'contract' => 'string',
        'energy_used' => 'string',
        'has_internal_transactions' => 'bool',
        'has_token_transfers' => 'bool',
        'input' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'bandwidth_used' => null,
        'contract' => null,
        'energy_used' => null,
        'has_internal_transactions' => null,
        'has_token_transfers' => null,
        'input' => null,
        'status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'amount' => false,
        'bandwidth_used' => false,
        'contract' => false,
        'energy_used' => false,
        'has_internal_transactions' => false,
        'has_token_transfers' => false,
        'input' => false,
        'status' => false
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
        'amount' => 'amount',
        'bandwidth_used' => 'bandwidthUsed',
        'contract' => 'contract',
        'energy_used' => 'energyUsed',
        'has_internal_transactions' => 'hasInternalTransactions',
        'has_token_transfers' => 'hasTokenTransfers',
        'input' => 'input',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'bandwidth_used' => 'setBandwidthUsed',
        'contract' => 'setContract',
        'energy_used' => 'setEnergyUsed',
        'has_internal_transactions' => 'setHasInternalTransactions',
        'has_token_transfers' => 'setHasTokenTransfers',
        'input' => 'setInput',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'bandwidth_used' => 'getBandwidthUsed',
        'contract' => 'getContract',
        'energy_used' => 'getEnergyUsed',
        'has_internal_transactions' => 'getHasInternalTransactions',
        'has_token_transfers' => 'getHasTokenTransfers',
        'input' => 'getInput',
        'status' => 'getStatus'
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
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('bandwidth_used', $data ?? [], null);
        $this->setIfExists('contract', $data ?? [], null);
        $this->setIfExists('energy_used', $data ?? [], null);
        $this->setIfExists('has_internal_transactions', $data ?? [], null);
        $this->setIfExists('has_token_transfers', $data ?? [], null);
        $this->setIfExists('input', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
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

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['bandwidth_used'] === null) {
            $invalidProperties[] = "'bandwidth_used' can't be null";
        }
        if ($this->container['contract'] === null) {
            $invalidProperties[] = "'contract' can't be null";
        }
        if ($this->container['energy_used'] === null) {
            $invalidProperties[] = "'energy_used' can't be null";
        }
        if ($this->container['has_internal_transactions'] === null) {
            $invalidProperties[] = "'has_internal_transactions' can't be null";
        }
        if ($this->container['has_token_transfers'] === null) {
            $invalidProperties[] = "'has_token_transfers' can't be null";
        }
        if ($this->container['input'] === null) {
            $invalidProperties[] = "'input' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
     * @param string $amount String representation of the amount value
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
     * Gets bandwidth_used
     *
     * @return string
     */
    public function getBandwidthUsed()
    {
        return $this->container['bandwidth_used'];
    }

    /**
     * Sets bandwidth_used
     *
     * @param string $bandwidth_used Numeric representation of the transaction used bandwidth
     *
     * @return self
     */
    public function setBandwidthUsed($bandwidth_used)
    {
        if (is_null($bandwidth_used)) {
            throw new \InvalidArgumentException('non-nullable bandwidth_used cannot be null');
        }
        $this->container['bandwidth_used'] = $bandwidth_used;

        return $this;
    }

    /**
     * Gets contract
     *
     * @return string
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     *
     * @param string $contract Numeric representation of the transaction contract
     *
     * @return self
     */
    public function setContract($contract)
    {
        if (is_null($contract)) {
            throw new \InvalidArgumentException('non-nullable contract cannot be null');
        }
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets energy_used
     *
     * @return string
     */
    public function getEnergyUsed()
    {
        return $this->container['energy_used'];
    }

    /**
     * Sets energy_used
     *
     * @param string $energy_used String representation of the transaction used energy
     *
     * @return self
     */
    public function setEnergyUsed($energy_used)
    {
        if (is_null($energy_used)) {
            throw new \InvalidArgumentException('non-nullable energy_used cannot be null');
        }
        $this->container['energy_used'] = $energy_used;

        return $this;
    }

    /**
     * Gets has_internal_transactions
     *
     * @return bool
     */
    public function getHasInternalTransactions()
    {
        return $this->container['has_internal_transactions'];
    }

    /**
     * Sets has_internal_transactions
     *
     * @param bool $has_internal_transactions has_internal_transactions
     *
     * @return self
     */
    public function setHasInternalTransactions($has_internal_transactions)
    {
        if (is_null($has_internal_transactions)) {
            throw new \InvalidArgumentException('non-nullable has_internal_transactions cannot be null');
        }
        $this->container['has_internal_transactions'] = $has_internal_transactions;

        return $this;
    }

    /**
     * Gets has_token_transfers
     *
     * @return bool
     */
    public function getHasTokenTransfers()
    {
        return $this->container['has_token_transfers'];
    }

    /**
     * Sets has_token_transfers
     *
     * @param bool $has_token_transfers has_token_transfers
     *
     * @return self
     */
    public function setHasTokenTransfers($has_token_transfers)
    {
        if (is_null($has_token_transfers)) {
            throw new \InvalidArgumentException('non-nullable has_token_transfers cannot be null');
        }
        $this->container['has_token_transfers'] = $has_token_transfers;

        return $this;
    }

    /**
     * Gets input
     *
     * @return string
     */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
     * Sets input
     *
     * @param string $input Numeric representation of the transaction input
     *
     * @return self
     */
    public function setInput($input)
    {
        if (is_null($input)) {
            throw new \InvalidArgumentException('non-nullable input cannot be null');
        }
        $this->container['input'] = $input;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status String representation of the transaction status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

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


