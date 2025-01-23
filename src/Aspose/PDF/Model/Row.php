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
 * Row Class 
 *
 * @category Class
 * @description Represents a row of the table.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;

use \ArrayAccess;
use \Aspose\PDF\ObjectSerializer;

class Row implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Row';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'background_color' => '\Aspose\PDF\Model\Color',
        'border' => '\Aspose\PDF\Model\BorderInfo',
        'cells' => '\Aspose\PDF\Model\Cell[]',
        'default_cell_border' => '\Aspose\PDF\Model\BorderInfo',
        'min_row_height' => 'double',
        'fixed_row_height' => 'double',
        'is_in_new_page' => 'bool',
        'is_row_broken' => 'bool',
        'default_cell_text_state' => '\Aspose\PDF\Model\TextState',
        'default_cell_padding' => '\Aspose\PDF\Model\MarginInfo',
        'vertical_alignment' => '\Aspose\PDF\Model\VerticalAlignment'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'background_color' => null,
        'border' => null,
        'cells' => null,
        'default_cell_border' => null,
        'min_row_height' => 'double',
        'fixed_row_height' => 'double',
        'is_in_new_page' => null,
        'is_row_broken' => null,
        'default_cell_text_state' => null,
        'default_cell_padding' => null,
        'vertical_alignment' => null
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
        'background_color' => 'BackgroundColor',
        'border' => 'Border',
        'cells' => 'Cells',
        'default_cell_border' => 'DefaultCellBorder',
        'min_row_height' => 'MinRowHeight',
        'fixed_row_height' => 'FixedRowHeight',
        'is_in_new_page' => 'IsInNewPage',
        'is_row_broken' => 'IsRowBroken',
        'default_cell_text_state' => 'DefaultCellTextState',
        'default_cell_padding' => 'DefaultCellPadding',
        'vertical_alignment' => 'VerticalAlignment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'background_color' => 'setBackgroundColor',
        'border' => 'setBorder',
        'cells' => 'setCells',
        'default_cell_border' => 'setDefaultCellBorder',
        'min_row_height' => 'setMinRowHeight',
        'fixed_row_height' => 'setFixedRowHeight',
        'is_in_new_page' => 'setIsInNewPage',
        'is_row_broken' => 'setIsRowBroken',
        'default_cell_text_state' => 'setDefaultCellTextState',
        'default_cell_padding' => 'setDefaultCellPadding',
        'vertical_alignment' => 'setVerticalAlignment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'background_color' => 'getBackgroundColor',
        'border' => 'getBorder',
        'cells' => 'getCells',
        'default_cell_border' => 'getDefaultCellBorder',
        'min_row_height' => 'getMinRowHeight',
        'fixed_row_height' => 'getFixedRowHeight',
        'is_in_new_page' => 'getIsInNewPage',
        'is_row_broken' => 'getIsRowBroken',
        'default_cell_text_state' => 'getDefaultCellTextState',
        'default_cell_padding' => 'getDefaultCellPadding',
        'vertical_alignment' => 'getVerticalAlignment'
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
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : null;
        $this->container['border'] = isset($data['border']) ? $data['border'] : null;
        $this->container['cells'] = isset($data['cells']) ? $data['cells'] : null;
        $this->container['default_cell_border'] = isset($data['default_cell_border']) ? $data['default_cell_border'] : null;
        $this->container['min_row_height'] = isset($data['min_row_height']) ? $data['min_row_height'] : null;
        $this->container['fixed_row_height'] = isset($data['fixed_row_height']) ? $data['fixed_row_height'] : null;
        $this->container['is_in_new_page'] = isset($data['is_in_new_page']) ? $data['is_in_new_page'] : null;
        $this->container['is_row_broken'] = isset($data['is_row_broken']) ? $data['is_row_broken'] : null;
        $this->container['default_cell_text_state'] = isset($data['default_cell_text_state']) ? $data['default_cell_text_state'] : null;
        $this->container['default_cell_padding'] = isset($data['default_cell_padding']) ? $data['default_cell_padding'] : null;
        $this->container['vertical_alignment'] = isset($data['vertical_alignment']) ? $data['vertical_alignment'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['cells'] === null) {
            $invalidProperties[] = "'cells' can't be null";
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

        if ($this->container['cells'] === null) {
            return false;
        }
        return true;
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
     * @param \Aspose\PDF\Model\Color $background_color Gets or sets the background color.
     *
     * @return $this
     */
    public function setBackgroundColor($background_color)
    {
        $this->container['background_color'] = $background_color;

        return $this;
    }

    /**
     * Gets border
     *
     * @return \Aspose\PDF\Model\BorderInfo
     */
    public function getBorder()
    {
        return $this->container['border'];
    }

    /**
     * Sets border
     *
     * @param \Aspose\PDF\Model\BorderInfo $border Gets or sets the border.
     *
     * @return $this
     */
    public function setBorder($border)
    {
        $this->container['border'] = $border;

        return $this;
    }

    /**
     * Gets cells
     *
     * @return \Aspose\PDF\Model\Cell[]
     */
    public function getCells()
    {
        return $this->container['cells'];
    }

    /**
     * Sets cells
     *
     * @param \Aspose\PDF\Model\Cell[] $cells Sets the cells of the row.
     *
     * @return $this
     */
    public function setCells($cells)
    {
        $this->container['cells'] = $cells;

        return $this;
    }

    /**
     * Gets default_cell_border
     *
     * @return \Aspose\PDF\Model\BorderInfo
     */
    public function getDefaultCellBorder()
    {
        return $this->container['default_cell_border'];
    }

    /**
     * Sets default_cell_border
     *
     * @param \Aspose\PDF\Model\BorderInfo $default_cell_border Gets default cell border;
     *
     * @return $this
     */
    public function setDefaultCellBorder($default_cell_border)
    {
        $this->container['default_cell_border'] = $default_cell_border;

        return $this;
    }

    /**
     * Gets min_row_height
     *
     * @return double
     */
    public function getMinRowHeight()
    {
        return $this->container['min_row_height'];
    }

    /**
     * Sets min_row_height
     *
     * @param double $min_row_height Gets height for row;
     *
     * @return $this
     */
    public function setMinRowHeight($min_row_height)
    {
        $this->container['min_row_height'] = $min_row_height;

        return $this;
    }

    /**
     * Gets fixed_row_height
     *
     * @return double
     */
    public function getFixedRowHeight()
    {
        return $this->container['fixed_row_height'];
    }

    /**
     * Sets fixed_row_height
     *
     * @param double $fixed_row_height Gets fixed row height - row may have fixed height;
     *
     * @return $this
     */
    public function setFixedRowHeight($fixed_row_height)
    {
        $this->container['fixed_row_height'] = $fixed_row_height;

        return $this;
    }

    /**
     * Gets is_in_new_page
     *
     * @return bool
     */
    public function getIsInNewPage()
    {
        return $this->container['is_in_new_page'];
    }

    /**
     * Sets is_in_new_page
     *
     * @param bool $is_in_new_page Gets fixed row is in new page - page with this property should be printed to next page Default false;
     *
     * @return $this
     */
    public function setIsInNewPage($is_in_new_page)
    {
        $this->container['is_in_new_page'] = $is_in_new_page;

        return $this;
    }

    /**
     * Gets is_row_broken
     *
     * @return bool
     */
    public function getIsRowBroken()
    {
        return $this->container['is_row_broken'];
    }

    /**
     * Sets is_row_broken
     *
     * @param bool $is_row_broken Gets is row can be broken between two pages
     *
     * @return $this
     */
    public function setIsRowBroken($is_row_broken)
    {
        $this->container['is_row_broken'] = $is_row_broken;

        return $this;
    }

    /**
     * Gets default_cell_text_state
     *
     * @return \Aspose\PDF\Model\TextState
     */
    public function getDefaultCellTextState()
    {
        return $this->container['default_cell_text_state'];
    }

    /**
     * Sets default_cell_text_state
     *
     * @param \Aspose\PDF\Model\TextState $default_cell_text_state Gets or sets default text state for row cells
     *
     * @return $this
     */
    public function setDefaultCellTextState($default_cell_text_state)
    {
        $this->container['default_cell_text_state'] = $default_cell_text_state;

        return $this;
    }

    /**
     * Gets default_cell_padding
     *
     * @return \Aspose\PDF\Model\MarginInfo
     */
    public function getDefaultCellPadding()
    {
        return $this->container['default_cell_padding'];
    }

    /**
     * Sets default_cell_padding
     *
     * @param \Aspose\PDF\Model\MarginInfo $default_cell_padding Gets or sets default margin for row cells
     *
     * @return $this
     */
    public function setDefaultCellPadding($default_cell_padding)
    {
        $this->container['default_cell_padding'] = $default_cell_padding;

        return $this;
    }

    /**
     * Gets vertical_alignment
     *
     * @return \Aspose\PDF\Model\VerticalAlignment
     */
    public function getVerticalAlignment()
    {
        return $this->container['vertical_alignment'];
    }

    /**
     * Sets vertical_alignment
     *
     * @param \Aspose\PDF\Model\VerticalAlignment $vertical_alignment Gets or sets the vertical alignment.
     *
     * @return $this
     */
    public function setVerticalAlignment($vertical_alignment)
    {
        $this->container['vertical_alignment'] = $vertical_alignment;

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


