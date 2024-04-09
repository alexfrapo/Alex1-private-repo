<?php
/**
 * PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubRIBS
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
 * PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubRIBS Class Doc Comment
 *
 * @category Class
 * @package  com.cryptoapis.rest_apis.sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubRIBS implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubRIBS';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'data_hex' => 'string',
        'derivation_index' => 'int',
        'fee' => '\com.cryptoapis.rest_apis.sdk\Model\PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubRIBSXFee',
        'nonce' => 'string',
        'transaction_type' => 'string',
        'unit' => 'string',
        'data' => 'string',
        'expiration' => 'int',
        'raw_data' => '\com.cryptoapis.rest_apis.sdk\Model\PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubRIBSTRawData',
        'raw_data_hex' => 'string',
        'recipient' => 'string',
        'ref_block_bytes' => 'string',
        'ref_block_hash' => 'string',
        'sender' => 'string',
        'timestamp' => 'int',
        'transaction_id' => 'string',
        'type' => 'string',
        'type_url' => 'string',
        'visible' => 'bool',
        'public_key' => 'string',
        'sequence' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'data_hex' => null,
        'derivation_index' => 'int64',
        'fee' => null,
        'nonce' => null,
        'transaction_type' => null,
        'unit' => null,
        'data' => null,
        'expiration' => null,
        'raw_data' => null,
        'raw_data_hex' => null,
        'recipient' => null,
        'ref_block_bytes' => null,
        'ref_block_hash' => null,
        'sender' => null,
        'timestamp' => null,
        'transaction_id' => null,
        'type' => null,
        'type_url' => null,
        'visible' => null,
        'public_key' => null,
        'sequence' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'data_hex' => false,
        'derivation_index' => false,
        'fee' => false,
        'nonce' => false,
        'transaction_type' => false,
        'unit' => false,
        'data' => false,
        'expiration' => false,
        'raw_data' => false,
        'raw_data_hex' => false,
        'recipient' => false,
        'ref_block_bytes' => false,
        'ref_block_hash' => false,
        'sender' => false,
        'timestamp' => false,
        'transaction_id' => false,
        'type' => false,
        'type_url' => false,
        'visible' => false,
        'public_key' => false,
        'sequence' => false
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
        'data_hex' => 'dataHex',
        'derivation_index' => 'derivationIndex',
        'fee' => 'fee',
        'nonce' => 'nonce',
        'transaction_type' => 'transactionType',
        'unit' => 'unit',
        'data' => 'data',
        'expiration' => 'expiration',
        'raw_data' => 'rawData',
        'raw_data_hex' => 'rawDataHex',
        'recipient' => 'recipient',
        'ref_block_bytes' => 'refBlockBytes',
        'ref_block_hash' => 'refBlockHash',
        'sender' => 'sender',
        'timestamp' => 'timestamp',
        'transaction_id' => 'transactionId',
        'type' => 'type',
        'type_url' => 'typeUrl',
        'visible' => 'visible',
        'public_key' => 'publicKey',
        'sequence' => 'sequence'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data_hex' => 'setDataHex',
        'derivation_index' => 'setDerivationIndex',
        'fee' => 'setFee',
        'nonce' => 'setNonce',
        'transaction_type' => 'setTransactionType',
        'unit' => 'setUnit',
        'data' => 'setData',
        'expiration' => 'setExpiration',
        'raw_data' => 'setRawData',
        'raw_data_hex' => 'setRawDataHex',
        'recipient' => 'setRecipient',
        'ref_block_bytes' => 'setRefBlockBytes',
        'ref_block_hash' => 'setRefBlockHash',
        'sender' => 'setSender',
        'timestamp' => 'setTimestamp',
        'transaction_id' => 'setTransactionId',
        'type' => 'setType',
        'type_url' => 'setTypeUrl',
        'visible' => 'setVisible',
        'public_key' => 'setPublicKey',
        'sequence' => 'setSequence'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data_hex' => 'getDataHex',
        'derivation_index' => 'getDerivationIndex',
        'fee' => 'getFee',
        'nonce' => 'getNonce',
        'transaction_type' => 'getTransactionType',
        'unit' => 'getUnit',
        'data' => 'getData',
        'expiration' => 'getExpiration',
        'raw_data' => 'getRawData',
        'raw_data_hex' => 'getRawDataHex',
        'recipient' => 'getRecipient',
        'ref_block_bytes' => 'getRefBlockBytes',
        'ref_block_hash' => 'getRefBlockHash',
        'sender' => 'getSender',
        'timestamp' => 'getTimestamp',
        'transaction_id' => 'getTransactionId',
        'type' => 'getType',
        'type_url' => 'getTypeUrl',
        'visible' => 'getVisible',
        'public_key' => 'getPublicKey',
        'sequence' => 'getSequence'
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

    public const TRANSACTION_TYPE_LEGACY_TRANSACTION = 'legacy-transaction';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransactionTypeAllowableValues()
    {
        return [
            self::TRANSACTION_TYPE_LEGACY_TRANSACTION,
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
        $this->setIfExists('data_hex', $data ?? [], null);
        $this->setIfExists('derivation_index', $data ?? [], null);
        $this->setIfExists('fee', $data ?? [], null);
        $this->setIfExists('nonce', $data ?? [], null);
        $this->setIfExists('transaction_type', $data ?? [], null);
        $this->setIfExists('unit', $data ?? [], null);
        $this->setIfExists('data', $data ?? [], null);
        $this->setIfExists('expiration', $data ?? [], null);
        $this->setIfExists('raw_data', $data ?? [], null);
        $this->setIfExists('raw_data_hex', $data ?? [], null);
        $this->setIfExists('recipient', $data ?? [], null);
        $this->setIfExists('ref_block_bytes', $data ?? [], null);
        $this->setIfExists('ref_block_hash', $data ?? [], null);
        $this->setIfExists('sender', $data ?? [], null);
        $this->setIfExists('timestamp', $data ?? [], null);
        $this->setIfExists('transaction_id', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('type_url', $data ?? [], null);
        $this->setIfExists('visible', $data ?? [], null);
        $this->setIfExists('public_key', $data ?? [], null);
        $this->setIfExists('sequence', $data ?? [], null);
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

        if ($this->container['data_hex'] === null) {
            $invalidProperties[] = "'data_hex' can't be null";
        }
        if ($this->container['derivation_index'] === null) {
            $invalidProperties[] = "'derivation_index' can't be null";
        }
        if ($this->container['fee'] === null) {
            $invalidProperties[] = "'fee' can't be null";
        }
        if ($this->container['nonce'] === null) {
            $invalidProperties[] = "'nonce' can't be null";
        }
        if ($this->container['transaction_type'] === null) {
            $invalidProperties[] = "'transaction_type' can't be null";
        }
        $allowedValues = $this->getTransactionTypeAllowableValues();
        if (!is_null($this->container['transaction_type']) && !in_array($this->container['transaction_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'transaction_type', must be one of '%s'",
                $this->container['transaction_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['unit'] === null) {
            $invalidProperties[] = "'unit' can't be null";
        }
        if ($this->container['data'] === null) {
            $invalidProperties[] = "'data' can't be null";
        }
        if ($this->container['expiration'] === null) {
            $invalidProperties[] = "'expiration' can't be null";
        }
        if ($this->container['raw_data_hex'] === null) {
            $invalidProperties[] = "'raw_data_hex' can't be null";
        }
        if ($this->container['recipient'] === null) {
            $invalidProperties[] = "'recipient' can't be null";
        }
        if ($this->container['ref_block_bytes'] === null) {
            $invalidProperties[] = "'ref_block_bytes' can't be null";
        }
        if ($this->container['ref_block_hash'] === null) {
            $invalidProperties[] = "'ref_block_hash' can't be null";
        }
        if ($this->container['sender'] === null) {
            $invalidProperties[] = "'sender' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ($this->container['transaction_id'] === null) {
            $invalidProperties[] = "'transaction_id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['type_url'] === null) {
            $invalidProperties[] = "'type_url' can't be null";
        }
        if ($this->container['visible'] === null) {
            $invalidProperties[] = "'visible' can't be null";
        }
        if ($this->container['public_key'] === null) {
            $invalidProperties[] = "'public_key' can't be null";
        }
        if ($this->container['sequence'] === null) {
            $invalidProperties[] = "'sequence' can't be null";
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
     * Gets data_hex
     *
     * @return string
     */
    public function getDataHex()
    {
        return $this->container['data_hex'];
    }

    /**
     * Sets data_hex
     *
     * @param string $data_hex Representation of the data in hex value
     *
     * @return self
     */
    public function setDataHex($data_hex)
    {
        if (is_null($data_hex)) {
            throw new \InvalidArgumentException('non-nullable data_hex cannot be null');
        }
        $this->container['data_hex'] = $data_hex;

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
     * @param int $derivation_index Representation of the derivation index of the xpub address
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
     * Gets fee
     *
     * @return \com.cryptoapis.rest_apis.sdk\Model\PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubRIBSXFee
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param \com.cryptoapis.rest_apis.sdk\Model\PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubRIBSXFee $fee fee
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
     * Gets nonce
     *
     * @return string
     */
    public function getNonce()
    {
        return $this->container['nonce'];
    }

    /**
     * Sets nonce
     *
     * @param string $nonce Represents the sequential running number for an address, starting from 0 for the first transaction. E.g., if the nonce of a transaction is 10, it would be the 11th transaction sent from the sender's address.
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
     * Gets transaction_type
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     *
     * @param string $transaction_type Representation of the transaction type
     *
     * @return self
     */
    public function setTransactionType($transaction_type)
    {
        if (is_null($transaction_type)) {
            throw new \InvalidArgumentException('non-nullable transaction_type cannot be null');
        }
        $allowedValues = $this->getTransactionTypeAllowableValues();
        if (!in_array($transaction_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'transaction_type', must be one of '%s'",
                    $transaction_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transaction_type'] = $transaction_type;

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
     * @param string $unit Represents the unit of the amount to be sent.
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
     * Gets data
     *
     * @return string
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param string $data String representation of the data
     *
     * @return self
     */
    public function setData($data)
    {
        if (is_null($data)) {
            throw new \InvalidArgumentException('non-nullable data cannot be null');
        }
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets expiration
     *
     * @return int
     */
    public function getExpiration()
    {
        return $this->container['expiration'];
    }

    /**
     * Sets expiration
     *
     * @param int $expiration Rrepresentation of the expiration value
     *
     * @return self
     */
    public function setExpiration($expiration)
    {
        if (is_null($expiration)) {
            throw new \InvalidArgumentException('non-nullable expiration cannot be null');
        }
        $this->container['expiration'] = $expiration;

        return $this;
    }

    /**
     * Gets raw_data
     *
     * @return \com.cryptoapis.rest_apis.sdk\Model\PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubRIBSTRawData|null
     */
    public function getRawData()
    {
        return $this->container['raw_data'];
    }

    /**
     * Sets raw_data
     *
     * @param \com.cryptoapis.rest_apis.sdk\Model\PrepareATransactionFromAnAddressInHDWalletXPubYPubZPubRIBSTRawData|null $raw_data raw_data
     *
     * @return self
     */
    public function setRawData($raw_data)
    {
        if (is_null($raw_data)) {
            throw new \InvalidArgumentException('non-nullable raw_data cannot be null');
        }
        $this->container['raw_data'] = $raw_data;

        return $this;
    }

    /**
     * Gets raw_data_hex
     *
     * @return string
     */
    public function getRawDataHex()
    {
        return $this->container['raw_data_hex'];
    }

    /**
     * Sets raw_data_hex
     *
     * @param string $raw_data_hex Representation of the raw data in hex format
     *
     * @return self
     */
    public function setRawDataHex($raw_data_hex)
    {
        if (is_null($raw_data_hex)) {
            throw new \InvalidArgumentException('non-nullable raw_data_hex cannot be null');
        }
        $this->container['raw_data_hex'] = $raw_data_hex;

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
     * @param string $recipient Rrepresentation of the recipients' address
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
     * Gets ref_block_bytes
     *
     * @return string
     */
    public function getRefBlockBytes()
    {
        return $this->container['ref_block_bytes'];
    }

    /**
     * Sets ref_block_bytes
     *
     * @param string $ref_block_bytes Representation of the block bytes
     *
     * @return self
     */
    public function setRefBlockBytes($ref_block_bytes)
    {
        if (is_null($ref_block_bytes)) {
            throw new \InvalidArgumentException('non-nullable ref_block_bytes cannot be null');
        }
        $this->container['ref_block_bytes'] = $ref_block_bytes;

        return $this;
    }

    /**
     * Gets ref_block_hash
     *
     * @return string
     */
    public function getRefBlockHash()
    {
        return $this->container['ref_block_hash'];
    }

    /**
     * Sets ref_block_hash
     *
     * @param string $ref_block_hash Representation of the block hash refference
     *
     * @return self
     */
    public function setRefBlockHash($ref_block_hash)
    {
        if (is_null($ref_block_hash)) {
            throw new \InvalidArgumentException('non-nullable ref_block_hash cannot be null');
        }
        $this->container['ref_block_hash'] = $ref_block_hash;

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
     * @param string $sender Representation of the sender
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
     * @param int $timestamp Representation of the timestamp
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
     * @param string $type Representation of the transfer type.
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
     * Gets type_url
     *
     * @return string
     */
    public function getTypeUrl()
    {
        return $this->container['type_url'];
    }

    /**
     * Sets type_url
     *
     * @param string $type_url Representation of the URL
     *
     * @return self
     */
    public function setTypeUrl($type_url)
    {
        if (is_null($type_url)) {
            throw new \InvalidArgumentException('non-nullable type_url cannot be null');
        }
        $this->container['type_url'] = $type_url;

        return $this;
    }

    /**
     * Gets visible
     *
     * @return bool
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     *
     * @param bool $visible Representation of the address visibility
     *
     * @return self
     */
    public function setVisible($visible)
    {
        if (is_null($visible)) {
            throw new \InvalidArgumentException('non-nullable visible cannot be null');
        }
        $this->container['visible'] = $visible;

        return $this;
    }

    /**
     * Gets public_key
     *
     * @return string
     */
    public function getPublicKey()
    {
        return $this->container['public_key'];
    }

    /**
     * Sets public_key
     *
     * @param string $public_key Representation of the public key.
     *
     * @return self
     */
    public function setPublicKey($public_key)
    {
        if (is_null($public_key)) {
            throw new \InvalidArgumentException('non-nullable public_key cannot be null');
        }
        $this->container['public_key'] = $public_key;

        return $this;
    }

    /**
     * Gets sequence
     *
     * @return string
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param string $sequence Representation of the sequence
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


