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
 * TextState Class 
 *
 * @category Class
 * @description Represents a text state of a text
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;

use \ArrayAccess;
use \Aspose\PDF\ObjectSerializer;

class TextState implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TextState';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'font_size' => 'double',
        'font' => 'string',
        'foreground_color' => '\Aspose\PDF\Model\Color',
        'background_color' => '\Aspose\PDF\Model\Color',
        'font_style' => '\Aspose\PDF\Model\FontStyles',
        'font_file' => 'string',
        'underline' => 'bool',
        'strike_out' => 'bool',
        'superscript' => 'bool',
        'subscript' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'font_size' => 'double',
        'font' => null,
        'foreground_color' => null,
        'background_color' => null,
        'font_style' => null,
        'font_file' => null,
        'underline' => null,
        'strike_out' => null,
        'superscript' => null,
        'subscript' => null
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
        'font_size' => 'FontSize',
        'font' => 'Font',
        'foreground_color' => 'ForegroundColor',
        'background_color' => 'BackgroundColor',
        'font_style' => 'FontStyle',
        'font_file' => 'FontFile',
        'underline' => 'Underline',
        'strike_out' => 'StrikeOut',
        'superscript' => 'Superscript',
        'subscript' => 'Subscript'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'font_size' => 'setFontSize',
        'font' => 'setFont',
        'foreground_color' => 'setForegroundColor',
        'background_color' => 'setBackgroundColor',
        'font_style' => 'setFontStyle',
        'font_file' => 'setFontFile',
        'underline' => 'setUnderline',
        'strike_out' => 'setStrikeOut',
        'superscript' => 'setSuperscript',
        'subscript' => 'setSubscript'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'font_size' => 'getFontSize',
        'font' => 'getFont',
        'foreground_color' => 'getForegroundColor',
        'background_color' => 'getBackgroundColor',
        'font_style' => 'getFontStyle',
        'font_file' => 'getFontFile',
        'underline' => 'getUnderline',
        'strike_out' => 'getStrikeOut',
        'superscript' => 'getSuperscript',
        'subscript' => 'getSubscript'
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
        $this->container['font_size'] = isset($data['font_size']) ? $data['font_size'] : null;
        $this->container['font'] = isset($data['font']) ? $data['font'] : null;
        $this->container['foreground_color'] = isset($data['foreground_color']) ? $data['foreground_color'] : null;
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : null;
        $this->container['font_style'] = isset($data['font_style']) ? $data['font_style'] : null;
        $this->container['font_file'] = isset($data['font_file']) ? $data['font_file'] : null;
        $this->container['underline'] = isset($data['underline']) ? $data['underline'] : null;
        $this->container['strike_out'] = isset($data['strike_out']) ? $data['strike_out'] : null;
        $this->container['superscript'] = isset($data['superscript']) ? $data['superscript'] : null;
        $this->container['subscript'] = isset($data['subscript']) ? $data['subscript'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['font_size'] === null) {
            $invalidProperties[] = "'font_size' can't be null";
        }
        if ($this->container['font_style'] === null) {
            $invalidProperties[] = "'font_style' can't be null";
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

        if ($this->container['font_size'] === null) {
            return false;
        }
        if ($this->container['font_style'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets font_size
     *
     * @return double
     */
    public function getFontSize()
    {
        return $this->container['font_size'];
    }

    /**
     * Sets font_size
     *
     * @param double $font_size Gets or sets font size of the text.
     *
     * @return $this
     */
    public function setFontSize($font_size)
    {
        $this->container['font_size'] = $font_size;

        return $this;
    }

    /**
     * Gets font
     *
     * @return string
     */
    public function getFont()
    {
        return $this->container['font'];
    }

    /**
     * Sets font
     *
     * @param string $font Gets or sets font name of the text.
     *
     * @return $this
     */
    public function setFont($font)
    {
        $this->container['font'] = $font;

        return $this;
    }

    /**
     * Gets foreground_color
     *
     * @return \Aspose\PDF\Model\Color
     */
    public function getForegroundColor()
    {
        return $this->container['foreground_color'];
    }

    /**
     * Sets foreground_color
     *
     * @param \Aspose\PDF\Model\Color $foreground_color Gets or sets foreground color of the text.
     *
     * @return $this
     */
    public function setForegroundColor($foreground_color)
    {
        $this->container['foreground_color'] = $foreground_color;

        return $this;
    }

    /**
     * Gets background_color
     *
     * @return \Aspose\PDF\Model\Color
     */
    public function getBackgroundColor()
    {
        return $this->container['background_color'];
    }

    /**
     * Sets background_color
     *
     * @param \Aspose\PDF\Model\Color $background_color Sets background color of the text.
     *
     * @return $this
     */
    public function setBackgroundColor($background_color)
    {
        $this->container['background_color'] = $background_color;

        return $this;
    }

    /**
     * Gets font_style
     *
     * @return \Aspose\PDF\Model\FontStyles
     */
    public function getFontStyle()
    {
        return $this->container['font_style'];
    }

    /**
     * Sets font_style
     *
     * @param \Aspose\PDF\Model\FontStyles $font_style Sets font style of the text.
     *
     * @return $this
     */
    public function setFontStyle($font_style)
    {
        $this->container['font_style'] = $font_style;

        return $this;
    }

    /**
     * Gets font_file
     *
     * @return string
     */
    public function getFontFile()
    {
        return $this->container['font_file'];
    }

    /**
     * Sets font_file
     *
     * @param string $font_file Sets path of font file in storage.
     *
     * @return $this
     */
    public function setFontFile($font_file)
    {
        $this->container['font_file'] = $font_file;

        return $this;
    }

    /**
     * Gets underline
     *
     * @return bool
     */
    public function getUnderline()
    {
        return $this->container['underline'];
    }

    /**
     * Sets underline
     *
     * @param bool $underline Gets or sets underline of the text.
     *
     * @return $this
     */
    public function setUnderline($underline)
    {
        $this->container['underline'] = $underline;

        return $this;
    }

    /**
     * Gets strike_out
     *
     * @return bool
     */
    public function getStrikeOut()
    {
        return $this->container['strike_out'];
    }

    /**
     * Sets strike_out
     *
     * @param bool $strike_out Gets or sets strikeout of the text.
     *
     * @return $this
     */
    public function setStrikeOut($strike_out)
    {
        $this->container['strike_out'] = $strike_out;

        return $this;
    }

    /**
     * Gets superscript
     *
     * @return bool
     */
    public function getSuperscript()
    {
        return $this->container['superscript'];
    }

    /**
     * Sets superscript
     *
     * @param bool $superscript Gets or sets superscript mode of the text.
     *
     * @return $this
     */
    public function setSuperscript($superscript)
    {
        $this->container['superscript'] = $superscript;

        return $this;
    }

    /**
     * Gets subscript
     *
     * @return bool
     */
    public function getSubscript()
    {
        return $this->container['subscript'];
    }

    /**
     * Sets subscript
     *
     * @param bool $subscript Gets or sets subscript mode of the text.
     *
     * @return $this
     */
    public function setSubscript($subscript)
    {
        $this->container['subscript'] = $subscript;

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


