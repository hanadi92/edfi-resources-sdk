<?php
/**
 * EdFiGraduationPlanCreditsByCourse
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
 * EdFiGraduationPlanCreditsByCourse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiGraduationPlanCreditsByCourse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_graduationPlanCreditsByCourse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'course_set_name' => 'string',
        'credit_type_descriptor' => 'string',
        'when_taken_grade_level_descriptor' => 'string',
        'credit_conversion' => 'double',
        'credits' => 'double',
        'courses' => '\OpenAPI\Client\Model\EdFiGraduationPlanCreditsByCourseCourse[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'course_set_name' => null,
        'credit_type_descriptor' => null,
        'when_taken_grade_level_descriptor' => null,
        'credit_conversion' => 'double',
        'credits' => 'double',
        'courses' => null
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
        'course_set_name' => 'courseSetName',
        'credit_type_descriptor' => 'creditTypeDescriptor',
        'when_taken_grade_level_descriptor' => 'whenTakenGradeLevelDescriptor',
        'credit_conversion' => 'creditConversion',
        'credits' => 'credits',
        'courses' => 'courses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'course_set_name' => 'setCourseSetName',
        'credit_type_descriptor' => 'setCreditTypeDescriptor',
        'when_taken_grade_level_descriptor' => 'setWhenTakenGradeLevelDescriptor',
        'credit_conversion' => 'setCreditConversion',
        'credits' => 'setCredits',
        'courses' => 'setCourses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'course_set_name' => 'getCourseSetName',
        'credit_type_descriptor' => 'getCreditTypeDescriptor',
        'when_taken_grade_level_descriptor' => 'getWhenTakenGradeLevelDescriptor',
        'credit_conversion' => 'getCreditConversion',
        'credits' => 'getCredits',
        'courses' => 'getCourses'
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
        $this->container['course_set_name'] = $data['course_set_name'] ?? null;
        $this->container['credit_type_descriptor'] = $data['credit_type_descriptor'] ?? null;
        $this->container['when_taken_grade_level_descriptor'] = $data['when_taken_grade_level_descriptor'] ?? null;
        $this->container['credit_conversion'] = $data['credit_conversion'] ?? null;
        $this->container['credits'] = $data['credits'] ?? null;
        $this->container['courses'] = $data['courses'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['course_set_name'] === null) {
            $invalidProperties[] = "'course_set_name' can't be null";
        }
        if ((mb_strlen($this->container['course_set_name']) > 120)) {
            $invalidProperties[] = "invalid value for 'course_set_name', the character length must be smaller than or equal to 120.";
        }

        if ((mb_strlen($this->container['course_set_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'course_set_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['credit_type_descriptor']) && (mb_strlen($this->container['credit_type_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'credit_type_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['when_taken_grade_level_descriptor']) && (mb_strlen($this->container['when_taken_grade_level_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'when_taken_grade_level_descriptor', the character length must be smaller than or equal to 306.";
        }

        if ($this->container['credits'] === null) {
            $invalidProperties[] = "'credits' can't be null";
        }
        if (($this->container['credits'] < 0.0)) {
            $invalidProperties[] = "invalid value for 'credits', must be bigger than or equal to 0.0.";
        }

        if ($this->container['courses'] === null) {
            $invalidProperties[] = "'courses' can't be null";
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
     * Gets course_set_name
     *
     * @return string
     */
    public function getCourseSetName()
    {
        return $this->container['course_set_name'];
    }

    /**
     * Sets course_set_name
     *
     * @param string $course_set_name Identifying name given to a collection of courses.
     *
     * @return self
     */
    public function setCourseSetName($course_set_name)
    {
        if ((mb_strlen($course_set_name) > 120)) {
            throw new \InvalidArgumentException('invalid length for $course_set_name when calling EdFiGraduationPlanCreditsByCourse., must be smaller than or equal to 120.');
        }
        if ((mb_strlen($course_set_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $course_set_name when calling EdFiGraduationPlanCreditsByCourse., must be bigger than or equal to 1.');
        }

        $this->container['course_set_name'] = $course_set_name;

        return $this;
    }

    /**
     * Gets credit_type_descriptor
     *
     * @return string|null
     */
    public function getCreditTypeDescriptor()
    {
        return $this->container['credit_type_descriptor'];
    }

    /**
     * Sets credit_type_descriptor
     *
     * @param string|null $credit_type_descriptor The type of credits or units of value awarded for the completion of a course.
     *
     * @return self
     */
    public function setCreditTypeDescriptor($credit_type_descriptor)
    {
        if (!is_null($credit_type_descriptor) && (mb_strlen($credit_type_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $credit_type_descriptor when calling EdFiGraduationPlanCreditsByCourse., must be smaller than or equal to 306.');
        }

        $this->container['credit_type_descriptor'] = $credit_type_descriptor;

        return $this;
    }

    /**
     * Gets when_taken_grade_level_descriptor
     *
     * @return string|null
     */
    public function getWhenTakenGradeLevelDescriptor()
    {
        return $this->container['when_taken_grade_level_descriptor'];
    }

    /**
     * Sets when_taken_grade_level_descriptor
     *
     * @param string|null $when_taken_grade_level_descriptor The grade level when the student is planned to take the course.
     *
     * @return self
     */
    public function setWhenTakenGradeLevelDescriptor($when_taken_grade_level_descriptor)
    {
        if (!is_null($when_taken_grade_level_descriptor) && (mb_strlen($when_taken_grade_level_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $when_taken_grade_level_descriptor when calling EdFiGraduationPlanCreditsByCourse., must be smaller than or equal to 306.');
        }

        $this->container['when_taken_grade_level_descriptor'] = $when_taken_grade_level_descriptor;

        return $this;
    }

    /**
     * Gets credit_conversion
     *
     * @return double|null
     */
    public function getCreditConversion()
    {
        return $this->container['credit_conversion'];
    }

    /**
     * Sets credit_conversion
     *
     * @param double|null $credit_conversion Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units.
     *
     * @return self
     */
    public function setCreditConversion($credit_conversion)
    {
        $this->container['credit_conversion'] = $credit_conversion;

        return $this;
    }

    /**
     * Gets credits
     *
     * @return double
     */
    public function getCredits()
    {
        return $this->container['credits'];
    }

    /**
     * Sets credits
     *
     * @param double $credits The value of credits or units of value awarded for the completion of a course.
     *
     * @return self
     */
    public function setCredits($credits)
    {

        if (($credits < 0.0)) {
            throw new \InvalidArgumentException('invalid value for $credits when calling EdFiGraduationPlanCreditsByCourse., must be bigger than or equal to 0.0.');
        }

        $this->container['credits'] = $credits;

        return $this;
    }

    /**
     * Gets courses
     *
     * @return \OpenAPI\Client\Model\EdFiGraduationPlanCreditsByCourseCourse[]
     */
    public function getCourses()
    {
        return $this->container['courses'];
    }

    /**
     * Sets courses
     *
     * @param \OpenAPI\Client\Model\EdFiGraduationPlanCreditsByCourseCourse[] $courses An unordered collection of graduationPlanCreditsByCourseCourses. The course reference that identifies the organization of subject matter and related learning experiences provided for the instruction of students.
     *
     * @return self
     */
    public function setCourses($courses)
    {
        $this->container['courses'] = $courses;

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


