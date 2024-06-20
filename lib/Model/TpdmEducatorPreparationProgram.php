<?php
/**
 * TpdmEducatorPreparationProgram
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
 * TpdmEducatorPreparationProgram Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TpdmEducatorPreparationProgram implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'tpdm_educatorPreparationProgram';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'program_name' => 'string',
        'program_type_descriptor' => 'string',
        'education_organization_reference' => '\OpenAPI\Client\Model\EdFiEducationOrganizationReference',
        'accreditation_status_descriptor' => 'string',
        'grade_levels' => '\OpenAPI\Client\Model\TpdmEducatorPreparationProgramGradeLevel[]',
        'program_id' => 'string',
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
        'program_name' => null,
        'program_type_descriptor' => null,
        'education_organization_reference' => null,
        'accreditation_status_descriptor' => null,
        'grade_levels' => null,
        'program_id' => null,
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
        'program_name' => 'programName',
        'program_type_descriptor' => 'programTypeDescriptor',
        'education_organization_reference' => 'educationOrganizationReference',
        'accreditation_status_descriptor' => 'accreditationStatusDescriptor',
        'grade_levels' => 'gradeLevels',
        'program_id' => 'programId',
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
        'program_name' => 'setProgramName',
        'program_type_descriptor' => 'setProgramTypeDescriptor',
        'education_organization_reference' => 'setEducationOrganizationReference',
        'accreditation_status_descriptor' => 'setAccreditationStatusDescriptor',
        'grade_levels' => 'setGradeLevels',
        'program_id' => 'setProgramId',
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
        'program_name' => 'getProgramName',
        'program_type_descriptor' => 'getProgramTypeDescriptor',
        'education_organization_reference' => 'getEducationOrganizationReference',
        'accreditation_status_descriptor' => 'getAccreditationStatusDescriptor',
        'grade_levels' => 'getGradeLevels',
        'program_id' => 'getProgramId',
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
        $this->container['program_name'] = $data['program_name'] ?? null;
        $this->container['program_type_descriptor'] = $data['program_type_descriptor'] ?? null;
        $this->container['education_organization_reference'] = $data['education_organization_reference'] ?? null;
        $this->container['accreditation_status_descriptor'] = $data['accreditation_status_descriptor'] ?? null;
        $this->container['grade_levels'] = $data['grade_levels'] ?? null;
        $this->container['program_id'] = $data['program_id'] ?? null;
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

        if ($this->container['program_name'] === null) {
            $invalidProperties[] = "'program_name' can't be null";
        }
        if ((mb_strlen($this->container['program_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'program_name', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['program_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'program_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['program_type_descriptor'] === null) {
            $invalidProperties[] = "'program_type_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['program_type_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'program_type_descriptor', the character length must be smaller than or equal to 306.";
        }

        if ($this->container['education_organization_reference'] === null) {
            $invalidProperties[] = "'education_organization_reference' can't be null";
        }
        if (!is_null($this->container['accreditation_status_descriptor']) && (mb_strlen($this->container['accreditation_status_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'accreditation_status_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['program_id']) && (mb_strlen($this->container['program_id']) > 20)) {
            $invalidProperties[] = "invalid value for 'program_id', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['program_id']) && (mb_strlen($this->container['program_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'program_id', the character length must be bigger than or equal to 1.";
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
     * Gets program_name
     *
     * @return string
     */
    public function getProgramName()
    {
        return $this->container['program_name'];
    }

    /**
     * Sets program_name
     *
     * @param string $program_name The name of the Educator Preparation Program.
     *
     * @return self
     */
    public function setProgramName($program_name)
    {
        if ((mb_strlen($program_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $program_name when calling TpdmEducatorPreparationProgram., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($program_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $program_name when calling TpdmEducatorPreparationProgram., must be bigger than or equal to 1.');
        }

        $this->container['program_name'] = $program_name;

        return $this;
    }

    /**
     * Gets program_type_descriptor
     *
     * @return string
     */
    public function getProgramTypeDescriptor()
    {
        return $this->container['program_type_descriptor'];
    }

    /**
     * Sets program_type_descriptor
     *
     * @param string $program_type_descriptor The type of program.
     *
     * @return self
     */
    public function setProgramTypeDescriptor($program_type_descriptor)
    {
        if ((mb_strlen($program_type_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $program_type_descriptor when calling TpdmEducatorPreparationProgram., must be smaller than or equal to 306.');
        }

        $this->container['program_type_descriptor'] = $program_type_descriptor;

        return $this;
    }

    /**
     * Gets education_organization_reference
     *
     * @return \OpenAPI\Client\Model\EdFiEducationOrganizationReference
     */
    public function getEducationOrganizationReference()
    {
        return $this->container['education_organization_reference'];
    }

    /**
     * Sets education_organization_reference
     *
     * @param \OpenAPI\Client\Model\EdFiEducationOrganizationReference $education_organization_reference education_organization_reference
     *
     * @return self
     */
    public function setEducationOrganizationReference($education_organization_reference)
    {
        $this->container['education_organization_reference'] = $education_organization_reference;

        return $this;
    }

    /**
     * Gets accreditation_status_descriptor
     *
     * @return string|null
     */
    public function getAccreditationStatusDescriptor()
    {
        return $this->container['accreditation_status_descriptor'];
    }

    /**
     * Sets accreditation_status_descriptor
     *
     * @param string|null $accreditation_status_descriptor The current accreditation status of the Educator Preparation Program.
     *
     * @return self
     */
    public function setAccreditationStatusDescriptor($accreditation_status_descriptor)
    {
        if (!is_null($accreditation_status_descriptor) && (mb_strlen($accreditation_status_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $accreditation_status_descriptor when calling TpdmEducatorPreparationProgram., must be smaller than or equal to 306.');
        }

        $this->container['accreditation_status_descriptor'] = $accreditation_status_descriptor;

        return $this;
    }

    /**
     * Gets grade_levels
     *
     * @return \OpenAPI\Client\Model\TpdmEducatorPreparationProgramGradeLevel[]|null
     */
    public function getGradeLevels()
    {
        return $this->container['grade_levels'];
    }

    /**
     * Sets grade_levels
     *
     * @param \OpenAPI\Client\Model\TpdmEducatorPreparationProgramGradeLevel[]|null $grade_levels An unordered collection of educatorPreparationProgramGradeLevels. The grade levels served at the EPP Program.
     *
     * @return self
     */
    public function setGradeLevels($grade_levels)
    {
        $this->container['grade_levels'] = $grade_levels;

        return $this;
    }

    /**
     * Gets program_id
     *
     * @return string|null
     */
    public function getProgramId()
    {
        return $this->container['program_id'];
    }

    /**
     * Sets program_id
     *
     * @param string|null $program_id A unique number or alphanumeric code assigned to a program by a school, school system, a state, or other agency or entity.
     *
     * @return self
     */
    public function setProgramId($program_id)
    {
        if (!is_null($program_id) && (mb_strlen($program_id) > 20)) {
            throw new \InvalidArgumentException('invalid length for $program_id when calling TpdmEducatorPreparationProgram., must be smaller than or equal to 20.');
        }
        if (!is_null($program_id) && (mb_strlen($program_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $program_id when calling TpdmEducatorPreparationProgram., must be bigger than or equal to 1.');
        }

        $this->container['program_id'] = $program_id;

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


