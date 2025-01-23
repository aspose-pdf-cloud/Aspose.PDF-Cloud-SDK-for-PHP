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
 * TextBoxField Class 
 *
 * @category Class
 * @description Provides TextBoxField.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;
use \Aspose\PDF\ObjectSerializer;

class TextBoxField extends FormField 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TextBoxField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'multiline' => 'bool',
        'spell_check' => 'bool',
        'scrollable' => 'bool',
        'force_combs' => 'bool',
        'max_len' => 'int',
        'barcode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'multiline' => null,
        'spell_check' => null,
        'scrollable' => null,
        'force_combs' => null,
        'max_len' => 'int32',
        'barcode' => null
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
        'multiline' => 'Multiline',
        'spell_check' => 'SpellCheck',
        'scrollable' => 'Scrollable',
        'force_combs' => 'ForceCombs',
        'max_len' => 'MaxLen',
        'barcode' => 'Barcode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'multiline' => 'setMultiline',
        'spell_check' => 'setSpellCheck',
        'scrollable' => 'setScrollable',
        'force_combs' => 'setForceCombs',
        'max_len' => 'setMaxLen',
        'barcode' => 'setBarcode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'multiline' => 'getMultiline',
        'spell_check' => 'getSpellCheck',
        'scrollable' => 'getScrollable',
        'force_combs' => 'getForceCombs',
        'max_len' => 'getMaxLen',
        'barcode' => 'getBarcode'
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

        $this->container['multiline'] = isset($data['multiline']) ? $data['multiline'] : null;
        $this->container['spell_check'] = isset($data['spell_check']) ? $data['spell_check'] : null;
        $this->container['scrollable'] = isset($data['scrollable']) ? $data['scrollable'] : null;
        $this->container['force_combs'] = isset($data['force_combs']) ? $data['force_combs'] : null;
        $this->container['max_len'] = isset($data['max_len']) ? $data['max_len'] : null;
        $this->container['barcode'] = isset($data['barcode']) ? $data['barcode'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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

        return true;
    }


    /**
     * Gets multiline
     *
     * @return bool
     */
    public function getMultiline()
    {
        return $this->container['multiline'];
    }

    /**
     * Sets multiline
     *
     * @param bool $multiline Gets or sets multiline flag of the field. If Multiline is true field can contain multiple lines of text.
     *
     * @return $this
     */
    public function setMultiline($multiline)
    {
        $this->container['multiline'] = $multiline;

        return $this;
    }

    /**
     * Gets spell_check
     *
     * @return bool
     */
    public function getSpellCheck()
    {
        return $this->container['spell_check'];
    }

    /**
     * Sets spell_check
     *
     * @param bool $spell_check Gets or sets spellcheck flag for field. If true field shall be spell checked.
     *
     * @return $this
     */
    public function setSpellCheck($spell_check)
    {
        $this->container['spell_check'] = $spell_check;

        return $this;
    }

    /**
     * Gets scrollable
     *
     * @return bool
     */
    public function getScrollable()
    {
        return $this->container['scrollable'];
    }

    /**
     * Sets scrollable
     *
     * @param bool $scrollable Gets or sets scrollable flag of field. If true field can be scrolled.
     *
     * @return $this
     */
    public function setScrollable($scrollable)
    {
        $this->container['scrollable'] = $scrollable;

        return $this;
    }

    /**
     * Gets force_combs
     *
     * @return bool
     */
    public function getForceCombs()
    {
        return $this->container['force_combs'];
    }

    /**
     * Sets force_combs
     *
     * @param bool $force_combs Gets or sets flag which indicates is field divided into spaced positions.
     *
     * @return $this
     */
    public function setForceCombs($force_combs)
    {
        $this->container['force_combs'] = $force_combs;

        return $this;
    }

    /**
     * Gets max_len
     *
     * @return int
     */
    public function getMaxLen()
    {
        return $this->container['max_len'];
    }

    /**
     * Sets max_len
     *
     * @param int $max_len Gets or sets maximum length of text in the field.
     *
     * @return $this
     */
    public function setMaxLen($max_len)
    {
        $this->container['max_len'] = $max_len;

        return $this;
    }

    /**
     * Gets barcode
     *
     * @return string
     */
    public function getBarcode()
    {
        return $this->container['barcode'];
    }

    /**
     * Sets barcode
     *
     * @param string $barcode Adds barcode 128 into the field. Field value will be changed onto the code and field become read only.
     *
     * @return $this
     */
    public function setBarcode($barcode)
    {
        $this->container['barcode'] = $barcode;

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


