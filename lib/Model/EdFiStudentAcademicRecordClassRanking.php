<?php
/**
 * EdFiStudentAcademicRecordClassRanking
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
 * EdFiStudentAcademicRecordClassRanking Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiStudentAcademicRecordClassRanking implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_studentAcademicRecordClassRanking';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'class_rank' => 'int',
        'class_ranking_date' => '\DateTime',
        'percentage_ranking' => 'int',
        'total_number_in_class' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'class_rank' => 'int32',
        'class_ranking_date' => 'date',
        'percentage_ranking' => 'int32',
        'total_number_in_class' => 'int32'
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
        'class_rank' => 'classRank',
        'class_ranking_date' => 'classRankingDate',
        'percentage_ranking' => 'percentageRanking',
        'total_number_in_class' => 'totalNumberInClass'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'class_rank' => 'setClassRank',
        'class_ranking_date' => 'setClassRankingDate',
        'percentage_ranking' => 'setPercentageRanking',
        'total_number_in_class' => 'setTotalNumberInClass'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'class_rank' => 'getClassRank',
        'class_ranking_date' => 'getClassRankingDate',
        'percentage_ranking' => 'getPercentageRanking',
        'total_number_in_class' => 'getTotalNumberInClass'
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
        $this->container['class_rank'] = $data['class_rank'] ?? null;
        $this->container['class_ranking_date'] = $data['class_ranking_date'] ?? null;
        $this->container['percentage_ranking'] = $data['percentage_ranking'] ?? null;
        $this->container['total_number_in_class'] = $data['total_number_in_class'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['class_rank'] === null) {
            $invalidProperties[] = "'class_rank' can't be null";
        }
        if ($this->container['total_number_in_class'] === null) {
            $invalidProperties[] = "'total_number_in_class' can't be null";
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
     * Gets class_rank
     *
     * @return int
     */
    public function getClassRank()
    {
        return $this->container['class_rank'];
    }

    /**
     * Sets class_rank
     *
     * @param int $class_rank The academic rank of a student in relation to his or her graduating class (e.g., 1st, 2nd, 3rd).
     *
     * @return self
     */
    public function setClassRank($class_rank)
    {
        $this->container['class_rank'] = $class_rank;

        return $this;
    }

    /**
     * Gets class_ranking_date
     *
     * @return \DateTime|null
     */
    public function getClassRankingDate()
    {
        return $this->container['class_ranking_date'];
    }

    /**
     * Sets class_ranking_date
     *
     * @param \DateTime|null $class_ranking_date Date class ranking was determined.
     *
     * @return self
     */
    public function setClassRankingDate($class_ranking_date)
    {
        $this->container['class_ranking_date'] = $class_ranking_date;

        return $this;
    }

    /**
     * Gets percentage_ranking
     *
     * @return int|null
     */
    public function getPercentageRanking()
    {
        return $this->container['percentage_ranking'];
    }

    /**
     * Sets percentage_ranking
     *
     * @param int|null $percentage_ranking The academic percentage rank of a student in relation to his or her graduating class (e.g., 95%, 80%, 50%).
     *
     * @return self
     */
    public function setPercentageRanking($percentage_ranking)
    {
        $this->container['percentage_ranking'] = $percentage_ranking;

        return $this;
    }

    /**
     * Gets total_number_in_class
     *
     * @return int
     */
    public function getTotalNumberInClass()
    {
        return $this->container['total_number_in_class'];
    }

    /**
     * Sets total_number_in_class
     *
     * @param int $total_number_in_class The total number of students in the student's graduating class.
     *
     * @return self
     */
    public function setTotalNumberInClass($total_number_in_class)
    {
        $this->container['total_number_in_class'] = $total_number_in_class;

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


