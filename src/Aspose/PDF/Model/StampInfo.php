<?php
/**
 *
 * Copyright (c) 2025 Aspose.PDF Cloud
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
 * StampInfo Class 
 *
 * @category Class
 * @description Provides stamp info.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;
use \Aspose\PDF\ObjectSerializer;

class StampInfo extends LinkElement 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StampInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'index_on_page' => 'int',
        'page_index' => 'int',
        'rect' => '\Aspose\PDF\Model\Rectangle',
        'text' => 'string',
        'visible' => 'bool',
        'stamp_type' => '\Aspose\PDF\Model\StampType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'index_on_page' => 'int32',
        'page_index' => 'int32',
        'rect' => null,
        'text' => null,
        'visible' => null,
        'stamp_type' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'Id',
        'index_on_page' => 'IndexOnPage',
        'page_index' => 'PageIndex',
        'rect' => 'Rect',
        'text' => 'Text',
        'visible' => 'Visible',
        'stamp_type' => 'StampType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'index_on_page' => 'setIndexOnPage',
        'page_index' => 'setPageIndex',
        'rect' => 'setRect',
        'text' => 'setText',
        'visible' => 'setVisible',
        'stamp_type' => 'setStampType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'index_on_page' => 'getIndexOnPage',
        'page_index' => 'getPageIndex',
        'rect' => 'getRect',
        'text' => 'getText',
        'visible' => 'getVisible',
        'stamp_type' => 'getStampType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['index_on_page'] = isset($data['index_on_page']) ? $data['index_on_page'] : null;
        $this->container['page_index'] = isset($data['page_index']) ? $data['page_index'] : null;
        $this->container['rect'] = isset($data['rect']) ? $data['rect'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
        $this->container['stamp_type'] = isset($data['stamp_type']) ? $data['stamp_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['stamp_type'] === null) {
            $invalidProperties[] = "'stamp_type' can't be null";
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
        if (!parent::valid()) {
            return false;
        }

        if ($this->container['stamp_type'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Gets ID of the stamp.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets index_on_page
     *
     * @return int
     */
    public function getIndexOnPage()
    {
        return $this->container['index_on_page'];
    }

    /**
     * Sets index_on_page
     *
     * @param int $index_on_page Gets index on page of the stamp.
     *
     * @return $this
     */
    public function setIndexOnPage($index_on_page)
    {
        $this->container['index_on_page'] = $index_on_page;

        return $this;
    }

    /**
     * Gets page_index
     *
     * @return int
     */
    public function getPageIndex()
    {
        return $this->container['page_index'];
    }

    /**
     * Sets page_index
     *
     * @param int $page_index Gets PageIndex of the annotation.
     *
     * @return $this
     */
    public function setPageIndex($page_index)
    {
        $this->container['page_index'] = $page_index;

        return $this;
    }

    /**
     * Gets rect
     *
     * @return \Aspose\PDF\Model\Rectangle
     */
    public function getRect()
    {
        return $this->container['rect'];
    }

    /**
     * Sets rect
     *
     * @param \Aspose\PDF\Model\Rectangle $rect Gets Rect of the annotation.
     *
     * @return $this
     */
    public function setRect($rect)
    {
        $this->container['rect'] = $rect;

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
     * @param string $text Get the text content.
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets visible
     *
     * @return bool
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     *
     * @param bool $visible Gets the stamp is visible.
     *
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

        return $this;
    }

    /**
     * Gets stamp_type
     *
     * @return \Aspose\PDF\Model\StampType
     */
    public function getStampType()
    {
        return $this->container['stamp_type'];
    }

    /**
     * Sets stamp_type
     *
     * @param \Aspose\PDF\Model\StampType $stamp_type Gets stamp type.
     *
     * @return $this
     */
    public function setStampType($stamp_type)
    {
        $this->container['stamp_type'] = $stamp_type;

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


