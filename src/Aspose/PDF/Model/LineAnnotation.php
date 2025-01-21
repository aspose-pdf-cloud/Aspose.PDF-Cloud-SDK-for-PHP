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
 * LineAnnotation Class 
 *
 * @category Class
 * @description Provides LineAnnotation.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;
use \Aspose\PDF\ObjectSerializer;

class LineAnnotation extends MarkupAnnotation 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LineAnnotation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'starting' => '\Aspose\PDF\Model\Point',
        'starting_style' => '\Aspose\PDF\Model\LineEnding',
        'ending' => '\Aspose\PDF\Model\Point',
        'ending_style' => '\Aspose\PDF\Model\LineEnding',
        'interior_color' => '\Aspose\PDF\Model\Color',
        'leader_line' => 'double',
        'leader_line_extension' => 'double',
        'leader_line_offset' => 'double',
        'show_caption' => 'bool',
        'caption_offset' => '\Aspose\PDF\Model\Point',
        'caption_position' => '\Aspose\PDF\Model\CaptionPosition',
        'intent' => '\Aspose\PDF\Model\LineIntent'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'starting' => null,
        'starting_style' => null,
        'ending' => null,
        'ending_style' => null,
        'interior_color' => null,
        'leader_line' => 'double',
        'leader_line_extension' => 'double',
        'leader_line_offset' => 'double',
        'show_caption' => null,
        'caption_offset' => null,
        'caption_position' => null,
        'intent' => null
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
        'starting' => 'Starting',
        'starting_style' => 'StartingStyle',
        'ending' => 'Ending',
        'ending_style' => 'EndingStyle',
        'interior_color' => 'InteriorColor',
        'leader_line' => 'LeaderLine',
        'leader_line_extension' => 'LeaderLineExtension',
        'leader_line_offset' => 'LeaderLineOffset',
        'show_caption' => 'ShowCaption',
        'caption_offset' => 'CaptionOffset',
        'caption_position' => 'CaptionPosition',
        'intent' => 'Intent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'starting' => 'setStarting',
        'starting_style' => 'setStartingStyle',
        'ending' => 'setEnding',
        'ending_style' => 'setEndingStyle',
        'interior_color' => 'setInteriorColor',
        'leader_line' => 'setLeaderLine',
        'leader_line_extension' => 'setLeaderLineExtension',
        'leader_line_offset' => 'setLeaderLineOffset',
        'show_caption' => 'setShowCaption',
        'caption_offset' => 'setCaptionOffset',
        'caption_position' => 'setCaptionPosition',
        'intent' => 'setIntent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'starting' => 'getStarting',
        'starting_style' => 'getStartingStyle',
        'ending' => 'getEnding',
        'ending_style' => 'getEndingStyle',
        'interior_color' => 'getInteriorColor',
        'leader_line' => 'getLeaderLine',
        'leader_line_extension' => 'getLeaderLineExtension',
        'leader_line_offset' => 'getLeaderLineOffset',
        'show_caption' => 'getShowCaption',
        'caption_offset' => 'getCaptionOffset',
        'caption_position' => 'getCaptionPosition',
        'intent' => 'getIntent'
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

        $this->container['starting'] = isset($data['starting']) ? $data['starting'] : null;
        $this->container['starting_style'] = isset($data['starting_style']) ? $data['starting_style'] : null;
        $this->container['ending'] = isset($data['ending']) ? $data['ending'] : null;
        $this->container['ending_style'] = isset($data['ending_style']) ? $data['ending_style'] : null;
        $this->container['interior_color'] = isset($data['interior_color']) ? $data['interior_color'] : null;
        $this->container['leader_line'] = isset($data['leader_line']) ? $data['leader_line'] : null;
        $this->container['leader_line_extension'] = isset($data['leader_line_extension']) ? $data['leader_line_extension'] : null;
        $this->container['leader_line_offset'] = isset($data['leader_line_offset']) ? $data['leader_line_offset'] : null;
        $this->container['show_caption'] = isset($data['show_caption']) ? $data['show_caption'] : null;
        $this->container['caption_offset'] = isset($data['caption_offset']) ? $data['caption_offset'] : null;
        $this->container['caption_position'] = isset($data['caption_position']) ? $data['caption_position'] : null;
        $this->container['intent'] = isset($data['intent']) ? $data['intent'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['starting'] === null) {
            $invalidProperties[] = "'starting' can't be null";
        }
        if ($this->container['ending'] === null) {
            $invalidProperties[] = "'ending' can't be null";
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

        if ($this->container['starting'] === null) {
            return false;
        }
        if ($this->container['ending'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets starting
     *
     * @return \Aspose\PDF\Model\Point
     */
    public function getStarting()
    {
        return $this->container['starting'];
    }

    /**
     * Sets starting
     *
     * @param \Aspose\PDF\Model\Point $starting Gets or sets starting point of line.
     *
     * @return $this
     */
    public function setStarting($starting)
    {
        $this->container['starting'] = $starting;

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
     * @param \Aspose\PDF\Model\LineEnding $starting_style Gets or sets line ending style for line starting point.
     *
     * @return $this
     */
    public function setStartingStyle($starting_style)
    {
        $this->container['starting_style'] = $starting_style;

        return $this;
    }

    /**
     * Gets ending
     *
     * @return \Aspose\PDF\Model\Point
     */
    public function getEnding()
    {
        return $this->container['ending'];
    }

    /**
     * Sets ending
     *
     * @param \Aspose\PDF\Model\Point $ending Gets or sets ending point of line.
     *
     * @return $this
     */
    public function setEnding($ending)
    {
        $this->container['ending'] = $ending;

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
     * @param \Aspose\PDF\Model\LineEnding $ending_style Gets or sets ending style for end point of line.
     *
     * @return $this
     */
    public function setEndingStyle($ending_style)
    {
        $this->container['ending_style'] = $ending_style;

        return $this;
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
     * @param \Aspose\PDF\Model\Color $interior_color Gets or sets interior color of the annotation.
     *
     * @return $this
     */
    public function setInteriorColor($interior_color)
    {
        $this->container['interior_color'] = $interior_color;

        return $this;
    }

    /**
     * Gets leader_line
     *
     * @return double
     */
    public function getLeaderLine()
    {
        return $this->container['leader_line'];
    }

    /**
     * Sets leader_line
     *
     * @param double $leader_line Gets or sets leader line length.
     *
     * @return $this
     */
    public function setLeaderLine($leader_line)
    {
        $this->container['leader_line'] = $leader_line;

        return $this;
    }

    /**
     * Gets leader_line_extension
     *
     * @return double
     */
    public function getLeaderLineExtension()
    {
        return $this->container['leader_line_extension'];
    }

    /**
     * Sets leader_line_extension
     *
     * @param double $leader_line_extension Gets or sets length of leader line extension.
     *
     * @return $this
     */
    public function setLeaderLineExtension($leader_line_extension)
    {
        $this->container['leader_line_extension'] = $leader_line_extension;

        return $this;
    }

    /**
     * Gets leader_line_offset
     *
     * @return double
     */
    public function getLeaderLineOffset()
    {
        return $this->container['leader_line_offset'];
    }

    /**
     * Sets leader_line_offset
     *
     * @param double $leader_line_offset Gets or sets leader line offset.
     *
     * @return $this
     */
    public function setLeaderLineOffset($leader_line_offset)
    {
        $this->container['leader_line_offset'] = $leader_line_offset;

        return $this;
    }

    /**
     * Gets show_caption
     *
     * @return bool
     */
    public function getShowCaption()
    {
        return $this->container['show_caption'];
    }

    /**
     * Sets show_caption
     *
     * @param bool $show_caption Gets or sets boolean flag which determinies is contents must be shown as caption.
     *
     * @return $this
     */
    public function setShowCaption($show_caption)
    {
        $this->container['show_caption'] = $show_caption;

        return $this;
    }

    /**
     * Gets caption_offset
     *
     * @return \Aspose\PDF\Model\Point
     */
    public function getCaptionOffset()
    {
        return $this->container['caption_offset'];
    }

    /**
     * Sets caption_offset
     *
     * @param \Aspose\PDF\Model\Point $caption_offset Gets or sets caption text offset from its normal position.
     *
     * @return $this
     */
    public function setCaptionOffset($caption_offset)
    {
        $this->container['caption_offset'] = $caption_offset;

        return $this;
    }

    /**
     * Gets caption_position
     *
     * @return \Aspose\PDF\Model\CaptionPosition
     */
    public function getCaptionPosition()
    {
        return $this->container['caption_position'];
    }

    /**
     * Sets caption_position
     *
     * @param \Aspose\PDF\Model\CaptionPosition $caption_position Gets or sets annotation caption position.
     *
     * @return $this
     */
    public function setCaptionPosition($caption_position)
    {
        $this->container['caption_position'] = $caption_position;

        return $this;
    }

    /**
     * Gets intent
     *
     * @return \Aspose\PDF\Model\LineIntent
     */
    public function getIntent()
    {
        return $this->container['intent'];
    }

    /**
     * Sets intent
     *
     * @param \Aspose\PDF\Model\LineIntent $intent Gets or sets the intent of the line annotation.
     *
     * @return $this
     */
    public function setIntent($intent)
    {
        $this->container['intent'] = $intent;

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


