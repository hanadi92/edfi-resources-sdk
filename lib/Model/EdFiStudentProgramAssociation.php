<?php
/**
 * EdFiStudentProgramAssociation
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
 * EdFiStudentProgramAssociation Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiStudentProgramAssociation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_studentProgramAssociation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'begin_date' => '\DateTime',
        'education_organization_reference' => '\OpenAPI\Client\Model\EdFiEducationOrganizationReference',
        'program_reference' => '\OpenAPI\Client\Model\EdFiProgramReference',
        'student_reference' => '\OpenAPI\Client\Model\EdFiStudentReference',
        'end_date' => '\DateTime',
        'program_participation_statuses' => '\OpenAPI\Client\Model\EdFiGeneralStudentProgramAssociationProgramParticipationStatus[]',
        'reason_exited_descriptor' => 'string',
        'served_outside_of_regular_session' => 'bool',
        'services' => '\OpenAPI\Client\Model\EdFiStudentProgramAssociationService[]',
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
        'education_organization_reference' => null,
        'program_reference' => null,
        'student_reference' => null,
        'end_date' => 'date',
        'program_participation_statuses' => null,
        'reason_exited_descriptor' => null,
        'served_outside_of_regular_session' => null,
        'services' => null,
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
        'education_organization_reference' => 'educationOrganizationReference',
        'program_reference' => 'programReference',
        'student_reference' => 'studentReference',
        'end_date' => 'endDate',
        'program_participation_statuses' => 'programParticipationStatuses',
        'reason_exited_descriptor' => 'reasonExitedDescriptor',
        'served_outside_of_regular_session' => 'servedOutsideOfRegularSession',
        'services' => 'services',
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
        'education_organization_reference' => 'setEducationOrganizationReference',
        'program_reference' => 'setProgramReference',
        'student_reference' => 'setStudentReference',
        'end_date' => 'setEndDate',
        'program_participation_statuses' => 'setProgramParticipationStatuses',
        'reason_exited_descriptor' => 'setReasonExitedDescriptor',
        'served_outside_of_regular_session' => 'setServedOutsideOfRegularSession',
        'services' => 'setServices',
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
        'education_organization_reference' => 'getEducationOrganizationReference',
        'program_reference' => 'getProgramReference',
        'student_reference' => 'getStudentReference',
        'end_date' => 'getEndDate',
        'program_participation_statuses' => 'getProgramParticipationStatuses',
        'reason_exited_descriptor' => 'getReasonExitedDescriptor',
        'served_outside_of_regular_session' => 'getServedOutsideOfRegularSession',
        'services' => 'getServices',
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
        $this->container['education_organization_reference'] = $data['education_organization_reference'] ?? null;
        $this->container['program_reference'] = $data['program_reference'] ?? null;
        $this->container['student_reference'] = $data['student_reference'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['program_participation_statuses'] = $data['program_participation_statuses'] ?? null;
        $this->container['reason_exited_descriptor'] = $data['reason_exited_descriptor'] ?? null;
        $this->container['served_outside_of_regular_session'] = $data['served_outside_of_regular_session'] ?? null;
        $this->container['services'] = $data['services'] ?? null;
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
        if ($this->container['education_organization_reference'] === null) {
            $invalidProperties[] = "'education_organization_reference' can't be null";
        }
        if ($this->container['program_reference'] === null) {
            $invalidProperties[] = "'program_reference' can't be null";
        }
        if ($this->container['student_reference'] === null) {
            $invalidProperties[] = "'student_reference' can't be null";
        }
        if (!is_null($this->container['reason_exited_descriptor']) && (mb_strlen($this->container['reason_exited_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'reason_exited_descriptor', the character length must be smaller than or equal to 306.";
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
     * @param \DateTime $begin_date The earliest date the student is involved with the program. Typically, this is the date the student becomes eligible for the program.
     *
     * @return self
     */
    public function setBeginDate($begin_date)
    {
        $this->container['begin_date'] = $begin_date;

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
     * Gets program_reference
     *
     * @return \OpenAPI\Client\Model\EdFiProgramReference
     */
    public function getProgramReference()
    {
        return $this->container['program_reference'];
    }

    /**
     * Sets program_reference
     *
     * @param \OpenAPI\Client\Model\EdFiProgramReference $program_reference program_reference
     *
     * @return self
     */
    public function setProgramReference($program_reference)
    {
        $this->container['program_reference'] = $program_reference;

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
     * @param \DateTime|null $end_date The month, day, and year on which the student exited the program or stopped receiving services.
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets program_participation_statuses
     *
     * @return \OpenAPI\Client\Model\EdFiGeneralStudentProgramAssociationProgramParticipationStatus[]|null
     */
    public function getProgramParticipationStatuses()
    {
        return $this->container['program_participation_statuses'];
    }

    /**
     * Sets program_participation_statuses
     *
     * @param \OpenAPI\Client\Model\EdFiGeneralStudentProgramAssociationProgramParticipationStatus[]|null $program_participation_statuses An unordered collection of generalStudentProgramAssociationProgramParticipationStatuses. The status of the student's program participation.
     *
     * @return self
     */
    public function setProgramParticipationStatuses($program_participation_statuses)
    {
        $this->container['program_participation_statuses'] = $program_participation_statuses;

        return $this;
    }

    /**
     * Gets reason_exited_descriptor
     *
     * @return string|null
     */
    public function getReasonExitedDescriptor()
    {
        return $this->container['reason_exited_descriptor'];
    }

    /**
     * Sets reason_exited_descriptor
     *
     * @param string|null $reason_exited_descriptor The reason the student left the program within a school or district.
     *
     * @return self
     */
    public function setReasonExitedDescriptor($reason_exited_descriptor)
    {
        if (!is_null($reason_exited_descriptor) && (mb_strlen($reason_exited_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $reason_exited_descriptor when calling EdFiStudentProgramAssociation., must be smaller than or equal to 306.');
        }

        $this->container['reason_exited_descriptor'] = $reason_exited_descriptor;

        return $this;
    }

    /**
     * Gets served_outside_of_regular_session
     *
     * @return bool|null
     */
    public function getServedOutsideOfRegularSession()
    {
        return $this->container['served_outside_of_regular_session'];
    }

    /**
     * Sets served_outside_of_regular_session
     *
     * @param bool|null $served_outside_of_regular_session Indicates whether the student received services during the summer session or between sessions.
     *
     * @return self
     */
    public function setServedOutsideOfRegularSession($served_outside_of_regular_session)
    {
        $this->container['served_outside_of_regular_session'] = $served_outside_of_regular_session;

        return $this;
    }

    /**
     * Gets services
     *
     * @return \OpenAPI\Client\Model\EdFiStudentProgramAssociationService[]|null
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param \OpenAPI\Client\Model\EdFiStudentProgramAssociationService[]|null $services An unordered collection of studentProgramAssociationServices. Indicates the service(s) being provided to the student by the program.
     *
     * @return self
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

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


