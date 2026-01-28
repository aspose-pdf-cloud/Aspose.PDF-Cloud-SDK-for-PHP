<?php
/**
 *
 * Copyright (c) 2026 Aspose.PDF Cloud
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 */


/**
 * DocumentConfig Class 
 *
 * @category Class
 * @description Provides link to DocumentConfig.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;

use \ArrayAccess;
use \Aspose\PDF\ObjectSerializer;

class DocumentConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DocumentConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'display_properties' => '\Aspose\PDF\Model\DisplayProperties',
        'document_properties' => '\Aspose\PDF\Model\DocumentProperties',
        'pages_count' => 'int',
        'default_page_config' => '\Aspose\PDF\Model\DefaultPageConfig'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'display_properties' => null,
        'document_properties' => null,
        'pages_count' => 'int32',
        'default_page_config' => null
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
        'display_properties' => 'DisplayProperties',
        'document_properties' => 'DocumentProperties',
        'pages_count' => 'PagesCount',
        'default_page_config' => 'DefaultPageConfig'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'display_properties' => 'setDisplayProperties',
        'document_properties' => 'setDocumentProperties',
        'pages_count' => 'setPagesCount',
        'default_page_config' => 'setDefaultPageConfig'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'display_properties' => 'getDisplayProperties',
        'document_properties' => 'getDocumentProperties',
        'pages_count' => 'getPagesCount',
        'default_page_config' => 'getDefaultPageConfig'
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
        $this->container['display_properties'] = isset($data['display_properties']) ? $data['display_properties'] : null;
        $this->container['document_properties'] = isset($data['document_properties']) ? $data['document_properties'] : null;
        $this->container['pages_count'] = isset($data['pages_count']) ? $data['pages_count'] : null;
        $this->container['default_page_config'] = isset($data['default_page_config']) ? $data['default_page_config'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pages_count'] === null) {
            $invalidProperties[] = "'pages_count' can't be null";
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

        if ($this->container['pages_count'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets display_properties
     *
     * @return \Aspose\PDF\Model\DisplayProperties
     */
    public function getDisplayProperties()
    {
        return $this->container['display_properties'];
    }

    /**
     * Sets display_properties
     *
     * @param \Aspose\PDF\Model\DisplayProperties $display_properties Sets DisplayProperties of document
     *
     * @return $this
     */
    public function setDisplayProperties($display_properties)
    {
        $this->container['display_properties'] = $display_properties;

        return $this;
    }

    /**
     * Gets document_properties
     *
     * @return \Aspose\PDF\Model\DocumentProperties
     */
    public function getDocumentProperties()
    {
        return $this->container['document_properties'];
    }

    /**
     * Sets document_properties
     *
     * @param \Aspose\PDF\Model\DocumentProperties $document_properties Sets DocumentProperties of document
     *
     * @return $this
     */
    public function setDocumentProperties($document_properties)
    {
        $this->container['document_properties'] = $document_properties;

        return $this;
    }

    /**
     * Gets pages_count
     *
     * @return int
     */
    public function getPagesCount()
    {
        return $this->container['pages_count'];
    }

    /**
     * Sets pages_count
     *
     * @param int $pages_count Sets count of pages for new document. From 1 to 100
     *
     * @return $this
     */
    public function setPagesCount($pages_count)
    {
        $this->container['pages_count'] = $pages_count;

        return $this;
    }

    /**
     * Gets default_page_config
     *
     * @return \Aspose\PDF\Model\DefaultPageConfig
     */
    public function getDefaultPageConfig()
    {
        return $this->container['default_page_config'];
    }

    /**
     * Sets default_page_config
     *
     * @param \Aspose\PDF\Model\DefaultPageConfig $default_page_config Sets default page config for new document
     *
     * @return $this
     */
    public function setDefaultPageConfig($default_page_config)
    {
        $this->container['default_page_config'] = $default_page_config;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    public function offsetGet($offset): mixed
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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


