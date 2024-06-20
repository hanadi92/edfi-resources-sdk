<?php
/**
 * EdFiStudentAcademicRecordDiploma
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
 * EdFiStudentAcademicRecordDiploma Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiStudentAcademicRecordDiploma implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_studentAcademicRecordDiploma';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'diploma_type_descriptor' => 'string',
        'diploma_award_date' => '\DateTime',
        'achievement_category_descriptor' => 'string',
        'diploma_level_descriptor' => 'string',
        'achievement_category_system' => 'string',
        'achievement_title' => 'string',
        'criteria' => 'string',
        'criteria_url' => 'string',
        'cte_completer' => 'bool',
        'diploma_award_expires_date' => '\DateTime',
        'diploma_description' => 'string',
        'evidence_statement' => 'string',
        'image_url' => 'string',
        'issuer_name' => 'string',
        'issuer_origin_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'diploma_type_descriptor' => null,
        'diploma_award_date' => 'date',
        'achievement_category_descriptor' => null,
        'diploma_level_descriptor' => null,
        'achievement_category_system' => null,
        'achievement_title' => null,
        'criteria' => null,
        'criteria_url' => null,
        'cte_completer' => null,
        'diploma_award_expires_date' => 'date',
        'diploma_description' => null,
        'evidence_statement' => null,
        'image_url' => null,
        'issuer_name' => null,
        'issuer_origin_url' => null
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
        'diploma_type_descriptor' => 'diplomaTypeDescriptor',
        'diploma_award_date' => 'diplomaAwardDate',
        'achievement_category_descriptor' => 'achievementCategoryDescriptor',
        'diploma_level_descriptor' => 'diplomaLevelDescriptor',
        'achievement_category_system' => 'achievementCategorySystem',
        'achievement_title' => 'achievementTitle',
        'criteria' => 'criteria',
        'criteria_url' => 'criteriaURL',
        'cte_completer' => 'cteCompleter',
        'diploma_award_expires_date' => 'diplomaAwardExpiresDate',
        'diploma_description' => 'diplomaDescription',
        'evidence_statement' => 'evidenceStatement',
        'image_url' => 'imageURL',
        'issuer_name' => 'issuerName',
        'issuer_origin_url' => 'issuerOriginURL'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'diploma_type_descriptor' => 'setDiplomaTypeDescriptor',
        'diploma_award_date' => 'setDiplomaAwardDate',
        'achievement_category_descriptor' => 'setAchievementCategoryDescriptor',
        'diploma_level_descriptor' => 'setDiplomaLevelDescriptor',
        'achievement_category_system' => 'setAchievementCategorySystem',
        'achievement_title' => 'setAchievementTitle',
        'criteria' => 'setCriteria',
        'criteria_url' => 'setCriteriaUrl',
        'cte_completer' => 'setCteCompleter',
        'diploma_award_expires_date' => 'setDiplomaAwardExpiresDate',
        'diploma_description' => 'setDiplomaDescription',
        'evidence_statement' => 'setEvidenceStatement',
        'image_url' => 'setImageUrl',
        'issuer_name' => 'setIssuerName',
        'issuer_origin_url' => 'setIssuerOriginUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'diploma_type_descriptor' => 'getDiplomaTypeDescriptor',
        'diploma_award_date' => 'getDiplomaAwardDate',
        'achievement_category_descriptor' => 'getAchievementCategoryDescriptor',
        'diploma_level_descriptor' => 'getDiplomaLevelDescriptor',
        'achievement_category_system' => 'getAchievementCategorySystem',
        'achievement_title' => 'getAchievementTitle',
        'criteria' => 'getCriteria',
        'criteria_url' => 'getCriteriaUrl',
        'cte_completer' => 'getCteCompleter',
        'diploma_award_expires_date' => 'getDiplomaAwardExpiresDate',
        'diploma_description' => 'getDiplomaDescription',
        'evidence_statement' => 'getEvidenceStatement',
        'image_url' => 'getImageUrl',
        'issuer_name' => 'getIssuerName',
        'issuer_origin_url' => 'getIssuerOriginUrl'
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
        $this->container['diploma_type_descriptor'] = $data['diploma_type_descriptor'] ?? null;
        $this->container['diploma_award_date'] = $data['diploma_award_date'] ?? null;
        $this->container['achievement_category_descriptor'] = $data['achievement_category_descriptor'] ?? null;
        $this->container['diploma_level_descriptor'] = $data['diploma_level_descriptor'] ?? null;
        $this->container['achievement_category_system'] = $data['achievement_category_system'] ?? null;
        $this->container['achievement_title'] = $data['achievement_title'] ?? null;
        $this->container['criteria'] = $data['criteria'] ?? null;
        $this->container['criteria_url'] = $data['criteria_url'] ?? null;
        $this->container['cte_completer'] = $data['cte_completer'] ?? null;
        $this->container['diploma_award_expires_date'] = $data['diploma_award_expires_date'] ?? null;
        $this->container['diploma_description'] = $data['diploma_description'] ?? null;
        $this->container['evidence_statement'] = $data['evidence_statement'] ?? null;
        $this->container['image_url'] = $data['image_url'] ?? null;
        $this->container['issuer_name'] = $data['issuer_name'] ?? null;
        $this->container['issuer_origin_url'] = $data['issuer_origin_url'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['diploma_type_descriptor'] === null) {
            $invalidProperties[] = "'diploma_type_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['diploma_type_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'diploma_type_descriptor', the character length must be smaller than or equal to 306.";
        }

        if ($this->container['diploma_award_date'] === null) {
            $invalidProperties[] = "'diploma_award_date' can't be null";
        }
        if (!is_null($this->container['achievement_category_descriptor']) && (mb_strlen($this->container['achievement_category_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'achievement_category_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['diploma_level_descriptor']) && (mb_strlen($this->container['diploma_level_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'diploma_level_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['achievement_category_system']) && (mb_strlen($this->container['achievement_category_system']) > 60)) {
            $invalidProperties[] = "invalid value for 'achievement_category_system', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['achievement_category_system']) && (mb_strlen($this->container['achievement_category_system']) < 1)) {
            $invalidProperties[] = "invalid value for 'achievement_category_system', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['achievement_title']) && (mb_strlen($this->container['achievement_title']) > 60)) {
            $invalidProperties[] = "invalid value for 'achievement_title', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['achievement_title']) && (mb_strlen($this->container['achievement_title']) < 1)) {
            $invalidProperties[] = "invalid value for 'achievement_title', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['criteria']) && (mb_strlen($this->container['criteria']) > 150)) {
            $invalidProperties[] = "invalid value for 'criteria', the character length must be smaller than or equal to 150.";
        }

        if (!is_null($this->container['criteria']) && (mb_strlen($this->container['criteria']) < 1)) {
            $invalidProperties[] = "invalid value for 'criteria', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['criteria_url']) && (mb_strlen($this->container['criteria_url']) > 255)) {
            $invalidProperties[] = "invalid value for 'criteria_url', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['criteria_url']) && (mb_strlen($this->container['criteria_url']) < 5)) {
            $invalidProperties[] = "invalid value for 'criteria_url', the character length must be bigger than or equal to 5.";
        }

        if (!is_null($this->container['diploma_description']) && (mb_strlen($this->container['diploma_description']) > 80)) {
            $invalidProperties[] = "invalid value for 'diploma_description', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['diploma_description']) && (mb_strlen($this->container['diploma_description']) < 1)) {
            $invalidProperties[] = "invalid value for 'diploma_description', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['evidence_statement']) && (mb_strlen($this->container['evidence_statement']) > 150)) {
            $invalidProperties[] = "invalid value for 'evidence_statement', the character length must be smaller than or equal to 150.";
        }

        if (!is_null($this->container['evidence_statement']) && (mb_strlen($this->container['evidence_statement']) < 1)) {
            $invalidProperties[] = "invalid value for 'evidence_statement', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['image_url']) && (mb_strlen($this->container['image_url']) > 255)) {
            $invalidProperties[] = "invalid value for 'image_url', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['image_url']) && (mb_strlen($this->container['image_url']) < 5)) {
            $invalidProperties[] = "invalid value for 'image_url', the character length must be bigger than or equal to 5.";
        }

        if (!is_null($this->container['issuer_name']) && (mb_strlen($this->container['issuer_name']) > 150)) {
            $invalidProperties[] = "invalid value for 'issuer_name', the character length must be smaller than or equal to 150.";
        }

        if (!is_null($this->container['issuer_name']) && (mb_strlen($this->container['issuer_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'issuer_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['issuer_origin_url']) && (mb_strlen($this->container['issuer_origin_url']) > 255)) {
            $invalidProperties[] = "invalid value for 'issuer_origin_url', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['issuer_origin_url']) && (mb_strlen($this->container['issuer_origin_url']) < 5)) {
            $invalidProperties[] = "invalid value for 'issuer_origin_url', the character length must be bigger than or equal to 5.";
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
     * Gets diploma_type_descriptor
     *
     * @return string
     */
    public function getDiplomaTypeDescriptor()
    {
        return $this->container['diploma_type_descriptor'];
    }

    /**
     * Sets diploma_type_descriptor
     *
     * @param string $diploma_type_descriptor The type of diploma/credential that is awarded to a student in recognition of his/her completion of the curricular requirements.
     *
     * @return self
     */
    public function setDiplomaTypeDescriptor($diploma_type_descriptor)
    {
        if ((mb_strlen($diploma_type_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $diploma_type_descriptor when calling EdFiStudentAcademicRecordDiploma., must be smaller than or equal to 306.');
        }

        $this->container['diploma_type_descriptor'] = $diploma_type_descriptor;

        return $this;
    }

    /**
     * Gets diploma_award_date
     *
     * @return \DateTime
     */
    public function getDiplomaAwardDate()
    {
        return $this->container['diploma_award_date'];
    }

    /**
     * Sets diploma_award_date
     *
     * @param \DateTime $diploma_award_date The month, day, and year on which the student met  graduation requirements and was awarded a diploma.
     *
     * @return self
     */
    public function setDiplomaAwardDate($diploma_award_date)
    {
        $this->container['diploma_award_date'] = $diploma_award_date;

        return $this;
    }

    /**
     * Gets achievement_category_descriptor
     *
     * @return string|null
     */
    public function getAchievementCategoryDescriptor()
    {
        return $this->container['achievement_category_descriptor'];
    }

    /**
     * Sets achievement_category_descriptor
     *
     * @param string|null $achievement_category_descriptor The category of achievement attributed to the individual.
     *
     * @return self
     */
    public function setAchievementCategoryDescriptor($achievement_category_descriptor)
    {
        if (!is_null($achievement_category_descriptor) && (mb_strlen($achievement_category_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $achievement_category_descriptor when calling EdFiStudentAcademicRecordDiploma., must be smaller than or equal to 306.');
        }

        $this->container['achievement_category_descriptor'] = $achievement_category_descriptor;

        return $this;
    }

    /**
     * Gets diploma_level_descriptor
     *
     * @return string|null
     */
    public function getDiplomaLevelDescriptor()
    {
        return $this->container['diploma_level_descriptor'];
    }

    /**
     * Sets diploma_level_descriptor
     *
     * @param string|null $diploma_level_descriptor The level of diploma/credential that is awarded to a student in recognition of completion of the curricular requirements.
     *
     * @return self
     */
    public function setDiplomaLevelDescriptor($diploma_level_descriptor)
    {
        if (!is_null($diploma_level_descriptor) && (mb_strlen($diploma_level_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $diploma_level_descriptor when calling EdFiStudentAcademicRecordDiploma., must be smaller than or equal to 306.');
        }

        $this->container['diploma_level_descriptor'] = $diploma_level_descriptor;

        return $this;
    }

    /**
     * Gets achievement_category_system
     *
     * @return string|null
     */
    public function getAchievementCategorySystem()
    {
        return $this->container['achievement_category_system'];
    }

    /**
     * Sets achievement_category_system
     *
     * @param string|null $achievement_category_system The system that defines the categories by which an achievement is attributed to the individual.
     *
     * @return self
     */
    public function setAchievementCategorySystem($achievement_category_system)
    {
        if (!is_null($achievement_category_system) && (mb_strlen($achievement_category_system) > 60)) {
            throw new \InvalidArgumentException('invalid length for $achievement_category_system when calling EdFiStudentAcademicRecordDiploma., must be smaller than or equal to 60.');
        }
        if (!is_null($achievement_category_system) && (mb_strlen($achievement_category_system) < 1)) {
            throw new \InvalidArgumentException('invalid length for $achievement_category_system when calling EdFiStudentAcademicRecordDiploma., must be bigger than or equal to 1.');
        }

        $this->container['achievement_category_system'] = $achievement_category_system;

        return $this;
    }

    /**
     * Gets achievement_title
     *
     * @return string|null
     */
    public function getAchievementTitle()
    {
        return $this->container['achievement_title'];
    }

    /**
     * Sets achievement_title
     *
     * @param string|null $achievement_title The title assigned to the achievement.
     *
     * @return self
     */
    public function setAchievementTitle($achievement_title)
    {
        if (!is_null($achievement_title) && (mb_strlen($achievement_title) > 60)) {
            throw new \InvalidArgumentException('invalid length for $achievement_title when calling EdFiStudentAcademicRecordDiploma., must be smaller than or equal to 60.');
        }
        if (!is_null($achievement_title) && (mb_strlen($achievement_title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $achievement_title when calling EdFiStudentAcademicRecordDiploma., must be bigger than or equal to 1.');
        }

        $this->container['achievement_title'] = $achievement_title;

        return $this;
    }

    /**
     * Gets criteria
     *
     * @return string|null
     */
    public function getCriteria()
    {
        return $this->container['criteria'];
    }

    /**
     * Sets criteria
     *
     * @param string|null $criteria The criteria for competency-based completion of the achievement/award.
     *
     * @return self
     */
    public function setCriteria($criteria)
    {
        if (!is_null($criteria) && (mb_strlen($criteria) > 150)) {
            throw new \InvalidArgumentException('invalid length for $criteria when calling EdFiStudentAcademicRecordDiploma., must be smaller than or equal to 150.');
        }
        if (!is_null($criteria) && (mb_strlen($criteria) < 1)) {
            throw new \InvalidArgumentException('invalid length for $criteria when calling EdFiStudentAcademicRecordDiploma., must be bigger than or equal to 1.');
        }

        $this->container['criteria'] = $criteria;

        return $this;
    }

    /**
     * Gets criteria_url
     *
     * @return string|null
     */
    public function getCriteriaUrl()
    {
        return $this->container['criteria_url'];
    }

    /**
     * Sets criteria_url
     *
     * @param string|null $criteria_url The Uniform Resource Locator (URL) for the unique address of a web page describing the competency-based completion criteria for the achievement/award.
     *
     * @return self
     */
    public function setCriteriaUrl($criteria_url)
    {
        if (!is_null($criteria_url) && (mb_strlen($criteria_url) > 255)) {
            throw new \InvalidArgumentException('invalid length for $criteria_url when calling EdFiStudentAcademicRecordDiploma., must be smaller than or equal to 255.');
        }
        if (!is_null($criteria_url) && (mb_strlen($criteria_url) < 5)) {
            throw new \InvalidArgumentException('invalid length for $criteria_url when calling EdFiStudentAcademicRecordDiploma., must be bigger than or equal to 5.');
        }

        $this->container['criteria_url'] = $criteria_url;

        return $this;
    }

    /**
     * Gets cte_completer
     *
     * @return bool|null
     */
    public function getCteCompleter()
    {
        return $this->container['cte_completer'];
    }

    /**
     * Sets cte_completer
     *
     * @param bool|null $cte_completer Indicated a student who reached a state-defined threshold of vocational education and who attained a high school diploma or its recognized state equivalent or GED.
     *
     * @return self
     */
    public function setCteCompleter($cte_completer)
    {
        $this->container['cte_completer'] = $cte_completer;

        return $this;
    }

    /**
     * Gets diploma_award_expires_date
     *
     * @return \DateTime|null
     */
    public function getDiplomaAwardExpiresDate()
    {
        return $this->container['diploma_award_expires_date'];
    }

    /**
     * Sets diploma_award_expires_date
     *
     * @param \DateTime|null $diploma_award_expires_date Date on which the diploma expires.
     *
     * @return self
     */
    public function setDiplomaAwardExpiresDate($diploma_award_expires_date)
    {
        $this->container['diploma_award_expires_date'] = $diploma_award_expires_date;

        return $this;
    }

    /**
     * Gets diploma_description
     *
     * @return string|null
     */
    public function getDiplomaDescription()
    {
        return $this->container['diploma_description'];
    }

    /**
     * Sets diploma_description
     *
     * @param string|null $diploma_description The description of the diploma given to the student for accomplishments.
     *
     * @return self
     */
    public function setDiplomaDescription($diploma_description)
    {
        if (!is_null($diploma_description) && (mb_strlen($diploma_description) > 80)) {
            throw new \InvalidArgumentException('invalid length for $diploma_description when calling EdFiStudentAcademicRecordDiploma., must be smaller than or equal to 80.');
        }
        if (!is_null($diploma_description) && (mb_strlen($diploma_description) < 1)) {
            throw new \InvalidArgumentException('invalid length for $diploma_description when calling EdFiStudentAcademicRecordDiploma., must be bigger than or equal to 1.');
        }

        $this->container['diploma_description'] = $diploma_description;

        return $this;
    }

    /**
     * Gets evidence_statement
     *
     * @return string|null
     */
    public function getEvidenceStatement()
    {
        return $this->container['evidence_statement'];
    }

    /**
     * Sets evidence_statement
     *
     * @param string|null $evidence_statement A statement or reference describing the evidence that the individual met the criteria for attainment of the achievement/award.
     *
     * @return self
     */
    public function setEvidenceStatement($evidence_statement)
    {
        if (!is_null($evidence_statement) && (mb_strlen($evidence_statement) > 150)) {
            throw new \InvalidArgumentException('invalid length for $evidence_statement when calling EdFiStudentAcademicRecordDiploma., must be smaller than or equal to 150.');
        }
        if (!is_null($evidence_statement) && (mb_strlen($evidence_statement) < 1)) {
            throw new \InvalidArgumentException('invalid length for $evidence_statement when calling EdFiStudentAcademicRecordDiploma., must be bigger than or equal to 1.');
        }

        $this->container['evidence_statement'] = $evidence_statement;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string|null $image_url The Uniform Resource Locator (URL) for the unique address of an image representing an award or badge associated with the achievement/award.
     *
     * @return self
     */
    public function setImageUrl($image_url)
    {
        if (!is_null($image_url) && (mb_strlen($image_url) > 255)) {
            throw new \InvalidArgumentException('invalid length for $image_url when calling EdFiStudentAcademicRecordDiploma., must be smaller than or equal to 255.');
        }
        if (!is_null($image_url) && (mb_strlen($image_url) < 5)) {
            throw new \InvalidArgumentException('invalid length for $image_url when calling EdFiStudentAcademicRecordDiploma., must be bigger than or equal to 5.');
        }

        $this->container['image_url'] = $image_url;

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
     * @param string|null $issuer_name The name of the agent, entity, or institution issuing the element.
     *
     * @return self
     */
    public function setIssuerName($issuer_name)
    {
        if (!is_null($issuer_name) && (mb_strlen($issuer_name) > 150)) {
            throw new \InvalidArgumentException('invalid length for $issuer_name when calling EdFiStudentAcademicRecordDiploma., must be smaller than or equal to 150.');
        }
        if (!is_null($issuer_name) && (mb_strlen($issuer_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $issuer_name when calling EdFiStudentAcademicRecordDiploma., must be bigger than or equal to 1.');
        }

        $this->container['issuer_name'] = $issuer_name;

        return $this;
    }

    /**
     * Gets issuer_origin_url
     *
     * @return string|null
     */
    public function getIssuerOriginUrl()
    {
        return $this->container['issuer_origin_url'];
    }

    /**
     * Sets issuer_origin_url
     *
     * @param string|null $issuer_origin_url The Uniform Resource Locator (URL) from which the award was issued.
     *
     * @return self
     */
    public function setIssuerOriginUrl($issuer_origin_url)
    {
        if (!is_null($issuer_origin_url) && (mb_strlen($issuer_origin_url) > 255)) {
            throw new \InvalidArgumentException('invalid length for $issuer_origin_url when calling EdFiStudentAcademicRecordDiploma., must be smaller than or equal to 255.');
        }
        if (!is_null($issuer_origin_url) && (mb_strlen($issuer_origin_url) < 5)) {
            throw new \InvalidArgumentException('invalid length for $issuer_origin_url when calling EdFiStudentAcademicRecordDiploma., must be bigger than or equal to 5.');
        }

        $this->container['issuer_origin_url'] = $issuer_origin_url;

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


