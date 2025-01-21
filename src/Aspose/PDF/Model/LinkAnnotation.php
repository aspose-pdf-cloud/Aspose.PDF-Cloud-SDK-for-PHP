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
 * LinkAnnotation Class 
 *
 * @category Class
 * @description Provides link to linkAnnotation.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;
use \Aspose\PDF\ObjectSerializer;

class LinkAnnotation extends LinkElement 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LinkAnnotation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'action_type' => '\Aspose\PDF\Model\LinkActionType',
        'action' => 'string',
        'highlighting' => '\Aspose\PDF\Model\LinkHighlightingMode',
        'color' => '\Aspose\PDF\Model\Color',
        'rect' => '\Aspose\PDF\Model\Rectangle',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'action_type' => null,
        'action' => null,
        'highlighting' => null,
        'color' => null,
        'rect' => null,
        'id' => null
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
        'action_type' => 'ActionType',
        'action' => 'Action',
        'highlighting' => 'Highlighting',
        'color' => 'Color',
        'rect' => 'Rect',
        'id' => 'Id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action_type' => 'setActionType',
        'action' => 'setAction',
        'highlighting' => 'setHighlighting',
        'color' => 'setColor',
        'rect' => 'setRect',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action_type' => 'getActionType',
        'action' => 'getAction',
        'highlighting' => 'getHighlighting',
        'color' => 'getColor',
        'rect' => 'getRect',
        'id' => 'getId'
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

        $this->container['action_type'] = isset($data['action_type']) ? $data['action_type'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['highlighting'] = isset($data['highlighting']) ? $data['highlighting'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['rect'] = isset($data['rect']) ? $data['rect'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['action_type'] === null) {
            $invalidProperties[] = "'action_type' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ((strlen($this->container['action']) < 1)) {
            $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['highlighting'] === null) {
            $invalidProperties[] = "'highlighting' can't be null";
        }
        if ($this->container['rect'] === null) {
            $invalidProperties[] = "'rect' can't be null";
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

        if ($this->container['action_type'] === null) {
            return false;
        }
        if ($this->container['action'] === null) {
            return false;
        }
        if (strlen($this->container['action']) < 1) {
            return false;
        }
        if ($this->container['highlighting'] === null) {
            return false;
        }
        if ($this->container['rect'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets action_type
     *
     * @return \Aspose\PDF\Model\LinkActionType
     */
    public function getActionType()
    {
        return $this->container['action_type'];
    }

    /**
     * Sets action_type
     *
     * @param \Aspose\PDF\Model\LinkActionType $action_type action_type
     *
     * @return $this
     */
    public function setActionType($action_type)
    {
        $this->container['action_type'] = $action_type;

        return $this;
    }

    /**
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string $action action
     *
     * @return $this
     */
    public function setAction($action)
    {

        if ((strlen($action) < 1)) {
            throw new \InvalidArgumentException('invalid length for $action when calling LinkAnnotation., must be bigger than or equal to 1.');
        }

        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets highlighting
     *
     * @return \Aspose\PDF\Model\LinkHighlightingMode
     */
    public function getHighlighting()
    {
        return $this->container['highlighting'];
    }

    /**
     * Sets highlighting
     *
     * @param \Aspose\PDF\Model\LinkHighlightingMode $highlighting highlighting
     *
     * @return $this
     */
    public function setHighlighting($highlighting)
    {
        $this->container['highlighting'] = $highlighting;

        return $this;
    }

    /**
     * Gets color
     *
     * @return \Aspose\PDF\Model\Color
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param \Aspose\PDF\Model\Color $color color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

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
     * @param \Aspose\PDF\Model\Rectangle $rect rect
     *
     * @return $this
     */
    public function setRect($rect)
    {
        $this->container['rect'] = $rect;

        return $this;
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
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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


