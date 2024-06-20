<?php
/**
 * EdFiGraduationPlan
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
 * EdFiGraduationPlan Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiGraduationPlan implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_graduationPlan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'graduation_plan_type_descriptor' => 'string',
        'education_organization_reference' => '\OpenAPI\Client\Model\EdFiEducationOrganizationReference',
        'graduation_school_year_type_reference' => '\OpenAPI\Client\Model\EdFiSchoolYearTypeReference',
        'credits_by_courses' => '\OpenAPI\Client\Model\EdFiGraduationPlanCreditsByCourse[]',
        'credits_by_credit_categories' => '\OpenAPI\Client\Model\EdFiGraduationPlanCreditsByCreditCategory[]',
        'credits_by_subjects' => '\OpenAPI\Client\Model\EdFiGraduationPlanCreditsBySubject[]',
        'individual_plan' => 'bool',
        'required_assessments' => '\OpenAPI\Client\Model\EdFiGraduationPlanRequiredAssessment[]',
        'total_required_credit_conversion' => 'double',
        'total_required_credits' => 'double',
        'total_required_credit_type_descriptor' => 'string',
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
        'graduation_plan_type_descriptor' => null,
        'education_organization_reference' => null,
        'graduation_school_year_type_reference' => null,
        'credits_by_courses' => null,
        'credits_by_credit_categories' => null,
        'credits_by_subjects' => null,
        'individual_plan' => null,
        'required_assessments' => null,
        'total_required_credit_conversion' => 'double',
        'total_required_credits' => 'double',
        'total_required_credit_type_descriptor' => null,
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
        'graduation_plan_type_descriptor' => 'graduationPlanTypeDescriptor',
        'education_organization_reference' => 'educationOrganizationReference',
        'graduation_school_year_type_reference' => 'graduationSchoolYearTypeReference',
        'credits_by_courses' => 'creditsByCourses',
        'credits_by_credit_categories' => 'creditsByCreditCategories',
        'credits_by_subjects' => 'creditsBySubjects',
        'individual_plan' => 'individualPlan',
        'required_assessments' => 'requiredAssessments',
        'total_required_credit_conversion' => 'totalRequiredCreditConversion',
        'total_required_credits' => 'totalRequiredCredits',
        'total_required_credit_type_descriptor' => 'totalRequiredCreditTypeDescriptor',
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
        'graduation_plan_type_descriptor' => 'setGraduationPlanTypeDescriptor',
        'education_organization_reference' => 'setEducationOrganizationReference',
        'graduation_school_year_type_reference' => 'setGraduationSchoolYearTypeReference',
        'credits_by_courses' => 'setCreditsByCourses',
        'credits_by_credit_categories' => 'setCreditsByCreditCategories',
        'credits_by_subjects' => 'setCreditsBySubjects',
        'individual_plan' => 'setIndividualPlan',
        'required_assessments' => 'setRequiredAssessments',
        'total_required_credit_conversion' => 'setTotalRequiredCreditConversion',
        'total_required_credits' => 'setTotalRequiredCredits',
        'total_required_credit_type_descriptor' => 'setTotalRequiredCreditTypeDescriptor',
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
        'graduation_plan_type_descriptor' => 'getGraduationPlanTypeDescriptor',
        'education_organization_reference' => 'getEducationOrganizationReference',
        'graduation_school_year_type_reference' => 'getGraduationSchoolYearTypeReference',
        'credits_by_courses' => 'getCreditsByCourses',
        'credits_by_credit_categories' => 'getCreditsByCreditCategories',
        'credits_by_subjects' => 'getCreditsBySubjects',
        'individual_plan' => 'getIndividualPlan',
        'required_assessments' => 'getRequiredAssessments',
        'total_required_credit_conversion' => 'getTotalRequiredCreditConversion',
        'total_required_credits' => 'getTotalRequiredCredits',
        'total_required_credit_type_descriptor' => 'getTotalRequiredCreditTypeDescriptor',
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
        $this->container['graduation_plan_type_descriptor'] = $data['graduation_plan_type_descriptor'] ?? null;
        $this->container['education_organization_reference'] = $data['education_organization_reference'] ?? null;
        $this->container['graduation_school_year_type_reference'] = $data['graduation_school_year_type_reference'] ?? null;
        $this->container['credits_by_courses'] = $data['credits_by_courses'] ?? null;
        $this->container['credits_by_credit_categories'] = $data['credits_by_credit_categories'] ?? null;
        $this->container['credits_by_subjects'] = $data['credits_by_subjects'] ?? null;
        $this->container['individual_plan'] = $data['individual_plan'] ?? null;
        $this->container['required_assessments'] = $data['required_assessments'] ?? null;
        $this->container['total_required_credit_conversion'] = $data['total_required_credit_conversion'] ?? null;
        $this->container['total_required_credits'] = $data['total_required_credits'] ?? null;
        $this->container['total_required_credit_type_descriptor'] = $data['total_required_credit_type_descriptor'] ?? null;
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

        if ($this->container['graduation_plan_type_descriptor'] === null) {
            $invalidProperties[] = "'graduation_plan_type_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['graduation_plan_type_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'graduation_plan_type_descriptor', the character length must be smaller than or equal to 306.";
        }

        if ($this->container['education_organization_reference'] === null) {
            $invalidProperties[] = "'education_organization_reference' can't be null";
        }
        if ($this->container['graduation_school_year_type_reference'] === null) {
            $invalidProperties[] = "'graduation_school_year_type_reference' can't be null";
        }
        if ($this->container['total_required_credits'] === null) {
            $invalidProperties[] = "'total_required_credits' can't be null";
        }
        if (($this->container['total_required_credits'] < 0.0)) {
            $invalidProperties[] = "invalid value for 'total_required_credits', must be bigger than or equal to 0.0.";
        }

        if (!is_null($this->container['total_required_credit_type_descriptor']) && (mb_strlen($this->container['total_required_credit_type_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'total_required_credit_type_descriptor', the character length must be smaller than or equal to 306.";
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
     * Gets graduation_plan_type_descriptor
     *
     * @return string
     */
    public function getGraduationPlanTypeDescriptor()
    {
        return $this->container['graduation_plan_type_descriptor'];
    }

    /**
     * Sets graduation_plan_type_descriptor
     *
     * @param string $graduation_plan_type_descriptor The type of academic plan the student is following for graduation.
     *
     * @return self
     */
    public function setGraduationPlanTypeDescriptor($graduation_plan_type_descriptor)
    {
        if ((mb_strlen($graduation_plan_type_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $graduation_plan_type_descriptor when calling EdFiGraduationPlan., must be smaller than or equal to 306.');
        }

        $this->container['graduation_plan_type_descriptor'] = $graduation_plan_type_descriptor;

        return $this;
    }

    /**
     * Gets education_organization_reference
     *
     * @return \OpenAPI\Client\Model\EdFiEducationOrganizationReference
     */
    public function getEducationOrganizationReference()
    {
        return $this->container['education_organization_reference'];
    }

    /**
     * Sets education_organization_reference
     *
     * @param \OpenAPI\Client\Model\EdFiEducationOrganizationReference $education_organization_reference education_organization_reference
     *
     * @return self
     */
    public function setEducationOrganizationReference($education_organization_reference)
    {
        $this->container['education_organization_reference'] = $education_organization_reference;

        return $this;
    }

    /**
     * Gets graduation_school_year_type_reference
     *
     * @return \OpenAPI\Client\Model\EdFiSchoolYearTypeReference
     */
    public function getGraduationSchoolYearTypeReference()
    {
        return $this->container['graduation_school_year_type_reference'];
    }

    /**
     * Sets graduation_school_year_type_reference
     *
     * @param \OpenAPI\Client\Model\EdFiSchoolYearTypeReference $graduation_school_year_type_reference graduation_school_year_type_reference
     *
     * @return self
     */
    public function setGraduationSchoolYearTypeReference($graduation_school_year_type_reference)
    {
        $this->container['graduation_school_year_type_reference'] = $graduation_school_year_type_reference;

        return $this;
    }

    /**
     * Gets credits_by_courses
     *
     * @return \OpenAPI\Client\Model\EdFiGraduationPlanCreditsByCourse[]|null
     */
    public function getCreditsByCourses()
    {
        return $this->container['credits_by_courses'];
    }

    /**
     * Sets credits_by_courses
     *
     * @param \OpenAPI\Client\Model\EdFiGraduationPlanCreditsByCourse[]|null $credits_by_courses An unordered collection of graduationPlanCreditsByCourses. The total credits required for graduation by taking a specific course, or by taking one or more from a set of courses.
     *
     * @return self
     */
    public function setCreditsByCourses($credits_by_courses)
    {
        $this->container['credits_by_courses'] = $credits_by_courses;

        return $this;
    }

    /**
     * Gets credits_by_credit_categories
     *
     * @return \OpenAPI\Client\Model\EdFiGraduationPlanCreditsByCreditCategory[]|null
     */
    public function getCreditsByCreditCategories()
    {
        return $this->container['credits_by_credit_categories'];
    }

    /**
     * Sets credits_by_credit_categories
     *
     * @param \OpenAPI\Client\Model\EdFiGraduationPlanCreditsByCreditCategory[]|null $credits_by_credit_categories An unordered collection of graduationPlanCreditsByCreditCategories. The total credits required for graduation based on the credit category.
     *
     * @return self
     */
    public function setCreditsByCreditCategories($credits_by_credit_categories)
    {
        $this->container['credits_by_credit_categories'] = $credits_by_credit_categories;

        return $this;
    }

    /**
     * Gets credits_by_subjects
     *
     * @return \OpenAPI\Client\Model\EdFiGraduationPlanCreditsBySubject[]|null
     */
    public function getCreditsBySubjects()
    {
        return $this->container['credits_by_subjects'];
    }

    /**
     * Sets credits_by_subjects
     *
     * @param \OpenAPI\Client\Model\EdFiGraduationPlanCreditsBySubject[]|null $credits_by_subjects An unordered collection of graduationPlanCreditsBySubjects. The total credits required in subject to graduate. Only those courses identified as a high school course requirement are eligible to meet subject credit requirements.
     *
     * @return self
     */
    public function setCreditsBySubjects($credits_by_subjects)
    {
        $this->container['credits_by_subjects'] = $credits_by_subjects;

        return $this;
    }

    /**
     * Gets individual_plan
     *
     * @return bool|null
     */
    public function getIndividualPlan()
    {
        return $this->container['individual_plan'];
    }

    /**
     * Sets individual_plan
     *
     * @param bool|null $individual_plan An indicator of whether the graduation plan is tailored for an individual.
     *
     * @return self
     */
    public function setIndividualPlan($individual_plan)
    {
        $this->container['individual_plan'] = $individual_plan;

        return $this;
    }

    /**
     * Gets required_assessments
     *
     * @return \OpenAPI\Client\Model\EdFiGraduationPlanRequiredAssessment[]|null
     */
    public function getRequiredAssessments()
    {
        return $this->container['required_assessments'];
    }

    /**
     * Sets required_assessments
     *
     * @param \OpenAPI\Client\Model\EdFiGraduationPlanRequiredAssessment[]|null $required_assessments An unordered collection of graduationPlanRequiredAssessments. The assessments and associated required score and performance level needed to satisfy graduation requirements.
     *
     * @return self
     */
    public function setRequiredAssessments($required_assessments)
    {
        $this->container['required_assessments'] = $required_assessments;

        return $this;
    }

    /**
     * Gets total_required_credit_conversion
     *
     * @return double|null
     */
    public function getTotalRequiredCreditConversion()
    {
        return $this->container['total_required_credit_conversion'];
    }

    /**
     * Sets total_required_credit_conversion
     *
     * @param double|null $total_required_credit_conversion Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units.
     *
     * @return self
     */
    public function setTotalRequiredCreditConversion($total_required_credit_conversion)
    {
        $this->container['total_required_credit_conversion'] = $total_required_credit_conversion;

        return $this;
    }

    /**
     * Gets total_required_credits
     *
     * @return double
     */
    public function getTotalRequiredCredits()
    {
        return $this->container['total_required_credits'];
    }

    /**
     * Sets total_required_credits
     *
     * @param double $total_required_credits The value of credits or units of value awarded for the completion of a course.
     *
     * @return self
     */
    public function setTotalRequiredCredits($total_required_credits)
    {

        if (($total_required_credits < 0.0)) {
            throw new \InvalidArgumentException('invalid value for $total_required_credits when calling EdFiGraduationPlan., must be bigger than or equal to 0.0.');
        }

        $this->container['total_required_credits'] = $total_required_credits;

        return $this;
    }

    /**
     * Gets total_required_credit_type_descriptor
     *
     * @return string|null
     */
    public function getTotalRequiredCreditTypeDescriptor()
    {
        return $this->container['total_required_credit_type_descriptor'];
    }

    /**
     * Sets total_required_credit_type_descriptor
     *
     * @param string|null $total_required_credit_type_descriptor The type of credits or units of value awarded for the completion of a course.
     *
     * @return self
     */
    public function setTotalRequiredCreditTypeDescriptor($total_required_credit_type_descriptor)
    {
        if (!is_null($total_required_credit_type_descriptor) && (mb_strlen($total_required_credit_type_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $total_required_credit_type_descriptor when calling EdFiGraduationPlan., must be smaller than or equal to 306.');
        }

        $this->container['total_required_credit_type_descriptor'] = $total_required_credit_type_descriptor;

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


