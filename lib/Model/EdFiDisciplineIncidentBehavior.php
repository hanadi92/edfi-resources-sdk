<?php
/**
 * EdFiDisciplineIncidentBehavior
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
 * EdFiDisciplineIncidentBehavior Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiDisciplineIncidentBehavior implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_disciplineIncidentBehavior';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'behavior_descriptor' => 'string',
        'behavior_detailed_description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'behavior_descriptor' => null,
        'behavior_detailed_description' => null
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
        'behavior_descriptor' => 'behaviorDescriptor',
        'behavior_detailed_description' => 'behaviorDetailedDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'behavior_descriptor' => 'setBehaviorDescriptor',
        'behavior_detailed_description' => 'setBehaviorDetailedDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'behavior_descriptor' => 'getBehaviorDescriptor',
        'behavior_detailed_description' => 'getBehaviorDetailedDescription'
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
        $this->container['behavior_descriptor'] = $data['behavior_descriptor'] ?? null;
        $this->container['behavior_detailed_description'] = $data['behavior_detailed_description'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['behavior_descriptor'] === null) {
            $invalidProperties[] = "'behavior_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['behavior_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'behavior_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['behavior_detailed_description']) && (mb_strlen($this->container['behavior_detailed_description']) > 1024)) {
            $invalidProperties[] = "invalid value for 'behavior_detailed_description', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['behavior_detailed_description']) && (mb_strlen($this->container['behavior_detailed_description']) < 1)) {
            $invalidProperties[] = "invalid value for 'behavior_detailed_description', the character length must be bigger than or equal to 1.";
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
     * Gets behavior_descriptor
     *
     * @return string
     */
    public function getBehaviorDescriptor()
    {
        return $this->container['behavior_descriptor'];
    }

    /**
     * Sets behavior_descriptor
     *
     * @param string $behavior_descriptor Describes behavior by category and provides a detailed description.
     *
     * @return self
     */
    public function setBehaviorDescriptor($behavior_descriptor)
    {
        if ((mb_strlen($behavior_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $behavior_descriptor when calling EdFiDisciplineIncidentBehavior., must be smaller than or equal to 306.');
        }

        $this->container['behavior_descriptor'] = $behavior_descriptor;

        return $this;
    }

    /**
     * Gets behavior_detailed_description
     *
     * @return string|null
     */
    public function getBehaviorDetailedDescription()
    {
        return $this->container['behavior_detailed_description'];
    }

    /**
     * Sets behavior_detailed_description
     *
     * @param string|null $behavior_detailed_description Specifies a more granular level of detail of a behavior involved in the incident.
     *
     * @return self
     */
    public function setBehaviorDetailedDescription($behavior_detailed_description)
    {
        if (!is_null($behavior_detailed_description) && (mb_strlen($behavior_detailed_description) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $behavior_detailed_description when calling EdFiDisciplineIncidentBehavior., must be smaller than or equal to 1024.');
        }
        if (!is_null($behavior_detailed_description) && (mb_strlen($behavior_detailed_description) < 1)) {
            throw new \InvalidArgumentException('invalid length for $behavior_detailed_description when calling EdFiDisciplineIncidentBehavior., must be bigger than or equal to 1.');
        }

        $this->container['behavior_detailed_description'] = $behavior_detailed_description;

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


