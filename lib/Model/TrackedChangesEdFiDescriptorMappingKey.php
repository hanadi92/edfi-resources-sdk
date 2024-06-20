<?php
/**
 * TrackedChangesEdFiDescriptorMappingKey
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Ed-Fi Operational Data Store API
 *
 * The Ed-Fi ODS / API enables applications to read and write education data stored in an Ed-Fi ODS through a secure REST interface.  ***  > *Note: Consumers of ODS / API information should sanitize all data for display and storage. The ODS / API provides reasonable safeguards against cross-site scripting attacks and other malicious content, but the platform does not and cannot guarantee that the data it contains is free of all potentially harmful content.*  ***
 *
 * The version of the OpenAPI document: 3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * TrackedChangesEdFiDescriptorMappingKey Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TrackedChangesEdFiDescriptorMappingKey implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'trackedChanges_edFi_descriptorMappingKey';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'mapped_namespace' => 'string',
        'mapped_value' => 'string',
        'namespace' => 'string',
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
        'mapped_namespace' => null,
        'mapped_value' => null,
        'namespace' => null,
        'value' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'mapped_namespace' => 'mappedNamespace',
        'mapped_value' => 'mappedValue',
        'namespace' => 'namespace',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mapped_namespace' => 'setMappedNamespace',
        'mapped_value' => 'setMappedValue',
        'namespace' => 'setNamespace',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mapped_namespace' => 'getMappedNamespace',
        'mapped_value' => 'getMappedValue',
        'namespace' => 'getNamespace',
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
        $this->container['mapped_namespace'] = $data['mapped_namespace'] ?? null;
        $this->container['mapped_value'] = $data['mapped_value'] ?? null;
        $this->container['namespace'] = $data['namespace'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['mapped_namespace']) && (mb_strlen($this->container['mapped_namespace']) > 255)) {
            $invalidProperties[] = "invalid value for 'mapped_namespace', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['mapped_namespace']) && (mb_strlen($this->container['mapped_namespace']) < 5)) {
            $invalidProperties[] = "invalid value for 'mapped_namespace', the character length must be bigger than or equal to 5.";
        }

        if (!is_null($this->container['mapped_value']) && (mb_strlen($this->container['mapped_value']) > 50)) {
            $invalidProperties[] = "invalid value for 'mapped_value', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['mapped_value']) && (mb_strlen($this->container['mapped_value']) < 1)) {
            $invalidProperties[] = "invalid value for 'mapped_value', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 255)) {
            $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 5)) {
            $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 5.";
        }

        if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 50)) {
            $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) < 1)) {
            $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 1.";
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
     * Gets mapped_namespace
     *
     * @return string|null
     */
    public function getMappedNamespace()
    {
        return $this->container['mapped_namespace'];
    }

    /**
     * Sets mapped_namespace
     *
     * @param string|null $mapped_namespace The namespace of the descriptor value to which the from descriptor value is mapped to.
     *
     * @return self
     */
    public function setMappedNamespace($mapped_namespace)
    {
        if (!is_null($mapped_namespace) && (mb_strlen($mapped_namespace) > 255)) {
            throw new \InvalidArgumentException('invalid length for $mapped_namespace when calling TrackedChangesEdFiDescriptorMappingKey., must be smaller than or equal to 255.');
        }
        if (!is_null($mapped_namespace) && (mb_strlen($mapped_namespace) < 5)) {
            throw new \InvalidArgumentException('invalid length for $mapped_namespace when calling TrackedChangesEdFiDescriptorMappingKey., must be bigger than or equal to 5.');
        }

        $this->container['mapped_namespace'] = $mapped_namespace;

        return $this;
    }

    /**
     * Gets mapped_value
     *
     * @return string|null
     */
    public function getMappedValue()
    {
        return $this->container['mapped_value'];
    }

    /**
     * Sets mapped_value
     *
     * @param string|null $mapped_value The descriptor value to which the from descriptor value is being mapped to.
     *
     * @return self
     */
    public function setMappedValue($mapped_value)
    {
        if (!is_null($mapped_value) && (mb_strlen($mapped_value) > 50)) {
            throw new \InvalidArgumentException('invalid length for $mapped_value when calling TrackedChangesEdFiDescriptorMappingKey., must be smaller than or equal to 50.');
        }
        if (!is_null($mapped_value) && (mb_strlen($mapped_value) < 1)) {
            throw new \InvalidArgumentException('invalid length for $mapped_value when calling TrackedChangesEdFiDescriptorMappingKey., must be bigger than or equal to 1.');
        }

        $this->container['mapped_value'] = $mapped_value;

        return $this;
    }

    /**
     * Gets namespace
     *
     * @return string|null
     */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
     * Sets namespace
     *
     * @param string|null $namespace The namespace of the descriptor value that is being mapped to another value.
     *
     * @return self
     */
    public function setNamespace($namespace)
    {
        if (!is_null($namespace) && (mb_strlen($namespace) > 255)) {
            throw new \InvalidArgumentException('invalid length for $namespace when calling TrackedChangesEdFiDescriptorMappingKey., must be smaller than or equal to 255.');
        }
        if (!is_null($namespace) && (mb_strlen($namespace) < 5)) {
            throw new \InvalidArgumentException('invalid length for $namespace when calling TrackedChangesEdFiDescriptorMappingKey., must be bigger than or equal to 5.');
        }

        $this->container['namespace'] = $namespace;

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
     * @param string|null $value The descriptor value that is being mapped to another value.
     *
     * @return self
     */
    public function setValue($value)
    {
        if (!is_null($value) && (mb_strlen($value) > 50)) {
            throw new \InvalidArgumentException('invalid length for $value when calling TrackedChangesEdFiDescriptorMappingKey., must be smaller than or equal to 50.');
        }
        if (!is_null($value) && (mb_strlen($value) < 1)) {
            throw new \InvalidArgumentException('invalid length for $value when calling TrackedChangesEdFiDescriptorMappingKey., must be bigger than or equal to 1.');
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
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


