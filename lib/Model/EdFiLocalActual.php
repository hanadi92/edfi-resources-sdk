<?php
/**
 * EdFiLocalActual
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
 * EdFiLocalActual Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiLocalActual implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_localActual';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'as_of_date' => '\DateTime',
        'local_account_reference' => '\OpenAPI\Client\Model\EdFiLocalAccountReference',
        'amount' => 'double',
        'financial_collection_descriptor' => 'string',
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
        'as_of_date' => 'date',
        'local_account_reference' => null,
        'amount' => 'double',
        'financial_collection_descriptor' => null,
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
        'as_of_date' => 'asOfDate',
        'local_account_reference' => 'localAccountReference',
        'amount' => 'amount',
        'financial_collection_descriptor' => 'financialCollectionDescriptor',
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
        'as_of_date' => 'setAsOfDate',
        'local_account_reference' => 'setLocalAccountReference',
        'amount' => 'setAmount',
        'financial_collection_descriptor' => 'setFinancialCollectionDescriptor',
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
        'as_of_date' => 'getAsOfDate',
        'local_account_reference' => 'getLocalAccountReference',
        'amount' => 'getAmount',
        'financial_collection_descriptor' => 'getFinancialCollectionDescriptor',
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
        $this->container['as_of_date'] = $data['as_of_date'] ?? null;
        $this->container['local_account_reference'] = $data['local_account_reference'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['financial_collection_descriptor'] = $data['financial_collection_descriptor'] ?? null;
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

        if ($this->container['as_of_date'] === null) {
            $invalidProperties[] = "'as_of_date' can't be null";
        }
        if ($this->container['local_account_reference'] === null) {
            $invalidProperties[] = "'local_account_reference' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (!is_null($this->container['financial_collection_descriptor']) && (mb_strlen($this->container['financial_collection_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'financial_collection_descriptor', the character length must be smaller than or equal to 306.";
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
     * Gets as_of_date
     *
     * @return \DateTime
     */
    public function getAsOfDate()
    {
        return $this->container['as_of_date'];
    }

    /**
     * Sets as_of_date
     *
     * @param \DateTime $as_of_date The date of the reported amount for the account.
     *
     * @return self
     */
    public function setAsOfDate($as_of_date)
    {
        $this->container['as_of_date'] = $as_of_date;

        return $this;
    }

    /**
     * Gets local_account_reference
     *
     * @return \OpenAPI\Client\Model\EdFiLocalAccountReference
     */
    public function getLocalAccountReference()
    {
        return $this->container['local_account_reference'];
    }

    /**
     * Sets local_account_reference
     *
     * @param \OpenAPI\Client\Model\EdFiLocalAccountReference $local_account_reference local_account_reference
     *
     * @return self
     */
    public function setLocalAccountReference($local_account_reference)
    {
        $this->container['local_account_reference'] = $local_account_reference;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount Current balance for the account.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets financial_collection_descriptor
     *
     * @return string|null
     */
    public function getFinancialCollectionDescriptor()
    {
        return $this->container['financial_collection_descriptor'];
    }

    /**
     * Sets financial_collection_descriptor
     *
     * @param string|null $financial_collection_descriptor The accounting period or grouping for which the amount is collected.
     *
     * @return self
     */
    public function setFinancialCollectionDescriptor($financial_collection_descriptor)
    {
        if (!is_null($financial_collection_descriptor) && (mb_strlen($financial_collection_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $financial_collection_descriptor when calling EdFiLocalActual., must be smaller than or equal to 306.');
        }

        $this->container['financial_collection_descriptor'] = $financial_collection_descriptor;

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


