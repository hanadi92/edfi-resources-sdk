<?php
/**
 * TrackedChangesTpdmEducatorPreparationProgramKey
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
 * TrackedChangesTpdmEducatorPreparationProgramKey Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TrackedChangesTpdmEducatorPreparationProgramKey implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'trackedChanges_tpdm_educatorPreparationProgramKey';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'program_type_descriptor' => 'string',
        'program_name' => 'string',
        'education_organization_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'program_type_descriptor' => null,
        'program_name' => null,
        'education_organization_id' => 'int64'
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
        'program_type_descriptor' => 'programTypeDescriptor',
        'program_name' => 'programName',
        'education_organization_id' => 'educationOrganizationId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'program_type_descriptor' => 'setProgramTypeDescriptor',
        'program_name' => 'setProgramName',
        'education_organization_id' => 'setEducationOrganizationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'program_type_descriptor' => 'getProgramTypeDescriptor',
        'program_name' => 'getProgramName',
        'education_organization_id' => 'getEducationOrganizationId'
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
        $this->container['program_type_descriptor'] = $data['program_type_descriptor'] ?? null;
        $this->container['program_name'] = $data['program_name'] ?? null;
        $this->container['education_organization_id'] = $data['education_organization_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['program_type_descriptor']) && (mb_strlen($this->container['program_type_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'program_type_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['program_name']) && (mb_strlen($this->container['program_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'program_name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['program_name']) && (mb_strlen($this->container['program_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'program_name', the character length must be bigger than or equal to 1.";
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
     * Gets program_type_descriptor
     *
     * @return string|null
     */
    public function getProgramTypeDescriptor()
    {
        return $this->container['program_type_descriptor'];
    }

    /**
     * Sets program_type_descriptor
     *
     * @param string|null $program_type_descriptor The type of program.
     *
     * @return self
     */
    public function setProgramTypeDescriptor($program_type_descriptor)
    {
        if (!is_null($program_type_descriptor) && (mb_strlen($program_type_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $program_type_descriptor when calling TrackedChangesTpdmEducatorPreparationProgramKey., must be smaller than or equal to 306.');
        }

        $this->container['program_type_descriptor'] = $program_type_descriptor;

        return $this;
    }

    /**
     * Gets program_name
     *
     * @return string|null
     */
    public function getProgramName()
    {
        return $this->container['program_name'];
    }

    /**
     * Sets program_name
     *
     * @param string|null $program_name The name of the Educator Preparation Program.
     *
     * @return self
     */
    public function setProgramName($program_name)
    {
        if (!is_null($program_name) && (mb_strlen($program_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $program_name when calling TrackedChangesTpdmEducatorPreparationProgramKey., must be smaller than or equal to 255.');
        }
        if (!is_null($program_name) && (mb_strlen($program_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $program_name when calling TrackedChangesTpdmEducatorPreparationProgramKey., must be bigger than or equal to 1.');
        }

        $this->container['program_name'] = $program_name;

        return $this;
    }

    /**
     * Gets education_organization_id
     *
     * @return int|null
     */
    public function getEducationOrganizationId()
    {
        return $this->container['education_organization_id'];
    }

    /**
     * Sets education_organization_id
     *
     * @param int|null $education_organization_id The identifier assigned to an education organization.
     *
     * @return self
     */
    public function setEducationOrganizationId($education_organization_id)
    {
        $this->container['education_organization_id'] = $education_organization_id;

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


