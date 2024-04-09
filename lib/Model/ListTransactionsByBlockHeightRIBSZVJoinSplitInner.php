<?php
/**
 * ListTransactionsByBlockHeightRIBSZVJoinSplitInner
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
 * ListTransactionsByBlockHeightRIBSZVJoinSplitInner Class Doc Comment
 *
 * @category Class
 * @package  com.cryptoapis.rest_apis.sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ListTransactionsByBlockHeightRIBSZVJoinSplitInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListTransactionsByBlockHeightRIBSZ_vJoinSplit_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'anchor' => 'string',
        'cipher_texts' => 'string[]',
        'commitments' => 'string[]',
        'macs' => 'string[]',
        'nullifiers' => 'string[]',
        'one_time_pub_key' => 'string',
        'proof' => 'string',
        'random_seed' => 'string',
        'v_pub_new' => 'string',
        'v_pub_old' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'anchor' => null,
        'cipher_texts' => null,
        'commitments' => null,
        'macs' => null,
        'nullifiers' => null,
        'one_time_pub_key' => null,
        'proof' => null,
        'random_seed' => null,
        'v_pub_new' => null,
        'v_pub_old' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'anchor' => false,
        'cipher_texts' => false,
        'commitments' => false,
        'macs' => false,
        'nullifiers' => false,
        'one_time_pub_key' => false,
        'proof' => false,
        'random_seed' => false,
        'v_pub_new' => false,
        'v_pub_old' => false
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
        'anchor' => 'anchor',
        'cipher_texts' => 'cipherTexts',
        'commitments' => 'commitments',
        'macs' => 'macs',
        'nullifiers' => 'nullifiers',
        'one_time_pub_key' => 'oneTimePubKey',
        'proof' => 'proof',
        'random_seed' => 'randomSeed',
        'v_pub_new' => 'vPubNew',
        'v_pub_old' => 'vPubOld'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'anchor' => 'setAnchor',
        'cipher_texts' => 'setCipherTexts',
        'commitments' => 'setCommitments',
        'macs' => 'setMacs',
        'nullifiers' => 'setNullifiers',
        'one_time_pub_key' => 'setOneTimePubKey',
        'proof' => 'setProof',
        'random_seed' => 'setRandomSeed',
        'v_pub_new' => 'setVPubNew',
        'v_pub_old' => 'setVPubOld'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'anchor' => 'getAnchor',
        'cipher_texts' => 'getCipherTexts',
        'commitments' => 'getCommitments',
        'macs' => 'getMacs',
        'nullifiers' => 'getNullifiers',
        'one_time_pub_key' => 'getOneTimePubKey',
        'proof' => 'getProof',
        'random_seed' => 'getRandomSeed',
        'v_pub_new' => 'getVPubNew',
        'v_pub_old' => 'getVPubOld'
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
        $this->setIfExists('anchor', $data ?? [], null);
        $this->setIfExists('cipher_texts', $data ?? [], null);
        $this->setIfExists('commitments', $data ?? [], null);
        $this->setIfExists('macs', $data ?? [], null);
        $this->setIfExists('nullifiers', $data ?? [], null);
        $this->setIfExists('one_time_pub_key', $data ?? [], null);
        $this->setIfExists('proof', $data ?? [], null);
        $this->setIfExists('random_seed', $data ?? [], null);
        $this->setIfExists('v_pub_new', $data ?? [], null);
        $this->setIfExists('v_pub_old', $data ?? [], null);
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

        if ($this->container['anchor'] === null) {
            $invalidProperties[] = "'anchor' can't be null";
        }
        if ($this->container['cipher_texts'] === null) {
            $invalidProperties[] = "'cipher_texts' can't be null";
        }
        if ($this->container['commitments'] === null) {
            $invalidProperties[] = "'commitments' can't be null";
        }
        if ($this->container['macs'] === null) {
            $invalidProperties[] = "'macs' can't be null";
        }
        if ($this->container['nullifiers'] === null) {
            $invalidProperties[] = "'nullifiers' can't be null";
        }
        if ($this->container['one_time_pub_key'] === null) {
            $invalidProperties[] = "'one_time_pub_key' can't be null";
        }
        if ($this->container['proof'] === null) {
            $invalidProperties[] = "'proof' can't be null";
        }
        if ($this->container['random_seed'] === null) {
            $invalidProperties[] = "'random_seed' can't be null";
        }
        if ($this->container['v_pub_new'] === null) {
            $invalidProperties[] = "'v_pub_new' can't be null";
        }
        if ($this->container['v_pub_old'] === null) {
            $invalidProperties[] = "'v_pub_old' can't be null";
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
     * Gets anchor
     *
     * @return string
     */
    public function getAnchor()
    {
        return $this->container['anchor'];
    }

    /**
     * Sets anchor
     *
     * @param string $anchor Defines a Merkle tree root of a note commitment tree which uniquely identifies a note commitment tree state given the assumed security properties of the Merkle tree’s  hash function.
     *
     * @return self
     */
    public function setAnchor($anchor)
    {
        if (is_null($anchor)) {
            throw new \InvalidArgumentException('non-nullable anchor cannot be null');
        }
        $this->container['anchor'] = $anchor;

        return $this;
    }

    /**
     * Gets cipher_texts
     *
     * @return string[]
     */
    public function getCipherTexts()
    {
        return $this->container['cipher_texts'];
    }

    /**
     * Sets cipher_texts
     *
     * @param string[] $cipher_texts cipher_texts
     *
     * @return self
     */
    public function setCipherTexts($cipher_texts)
    {
        if (is_null($cipher_texts)) {
            throw new \InvalidArgumentException('non-nullable cipher_texts cannot be null');
        }
        $this->container['cipher_texts'] = $cipher_texts;

        return $this;
    }

    /**
     * Gets commitments
     *
     * @return string[]
     */
    public function getCommitments()
    {
        return $this->container['commitments'];
    }

    /**
     * Sets commitments
     *
     * @param string[] $commitments commitments
     *
     * @return self
     */
    public function setCommitments($commitments)
    {
        if (is_null($commitments)) {
            throw new \InvalidArgumentException('non-nullable commitments cannot be null');
        }
        $this->container['commitments'] = $commitments;

        return $this;
    }

    /**
     * Gets macs
     *
     * @return string[]
     */
    public function getMacs()
    {
        return $this->container['macs'];
    }

    /**
     * Sets macs
     *
     * @param string[] $macs macs
     *
     * @return self
     */
    public function setMacs($macs)
    {
        if (is_null($macs)) {
            throw new \InvalidArgumentException('non-nullable macs cannot be null');
        }
        $this->container['macs'] = $macs;

        return $this;
    }

    /**
     * Gets nullifiers
     *
     * @return string[]
     */
    public function getNullifiers()
    {
        return $this->container['nullifiers'];
    }

    /**
     * Sets nullifiers
     *
     * @param string[] $nullifiers nullifiers
     *
     * @return self
     */
    public function setNullifiers($nullifiers)
    {
        if (is_null($nullifiers)) {
            throw new \InvalidArgumentException('non-nullable nullifiers cannot be null');
        }
        $this->container['nullifiers'] = $nullifiers;

        return $this;
    }

    /**
     * Gets one_time_pub_key
     *
     * @return string
     */
    public function getOneTimePubKey()
    {
        return $this->container['one_time_pub_key'];
    }

    /**
     * Sets one_time_pub_key
     *
     * @param string $one_time_pub_key Defines the one time public key.
     *
     * @return self
     */
    public function setOneTimePubKey($one_time_pub_key)
    {
        if (is_null($one_time_pub_key)) {
            throw new \InvalidArgumentException('non-nullable one_time_pub_key cannot be null');
        }
        $this->container['one_time_pub_key'] = $one_time_pub_key;

        return $this;
    }

    /**
     * Gets proof
     *
     * @return string
     */
    public function getProof()
    {
        return $this->container['proof'];
    }

    /**
     * Sets proof
     *
     * @param string $proof Defines the proof.
     *
     * @return self
     */
    public function setProof($proof)
    {
        if (is_null($proof)) {
            throw new \InvalidArgumentException('non-nullable proof cannot be null');
        }
        $this->container['proof'] = $proof;

        return $this;
    }

    /**
     * Gets random_seed
     *
     * @return string
     */
    public function getRandomSeed()
    {
        return $this->container['random_seed'];
    }

    /**
     * Sets random_seed
     *
     * @param string $random_seed Represents a 256-bit seed that must be chosen independently at random for each JoinSplit description.
     *
     * @return self
     */
    public function setRandomSeed($random_seed)
    {
        if (is_null($random_seed)) {
            throw new \InvalidArgumentException('non-nullable random_seed cannot be null');
        }
        $this->container['random_seed'] = $random_seed;

        return $this;
    }

    /**
     * Gets v_pub_new
     *
     * @return string
     */
    public function getVPubNew()
    {
        return $this->container['v_pub_new'];
    }

    /**
     * Sets v_pub_new
     *
     * @param string $v_pub_new Defines the value that the joinSplit transfer will insert into the transparent transaction value pool.
     *
     * @return self
     */
    public function setVPubNew($v_pub_new)
    {
        if (is_null($v_pub_new)) {
            throw new \InvalidArgumentException('non-nullable v_pub_new cannot be null');
        }
        $this->container['v_pub_new'] = $v_pub_new;

        return $this;
    }

    /**
     * Gets v_pub_old
     *
     * @return string
     */
    public function getVPubOld()
    {
        return $this->container['v_pub_old'];
    }

    /**
     * Sets v_pub_old
     *
     * @param string $v_pub_old Defines the value that the joinSplit transfer will remove from the transparent transaction value pool.
     *
     * @return self
     */
    public function setVPubOld($v_pub_old)
    {
        if (is_null($v_pub_old)) {
            throw new \InvalidArgumentException('non-nullable v_pub_old cannot be null');
        }
        $this->container['v_pub_old'] = $v_pub_old;

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


