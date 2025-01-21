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
 * Color Class 
 *
 * @category Class
 * @description Represents color DTO.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;

use \ArrayAccess;
use \Aspose\PDF\ObjectSerializer;

class Color implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Color';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'a' => 'int',
        'r' => 'int',
        'g' => 'int',
        'b' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'a' => 'byte',
        'r' => 'byte',
        'g' => 'byte',
        'b' => 'byte'
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
        'a' => 'A',
        'r' => 'R',
        'g' => 'G',
        'b' => 'B'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'a' => 'setA',
        'r' => 'setR',
        'g' => 'setG',
        'b' => 'setB'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'a' => 'getA',
        'r' => 'getR',
        'g' => 'getG',
        'b' => 'getB'
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
        $this->container['a'] = isset($data['a']) ? $data['a'] : null;
        $this->container['r'] = isset($data['r']) ? $data['r'] : null;
        $this->container['g'] = isset($data['g']) ? $data['g'] : null;
        $this->container['b'] = isset($data['b']) ? $data['b'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['a'] === null) {
            $invalidProperties[] = "'a' can't be null";
        }
        if ($this->container['r'] === null) {
            $invalidProperties[] = "'r' can't be null";
        }
        if ($this->container['g'] === null) {
            $invalidProperties[] = "'g' can't be null";
        }
        if ($this->container['b'] === null) {
            $invalidProperties[] = "'b' can't be null";
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

        if ($this->container['a'] === null) {
            return false;
        }
        if ($this->container['r'] === null) {
            return false;
        }
        if ($this->container['g'] === null) {
            return false;
        }
        if ($this->container['b'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets a
     *
     * @return int
     */
    public function getA()
    {
        return $this->container['a'];
    }

    /**
     * Sets a
     *
     * @param int $a Alpha component.
     *
     * @return $this
     */
    public function setA($a)
    {
        $this->container['a'] = $a;

        return $this;
    }

    /**
     * Gets r
     *
     * @return int
     */
    public function getR()
    {
        return $this->container['r'];
    }

    /**
     * Sets r
     *
     * @param int $r Red component.
     *
     * @return $this
     */
    public function setR($r)
    {
        $this->container['r'] = $r;

        return $this;
    }

    /**
     * Gets g
     *
     * @return int
     */
    public function getG()
    {
        return $this->container['g'];
    }

    /**
     * Sets g
     *
     * @param int $g Green component.
     *
     * @return $this
     */
    public function setG($g)
    {
        $this->container['g'] = $g;

        return $this;
    }

    /**
     * Gets b
     *
     * @return int
     */
    public function getB()
    {
        return $this->container['b'];
    }

    /**
     * Sets b
     *
     * @param int $b Blue component.
     *
     * @return $this
     */
    public function setB($b)
    {
        $this->container['b'] = $b;

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


