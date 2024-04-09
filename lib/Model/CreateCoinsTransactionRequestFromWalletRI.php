<?php
/**
 * CreateCoinsTransactionRequestFromWalletRI
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
 * CreateCoinsTransactionRequestFromWalletRI Class Doc Comment
 *
 * @category Class
 * @package  com.cryptoapis.rest_apis.sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateCoinsTransactionRequestFromWalletRI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateCoinsTransactionRequestFromWalletRI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'callback_secret_key' => 'string',
        'callback_url' => 'string',
        'fee_priority' => 'string',
        'note' => 'string',
        'recipients' => '\com.cryptoapis.rest_apis.sdk\Model\CreateCoinsTransactionRequestFromWalletRIRecipientsInner[]',
        'total_transaction_amount' => 'string',
        'transaction_request_id' => 'string',
        'transaction_request_status' => 'string'
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
        'fee_priority' => null,
        'note' => null,
        'recipients' => null,
        'total_transaction_amount' => null,
        'transaction_request_id' => null,
        'transaction_request_status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'callback_secret_key' => false,
        'callback_url' => false,
        'fee_priority' => false,
        'note' => false,
        'recipients' => false,
        'total_transaction_amount' => false,
        'transaction_request_id' => false,
        'transaction_request_status' => false
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
        'fee_priority' => 'feePriority',
        'note' => 'note',
        'recipients' => 'recipients',
        'total_transaction_amount' => 'totalTransactionAmount',
        'transaction_request_id' => 'transactionRequestId',
        'transaction_request_status' => 'transactionRequestStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'callback_secret_key' => 'setCallbackSecretKey',
        'callback_url' => 'setCallbackUrl',
        'fee_priority' => 'setFeePriority',
        'note' => 'setNote',
        'recipients' => 'setRecipients',
        'total_transaction_amount' => 'setTotalTransactionAmount',
        'transaction_request_id' => 'setTransactionRequestId',
        'transaction_request_status' => 'setTransactionRequestStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'callback_secret_key' => 'getCallbackSecretKey',
        'callback_url' => 'getCallbackUrl',
        'fee_priority' => 'getFeePriority',
        'note' => 'getNote',
        'recipients' => 'getRecipients',
        'total_transaction_amount' => 'getTotalTransactionAmount',
        'transaction_request_id' => 'getTransactionRequestId',
        'transaction_request_status' => 'getTransactionRequestStatus'
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
    public const TRANSACTION_REQUEST_STATUS_CREATED = 'created';
    public const TRANSACTION_REQUEST_STATUS_AWAIT_APPROVAL = 'await-approval';
    public const TRANSACTION_REQUEST_STATUS_PENDING = 'pending';
    public const TRANSACTION_REQUEST_STATUS_PREPARED = 'prepared';
    public const TRANSACTION_REQUEST_STATUS_SIGNED = 'signed';
    public const TRANSACTION_REQUEST_STATUS_BROADCASTED = 'broadcasted';
    public const TRANSACTION_REQUEST_STATUS_SUCCESS = 'success';
    public const TRANSACTION_REQUEST_STATUS_FAILED = 'failed';
    public const TRANSACTION_REQUEST_STATUS_REJECTED = 'rejected';
    public const TRANSACTION_REQUEST_STATUS_MINED = 'mined';

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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransactionRequestStatusAllowableValues()
    {
        return [
            self::TRANSACTION_REQUEST_STATUS_CREATED,
            self::TRANSACTION_REQUEST_STATUS_AWAIT_APPROVAL,
            self::TRANSACTION_REQUEST_STATUS_PENDING,
            self::TRANSACTION_REQUEST_STATUS_PREPARED,
            self::TRANSACTION_REQUEST_STATUS_SIGNED,
            self::TRANSACTION_REQUEST_STATUS_BROADCASTED,
            self::TRANSACTION_REQUEST_STATUS_SUCCESS,
            self::TRANSACTION_REQUEST_STATUS_FAILED,
            self::TRANSACTION_REQUEST_STATUS_REJECTED,
            self::TRANSACTION_REQUEST_STATUS_MINED,
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
        $this->setIfExists('fee_priority', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('recipients', $data ?? [], null);
        $this->setIfExists('total_transaction_amount', $data ?? [], null);
        $this->setIfExists('transaction_request_id', $data ?? [], null);
        $this->setIfExists('transaction_request_status', $data ?? [], null);
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

        if ($this->container['recipients'] === null) {
            $invalidProperties[] = "'recipients' can't be null";
        }
        if ($this->container['total_transaction_amount'] === null) {
            $invalidProperties[] = "'total_transaction_amount' can't be null";
        }
        if ($this->container['transaction_request_id'] === null) {
            $invalidProperties[] = "'transaction_request_id' can't be null";
        }
        if ($this->container['transaction_request_status'] === null) {
            $invalidProperties[] = "'transaction_request_status' can't be null";
        }
        $allowedValues = $this->getTransactionRequestStatusAllowableValues();
        if (!is_null($this->container['transaction_request_status']) && !in_array($this->container['transaction_request_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'transaction_request_status', must be one of '%s'",
                $this->container['transaction_request_status'],
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
     * @param string|null $callback_secret_key Represents the Secret Key value provided by the customer. This field is used for security purposes during the callback notification, in order to prove the sender of the callback as Crypto APIs.  For more information please see our [Documentation](https://developers.cryptoapis.io/technical-documentation/general-information/callbacks#callback-security).
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
     * @return string|null
     */
    public function getCallbackUrl()
    {
        return $this->container['callback_url'];
    }

    /**
     * Sets callback_url
     *
     * @param string|null $callback_url Represents the URL that is set by the customer where the callback will be received at. The callback notification will be received only if and when the event occurs. `We support ONLY httpS type of protocol`.
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
     * @param string $fee_priority Represents the fee priority of the automation, whether it is \"slow\", \"standard\" or \"fast\".
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
     * Gets note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note Represents an optional note to add a free text in, explaining or providing additional detail on the transaction request.
     *
     * @return self
     */
    public function setNote($note)
    {
        if (is_null($note)) {
            throw new \InvalidArgumentException('non-nullable note cannot be null');
        }
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets recipients
     *
     * @return \com.cryptoapis.rest_apis.sdk\Model\CreateCoinsTransactionRequestFromWalletRIRecipientsInner[]
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     *
     * @param \com.cryptoapis.rest_apis.sdk\Model\CreateCoinsTransactionRequestFromWalletRIRecipientsInner[] $recipients Defines the destination of the transaction, whether it is incoming or outgoing.
     *
     * @return self
     */
    public function setRecipients($recipients)
    {
        if (is_null($recipients)) {
            throw new \InvalidArgumentException('non-nullable recipients cannot be null');
        }
        $this->container['recipients'] = $recipients;

        return $this;
    }

    /**
     * Gets total_transaction_amount
     *
     * @return string
     */
    public function getTotalTransactionAmount()
    {
        return $this->container['total_transaction_amount'];
    }

    /**
     * Sets total_transaction_amount
     *
     * @param string $total_transaction_amount Represents the specific amount of the transaction.
     *
     * @return self
     */
    public function setTotalTransactionAmount($total_transaction_amount)
    {
        if (is_null($total_transaction_amount)) {
            throw new \InvalidArgumentException('non-nullable total_transaction_amount cannot be null');
        }
        $this->container['total_transaction_amount'] = $total_transaction_amount;

        return $this;
    }

    /**
     * Gets transaction_request_id
     *
     * @return string
     */
    public function getTransactionRequestId()
    {
        return $this->container['transaction_request_id'];
    }

    /**
     * Sets transaction_request_id
     *
     * @param string $transaction_request_id Represents a unique identifier of the transaction request (the request sent to make a transaction), which helps in identifying which callback and which `referenceId` concern that specific transaction request.
     *
     * @return self
     */
    public function setTransactionRequestId($transaction_request_id)
    {
        if (is_null($transaction_request_id)) {
            throw new \InvalidArgumentException('non-nullable transaction_request_id cannot be null');
        }
        $this->container['transaction_request_id'] = $transaction_request_id;

        return $this;
    }

    /**
     * Gets transaction_request_status
     *
     * @return string
     */
    public function getTransactionRequestStatus()
    {
        return $this->container['transaction_request_status'];
    }

    /**
     * Sets transaction_request_status
     *
     * @param string $transaction_request_status Defines the status of the transaction, e.g. \"created, \"await_approval\", \"pending\", \"prepared\", \"signed\", \"broadcasted\", \"success\", \"failed\", \"rejected\", mined\".
     *
     * @return self
     */
    public function setTransactionRequestStatus($transaction_request_status)
    {
        if (is_null($transaction_request_status)) {
            throw new \InvalidArgumentException('non-nullable transaction_request_status cannot be null');
        }
        $allowedValues = $this->getTransactionRequestStatusAllowableValues();
        if (!in_array($transaction_request_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'transaction_request_status', must be one of '%s'",
                    $transaction_request_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transaction_request_status'] = $transaction_request_status;

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


