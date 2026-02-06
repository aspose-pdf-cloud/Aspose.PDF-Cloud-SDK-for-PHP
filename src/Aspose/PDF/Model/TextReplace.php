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
 * TextReplace Class 
 *
 * @category Class
 * @description Single text replacement setting.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;

use \ArrayAccess;
use \Aspose\PDF\ObjectSerializer;

class TextReplace implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TextReplace';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'old_value' => 'string',
        'new_value' => 'string',
        'regex' => 'bool',
        'text_state' => '\Aspose\PDF\Model\TextState',
        'rect' => '\Aspose\PDF\Model\Rectangle',
        'center_text_horizontally' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'old_value' => null,
        'new_value' => null,
        'regex' => null,
        'text_state' => null,
        'rect' => null,
        'center_text_horizontally' => null
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
        'old_value' => 'OldValue',
        'new_value' => 'NewValue',
        'regex' => 'Regex',
        'text_state' => 'TextState',
        'rect' => 'Rect',
        'center_text_horizontally' => 'CenterTextHorizontally'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'old_value' => 'setOldValue',
        'new_value' => 'setNewValue',
        'regex' => 'setRegex',
        'text_state' => 'setTextState',
        'rect' => 'setRect',
        'center_text_horizontally' => 'setCenterTextHorizontally'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'old_value' => 'getOldValue',
        'new_value' => 'getNewValue',
        'regex' => 'getRegex',
        'text_state' => 'getTextState',
        'rect' => 'getRect',
        'center_text_horizontally' => 'getCenterTextHorizontally'
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
        $this->container['old_value'] = isset($data['old_value']) ? $data['old_value'] : null;
        $this->container['new_value'] = isset($data['new_value']) ? $data['new_value'] : null;
        $this->container['regex'] = isset($data['regex']) ? $data['regex'] : null;
        $this->container['text_state'] = isset($data['text_state']) ? $data['text_state'] : null;
        $this->container['rect'] = isset($data['rect']) ? $data['rect'] : null;
        $this->container['center_text_horizontally'] = isset($data['center_text_horizontally']) ? $data['center_text_horizontally'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['old_value'] === null) {
            $invalidProperties[] = "'old_value' can't be null";
        }
        if ((strlen($this->container['old_value']) < 1)) {
            $invalidProperties[] = "invalid value for 'old_value', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['regex'] === null) {
            $invalidProperties[] = "'regex' can't be null";
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

        if ($this->container['old_value'] === null) {
            return false;
        }
        if (strlen($this->container['old_value']) < 1) {
            return false;
        }
        if ($this->container['regex'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets old_value
     *
     * @return string
     */
    public function getOldValue()
    {
        return $this->container['old_value'];
    }

    /**
     * Sets old_value
     *
     * @param string $old_value Original text.
     *
     * @return $this
     */
    public function setOldValue($old_value)
    {

        if ((strlen($old_value) < 1)) {
            throw new \InvalidArgumentException('invalid length for $old_value when calling TextReplace., must be bigger than or equal to 1.');
        }

        $this->container['old_value'] = $old_value;

        return $this;
    }

    /**
     * Gets new_value
     *
     * @return string
     */
    public function getNewValue()
    {
        return $this->container['new_value'];
    }

    /**
     * Sets new_value
     *
     * @param string $new_value New text.
     *
     * @return $this
     */
    public function setNewValue($new_value)
    {
        $this->container['new_value'] = $new_value;

        return $this;
    }

    /**
     * Gets regex
     *
     * @return bool
     */
    public function getRegex()
    {
        return $this->container['regex'];
    }

    /**
     * Sets regex
     *
     * @param bool $regex Gets or sets a value indicating whether search text is regular expression.
     *
     * @return $this
     */
    public function setRegex($regex)
    {
        $this->container['regex'] = $regex;

        return $this;
    }

    /**
     * Gets text_state
     *
     * @return \Aspose\PDF\Model\TextState
     */
    public function getTextState()
    {
        return $this->container['text_state'];
    }

    /**
     * Sets text_state
     *
     * @param \Aspose\PDF\Model\TextState $text_state Text properties of a new text.
     *
     * @return $this
     */
    public function setTextState($text_state)
    {
        $this->container['text_state'] = $text_state;

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
     * @param \Aspose\PDF\Model\Rectangle $rect Rectangle area where searched original text.
     *
     * @return $this
     */
    public function setRect($rect)
    {
        $this->container['rect'] = $rect;

        return $this;
    }

    /**
     * Gets center_text_horizontally
     *
     * @return bool
     */
    public function getCenterTextHorizontally()
    {
        return $this->container['center_text_horizontally'];
    }

    /**
     * Sets center_text_horizontally
     *
     * @param bool $center_text_horizontally The text after replacement is centered horizontally relative to the text being replaced.
     *
     * @return $this
     */
    public function setCenterTextHorizontally($center_text_horizontally)
    {
        $this->container['center_text_horizontally'] = $center_text_horizontally;

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


