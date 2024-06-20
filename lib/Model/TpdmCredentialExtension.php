<?php
/**
 * TpdmCredentialExtension
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
 * TpdmCredentialExtension Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TpdmCredentialExtension implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'tpdm_credentialExtension';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'certification_route_descriptor' => 'string',
        'credential_status_descriptor' => 'string',
        'educator_role_descriptor' => 'string',
        'board_certification_indicator' => 'bool',
        'certification_title' => 'string',
        'credential_status_date' => '\DateTime',
        'person_reference' => '\OpenAPI\Client\Model\EdFiPersonReference',
        'student_academic_records' => '\OpenAPI\Client\Model\TpdmCredentialStudentAcademicRecord[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'certification_route_descriptor' => null,
        'credential_status_descriptor' => null,
        'educator_role_descriptor' => null,
        'board_certification_indicator' => null,
        'certification_title' => null,
        'credential_status_date' => 'date',
        'person_reference' => null,
        'student_academic_records' => null
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
        'certification_route_descriptor' => 'certificationRouteDescriptor',
        'credential_status_descriptor' => 'credentialStatusDescriptor',
        'educator_role_descriptor' => 'educatorRoleDescriptor',
        'board_certification_indicator' => 'boardCertificationIndicator',
        'certification_title' => 'certificationTitle',
        'credential_status_date' => 'credentialStatusDate',
        'person_reference' => 'personReference',
        'student_academic_records' => 'studentAcademicRecords'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'certification_route_descriptor' => 'setCertificationRouteDescriptor',
        'credential_status_descriptor' => 'setCredentialStatusDescriptor',
        'educator_role_descriptor' => 'setEducatorRoleDescriptor',
        'board_certification_indicator' => 'setBoardCertificationIndicator',
        'certification_title' => 'setCertificationTitle',
        'credential_status_date' => 'setCredentialStatusDate',
        'person_reference' => 'setPersonReference',
        'student_academic_records' => 'setStudentAcademicRecords'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'certification_route_descriptor' => 'getCertificationRouteDescriptor',
        'credential_status_descriptor' => 'getCredentialStatusDescriptor',
        'educator_role_descriptor' => 'getEducatorRoleDescriptor',
        'board_certification_indicator' => 'getBoardCertificationIndicator',
        'certification_title' => 'getCertificationTitle',
        'credential_status_date' => 'getCredentialStatusDate',
        'person_reference' => 'getPersonReference',
        'student_academic_records' => 'getStudentAcademicRecords'
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
        $this->container['certification_route_descriptor'] = $data['certification_route_descriptor'] ?? null;
        $this->container['credential_status_descriptor'] = $data['credential_status_descriptor'] ?? null;
        $this->container['educator_role_descriptor'] = $data['educator_role_descriptor'] ?? null;
        $this->container['board_certification_indicator'] = $data['board_certification_indicator'] ?? null;
        $this->container['certification_title'] = $data['certification_title'] ?? null;
        $this->container['credential_status_date'] = $data['credential_status_date'] ?? null;
        $this->container['person_reference'] = $data['person_reference'] ?? null;
        $this->container['student_academic_records'] = $data['student_academic_records'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['certification_route_descriptor']) && (mb_strlen($this->container['certification_route_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'certification_route_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['credential_status_descriptor']) && (mb_strlen($this->container['credential_status_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'credential_status_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['educator_role_descriptor']) && (mb_strlen($this->container['educator_role_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'educator_role_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['certification_title']) && (mb_strlen($this->container['certification_title']) > 64)) {
            $invalidProperties[] = "invalid value for 'certification_title', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['certification_title']) && (mb_strlen($this->container['certification_title']) < 1)) {
            $invalidProperties[] = "invalid value for 'certification_title', the character length must be bigger than or equal to 1.";
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
     * Gets certification_route_descriptor
     *
     * @return string|null
     */
    public function getCertificationRouteDescriptor()
    {
        return $this->container['certification_route_descriptor'];
    }

    /**
     * Sets certification_route_descriptor
     *
     * @param string|null $certification_route_descriptor The process, program, or pathway used to obtain certification.
     *
     * @return self
     */
    public function setCertificationRouteDescriptor($certification_route_descriptor)
    {
        if (!is_null($certification_route_descriptor) && (mb_strlen($certification_route_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $certification_route_descriptor when calling TpdmCredentialExtension., must be smaller than or equal to 306.');
        }

        $this->container['certification_route_descriptor'] = $certification_route_descriptor;

        return $this;
    }

    /**
     * Gets credential_status_descriptor
     *
     * @return string|null
     */
    public function getCredentialStatusDescriptor()
    {
        return $this->container['credential_status_descriptor'];
    }

    /**
     * Sets credential_status_descriptor
     *
     * @param string|null $credential_status_descriptor The current status of the credential (e.g., active, suspended, etc.).
     *
     * @return self
     */
    public function setCredentialStatusDescriptor($credential_status_descriptor)
    {
        if (!is_null($credential_status_descriptor) && (mb_strlen($credential_status_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $credential_status_descriptor when calling TpdmCredentialExtension., must be smaller than or equal to 306.');
        }

        $this->container['credential_status_descriptor'] = $credential_status_descriptor;

        return $this;
    }

    /**
     * Gets educator_role_descriptor
     *
     * @return string|null
     */
    public function getEducatorRoleDescriptor()
    {
        return $this->container['educator_role_descriptor'];
    }

    /**
     * Sets educator_role_descriptor
     *
     * @param string|null $educator_role_descriptor The specific roles or positions within an organization that the credential is intended to authorize (e.g., Principal, Reading Specialist), typically associated with service and administrative certifications.
     *
     * @return self
     */
    public function setEducatorRoleDescriptor($educator_role_descriptor)
    {
        if (!is_null($educator_role_descriptor) && (mb_strlen($educator_role_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $educator_role_descriptor when calling TpdmCredentialExtension., must be smaller than or equal to 306.');
        }

        $this->container['educator_role_descriptor'] = $educator_role_descriptor;

        return $this;
    }

    /**
     * Gets board_certification_indicator
     *
     * @return bool|null
     */
    public function getBoardCertificationIndicator()
    {
        return $this->container['board_certification_indicator'];
    }

    /**
     * Sets board_certification_indicator
     *
     * @param bool|null $board_certification_indicator Indicator that the credential was granted under the authority of a national Board Certification.
     *
     * @return self
     */
    public function setBoardCertificationIndicator($board_certification_indicator)
    {
        $this->container['board_certification_indicator'] = $board_certification_indicator;

        return $this;
    }

    /**
     * Gets certification_title
     *
     * @return string|null
     */
    public function getCertificationTitle()
    {
        return $this->container['certification_title'];
    }

    /**
     * Sets certification_title
     *
     * @param string|null $certification_title The title of the certification obtained by the educator.
     *
     * @return self
     */
    public function setCertificationTitle($certification_title)
    {
        if (!is_null($certification_title) && (mb_strlen($certification_title) > 64)) {
            throw new \InvalidArgumentException('invalid length for $certification_title when calling TpdmCredentialExtension., must be smaller than or equal to 64.');
        }
        if (!is_null($certification_title) && (mb_strlen($certification_title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $certification_title when calling TpdmCredentialExtension., must be bigger than or equal to 1.');
        }

        $this->container['certification_title'] = $certification_title;

        return $this;
    }

    /**
     * Gets credential_status_date
     *
     * @return \DateTime|null
     */
    public function getCredentialStatusDate()
    {
        return $this->container['credential_status_date'];
    }

    /**
     * Sets credential_status_date
     *
     * @param \DateTime|null $credential_status_date The month, day, and year on which the credential status was effective.
     *
     * @return self
     */
    public function setCredentialStatusDate($credential_status_date)
    {
        $this->container['credential_status_date'] = $credential_status_date;

        return $this;
    }

    /**
     * Gets person_reference
     *
     * @return \OpenAPI\Client\Model\EdFiPersonReference|null
     */
    public function getPersonReference()
    {
        return $this->container['person_reference'];
    }

    /**
     * Sets person_reference
     *
     * @param \OpenAPI\Client\Model\EdFiPersonReference|null $person_reference person_reference
     *
     * @return self
     */
    public function setPersonReference($person_reference)
    {
        $this->container['person_reference'] = $person_reference;

        return $this;
    }

    /**
     * Gets student_academic_records
     *
     * @return \OpenAPI\Client\Model\TpdmCredentialStudentAcademicRecord[]|null
     */
    public function getStudentAcademicRecords()
    {
        return $this->container['student_academic_records'];
    }

    /**
     * Sets student_academic_records
     *
     * @param \OpenAPI\Client\Model\TpdmCredentialStudentAcademicRecord[]|null $student_academic_records An unordered collection of credentialStudentAcademicRecords. Reference to the person's Student Academic Records for the school(s) with which the Credential is associated.
     *
     * @return self
     */
    public function setStudentAcademicRecords($student_academic_records)
    {
        $this->container['student_academic_records'] = $student_academic_records;

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


