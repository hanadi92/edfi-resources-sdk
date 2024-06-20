<?php
/**
 * EdFiFeederSchoolAssociation
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
 * EdFiFeederSchoolAssociation Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiFeederSchoolAssociation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_feederSchoolAssociation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'begin_date' => '\DateTime',
        'feeder_school_reference' => '\OpenAPI\Client\Model\EdFiSchoolReference',
        'school_reference' => '\OpenAPI\Client\Model\EdFiSchoolReference',
        'end_date' => '\DateTime',
        'feeder_relationship_description' => 'string',
        '_etag' => 'string',
        '_last_modified_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'begin_date' => 'date',
        'feeder_school_reference' => null,
        'school_reference' => null,
        'end_date' => 'date',
        'feeder_relationship_description' => null,
        '_etag' => null,
        '_last_modified_date' => 'date-time'
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
        'id' => 'id',
        'begin_date' => 'beginDate',
        'feeder_school_reference' => 'feederSchoolReference',
        'school_reference' => 'schoolReference',
        'end_date' => 'endDate',
        'feeder_relationship_description' => 'feederRelationshipDescription',
        '_etag' => '_etag',
        '_last_modified_date' => '_lastModifiedDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'begin_date' => 'setBeginDate',
        'feeder_school_reference' => 'setFeederSchoolReference',
        'school_reference' => 'setSchoolReference',
        'end_date' => 'setEndDate',
        'feeder_relationship_description' => 'setFeederRelationshipDescription',
        '_etag' => 'setEtag',
        '_last_modified_date' => 'setLastModifiedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'begin_date' => 'getBeginDate',
        'feeder_school_reference' => 'getFeederSchoolReference',
        'school_reference' => 'getSchoolReference',
        'end_date' => 'getEndDate',
        'feeder_relationship_description' => 'getFeederRelationshipDescription',
        '_etag' => 'getEtag',
        '_last_modified_date' => 'getLastModifiedDate'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['begin_date'] = $data['begin_date'] ?? null;
        $this->container['feeder_school_reference'] = $data['feeder_school_reference'] ?? null;
        $this->container['school_reference'] = $data['school_reference'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['feeder_relationship_description'] = $data['feeder_relationship_description'] ?? null;
        $this->container['_etag'] = $data['_etag'] ?? null;
        $this->container['_last_modified_date'] = $data['_last_modified_date'] ?? null;
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
        if ($this->container['feeder_school_reference'] === null) {
            $invalidProperties[] = "'feeder_school_reference' can't be null";
        }
        if ($this->container['school_reference'] === null) {
            $invalidProperties[] = "'school_reference' can't be null";
        }
        if (!is_null($this->container['feeder_relationship_description']) && (mb_strlen($this->container['feeder_relationship_description']) > 1024)) {
            $invalidProperties[] = "invalid value for 'feeder_relationship_description', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['feeder_relationship_description']) && (mb_strlen($this->container['feeder_relationship_description']) < 1)) {
            $invalidProperties[] = "invalid value for 'feeder_relationship_description', the character length must be bigger than or equal to 1.";
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * @param \DateTime $begin_date The month, day, and year of the first day of the feeder school association.
     *
     * @return self
     */
    public function setBeginDate($begin_date)
    {
        $this->container['begin_date'] = $begin_date;

        return $this;
    }

    /**
     * Gets feeder_school_reference
     *
     * @return \OpenAPI\Client\Model\EdFiSchoolReference
     */
    public function getFeederSchoolReference()
    {
        return $this->container['feeder_school_reference'];
    }

    /**
     * Sets feeder_school_reference
     *
     * @param \OpenAPI\Client\Model\EdFiSchoolReference $feeder_school_reference feeder_school_reference
     *
     * @return self
     */
    public function setFeederSchoolReference($feeder_school_reference)
    {
        $this->container['feeder_school_reference'] = $feeder_school_reference;

        return $this;
    }

    /**
     * Gets school_reference
     *
     * @return \OpenAPI\Client\Model\EdFiSchoolReference
     */
    public function getSchoolReference()
    {
        return $this->container['school_reference'];
    }

    /**
     * Sets school_reference
     *
     * @param \OpenAPI\Client\Model\EdFiSchoolReference $school_reference school_reference
     *
     * @return self
     */
    public function setSchoolReference($school_reference)
    {
        $this->container['school_reference'] = $school_reference;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime|null $end_date The month, day, and year of the last day of the feeder school association.
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets feeder_relationship_description
     *
     * @return string|null
     */
    public function getFeederRelationshipDescription()
    {
        return $this->container['feeder_relationship_description'];
    }

    /**
     * Sets feeder_relationship_description
     *
     * @param string|null $feeder_relationship_description Describes the relationship from the feeder school to the receiving school, for example by program emphasis, such as special education, language immersion, science, or performing art.
     *
     * @return self
     */
    public function setFeederRelationshipDescription($feeder_relationship_description)
    {
        if (!is_null($feeder_relationship_description) && (mb_strlen($feeder_relationship_description) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $feeder_relationship_description when calling EdFiFeederSchoolAssociation., must be smaller than or equal to 1024.');
        }
        if (!is_null($feeder_relationship_description) && (mb_strlen($feeder_relationship_description) < 1)) {
            throw new \InvalidArgumentException('invalid length for $feeder_relationship_description when calling EdFiFeederSchoolAssociation., must be bigger than or equal to 1.');
        }

        $this->container['feeder_relationship_description'] = $feeder_relationship_description;

        return $this;
    }

    /**
     * Gets _etag
     *
     * @return string|null
     */
    public function getEtag()
    {
        return $this->container['_etag'];
    }

    /**
     * Sets _etag
     *
     * @param string|null $_etag A unique system-generated value that identifies the version of the resource.
     *
     * @return self
     */
    public function setEtag($_etag)
    {
        $this->container['_etag'] = $_etag;

        return $this;
    }

    /**
     * Gets _last_modified_date
     *
     * @return \DateTime|null
     */
    public function getLastModifiedDate()
    {
        return $this->container['_last_modified_date'];
    }

    /**
     * Sets _last_modified_date
     *
     * @param \DateTime|null $_last_modified_date The date and time the resource was last modified.
     *
     * @return self
     */
    public function setLastModifiedDate($_last_modified_date)
    {
        $this->container['_last_modified_date'] = $_last_modified_date;

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

