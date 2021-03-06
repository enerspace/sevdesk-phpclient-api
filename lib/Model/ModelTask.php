<?php
/**
 * ModelTask
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
 * ModelTask Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ModelTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Model_Task';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'create' => '\DateTime',
        'update' => '\DateTime',
        'name' => 'string',
        'assigned' => '\Swagger\Client\Model\ModelSevUser',
        'object' => 'object',
        'deadline' => '\DateTime',
        'status' => 'int',
        'category' => '\Swagger\Client\Model\ModelCategory',
        'done' => '\DateTime',
        'create_user' => '\Swagger\Client\Model\ModelSevUser',
        'done_user' => '\Swagger\Client\Model\ModelSevUser',
        'notice_creator' => 'bool',
        'sev_client' => 'object',
        'begin' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'create' => 'date-time',
        'update' => 'date-time',
        'name' => null,
        'assigned' => null,
        'object' => null,
        'deadline' => 'date-time',
        'status' => null,
        'category' => null,
        'done' => 'date-time',
        'create_user' => null,
        'done_user' => null,
        'notice_creator' => null,
        'sev_client' => null,
        'begin' => 'date-time'
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
        'create' => 'create',
        'update' => 'update',
        'name' => 'name',
        'assigned' => 'assigned',
        'object' => 'object',
        'deadline' => 'deadline',
        'status' => 'status',
        'category' => 'category',
        'done' => 'done',
        'create_user' => 'createUser',
        'done_user' => 'doneUser',
        'notice_creator' => 'noticeCreator',
        'sev_client' => 'sevClient',
        'begin' => 'begin'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'create' => 'setCreate',
        'update' => 'setUpdate',
        'name' => 'setName',
        'assigned' => 'setAssigned',
        'object' => 'setObject',
        'deadline' => 'setDeadline',
        'status' => 'setStatus',
        'category' => 'setCategory',
        'done' => 'setDone',
        'create_user' => 'setCreateUser',
        'done_user' => 'setDoneUser',
        'notice_creator' => 'setNoticeCreator',
        'sev_client' => 'setSevClient',
        'begin' => 'setBegin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'create' => 'getCreate',
        'update' => 'getUpdate',
        'name' => 'getName',
        'assigned' => 'getAssigned',
        'object' => 'getObject',
        'deadline' => 'getDeadline',
        'status' => 'getStatus',
        'category' => 'getCategory',
        'done' => 'getDone',
        'create_user' => 'getCreateUser',
        'done_user' => 'getDoneUser',
        'notice_creator' => 'getNoticeCreator',
        'sev_client' => 'getSevClient',
        'begin' => 'getBegin'
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
        $this->container['create'] = isset($data['create']) ? $data['create'] : null;
        $this->container['update'] = isset($data['update']) ? $data['update'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['assigned'] = isset($data['assigned']) ? $data['assigned'] : null;
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
        $this->container['deadline'] = isset($data['deadline']) ? $data['deadline'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['done'] = isset($data['done']) ? $data['done'] : null;
        $this->container['create_user'] = isset($data['create_user']) ? $data['create_user'] : null;
        $this->container['done_user'] = isset($data['done_user']) ? $data['done_user'] : null;
        $this->container['notice_creator'] = isset($data['notice_creator']) ? $data['notice_creator'] : null;
        $this->container['sev_client'] = isset($data['sev_client']) ? $data['sev_client'] : null;
        $this->container['begin'] = isset($data['begin']) ? $data['begin'] : null;
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
     * Gets create
     *
     * @return \DateTime
     */
    public function getCreate()
    {
        return $this->container['create'];
    }

    /**
     * Sets create
     *
     * @param \DateTime $create the date the task was created
     *
     * @return $this
     */
    public function setCreate($create)
    {
        $this->container['create'] = $create;

        return $this;
    }

    /**
     * Gets update
     *
     * @return \DateTime
     */
    public function getUpdate()
    {
        return $this->container['update'];
    }

    /**
     * Sets update
     *
     * @param \DateTime $update date the task was last updated
     *
     * @return $this
     */
    public function setUpdate($update)
    {
        $this->container['update'] = $update;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name 
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets assigned
     *
     * @return \Swagger\Client\Model\ModelSevUser
     */
    public function getAssigned()
    {
        return $this->container['assigned'];
    }

    /**
     * Sets assigned
     *
     * @param \Swagger\Client\Model\ModelSevUser $assigned the sevDesk user who is assigned to the task
     *
     * @return $this
     */
    public function setAssigned($assigned)
    {
        $this->container['assigned'] = $assigned;

        return $this;
    }

    /**
     * Gets object
     *
     * @return object
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param object $object can be a contact, invoice, etc to which the task refers to
     *
     * @return $this
     */
    public function setObject($object)
    {
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets deadline
     *
     * @return \DateTime
     */
    public function getDeadline()
    {
        return $this->container['deadline'];
    }

    /**
     * Sets deadline
     *
     * @param \DateTime $deadline 
     *
     * @return $this
     */
    public function setDeadline($deadline)
    {
        $this->container['deadline'] = $deadline;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status 
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets category
     *
     * @return \Swagger\Client\Model\ModelCategory
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \Swagger\Client\Model\ModelCategory $category category of the created task
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets done
     *
     * @return \DateTime
     */
    public function getDone()
    {
        return $this->container['done'];
    }

    /**
     * Sets done
     *
     * @param \DateTime $done 
     *
     * @return $this
     */
    public function setDone($done)
    {
        $this->container['done'] = $done;

        return $this;
    }

    /**
     * Gets create_user
     *
     * @return \Swagger\Client\Model\ModelSevUser
     */
    public function getCreateUser()
    {
        return $this->container['create_user'];
    }

    /**
     * Sets create_user
     *
     * @param \Swagger\Client\Model\ModelSevUser $create_user the SevUser who created the task
     *
     * @return $this
     */
    public function setCreateUser($create_user)
    {
        $this->container['create_user'] = $create_user;

        return $this;
    }

    /**
     * Gets done_user
     *
     * @return \Swagger\Client\Model\ModelSevUser
     */
    public function getDoneUser()
    {
        return $this->container['done_user'];
    }

    /**
     * Sets done_user
     *
     * @param \Swagger\Client\Model\ModelSevUser $done_user the SevUser who completed the task
     *
     * @return $this
     */
    public function setDoneUser($done_user)
    {
        $this->container['done_user'] = $done_user;

        return $this;
    }

    /**
     * Gets notice_creator
     *
     * @return bool
     */
    public function getNoticeCreator()
    {
        return $this->container['notice_creator'];
    }

    /**
     * Sets notice_creator
     *
     * @param bool $notice_creator notice the creator when the task is finished
     *
     * @return $this
     */
    public function setNoticeCreator($notice_creator)
    {
        $this->container['notice_creator'] = $notice_creator;

        return $this;
    }

    /**
     * Gets sev_client
     *
     * @return object
     */
    public function getSevClient()
    {
        return $this->container['sev_client'];
    }

    /**
     * Sets sev_client
     *
     * @param object $sev_client sevClient is the unique id every customer has and is used in nearly all operations
     *
     * @return $this
     */
    public function setSevClient($sev_client)
    {
        $this->container['sev_client'] = $sev_client;

        return $this;
    }

    /**
     * Gets begin
     *
     * @return \DateTime
     */
    public function getBegin()
    {
        return $this->container['begin'];
    }

    /**
     * Sets begin
     *
     * @param \DateTime $begin 
     *
     * @return $this
     */
    public function setBegin($begin)
    {
        $this->container['begin'] = $begin;

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


