<?php
/**
 * ModelStaticReferralProgram
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * sevDesk
 *
 * # Getting started  The sevDesk API v1 uses a token authentication.    You need to click on the authorization button (lock symbol) and enter your api-key there.    The token can be found on [https://my.sevdesk.de](https://my.sevdesk.de).    settings-->user-->specific user    # General information    The sevDesk api uses **models** to represent the different categories like **contacts** and **invoices**.    Every time you request such a model from the api, it will return the whole model schema including the unique **model id** and all the other objects and parameters that are included in the model.    Have a look at it in the developer console of your desired browser, especially if you are looking for specific parameters like the model id.    # URL    The basic URL contains four elements. **BaseURL** + **Controller** + **Version** + **Model**: [https://my.sevdesk.de/api/v1/Contact/](https://my.sevdesk.de/api/v1/Contact/)    # Basic Operations    Access a list of models: [https://my.sevdesk.de/api/v1/{Model}/](https://my.sevdesk.de/api/v1/{Model}/)    Access a specific model: [https://my.sevdesk.de/api/v1/{Model}/{id}](https://my.sevdesk.de/api/v1/{Model}/{id})    The **id** of a specific model can usually be found in the **developer console** of your browser or when opening a specific model, in the **url**.    Call a model function: [https://my.sevdesk.de/api/v1/{Model}/{id}/{Function}](https://my.sevdesk.de/api/v1/{Model}/{id}/{Function})    Each operation can be used with different HTTP methods:  * GET - read data  * POST - create data  * PUT - update existing data  * DELETE - delete data    # Useful Parameters    For each request, there are some specific parameters.    **GET Query Parameters**  * **limit** - limits the number of entries returned  * **offset** - set the index where the returned entries should start  * **embed** - embed can be used to get some additional information about a model. For example you can get the addresses of a contact with **embed=addresses**    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=addresses`    * If there is a need to get more information about the country in the addresses, embed can be extended by **addresses.country**    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=addresses,addresses.country`    * Some models also contain other models. By default these models are only filled with an id and objectName. If you want to get more information about the nested model you can use embed too.    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=parent`    * Every model also has specified 'query parameters'. These can be used to filter the results. E.g. all Contacts with a 'Company' in their name    `[GET]https://my.sevdesk.de/api/v1/Contact/?name=Company`    * **countAll** If countAll is set to 1 the total number of entries will be returned additionally  * **orderBy** Is an array that can be filled with objects containing the the properties field and arrangement    `json: orderBy = [{field:'parent' ,arrangement:'desc'},{field:'name' ,arrangement:'asc'}];`    `url: ?orderBy[0][field]=parent&orderBy[0][arrangement]=desc&orderBy[1][field]=name&orderBy[1][arrangement]=asc`
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.4
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ModelStaticReferralProgram Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ModelStaticReferralProgram implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Model_StaticReferralProgram';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'headline' => 'string',
        'text' => 'string',
        'reward_amount_lead' => 'float',
        'reward_amount' => 'float',
        'reward_percentage' => 'float',
        'reward_type' => 'string',
        'earning_amount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'headline' => null,
        'text' => null,
        'reward_amount_lead' => 'float',
        'reward_amount' => 'float',
        'reward_percentage' => 'float',
        'reward_type' => null,
        'earning_amount' => 'float'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'headline' => 'headline',
        'text' => 'text',
        'reward_amount_lead' => 'rewardAmountLead',
        'reward_amount' => 'rewardAmount',
        'reward_percentage' => 'rewardPercentage',
        'reward_type' => 'rewardType',
        'earning_amount' => 'earningAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'headline' => 'setHeadline',
        'text' => 'setText',
        'reward_amount_lead' => 'setRewardAmountLead',
        'reward_amount' => 'setRewardAmount',
        'reward_percentage' => 'setRewardPercentage',
        'reward_type' => 'setRewardType',
        'earning_amount' => 'setEarningAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'headline' => 'getHeadline',
        'text' => 'getText',
        'reward_amount_lead' => 'getRewardAmountLead',
        'reward_amount' => 'getRewardAmount',
        'reward_percentage' => 'getRewardPercentage',
        'reward_type' => 'getRewardType',
        'earning_amount' => 'getEarningAmount'
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
        return self::$swaggerModelName;
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
        $this->container['headline'] = isset($data['headline']) ? $data['headline'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['reward_amount_lead'] = isset($data['reward_amount_lead']) ? $data['reward_amount_lead'] : null;
        $this->container['reward_amount'] = isset($data['reward_amount']) ? $data['reward_amount'] : null;
        $this->container['reward_percentage'] = isset($data['reward_percentage']) ? $data['reward_percentage'] : null;
        $this->container['reward_type'] = isset($data['reward_type']) ? $data['reward_type'] : null;
        $this->container['earning_amount'] = isset($data['earning_amount']) ? $data['earning_amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets headline
     *
     * @return string
     */
    public function getHeadline()
    {
        return $this->container['headline'];
    }

    /**
     * Sets headline
     *
     * @param string $headline 
     *
     * @return $this
     */
    public function setHeadline($headline)
    {
        $this->container['headline'] = $headline;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text 
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets reward_amount_lead
     *
     * @return float
     */
    public function getRewardAmountLead()
    {
        return $this->container['reward_amount_lead'];
    }

    /**
     * Sets reward_amount_lead
     *
     * @param float $reward_amount_lead 
     *
     * @return $this
     */
    public function setRewardAmountLead($reward_amount_lead)
    {
        $this->container['reward_amount_lead'] = $reward_amount_lead;

        return $this;
    }

    /**
     * Gets reward_amount
     *
     * @return float
     */
    public function getRewardAmount()
    {
        return $this->container['reward_amount'];
    }

    /**
     * Sets reward_amount
     *
     * @param float $reward_amount 
     *
     * @return $this
     */
    public function setRewardAmount($reward_amount)
    {
        $this->container['reward_amount'] = $reward_amount;

        return $this;
    }

    /**
     * Gets reward_percentage
     *
     * @return float
     */
    public function getRewardPercentage()
    {
        return $this->container['reward_percentage'];
    }

    /**
     * Sets reward_percentage
     *
     * @param float $reward_percentage 
     *
     * @return $this
     */
    public function setRewardPercentage($reward_percentage)
    {
        $this->container['reward_percentage'] = $reward_percentage;

        return $this;
    }

    /**
     * Gets reward_type
     *
     * @return string
     */
    public function getRewardType()
    {
        return $this->container['reward_type'];
    }

    /**
     * Sets reward_type
     *
     * @param string $reward_type 
     *
     * @return $this
     */
    public function setRewardType($reward_type)
    {
        $this->container['reward_type'] = $reward_type;

        return $this;
    }

    /**
     * Gets earning_amount
     *
     * @return float
     */
    public function getEarningAmount()
    {
        return $this->container['earning_amount'];
    }

    /**
     * Sets earning_amount
     *
     * @param float $earning_amount 
     *
     * @return $this
     */
    public function setEarningAmount($earning_amount)
    {
        $this->container['earning_amount'] = $earning_amount;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

