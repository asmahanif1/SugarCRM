<?php
/**
 * Contact
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;
use DocuSign\eSign\ObjectSerializer;

/**
 * Contact Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Contact implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'contact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cloud_provider' => '?string',
        'cloud_provider_container_id' => '?string',
        'contact_id' => '?string',
        'contact_phone_numbers' => '\DocuSign\eSign\Model\ContactPhoneNumber[]',
        'contact_uri' => '?string',
        'emails' => '?string[]',
        'error_details' => '\DocuSign\eSign\Model\ErrorDetails',
        'is_owner' => '?bool',
        'name' => '?string',
        'organization' => '?string',
        'room_contact_type' => '?string',
        'shared' => '?string',
        'signing_group' => '?string',
        'signing_group_name' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cloud_provider' => null,
        'cloud_provider_container_id' => null,
        'contact_id' => null,
        'contact_phone_numbers' => null,
        'contact_uri' => null,
        'emails' => null,
        'error_details' => null,
        'is_owner' => null,
        'name' => null,
        'organization' => null,
        'room_contact_type' => null,
        'shared' => null,
        'signing_group' => null,
        'signing_group_name' => null
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
        'cloud_provider' => 'cloudProvider',
        'cloud_provider_container_id' => 'cloudProviderContainerId',
        'contact_id' => 'contactId',
        'contact_phone_numbers' => 'contactPhoneNumbers',
        'contact_uri' => 'contactUri',
        'emails' => 'emails',
        'error_details' => 'errorDetails',
        'is_owner' => 'isOwner',
        'name' => 'name',
        'organization' => 'organization',
        'room_contact_type' => 'roomContactType',
        'shared' => 'shared',
        'signing_group' => 'signingGroup',
        'signing_group_name' => 'signingGroupName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cloud_provider' => 'setCloudProvider',
        'cloud_provider_container_id' => 'setCloudProviderContainerId',
        'contact_id' => 'setContactId',
        'contact_phone_numbers' => 'setContactPhoneNumbers',
        'contact_uri' => 'setContactUri',
        'emails' => 'setEmails',
        'error_details' => 'setErrorDetails',
        'is_owner' => 'setIsOwner',
        'name' => 'setName',
        'organization' => 'setOrganization',
        'room_contact_type' => 'setRoomContactType',
        'shared' => 'setShared',
        'signing_group' => 'setSigningGroup',
        'signing_group_name' => 'setSigningGroupName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cloud_provider' => 'getCloudProvider',
        'cloud_provider_container_id' => 'getCloudProviderContainerId',
        'contact_id' => 'getContactId',
        'contact_phone_numbers' => 'getContactPhoneNumbers',
        'contact_uri' => 'getContactUri',
        'emails' => 'getEmails',
        'error_details' => 'getErrorDetails',
        'is_owner' => 'getIsOwner',
        'name' => 'getName',
        'organization' => 'getOrganization',
        'room_contact_type' => 'getRoomContactType',
        'shared' => 'getShared',
        'signing_group' => 'getSigningGroup',
        'signing_group_name' => 'getSigningGroupName'
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
        $this->container['cloud_provider'] = isset($data['cloud_provider']) ? $data['cloud_provider'] : null;
        $this->container['cloud_provider_container_id'] = isset($data['cloud_provider_container_id']) ? $data['cloud_provider_container_id'] : null;
        $this->container['contact_id'] = isset($data['contact_id']) ? $data['contact_id'] : null;
        $this->container['contact_phone_numbers'] = isset($data['contact_phone_numbers']) ? $data['contact_phone_numbers'] : null;
        $this->container['contact_uri'] = isset($data['contact_uri']) ? $data['contact_uri'] : null;
        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
        $this->container['error_details'] = isset($data['error_details']) ? $data['error_details'] : null;
        $this->container['is_owner'] = isset($data['is_owner']) ? $data['is_owner'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
        $this->container['room_contact_type'] = isset($data['room_contact_type']) ? $data['room_contact_type'] : null;
        $this->container['shared'] = isset($data['shared']) ? $data['shared'] : null;
        $this->container['signing_group'] = isset($data['signing_group']) ? $data['signing_group'] : null;
        $this->container['signing_group_name'] = isset($data['signing_group_name']) ? $data['signing_group_name'] : null;
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
     * Gets cloud_provider
     *
     * @return ?string
     */
    public function getCloudProvider()
    {
        return $this->container['cloud_provider'];
    }

    /**
     * Sets cloud_provider
     *
     * @param ?string $cloud_provider 
     *
     * @return $this
     */
    public function setCloudProvider($cloud_provider)
    {
        $this->container['cloud_provider'] = $cloud_provider;

        return $this;
    }

    /**
     * Gets cloud_provider_container_id
     *
     * @return ?string
     */
    public function getCloudProviderContainerId()
    {
        return $this->container['cloud_provider_container_id'];
    }

    /**
     * Sets cloud_provider_container_id
     *
     * @param ?string $cloud_provider_container_id 
     *
     * @return $this
     */
    public function setCloudProviderContainerId($cloud_provider_container_id)
    {
        $this->container['cloud_provider_container_id'] = $cloud_provider_container_id;

        return $this;
    }

    /**
     * Gets contact_id
     *
     * @return ?string
     */
    public function getContactId()
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     *
     * @param ?string $contact_id 
     *
     * @return $this
     */
    public function setContactId($contact_id)
    {
        $this->container['contact_id'] = $contact_id;

        return $this;
    }

    /**
     * Gets contact_phone_numbers
     *
     * @return \DocuSign\eSign\Model\ContactPhoneNumber[]
     */
    public function getContactPhoneNumbers()
    {
        return $this->container['contact_phone_numbers'];
    }

    /**
     * Sets contact_phone_numbers
     *
     * @param \DocuSign\eSign\Model\ContactPhoneNumber[] $contact_phone_numbers 
     *
     * @return $this
     */
    public function setContactPhoneNumbers($contact_phone_numbers)
    {
        $this->container['contact_phone_numbers'] = $contact_phone_numbers;

        return $this;
    }

    /**
     * Gets contact_uri
     *
     * @return ?string
     */
    public function getContactUri()
    {
        return $this->container['contact_uri'];
    }

    /**
     * Sets contact_uri
     *
     * @param ?string $contact_uri 
     *
     * @return $this
     */
    public function setContactUri($contact_uri)
    {
        $this->container['contact_uri'] = $contact_uri;

        return $this;
    }

    /**
     * Gets emails
     *
     * @return ?string[]
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param ?string[] $emails 
     *
     * @return $this
     */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;

        return $this;
    }

    /**
     * Gets error_details
     *
     * @return \DocuSign\eSign\Model\ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->container['error_details'];
    }

    /**
     * Sets error_details
     *
     * @param \DocuSign\eSign\Model\ErrorDetails $error_details error_details
     *
     * @return $this
     */
    public function setErrorDetails($error_details)
    {
        $this->container['error_details'] = $error_details;

        return $this;
    }

    /**
     * Gets is_owner
     *
     * @return ?bool
     */
    public function getIsOwner()
    {
        return $this->container['is_owner'];
    }

    /**
     * Sets is_owner
     *
     * @param ?bool $is_owner 
     *
     * @return $this
     */
    public function setIsOwner($is_owner)
    {
        $this->container['is_owner'] = $is_owner;

        return $this;
    }

    /**
     * Gets name
     *
     * @return ?string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param ?string $name 
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return ?string
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param ?string $organization 
     *
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets room_contact_type
     *
     * @return ?string
     */
    public function getRoomContactType()
    {
        return $this->container['room_contact_type'];
    }

    /**
     * Sets room_contact_type
     *
     * @param ?string $room_contact_type 
     *
     * @return $this
     */
    public function setRoomContactType($room_contact_type)
    {
        $this->container['room_contact_type'] = $room_contact_type;

        return $this;
    }

    /**
     * Gets shared
     *
     * @return ?string
     */
    public function getShared()
    {
        return $this->container['shared'];
    }

    /**
     * Sets shared
     *
     * @param ?string $shared When set to **true**, this custom tab is shared.
     *
     * @return $this
     */
    public function setShared($shared)
    {
        $this->container['shared'] = $shared;

        return $this;
    }

    /**
     * Gets signing_group
     *
     * @return ?string
     */
    public function getSigningGroup()
    {
        return $this->container['signing_group'];
    }

    /**
     * Sets signing_group
     *
     * @param ?string $signing_group 
     *
     * @return $this
     */
    public function setSigningGroup($signing_group)
    {
        $this->container['signing_group'] = $signing_group;

        return $this;
    }

    /**
     * Gets signing_group_name
     *
     * @return ?string
     */
    public function getSigningGroupName()
    {
        return $this->container['signing_group_name'];
    }

    /**
     * Sets signing_group_name
     *
     * @param ?string $signing_group_name The display name for the signing group.   Maximum Length: 100 characters.
     *
     * @return $this
     */
    public function setSigningGroupName($signing_group_name)
    {
        $this->container['signing_group_name'] = $signing_group_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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

