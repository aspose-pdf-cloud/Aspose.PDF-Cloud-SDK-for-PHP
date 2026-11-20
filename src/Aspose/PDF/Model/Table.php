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
 * Table Class 
 *
 * @category Class
 * @description Represents a table that can be added to the page.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;
use \Aspose\PDF\ObjectSerializer;

class Table extends LinkElement 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Table';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'alignment' => '\Aspose\PDF\Model\HorizontalAlignment',
        'horizontal_alignment' => '\Aspose\PDF\Model\HorizontalAlignment',
        'vertical_alignment' => '\Aspose\PDF\Model\VerticalAlignment',
        'top' => 'double',
        'left' => 'double',
        'default_cell_text_state' => '\Aspose\PDF\Model\TextState',
        'default_cell_padding' => '\Aspose\PDF\Model\MarginInfo',
        'border' => '\Aspose\PDF\Model\BorderInfo',
        'margin' => '\Aspose\PDF\Model\MarginInfo',
        'rows' => '\Aspose\PDF\Model\Row[]',
        'default_column_width' => 'string',
        'default_cell_border' => '\Aspose\PDF\Model\BorderInfo',
        'broken' => '\Aspose\PDF\Model\TableBroken',
        'column_widths' => 'string',
        'repeating_rows_count' => 'int',
        'repeating_columns_count' => 'int',
        'repeating_rows_style' => '\Aspose\PDF\Model\TextState',
        'corner_style' => '\Aspose\PDF\Model\BorderCornerStyle',
        'break_text' => '\Aspose\PDF\Model\TextRect',
        'background_color' => '\Aspose\PDF\Model\Color',
        'is_borders_included' => 'bool',
        'column_adjustment' => '\Aspose\PDF\Model\ColumnAdjustment',
        'z_index' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'alignment' => null,
        'horizontal_alignment' => null,
        'vertical_alignment' => null,
        'top' => 'double',
        'left' => 'double',
        'default_cell_text_state' => null,
        'default_cell_padding' => null,
        'border' => null,
        'margin' => null,
        'rows' => null,
        'default_column_width' => null,
        'default_cell_border' => null,
        'broken' => null,
        'column_widths' => null,
        'repeating_rows_count' => 'int32',
        'repeating_columns_count' => 'int32',
        'repeating_rows_style' => null,
        'corner_style' => null,
        'break_text' => null,
        'background_color' => null,
        'is_borders_included' => null,
        'column_adjustment' => null,
        'z_index' => 'int32'
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
        'alignment' => 'Alignment',
        'horizontal_alignment' => 'HorizontalAlignment',
        'vertical_alignment' => 'VerticalAlignment',
        'top' => 'Top',
        'left' => 'Left',
        'default_cell_text_state' => 'DefaultCellTextState',
        'default_cell_padding' => 'DefaultCellPadding',
        'border' => 'Border',
        'margin' => 'Margin',
        'rows' => 'Rows',
        'default_column_width' => 'DefaultColumnWidth',
        'default_cell_border' => 'DefaultCellBorder',
        'broken' => 'Broken',
        'column_widths' => 'ColumnWidths',
        'repeating_rows_count' => 'RepeatingRowsCount',
        'repeating_columns_count' => 'RepeatingColumnsCount',
        'repeating_rows_style' => 'RepeatingRowsStyle',
        'corner_style' => 'CornerStyle',
        'break_text' => 'BreakText',
        'background_color' => 'BackgroundColor',
        'is_borders_included' => 'IsBordersIncluded',
        'column_adjustment' => 'ColumnAdjustment',
        'z_index' => 'ZIndex'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alignment' => 'setAlignment',
        'horizontal_alignment' => 'setHorizontalAlignment',
        'vertical_alignment' => 'setVerticalAlignment',
        'top' => 'setTop',
        'left' => 'setLeft',
        'default_cell_text_state' => 'setDefaultCellTextState',
        'default_cell_padding' => 'setDefaultCellPadding',
        'border' => 'setBorder',
        'margin' => 'setMargin',
        'rows' => 'setRows',
        'default_column_width' => 'setDefaultColumnWidth',
        'default_cell_border' => 'setDefaultCellBorder',
        'broken' => 'setBroken',
        'column_widths' => 'setColumnWidths',
        'repeating_rows_count' => 'setRepeatingRowsCount',
        'repeating_columns_count' => 'setRepeatingColumnsCount',
        'repeating_rows_style' => 'setRepeatingRowsStyle',
        'corner_style' => 'setCornerStyle',
        'break_text' => 'setBreakText',
        'background_color' => 'setBackgroundColor',
        'is_borders_included' => 'setIsBordersIncluded',
        'column_adjustment' => 'setColumnAdjustment',
        'z_index' => 'setZIndex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alignment' => 'getAlignment',
        'horizontal_alignment' => 'getHorizontalAlignment',
        'vertical_alignment' => 'getVerticalAlignment',
        'top' => 'getTop',
        'left' => 'getLeft',
        'default_cell_text_state' => 'getDefaultCellTextState',
        'default_cell_padding' => 'getDefaultCellPadding',
        'border' => 'getBorder',
        'margin' => 'getMargin',
        'rows' => 'getRows',
        'default_column_width' => 'getDefaultColumnWidth',
        'default_cell_border' => 'getDefaultCellBorder',
        'broken' => 'getBroken',
        'column_widths' => 'getColumnWidths',
        'repeating_rows_count' => 'getRepeatingRowsCount',
        'repeating_columns_count' => 'getRepeatingColumnsCount',
        'repeating_rows_style' => 'getRepeatingRowsStyle',
        'corner_style' => 'getCornerStyle',
        'break_text' => 'getBreakText',
        'background_color' => 'getBackgroundColor',
        'is_borders_included' => 'getIsBordersIncluded',
        'column_adjustment' => 'getColumnAdjustment',
        'z_index' => 'getZIndex'
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

        $this->container['alignment'] = isset($data['alignment']) ? $data['alignment'] : null;
        $this->container['horizontal_alignment'] = isset($data['horizontal_alignment']) ? $data['horizontal_alignment'] : null;
        $this->container['vertical_alignment'] = isset($data['vertical_alignment']) ? $data['vertical_alignment'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
        $this->container['left'] = isset($data['left']) ? $data['left'] : null;
        $this->container['default_cell_text_state'] = isset($data['default_cell_text_state']) ? $data['default_cell_text_state'] : null;
        $this->container['default_cell_padding'] = isset($data['default_cell_padding']) ? $data['default_cell_padding'] : null;
        $this->container['border'] = isset($data['border']) ? $data['border'] : null;
        $this->container['margin'] = isset($data['margin']) ? $data['margin'] : null;
        $this->container['rows'] = isset($data['rows']) ? $data['rows'] : null;
        $this->container['default_column_width'] = isset($data['default_column_width']) ? $data['default_column_width'] : null;
        $this->container['default_cell_border'] = isset($data['default_cell_border']) ? $data['default_cell_border'] : null;
        $this->container['broken'] = isset($data['broken']) ? $data['broken'] : null;
        $this->container['column_widths'] = isset($data['column_widths']) ? $data['column_widths'] : null;
        $this->container['repeating_rows_count'] = isset($data['repeating_rows_count']) ? $data['repeating_rows_count'] : null;
        $this->container['repeating_columns_count'] = isset($data['repeating_columns_count']) ? $data['repeating_columns_count'] : null;
        $this->container['repeating_rows_style'] = isset($data['repeating_rows_style']) ? $data['repeating_rows_style'] : null;
        $this->container['corner_style'] = isset($data['corner_style']) ? $data['corner_style'] : null;
        $this->container['break_text'] = isset($data['break_text']) ? $data['break_text'] : null;
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : null;
        $this->container['is_borders_included'] = isset($data['is_borders_included']) ? $data['is_borders_included'] : null;
        $this->container['column_adjustment'] = isset($data['column_adjustment']) ? $data['column_adjustment'] : null;
        $this->container['z_index'] = isset($data['z_index']) ? $data['z_index'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['rows'] === null) {
            $invalidProperties[] = "'rows' can't be null";
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

        if ($this->container['rows'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets alignment
     *
     * @return \Aspose\PDF\Model\HorizontalAlignment
     */
    public function getAlignment()
    {
        return $this->container['alignment'];
    }

    /**
     * Sets alignment
     *
     * @param \Aspose\PDF\Model\HorizontalAlignment $alignment Gets HorizontalAlignment of the table alignment.
     *
     * @return $this
     */
    public function setAlignment($alignment)
    {
        $this->container['alignment'] = $alignment;

        return $this;
    }

    /**
     * Gets horizontal_alignment
     *
     * @return \Aspose\PDF\Model\HorizontalAlignment
     */
    public function getHorizontalAlignment()
    {
        return $this->container['horizontal_alignment'];
    }

    /**
     * Sets horizontal_alignment
     *
     * @param \Aspose\PDF\Model\HorizontalAlignment $horizontal_alignment Gets HorizontalAlignment of the table alignment.
     *
     * @return $this
     */
    public function setHorizontalAlignment($horizontal_alignment)
    {
        $this->container['horizontal_alignment'] = $horizontal_alignment;

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
     * @param \Aspose\PDF\Model\VerticalAlignment $vertical_alignment Gets VerticalAlignment of the annotation.
     *
     * @return $this
     */
    public function setVerticalAlignment($vertical_alignment)
    {
        $this->container['vertical_alignment'] = $vertical_alignment;

        return $this;
    }

    /**
     * Gets top
     *
     * @return double
     */
    public function getTop()
    {
        return $this->container['top'];
    }

    /**
     * Sets top
     *
     * @param double $top Gets or sets the table top coordinate.
     *
     * @return $this
     */
    public function setTop($top)
    {
        $this->container['top'] = $top;

        return $this;
    }

    /**
     * Gets left
     *
     * @return double
     */
    public function getLeft()
    {
        return $this->container['left'];
    }

    /**
     * Sets left
     *
     * @param double $left Gets or sets the table left coordinate.
     *
     * @return $this
     */
    public function setLeft($left)
    {
        $this->container['left'] = $left;

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
     * @param \Aspose\PDF\Model\TextState $default_cell_text_state Gets or sets the default cell text state.
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
     * @param \Aspose\PDF\Model\MarginInfo $default_cell_padding Gets or sets the default cell padding.
     *
     * @return $this
     */
    public function setDefaultCellPadding($default_cell_padding)
    {
        $this->container['default_cell_padding'] = $default_cell_padding;

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
     * Gets margin
     *
     * @return \Aspose\PDF\Model\MarginInfo
     */
    public function getMargin()
    {
        return $this->container['margin'];
    }

    /**
     * Sets margin
     *
     * @param \Aspose\PDF\Model\MarginInfo $margin Gets or sets a outer margin for paragraph (for pdf generation)
     *
     * @return $this
     */
    public function setMargin($margin)
    {
        $this->container['margin'] = $margin;

        return $this;
    }

    /**
     * Gets rows
     *
     * @return \Aspose\PDF\Model\Row[]
     */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
     * Sets rows
     *
     * @param \Aspose\PDF\Model\Row[] $rows Sets the rows of the table.
     *
     * @return $this
     */
    public function setRows($rows)
    {
        $this->container['rows'] = $rows;

        return $this;
    }

    /**
     * Gets default_column_width
     *
     * @return string
     */
    public function getDefaultColumnWidth()
    {
        return $this->container['default_column_width'];
    }

    /**
     * Sets default_column_width
     *
     * @param string $default_column_width Gets default cell border;
     *
     * @return $this
     */
    public function setDefaultColumnWidth($default_column_width)
    {
        $this->container['default_column_width'] = $default_column_width;

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
     * Gets broken
     *
     * @return \Aspose\PDF\Model\TableBroken
     */
    public function getBroken()
    {
        return $this->container['broken'];
    }

    /**
     * Sets broken
     *
     * @param \Aspose\PDF\Model\TableBroken $broken Gets or sets table vertial broken;
     *
     * @return $this
     */
    public function setBroken($broken)
    {
        $this->container['broken'] = $broken;

        return $this;
    }

    /**
     * Gets column_widths
     *
     * @return string
     */
    public function getColumnWidths()
    {
        return $this->container['column_widths'];
    }

    /**
     * Sets column_widths
     *
     * @param string $column_widths Gets the column widths of the table.
     *
     * @return $this
     */
    public function setColumnWidths($column_widths)
    {
        $this->container['column_widths'] = $column_widths;

        return $this;
    }

    /**
     * Gets repeating_rows_count
     *
     * @return int
     */
    public function getRepeatingRowsCount()
    {
        return $this->container['repeating_rows_count'];
    }

    /**
     * Sets repeating_rows_count
     *
     * @param int $repeating_rows_count Gets the first rows count repeated for several pages
     *
     * @return $this
     */
    public function setRepeatingRowsCount($repeating_rows_count)
    {
        $this->container['repeating_rows_count'] = $repeating_rows_count;

        return $this;
    }

    /**
     * Gets repeating_columns_count
     *
     * @return int
     */
    public function getRepeatingColumnsCount()
    {
        return $this->container['repeating_columns_count'];
    }

    /**
     * Sets repeating_columns_count
     *
     * @param int $repeating_columns_count Gets or sets the maximum columns count for table
     *
     * @return $this
     */
    public function setRepeatingColumnsCount($repeating_columns_count)
    {
        $this->container['repeating_columns_count'] = $repeating_columns_count;

        return $this;
    }

    /**
     * Gets repeating_rows_style
     *
     * @return \Aspose\PDF\Model\TextState
     */
    public function getRepeatingRowsStyle()
    {
        return $this->container['repeating_rows_style'];
    }

    /**
     * Sets repeating_rows_style
     *
     * @param \Aspose\PDF\Model\TextState $repeating_rows_style Gets the style for repeating rows
     *
     * @return $this
     */
    public function setRepeatingRowsStyle($repeating_rows_style)
    {
        $this->container['repeating_rows_style'] = $repeating_rows_style;

        return $this;
    }

    /**
     * Gets corner_style
     *
     * @return \Aspose\PDF\Model\BorderCornerStyle
     */
    public function getCornerStyle()
    {
        return $this->container['corner_style'];
    }

    /**
     * Sets corner_style
     *
     * @param \Aspose\PDF\Model\BorderCornerStyle $corner_style Gets or sets the styles of the border corners
     *
     * @return $this
     */
    public function setCornerStyle($corner_style)
    {
        $this->container['corner_style'] = $corner_style;

        return $this;
    }

    /**
     * Gets break_text
     *
     * @return \Aspose\PDF\Model\TextRect
     */
    public function getBreakText()
    {
        return $this->container['break_text'];
    }

    /**
     * Sets break_text
     *
     * @param \Aspose\PDF\Model\TextRect $break_text Gets or sets break text for table
     *
     * @return $this
     */
    public function setBreakText($break_text)
    {
        $this->container['break_text'] = $break_text;

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
     * @param \Aspose\PDF\Model\Color $background_color Gets or sets table background color
     *
     * @return $this
     */
    public function setBackgroundColor($background_color)
    {
        $this->container['background_color'] = $background_color;

        return $this;
    }

    /**
     * Gets is_borders_included
     *
     * @return bool
     */
    public function getIsBordersIncluded()
    {
        return $this->container['is_borders_included'];
    }

    /**
     * Sets is_borders_included
     *
     * @param bool $is_borders_included Gets or sets border included in column widhts.
     *
     * @return $this
     */
    public function setIsBordersIncluded($is_borders_included)
    {
        $this->container['is_borders_included'] = $is_borders_included;

        return $this;
    }

    /**
     * Gets column_adjustment
     *
     * @return \Aspose\PDF\Model\ColumnAdjustment
     */
    public function getColumnAdjustment()
    {
        return $this->container['column_adjustment'];
    }

    /**
     * Sets column_adjustment
     *
     * @param \Aspose\PDF\Model\ColumnAdjustment $column_adjustment Gets or sets the table column adjustment.
     *
     * @return $this
     */
    public function setColumnAdjustment($column_adjustment)
    {
        $this->container['column_adjustment'] = $column_adjustment;

        return $this;
    }

    /**
     * Gets z_index
     *
     * @return int
     */
    public function getZIndex()
    {
        return $this->container['z_index'];
    }

    /**
     * Sets z_index
     *
     * @param int $z_index Gets ZIndex of the annotation.
     *
     * @return $this
     */
    public function setZIndex($z_index)
    {
        $this->container['z_index'] = $z_index;

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


