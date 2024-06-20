<?php
/**
 * EdFiStudentEducationOrganizationAssociationStudentCharacteristic
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
 * EdFiStudentEducationOrganizationAssociationStudentCharacteristic Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiStudentEducationOrganizationAssociationStudentCharacteristic implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_studentEducationOrganizationAssociationStudentCharacteristic';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'student_characteristic_descriptor' => 'string',
        'designated_by' => 'string',
        'periods' => '\OpenAPI\Client\Model\EdFiStudentEducationOrganizationAssociationStudentCharacteristicPeriod[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'student_characteristic_descriptor' => null,
        'designated_by' => null,
        'periods' => null
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
        'student_characteristic_descriptor' => 'studentCharacteristicDescriptor',
        'designated_by' => 'designatedBy',
        'periods' => 'periods'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'student_characteristic_descriptor' => 'setStudentCharacteristicDescriptor',
        'designated_by' => 'setDesignatedBy',
        'periods' => 'setPeriods'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'student_characteristic_descriptor' => 'getStudentCharacteristicDescriptor',
        'designated_by' => 'getDesignatedBy',
        'periods' => 'getPeriods'
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
        $this->container['student_characteristic_descriptor'] = $data['student_characteristic_descriptor'] ?? null;
        $this->container['designated_by'] = $data['designated_by'] ?? null;
        $this->container['periods'] = $data['periods'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['student_characteristic_descriptor'] === null) {
            $invalidProperties[] = "'student_characteristic_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['student_characteristic_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'student_characteristic_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['designated_by']) && (mb_strlen($this->container['designated_by']) > 60)) {
            $invalidProperties[] = "invalid value for 'designated_by', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['designated_by']) && (mb_strlen($this->container['designated_by']) < 1)) {
            $invalidProperties[] = "invalid value for 'designated_by', the character length must be bigger than or equal to 1.";
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
     * Gets student_characteristic_descriptor
     *
     * @return string
     */
    public function getStudentCharacteristicDescriptor()
    {
        return $this->container['student_characteristic_descriptor'];
    }

    /**
     * Sets student_characteristic_descriptor
     *
     * @param string $student_characteristic_descriptor The characteristic designated for the student.
     *
     * @return self
     */
    public function setStudentCharacteristicDescriptor($student_characteristic_descriptor)
    {
        if ((mb_strlen($student_characteristic_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $student_characteristic_descriptor when calling EdFiStudentEducationOrganizationAssociationStudentCharacteristic., must be smaller than or equal to 306.');
        }

        $this->container['student_characteristic_descriptor'] = $student_characteristic_descriptor;

        return $this;
    }

    /**
     * Gets designated_by
     *
     * @return string|null
     */
    public function getDesignatedBy()
    {
        return $this->container['designated_by'];
    }

    /**
     * Sets designated_by
     *
     * @param string|null $designated_by The person, organization, or department that designated the characteristic.
     *
     * @return self
     */
    public function setDesignatedBy($designated_by)
    {
        if (!is_null($designated_by) && (mb_strlen($designated_by) > 60)) {
            throw new \InvalidArgumentException('invalid length for $designated_by when calling EdFiStudentEducationOrganizationAssociationStudentCharacteristic., must be smaller than or equal to 60.');
        }
        if (!is_null($designated_by) && (mb_strlen($designated_by) < 1)) {
            throw new \InvalidArgumentException('invalid length for $designated_by when calling EdFiStudentEducationOrganizationAssociationStudentCharacteristic., must be bigger than or equal to 1.');
        }

        $this->container['designated_by'] = $designated_by;

        return $this;
    }

    /**
     * Gets periods
     *
     * @return \OpenAPI\Client\Model\EdFiStudentEducationOrganizationAssociationStudentCharacteristicPeriod[]|null
     */
    public function getPeriods()
    {
        return $this->container['periods'];
    }

    /**
     * Sets periods
     *
     * @param \OpenAPI\Client\Model\EdFiStudentEducationOrganizationAssociationStudentCharacteristicPeriod[]|null $periods An unordered collection of studentEducationOrganizationAssociationStudentCharacteristicPeriods. The time periods for which characteristic was effective.
     *
     * @return self
     */
    public function setPeriods($periods)
    {
        $this->container['periods'] = $periods;

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


