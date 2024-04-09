<?php
/**
 * ListTransactionsByBlockHeightRIBSZVShieldedOutputInner
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
 * ListTransactionsByBlockHeightRIBSZVShieldedOutputInner Class Doc Comment
 *
 * @category Class
 * @package  com.cryptoapis.rest_apis.sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ListTransactionsByBlockHeightRIBSZVShieldedOutputInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListTransactionsByBlockHeightRIBSZ_vShieldedOutput_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cmu' => 'string',
        'cv' => 'string',
        'enc_cipher_text' => 'string',
        'ephemeral_key' => 'string',
        'out_cipher_text' => 'string',
        'proof' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cmu' => null,
        'cv' => null,
        'enc_cipher_text' => null,
        'ephemeral_key' => null,
        'out_cipher_text' => null,
        'proof' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cmu' => false,
        'cv' => false,
        'enc_cipher_text' => false,
        'ephemeral_key' => false,
        'out_cipher_text' => false,
        'proof' => false
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
        'cmu' => 'cmu',
        'cv' => 'cv',
        'enc_cipher_text' => 'encCipherText',
        'ephemeral_key' => 'ephemeralKey',
        'out_cipher_text' => 'outCipherText',
        'proof' => 'proof'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cmu' => 'setCmu',
        'cv' => 'setCv',
        'enc_cipher_text' => 'setEncCipherText',
        'ephemeral_key' => 'setEphemeralKey',
        'out_cipher_text' => 'setOutCipherText',
        'proof' => 'setProof'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cmu' => 'getCmu',
        'cv' => 'getCv',
        'enc_cipher_text' => 'getEncCipherText',
        'ephemeral_key' => 'getEphemeralKey',
        'out_cipher_text' => 'getOutCipherText',
        'proof' => 'getProof'
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
        $this->setIfExists('cmu', $data ?? [], null);
        $this->setIfExists('cv', $data ?? [], null);
        $this->setIfExists('enc_cipher_text', $data ?? [], null);
        $this->setIfExists('ephemeral_key', $data ?? [], null);
        $this->setIfExists('out_cipher_text', $data ?? [], null);
        $this->setIfExists('proof', $data ?? [], null);
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

        if ($this->container['cmu'] === null) {
            $invalidProperties[] = "'cmu' can't be null";
        }
        if ($this->container['cv'] === null) {
            $invalidProperties[] = "'cv' can't be null";
        }
        if ($this->container['enc_cipher_text'] === null) {
            $invalidProperties[] = "'enc_cipher_text' can't be null";
        }
        if ($this->container['ephemeral_key'] === null) {
            $invalidProperties[] = "'ephemeral_key' can't be null";
        }
        if ($this->container['out_cipher_text'] === null) {
            $invalidProperties[] = "'out_cipher_text' can't be null";
        }
        if ($this->container['proof'] === null) {
            $invalidProperties[] = "'proof' can't be null";
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
     * Gets cmu
     *
     * @return string
     */
    public function getCmu()
    {
        return $this->container['cmu'];
    }

    /**
     * Sets cmu
     *
     * @param string $cmu Represents the 𝑢-coordinate of the note commitment for the output note.
     *
     * @return self
     */
    public function setCmu($cmu)
    {
        if (is_null($cmu)) {
            throw new \InvalidArgumentException('non-nullable cmu cannot be null');
        }
        $this->container['cmu'] = $cmu;

        return $this;
    }

    /**
     * Gets cv
     *
     * @return string
     */
    public function getCv()
    {
        return $this->container['cv'];
    }

    /**
     * Sets cv
     *
     * @param string $cv Defines a value commitment to the value of the input note.
     *
     * @return self
     */
    public function setCv($cv)
    {
        if (is_null($cv)) {
            throw new \InvalidArgumentException('non-nullable cv cannot be null');
        }
        $this->container['cv'] = $cv;

        return $this;
    }

    /**
     * Gets enc_cipher_text
     *
     * @return string
     */
    public function getEncCipherText()
    {
        return $this->container['enc_cipher_text'];
    }

    /**
     * Sets enc_cipher_text
     *
     * @param string $enc_cipher_text Represents a ciphertext component for the encrypted output note.
     *
     * @return self
     */
    public function setEncCipherText($enc_cipher_text)
    {
        if (is_null($enc_cipher_text)) {
            throw new \InvalidArgumentException('non-nullable enc_cipher_text cannot be null');
        }
        $this->container['enc_cipher_text'] = $enc_cipher_text;

        return $this;
    }

    /**
     * Gets ephemeral_key
     *
     * @return string
     */
    public function getEphemeralKey()
    {
        return $this->container['ephemeral_key'];
    }

    /**
     * Sets ephemeral_key
     *
     * @param string $ephemeral_key Represents an encoding of an ephemeral Jubjub public key.
     *
     * @return self
     */
    public function setEphemeralKey($ephemeral_key)
    {
        if (is_null($ephemeral_key)) {
            throw new \InvalidArgumentException('non-nullable ephemeral_key cannot be null');
        }
        $this->container['ephemeral_key'] = $ephemeral_key;

        return $this;
    }

    /**
     * Gets out_cipher_text
     *
     * @return string
     */
    public function getOutCipherText()
    {
        return $this->container['out_cipher_text'];
    }

    /**
     * Sets out_cipher_text
     *
     * @param string $out_cipher_text Represents a ciphertext component that allows the holder of the outgoing cipher key to recover the diversified transmission key pkd and ephemeral private key esk, hence the entire note plaintext.
     *
     * @return self
     */
    public function setOutCipherText($out_cipher_text)
    {
        if (is_null($out_cipher_text)) {
            throw new \InvalidArgumentException('non-nullable out_cipher_text cannot be null');
        }
        $this->container['out_cipher_text'] = $out_cipher_text;

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
     * @param string $proof Represents the proof
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


