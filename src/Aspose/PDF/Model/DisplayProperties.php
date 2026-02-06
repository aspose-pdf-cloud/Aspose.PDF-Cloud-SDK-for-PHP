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
 * DisplayProperties Class 
 *
 * @category Class
 * @description Provides link to DisplayProperties.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;
use \Aspose\PDF\ObjectSerializer;

class DisplayProperties extends LinkElement 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DisplayProperties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'center_window' => 'bool',
        'direction' => '\Aspose\PDF\Model\Direction',
        'display_doc_title' => 'bool',
        'hide_menu_bar' => 'bool',
        'hide_tool_bar' => 'bool',
        'hide_window_ui' => 'bool',
        'non_full_screen_page_mode' => '\Aspose\PDF\Model\PageMode',
        'page_layout' => '\Aspose\PDF\Model\PageLayout',
        'page_mode' => '\Aspose\PDF\Model\PageMode'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'center_window' => null,
        'direction' => null,
        'display_doc_title' => null,
        'hide_menu_bar' => null,
        'hide_tool_bar' => null,
        'hide_window_ui' => null,
        'non_full_screen_page_mode' => null,
        'page_layout' => null,
        'page_mode' => null
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
        'center_window' => 'CenterWindow',
        'direction' => 'Direction',
        'display_doc_title' => 'DisplayDocTitle',
        'hide_menu_bar' => 'HideMenuBar',
        'hide_tool_bar' => 'HideToolBar',
        'hide_window_ui' => 'HideWindowUI',
        'non_full_screen_page_mode' => 'NonFullScreenPageMode',
        'page_layout' => 'PageLayout',
        'page_mode' => 'PageMode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'center_window' => 'setCenterWindow',
        'direction' => 'setDirection',
        'display_doc_title' => 'setDisplayDocTitle',
        'hide_menu_bar' => 'setHideMenuBar',
        'hide_tool_bar' => 'setHideToolBar',
        'hide_window_ui' => 'setHideWindowUi',
        'non_full_screen_page_mode' => 'setNonFullScreenPageMode',
        'page_layout' => 'setPageLayout',
        'page_mode' => 'setPageMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'center_window' => 'getCenterWindow',
        'direction' => 'getDirection',
        'display_doc_title' => 'getDisplayDocTitle',
        'hide_menu_bar' => 'getHideMenuBar',
        'hide_tool_bar' => 'getHideToolBar',
        'hide_window_ui' => 'getHideWindowUi',
        'non_full_screen_page_mode' => 'getNonFullScreenPageMode',
        'page_layout' => 'getPageLayout',
        'page_mode' => 'getPageMode'
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

        $this->container['center_window'] = isset($data['center_window']) ? $data['center_window'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['display_doc_title'] = isset($data['display_doc_title']) ? $data['display_doc_title'] : null;
        $this->container['hide_menu_bar'] = isset($data['hide_menu_bar']) ? $data['hide_menu_bar'] : null;
        $this->container['hide_tool_bar'] = isset($data['hide_tool_bar']) ? $data['hide_tool_bar'] : null;
        $this->container['hide_window_ui'] = isset($data['hide_window_ui']) ? $data['hide_window_ui'] : null;
        $this->container['non_full_screen_page_mode'] = isset($data['non_full_screen_page_mode']) ? $data['non_full_screen_page_mode'] : null;
        $this->container['page_layout'] = isset($data['page_layout']) ? $data['page_layout'] : null;
        $this->container['page_mode'] = isset($data['page_mode']) ? $data['page_mode'] : null;
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
     * Gets center_window
     *
     * @return bool
     */
    public function getCenterWindow()
    {
        return $this->container['center_window'];
    }

    /**
     * Sets center_window
     *
     * @param bool $center_window Gets or sets flag specifying whether position of the document's window will be centerd on the screen.
     *
     * @return $this
     */
    public function setCenterWindow($center_window)
    {
        $this->container['center_window'] = $center_window;

        return $this;
    }

    /**
     * Gets direction
     *
     * @return \Aspose\PDF\Model\Direction
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param \Aspose\PDF\Model\Direction $direction Gets or sets reading order of text: L2R (left to right) or R2L (right to left).
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets display_doc_title
     *
     * @return bool
     */
    public function getDisplayDocTitle()
    {
        return $this->container['display_doc_title'];
    }

    /**
     * Sets display_doc_title
     *
     * @param bool $display_doc_title Gets or sets flag specifying whether document's window title bar should display document title.
     *
     * @return $this
     */
    public function setDisplayDocTitle($display_doc_title)
    {
        $this->container['display_doc_title'] = $display_doc_title;

        return $this;
    }

    /**
     * Gets hide_menu_bar
     *
     * @return bool
     */
    public function getHideMenuBar()
    {
        return $this->container['hide_menu_bar'];
    }

    /**
     * Sets hide_menu_bar
     *
     * @param bool $hide_menu_bar Gets or sets flag specifying whether menu bar should be hidden when document is active.
     *
     * @return $this
     */
    public function setHideMenuBar($hide_menu_bar)
    {
        $this->container['hide_menu_bar'] = $hide_menu_bar;

        return $this;
    }

    /**
     * Gets hide_tool_bar
     *
     * @return bool
     */
    public function getHideToolBar()
    {
        return $this->container['hide_tool_bar'];
    }

    /**
     * Sets hide_tool_bar
     *
     * @param bool $hide_tool_bar Gets or sets flag specifying whether toolbar should be hidden when document is active.
     *
     * @return $this
     */
    public function setHideToolBar($hide_tool_bar)
    {
        $this->container['hide_tool_bar'] = $hide_tool_bar;

        return $this;
    }

    /**
     * Gets hide_window_ui
     *
     * @return bool
     */
    public function getHideWindowUi()
    {
        return $this->container['hide_window_ui'];
    }

    /**
     * Sets hide_window_ui
     *
     * @param bool $hide_window_ui Gets or sets flag specifying whether user interface elements should be hidden when document is active.
     *
     * @return $this
     */
    public function setHideWindowUi($hide_window_ui)
    {
        $this->container['hide_window_ui'] = $hide_window_ui;

        return $this;
    }

    /**
     * Gets non_full_screen_page_mode
     *
     * @return \Aspose\PDF\Model\PageMode
     */
    public function getNonFullScreenPageMode()
    {
        return $this->container['non_full_screen_page_mode'];
    }

    /**
     * Sets non_full_screen_page_mode
     *
     * @param \Aspose\PDF\Model\PageMode $non_full_screen_page_mode Gets or sets page mode, specifying how to display the document on exiting full-screen mode.
     *
     * @return $this
     */
    public function setNonFullScreenPageMode($non_full_screen_page_mode)
    {
        $this->container['non_full_screen_page_mode'] = $non_full_screen_page_mode;

        return $this;
    }

    /**
     * Gets page_layout
     *
     * @return \Aspose\PDF\Model\PageLayout
     */
    public function getPageLayout()
    {
        return $this->container['page_layout'];
    }

    /**
     * Sets page_layout
     *
     * @param \Aspose\PDF\Model\PageLayout $page_layout Gets or sets page layout which shall be used when the document is opened.
     *
     * @return $this
     */
    public function setPageLayout($page_layout)
    {
        $this->container['page_layout'] = $page_layout;

        return $this;
    }

    /**
     * Gets page_mode
     *
     * @return \Aspose\PDF\Model\PageMode
     */
    public function getPageMode()
    {
        return $this->container['page_mode'];
    }

    /**
     * Sets page_mode
     *
     * @param \Aspose\PDF\Model\PageMode $page_mode Gets or sets page mode, specifying how document should be displayed when opened.
     *
     * @return $this
     */
    public function setPageMode($page_mode)
    {
        $this->container['page_mode'] = $page_mode;

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


