<?php
/**
 * EdFiStudentEducationOrganizationAssociationElectronicMail
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
 * EdFiStudentEducationOrganizationAssociationElectronicMail Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiStudentEducationOrganizationAssociationElectronicMail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_studentEducationOrganizationAssociationElectronicMail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'electronic_mail_type_descriptor' => 'string',
        'electronic_mail_address' => 'string',
        'do_not_publish_indicator' => 'bool',
        'primary_email_address_indicator' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'electronic_mail_type_descriptor' => null,
        'electronic_mail_address' => null,
        'do_not_publish_indicator' => null,
        'primary_email_address_indicator' => null
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
        'electronic_mail_type_descriptor' => 'electronicMailTypeDescriptor',
        'electronic_mail_address' => 'electronicMailAddress',
        'do_not_publish_indicator' => 'doNotPublishIndicator',
        'primary_email_address_indicator' => 'primaryEmailAddressIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'electronic_mail_type_descriptor' => 'setElectronicMailTypeDescriptor',
        'electronic_mail_address' => 'setElectronicMailAddress',
        'do_not_publish_indicator' => 'setDoNotPublishIndicator',
        'primary_email_address_indicator' => 'setPrimaryEmailAddressIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'electronic_mail_type_descriptor' => 'getElectronicMailTypeDescriptor',
        'electronic_mail_address' => 'getElectronicMailAddress',
        'do_not_publish_indicator' => 'getDoNotPublishIndicator',
        'primary_email_address_indicator' => 'getPrimaryEmailAddressIndicator'
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
        $this->container['electronic_mail_type_descriptor'] = $data['electronic_mail_type_descriptor'] ?? null;
        $this->container['electronic_mail_address'] = $data['electronic_mail_address'] ?? null;
        $this->container['do_not_publish_indicator'] = $data['do_not_publish_indicator'] ?? null;
        $this->container['primary_email_address_indicator'] = $data['primary_email_address_indicator'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['electronic_mail_type_descriptor'] === null) {
            $invalidProperties[] = "'electronic_mail_type_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['electronic_mail_type_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'electronic_mail_type_descriptor', the character length must be smaller than or equal to 306.";
        }

        if ($this->container['electronic_mail_address'] === null) {
            $invalidProperties[] = "'electronic_mail_address' can't be null";
        }
        if ((mb_strlen($this->container['electronic_mail_address']) > 128)) {
            $invalidProperties[] = "invalid value for 'electronic_mail_address', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['electronic_mail_address']) < 7)) {
            $invalidProperties[] = "invalid value for 'electronic_mail_address', the character length must be bigger than or equal to 7.";
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
     * Gets electronic_mail_type_descriptor
     *
     * @return string
     */
    public function getElectronicMailTypeDescriptor()
    {
        return $this->container['electronic_mail_type_descriptor'];
    }

    /**
     * Sets electronic_mail_type_descriptor
     *
     * @param string $electronic_mail_type_descriptor The type of email listed for an individual or organization. For example: Home/Personal, Work, etc.)
     *
     * @return self
     */
    public function setElectronicMailTypeDescriptor($electronic_mail_type_descriptor)
    {
        if ((mb_strlen($electronic_mail_type_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $electronic_mail_type_descriptor when calling EdFiStudentEducationOrganizationAssociationElectronicMail., must be smaller than or equal to 306.');
        }

        $this->container['electronic_mail_type_descriptor'] = $electronic_mail_type_descriptor;

        return $this;
    }

    /**
     * Gets electronic_mail_address
     *
     * @return string
     */
    public function getElectronicMailAddress()
    {
        return $this->container['electronic_mail_address'];
    }

    /**
     * Sets electronic_mail_address
     *
     * @param string $electronic_mail_address The electronic mail (e-mail) address listed for an individual or organization.
     *
     * @return self
     */
    public function setElectronicMailAddress($electronic_mail_address)
    {
        if ((mb_strlen($electronic_mail_address) > 128)) {
            throw new \InvalidArgumentException('invalid length for $electronic_mail_address when calling EdFiStudentEducationOrganizationAssociationElectronicMail., must be smaller than or equal to 128.');
        }
        if ((mb_strlen($electronic_mail_address) < 7)) {
            throw new \InvalidArgumentException('invalid length for $electronic_mail_address when calling EdFiStudentEducationOrganizationAssociationElectronicMail., must be bigger than or equal to 7.');
        }

        $this->container['electronic_mail_address'] = $electronic_mail_address;

        return $this;
    }

    /**
     * Gets do_not_publish_indicator
     *
     * @return bool|null
     */
    public function getDoNotPublishIndicator()
    {
        return $this->container['do_not_publish_indicator'];
    }

    /**
     * Sets do_not_publish_indicator
     *
     * @param bool|null $do_not_publish_indicator An indication that the electronic email address should not be published.
     *
     * @return self
     */
    public function setDoNotPublishIndicator($do_not_publish_indicator)
    {
        $this->container['do_not_publish_indicator'] = $do_not_publish_indicator;

        return $this;
    }

    /**
     * Gets primary_email_address_indicator
     *
     * @return bool|null
     */
    public function getPrimaryEmailAddressIndicator()
    {
        return $this->container['primary_email_address_indicator'];
    }

    /**
     * Sets primary_email_address_indicator
     *
     * @param bool|null $primary_email_address_indicator An indication that the electronic mail address should be used as the principal electronic mail address for an individual or organization.
     *
     * @return self
     */
    public function setPrimaryEmailAddressIndicator($primary_email_address_indicator)
    {
        $this->container['primary_email_address_indicator'] = $primary_email_address_indicator;

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


