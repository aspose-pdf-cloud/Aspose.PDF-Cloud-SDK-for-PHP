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
 * GraphInfo Class 
 *
 * @category Class
 * @description Represents graphics info.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;

use \ArrayAccess;
use \Aspose\PDF\ObjectSerializer;

class GraphInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GraphInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'line_width' => 'double',
        'color' => '\Aspose\PDF\Model\Color',
        'dash_array' => 'int[]',
        'dash_phase' => 'int',
        'fill_color' => '\Aspose\PDF\Model\Color',
        'is_doubled' => 'bool',
        'skew_angle_x' => 'double',
        'skew_angle_y' => 'double',
        'scaling_rate_x' => 'double',
        'scaling_rate_y' => 'double',
        'rotation_angle' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'line_width' => 'double',
        'color' => null,
        'dash_array' => 'int32',
        'dash_phase' => 'int32',
        'fill_color' => null,
        'is_doubled' => null,
        'skew_angle_x' => 'double',
        'skew_angle_y' => 'double',
        'scaling_rate_x' => 'double',
        'scaling_rate_y' => 'double',
        'rotation_angle' => 'double'
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
        'line_width' => 'LineWidth',
        'color' => 'Color',
        'dash_array' => 'DashArray',
        'dash_phase' => 'DashPhase',
        'fill_color' => 'FillColor',
        'is_doubled' => 'IsDoubled',
        'skew_angle_x' => 'SkewAngleX',
        'skew_angle_y' => 'SkewAngleY',
        'scaling_rate_x' => 'ScalingRateX',
        'scaling_rate_y' => 'ScalingRateY',
        'rotation_angle' => 'RotationAngle'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'line_width' => 'setLineWidth',
        'color' => 'setColor',
        'dash_array' => 'setDashArray',
        'dash_phase' => 'setDashPhase',
        'fill_color' => 'setFillColor',
        'is_doubled' => 'setIsDoubled',
        'skew_angle_x' => 'setSkewAngleX',
        'skew_angle_y' => 'setSkewAngleY',
        'scaling_rate_x' => 'setScalingRateX',
        'scaling_rate_y' => 'setScalingRateY',
        'rotation_angle' => 'setRotationAngle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'line_width' => 'getLineWidth',
        'color' => 'getColor',
        'dash_array' => 'getDashArray',
        'dash_phase' => 'getDashPhase',
        'fill_color' => 'getFillColor',
        'is_doubled' => 'getIsDoubled',
        'skew_angle_x' => 'getSkewAngleX',
        'skew_angle_y' => 'getSkewAngleY',
        'scaling_rate_x' => 'getScalingRateX',
        'scaling_rate_y' => 'getScalingRateY',
        'rotation_angle' => 'getRotationAngle'
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
        $this->container['line_width'] = isset($data['line_width']) ? $data['line_width'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['dash_array'] = isset($data['dash_array']) ? $data['dash_array'] : null;
        $this->container['dash_phase'] = isset($data['dash_phase']) ? $data['dash_phase'] : null;
        $this->container['fill_color'] = isset($data['fill_color']) ? $data['fill_color'] : null;
        $this->container['is_doubled'] = isset($data['is_doubled']) ? $data['is_doubled'] : null;
        $this->container['skew_angle_x'] = isset($data['skew_angle_x']) ? $data['skew_angle_x'] : null;
        $this->container['skew_angle_y'] = isset($data['skew_angle_y']) ? $data['skew_angle_y'] : null;
        $this->container['scaling_rate_x'] = isset($data['scaling_rate_x']) ? $data['scaling_rate_x'] : null;
        $this->container['scaling_rate_y'] = isset($data['scaling_rate_y']) ? $data['scaling_rate_y'] : null;
        $this->container['rotation_angle'] = isset($data['rotation_angle']) ? $data['rotation_angle'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        return true;
    }


    /**
     * Gets line_width
     *
     * @return double
     */
    public function getLineWidth()
    {
        return $this->container['line_width'];
    }

    /**
     * Sets line_width
     *
     * @param double $line_width Gets or sets a float value that indicates the line width of the graph.
     *
     * @return $this
     */
    public function setLineWidth($line_width)
    {
        $this->container['line_width'] = $line_width;

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
     * @param \Aspose\PDF\Model\Color $color Gets or sets a Color object that indicates the color of the graph.
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets dash_array
     *
     * @return int[]
     */
    public function getDashArray()
    {
        return $this->container['dash_array'];
    }

    /**
     * Sets dash_array
     *
     * @param int[] $dash_array Gets or sets a dash array.
     *
     * @return $this
     */
    public function setDashArray($dash_array)
    {
        $this->container['dash_array'] = $dash_array;

        return $this;
    }

    /**
     * Gets dash_phase
     *
     * @return int
     */
    public function getDashPhase()
    {
        return $this->container['dash_phase'];
    }

    /**
     * Sets dash_phase
     *
     * @param int $dash_phase Gets or sets a dash phase.
     *
     * @return $this
     */
    public function setDashPhase($dash_phase)
    {
        $this->container['dash_phase'] = $dash_phase;

        return $this;
    }

    /**
     * Gets fill_color
     *
     * @return \Aspose\PDF\Model\Color
     */
    public function getFillColor()
    {
        return $this->container['fill_color'];
    }

    /**
     * Sets fill_color
     *
     * @param \Aspose\PDF\Model\Color $fill_color Gets or sets a Color object that indicates the fill color of the graph.
     *
     * @return $this
     */
    public function setFillColor($fill_color)
    {
        $this->container['fill_color'] = $fill_color;

        return $this;
    }

    /**
     * Gets is_doubled
     *
     * @return bool
     */
    public function getIsDoubled()
    {
        return $this->container['is_doubled'];
    }

    /**
     * Sets is_doubled
     *
     * @param bool $is_doubled Gets or sets is border doubled.
     *
     * @return $this
     */
    public function setIsDoubled($is_doubled)
    {
        $this->container['is_doubled'] = $is_doubled;

        return $this;
    }

    /**
     * Gets skew_angle_x
     *
     * @return double
     */
    public function getSkewAngleX()
    {
        return $this->container['skew_angle_x'];
    }

    /**
     * Sets skew_angle_x
     *
     * @param double $skew_angle_x Gets or sets a float value that indicates the skew angle of the x-coordinate when transforming a coordinate system.
     *
     * @return $this
     */
    public function setSkewAngleX($skew_angle_x)
    {
        $this->container['skew_angle_x'] = $skew_angle_x;

        return $this;
    }

    /**
     * Gets skew_angle_y
     *
     * @return double
     */
    public function getSkewAngleY()
    {
        return $this->container['skew_angle_y'];
    }

    /**
     * Sets skew_angle_y
     *
     * @param double $skew_angle_y Gets or sets a float value that indicates the skew angle of the y-coordinate when transforming a coordinate system.
     *
     * @return $this
     */
    public function setSkewAngleY($skew_angle_y)
    {
        $this->container['skew_angle_y'] = $skew_angle_y;

        return $this;
    }

    /**
     * Gets scaling_rate_x
     *
     * @return double
     */
    public function getScalingRateX()
    {
        return $this->container['scaling_rate_x'];
    }

    /**
     * Sets scaling_rate_x
     *
     * @param double $scaling_rate_x Gets or sets a float value that indicates the scaling rate of the x-coordinate when transforming a coordinate system.
     *
     * @return $this
     */
    public function setScalingRateX($scaling_rate_x)
    {
        $this->container['scaling_rate_x'] = $scaling_rate_x;

        return $this;
    }

    /**
     * Gets scaling_rate_y
     *
     * @return double
     */
    public function getScalingRateY()
    {
        return $this->container['scaling_rate_y'];
    }

    /**
     * Sets scaling_rate_y
     *
     * @param double $scaling_rate_y Gets or sets a float value that indicates the scaling rate of the y-coordinate when transforming a coordinate system.
     *
     * @return $this
     */
    public function setScalingRateY($scaling_rate_y)
    {
        $this->container['scaling_rate_y'] = $scaling_rate_y;

        return $this;
    }

    /**
     * Gets rotation_angle
     *
     * @return double
     */
    public function getRotationAngle()
    {
        return $this->container['rotation_angle'];
    }

    /**
     * Sets rotation_angle
     *
     * @param double $rotation_angle Gets or sets a float value that indicates the rotation angle of the coordinate system  when transforming a coordinate system.
     *
     * @return $this
     */
    public function setRotationAngle($rotation_angle)
    {
        $this->container['rotation_angle'] = $rotation_angle;

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


