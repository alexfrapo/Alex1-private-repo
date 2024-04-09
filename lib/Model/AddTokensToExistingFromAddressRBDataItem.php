<?php
/**
 * AddTokensToExistingFromAddressRBDataItem
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
 * AddTokensToExistingFromAddressRBDataItem Class Doc Comment
 *
 * @category Class
 * @package  com.cryptoapis.rest_apis.sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AddTokensToExistingFromAddressRBDataItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AddTokensToExistingFromAddressRB_data_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'callback_secret_key' => 'string',
        'callback_url' => 'string',
        'confirmations_count' => 'int',
        'fee_priority' => 'string',
        'from_address' => 'string',
        'minimum_transfer_amount' => 'string',
        'to_address' => 'string',
        'token_data' => '\com.cryptoapis.rest_apis.sdk\Model\AddTokensToExistingFromAddressRBTokenData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'callback_secret_key' => null,
        'callback_url' => null,
        'confirmations_count' => null,
        'fee_priority' => null,
        'from_address' => null,
        'minimum_transfer_amount' => null,
        'to_address' => null,
        'token_data' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'callback_secret_key' => false,
        'callback_url' => false,
        'confirmations_count' => false,
        'fee_priority' => false,
        'from_address' => false,
        'minimum_transfer_amount' => false,
        'to_address' => false,
        'token_data' => false
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
        'callback_secret_key' => 'callbackSecretKey',
        'callback_url' => 'callbackUrl',
        'confirmations_count' => 'confirmationsCount',
        'fee_priority' => 'feePriority',
        'from_address' => 'fromAddress',
        'minimum_transfer_amount' => 'minimumTransferAmount',
        'to_address' => 'toAddress',
        'token_data' => 'tokenData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'callback_secret_key' => 'setCallbackSecretKey',
        'callback_url' => 'setCallbackUrl',
        'confirmations_count' => 'setConfirmationsCount',
        'fee_priority' => 'setFeePriority',
        'from_address' => 'setFromAddress',
        'minimum_transfer_amount' => 'setMinimumTransferAmount',
        'to_address' => 'setToAddress',
        'token_data' => 'setTokenData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'callback_secret_key' => 'getCallbackSecretKey',
        'callback_url' => 'getCallbackUrl',
        'confirmations_count' => 'getConfirmationsCount',
        'fee_priority' => 'getFeePriority',
        'from_address' => 'getFromAddress',
        'minimum_transfer_amount' => 'getMinimumTransferAmount',
        'to_address' => 'getToAddress',
        'token_data' => 'getTokenData'
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

    public const FEE_PRIORITY_SLOW = 'slow';
    public const FEE_PRIORITY_STANDARD = 'standard';
    public const FEE_PRIORITY_FAST = 'fast';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFeePriorityAllowableValues()
    {
        return [
            self::FEE_PRIORITY_SLOW,
            self::FEE_PRIORITY_STANDARD,
            self::FEE_PRIORITY_FAST,
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
        $this->setIfExists('callback_secret_key', $data ?? [], null);
        $this->setIfExists('callback_url', $data ?? [], null);
        $this->setIfExists('confirmations_count', $data ?? [], null);
        $this->setIfExists('fee_priority', $data ?? [], null);
        $this->setIfExists('from_address', $data ?? [], null);
        $this->setIfExists('minimum_transfer_amount', $data ?? [], null);
        $this->setIfExists('to_address', $data ?? [], null);
        $this->setIfExists('token_data', $data ?? [], null);
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

        if ($this->container['callback_url'] === null) {
            $invalidProperties[] = "'callback_url' can't be null";
        }
        if ($this->container['confirmations_count'] === null) {
            $invalidProperties[] = "'confirmations_count' can't be null";
        }
        if ($this->container['fee_priority'] === null) {
            $invalidProperties[] = "'fee_priority' can't be null";
        }
        $allowedValues = $this->getFeePriorityAllowableValues();
        if (!is_null($this->container['fee_priority']) && !in_array($this->container['fee_priority'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'fee_priority', must be one of '%s'",
                $this->container['fee_priority'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['from_address'] === null) {
            $invalidProperties[] = "'from_address' can't be null";
        }
        if ($this->container['minimum_transfer_amount'] === null) {
            $invalidProperties[] = "'minimum_transfer_amount' can't be null";
        }
        if ($this->container['to_address'] === null) {
            $invalidProperties[] = "'to_address' can't be null";
        }
        if ($this->container['token_data'] === null) {
            $invalidProperties[] = "'token_data' can't be null";
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
     * Gets callback_secret_key
     *
     * @return string|null
     */
    public function getCallbackSecretKey()
    {
        return $this->container['callback_secret_key'];
    }

    /**
     * Sets callback_secret_key
     *
     * @param string|null $callback_secret_key Represents the Secret Key value provided by the customer. This field is used for security purposes during the callback notification, in order to prove the sender of the callback as Crypto APIs. For more information please see our [Documentation](https://developers.cryptoapis.io/technical-documentation/general-information/callbacks#callback-security).
     *
     * @return self
     */
    public function setCallbackSecretKey($callback_secret_key)
    {
        if (is_null($callback_secret_key)) {
            throw new \InvalidArgumentException('non-nullable callback_secret_key cannot be null');
        }
        $this->container['callback_secret_key'] = $callback_secret_key;

        return $this;
    }

    /**
     * Gets callback_url
     *
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->container['callback_url'];
    }

    /**
     * Sets callback_url
     *
     * @param string $callback_url Represents the URL that is set by the customer where the callback will be received at. The callback notification will be received only if and when the event occurs. `We support ONLY httpS type of protocol`.
     *
     * @return self
     */
    public function setCallbackUrl($callback_url)
    {
        if (is_null($callback_url)) {
            throw new \InvalidArgumentException('non-nullable callback_url cannot be null');
        }
        $this->container['callback_url'] = $callback_url;

        return $this;
    }

    /**
     * Gets confirmations_count
     *
     * @return int
     */
    public function getConfirmationsCount()
    {
        return $this->container['confirmations_count'];
    }

    /**
     * Sets confirmations_count
     *
     * @param int $confirmations_count Represents the number of confirmations, i.e. the amount of blocks that have been built on top of this block.
     *
     * @return self
     */
    public function setConfirmationsCount($confirmations_count)
    {
        if (is_null($confirmations_count)) {
            throw new \InvalidArgumentException('non-nullable confirmations_count cannot be null');
        }
        $this->container['confirmations_count'] = $confirmations_count;

        return $this;
    }

    /**
     * Gets fee_priority
     *
     * @return string
     */
    public function getFeePriority()
    {
        return $this->container['fee_priority'];
    }

    /**
     * Sets fee_priority
     *
     * @param string $fee_priority Represents the fee priority of the automation, whether it is \"SLOW\", \"STANDARD\" or \"FAST\".
     *
     * @return self
     */
    public function setFeePriority($fee_priority)
    {
        if (is_null($fee_priority)) {
            throw new \InvalidArgumentException('non-nullable fee_priority cannot be null');
        }
        $allowedValues = $this->getFeePriorityAllowableValues();
        if (!in_array($fee_priority, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'fee_priority', must be one of '%s'",
                    $fee_priority,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fee_priority'] = $fee_priority;

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
     * @param string $from_address Represents the hash of the address that forwards the tokens.
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
     * Gets minimum_transfer_amount
     *
     * @return string
     */
    public function getMinimumTransferAmount()
    {
        return $this->container['minimum_transfer_amount'];
    }

    /**
     * Sets minimum_transfer_amount
     *
     * @param string $minimum_transfer_amount Represents the minimum transfer amount of the currency in the `fromAddress` that can be allowed for an automatic forwarding.
     *
     * @return self
     */
    public function setMinimumTransferAmount($minimum_transfer_amount)
    {
        if (is_null($minimum_transfer_amount)) {
            throw new \InvalidArgumentException('non-nullable minimum_transfer_amount cannot be null');
        }
        $this->container['minimum_transfer_amount'] = $minimum_transfer_amount;

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
     * @param string $to_address Represents the hash of the address the currency is forwarded to.
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
     * Gets token_data
     *
     * @return \com.cryptoapis.rest_apis.sdk\Model\AddTokensToExistingFromAddressRBTokenData
     */
    public function getTokenData()
    {
        return $this->container['token_data'];
    }

    /**
     * Sets token_data
     *
     * @param \com.cryptoapis.rest_apis.sdk\Model\AddTokensToExistingFromAddressRBTokenData $token_data token_data
     *
     * @return self
     */
    public function setTokenData($token_data)
    {
        if (is_null($token_data)) {
            throw new \InvalidArgumentException('non-nullable token_data cannot be null');
        }
        $this->container['token_data'] = $token_data;

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

