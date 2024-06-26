<?php
/**
 * EdFiLocalEducationAgencyFederalFunds
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
 * EdFiLocalEducationAgencyFederalFunds Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiLocalEducationAgencyFederalFunds implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_localEducationAgencyFederalFunds';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fiscal_year' => 'int',
        'innovative_dollars_spent' => 'double',
        'innovative_dollars_spent_strategic_priorities' => 'double',
        'innovative_programs_funds_received' => 'double',
        'school_improvement_allocation' => 'double',
        'school_improvement_reserved_funds_percentage' => 'double',
        'state_assessment_administration_funding' => 'double',
        'supplemental_educational_services_funds_spent' => 'double',
        'supplemental_educational_services_per_pupil_expenditure' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fiscal_year' => 'int32',
        'innovative_dollars_spent' => 'double',
        'innovative_dollars_spent_strategic_priorities' => 'double',
        'innovative_programs_funds_received' => 'double',
        'school_improvement_allocation' => 'double',
        'school_improvement_reserved_funds_percentage' => 'double',
        'state_assessment_administration_funding' => 'double',
        'supplemental_educational_services_funds_spent' => 'double',
        'supplemental_educational_services_per_pupil_expenditure' => 'double'
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
        'fiscal_year' => 'fiscalYear',
        'innovative_dollars_spent' => 'innovativeDollarsSpent',
        'innovative_dollars_spent_strategic_priorities' => 'innovativeDollarsSpentStrategicPriorities',
        'innovative_programs_funds_received' => 'innovativeProgramsFundsReceived',
        'school_improvement_allocation' => 'schoolImprovementAllocation',
        'school_improvement_reserved_funds_percentage' => 'schoolImprovementReservedFundsPercentage',
        'state_assessment_administration_funding' => 'stateAssessmentAdministrationFunding',
        'supplemental_educational_services_funds_spent' => 'supplementalEducationalServicesFundsSpent',
        'supplemental_educational_services_per_pupil_expenditure' => 'supplementalEducationalServicesPerPupilExpenditure'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fiscal_year' => 'setFiscalYear',
        'innovative_dollars_spent' => 'setInnovativeDollarsSpent',
        'innovative_dollars_spent_strategic_priorities' => 'setInnovativeDollarsSpentStrategicPriorities',
        'innovative_programs_funds_received' => 'setInnovativeProgramsFundsReceived',
        'school_improvement_allocation' => 'setSchoolImprovementAllocation',
        'school_improvement_reserved_funds_percentage' => 'setSchoolImprovementReservedFundsPercentage',
        'state_assessment_administration_funding' => 'setStateAssessmentAdministrationFunding',
        'supplemental_educational_services_funds_spent' => 'setSupplementalEducationalServicesFundsSpent',
        'supplemental_educational_services_per_pupil_expenditure' => 'setSupplementalEducationalServicesPerPupilExpenditure'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fiscal_year' => 'getFiscalYear',
        'innovative_dollars_spent' => 'getInnovativeDollarsSpent',
        'innovative_dollars_spent_strategic_priorities' => 'getInnovativeDollarsSpentStrategicPriorities',
        'innovative_programs_funds_received' => 'getInnovativeProgramsFundsReceived',
        'school_improvement_allocation' => 'getSchoolImprovementAllocation',
        'school_improvement_reserved_funds_percentage' => 'getSchoolImprovementReservedFundsPercentage',
        'state_assessment_administration_funding' => 'getStateAssessmentAdministrationFunding',
        'supplemental_educational_services_funds_spent' => 'getSupplementalEducationalServicesFundsSpent',
        'supplemental_educational_services_per_pupil_expenditure' => 'getSupplementalEducationalServicesPerPupilExpenditure'
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
        $this->container['fiscal_year'] = $data['fiscal_year'] ?? null;
        $this->container['innovative_dollars_spent'] = $data['innovative_dollars_spent'] ?? null;
        $this->container['innovative_dollars_spent_strategic_priorities'] = $data['innovative_dollars_spent_strategic_priorities'] ?? null;
        $this->container['innovative_programs_funds_received'] = $data['innovative_programs_funds_received'] ?? null;
        $this->container['school_improvement_allocation'] = $data['school_improvement_allocation'] ?? null;
        $this->container['school_improvement_reserved_funds_percentage'] = $data['school_improvement_reserved_funds_percentage'] ?? null;
        $this->container['state_assessment_administration_funding'] = $data['state_assessment_administration_funding'] ?? null;
        $this->container['supplemental_educational_services_funds_spent'] = $data['supplemental_educational_services_funds_spent'] ?? null;
        $this->container['supplemental_educational_services_per_pupil_expenditure'] = $data['supplemental_educational_services_per_pupil_expenditure'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fiscal_year'] === null) {
            $invalidProperties[] = "'fiscal_year' can't be null";
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
     * @param int $fiscal_year The fiscal year for which the federal funds are received.
     *
     * @return self
     */
    public function setFiscalYear($fiscal_year)
    {
        $this->container['fiscal_year'] = $fiscal_year;

        return $this;
    }

    /**
     * Gets innovative_dollars_spent
     *
     * @return double|null
     */
    public function getInnovativeDollarsSpent()
    {
        return $this->container['innovative_dollars_spent'];
    }

    /**
     * Sets innovative_dollars_spent
     *
     * @param double|null $innovative_dollars_spent The total Title V, Part A funds expended by LEAs.
     *
     * @return self
     */
    public function setInnovativeDollarsSpent($innovative_dollars_spent)
    {
        $this->container['innovative_dollars_spent'] = $innovative_dollars_spent;

        return $this;
    }

    /**
     * Gets innovative_dollars_spent_strategic_priorities
     *
     * @return double|null
     */
    public function getInnovativeDollarsSpentStrategicPriorities()
    {
        return $this->container['innovative_dollars_spent_strategic_priorities'];
    }

    /**
     * Sets innovative_dollars_spent_strategic_priorities
     *
     * @param double|null $innovative_dollars_spent_strategic_priorities The total amount of Title V, Part A funds expended by LEAs for the four strategic priorities.
     *
     * @return self
     */
    public function setInnovativeDollarsSpentStrategicPriorities($innovative_dollars_spent_strategic_priorities)
    {
        $this->container['innovative_dollars_spent_strategic_priorities'] = $innovative_dollars_spent_strategic_priorities;

        return $this;
    }

    /**
     * Gets innovative_programs_funds_received
     *
     * @return double|null
     */
    public function getInnovativeProgramsFundsReceived()
    {
        return $this->container['innovative_programs_funds_received'];
    }

    /**
     * Sets innovative_programs_funds_received
     *
     * @param double|null $innovative_programs_funds_received The total Title V, Part A funds received by LEAs.
     *
     * @return self
     */
    public function setInnovativeProgramsFundsReceived($innovative_programs_funds_received)
    {
        $this->container['innovative_programs_funds_received'] = $innovative_programs_funds_received;

        return $this;
    }

    /**
     * Gets school_improvement_allocation
     *
     * @return double|null
     */
    public function getSchoolImprovementAllocation()
    {
        return $this->container['school_improvement_allocation'];
    }

    /**
     * Sets school_improvement_allocation
     *
     * @param double|null $school_improvement_allocation The amount of Section 1003(a) and 1003(g) allocations to LEAs.
     *
     * @return self
     */
    public function setSchoolImprovementAllocation($school_improvement_allocation)
    {
        $this->container['school_improvement_allocation'] = $school_improvement_allocation;

        return $this;
    }

    /**
     * Gets school_improvement_reserved_funds_percentage
     *
     * @return double|null
     */
    public function getSchoolImprovementReservedFundsPercentage()
    {
        return $this->container['school_improvement_reserved_funds_percentage'];
    }

    /**
     * Sets school_improvement_reserved_funds_percentage
     *
     * @param double|null $school_improvement_reserved_funds_percentage An indication of the percentage of the Title I, Part A allocation that the SEA reserved in accordance with Section 1003(a) of ESEA and 200.100(a) of ED's regulations governing the reservation of funds for school improvement under Section 1003(a) of ESEA.
     *
     * @return self
     */
    public function setSchoolImprovementReservedFundsPercentage($school_improvement_reserved_funds_percentage)
    {
        $this->container['school_improvement_reserved_funds_percentage'] = $school_improvement_reserved_funds_percentage;

        return $this;
    }

    /**
     * Gets state_assessment_administration_funding
     *
     * @return double|null
     */
    public function getStateAssessmentAdministrationFunding()
    {
        return $this->container['state_assessment_administration_funding'];
    }

    /**
     * Sets state_assessment_administration_funding
     *
     * @param double|null $state_assessment_administration_funding The percentage of funds used to administer assessments required by Section 1111(b) or to carry out other activities described in Section 6111 and other activities related to ensuring that the state's schools and LEAs are held accountable for results.
     *
     * @return self
     */
    public function setStateAssessmentAdministrationFunding($state_assessment_administration_funding)
    {
        $this->container['state_assessment_administration_funding'] = $state_assessment_administration_funding;

        return $this;
    }

    /**
     * Gets supplemental_educational_services_funds_spent
     *
     * @return double|null
     */
    public function getSupplementalEducationalServicesFundsSpent()
    {
        return $this->container['supplemental_educational_services_funds_spent'];
    }

    /**
     * Sets supplemental_educational_services_funds_spent
     *
     * @param double|null $supplemental_educational_services_funds_spent The dollar amount spent on supplemental educational services during the school year under Title I, Part A, Section 1116 of ESEA as amended.
     *
     * @return self
     */
    public function setSupplementalEducationalServicesFundsSpent($supplemental_educational_services_funds_spent)
    {
        $this->container['supplemental_educational_services_funds_spent'] = $supplemental_educational_services_funds_spent;

        return $this;
    }

    /**
     * Gets supplemental_educational_services_per_pupil_expenditure
     *
     * @return double|null
     */
    public function getSupplementalEducationalServicesPerPupilExpenditure()
    {
        return $this->container['supplemental_educational_services_per_pupil_expenditure'];
    }

    /**
     * Sets supplemental_educational_services_per_pupil_expenditure
     *
     * @param double|null $supplemental_educational_services_per_pupil_expenditure The maximum dollar amount that may be spent per child for expenditures related to supplemental educational services under Title I of the ESEA.
     *
     * @return self
     */
    public function setSupplementalEducationalServicesPerPupilExpenditure($supplemental_educational_services_per_pupil_expenditure)
    {
        $this->container['supplemental_educational_services_per_pupil_expenditure'] = $supplemental_educational_services_per_pupil_expenditure;

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


