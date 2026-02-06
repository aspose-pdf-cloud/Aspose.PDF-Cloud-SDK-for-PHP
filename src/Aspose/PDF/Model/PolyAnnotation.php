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
 * PolyAnnotation Class 
 *
 * @category Class
 * @description Provides PolyAnnotation.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;
use \Aspose\PDF\ObjectSerializer;

class PolyAnnotation extends MarkupAnnotation 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PolyAnnotation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'interior_color' => '\Aspose\PDF\Model\Color',
        'starting_style' => '\Aspose\PDF\Model\LineEnding',
        'ending_style' => '\Aspose\PDF\Model\LineEnding',
        'intent' => '\Aspose\PDF\Model\PolyIntent',
        'vertices' => '\Aspose\PDF\Model\Point[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'interior_color' => null,
        'starting_style' => null,
        'ending_style' => null,
        'intent' => null,
        'vertices' => null
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
        'interior_color' => 'InteriorColor',
        'starting_style' => 'StartingStyle',
        'ending_style' => 'EndingStyle',
        'intent' => 'Intent',
        'vertices' => 'Vertices'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'interior_color' => 'setInteriorColor',
        'starting_style' => 'setStartingStyle',
        'ending_style' => 'setEndingStyle',
        'intent' => 'setIntent',
        'vertices' => 'setVertices'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'interior_color' => 'getInteriorColor',
        'starting_style' => 'getStartingStyle',
        'ending_style' => 'getEndingStyle',
        'intent' => 'getIntent',
        'vertices' => 'getVertices'
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

        $this->container['interior_color'] = isset($data['interior_color']) ? $data['interior_color'] : null;
        $this->container['starting_style'] = isset($data['starting_style']) ? $data['starting_style'] : null;
        $this->container['ending_style'] = isset($data['ending_style']) ? $data['ending_style'] : null;
        $this->container['intent'] = isset($data['intent']) ? $data['intent'] : null;
        $this->container['vertices'] = isset($data['vertices']) ? $data['vertices'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['vertices'] === null) {
            $invalidProperties[] = "'vertices' can't be null";
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

        if ($this->container['vertices'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets interior_color
     *
     * @return \Aspose\PDF\Model\Color
     */
    public function getInteriorColor()
    {
        return $this->container['interior_color'];
    }

    /**
     * Sets interior_color
     *
     * @param \Aspose\PDF\Model\Color $interior_color Gets or sets the interior color with which to fill the annotation’s line endings.
     *
     * @return $this
     */
    public function setInteriorColor($interior_color)
    {
        $this->container['interior_color'] = $interior_color;

        return $this;
    }

    /**
     * Gets starting_style
     *
     * @return \Aspose\PDF\Model\LineEnding
     */
    public function getStartingStyle()
    {
        return $this->container['starting_style'];
    }

    /**
     * Sets starting_style
     *
     * @param \Aspose\PDF\Model\LineEnding $starting_style Gets or sets the style of first line ending.
     *
     * @return $this
     */
    public function setStartingStyle($starting_style)
    {
        $this->container['starting_style'] = $starting_style;

        return $this;
    }

    /**
     * Gets ending_style
     *
     * @return \Aspose\PDF\Model\LineEnding
     */
    public function getEndingStyle()
    {
        return $this->container['ending_style'];
    }

    /**
     * Sets ending_style
     *
     * @param \Aspose\PDF\Model\LineEnding $ending_style Gets or sets the style of second line ending.
     *
     * @return $this
     */
    public function setEndingStyle($ending_style)
    {
        $this->container['ending_style'] = $ending_style;

        return $this;
    }

    /**
     * Gets intent
     *
     * @return \Aspose\PDF\Model\PolyIntent
     */
    public function getIntent()
    {
        return $this->container['intent'];
    }

    /**
     * Sets intent
     *
     * @param \Aspose\PDF\Model\PolyIntent $intent Gets or sets the intent of the polygon or polyline annotation.
     *
     * @return $this
     */
    public function setIntent($intent)
    {
        $this->container['intent'] = $intent;

        return $this;
    }

    /**
     * Gets vertices
     *
     * @return \Aspose\PDF\Model\Point[]
     */
    public function getVertices()
    {
        return $this->container['vertices'];
    }

    /**
     * Sets vertices
     *
     * @param \Aspose\PDF\Model\Point[] $vertices Gets or sets an array of points representing the horizontal and vertical coordinates of each vertex.
     *
     * @return $this
     */
    public function setVertices($vertices)
    {
        $this->container['vertices'] = $vertices;

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


