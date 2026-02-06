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
 * CheckBoxField Class 
 *
 * @category Class
 * @description Provides CheckBoxField.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;
use \Aspose\PDF\ObjectSerializer;

class CheckBoxField extends FormField 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CheckBoxField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allowed_states' => 'string[]',
        'style' => '\Aspose\PDF\Model\BoxStyle',
        'active_state' => 'string',
        'checked' => 'bool',
        'export_value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allowed_states' => null,
        'style' => null,
        'active_state' => null,
        'checked' => null,
        'export_value' => null
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
        'allowed_states' => 'AllowedStates',
        'style' => 'Style',
        'active_state' => 'ActiveState',
        'checked' => 'Checked',
        'export_value' => 'ExportValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allowed_states' => 'setAllowedStates',
        'style' => 'setStyle',
        'active_state' => 'setActiveState',
        'checked' => 'setChecked',
        'export_value' => 'setExportValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allowed_states' => 'getAllowedStates',
        'style' => 'getStyle',
        'active_state' => 'getActiveState',
        'checked' => 'getChecked',
        'export_value' => 'getExportValue'
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

        $this->container['allowed_states'] = isset($data['allowed_states']) ? $data['allowed_states'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
        $this->container['active_state'] = isset($data['active_state']) ? $data['active_state'] : null;
        $this->container['checked'] = isset($data['checked']) ? $data['checked'] : null;
        $this->container['export_value'] = isset($data['export_value']) ? $data['export_value'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['checked'] === null) {
            $invalidProperties[] = "'checked' can't be null";
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

        if ($this->container['checked'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets allowed_states
     *
     * @return string[]
     */
    public function getAllowedStates()
    {
        return $this->container['allowed_states'];
    }

    /**
     * Sets allowed_states
     *
     * @param string[] $allowed_states Returns list of allowed states.
     *
     * @return $this
     */
    public function setAllowedStates($allowed_states)
    {
        $this->container['allowed_states'] = $allowed_states;

        return $this;
    }

    /**
     * Gets style
     *
     * @return \Aspose\PDF\Model\BoxStyle
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style
     *
     * @param \Aspose\PDF\Model\BoxStyle $style Gets or sets style of check box.
     *
     * @return $this
     */
    public function setStyle($style)
    {
        $this->container['style'] = $style;

        return $this;
    }

    /**
     * Gets active_state
     *
     * @return string
     */
    public function getActiveState()
    {
        return $this->container['active_state'];
    }

    /**
     * Sets active_state
     *
     * @param string $active_state Gets or sets current annotation appearance state.
     *
     * @return $this
     */
    public function setActiveState($active_state)
    {
        $this->container['active_state'] = $active_state;

        return $this;
    }

    /**
     * Gets checked
     *
     * @return bool
     */
    public function getChecked()
    {
        return $this->container['checked'];
    }

    /**
     * Sets checked
     *
     * @param bool $checked Gets or sets state of check box.
     *
     * @return $this
     */
    public function setChecked($checked)
    {
        $this->container['checked'] = $checked;

        return $this;
    }

    /**
     * Gets export_value
     *
     * @return string
     */
    public function getExportValue()
    {
        return $this->container['export_value'];
    }

    /**
     * Sets export_value
     *
     * @param string $export_value Gets or sets export value of CheckBox field.
     *
     * @return $this
     */
    public function setExportValue($export_value)
    {
        $this->container['export_value'] = $export_value;

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


