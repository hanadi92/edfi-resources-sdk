<?php
/**
 * TrackedChangesEdFiSurveyResponseEducationOrganizationTargetAssociationKey
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
 * TrackedChangesEdFiSurveyResponseEducationOrganizationTargetAssociationKey Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TrackedChangesEdFiSurveyResponseEducationOrganizationTargetAssociationKey implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'trackedChanges_edFi_surveyResponseEducationOrganizationTargetAssociationKey';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'education_organization_id' => 'int',
        'namespace' => 'string',
        'survey_identifier' => 'string',
        'survey_response_identifier' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'education_organization_id' => 'int64',
        'namespace' => null,
        'survey_identifier' => null,
        'survey_response_identifier' => null
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
        'education_organization_id' => 'educationOrganizationId',
        'namespace' => 'namespace',
        'survey_identifier' => 'surveyIdentifier',
        'survey_response_identifier' => 'surveyResponseIdentifier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'education_organization_id' => 'setEducationOrganizationId',
        'namespace' => 'setNamespace',
        'survey_identifier' => 'setSurveyIdentifier',
        'survey_response_identifier' => 'setSurveyResponseIdentifier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'education_organization_id' => 'getEducationOrganizationId',
        'namespace' => 'getNamespace',
        'survey_identifier' => 'getSurveyIdentifier',
        'survey_response_identifier' => 'getSurveyResponseIdentifier'
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
        $this->container['education_organization_id'] = $data['education_organization_id'] ?? null;
        $this->container['namespace'] = $data['namespace'] ?? null;
        $this->container['survey_identifier'] = $data['survey_identifier'] ?? null;
        $this->container['survey_response_identifier'] = $data['survey_response_identifier'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 255)) {
            $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 5)) {
            $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 5.";
        }

        if (!is_null($this->container['survey_identifier']) && (mb_strlen($this->container['survey_identifier']) > 60)) {
            $invalidProperties[] = "invalid value for 'survey_identifier', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['survey_identifier']) && (mb_strlen($this->container['survey_identifier']) < 1)) {
            $invalidProperties[] = "invalid value for 'survey_identifier', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['survey_response_identifier']) && (mb_strlen($this->container['survey_response_identifier']) > 60)) {
            $invalidProperties[] = "invalid value for 'survey_response_identifier', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['survey_response_identifier']) && (mb_strlen($this->container['survey_response_identifier']) < 1)) {
            $invalidProperties[] = "invalid value for 'survey_response_identifier', the character length must be bigger than or equal to 1.";
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
     * @param string|null $namespace Namespace for the survey.
     *
     * @return self
     */
    public function setNamespace($namespace)
    {
        if (!is_null($namespace) && (mb_strlen($namespace) > 255)) {
            throw new \InvalidArgumentException('invalid length for $namespace when calling TrackedChangesEdFiSurveyResponseEducationOrganizationTargetAssociationKey., must be smaller than or equal to 255.');
        }
        if (!is_null($namespace) && (mb_strlen($namespace) < 5)) {
            throw new \InvalidArgumentException('invalid length for $namespace when calling TrackedChangesEdFiSurveyResponseEducationOrganizationTargetAssociationKey., must be bigger than or equal to 5.');
        }

        $this->container['namespace'] = $namespace;

        return $this;
    }

    /**
     * Gets survey_identifier
     *
     * @return string|null
     */
    public function getSurveyIdentifier()
    {
        return $this->container['survey_identifier'];
    }

    /**
     * Sets survey_identifier
     *
     * @param string|null $survey_identifier The unique survey identifier from the survey tool.
     *
     * @return self
     */
    public function setSurveyIdentifier($survey_identifier)
    {
        if (!is_null($survey_identifier) && (mb_strlen($survey_identifier) > 60)) {
            throw new \InvalidArgumentException('invalid length for $survey_identifier when calling TrackedChangesEdFiSurveyResponseEducationOrganizationTargetAssociationKey., must be smaller than or equal to 60.');
        }
        if (!is_null($survey_identifier) && (mb_strlen($survey_identifier) < 1)) {
            throw new \InvalidArgumentException('invalid length for $survey_identifier when calling TrackedChangesEdFiSurveyResponseEducationOrganizationTargetAssociationKey., must be bigger than or equal to 1.');
        }

        $this->container['survey_identifier'] = $survey_identifier;

        return $this;
    }

    /**
     * Gets survey_response_identifier
     *
     * @return string|null
     */
    public function getSurveyResponseIdentifier()
    {
        return $this->container['survey_response_identifier'];
    }

    /**
     * Sets survey_response_identifier
     *
     * @param string|null $survey_response_identifier The identifier of the survey typically from the survey application.
     *
     * @return self
     */
    public function setSurveyResponseIdentifier($survey_response_identifier)
    {
        if (!is_null($survey_response_identifier) && (mb_strlen($survey_response_identifier) > 60)) {
            throw new \InvalidArgumentException('invalid length for $survey_response_identifier when calling TrackedChangesEdFiSurveyResponseEducationOrganizationTargetAssociationKey., must be smaller than or equal to 60.');
        }
        if (!is_null($survey_response_identifier) && (mb_strlen($survey_response_identifier) < 1)) {
            throw new \InvalidArgumentException('invalid length for $survey_response_identifier when calling TrackedChangesEdFiSurveyResponseEducationOrganizationTargetAssociationKey., must be bigger than or equal to 1.');
        }

        $this->container['survey_response_identifier'] = $survey_response_identifier;

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


