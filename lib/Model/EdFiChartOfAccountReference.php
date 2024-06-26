<?php
/**
 * EdFiChartOfAccountReference
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
 * EdFiChartOfAccountReference Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiChartOfAccountReference implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_chartOfAccountReference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_identifier' => 'string',
        'education_organization_id' => 'int',
        'fiscal_year' => 'int',
        'link' => '\OpenAPI\Client\Model\Link'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_identifier' => null,
        'education_organization_id' => 'int64',
        'fiscal_year' => 'int32',
        'link' => null
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
        'account_identifier' => 'accountIdentifier',
        'education_organization_id' => 'educationOrganizationId',
        'fiscal_year' => 'fiscalYear',
        'link' => 'link'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_identifier' => 'setAccountIdentifier',
        'education_organization_id' => 'setEducationOrganizationId',
        'fiscal_year' => 'setFiscalYear',
        'link' => 'setLink'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_identifier' => 'getAccountIdentifier',
        'education_organization_id' => 'getEducationOrganizationId',
        'fiscal_year' => 'getFiscalYear',
        'link' => 'getLink'
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
        $this->container['account_identifier'] = $data['account_identifier'] ?? null;
        $this->container['education_organization_id'] = $data['education_organization_id'] ?? null;
        $this->container['fiscal_year'] = $data['fiscal_year'] ?? null;
        $this->container['link'] = $data['link'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['account_identifier'] === null) {
            $invalidProperties[] = "'account_identifier' can't be null";
        }
        if ((mb_strlen($this->container['account_identifier']) > 50)) {
            $invalidProperties[] = "invalid value for 'account_identifier', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['account_identifier']) < 1)) {
            $invalidProperties[] = "invalid value for 'account_identifier', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['education_organization_id'] === null) {
            $invalidProperties[] = "'education_organization_id' can't be null";
        }
        if ($this->container['fiscal_year'] === null) {
            $invalidProperties[] = "'fiscal_year' can't be null";
        }
        if (($this->container['fiscal_year'] > 2040)) {
            $invalidProperties[] = "invalid value for 'fiscal_year', must be smaller than or equal to 2040.";
        }

        if (($this->container['fiscal_year'] < 2020)) {
            $invalidProperties[] = "invalid value for 'fiscal_year', must be bigger than or equal to 2020.";
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
     * Gets account_identifier
     *
     * @return string
     */
    public function getAccountIdentifier()
    {
        return $this->container['account_identifier'];
    }

    /**
     * Sets account_identifier
     *
     * @param string $account_identifier SEA populated code value for the valid combination of account dimensions under which financials are reported.
     *
     * @return self
     */
    public function setAccountIdentifier($account_identifier)
    {
        if ((mb_strlen($account_identifier) > 50)) {
            throw new \InvalidArgumentException('invalid length for $account_identifier when calling EdFiChartOfAccountReference., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($account_identifier) < 1)) {
            throw new \InvalidArgumentException('invalid length for $account_identifier when calling EdFiChartOfAccountReference., must be bigger than or equal to 1.');
        }

        $this->container['account_identifier'] = $account_identifier;

        return $this;
    }

    /**
     * Gets education_organization_id
     *
     * @return int
     */
    public function getEducationOrganizationId()
    {
        return $this->container['education_organization_id'];
    }

    /**
     * Sets education_organization_id
     *
     * @param int $education_organization_id The identifier assigned to an education organization.
     *
     * @return self
     */
    public function setEducationOrganizationId($education_organization_id)
    {
        $this->container['education_organization_id'] = $education_organization_id;

        return $this;
    }

    /**
     * Gets fiscal_year
     *
     * @return int
     */
    public function getFiscalYear()
    {
        return $this->container['fiscal_year'];
    }

    /**
     * Sets fiscal_year
     *
     * @param int $fiscal_year The fiscal year for the account
     *
     * @return self
     */
    public function setFiscalYear($fiscal_year)
    {

        if (($fiscal_year > 2040)) {
            throw new \InvalidArgumentException('invalid value for $fiscal_year when calling EdFiChartOfAccountReference., must be smaller than or equal to 2040.');
        }
        if (($fiscal_year < 2020)) {
            throw new \InvalidArgumentException('invalid value for $fiscal_year when calling EdFiChartOfAccountReference., must be bigger than or equal to 2020.');
        }

        $this->container['fiscal_year'] = $fiscal_year;

        return $this;
    }

    /**
     * Gets link
     *
     * @return \OpenAPI\Client\Model\Link|null
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param \OpenAPI\Client\Model\Link|null $link link
     *
     * @return self
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

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


