<?php
/**
 * GetXRPRippleTransactionDetailsByTransactionIDRI
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
 * GetXRPRippleTransactionDetailsByTransactionIDRI Class Doc Comment
 *
 * @category Class
 * @package  com.cryptoapis.rest_apis.sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetXRPRippleTransactionDetailsByTransactionIDRI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetXRPRippleTransactionDetailsByTransactionIDRI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additional_data' => 'string',
        'destination_tag' => 'int',
        'index' => 'string',
        'mined_in_block_hash' => 'string',
        'mined_in_block_height' => 'string',
        'offer' => '\com.cryptoapis.rest_apis.sdk\Model\GetXRPRippleTransactionDetailsByTransactionIDRIOffer',
        'receive' => '\com.cryptoapis.rest_apis.sdk\Model\GetXRPRippleTransactionDetailsByTransactionIDRIReceive',
        'recipients' => '\com.cryptoapis.rest_apis.sdk\Model\GetXRPRippleTransactionDetailsByTransactionIDRIRecipientsInner[]',
        'senders' => '\com.cryptoapis.rest_apis.sdk\Model\GetXRPRippleTransactionDetailsByTransactionIDRISendersInner[]',
        'sequence' => 'int',
        'status' => 'string',
        'timestamp' => 'int',
        'transaction_hash' => 'string',
        'type' => 'string',
        'fee' => '\com.cryptoapis.rest_apis.sdk\Model\GetXRPRippleTransactionDetailsByTransactionIDRIFee',
        'value' => '\com.cryptoapis.rest_apis.sdk\Model\GetXRPRippleTransactionDetailsByTransactionIDRIValue'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'additional_data' => null,
        'destination_tag' => 'int64',
        'index' => null,
        'mined_in_block_hash' => null,
        'mined_in_block_height' => null,
        'offer' => null,
        'receive' => null,
        'recipients' => null,
        'senders' => null,
        'sequence' => 'int64',
        'status' => null,
        'timestamp' => null,
        'transaction_hash' => null,
        'type' => null,
        'fee' => null,
        'value' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'additional_data' => false,
        'destination_tag' => false,
        'index' => false,
        'mined_in_block_hash' => false,
        'mined_in_block_height' => false,
        'offer' => false,
        'receive' => false,
        'recipients' => false,
        'senders' => false,
        'sequence' => false,
        'status' => false,
        'timestamp' => false,
        'transaction_hash' => false,
        'type' => false,
        'fee' => false,
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
        'additional_data' => 'additionalData',
        'destination_tag' => 'destinationTag',
        'index' => 'index',
        'mined_in_block_hash' => 'minedInBlockHash',
        'mined_in_block_height' => 'minedInBlockHeight',
        'offer' => 'offer',
        'receive' => 'receive',
        'recipients' => 'recipients',
        'senders' => 'senders',
        'sequence' => 'sequence',
        'status' => 'status',
        'timestamp' => 'timestamp',
        'transaction_hash' => 'transactionHash',
        'type' => 'type',
        'fee' => 'fee',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_data' => 'setAdditionalData',
        'destination_tag' => 'setDestinationTag',
        'index' => 'setIndex',
        'mined_in_block_hash' => 'setMinedInBlockHash',
        'mined_in_block_height' => 'setMinedInBlockHeight',
        'offer' => 'setOffer',
        'receive' => 'setReceive',
        'recipients' => 'setRecipients',
        'senders' => 'setSenders',
        'sequence' => 'setSequence',
        'status' => 'setStatus',
        'timestamp' => 'setTimestamp',
        'transaction_hash' => 'setTransactionHash',
        'type' => 'setType',
        'fee' => 'setFee',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_data' => 'getAdditionalData',
        'destination_tag' => 'getDestinationTag',
        'index' => 'getIndex',
        'mined_in_block_hash' => 'getMinedInBlockHash',
        'mined_in_block_height' => 'getMinedInBlockHeight',
        'offer' => 'getOffer',
        'receive' => 'getReceive',
        'recipients' => 'getRecipients',
        'senders' => 'getSenders',
        'sequence' => 'getSequence',
        'status' => 'getStatus',
        'timestamp' => 'getTimestamp',
        'transaction_hash' => 'getTransactionHash',
        'type' => 'getType',
        'fee' => 'getFee',
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
        $this->setIfExists('additional_data', $data ?? [], null);
        $this->setIfExists('destination_tag', $data ?? [], null);
        $this->setIfExists('index', $data ?? [], null);
        $this->setIfExists('mined_in_block_hash', $data ?? [], null);
        $this->setIfExists('mined_in_block_height', $data ?? [], null);
        $this->setIfExists('offer', $data ?? [], null);
        $this->setIfExists('receive', $data ?? [], null);
        $this->setIfExists('recipients', $data ?? [], null);
        $this->setIfExists('senders', $data ?? [], null);
        $this->setIfExists('sequence', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('timestamp', $data ?? [], null);
        $this->setIfExists('transaction_hash', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('fee', $data ?? [], null);
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

        if ($this->container['additional_data'] === null) {
            $invalidProperties[] = "'additional_data' can't be null";
        }
        if ($this->container['index'] === null) {
            $invalidProperties[] = "'index' can't be null";
        }
        if ($this->container['mined_in_block_hash'] === null) {
            $invalidProperties[] = "'mined_in_block_hash' can't be null";
        }
        if ($this->container['mined_in_block_height'] === null) {
            $invalidProperties[] = "'mined_in_block_height' can't be null";
        }
        if ($this->container['offer'] === null) {
            $invalidProperties[] = "'offer' can't be null";
        }
        if ($this->container['receive'] === null) {
            $invalidProperties[] = "'receive' can't be null";
        }
        if ($this->container['recipients'] === null) {
            $invalidProperties[] = "'recipients' can't be null";
        }
        if ($this->container['senders'] === null) {
            $invalidProperties[] = "'senders' can't be null";
        }
        if ($this->container['sequence'] === null) {
            $invalidProperties[] = "'sequence' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ($this->container['transaction_hash'] === null) {
            $invalidProperties[] = "'transaction_hash' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['fee'] === null) {
            $invalidProperties[] = "'fee' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
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
     * Gets additional_data
     *
     * @return string
     */
    public function getAdditionalData()
    {
        return $this->container['additional_data'];
    }

    /**
     * Sets additional_data
     *
     * @param string $additional_data Represents additional data that may be needed.
     *
     * @return self
     */
    public function setAdditionalData($additional_data)
    {
        if (is_null($additional_data)) {
            throw new \InvalidArgumentException('non-nullable additional_data cannot be null');
        }
        $this->container['additional_data'] = $additional_data;

        return $this;
    }

    /**
     * Gets destination_tag
     *
     * @return int|null
     */
    public function getDestinationTag()
    {
        return $this->container['destination_tag'];
    }

    /**
     * Sets destination_tag
     *
     * @param int|null $destination_tag destination_tag
     *
     * @return self
     */
    public function setDestinationTag($destination_tag)
    {
        if (is_null($destination_tag)) {
            throw new \InvalidArgumentException('non-nullable destination_tag cannot be null');
        }
        $this->container['destination_tag'] = $destination_tag;

        return $this;
    }

    /**
     * Gets index
     *
     * @return string
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param string $index Defines the index of the transaction, i.e. the consecutive place it takes in the blockchain.
     *
     * @return self
     */
    public function setIndex($index)
    {
        if (is_null($index)) {
            throw new \InvalidArgumentException('non-nullable index cannot be null');
        }
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets mined_in_block_hash
     *
     * @return string
     */
    public function getMinedInBlockHash()
    {
        return $this->container['mined_in_block_hash'];
    }

    /**
     * Sets mined_in_block_hash
     *
     * @param string $mined_in_block_hash Represents the hash of the block where this transaction was mined/confirmed for first time. The hash is defined as a cryptographic digital fingerprint made by hashing the block header twice through the SHA256 algorithm.
     *
     * @return self
     */
    public function setMinedInBlockHash($mined_in_block_hash)
    {
        if (is_null($mined_in_block_hash)) {
            throw new \InvalidArgumentException('non-nullable mined_in_block_hash cannot be null');
        }
        $this->container['mined_in_block_hash'] = $mined_in_block_hash;

        return $this;
    }

    /**
     * Gets mined_in_block_height
     *
     * @return string
     */
    public function getMinedInBlockHeight()
    {
        return $this->container['mined_in_block_height'];
    }

    /**
     * Sets mined_in_block_height
     *
     * @param string $mined_in_block_height Represents the hight of the block where this transaction was mined/confirmed for first time. The height is defined as the number of blocks in the blockchain preceding this specific block.
     *
     * @return self
     */
    public function setMinedInBlockHeight($mined_in_block_height)
    {
        if (is_null($mined_in_block_height)) {
            throw new \InvalidArgumentException('non-nullable mined_in_block_height cannot be null');
        }
        $this->container['mined_in_block_height'] = $mined_in_block_height;

        return $this;
    }

    /**
     * Gets offer
     *
     * @return \com.cryptoapis.rest_apis.sdk\Model\GetXRPRippleTransactionDetailsByTransactionIDRIOffer
     */
    public function getOffer()
    {
        return $this->container['offer'];
    }

    /**
     * Sets offer
     *
     * @param \com.cryptoapis.rest_apis.sdk\Model\GetXRPRippleTransactionDetailsByTransactionIDRIOffer $offer offer
     *
     * @return self
     */
    public function setOffer($offer)
    {
        if (is_null($offer)) {
            throw new \InvalidArgumentException('non-nullable offer cannot be null');
        }
        $this->container['offer'] = $offer;

        return $this;
    }

    /**
     * Gets receive
     *
     * @return \com.cryptoapis.rest_apis.sdk\Model\GetXRPRippleTransactionDetailsByTransactionIDRIReceive
     */
    public function getReceive()
    {
        return $this->container['receive'];
    }

    /**
     * Sets receive
     *
     * @param \com.cryptoapis.rest_apis.sdk\Model\GetXRPRippleTransactionDetailsByTransactionIDRIReceive $receive receive
     *
     * @return self
     */
    public function setReceive($receive)
    {
        if (is_null($receive)) {
            throw new \InvalidArgumentException('non-nullable receive cannot be null');
        }
        $this->container['receive'] = $receive;

        return $this;
    }

    /**
     * Gets recipients
     *
     * @return \com.cryptoapis.rest_apis.sdk\Model\GetXRPRippleTransactionDetailsByTransactionIDRIRecipientsInner[]
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     *
     * @param \com.cryptoapis.rest_apis.sdk\Model\GetXRPRippleTransactionDetailsByTransactionIDRIRecipientsInner[] $recipients Represents an object of addresses that receive the transactions.
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
     * Gets senders
     *
     * @return \com.cryptoapis.rest_apis.sdk\Model\GetXRPRippleTransactionDetailsByTransactionIDRISendersInner[]
     */
    public function getSenders()
    {
        return $this->container['senders'];
    }

    /**
     * Sets senders
     *
     * @param \com.cryptoapis.rest_apis.sdk\Model\GetXRPRippleTransactionDetailsByTransactionIDRISendersInner[] $senders Represents an object of addresses that provide the funds.
     *
     * @return self
     */
    public function setSenders($senders)
    {
        if (is_null($senders)) {
            throw new \InvalidArgumentException('non-nullable senders cannot be null');
        }
        $this->container['senders'] = $senders;

        return $this;
    }

    /**
     * Gets sequence
     *
     * @return int
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param int $sequence Defines the transaction input's sequence as an integer, which is is used when transactions are replaced with newer versions before LockTime.
     *
     * @return self
     */
    public function setSequence($sequence)
    {
        if (is_null($sequence)) {
            throw new \InvalidArgumentException('non-nullable sequence cannot be null');
        }
        $this->container['sequence'] = $sequence;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Defines the status of the transaction.
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
     * Gets timestamp
     *
     * @return int
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param int $timestamp Defines the exact date/time in Unix Timestamp when this transaction was mined, confirmed or first seen in Mempool, if it is unconfirmed.
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        if (is_null($timestamp)) {
            throw new \InvalidArgumentException('non-nullable timestamp cannot be null');
        }
        $this->container['timestamp'] = $timestamp;

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
     * @param string $transaction_hash Represents the same as `transactionId` for account-based protocols like Ethereum, while it could be different in UTXO-based protocols like Bitcoin. E.g., in UTXO-based protocols `hash` is different from `transactionId` for SegWit transactions.
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Defines the type of the transaction.
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
     * Gets fee
     *
     * @return \com.cryptoapis.rest_apis.sdk\Model\GetXRPRippleTransactionDetailsByTransactionIDRIFee
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param \com.cryptoapis.rest_apis.sdk\Model\GetXRPRippleTransactionDetailsByTransactionIDRIFee $fee fee
     *
     * @return self
     */
    public function setFee($fee)
    {
        if (is_null($fee)) {
            throw new \InvalidArgumentException('non-nullable fee cannot be null');
        }
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets value
     *
     * @return \com.cryptoapis.rest_apis.sdk\Model\GetXRPRippleTransactionDetailsByTransactionIDRIValue
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param \com.cryptoapis.rest_apis.sdk\Model\GetXRPRippleTransactionDetailsByTransactionIDRIValue $value value
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

