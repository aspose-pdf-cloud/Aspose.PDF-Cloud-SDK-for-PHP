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
 * Rectangle Class 
 *
 * @category Class
 * @description Represents rectangle DTO.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;

use \ArrayAccess;
use \Aspose\PDF\ObjectSerializer;

class Rectangle implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Rectangle';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'llx' => 'double',
        'lly' => 'double',
        'urx' => 'double',
        'ury' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'llx' => 'double',
        'lly' => 'double',
        'urx' => 'double',
        'ury' => 'double'
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
        'llx' => 'LLX',
        'lly' => 'LLY',
        'urx' => 'URX',
        'ury' => 'URY'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'llx' => 'setLlx',
        'lly' => 'setLly',
        'urx' => 'setUrx',
        'ury' => 'setUry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'llx' => 'getLlx',
        'lly' => 'getLly',
        'urx' => 'getUrx',
        'ury' => 'getUry'
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
        $this->container['llx'] = isset($data['llx']) ? $data['llx'] : null;
        $this->container['lly'] = isset($data['lly']) ? $data['lly'] : null;
        $this->container['urx'] = isset($data['urx']) ? $data['urx'] : null;
        $this->container['ury'] = isset($data['ury']) ? $data['ury'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['llx'] === null) {
            $invalidProperties[] = "'llx' can't be null";
        }
        if ($this->container['lly'] === null) {
            $invalidProperties[] = "'lly' can't be null";
        }
        if ($this->container['urx'] === null) {
            $invalidProperties[] = "'urx' can't be null";
        }
        if ($this->container['ury'] === null) {
            $invalidProperties[] = "'ury' can't be null";
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

        if ($this->container['llx'] === null) {
            return false;
        }
        if ($this->container['lly'] === null) {
            return false;
        }
        if ($this->container['urx'] === null) {
            return false;
        }
        if ($this->container['ury'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets llx
     *
     * @return double
     */
    public function getLlx()
    {
        return $this->container['llx'];
    }

    /**
     * Sets llx
     *
     * @param double $llx X-coordinate of lower - left corner.
     *
     * @return $this
     */
    public function setLlx($llx)
    {
        $this->container['llx'] = $llx;

        return $this;
    }

    /**
     * Gets lly
     *
     * @return double
     */
    public function getLly()
    {
        return $this->container['lly'];
    }

    /**
     * Sets lly
     *
     * @param double $lly Y - coordinate of lower-left corner.
     *
     * @return $this
     */
    public function setLly($lly)
    {
        $this->container['lly'] = $lly;

        return $this;
    }

    /**
     * Gets urx
     *
     * @return double
     */
    public function getUrx()
    {
        return $this->container['urx'];
    }

    /**
     * Sets urx
     *
     * @param double $urx X - coordinate of upper-right corner.
     *
     * @return $this
     */
    public function setUrx($urx)
    {
        $this->container['urx'] = $urx;

        return $this;
    }

    /**
     * Gets ury
     *
     * @return double
     */
    public function getUry()
    {
        return $this->container['ury'];
    }

    /**
     * Sets ury
     *
     * @param double $ury Y - coordinate of upper-right corner.
     *
     * @return $this
     */
    public function setUry($ury)
    {
        $this->container['ury'] = $ury;

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


