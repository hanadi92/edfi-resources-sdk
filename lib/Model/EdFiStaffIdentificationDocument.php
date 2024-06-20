<?php
/**
 * EdFiStaffIdentificationDocument
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
 * EdFiStaffIdentificationDocument Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiStaffIdentificationDocument implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_staffIdentificationDocument';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'identification_document_use_descriptor' => 'string',
        'personal_information_verification_descriptor' => 'string',
        'issuer_country_descriptor' => 'string',
        'document_expiration_date' => '\DateTime',
        'document_title' => 'string',
        'issuer_document_identification_code' => 'string',
        'issuer_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'identification_document_use_descriptor' => null,
        'personal_information_verification_descriptor' => null,
        'issuer_country_descriptor' => null,
        'document_expiration_date' => 'date',
        'document_title' => null,
        'issuer_document_identification_code' => null,
        'issuer_name' => null
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
        'identification_document_use_descriptor' => 'identificationDocumentUseDescriptor',
        'personal_information_verification_descriptor' => 'personalInformationVerificationDescriptor',
        'issuer_country_descriptor' => 'issuerCountryDescriptor',
        'document_expiration_date' => 'documentExpirationDate',
        'document_title' => 'documentTitle',
        'issuer_document_identification_code' => 'issuerDocumentIdentificationCode',
        'issuer_name' => 'issuerName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identification_document_use_descriptor' => 'setIdentificationDocumentUseDescriptor',
        'personal_information_verification_descriptor' => 'setPersonalInformationVerificationDescriptor',
        'issuer_country_descriptor' => 'setIssuerCountryDescriptor',
        'document_expiration_date' => 'setDocumentExpirationDate',
        'document_title' => 'setDocumentTitle',
        'issuer_document_identification_code' => 'setIssuerDocumentIdentificationCode',
        'issuer_name' => 'setIssuerName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identification_document_use_descriptor' => 'getIdentificationDocumentUseDescriptor',
        'personal_information_verification_descriptor' => 'getPersonalInformationVerificationDescriptor',
        'issuer_country_descriptor' => 'getIssuerCountryDescriptor',
        'document_expiration_date' => 'getDocumentExpirationDate',
        'document_title' => 'getDocumentTitle',
        'issuer_document_identification_code' => 'getIssuerDocumentIdentificationCode',
        'issuer_name' => 'getIssuerName'
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
        $this->container['identification_document_use_descriptor'] = $data['identification_document_use_descriptor'] ?? null;
        $this->container['personal_information_verification_descriptor'] = $data['personal_information_verification_descriptor'] ?? null;
        $this->container['issuer_country_descriptor'] = $data['issuer_country_descriptor'] ?? null;
        $this->container['document_expiration_date'] = $data['document_expiration_date'] ?? null;
        $this->container['document_title'] = $data['document_title'] ?? null;
        $this->container['issuer_document_identification_code'] = $data['issuer_document_identification_code'] ?? null;
        $this->container['issuer_name'] = $data['issuer_name'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['identification_document_use_descriptor'] === null) {
            $invalidProperties[] = "'identification_document_use_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['identification_document_use_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'identification_document_use_descriptor', the character length must be smaller than or equal to 306.";
        }

        if ($this->container['personal_information_verification_descriptor'] === null) {
            $invalidProperties[] = "'personal_information_verification_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['personal_information_verification_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'personal_information_verification_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['issuer_country_descriptor']) && (mb_strlen($this->container['issuer_country_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'issuer_country_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['document_title']) && (mb_strlen($this->container['document_title']) > 60)) {
            $invalidProperties[] = "invalid value for 'document_title', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['document_title']) && (mb_strlen($this->container['document_title']) < 1)) {
            $invalidProperties[] = "invalid value for 'document_title', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['issuer_document_identification_code']) && (mb_strlen($this->container['issuer_document_identification_code']) > 60)) {
            $invalidProperties[] = "invalid value for 'issuer_document_identification_code', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['issuer_document_identification_code']) && (mb_strlen($this->container['issuer_document_identification_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'issuer_document_identification_code', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['issuer_name']) && (mb_strlen($this->container['issuer_name']) > 150)) {
            $invalidProperties[] = "invalid value for 'issuer_name', the character length must be smaller than or equal to 150.";
        }

        if (!is_null($this->container['issuer_name']) && (mb_strlen($this->container['issuer_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'issuer_name', the character length must be bigger than or equal to 1.";
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
     * Gets identification_document_use_descriptor
     *
     * @return string
     */
    public function getIdentificationDocumentUseDescriptor()
    {
        return $this->container['identification_document_use_descriptor'];
    }

    /**
     * Sets identification_document_use_descriptor
     *
     * @param string $identification_document_use_descriptor The primary function of the document used for establishing identity.
     *
     * @return self
     */
    public function setIdentificationDocumentUseDescriptor($identification_document_use_descriptor)
    {
        if ((mb_strlen($identification_document_use_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $identification_document_use_descriptor when calling EdFiStaffIdentificationDocument., must be smaller than or equal to 306.');
        }

        $this->container['identification_document_use_descriptor'] = $identification_document_use_descriptor;

        return $this;
    }

    /**
     * Gets personal_information_verification_descriptor
     *
     * @return string
     */
    public function getPersonalInformationVerificationDescriptor()
    {
        return $this->container['personal_information_verification_descriptor'];
    }

    /**
     * Sets personal_information_verification_descriptor
     *
     * @param string $personal_information_verification_descriptor The category of the document relative to its purpose.
     *
     * @return self
     */
    public function setPersonalInformationVerificationDescriptor($personal_information_verification_descriptor)
    {
        if ((mb_strlen($personal_information_verification_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $personal_information_verification_descriptor when calling EdFiStaffIdentificationDocument., must be smaller than or equal to 306.');
        }

        $this->container['personal_information_verification_descriptor'] = $personal_information_verification_descriptor;

        return $this;
    }

    /**
     * Gets issuer_country_descriptor
     *
     * @return string|null
     */
    public function getIssuerCountryDescriptor()
    {
        return $this->container['issuer_country_descriptor'];
    }

    /**
     * Sets issuer_country_descriptor
     *
     * @param string|null $issuer_country_descriptor Country of origin of the document. It is strongly recommended that entries use only ISO 3166 2-letter country codes.
     *
     * @return self
     */
    public function setIssuerCountryDescriptor($issuer_country_descriptor)
    {
        if (!is_null($issuer_country_descriptor) && (mb_strlen($issuer_country_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $issuer_country_descriptor when calling EdFiStaffIdentificationDocument., must be smaller than or equal to 306.');
        }

        $this->container['issuer_country_descriptor'] = $issuer_country_descriptor;

        return $this;
    }

    /**
     * Gets document_expiration_date
     *
     * @return \DateTime|null
     */
    public function getDocumentExpirationDate()
    {
        return $this->container['document_expiration_date'];
    }

    /**
     * Sets document_expiration_date
     *
     * @param \DateTime|null $document_expiration_date The day when the document  expires, if null then never expires.
     *
     * @return self
     */
    public function setDocumentExpirationDate($document_expiration_date)
    {
        $this->container['document_expiration_date'] = $document_expiration_date;

        return $this;
    }

    /**
     * Gets document_title
     *
     * @return string|null
     */
    public function getDocumentTitle()
    {
        return $this->container['document_title'];
    }

    /**
     * Sets document_title
     *
     * @param string|null $document_title The title of the document given by the issuer.
     *
     * @return self
     */
    public function setDocumentTitle($document_title)
    {
        if (!is_null($document_title) && (mb_strlen($document_title) > 60)) {
            throw new \InvalidArgumentException('invalid length for $document_title when calling EdFiStaffIdentificationDocument., must be smaller than or equal to 60.');
        }
        if (!is_null($document_title) && (mb_strlen($document_title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $document_title when calling EdFiStaffIdentificationDocument., must be bigger than or equal to 1.');
        }

        $this->container['document_title'] = $document_title;

        return $this;
    }

    /**
     * Gets issuer_document_identification_code
     *
     * @return string|null
     */
    public function getIssuerDocumentIdentificationCode()
    {
        return $this->container['issuer_document_identification_code'];
    }

    /**
     * Sets issuer_document_identification_code
     *
     * @param string|null $issuer_document_identification_code The unique identifier on the issuer's identification system.
     *
     * @return self
     */
    public function setIssuerDocumentIdentificationCode($issuer_document_identification_code)
    {
        if (!is_null($issuer_document_identification_code) && (mb_strlen($issuer_document_identification_code) > 60)) {
            throw new \InvalidArgumentException('invalid length for $issuer_document_identification_code when calling EdFiStaffIdentificationDocument., must be smaller than or equal to 60.');
        }
        if (!is_null($issuer_document_identification_code) && (mb_strlen($issuer_document_identification_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $issuer_document_identification_code when calling EdFiStaffIdentificationDocument., must be bigger than or equal to 1.');
        }

        $this->container['issuer_document_identification_code'] = $issuer_document_identification_code;

        return $this;
    }

    /**
     * Gets issuer_name
     *
     * @return string|null
     */
    public function getIssuerName()
    {
        return $this->container['issuer_name'];
    }

    /**
     * Sets issuer_name
     *
     * @param string|null $issuer_name Name of the entity or institution that issued the document.
     *
     * @return self
     */
    public function setIssuerName($issuer_name)
    {
        if (!is_null($issuer_name) && (mb_strlen($issuer_name) > 150)) {
            throw new \InvalidArgumentException('invalid length for $issuer_name when calling EdFiStaffIdentificationDocument., must be smaller than or equal to 150.');
        }
        if (!is_null($issuer_name) && (mb_strlen($issuer_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $issuer_name when calling EdFiStaffIdentificationDocument., must be bigger than or equal to 1.');
        }

        $this->container['issuer_name'] = $issuer_name;

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


