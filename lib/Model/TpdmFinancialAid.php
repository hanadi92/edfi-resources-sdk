<?php
/**
 * TpdmFinancialAid
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
 * TpdmFinancialAid Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TpdmFinancialAid implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'tpdm_financialAid';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'aid_type_descriptor' => 'string',
        'begin_date' => '\DateTime',
        'student_reference' => '\OpenAPI\Client\Model\EdFiStudentReference',
        'aid_amount' => 'double',
        'aid_condition_description' => 'string',
        'end_date' => '\DateTime',
        'pell_grant_recipient' => 'bool',
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
        'aid_type_descriptor' => null,
        'begin_date' => 'date',
        'student_reference' => null,
        'aid_amount' => 'double',
        'aid_condition_description' => null,
        'end_date' => 'date',
        'pell_grant_recipient' => null,
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
        'aid_type_descriptor' => 'aidTypeDescriptor',
        'begin_date' => 'beginDate',
        'student_reference' => 'studentReference',
        'aid_amount' => 'aidAmount',
        'aid_condition_description' => 'aidConditionDescription',
        'end_date' => 'endDate',
        'pell_grant_recipient' => 'pellGrantRecipient',
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
        'aid_type_descriptor' => 'setAidTypeDescriptor',
        'begin_date' => 'setBeginDate',
        'student_reference' => 'setStudentReference',
        'aid_amount' => 'setAidAmount',
        'aid_condition_description' => 'setAidConditionDescription',
        'end_date' => 'setEndDate',
        'pell_grant_recipient' => 'setPellGrantRecipient',
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
        'aid_type_descriptor' => 'getAidTypeDescriptor',
        'begin_date' => 'getBeginDate',
        'student_reference' => 'getStudentReference',
        'aid_amount' => 'getAidAmount',
        'aid_condition_description' => 'getAidConditionDescription',
        'end_date' => 'getEndDate',
        'pell_grant_recipient' => 'getPellGrantRecipient',
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
        $this->container['aid_type_descriptor'] = $data['aid_type_descriptor'] ?? null;
        $this->container['begin_date'] = $data['begin_date'] ?? null;
        $this->container['student_reference'] = $data['student_reference'] ?? null;
        $this->container['aid_amount'] = $data['aid_amount'] ?? null;
        $this->container['aid_condition_description'] = $data['aid_condition_description'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['pell_grant_recipient'] = $data['pell_grant_recipient'] ?? null;
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

        if ($this->container['aid_type_descriptor'] === null) {
            $invalidProperties[] = "'aid_type_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['aid_type_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'aid_type_descriptor', the character length must be smaller than or equal to 306.";
        }

        if ($this->container['begin_date'] === null) {
            $invalidProperties[] = "'begin_date' can't be null";
        }
        if ($this->container['student_reference'] === null) {
            $invalidProperties[] = "'student_reference' can't be null";
        }
        if (!is_null($this->container['aid_condition_description']) && (mb_strlen($this->container['aid_condition_description']) > 1024)) {
            $invalidProperties[] = "invalid value for 'aid_condition_description', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['aid_condition_description']) && (mb_strlen($this->container['aid_condition_description']) < 1)) {
            $invalidProperties[] = "invalid value for 'aid_condition_description', the character length must be bigger than or equal to 1.";
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
     * Gets aid_type_descriptor
     *
     * @return string
     */
    public function getAidTypeDescriptor()
    {
        return $this->container['aid_type_descriptor'];
    }

    /**
     * Sets aid_type_descriptor
     *
     * @param string $aid_type_descriptor The classification of financial aid awarded to a person for the academic term/year.
     *
     * @return self
     */
    public function setAidTypeDescriptor($aid_type_descriptor)
    {
        if ((mb_strlen($aid_type_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $aid_type_descriptor when calling TpdmFinancialAid., must be smaller than or equal to 306.');
        }

        $this->container['aid_type_descriptor'] = $aid_type_descriptor;

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
     * @param \DateTime $begin_date The date the award was designated.
     *
     * @return self
     */
    public function setBeginDate($begin_date)
    {
        $this->container['begin_date'] = $begin_date;

        return $this;
    }

    /**
     * Gets student_reference
     *
     * @return \OpenAPI\Client\Model\EdFiStudentReference
     */
    public function getStudentReference()
    {
        return $this->container['student_reference'];
    }

    /**
     * Sets student_reference
     *
     * @param \OpenAPI\Client\Model\EdFiStudentReference $student_reference student_reference
     *
     * @return self
     */
    public function setStudentReference($student_reference)
    {
        $this->container['student_reference'] = $student_reference;

        return $this;
    }

    /**
     * Gets aid_amount
     *
     * @return double|null
     */
    public function getAidAmount()
    {
        return $this->container['aid_amount'];
    }

    /**
     * Sets aid_amount
     *
     * @param double|null $aid_amount The amount of financial aid awarded to a person for the term/year.
     *
     * @return self
     */
    public function setAidAmount($aid_amount)
    {
        $this->container['aid_amount'] = $aid_amount;

        return $this;
    }

    /**
     * Gets aid_condition_description
     *
     * @return string|null
     */
    public function getAidConditionDescription()
    {
        return $this->container['aid_condition_description'];
    }

    /**
     * Sets aid_condition_description
     *
     * @param string|null $aid_condition_description The description of the condition (e.g., placement in a high need school) under which the aid was given.
     *
     * @return self
     */
    public function setAidConditionDescription($aid_condition_description)
    {
        if (!is_null($aid_condition_description) && (mb_strlen($aid_condition_description) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $aid_condition_description when calling TpdmFinancialAid., must be smaller than or equal to 1024.');
        }
        if (!is_null($aid_condition_description) && (mb_strlen($aid_condition_description) < 1)) {
            throw new \InvalidArgumentException('invalid length for $aid_condition_description when calling TpdmFinancialAid., must be bigger than or equal to 1.');
        }

        $this->container['aid_condition_description'] = $aid_condition_description;

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
     * @param \DateTime|null $end_date The date the award was removed.
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets pell_grant_recipient
     *
     * @return bool|null
     */
    public function getPellGrantRecipient()
    {
        return $this->container['pell_grant_recipient'];
    }

    /**
     * Sets pell_grant_recipient
     *
     * @param bool|null $pell_grant_recipient Indicates a person who receives Pell Grant aid.
     *
     * @return self
     */
    public function setPellGrantRecipient($pell_grant_recipient)
    {
        $this->container['pell_grant_recipient'] = $pell_grant_recipient;

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


