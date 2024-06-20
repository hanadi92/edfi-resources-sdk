<?php
/**
 * EdFiStudentSectionAssociationReference
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
 * EdFiStudentSectionAssociationReference Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiStudentSectionAssociationReference implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_studentSectionAssociationReference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'begin_date' => '\DateTime',
        'local_course_code' => 'string',
        'school_id' => 'int',
        'school_year' => 'int',
        'section_identifier' => 'string',
        'session_name' => 'string',
        'student_unique_id' => 'string',
        'link' => '\OpenAPI\Client\Model\Link'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'begin_date' => 'date',
        'local_course_code' => null,
        'school_id' => 'int64',
        'school_year' => 'int32',
        'section_identifier' => null,
        'session_name' => null,
        'student_unique_id' => null,
        'link' => null
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
        'begin_date' => 'beginDate',
        'local_course_code' => 'localCourseCode',
        'school_id' => 'schoolId',
        'school_year' => 'schoolYear',
        'section_identifier' => 'sectionIdentifier',
        'session_name' => 'sessionName',
        'student_unique_id' => 'studentUniqueId',
        'link' => 'link'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'begin_date' => 'setBeginDate',
        'local_course_code' => 'setLocalCourseCode',
        'school_id' => 'setSchoolId',
        'school_year' => 'setSchoolYear',
        'section_identifier' => 'setSectionIdentifier',
        'session_name' => 'setSessionName',
        'student_unique_id' => 'setStudentUniqueId',
        'link' => 'setLink'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'begin_date' => 'getBeginDate',
        'local_course_code' => 'getLocalCourseCode',
        'school_id' => 'getSchoolId',
        'school_year' => 'getSchoolYear',
        'section_identifier' => 'getSectionIdentifier',
        'session_name' => 'getSessionName',
        'student_unique_id' => 'getStudentUniqueId',
        'link' => 'getLink'
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
        $this->container['begin_date'] = $data['begin_date'] ?? null;
        $this->container['local_course_code'] = $data['local_course_code'] ?? null;
        $this->container['school_id'] = $data['school_id'] ?? null;
        $this->container['school_year'] = $data['school_year'] ?? null;
        $this->container['section_identifier'] = $data['section_identifier'] ?? null;
        $this->container['session_name'] = $data['session_name'] ?? null;
        $this->container['student_unique_id'] = $data['student_unique_id'] ?? null;
        $this->container['link'] = $data['link'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['begin_date'] === null) {
            $invalidProperties[] = "'begin_date' can't be null";
        }
        if ($this->container['local_course_code'] === null) {
            $invalidProperties[] = "'local_course_code' can't be null";
        }
        if ((mb_strlen($this->container['local_course_code']) > 60)) {
            $invalidProperties[] = "invalid value for 'local_course_code', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['local_course_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'local_course_code', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['school_id'] === null) {
            $invalidProperties[] = "'school_id' can't be null";
        }
        if ($this->container['school_year'] === null) {
            $invalidProperties[] = "'school_year' can't be null";
        }
        if ($this->container['section_identifier'] === null) {
            $invalidProperties[] = "'section_identifier' can't be null";
        }
        if ((mb_strlen($this->container['section_identifier']) > 255)) {
            $invalidProperties[] = "invalid value for 'section_identifier', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['section_identifier']) < 1)) {
            $invalidProperties[] = "invalid value for 'section_identifier', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['session_name'] === null) {
            $invalidProperties[] = "'session_name' can't be null";
        }
        if ((mb_strlen($this->container['session_name']) > 60)) {
            $invalidProperties[] = "invalid value for 'session_name', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['session_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'session_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['student_unique_id'] === null) {
            $invalidProperties[] = "'student_unique_id' can't be null";
        }
        if ((mb_strlen($this->container['student_unique_id']) > 32)) {
            $invalidProperties[] = "invalid value for 'student_unique_id', the character length must be smaller than or equal to 32.";
        }

        if ((mb_strlen($this->container['student_unique_id']) < 1)) {
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
     * Gets begin_date
     *
     * @return \DateTime
     */
    public function getBeginDate()
    {
        return $this->container['begin_date'];
    }

    /**
     * Sets begin_date
     *
     * @param \DateTime $begin_date Month, day, and year of the student's entry or assignment to the section.
     *
     * @return self
     */
    public function setBeginDate($begin_date)
    {
        $this->container['begin_date'] = $begin_date;

        return $this;
    }

    /**
     * Gets local_course_code
     *
     * @return string
     */
    public function getLocalCourseCode()
    {
        return $this->container['local_course_code'];
    }

    /**
     * Sets local_course_code
     *
     * @param string $local_course_code The local code assigned by the School that identifies the course offering provided for the instruction of students.
     *
     * @return self
     */
    public function setLocalCourseCode($local_course_code)
    {
        if ((mb_strlen($local_course_code) > 60)) {
            throw new \InvalidArgumentException('invalid length for $local_course_code when calling EdFiStudentSectionAssociationReference., must be smaller than or equal to 60.');
        }
        if ((mb_strlen($local_course_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $local_course_code when calling EdFiStudentSectionAssociationReference., must be bigger than or equal to 1.');
        }

        $this->container['local_course_code'] = $local_course_code;

        return $this;
    }

    /**
     * Gets school_id
     *
     * @return int
     */
    public function getSchoolId()
    {
        return $this->container['school_id'];
    }

    /**
     * Sets school_id
     *
     * @param int $school_id The identifier assigned to a school.
     *
     * @return self
     */
    public function setSchoolId($school_id)
    {
        $this->container['school_id'] = $school_id;

        return $this;
    }

    /**
     * Gets school_year
     *
     * @return int
     */
    public function getSchoolYear()
    {
        return $this->container['school_year'];
    }

    /**
     * Sets school_year
     *
     * @param int $school_year The identifier for the school year.
     *
     * @return self
     */
    public function setSchoolYear($school_year)
    {
        $this->container['school_year'] = $school_year;

        return $this;
    }

    /**
     * Gets section_identifier
     *
     * @return string
     */
    public function getSectionIdentifier()
    {
        return $this->container['section_identifier'];
    }

    /**
     * Sets section_identifier
     *
     * @param string $section_identifier The local identifier assigned to a section.
     *
     * @return self
     */
    public function setSectionIdentifier($section_identifier)
    {
        if ((mb_strlen($section_identifier) > 255)) {
            throw new \InvalidArgumentException('invalid length for $section_identifier when calling EdFiStudentSectionAssociationReference., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($section_identifier) < 1)) {
            throw new \InvalidArgumentException('invalid length for $section_identifier when calling EdFiStudentSectionAssociationReference., must be bigger than or equal to 1.');
        }

        $this->container['section_identifier'] = $section_identifier;

        return $this;
    }

    /**
     * Gets session_name
     *
     * @return string
     */
    public function getSessionName()
    {
        return $this->container['session_name'];
    }

    /**
     * Sets session_name
     *
     * @param string $session_name The identifier for the calendar for the academic session.
     *
     * @return self
     */
    public function setSessionName($session_name)
    {
        if ((mb_strlen($session_name) > 60)) {
            throw new \InvalidArgumentException('invalid length for $session_name when calling EdFiStudentSectionAssociationReference., must be smaller than or equal to 60.');
        }
        if ((mb_strlen($session_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $session_name when calling EdFiStudentSectionAssociationReference., must be bigger than or equal to 1.');
        }

        $this->container['session_name'] = $session_name;

        return $this;
    }

    /**
     * Gets student_unique_id
     *
     * @return string
     */
    public function getStudentUniqueId()
    {
        return $this->container['student_unique_id'];
    }

    /**
     * Sets student_unique_id
     *
     * @param string $student_unique_id A unique alphanumeric code assigned to a student.
     *
     * @return self
     */
    public function setStudentUniqueId($student_unique_id)
    {
        if ((mb_strlen($student_unique_id) > 32)) {
            throw new \InvalidArgumentException('invalid length for $student_unique_id when calling EdFiStudentSectionAssociationReference., must be smaller than or equal to 32.');
        }
        if ((mb_strlen($student_unique_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $student_unique_id when calling EdFiStudentSectionAssociationReference., must be bigger than or equal to 1.');
        }

        $this->container['student_unique_id'] = $student_unique_id;

        return $this;
    }

    /**
     * Gets link
     *
     * @return \OpenAPI\Client\Model\Link|null
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param \OpenAPI\Client\Model\Link|null $link link
     *
     * @return self
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

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


