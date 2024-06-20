<?php
/**
 * EdFiSurveyQuestionReference
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
 * EdFiSurveyQuestionReference Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiSurveyQuestionReference implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_surveyQuestionReference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'namespace' => 'string',
        'question_code' => 'string',
        'survey_identifier' => 'string',
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
        'namespace' => null,
        'question_code' => null,
        'survey_identifier' => null,
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
        'namespace' => 'namespace',
        'question_code' => 'questionCode',
        'survey_identifier' => 'surveyIdentifier',
        'link' => 'link'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'namespace' => 'setNamespace',
        'question_code' => 'setQuestionCode',
        'survey_identifier' => 'setSurveyIdentifier',
        'link' => 'setLink'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'namespace' => 'getNamespace',
        'question_code' => 'getQuestionCode',
        'survey_identifier' => 'getSurveyIdentifier',
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
        $this->container['namespace'] = $data['namespace'] ?? null;
        $this->container['question_code'] = $data['question_code'] ?? null;
        $this->container['survey_identifier'] = $data['survey_identifier'] ?? null;
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

        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
        if ((mb_strlen($this->container['namespace']) > 255)) {
            $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['namespace']) < 5)) {
            $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 5.";
        }

        if ($this->container['question_code'] === null) {
            $invalidProperties[] = "'question_code' can't be null";
        }
        if ((mb_strlen($this->container['question_code']) > 60)) {
            $invalidProperties[] = "invalid value for 'question_code', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['question_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'question_code', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['survey_identifier'] === null) {
            $invalidProperties[] = "'survey_identifier' can't be null";
        }
        if ((mb_strlen($this->container['survey_identifier']) > 60)) {
            $invalidProperties[] = "invalid value for 'survey_identifier', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['survey_identifier']) < 1)) {
            $invalidProperties[] = "invalid value for 'survey_identifier', the character length must be bigger than or equal to 1.";
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
     * Gets namespace
     *
     * @return string
     */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
     * Sets namespace
     *
     * @param string $namespace Namespace for the survey.
     *
     * @return self
     */
    public function setNamespace($namespace)
    {
        if ((mb_strlen($namespace) > 255)) {
            throw new \InvalidArgumentException('invalid length for $namespace when calling EdFiSurveyQuestionReference., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($namespace) < 5)) {
            throw new \InvalidArgumentException('invalid length for $namespace when calling EdFiSurveyQuestionReference., must be bigger than or equal to 5.');
        }

        $this->container['namespace'] = $namespace;

        return $this;
    }

    /**
     * Gets question_code
     *
     * @return string
     */
    public function getQuestionCode()
    {
        return $this->container['question_code'];
    }

    /**
     * Sets question_code
     *
     * @param string $question_code The identifying code for the question, unique for the survey.
     *
     * @return self
     */
    public function setQuestionCode($question_code)
    {
        if ((mb_strlen($question_code) > 60)) {
            throw new \InvalidArgumentException('invalid length for $question_code when calling EdFiSurveyQuestionReference., must be smaller than or equal to 60.');
        }
        if ((mb_strlen($question_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $question_code when calling EdFiSurveyQuestionReference., must be bigger than or equal to 1.');
        }

        $this->container['question_code'] = $question_code;

        return $this;
    }

    /**
     * Gets survey_identifier
     *
     * @return string
     */
    public function getSurveyIdentifier()
    {
        return $this->container['survey_identifier'];
    }

    /**
     * Sets survey_identifier
     *
     * @param string $survey_identifier The unique survey identifier from the survey tool.
     *
     * @return self
     */
    public function setSurveyIdentifier($survey_identifier)
    {
        if ((mb_strlen($survey_identifier) > 60)) {
            throw new \InvalidArgumentException('invalid length for $survey_identifier when calling EdFiSurveyQuestionReference., must be smaller than or equal to 60.');
        }
        if ((mb_strlen($survey_identifier) < 1)) {
            throw new \InvalidArgumentException('invalid length for $survey_identifier when calling EdFiSurveyQuestionReference., must be bigger than or equal to 1.');
        }

        $this->container['survey_identifier'] = $survey_identifier;

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


