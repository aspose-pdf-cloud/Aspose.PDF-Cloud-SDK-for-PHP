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
 * StampBase Class 
 *
 * @category Class
 * @description Represents Pdf stamps.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;
use \Aspose\PDF\ObjectSerializer;

class StampBase extends LinkElement 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StampBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'background' => 'bool',
        'horizontal_alignment' => '\Aspose\PDF\Model\HorizontalAlignment',
        'opacity' => 'double',
        'rotate' => '\Aspose\PDF\Model\Rotation',
        'rotate_angle' => 'double',
        'x_indent' => 'double',
        'y_indent' => 'double',
        'zoom' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'background' => null,
        'horizontal_alignment' => null,
        'opacity' => 'double',
        'rotate' => null,
        'rotate_angle' => 'double',
        'x_indent' => 'double',
        'y_indent' => 'double',
        'zoom' => 'double'
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
        'background' => 'Background',
        'horizontal_alignment' => 'HorizontalAlignment',
        'opacity' => 'Opacity',
        'rotate' => 'Rotate',
        'rotate_angle' => 'RotateAngle',
        'x_indent' => 'XIndent',
        'y_indent' => 'YIndent',
        'zoom' => 'Zoom'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'background' => 'setBackground',
        'horizontal_alignment' => 'setHorizontalAlignment',
        'opacity' => 'setOpacity',
        'rotate' => 'setRotate',
        'rotate_angle' => 'setRotateAngle',
        'x_indent' => 'setXIndent',
        'y_indent' => 'setYIndent',
        'zoom' => 'setZoom'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'background' => 'getBackground',
        'horizontal_alignment' => 'getHorizontalAlignment',
        'opacity' => 'getOpacity',
        'rotate' => 'getRotate',
        'rotate_angle' => 'getRotateAngle',
        'x_indent' => 'getXIndent',
        'y_indent' => 'getYIndent',
        'zoom' => 'getZoom'
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

        $this->container['background'] = isset($data['background']) ? $data['background'] : null;
        $this->container['horizontal_alignment'] = isset($data['horizontal_alignment']) ? $data['horizontal_alignment'] : null;
        $this->container['opacity'] = isset($data['opacity']) ? $data['opacity'] : null;
        $this->container['rotate'] = isset($data['rotate']) ? $data['rotate'] : null;
        $this->container['rotate_angle'] = isset($data['rotate_angle']) ? $data['rotate_angle'] : null;
        $this->container['x_indent'] = isset($data['x_indent']) ? $data['x_indent'] : null;
        $this->container['y_indent'] = isset($data['y_indent']) ? $data['y_indent'] : null;
        $this->container['zoom'] = isset($data['zoom']) ? $data['zoom'] : null;
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
     * Gets background
     *
     * @return bool
     */
    public function getBackground()
    {
        return $this->container['background'];
    }

    /**
     * Sets background
     *
     * @param bool $background Sets or gets a bool value that indicates the content is stamped as background. If the value is true, the stamp content is layed at the bottom. By defalt, the value is false, the stamp content is layed at the top.
     *
     * @return $this
     */
    public function setBackground($background)
    {
        $this->container['background'] = $background;

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
     * @param \Aspose\PDF\Model\HorizontalAlignment $horizontal_alignment Gets or sets Horizontal alignment of stamp on the page.
     *
     * @return $this
     */
    public function setHorizontalAlignment($horizontal_alignment)
    {
        $this->container['horizontal_alignment'] = $horizontal_alignment;

        return $this;
    }

    /**
     * Gets opacity
     *
     * @return double
     */
    public function getOpacity()
    {
        return $this->container['opacity'];
    }

    /**
     * Sets opacity
     *
     * @param double $opacity Gets or sets a value to indicate the stamp opacity. The value is from 0.0 to 1.0. By default the value is 1.0.
     *
     * @return $this
     */
    public function setOpacity($opacity)
    {
        $this->container['opacity'] = $opacity;

        return $this;
    }

    /**
     * Gets rotate
     *
     * @return \Aspose\PDF\Model\Rotation
     */
    public function getRotate()
    {
        return $this->container['rotate'];
    }

    /**
     * Sets rotate
     *
     * @param \Aspose\PDF\Model\Rotation $rotate Sets or gets the rotation of stamp content according Rotation values. Note. This property is for set angles which are multiples of 90 degrees (0, 90, 180, 270 degrees). To set arbitrary angle use RotateAngle property.  If angle set by ArbitraryAngle is not multiple of 90 then Rotate property returns Rotation.None.
     *
     * @return $this
     */
    public function setRotate($rotate)
    {
        $this->container['rotate'] = $rotate;

        return $this;
    }

    /**
     * Gets rotate_angle
     *
     * @return double
     */
    public function getRotateAngle()
    {
        return $this->container['rotate_angle'];
    }

    /**
     * Sets rotate_angle
     *
     * @param double $rotate_angle Gets or sets rotate angle of stamp in degrees. This property allows to set arbitrary rotate angle.
     *
     * @return $this
     */
    public function setRotateAngle($rotate_angle)
    {
        $this->container['rotate_angle'] = $rotate_angle;

        return $this;
    }

    /**
     * Gets x_indent
     *
     * @return double
     */
    public function getXIndent()
    {
        return $this->container['x_indent'];
    }

    /**
     * Sets x_indent
     *
     * @param double $x_indent Horizontal stamp coordinate, starting from the left.
     *
     * @return $this
     */
    public function setXIndent($x_indent)
    {
        $this->container['x_indent'] = $x_indent;

        return $this;
    }

    /**
     * Gets y_indent
     *
     * @return double
     */
    public function getYIndent()
    {
        return $this->container['y_indent'];
    }

    /**
     * Sets y_indent
     *
     * @param double $y_indent Vertical stamp coordinate, starting from the bottom.
     *
     * @return $this
     */
    public function setYIndent($y_indent)
    {
        $this->container['y_indent'] = $y_indent;

        return $this;
    }

    /**
     * Gets zoom
     *
     * @return double
     */
    public function getZoom()
    {
        return $this->container['zoom'];
    }

    /**
     * Sets zoom
     *
     * @param double $zoom Zooming factor of the stamp. Allows to scale stamp.
     *
     * @return $this
     */
    public function setZoom($zoom)
    {
        $this->container['zoom'] = $zoom;

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


