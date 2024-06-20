<?php
/**
 * EdFiStudentAssessmentStudentObjectiveAssessmentPerformanceLevel
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
 * EdFiStudentAssessmentStudentObjectiveAssessmentPerformanceLevel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiStudentAssessmentStudentObjectiveAssessmentPerformanceLevel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_studentAssessmentStudentObjectiveAssessmentPerformanceLevel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'assessment_reporting_method_descriptor' => 'string',
        'performance_level_descriptor' => 'string',
        'performance_level_indicator_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'assessment_reporting_method_descriptor' => null,
        'performance_level_descriptor' => null,
        'performance_level_indicator_name' => null
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
        'assessment_reporting_method_descriptor' => 'assessmentReportingMethodDescriptor',
        'performance_level_descriptor' => 'performanceLevelDescriptor',
        'performance_level_indicator_name' => 'performanceLevelIndicatorName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assessment_reporting_method_descriptor' => 'setAssessmentReportingMethodDescriptor',
        'performance_level_descriptor' => 'setPerformanceLevelDescriptor',
        'performance_level_indicator_name' => 'setPerformanceLevelIndicatorName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assessment_reporting_method_descriptor' => 'getAssessmentReportingMethodDescriptor',
        'performance_level_descriptor' => 'getPerformanceLevelDescriptor',
        'performance_level_indicator_name' => 'getPerformanceLevelIndicatorName'
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
        $this->container['assessment_reporting_method_descriptor'] = $data['assessment_reporting_method_descriptor'] ?? null;
        $this->container['performance_level_descriptor'] = $data['performance_level_descriptor'] ?? null;
        $this->container['performance_level_indicator_name'] = $data['performance_level_indicator_name'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['assessment_reporting_method_descriptor'] === null) {
            $invalidProperties[] = "'assessment_reporting_method_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['assessment_reporting_method_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'assessment_reporting_method_descriptor', the character length must be smaller than or equal to 306.";
        }

        if ($this->container['performance_level_descriptor'] === null) {
            $invalidProperties[] = "'performance_level_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['performance_level_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'performance_level_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['performance_level_indicator_name']) && (mb_strlen($this->container['performance_level_indicator_name']) > 60)) {
            $invalidProperties[] = "invalid value for 'performance_level_indicator_name', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['performance_level_indicator_name']) && (mb_strlen($this->container['performance_level_indicator_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'performance_level_indicator_name', the character length must be bigger than or equal to 1.";
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
     * Gets assessment_reporting_method_descriptor
     *
     * @return string
     */
    public function getAssessmentReportingMethodDescriptor()
    {
        return $this->container['assessment_reporting_method_descriptor'];
    }

    /**
     * Sets assessment_reporting_method_descriptor
     *
     * @param string $assessment_reporting_method_descriptor The method that the instructor of the class uses to report the performance and achievement. It may be a qualitative method such as individualized teacher comments or a quantitative method such as a letter or numerical grade. In some cases, more than one type of reporting method may be used.
     *
     * @return self
     */
    public function setAssessmentReportingMethodDescriptor($assessment_reporting_method_descriptor)
    {
        if ((mb_strlen($assessment_reporting_method_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $assessment_reporting_method_descriptor when calling EdFiStudentAssessmentStudentObjectiveAssessmentPerformanceLevel., must be smaller than or equal to 306.');
        }

        $this->container['assessment_reporting_method_descriptor'] = $assessment_reporting_method_descriptor;

        return $this;
    }

    /**
     * Gets performance_level_descriptor
     *
     * @return string
     */
    public function getPerformanceLevelDescriptor()
    {
        return $this->container['performance_level_descriptor'];
    }

    /**
     * Sets performance_level_descriptor
     *
     * @param string $performance_level_descriptor A specification of which performance level value describes the student proficiency.
     *
     * @return self
     */
    public function setPerformanceLevelDescriptor($performance_level_descriptor)
    {
        if ((mb_strlen($performance_level_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $performance_level_descriptor when calling EdFiStudentAssessmentStudentObjectiveAssessmentPerformanceLevel., must be smaller than or equal to 306.');
        }

        $this->container['performance_level_descriptor'] = $performance_level_descriptor;

        return $this;
    }

    /**
     * Gets performance_level_indicator_name
     *
     * @return string|null
     */
    public function getPerformanceLevelIndicatorName()
    {
        return $this->container['performance_level_indicator_name'];
    }

    /**
     * Sets performance_level_indicator_name
     *
     * @param string|null $performance_level_indicator_name The name of the indicator being measured for a collection of performance level values.
     *
     * @return self
     */
    public function setPerformanceLevelIndicatorName($performance_level_indicator_name)
    {
        if (!is_null($performance_level_indicator_name) && (mb_strlen($performance_level_indicator_name) > 60)) {
            throw new \InvalidArgumentException('invalid length for $performance_level_indicator_name when calling EdFiStudentAssessmentStudentObjectiveAssessmentPerformanceLevel., must be smaller than or equal to 60.');
        }
        if (!is_null($performance_level_indicator_name) && (mb_strlen($performance_level_indicator_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $performance_level_indicator_name when calling EdFiStudentAssessmentStudentObjectiveAssessmentPerformanceLevel., must be bigger than or equal to 1.');
        }

        $this->container['performance_level_indicator_name'] = $performance_level_indicator_name;

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


