<?php
/**
 * TrackedChangesEdFiStudentAcademicRecordKey
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
 * TrackedChangesEdFiStudentAcademicRecordKey Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TrackedChangesEdFiStudentAcademicRecordKey implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'trackedChanges_edFi_studentAcademicRecordKey';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'term_descriptor' => 'string',
        'education_organization_id' => 'int',
        'school_year' => 'int',
        'student_unique_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'term_descriptor' => null,
        'education_organization_id' => 'int64',
        'school_year' => 'int32',
        'student_unique_id' => null
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
        'term_descriptor' => 'termDescriptor',
        'education_organization_id' => 'educationOrganizationId',
        'school_year' => 'schoolYear',
        'student_unique_id' => 'studentUniqueId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'term_descriptor' => 'setTermDescriptor',
        'education_organization_id' => 'setEducationOrganizationId',
        'school_year' => 'setSchoolYear',
        'student_unique_id' => 'setStudentUniqueId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'term_descriptor' => 'getTermDescriptor',
        'education_organization_id' => 'getEducationOrganizationId',
        'school_year' => 'getSchoolYear',
        'student_unique_id' => 'getStudentUniqueId'
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
        $this->container['term_descriptor'] = $data['term_descriptor'] ?? null;
        $this->container['education_organization_id'] = $data['education_organization_id'] ?? null;
        $this->container['school_year'] = $data['school_year'] ?? null;
        $this->container['student_unique_id'] = $data['student_unique_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['term_descriptor']) && (mb_strlen($this->container['term_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'term_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['student_unique_id']) && (mb_strlen($this->container['student_unique_id']) > 32)) {
            $invalidProperties[] = "invalid value for 'student_unique_id', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['student_unique_id']) && (mb_strlen($this->container['student_unique_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'student_unique_id', the character length must be bigger than or equal to 1.";
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
     * Gets term_descriptor
     *
     * @return string|null
     */
    public function getTermDescriptor()
    {
        return $this->container['term_descriptor'];
    }

    /**
     * Sets term_descriptor
     *
     * @param string|null $term_descriptor The term for the session during the school year.
     *
     * @return self
     */
    public function setTermDescriptor($term_descriptor)
    {
        if (!is_null($term_descriptor) && (mb_strlen($term_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $term_descriptor when calling TrackedChangesEdFiStudentAcademicRecordKey., must be smaller than or equal to 306.');
        }

        $this->container['term_descriptor'] = $term_descriptor;

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
     * Gets school_year
     *
     * @return int|null
     */
    public function getSchoolYear()
    {
        return $this->container['school_year'];
    }

    /**
     * Sets school_year
     *
     * @param int|null $school_year The identifier for the school year.
     *
     * @return self
     */
    public function setSchoolYear($school_year)
    {
        $this->container['school_year'] = $school_year;

        return $this;
    }

    /**
     * Gets student_unique_id
     *
     * @return string|null
     */
    public function getStudentUniqueId()
    {
        return $this->container['student_unique_id'];
    }

    /**
     * Sets student_unique_id
     *
     * @param string|null $student_unique_id A unique alphanumeric code assigned to a student.
     *
     * @return self
     */
    public function setStudentUniqueId($student_unique_id)
    {
        if (!is_null($student_unique_id) && (mb_strlen($student_unique_id) > 32)) {
            throw new \InvalidArgumentException('invalid length for $student_unique_id when calling TrackedChangesEdFiStudentAcademicRecordKey., must be smaller than or equal to 32.');
        }
        if (!is_null($student_unique_id) && (mb_strlen($student_unique_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $student_unique_id when calling TrackedChangesEdFiStudentAcademicRecordKey., must be bigger than or equal to 1.');
        }

        $this->container['student_unique_id'] = $student_unique_id;

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


