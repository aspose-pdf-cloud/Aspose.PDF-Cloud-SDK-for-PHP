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
 * Bookmark Class 
 *
 * @category Class
 * @description Provides link to bookmark.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;
use \Aspose\PDF\ObjectSerializer;

class Bookmark extends LinkElement 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Bookmark';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'title' => 'string',
        'italic' => 'bool',
        'bold' => 'bool',
        'color' => '\Aspose\PDF\Model\Color',
        'action' => 'string',
        'level' => 'int',
        'destination' => 'string',
        'page_display' => 'string',
        'page_display_bottom' => 'int',
        'page_display_left' => 'int',
        'page_display_right' => 'int',
        'page_display_top' => 'int',
        'page_display_zoom' => 'int',
        'page_number' => 'int',
        'remote_file' => 'string',
        'bookmarks' => '\Aspose\PDF\Model\Bookmarks'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'title' => null,
        'italic' => null,
        'bold' => null,
        'color' => null,
        'action' => null,
        'level' => 'int32',
        'destination' => null,
        'page_display' => null,
        'page_display_bottom' => 'int32',
        'page_display_left' => 'int32',
        'page_display_right' => 'int32',
        'page_display_top' => 'int32',
        'page_display_zoom' => 'int32',
        'page_number' => 'int32',
        'remote_file' => null,
        'bookmarks' => null
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
        'title' => 'Title',
        'italic' => 'Italic',
        'bold' => 'Bold',
        'color' => 'Color',
        'action' => 'Action',
        'level' => 'Level',
        'destination' => 'Destination',
        'page_display' => 'PageDisplay',
        'page_display_bottom' => 'PageDisplay_Bottom',
        'page_display_left' => 'PageDisplay_Left',
        'page_display_right' => 'PageDisplay_Right',
        'page_display_top' => 'PageDisplay_Top',
        'page_display_zoom' => 'PageDisplay_Zoom',
        'page_number' => 'PageNumber',
        'remote_file' => 'RemoteFile',
        'bookmarks' => 'Bookmarks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'italic' => 'setItalic',
        'bold' => 'setBold',
        'color' => 'setColor',
        'action' => 'setAction',
        'level' => 'setLevel',
        'destination' => 'setDestination',
        'page_display' => 'setPageDisplay',
        'page_display_bottom' => 'setPageDisplayBottom',
        'page_display_left' => 'setPageDisplayLeft',
        'page_display_right' => 'setPageDisplayRight',
        'page_display_top' => 'setPageDisplayTop',
        'page_display_zoom' => 'setPageDisplayZoom',
        'page_number' => 'setPageNumber',
        'remote_file' => 'setRemoteFile',
        'bookmarks' => 'setBookmarks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'italic' => 'getItalic',
        'bold' => 'getBold',
        'color' => 'getColor',
        'action' => 'getAction',
        'level' => 'getLevel',
        'destination' => 'getDestination',
        'page_display' => 'getPageDisplay',
        'page_display_bottom' => 'getPageDisplayBottom',
        'page_display_left' => 'getPageDisplayLeft',
        'page_display_right' => 'getPageDisplayRight',
        'page_display_top' => 'getPageDisplayTop',
        'page_display_zoom' => 'getPageDisplayZoom',
        'page_number' => 'getPageNumber',
        'remote_file' => 'getRemoteFile',
        'bookmarks' => 'getBookmarks'
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

        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['italic'] = isset($data['italic']) ? $data['italic'] : null;
        $this->container['bold'] = isset($data['bold']) ? $data['bold'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['page_display'] = isset($data['page_display']) ? $data['page_display'] : null;
        $this->container['page_display_bottom'] = isset($data['page_display_bottom']) ? $data['page_display_bottom'] : null;
        $this->container['page_display_left'] = isset($data['page_display_left']) ? $data['page_display_left'] : null;
        $this->container['page_display_right'] = isset($data['page_display_right']) ? $data['page_display_right'] : null;
        $this->container['page_display_top'] = isset($data['page_display_top']) ? $data['page_display_top'] : null;
        $this->container['page_display_zoom'] = isset($data['page_display_zoom']) ? $data['page_display_zoom'] : null;
        $this->container['page_number'] = isset($data['page_number']) ? $data['page_number'] : null;
        $this->container['remote_file'] = isset($data['remote_file']) ? $data['remote_file'] : null;
        $this->container['bookmarks'] = isset($data['bookmarks']) ? $data['bookmarks'] : null;
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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Get the Title;
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets italic
     *
     * @return bool
     */
    public function getItalic()
    {
        return $this->container['italic'];
    }

    /**
     * Sets italic
     *
     * @param bool $italic Is bookmark italic.
     *
     * @return $this
     */
    public function setItalic($italic)
    {
        $this->container['italic'] = $italic;

        return $this;
    }

    /**
     * Gets bold
     *
     * @return bool
     */
    public function getBold()
    {
        return $this->container['bold'];
    }

    /**
     * Sets bold
     *
     * @param bool $bold Is bookmark bold.
     *
     * @return $this
     */
    public function setBold($bold)
    {
        $this->container['bold'] = $bold;

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
     * @param \Aspose\PDF\Model\Color $color Get the color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string $action Gets or sets the action bound with the bookmark. If PageNumber is presented the action can not be specified. The action type includes: \"GoTo\", \"GoToR\", \"Launch\", \"Named\".
     *
     * @return $this
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets level
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param int $level Gets or sets bookmark's hierarchy level.
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets destination
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param string $destination Gets or sets bookmark's destination page. Required if action is set as string.Empty.
     *
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets page_display
     *
     * @return string
     */
    public function getPageDisplay()
    {
        return $this->container['page_display'];
    }

    /**
     * Sets page_display
     *
     * @param string $page_display Gets or sets the type of display bookmark's destination page.
     *
     * @return $this
     */
    public function setPageDisplay($page_display)
    {
        $this->container['page_display'] = $page_display;

        return $this;
    }

    /**
     * Gets page_display_bottom
     *
     * @return int
     */
    public function getPageDisplayBottom()
    {
        return $this->container['page_display_bottom'];
    }

    /**
     * Sets page_display_bottom
     *
     * @param int $page_display_bottom Gets or sets the bottom coordinate of page display.
     *
     * @return $this
     */
    public function setPageDisplayBottom($page_display_bottom)
    {
        $this->container['page_display_bottom'] = $page_display_bottom;

        return $this;
    }

    /**
     * Gets page_display_left
     *
     * @return int
     */
    public function getPageDisplayLeft()
    {
        return $this->container['page_display_left'];
    }

    /**
     * Sets page_display_left
     *
     * @param int $page_display_left Gets or sets the left coordinate of page display.
     *
     * @return $this
     */
    public function setPageDisplayLeft($page_display_left)
    {
        $this->container['page_display_left'] = $page_display_left;

        return $this;
    }

    /**
     * Gets page_display_right
     *
     * @return int
     */
    public function getPageDisplayRight()
    {
        return $this->container['page_display_right'];
    }

    /**
     * Sets page_display_right
     *
     * @param int $page_display_right Gets or sets the right coordinate of page display.
     *
     * @return $this
     */
    public function setPageDisplayRight($page_display_right)
    {
        $this->container['page_display_right'] = $page_display_right;

        return $this;
    }

    /**
     * Gets page_display_top
     *
     * @return int
     */
    public function getPageDisplayTop()
    {
        return $this->container['page_display_top'];
    }

    /**
     * Sets page_display_top
     *
     * @param int $page_display_top Gets or sets the top coordinate of page display.
     *
     * @return $this
     */
    public function setPageDisplayTop($page_display_top)
    {
        $this->container['page_display_top'] = $page_display_top;

        return $this;
    }

    /**
     * Gets page_display_zoom
     *
     * @return int
     */
    public function getPageDisplayZoom()
    {
        return $this->container['page_display_zoom'];
    }

    /**
     * Sets page_display_zoom
     *
     * @param int $page_display_zoom Gets or sets the zoom factor of page display.
     *
     * @return $this
     */
    public function setPageDisplayZoom($page_display_zoom)
    {
        $this->container['page_display_zoom'] = $page_display_zoom;

        return $this;
    }

    /**
     * Gets page_number
     *
     * @return int
     */
    public function getPageNumber()
    {
        return $this->container['page_number'];
    }

    /**
     * Sets page_number
     *
     * @param int $page_number Gets or sets the number of bookmark's destination page.
     *
     * @return $this
     */
    public function setPageNumber($page_number)
    {
        $this->container['page_number'] = $page_number;

        return $this;
    }

    /**
     * Gets remote_file
     *
     * @return string
     */
    public function getRemoteFile()
    {
        return $this->container['remote_file'];
    }

    /**
     * Sets remote_file
     *
     * @param string $remote_file Gets or sets the file (path) which is required for \"GoToR\" action of bookmark.
     *
     * @return $this
     */
    public function setRemoteFile($remote_file)
    {
        $this->container['remote_file'] = $remote_file;

        return $this;
    }

    /**
     * Gets bookmarks
     *
     * @return \Aspose\PDF\Model\Bookmarks
     */
    public function getBookmarks()
    {
        return $this->container['bookmarks'];
    }

    /**
     * Sets bookmarks
     *
     * @param \Aspose\PDF\Model\Bookmarks $bookmarks The children bookmarks.
     *
     * @return $this
     */
    public function setBookmarks($bookmarks)
    {
        $this->container['bookmarks'] = $bookmarks;

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


