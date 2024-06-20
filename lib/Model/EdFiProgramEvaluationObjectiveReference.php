<?php
/**
 * EdFiProgramEvaluationObjectiveReference
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
 * EdFiProgramEvaluationObjectiveReference Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiProgramEvaluationObjectiveReference implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_programEvaluationObjectiveReference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'program_education_organization_id' => 'int',
        'program_evaluation_objective_title' => 'string',
        'program_evaluation_period_descriptor' => 'string',
        'program_evaluation_title' => 'string',
        'program_evaluation_type_descriptor' => 'string',
        'program_name' => 'string',
        'program_type_descriptor' => 'string',
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
        'program_education_organization_id' => 'int64',
        'program_evaluation_objective_title' => null,
        'program_evaluation_period_descriptor' => null,
        'program_evaluation_title' => null,
        'program_evaluation_type_descriptor' => null,
        'program_name' => null,
        'program_type_descriptor' => null,
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
        'program_education_organization_id' => 'programEducationOrganizationId',
        'program_evaluation_objective_title' => 'programEvaluationObjectiveTitle',
        'program_evaluation_period_descriptor' => 'programEvaluationPeriodDescriptor',
        'program_evaluation_title' => 'programEvaluationTitle',
        'program_evaluation_type_descriptor' => 'programEvaluationTypeDescriptor',
        'program_name' => 'programName',
        'program_type_descriptor' => 'programTypeDescriptor',
        'link' => 'link'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'program_education_organization_id' => 'setProgramEducationOrganizationId',
        'program_evaluation_objective_title' => 'setProgramEvaluationObjectiveTitle',
        'program_evaluation_period_descriptor' => 'setProgramEvaluationPeriodDescriptor',
        'program_evaluation_title' => 'setProgramEvaluationTitle',
        'program_evaluation_type_descriptor' => 'setProgramEvaluationTypeDescriptor',
        'program_name' => 'setProgramName',
        'program_type_descriptor' => 'setProgramTypeDescriptor',
        'link' => 'setLink'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'program_education_organization_id' => 'getProgramEducationOrganizationId',
        'program_evaluation_objective_title' => 'getProgramEvaluationObjectiveTitle',
        'program_evaluation_period_descriptor' => 'getProgramEvaluationPeriodDescriptor',
        'program_evaluation_title' => 'getProgramEvaluationTitle',
        'program_evaluation_type_descriptor' => 'getProgramEvaluationTypeDescriptor',
        'program_name' => 'getProgramName',
        'program_type_descriptor' => 'getProgramTypeDescriptor',
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
        $this->container['program_education_organization_id'] = $data['program_education_organization_id'] ?? null;
        $this->container['program_evaluation_objective_title'] = $data['program_evaluation_objective_title'] ?? null;
        $this->container['program_evaluation_period_descriptor'] = $data['program_evaluation_period_descriptor'] ?? null;
        $this->container['program_evaluation_title'] = $data['program_evaluation_title'] ?? null;
        $this->container['program_evaluation_type_descriptor'] = $data['program_evaluation_type_descriptor'] ?? null;
        $this->container['program_name'] = $data['program_name'] ?? null;
        $this->container['program_type_descriptor'] = $data['program_type_descriptor'] ?? null;
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

        if ($this->container['program_education_organization_id'] === null) {
            $invalidProperties[] = "'program_education_organization_id' can't be null";
        }
        if ($this->container['program_evaluation_objective_title'] === null) {
            $invalidProperties[] = "'program_evaluation_objective_title' can't be null";
        }
        if ((mb_strlen($this->container['program_evaluation_objective_title']) > 50)) {
            $invalidProperties[] = "invalid value for 'program_evaluation_objective_title', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['program_evaluation_period_descriptor'] === null) {
            $invalidProperties[] = "'program_evaluation_period_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['program_evaluation_period_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'program_evaluation_period_descriptor', the character length must be smaller than or equal to 306.";
        }

        if ($this->container['program_evaluation_title'] === null) {
            $invalidProperties[] = "'program_evaluation_title' can't be null";
        }
        if ((mb_strlen($this->container['program_evaluation_title']) > 50)) {
            $invalidProperties[] = "invalid value for 'program_evaluation_title', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['program_evaluation_type_descriptor'] === null) {
            $invalidProperties[] = "'program_evaluation_type_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['program_evaluation_type_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'program_evaluation_type_descriptor', the character length must be smaller than or equal to 306.";
        }

        if ($this->container['program_name'] === null) {
            $invalidProperties[] = "'program_name' can't be null";
        }
        if ((mb_strlen($this->container['program_name']) > 60)) {
            $invalidProperties[] = "invalid value for 'program_name', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['program_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'program_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['program_type_descriptor'] === null) {
            $invalidProperties[] = "'program_type_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['program_type_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'program_type_descriptor', the character length must be smaller than or equal to 306.";
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
     * Gets program_education_organization_id
     *
     * @return int
     */
    public function getProgramEducationOrganizationId()
    {
        return $this->container['program_education_organization_id'];
    }

    /**
     * Sets program_education_organization_id
     *
     * @param int $program_education_organization_id The identifier assigned to an education organization.
     *
     * @return self
     */
    public function setProgramEducationOrganizationId($program_education_organization_id)
    {
        $this->container['program_education_organization_id'] = $program_education_organization_id;

        return $this;
    }

    /**
     * Gets program_evaluation_objective_title
     *
     * @return string
     */
    public function getProgramEvaluationObjectiveTitle()
    {
        return $this->container['program_evaluation_objective_title'];
    }

    /**
     * Sets program_evaluation_objective_title
     *
     * @param string $program_evaluation_objective_title The name or title of the program evaluation objective.
     *
     * @return self
     */
    public function setProgramEvaluationObjectiveTitle($program_evaluation_objective_title)
    {
        if ((mb_strlen($program_evaluation_objective_title) > 50)) {
            throw new \InvalidArgumentException('invalid length for $program_evaluation_objective_title when calling EdFiProgramEvaluationObjectiveReference., must be smaller than or equal to 50.');
        }

        $this->container['program_evaluation_objective_title'] = $program_evaluation_objective_title;

        return $this;
    }

    /**
     * Gets program_evaluation_period_descriptor
     *
     * @return string
     */
    public function getProgramEvaluationPeriodDescriptor()
    {
        return $this->container['program_evaluation_period_descriptor'];
    }

    /**
     * Sets program_evaluation_period_descriptor
     *
     * @param string $program_evaluation_period_descriptor The name of the period for the program evaluation.
     *
     * @return self
     */
    public function setProgramEvaluationPeriodDescriptor($program_evaluation_period_descriptor)
    {
        if ((mb_strlen($program_evaluation_period_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $program_evaluation_period_descriptor when calling EdFiProgramEvaluationObjectiveReference., must be smaller than or equal to 306.');
        }

        $this->container['program_evaluation_period_descriptor'] = $program_evaluation_period_descriptor;

        return $this;
    }

    /**
     * Gets program_evaluation_title
     *
     * @return string
     */
    public function getProgramEvaluationTitle()
    {
        return $this->container['program_evaluation_title'];
    }

    /**
     * Sets program_evaluation_title
     *
     * @param string $program_evaluation_title An assigned unique identifier for the student program evaluation.
     *
     * @return self
     */
    public function setProgramEvaluationTitle($program_evaluation_title)
    {
        if ((mb_strlen($program_evaluation_title) > 50)) {
            throw new \InvalidArgumentException('invalid length for $program_evaluation_title when calling EdFiProgramEvaluationObjectiveReference., must be smaller than or equal to 50.');
        }

        $this->container['program_evaluation_title'] = $program_evaluation_title;

        return $this;
    }

    /**
     * Gets program_evaluation_type_descriptor
     *
     * @return string
     */
    public function getProgramEvaluationTypeDescriptor()
    {
        return $this->container['program_evaluation_type_descriptor'];
    }

    /**
     * Sets program_evaluation_type_descriptor
     *
     * @param string $program_evaluation_type_descriptor The type of program evaluation conducted.
     *
     * @return self
     */
    public function setProgramEvaluationTypeDescriptor($program_evaluation_type_descriptor)
    {
        if ((mb_strlen($program_evaluation_type_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $program_evaluation_type_descriptor when calling EdFiProgramEvaluationObjectiveReference., must be smaller than or equal to 306.');
        }

        $this->container['program_evaluation_type_descriptor'] = $program_evaluation_type_descriptor;

        return $this;
    }

    /**
     * Gets program_name
     *
     * @return string
     */
    public function getProgramName()
    {
        return $this->container['program_name'];
    }

    /**
     * Sets program_name
     *
     * @param string $program_name The formal name of the program of instruction, training, services, or benefits available through federal, state, or local agencies.
     *
     * @return self
     */
    public function setProgramName($program_name)
    {
        if ((mb_strlen($program_name) > 60)) {
            throw new \InvalidArgumentException('invalid length for $program_name when calling EdFiProgramEvaluationObjectiveReference., must be smaller than or equal to 60.');
        }
        if ((mb_strlen($program_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $program_name when calling EdFiProgramEvaluationObjectiveReference., must be bigger than or equal to 1.');
        }

        $this->container['program_name'] = $program_name;

        return $this;
    }

    /**
     * Gets program_type_descriptor
     *
     * @return string
     */
    public function getProgramTypeDescriptor()
    {
        return $this->container['program_type_descriptor'];
    }

    /**
     * Sets program_type_descriptor
     *
     * @param string $program_type_descriptor The type of program.
     *
     * @return self
     */
    public function setProgramTypeDescriptor($program_type_descriptor)
    {
        if ((mb_strlen($program_type_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $program_type_descriptor when calling EdFiProgramEvaluationObjectiveReference., must be smaller than or equal to 306.');
        }

        $this->container['program_type_descriptor'] = $program_type_descriptor;

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


