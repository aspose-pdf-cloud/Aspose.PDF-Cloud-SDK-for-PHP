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
 * DocumentPrivilege Class 
 *
 * @category Class
 * @description Represents the privileges for accessing Pdf file.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;

use \ArrayAccess;
use \Aspose\PDF\ObjectSerializer;

class DocumentPrivilege implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DocumentPrivilege';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allow_print' => 'bool',
        'allow_degraded_printing' => 'bool',
        'allow_modify_contents' => 'bool',
        'allow_copy' => 'bool',
        'allow_modify_annotations' => 'bool',
        'allow_fill_in' => 'bool',
        'allow_screen_readers' => 'bool',
        'allow_assembly' => 'bool',
        'print_allow_level' => 'int',
        'change_allow_level' => 'int',
        'copy_allow_level' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allow_print' => null,
        'allow_degraded_printing' => null,
        'allow_modify_contents' => null,
        'allow_copy' => null,
        'allow_modify_annotations' => null,
        'allow_fill_in' => null,
        'allow_screen_readers' => null,
        'allow_assembly' => null,
        'print_allow_level' => 'int32',
        'change_allow_level' => 'int32',
        'copy_allow_level' => 'int32'
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
        'allow_print' => 'AllowPrint',
        'allow_degraded_printing' => 'AllowDegradedPrinting',
        'allow_modify_contents' => 'AllowModifyContents',
        'allow_copy' => 'AllowCopy',
        'allow_modify_annotations' => 'AllowModifyAnnotations',
        'allow_fill_in' => 'AllowFillIn',
        'allow_screen_readers' => 'AllowScreenReaders',
        'allow_assembly' => 'AllowAssembly',
        'print_allow_level' => 'PrintAllowLevel',
        'change_allow_level' => 'ChangeAllowLevel',
        'copy_allow_level' => 'CopyAllowLevel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_print' => 'setAllowPrint',
        'allow_degraded_printing' => 'setAllowDegradedPrinting',
        'allow_modify_contents' => 'setAllowModifyContents',
        'allow_copy' => 'setAllowCopy',
        'allow_modify_annotations' => 'setAllowModifyAnnotations',
        'allow_fill_in' => 'setAllowFillIn',
        'allow_screen_readers' => 'setAllowScreenReaders',
        'allow_assembly' => 'setAllowAssembly',
        'print_allow_level' => 'setPrintAllowLevel',
        'change_allow_level' => 'setChangeAllowLevel',
        'copy_allow_level' => 'setCopyAllowLevel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_print' => 'getAllowPrint',
        'allow_degraded_printing' => 'getAllowDegradedPrinting',
        'allow_modify_contents' => 'getAllowModifyContents',
        'allow_copy' => 'getAllowCopy',
        'allow_modify_annotations' => 'getAllowModifyAnnotations',
        'allow_fill_in' => 'getAllowFillIn',
        'allow_screen_readers' => 'getAllowScreenReaders',
        'allow_assembly' => 'getAllowAssembly',
        'print_allow_level' => 'getPrintAllowLevel',
        'change_allow_level' => 'getChangeAllowLevel',
        'copy_allow_level' => 'getCopyAllowLevel'
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
        $this->container['allow_print'] = isset($data['allow_print']) ? $data['allow_print'] : null;
        $this->container['allow_degraded_printing'] = isset($data['allow_degraded_printing']) ? $data['allow_degraded_printing'] : null;
        $this->container['allow_modify_contents'] = isset($data['allow_modify_contents']) ? $data['allow_modify_contents'] : null;
        $this->container['allow_copy'] = isset($data['allow_copy']) ? $data['allow_copy'] : null;
        $this->container['allow_modify_annotations'] = isset($data['allow_modify_annotations']) ? $data['allow_modify_annotations'] : null;
        $this->container['allow_fill_in'] = isset($data['allow_fill_in']) ? $data['allow_fill_in'] : null;
        $this->container['allow_screen_readers'] = isset($data['allow_screen_readers']) ? $data['allow_screen_readers'] : null;
        $this->container['allow_assembly'] = isset($data['allow_assembly']) ? $data['allow_assembly'] : null;
        $this->container['print_allow_level'] = isset($data['print_allow_level']) ? $data['print_allow_level'] : null;
        $this->container['change_allow_level'] = isset($data['change_allow_level']) ? $data['change_allow_level'] : null;
        $this->container['copy_allow_level'] = isset($data['copy_allow_level']) ? $data['copy_allow_level'] : null;
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
     * Gets allow_print
     *
     * @return bool
     */
    public function getAllowPrint()
    {
        return $this->container['allow_print'];
    }

    /**
     * Sets allow_print
     *
     * @param bool $allow_print Sets the permission which allow print or not.  true is allow and false or not set is forbidden.
     *
     * @return $this
     */
    public function setAllowPrint($allow_print)
    {
        $this->container['allow_print'] = $allow_print;

        return $this;
    }

    /**
     * Gets allow_degraded_printing
     *
     * @return bool
     */
    public function getAllowDegradedPrinting()
    {
        return $this->container['allow_degraded_printing'];
    }

    /**
     * Sets allow_degraded_printing
     *
     * @param bool $allow_degraded_printing Sets the permission which allow degraded printing or not.  true is allow and false or not set is forbidden.
     *
     * @return $this
     */
    public function setAllowDegradedPrinting($allow_degraded_printing)
    {
        $this->container['allow_degraded_printing'] = $allow_degraded_printing;

        return $this;
    }

    /**
     * Gets allow_modify_contents
     *
     * @return bool
     */
    public function getAllowModifyContents()
    {
        return $this->container['allow_modify_contents'];
    }

    /**
     * Sets allow_modify_contents
     *
     * @param bool $allow_modify_contents Sets the permission which allow modify contents or not.  true is allow and false or not set is forbidden.
     *
     * @return $this
     */
    public function setAllowModifyContents($allow_modify_contents)
    {
        $this->container['allow_modify_contents'] = $allow_modify_contents;

        return $this;
    }

    /**
     * Gets allow_copy
     *
     * @return bool
     */
    public function getAllowCopy()
    {
        return $this->container['allow_copy'];
    }

    /**
     * Sets allow_copy
     *
     * @param bool $allow_copy Sets the permission which allow copy or not.  true is allow and false or not set is forbidden.
     *
     * @return $this
     */
    public function setAllowCopy($allow_copy)
    {
        $this->container['allow_copy'] = $allow_copy;

        return $this;
    }

    /**
     * Gets allow_modify_annotations
     *
     * @return bool
     */
    public function getAllowModifyAnnotations()
    {
        return $this->container['allow_modify_annotations'];
    }

    /**
     * Sets allow_modify_annotations
     *
     * @param bool $allow_modify_annotations Sets the permission which allow modify annotations or not.  true is allow and false or not set is forbidden.
     *
     * @return $this
     */
    public function setAllowModifyAnnotations($allow_modify_annotations)
    {
        $this->container['allow_modify_annotations'] = $allow_modify_annotations;

        return $this;
    }

    /**
     * Gets allow_fill_in
     *
     * @return bool
     */
    public function getAllowFillIn()
    {
        return $this->container['allow_fill_in'];
    }

    /**
     * Sets allow_fill_in
     *
     * @param bool $allow_fill_in Sets the permission which allow fill in forms or not.  true is allow and false or not set is forbidden.
     *
     * @return $this
     */
    public function setAllowFillIn($allow_fill_in)
    {
        $this->container['allow_fill_in'] = $allow_fill_in;

        return $this;
    }

    /**
     * Gets allow_screen_readers
     *
     * @return bool
     */
    public function getAllowScreenReaders()
    {
        return $this->container['allow_screen_readers'];
    }

    /**
     * Sets allow_screen_readers
     *
     * @param bool $allow_screen_readers Sets the permission which allow screen readers or not.  true is allow and false or not set is forbidden.
     *
     * @return $this
     */
    public function setAllowScreenReaders($allow_screen_readers)
    {
        $this->container['allow_screen_readers'] = $allow_screen_readers;

        return $this;
    }

    /**
     * Gets allow_assembly
     *
     * @return bool
     */
    public function getAllowAssembly()
    {
        return $this->container['allow_assembly'];
    }

    /**
     * Sets allow_assembly
     *
     * @param bool $allow_assembly Sets the permission which allow assembly or not.  true is allow and false or not set is forbidden.
     *
     * @return $this
     */
    public function setAllowAssembly($allow_assembly)
    {
        $this->container['allow_assembly'] = $allow_assembly;

        return $this;
    }

    /**
     * Gets print_allow_level
     *
     * @return int
     */
    public function getPrintAllowLevel()
    {
        return $this->container['print_allow_level'];
    }

    /**
     * Sets print_allow_level
     *
     * @param int $print_allow_level Sets the print level of  document's privilege. Just as the Adobe Professional's Printing Allowed settings. 0: None. 1: Low Resolution (150 dpi). 2: High Resolution.
     *
     * @return $this
     */
    public function setPrintAllowLevel($print_allow_level)
    {
        $this->container['print_allow_level'] = $print_allow_level;

        return $this;
    }

    /**
     * Gets change_allow_level
     *
     * @return int
     */
    public function getChangeAllowLevel()
    {
        return $this->container['change_allow_level'];
    }

    /**
     * Sets change_allow_level
     *
     * @param int $change_allow_level Sets the change level of  document's privilege. Just as the Adobe Professional's Changes Allowed settings. 0: None. 1: Inserting, Deleting and Rotating pages. 2: Filling in form fields and signing existing signature fields. 3: Commenting, filling in form fields, and signing existing signature fields. 4: Any except extracting pages.
     *
     * @return $this
     */
    public function setChangeAllowLevel($change_allow_level)
    {
        $this->container['change_allow_level'] = $change_allow_level;

        return $this;
    }

    /**
     * Gets copy_allow_level
     *
     * @return int
     */
    public function getCopyAllowLevel()
    {
        return $this->container['copy_allow_level'];
    }

    /**
     * Sets copy_allow_level
     *
     * @param int $copy_allow_level Sets the copy level of  document's privilege. Just as the Adobe Professional's permission settings. 0: None. 1: Enable text access for screen reader devices for the visually impaired. 2: Enable copying of text, images and other content.
     *
     * @return $this
     */
    public function setCopyAllowLevel($copy_allow_level)
    {
        $this->container['copy_allow_level'] = $copy_allow_level;

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


