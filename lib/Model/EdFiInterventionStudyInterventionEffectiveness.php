<?php
/**
 * EdFiInterventionStudyInterventionEffectiveness
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
 * EdFiInterventionStudyInterventionEffectiveness Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiInterventionStudyInterventionEffectiveness implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_interventionStudyInterventionEffectiveness';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'diagnosis_descriptor' => 'string',
        'grade_level_descriptor' => 'string',
        'population_served_descriptor' => 'string',
        'intervention_effectiveness_rating_descriptor' => 'string',
        'improvement_index' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'diagnosis_descriptor' => null,
        'grade_level_descriptor' => null,
        'population_served_descriptor' => null,
        'intervention_effectiveness_rating_descriptor' => null,
        'improvement_index' => 'int32'
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
        'diagnosis_descriptor' => 'diagnosisDescriptor',
        'grade_level_descriptor' => 'gradeLevelDescriptor',
        'population_served_descriptor' => 'populationServedDescriptor',
        'intervention_effectiveness_rating_descriptor' => 'interventionEffectivenessRatingDescriptor',
        'improvement_index' => 'improvementIndex'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'diagnosis_descriptor' => 'setDiagnosisDescriptor',
        'grade_level_descriptor' => 'setGradeLevelDescriptor',
        'population_served_descriptor' => 'setPopulationServedDescriptor',
        'intervention_effectiveness_rating_descriptor' => 'setInterventionEffectivenessRatingDescriptor',
        'improvement_index' => 'setImprovementIndex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'diagnosis_descriptor' => 'getDiagnosisDescriptor',
        'grade_level_descriptor' => 'getGradeLevelDescriptor',
        'population_served_descriptor' => 'getPopulationServedDescriptor',
        'intervention_effectiveness_rating_descriptor' => 'getInterventionEffectivenessRatingDescriptor',
        'improvement_index' => 'getImprovementIndex'
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
        $this->container['diagnosis_descriptor'] = $data['diagnosis_descriptor'] ?? null;
        $this->container['grade_level_descriptor'] = $data['grade_level_descriptor'] ?? null;
        $this->container['population_served_descriptor'] = $data['population_served_descriptor'] ?? null;
        $this->container['intervention_effectiveness_rating_descriptor'] = $data['intervention_effectiveness_rating_descriptor'] ?? null;
        $this->container['improvement_index'] = $data['improvement_index'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['diagnosis_descriptor'] === null) {
            $invalidProperties[] = "'diagnosis_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['diagnosis_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'diagnosis_descriptor', the character length must be smaller than or equal to 306.";
        }

        if ($this->container['grade_level_descriptor'] === null) {
            $invalidProperties[] = "'grade_level_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['grade_level_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'grade_level_descriptor', the character length must be smaller than or equal to 306.";
        }

        if ($this->container['population_served_descriptor'] === null) {
            $invalidProperties[] = "'population_served_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['population_served_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'population_served_descriptor', the character length must be smaller than or equal to 306.";
        }

        if ($this->container['intervention_effectiveness_rating_descriptor'] === null) {
            $invalidProperties[] = "'intervention_effectiveness_rating_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['intervention_effectiveness_rating_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'intervention_effectiveness_rating_descriptor', the character length must be smaller than or equal to 306.";
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
     * Gets diagnosis_descriptor
     *
     * @return string
     */
    public function getDiagnosisDescriptor()
    {
        return $this->container['diagnosis_descriptor'];
    }

    /**
     * Sets diagnosis_descriptor
     *
     * @param string $diagnosis_descriptor Targeted purpose of the intervention (e.g., attendance issue, dropout risk) for which the effectiveness is measured.
     *
     * @return self
     */
    public function setDiagnosisDescriptor($diagnosis_descriptor)
    {
        if ((mb_strlen($diagnosis_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $diagnosis_descriptor when calling EdFiInterventionStudyInterventionEffectiveness., must be smaller than or equal to 306.');
        }

        $this->container['diagnosis_descriptor'] = $diagnosis_descriptor;

        return $this;
    }

    /**
     * Gets grade_level_descriptor
     *
     * @return string
     */
    public function getGradeLevelDescriptor()
    {
        return $this->container['grade_level_descriptor'];
    }

    /**
     * Sets grade_level_descriptor
     *
     * @param string $grade_level_descriptor Grade level for which effectiveness is measured.
     *
     * @return self
     */
    public function setGradeLevelDescriptor($grade_level_descriptor)
    {
        if ((mb_strlen($grade_level_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $grade_level_descriptor when calling EdFiInterventionStudyInterventionEffectiveness., must be smaller than or equal to 306.');
        }

        $this->container['grade_level_descriptor'] = $grade_level_descriptor;

        return $this;
    }

    /**
     * Gets population_served_descriptor
     *
     * @return string
     */
    public function getPopulationServedDescriptor()
    {
        return $this->container['population_served_descriptor'];
    }

    /**
     * Sets population_served_descriptor
     *
     * @param string $population_served_descriptor Population for which effectiveness is measured.
     *
     * @return self
     */
    public function setPopulationServedDescriptor($population_served_descriptor)
    {
        if ((mb_strlen($population_served_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $population_served_descriptor when calling EdFiInterventionStudyInterventionEffectiveness., must be smaller than or equal to 306.');
        }

        $this->container['population_served_descriptor'] = $population_served_descriptor;

        return $this;
    }

    /**
     * Gets intervention_effectiveness_rating_descriptor
     *
     * @return string
     */
    public function getInterventionEffectivenessRatingDescriptor()
    {
        return $this->container['intervention_effectiveness_rating_descriptor'];
    }

    /**
     * Sets intervention_effectiveness_rating_descriptor
     *
     * @param string $intervention_effectiveness_rating_descriptor An intervention demonstrates effectiveness if the research has shown that the program caused an improvement in outcomes. Values: positive effects, potentially positive effects, mixed effects, potentially negative effects, negative effects, and no discernible effects.
     *
     * @return self
     */
    public function setInterventionEffectivenessRatingDescriptor($intervention_effectiveness_rating_descriptor)
    {
        if ((mb_strlen($intervention_effectiveness_rating_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $intervention_effectiveness_rating_descriptor when calling EdFiInterventionStudyInterventionEffectiveness., must be smaller than or equal to 306.');
        }

        $this->container['intervention_effectiveness_rating_descriptor'] = $intervention_effectiveness_rating_descriptor;

        return $this;
    }

    /**
     * Gets improvement_index
     *
     * @return int|null
     */
    public function getImprovementIndex()
    {
        return $this->container['improvement_index'];
    }

    /**
     * Sets improvement_index
     *
     * @param int|null $improvement_index Along a percentile distribution of students, the improvement index represents the change in an average student's percentile rank that is considered to be due to the intervention.
     *
     * @return self
     */
    public function setImprovementIndex($improvement_index)
    {
        $this->container['improvement_index'] = $improvement_index;

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


