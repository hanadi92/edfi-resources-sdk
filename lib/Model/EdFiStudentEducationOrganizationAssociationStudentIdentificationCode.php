<?php
/**
 * EdFiStudentEducationOrganizationAssociationStudentIdentificationCode
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
 * EdFiStudentEducationOrganizationAssociationStudentIdentificationCode Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiStudentEducationOrganizationAssociationStudentIdentificationCode implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_studentEducationOrganizationAssociationStudentIdentificationCode';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'student_identification_system_descriptor' => 'string',
        'assigning_organization_identification_code' => 'string',
        'identification_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'student_identification_system_descriptor' => null,
        'assigning_organization_identification_code' => null,
        'identification_code' => null
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
        'student_identification_system_descriptor' => 'studentIdentificationSystemDescriptor',
        'assigning_organization_identification_code' => 'assigningOrganizationIdentificationCode',
        'identification_code' => 'identificationCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'student_identification_system_descriptor' => 'setStudentIdentificationSystemDescriptor',
        'assigning_organization_identification_code' => 'setAssigningOrganizationIdentificationCode',
        'identification_code' => 'setIdentificationCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'student_identification_system_descriptor' => 'getStudentIdentificationSystemDescriptor',
        'assigning_organization_identification_code' => 'getAssigningOrganizationIdentificationCode',
        'identification_code' => 'getIdentificationCode'
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
        $this->container['student_identification_system_descriptor'] = $data['student_identification_system_descriptor'] ?? null;
        $this->container['assigning_organization_identification_code'] = $data['assigning_organization_identification_code'] ?? null;
        $this->container['identification_code'] = $data['identification_code'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['student_identification_system_descriptor'] === null) {
            $invalidProperties[] = "'student_identification_system_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['student_identification_system_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'student_identification_system_descriptor', the character length must be smaller than or equal to 306.";
        }

        if ($this->container['assigning_organization_identification_code'] === null) {
            $invalidProperties[] = "'assigning_organization_identification_code' can't be null";
        }
        if ((mb_strlen($this->container['assigning_organization_identification_code']) > 60)) {
            $invalidProperties[] = "invalid value for 'assigning_organization_identification_code', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['assigning_organization_identification_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'assigning_organization_identification_code', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['identification_code'] === null) {
            $invalidProperties[] = "'identification_code' can't be null";
        }
        if ((mb_strlen($this->container['identification_code']) > 60)) {
            $invalidProperties[] = "invalid value for 'identification_code', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['identification_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'identification_code', the character length must be bigger than or equal to 1.";
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
     * Gets student_identification_system_descriptor
     *
     * @return string
     */
    public function getStudentIdentificationSystemDescriptor()
    {
        return $this->container['student_identification_system_descriptor'];
    }

    /**
     * Sets student_identification_system_descriptor
     *
     * @param string $student_identification_system_descriptor A coding scheme that is used for identification and record-keeping purposes by schools, social services, or other agencies to refer to a student.
     *
     * @return self
     */
    public function setStudentIdentificationSystemDescriptor($student_identification_system_descriptor)
    {
        if ((mb_strlen($student_identification_system_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $student_identification_system_descriptor when calling EdFiStudentEducationOrganizationAssociationStudentIdentificationCode., must be smaller than or equal to 306.');
        }

        $this->container['student_identification_system_descriptor'] = $student_identification_system_descriptor;

        return $this;
    }

    /**
     * Gets assigning_organization_identification_code
     *
     * @return string
     */
    public function getAssigningOrganizationIdentificationCode()
    {
        return $this->container['assigning_organization_identification_code'];
    }

    /**
     * Sets assigning_organization_identification_code
     *
     * @param string $assigning_organization_identification_code The organization code or name assigning the StudentIdentificationCode.
     *
     * @return self
     */
    public function setAssigningOrganizationIdentificationCode($assigning_organization_identification_code)
    {
        if ((mb_strlen($assigning_organization_identification_code) > 60)) {
            throw new \InvalidArgumentException('invalid length for $assigning_organization_identification_code when calling EdFiStudentEducationOrganizationAssociationStudentIdentificationCode., must be smaller than or equal to 60.');
        }
        if ((mb_strlen($assigning_organization_identification_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $assigning_organization_identification_code when calling EdFiStudentEducationOrganizationAssociationStudentIdentificationCode., must be bigger than or equal to 1.');
        }

        $this->container['assigning_organization_identification_code'] = $assigning_organization_identification_code;

        return $this;
    }

    /**
     * Gets identification_code
     *
     * @return string
     */
    public function getIdentificationCode()
    {
        return $this->container['identification_code'];
    }

    /**
     * Sets identification_code
     *
     * @param string $identification_code A unique number or alphanumeric code assigned to a student by a school, school system, a state, or other agency or entity.
     *
     * @return self
     */
    public function setIdentificationCode($identification_code)
    {
        if ((mb_strlen($identification_code) > 60)) {
            throw new \InvalidArgumentException('invalid length for $identification_code when calling EdFiStudentEducationOrganizationAssociationStudentIdentificationCode., must be smaller than or equal to 60.');
        }
        if ((mb_strlen($identification_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $identification_code when calling EdFiStudentEducationOrganizationAssociationStudentIdentificationCode., must be bigger than or equal to 1.');
        }

        $this->container['identification_code'] = $identification_code;

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

