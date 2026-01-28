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
 * FormField Class 
 *
 * @category Class
 * @description Provides form field.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;
use \Aspose\PDF\ObjectSerializer;

class FormField extends LinkElement 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FormField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'partial_name' => 'string',
        'full_name' => 'string',
        'rect' => '\Aspose\PDF\Model\Rectangle',
        'value' => 'string',
        'page_index' => 'int',
        'height' => 'double',
        'width' => 'double',
        'z_index' => 'int',
        'is_group' => 'bool',
        'parent' => '\Aspose\PDF\Model\FormField',
        'is_shared_field' => 'bool',
        'flags' => '\Aspose\PDF\Model\AnnotationFlags[]',
        'color' => '\Aspose\PDF\Model\Color',
        'contents' => 'string',
        'margin' => '\Aspose\PDF\Model\MarginInfo',
        'highlighting' => '\Aspose\PDF\Model\LinkHighlightingMode',
        'horizontal_alignment' => '\Aspose\PDF\Model\HorizontalAlignment',
        'vertical_alignment' => '\Aspose\PDF\Model\VerticalAlignment',
        'border' => '\Aspose\PDF\Model\Border'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'partial_name' => null,
        'full_name' => null,
        'rect' => null,
        'value' => null,
        'page_index' => 'int32',
        'height' => 'double',
        'width' => 'double',
        'z_index' => 'int32',
        'is_group' => null,
        'parent' => null,
        'is_shared_field' => null,
        'flags' => null,
        'color' => null,
        'contents' => null,
        'margin' => null,
        'highlighting' => null,
        'horizontal_alignment' => null,
        'vertical_alignment' => null,
        'border' => null
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
        'partial_name' => 'PartialName',
        'full_name' => 'FullName',
        'rect' => 'Rect',
        'value' => 'Value',
        'page_index' => 'PageIndex',
        'height' => 'Height',
        'width' => 'Width',
        'z_index' => 'ZIndex',
        'is_group' => 'IsGroup',
        'parent' => 'Parent',
        'is_shared_field' => 'IsSharedField',
        'flags' => 'Flags',
        'color' => 'Color',
        'contents' => 'Contents',
        'margin' => 'Margin',
        'highlighting' => 'Highlighting',
        'horizontal_alignment' => 'HorizontalAlignment',
        'vertical_alignment' => 'VerticalAlignment',
        'border' => 'Border'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'partial_name' => 'setPartialName',
        'full_name' => 'setFullName',
        'rect' => 'setRect',
        'value' => 'setValue',
        'page_index' => 'setPageIndex',
        'height' => 'setHeight',
        'width' => 'setWidth',
        'z_index' => 'setZIndex',
        'is_group' => 'setIsGroup',
        'parent' => 'setParent',
        'is_shared_field' => 'setIsSharedField',
        'flags' => 'setFlags',
        'color' => 'setColor',
        'contents' => 'setContents',
        'margin' => 'setMargin',
        'highlighting' => 'setHighlighting',
        'horizontal_alignment' => 'setHorizontalAlignment',
        'vertical_alignment' => 'setVerticalAlignment',
        'border' => 'setBorder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'partial_name' => 'getPartialName',
        'full_name' => 'getFullName',
        'rect' => 'getRect',
        'value' => 'getValue',
        'page_index' => 'getPageIndex',
        'height' => 'getHeight',
        'width' => 'getWidth',
        'z_index' => 'getZIndex',
        'is_group' => 'getIsGroup',
        'parent' => 'getParent',
        'is_shared_field' => 'getIsSharedField',
        'flags' => 'getFlags',
        'color' => 'getColor',
        'contents' => 'getContents',
        'margin' => 'getMargin',
        'highlighting' => 'getHighlighting',
        'horizontal_alignment' => 'getHorizontalAlignment',
        'vertical_alignment' => 'getVerticalAlignment',
        'border' => 'getBorder'
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

        $this->container['partial_name'] = isset($data['partial_name']) ? $data['partial_name'] : null;
        $this->container['full_name'] = isset($data['full_name']) ? $data['full_name'] : null;
        $this->container['rect'] = isset($data['rect']) ? $data['rect'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['page_index'] = isset($data['page_index']) ? $data['page_index'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['z_index'] = isset($data['z_index']) ? $data['z_index'] : null;
        $this->container['is_group'] = isset($data['is_group']) ? $data['is_group'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['is_shared_field'] = isset($data['is_shared_field']) ? $data['is_shared_field'] : null;
        $this->container['flags'] = isset($data['flags']) ? $data['flags'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['contents'] = isset($data['contents']) ? $data['contents'] : null;
        $this->container['margin'] = isset($data['margin']) ? $data['margin'] : null;
        $this->container['highlighting'] = isset($data['highlighting']) ? $data['highlighting'] : null;
        $this->container['horizontal_alignment'] = isset($data['horizontal_alignment']) ? $data['horizontal_alignment'] : null;
        $this->container['vertical_alignment'] = isset($data['vertical_alignment']) ? $data['vertical_alignment'] : null;
        $this->container['border'] = isset($data['border']) ? $data['border'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['page_index'] === null) {
            $invalidProperties[] = "'page_index' can't be null";
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

        if ($this->container['page_index'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets partial_name
     *
     * @return string
     */
    public function getPartialName()
    {
        return $this->container['partial_name'];
    }

    /**
     * Sets partial_name
     *
     * @param string $partial_name Field name.
     *
     * @return $this
     */
    public function setPartialName($partial_name)
    {
        $this->container['partial_name'] = $partial_name;

        return $this;
    }

    /**
     * Gets full_name
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     *
     * @param string $full_name Full Field name.
     *
     * @return $this
     */
    public function setFullName($full_name)
    {
        $this->container['full_name'] = $full_name;

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
     * @param \Aspose\PDF\Model\Rectangle $rect Field rectangle.
     *
     * @return $this
     */
    public function setRect($rect)
    {
        $this->container['rect'] = $rect;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value Field value.
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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
     * @param int $page_index Page index.
     *
     * @return $this
     */
    public function setPageIndex($page_index)
    {
        $this->container['page_index'] = $page_index;

        return $this;
    }

    /**
     * Gets height
     *
     * @return double
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param double $height Gets or sets height of the field.
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets width
     *
     * @return double
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param double $width Gets or sets width of the field.
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

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
     * @param int $z_index Z index.
     *
     * @return $this
     */
    public function setZIndex($z_index)
    {
        $this->container['z_index'] = $z_index;

        return $this;
    }

    /**
     * Gets is_group
     *
     * @return bool
     */
    public function getIsGroup()
    {
        return $this->container['is_group'];
    }

    /**
     * Sets is_group
     *
     * @param bool $is_group Is group.
     *
     * @return $this
     */
    public function setIsGroup($is_group)
    {
        $this->container['is_group'] = $is_group;

        return $this;
    }

    /**
     * Gets parent
     *
     * @return \Aspose\PDF\Model\FormField
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \Aspose\PDF\Model\FormField $parent Gets field parent.
     *
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets is_shared_field
     *
     * @return bool
     */
    public function getIsSharedField()
    {
        return $this->container['is_shared_field'];
    }

    /**
     * Sets is_shared_field
     *
     * @param bool $is_shared_field Property for Generator support. Used when field is added to header or footer. If true, this field will created once and it's appearance will be visible on all pages of the document. If false, separated field will be created for every document page.
     *
     * @return $this
     */
    public function setIsSharedField($is_shared_field)
    {
        $this->container['is_shared_field'] = $is_shared_field;

        return $this;
    }

    /**
     * Gets flags
     *
     * @return \Aspose\PDF\Model\AnnotationFlags[]
     */
    public function getFlags()
    {
        return $this->container['flags'];
    }

    /**
     * Sets flags
     *
     * @param \Aspose\PDF\Model\AnnotationFlags[] $flags Gets Flags of the field.
     *
     * @return $this
     */
    public function setFlags($flags)
    {
        $this->container['flags'] = $flags;

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
     * @param \Aspose\PDF\Model\Color $color Color of the annotation.
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets contents
     *
     * @return string
     */
    public function getContents()
    {
        return $this->container['contents'];
    }

    /**
     * Sets contents
     *
     * @param string $contents Get the field content.
     *
     * @return $this
     */
    public function setContents($contents)
    {
        $this->container['contents'] = $contents;

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
     * @param \Aspose\PDF\Model\LinkHighlightingMode $highlighting Field highlighting mode.
     *
     * @return $this
     */
    public function setHighlighting($highlighting)
    {
        $this->container['highlighting'] = $highlighting;

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
     * @param \Aspose\PDF\Model\HorizontalAlignment $horizontal_alignment Gets HorizontalAlignment of the field.
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
     * @param \Aspose\PDF\Model\VerticalAlignment $vertical_alignment Gets VerticalAlignment of the field.
     *
     * @return $this
     */
    public function setVerticalAlignment($vertical_alignment)
    {
        $this->container['vertical_alignment'] = $vertical_alignment;

        return $this;
    }

    /**
     * Gets border
     *
     * @return \Aspose\PDF\Model\Border
     */
    public function getBorder()
    {
        return $this->container['border'];
    }

    /**
     * Sets border
     *
     * @param \Aspose\PDF\Model\Border $border Gets or sets annotation border characteristics.
     *
     * @return $this
     */
    public function setBorder($border)
    {
        $this->container['border'] = $border;

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


