<?php
/**
 * TrackedChangesEdFiAssessmentScoreRangeLearningStandardKey
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
 * TrackedChangesEdFiAssessmentScoreRangeLearningStandardKey Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TrackedChangesEdFiAssessmentScoreRangeLearningStandardKey implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'trackedChanges_edFi_assessmentScoreRangeLearningStandardKey';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'score_range_id' => 'string',
        'assessment_identifier' => 'string',
        'namespace' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'score_range_id' => null,
        'assessment_identifier' => null,
        'namespace' => null
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
        'score_range_id' => 'scoreRangeId',
        'assessment_identifier' => 'assessmentIdentifier',
        'namespace' => 'namespace'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'score_range_id' => 'setScoreRangeId',
        'assessment_identifier' => 'setAssessmentIdentifier',
        'namespace' => 'setNamespace'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'score_range_id' => 'getScoreRangeId',
        'assessment_identifier' => 'getAssessmentIdentifier',
        'namespace' => 'getNamespace'
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
        $this->container['score_range_id'] = $data['score_range_id'] ?? null;
        $this->container['assessment_identifier'] = $data['assessment_identifier'] ?? null;
        $this->container['namespace'] = $data['namespace'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['score_range_id']) && (mb_strlen($this->container['score_range_id']) > 60)) {
            $invalidProperties[] = "invalid value for 'score_range_id', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['score_range_id']) && (mb_strlen($this->container['score_range_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'score_range_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['assessment_identifier']) && (mb_strlen($this->container['assessment_identifier']) > 60)) {
            $invalidProperties[] = "invalid value for 'assessment_identifier', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['assessment_identifier']) && (mb_strlen($this->container['assessment_identifier']) < 1)) {
            $invalidProperties[] = "invalid value for 'assessment_identifier', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 255)) {
            $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 5)) {
            $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 5.";
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
     * Gets score_range_id
     *
     * @return string|null
     */
    public function getScoreRangeId()
    {
        return $this->container['score_range_id'];
    }

    /**
     * Sets score_range_id
     *
     * @param string|null $score_range_id A unique number or alphanumeric code assigned to the score range associated with one or more learning standards.
     *
     * @return self
     */
    public function setScoreRangeId($score_range_id)
    {
        if (!is_null($score_range_id) && (mb_strlen($score_range_id) > 60)) {
            throw new \InvalidArgumentException('invalid length for $score_range_id when calling TrackedChangesEdFiAssessmentScoreRangeLearningStandardKey., must be smaller than or equal to 60.');
        }
        if (!is_null($score_range_id) && (mb_strlen($score_range_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $score_range_id when calling TrackedChangesEdFiAssessmentScoreRangeLearningStandardKey., must be bigger than or equal to 1.');
        }

        $this->container['score_range_id'] = $score_range_id;

        return $this;
    }

    /**
     * Gets assessment_identifier
     *
     * @return string|null
     */
    public function getAssessmentIdentifier()
    {
        return $this->container['assessment_identifier'];
    }

    /**
     * Sets assessment_identifier
     *
     * @param string|null $assessment_identifier A unique number or alphanumeric code assigned to an assessment.
     *
     * @return self
     */
    public function setAssessmentIdentifier($assessment_identifier)
    {
        if (!is_null($assessment_identifier) && (mb_strlen($assessment_identifier) > 60)) {
            throw new \InvalidArgumentException('invalid length for $assessment_identifier when calling TrackedChangesEdFiAssessmentScoreRangeLearningStandardKey., must be smaller than or equal to 60.');
        }
        if (!is_null($assessment_identifier) && (mb_strlen($assessment_identifier) < 1)) {
            throw new \InvalidArgumentException('invalid length for $assessment_identifier when calling TrackedChangesEdFiAssessmentScoreRangeLearningStandardKey., must be bigger than or equal to 1.');
        }

        $this->container['assessment_identifier'] = $assessment_identifier;

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
     * @param string|null $namespace Namespace for the assessment.
     *
     * @return self
     */
    public function setNamespace($namespace)
    {
        if (!is_null($namespace) && (mb_strlen($namespace) > 255)) {
            throw new \InvalidArgumentException('invalid length for $namespace when calling TrackedChangesEdFiAssessmentScoreRangeLearningStandardKey., must be smaller than or equal to 255.');
        }
        if (!is_null($namespace) && (mb_strlen($namespace) < 5)) {
            throw new \InvalidArgumentException('invalid length for $namespace when calling TrackedChangesEdFiAssessmentScoreRangeLearningStandardKey., must be bigger than or equal to 5.');
        }

        $this->container['namespace'] = $namespace;

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


