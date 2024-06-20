<?php
/**
 * EdFiCommunityOrganization
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
 * EdFiCommunityOrganization Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiCommunityOrganization implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_communityOrganization';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'categories' => '\OpenAPI\Client\Model\EdFiEducationOrganizationCategory[]',
        'community_organization_id' => 'int',
        'addresses' => '\OpenAPI\Client\Model\EdFiEducationOrganizationAddress[]',
        'identification_codes' => '\OpenAPI\Client\Model\EdFiEducationOrganizationIdentificationCode[]',
        'indicators' => '\OpenAPI\Client\Model\EdFiEducationOrganizationIndicator[]',
        'institution_telephones' => '\OpenAPI\Client\Model\EdFiEducationOrganizationInstitutionTelephone[]',
        'international_addresses' => '\OpenAPI\Client\Model\EdFiEducationOrganizationInternationalAddress[]',
        'name_of_institution' => 'string',
        'operational_status_descriptor' => 'string',
        'short_name_of_institution' => 'string',
        'web_site' => 'string',
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
        'categories' => null,
        'community_organization_id' => 'int64',
        'addresses' => null,
        'identification_codes' => null,
        'indicators' => null,
        'institution_telephones' => null,
        'international_addresses' => null,
        'name_of_institution' => null,
        'operational_status_descriptor' => null,
        'short_name_of_institution' => null,
        'web_site' => null,
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
        'categories' => 'categories',
        'community_organization_id' => 'communityOrganizationId',
        'addresses' => 'addresses',
        'identification_codes' => 'identificationCodes',
        'indicators' => 'indicators',
        'institution_telephones' => 'institutionTelephones',
        'international_addresses' => 'internationalAddresses',
        'name_of_institution' => 'nameOfInstitution',
        'operational_status_descriptor' => 'operationalStatusDescriptor',
        'short_name_of_institution' => 'shortNameOfInstitution',
        'web_site' => 'webSite',
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
        'categories' => 'setCategories',
        'community_organization_id' => 'setCommunityOrganizationId',
        'addresses' => 'setAddresses',
        'identification_codes' => 'setIdentificationCodes',
        'indicators' => 'setIndicators',
        'institution_telephones' => 'setInstitutionTelephones',
        'international_addresses' => 'setInternationalAddresses',
        'name_of_institution' => 'setNameOfInstitution',
        'operational_status_descriptor' => 'setOperationalStatusDescriptor',
        'short_name_of_institution' => 'setShortNameOfInstitution',
        'web_site' => 'setWebSite',
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
        'categories' => 'getCategories',
        'community_organization_id' => 'getCommunityOrganizationId',
        'addresses' => 'getAddresses',
        'identification_codes' => 'getIdentificationCodes',
        'indicators' => 'getIndicators',
        'institution_telephones' => 'getInstitutionTelephones',
        'international_addresses' => 'getInternationalAddresses',
        'name_of_institution' => 'getNameOfInstitution',
        'operational_status_descriptor' => 'getOperationalStatusDescriptor',
        'short_name_of_institution' => 'getShortNameOfInstitution',
        'web_site' => 'getWebSite',
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
        $this->container['categories'] = $data['categories'] ?? null;
        $this->container['community_organization_id'] = $data['community_organization_id'] ?? null;
        $this->container['addresses'] = $data['addresses'] ?? null;
        $this->container['identification_codes'] = $data['identification_codes'] ?? null;
        $this->container['indicators'] = $data['indicators'] ?? null;
        $this->container['institution_telephones'] = $data['institution_telephones'] ?? null;
        $this->container['international_addresses'] = $data['international_addresses'] ?? null;
        $this->container['name_of_institution'] = $data['name_of_institution'] ?? null;
        $this->container['operational_status_descriptor'] = $data['operational_status_descriptor'] ?? null;
        $this->container['short_name_of_institution'] = $data['short_name_of_institution'] ?? null;
        $this->container['web_site'] = $data['web_site'] ?? null;
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

        if ($this->container['categories'] === null) {
            $invalidProperties[] = "'categories' can't be null";
        }
        if ($this->container['community_organization_id'] === null) {
            $invalidProperties[] = "'community_organization_id' can't be null";
        }
        if ($this->container['name_of_institution'] === null) {
            $invalidProperties[] = "'name_of_institution' can't be null";
        }
        if ((mb_strlen($this->container['name_of_institution']) > 75)) {
            $invalidProperties[] = "invalid value for 'name_of_institution', the character length must be smaller than or equal to 75.";
        }

        if ((mb_strlen($this->container['name_of_institution']) < 1)) {
            $invalidProperties[] = "invalid value for 'name_of_institution', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['operational_status_descriptor']) && (mb_strlen($this->container['operational_status_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'operational_status_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['short_name_of_institution']) && (mb_strlen($this->container['short_name_of_institution']) > 75)) {
            $invalidProperties[] = "invalid value for 'short_name_of_institution', the character length must be smaller than or equal to 75.";
        }

        if (!is_null($this->container['short_name_of_institution']) && (mb_strlen($this->container['short_name_of_institution']) < 1)) {
            $invalidProperties[] = "invalid value for 'short_name_of_institution', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['web_site']) && (mb_strlen($this->container['web_site']) > 255)) {
            $invalidProperties[] = "invalid value for 'web_site', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['web_site']) && (mb_strlen($this->container['web_site']) < 5)) {
            $invalidProperties[] = "invalid value for 'web_site', the character length must be bigger than or equal to 5.";
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
     * Gets categories
     *
     * @return \OpenAPI\Client\Model\EdFiEducationOrganizationCategory[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \OpenAPI\Client\Model\EdFiEducationOrganizationCategory[] $categories An unordered collection of educationOrganizationCategories. The classification of the education agency within the geographic boundaries of a state according to the level of administrative and operational control granted by the state.
     *
     * @return self
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets community_organization_id
     *
     * @return int
     */
    public function getCommunityOrganizationId()
    {
        return $this->container['community_organization_id'];
    }

    /**
     * Sets community_organization_id
     *
     * @param int $community_organization_id The identifier assigned to a community organization.
     *
     * @return self
     */
    public function setCommunityOrganizationId($community_organization_id)
    {
        $this->container['community_organization_id'] = $community_organization_id;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \OpenAPI\Client\Model\EdFiEducationOrganizationAddress[]|null
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \OpenAPI\Client\Model\EdFiEducationOrganizationAddress[]|null $addresses An unordered collection of educationOrganizationAddresses. The set of elements that describes an address for the education entity, including the street address, city, state, ZIP code, and ZIP code + 4.
     *
     * @return self
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets identification_codes
     *
     * @return \OpenAPI\Client\Model\EdFiEducationOrganizationIdentificationCode[]|null
     */
    public function getIdentificationCodes()
    {
        return $this->container['identification_codes'];
    }

    /**
     * Sets identification_codes
     *
     * @param \OpenAPI\Client\Model\EdFiEducationOrganizationIdentificationCode[]|null $identification_codes An unordered collection of educationOrganizationIdentificationCodes. A unique number or alphanumeric code assigned to an education organization by a school, school system, a state, or other agency or entity.
     *
     * @return self
     */
    public function setIdentificationCodes($identification_codes)
    {
        $this->container['identification_codes'] = $identification_codes;

        return $this;
    }

    /**
     * Gets indicators
     *
     * @return \OpenAPI\Client\Model\EdFiEducationOrganizationIndicator[]|null
     */
    public function getIndicators()
    {
        return $this->container['indicators'];
    }

    /**
     * Sets indicators
     *
     * @param \OpenAPI\Client\Model\EdFiEducationOrganizationIndicator[]|null $indicators An unordered collection of educationOrganizationIndicators. An indicator or metric of an education organization.
     *
     * @return self
     */
    public function setIndicators($indicators)
    {
        $this->container['indicators'] = $indicators;

        return $this;
    }

    /**
     * Gets institution_telephones
     *
     * @return \OpenAPI\Client\Model\EdFiEducationOrganizationInstitutionTelephone[]|null
     */
    public function getInstitutionTelephones()
    {
        return $this->container['institution_telephones'];
    }

    /**
     * Sets institution_telephones
     *
     * @param \OpenAPI\Client\Model\EdFiEducationOrganizationInstitutionTelephone[]|null $institution_telephones An unordered collection of educationOrganizationInstitutionTelephones. The 10-digit telephone number, including the area code, for the education entity.
     *
     * @return self
     */
    public function setInstitutionTelephones($institution_telephones)
    {
        $this->container['institution_telephones'] = $institution_telephones;

        return $this;
    }

    /**
     * Gets international_addresses
     *
     * @return \OpenAPI\Client\Model\EdFiEducationOrganizationInternationalAddress[]|null
     */
    public function getInternationalAddresses()
    {
        return $this->container['international_addresses'];
    }

    /**
     * Sets international_addresses
     *
     * @param \OpenAPI\Client\Model\EdFiEducationOrganizationInternationalAddress[]|null $international_addresses An unordered collection of educationOrganizationInternationalAddresses. The set of elements that describes the international physical location of the education entity.
     *
     * @return self
     */
    public function setInternationalAddresses($international_addresses)
    {
        $this->container['international_addresses'] = $international_addresses;

        return $this;
    }

    /**
     * Gets name_of_institution
     *
     * @return string
     */
    public function getNameOfInstitution()
    {
        return $this->container['name_of_institution'];
    }

    /**
     * Sets name_of_institution
     *
     * @param string $name_of_institution The full, legally accepted name of the institution.
     *
     * @return self
     */
    public function setNameOfInstitution($name_of_institution)
    {
        if ((mb_strlen($name_of_institution) > 75)) {
            throw new \InvalidArgumentException('invalid length for $name_of_institution when calling EdFiCommunityOrganization., must be smaller than or equal to 75.');
        }
        if ((mb_strlen($name_of_institution) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name_of_institution when calling EdFiCommunityOrganization., must be bigger than or equal to 1.');
        }

        $this->container['name_of_institution'] = $name_of_institution;

        return $this;
    }

    /**
     * Gets operational_status_descriptor
     *
     * @return string|null
     */
    public function getOperationalStatusDescriptor()
    {
        return $this->container['operational_status_descriptor'];
    }

    /**
     * Sets operational_status_descriptor
     *
     * @param string|null $operational_status_descriptor The current operational status of the education organization (e.g., active, inactive).
     *
     * @return self
     */
    public function setOperationalStatusDescriptor($operational_status_descriptor)
    {
        if (!is_null($operational_status_descriptor) && (mb_strlen($operational_status_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $operational_status_descriptor when calling EdFiCommunityOrganization., must be smaller than or equal to 306.');
        }

        $this->container['operational_status_descriptor'] = $operational_status_descriptor;

        return $this;
    }

    /**
     * Gets short_name_of_institution
     *
     * @return string|null
     */
    public function getShortNameOfInstitution()
    {
        return $this->container['short_name_of_institution'];
    }

    /**
     * Sets short_name_of_institution
     *
     * @param string|null $short_name_of_institution A short name for the institution.
     *
     * @return self
     */
    public function setShortNameOfInstitution($short_name_of_institution)
    {
        if (!is_null($short_name_of_institution) && (mb_strlen($short_name_of_institution) > 75)) {
            throw new \InvalidArgumentException('invalid length for $short_name_of_institution when calling EdFiCommunityOrganization., must be smaller than or equal to 75.');
        }
        if (!is_null($short_name_of_institution) && (mb_strlen($short_name_of_institution) < 1)) {
            throw new \InvalidArgumentException('invalid length for $short_name_of_institution when calling EdFiCommunityOrganization., must be bigger than or equal to 1.');
        }

        $this->container['short_name_of_institution'] = $short_name_of_institution;

        return $this;
    }

    /**
     * Gets web_site
     *
     * @return string|null
     */
    public function getWebSite()
    {
        return $this->container['web_site'];
    }

    /**
     * Sets web_site
     *
     * @param string|null $web_site The public web site address (URL) for the education organization.
     *
     * @return self
     */
    public function setWebSite($web_site)
    {
        if (!is_null($web_site) && (mb_strlen($web_site) > 255)) {
            throw new \InvalidArgumentException('invalid length for $web_site when calling EdFiCommunityOrganization., must be smaller than or equal to 255.');
        }
        if (!is_null($web_site) && (mb_strlen($web_site) < 5)) {
            throw new \InvalidArgumentException('invalid length for $web_site when calling EdFiCommunityOrganization., must be bigger than or equal to 5.');
        }

        $this->container['web_site'] = $web_site;

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


