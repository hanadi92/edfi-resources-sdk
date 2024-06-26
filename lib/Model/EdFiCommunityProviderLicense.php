<?php
/**
 * EdFiCommunityProviderLicense
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
 * EdFiCommunityProviderLicense Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiCommunityProviderLicense implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_communityProviderLicense';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'license_identifier' => 'string',
        'licensing_organization' => 'string',
        'community_provider_reference' => '\OpenAPI\Client\Model\EdFiCommunityProviderReference',
        'authorized_facility_capacity' => 'int',
        'license_effective_date' => '\DateTime',
        'license_expiration_date' => '\DateTime',
        'license_issue_date' => '\DateTime',
        'license_status_descriptor' => 'string',
        'license_type_descriptor' => 'string',
        'oldest_age_authorized_to_serve' => 'int',
        'youngest_age_authorized_to_serve' => 'int',
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
        'license_identifier' => null,
        'licensing_organization' => null,
        'community_provider_reference' => null,
        'authorized_facility_capacity' => 'int32',
        'license_effective_date' => 'date',
        'license_expiration_date' => 'date',
        'license_issue_date' => 'date',
        'license_status_descriptor' => null,
        'license_type_descriptor' => null,
        'oldest_age_authorized_to_serve' => 'int32',
        'youngest_age_authorized_to_serve' => 'int32',
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
        'license_identifier' => 'licenseIdentifier',
        'licensing_organization' => 'licensingOrganization',
        'community_provider_reference' => 'communityProviderReference',
        'authorized_facility_capacity' => 'authorizedFacilityCapacity',
        'license_effective_date' => 'licenseEffectiveDate',
        'license_expiration_date' => 'licenseExpirationDate',
        'license_issue_date' => 'licenseIssueDate',
        'license_status_descriptor' => 'licenseStatusDescriptor',
        'license_type_descriptor' => 'licenseTypeDescriptor',
        'oldest_age_authorized_to_serve' => 'oldestAgeAuthorizedToServe',
        'youngest_age_authorized_to_serve' => 'youngestAgeAuthorizedToServe',
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
        'license_identifier' => 'setLicenseIdentifier',
        'licensing_organization' => 'setLicensingOrganization',
        'community_provider_reference' => 'setCommunityProviderReference',
        'authorized_facility_capacity' => 'setAuthorizedFacilityCapacity',
        'license_effective_date' => 'setLicenseEffectiveDate',
        'license_expiration_date' => 'setLicenseExpirationDate',
        'license_issue_date' => 'setLicenseIssueDate',
        'license_status_descriptor' => 'setLicenseStatusDescriptor',
        'license_type_descriptor' => 'setLicenseTypeDescriptor',
        'oldest_age_authorized_to_serve' => 'setOldestAgeAuthorizedToServe',
        'youngest_age_authorized_to_serve' => 'setYoungestAgeAuthorizedToServe',
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
        'license_identifier' => 'getLicenseIdentifier',
        'licensing_organization' => 'getLicensingOrganization',
        'community_provider_reference' => 'getCommunityProviderReference',
        'authorized_facility_capacity' => 'getAuthorizedFacilityCapacity',
        'license_effective_date' => 'getLicenseEffectiveDate',
        'license_expiration_date' => 'getLicenseExpirationDate',
        'license_issue_date' => 'getLicenseIssueDate',
        'license_status_descriptor' => 'getLicenseStatusDescriptor',
        'license_type_descriptor' => 'getLicenseTypeDescriptor',
        'oldest_age_authorized_to_serve' => 'getOldestAgeAuthorizedToServe',
        'youngest_age_authorized_to_serve' => 'getYoungestAgeAuthorizedToServe',
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
        $this->container['license_identifier'] = $data['license_identifier'] ?? null;
        $this->container['licensing_organization'] = $data['licensing_organization'] ?? null;
        $this->container['community_provider_reference'] = $data['community_provider_reference'] ?? null;
        $this->container['authorized_facility_capacity'] = $data['authorized_facility_capacity'] ?? null;
        $this->container['license_effective_date'] = $data['license_effective_date'] ?? null;
        $this->container['license_expiration_date'] = $data['license_expiration_date'] ?? null;
        $this->container['license_issue_date'] = $data['license_issue_date'] ?? null;
        $this->container['license_status_descriptor'] = $data['license_status_descriptor'] ?? null;
        $this->container['license_type_descriptor'] = $data['license_type_descriptor'] ?? null;
        $this->container['oldest_age_authorized_to_serve'] = $data['oldest_age_authorized_to_serve'] ?? null;
        $this->container['youngest_age_authorized_to_serve'] = $data['youngest_age_authorized_to_serve'] ?? null;
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

        if ($this->container['license_identifier'] === null) {
            $invalidProperties[] = "'license_identifier' can't be null";
        }
        if ((mb_strlen($this->container['license_identifier']) > 36)) {
            $invalidProperties[] = "invalid value for 'license_identifier', the character length must be smaller than or equal to 36.";
        }

        if ($this->container['licensing_organization'] === null) {
            $invalidProperties[] = "'licensing_organization' can't be null";
        }
        if ((mb_strlen($this->container['licensing_organization']) > 75)) {
            $invalidProperties[] = "invalid value for 'licensing_organization', the character length must be smaller than or equal to 75.";
        }

        if ((mb_strlen($this->container['licensing_organization']) < 1)) {
            $invalidProperties[] = "invalid value for 'licensing_organization', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['community_provider_reference'] === null) {
            $invalidProperties[] = "'community_provider_reference' can't be null";
        }
        if ($this->container['license_effective_date'] === null) {
            $invalidProperties[] = "'license_effective_date' can't be null";
        }
        if (!is_null($this->container['license_status_descriptor']) && (mb_strlen($this->container['license_status_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'license_status_descriptor', the character length must be smaller than or equal to 306.";
        }

        if ($this->container['license_type_descriptor'] === null) {
            $invalidProperties[] = "'license_type_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['license_type_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'license_type_descriptor', the character length must be smaller than or equal to 306.";
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
     * Gets license_identifier
     *
     * @return string
     */
    public function getLicenseIdentifier()
    {
        return $this->container['license_identifier'];
    }

    /**
     * Sets license_identifier
     *
     * @param string $license_identifier The unique identifier issued by the licensing organization.
     *
     * @return self
     */
    public function setLicenseIdentifier($license_identifier)
    {
        if ((mb_strlen($license_identifier) > 36)) {
            throw new \InvalidArgumentException('invalid length for $license_identifier when calling EdFiCommunityProviderLicense., must be smaller than or equal to 36.');
        }

        $this->container['license_identifier'] = $license_identifier;

        return $this;
    }

    /**
     * Gets licensing_organization
     *
     * @return string
     */
    public function getLicensingOrganization()
    {
        return $this->container['licensing_organization'];
    }

    /**
     * Sets licensing_organization
     *
     * @param string $licensing_organization The organization issuing the license.
     *
     * @return self
     */
    public function setLicensingOrganization($licensing_organization)
    {
        if ((mb_strlen($licensing_organization) > 75)) {
            throw new \InvalidArgumentException('invalid length for $licensing_organization when calling EdFiCommunityProviderLicense., must be smaller than or equal to 75.');
        }
        if ((mb_strlen($licensing_organization) < 1)) {
            throw new \InvalidArgumentException('invalid length for $licensing_organization when calling EdFiCommunityProviderLicense., must be bigger than or equal to 1.');
        }

        $this->container['licensing_organization'] = $licensing_organization;

        return $this;
    }

    /**
     * Gets community_provider_reference
     *
     * @return \OpenAPI\Client\Model\EdFiCommunityProviderReference
     */
    public function getCommunityProviderReference()
    {
        return $this->container['community_provider_reference'];
    }

    /**
     * Sets community_provider_reference
     *
     * @param \OpenAPI\Client\Model\EdFiCommunityProviderReference $community_provider_reference community_provider_reference
     *
     * @return self
     */
    public function setCommunityProviderReference($community_provider_reference)
    {
        $this->container['community_provider_reference'] = $community_provider_reference;

        return $this;
    }

    /**
     * Gets authorized_facility_capacity
     *
     * @return int|null
     */
    public function getAuthorizedFacilityCapacity()
    {
        return $this->container['authorized_facility_capacity'];
    }

    /**
     * Sets authorized_facility_capacity
     *
     * @param int|null $authorized_facility_capacity The maximum number that can be contained or accommodated which a provider is authorized or licensed to serve.
     *
     * @return self
     */
    public function setAuthorizedFacilityCapacity($authorized_facility_capacity)
    {
        $this->container['authorized_facility_capacity'] = $authorized_facility_capacity;

        return $this;
    }

    /**
     * Gets license_effective_date
     *
     * @return \DateTime
     */
    public function getLicenseEffectiveDate()
    {
        return $this->container['license_effective_date'];
    }

    /**
     * Sets license_effective_date
     *
     * @param \DateTime $license_effective_date The month, day, and year on which a license is active or becomes effective.
     *
     * @return self
     */
    public function setLicenseEffectiveDate($license_effective_date)
    {
        $this->container['license_effective_date'] = $license_effective_date;

        return $this;
    }

    /**
     * Gets license_expiration_date
     *
     * @return \DateTime|null
     */
    public function getLicenseExpirationDate()
    {
        return $this->container['license_expiration_date'];
    }

    /**
     * Sets license_expiration_date
     *
     * @param \DateTime|null $license_expiration_date The month, day, and year on which a license will expire.
     *
     * @return self
     */
    public function setLicenseExpirationDate($license_expiration_date)
    {
        $this->container['license_expiration_date'] = $license_expiration_date;

        return $this;
    }

    /**
     * Gets license_issue_date
     *
     * @return \DateTime|null
     */
    public function getLicenseIssueDate()
    {
        return $this->container['license_issue_date'];
    }

    /**
     * Sets license_issue_date
     *
     * @param \DateTime|null $license_issue_date The month, day, and year on which an active license was issued.
     *
     * @return self
     */
    public function setLicenseIssueDate($license_issue_date)
    {
        $this->container['license_issue_date'] = $license_issue_date;

        return $this;
    }

    /**
     * Gets license_status_descriptor
     *
     * @return string|null
     */
    public function getLicenseStatusDescriptor()
    {
        return $this->container['license_status_descriptor'];
    }

    /**
     * Sets license_status_descriptor
     *
     * @param string|null $license_status_descriptor An indication of the status of the license.
     *
     * @return self
     */
    public function setLicenseStatusDescriptor($license_status_descriptor)
    {
        if (!is_null($license_status_descriptor) && (mb_strlen($license_status_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $license_status_descriptor when calling EdFiCommunityProviderLicense., must be smaller than or equal to 306.');
        }

        $this->container['license_status_descriptor'] = $license_status_descriptor;

        return $this;
    }

    /**
     * Gets license_type_descriptor
     *
     * @return string
     */
    public function getLicenseTypeDescriptor()
    {
        return $this->container['license_type_descriptor'];
    }

    /**
     * Sets license_type_descriptor
     *
     * @param string $license_type_descriptor An indication of the category of the license.
     *
     * @return self
     */
    public function setLicenseTypeDescriptor($license_type_descriptor)
    {
        if ((mb_strlen($license_type_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $license_type_descriptor when calling EdFiCommunityProviderLicense., must be smaller than or equal to 306.');
        }

        $this->container['license_type_descriptor'] = $license_type_descriptor;

        return $this;
    }

    /**
     * Gets oldest_age_authorized_to_serve
     *
     * @return int|null
     */
    public function getOldestAgeAuthorizedToServe()
    {
        return $this->container['oldest_age_authorized_to_serve'];
    }

    /**
     * Sets oldest_age_authorized_to_serve
     *
     * @param int|null $oldest_age_authorized_to_serve The oldest age of children a provider is authorized or licensed to serve.
     *
     * @return self
     */
    public function setOldestAgeAuthorizedToServe($oldest_age_authorized_to_serve)
    {
        $this->container['oldest_age_authorized_to_serve'] = $oldest_age_authorized_to_serve;

        return $this;
    }

    /**
     * Gets youngest_age_authorized_to_serve
     *
     * @return int|null
     */
    public function getYoungestAgeAuthorizedToServe()
    {
        return $this->container['youngest_age_authorized_to_serve'];
    }

    /**
     * Sets youngest_age_authorized_to_serve
     *
     * @param int|null $youngest_age_authorized_to_serve The youngest age of children a provider is authorized or licensed to serve.
     *
     * @return self
     */
    public function setYoungestAgeAuthorizedToServe($youngest_age_authorized_to_serve)
    {
        $this->container['youngest_age_authorized_to_serve'] = $youngest_age_authorized_to_serve;

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


