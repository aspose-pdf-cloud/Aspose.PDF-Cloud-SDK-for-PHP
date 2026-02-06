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
 * OptimizeOptions Class 
 *
 * @category Class
 * @description Represents Pdf optimize options.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;

use \ArrayAccess;
use \Aspose\PDF\ObjectSerializer;

class OptimizeOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OptimizeOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'password' => 'string',
        'allow_reuse_page_content' => 'bool',
        'compress_images' => 'bool',
        'image_quality' => 'int',
        'link_duplcate_streams' => 'bool',
        'remove_unused_objects' => 'bool',
        'remove_unused_streams' => 'bool',
        'unembed_fonts' => 'bool',
        'resize_images' => 'bool',
        'max_resolution' => 'int',
        'subset_fonts' => 'bool',
        'remove_private_info' => 'bool',
        'image_encoding' => '\Aspose\PDF\Model\ImageEncoding',
        'image_compression_version' => '\Aspose\PDF\Model\ImageCompressionVersion'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'password' => null,
        'allow_reuse_page_content' => null,
        'compress_images' => null,
        'image_quality' => 'int32',
        'link_duplcate_streams' => null,
        'remove_unused_objects' => null,
        'remove_unused_streams' => null,
        'unembed_fonts' => null,
        'resize_images' => null,
        'max_resolution' => 'int32',
        'subset_fonts' => null,
        'remove_private_info' => null,
        'image_encoding' => null,
        'image_compression_version' => null
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
        'password' => 'Password',
        'allow_reuse_page_content' => 'AllowReusePageContent',
        'compress_images' => 'CompressImages',
        'image_quality' => 'ImageQuality',
        'link_duplcate_streams' => 'LinkDuplcateStreams',
        'remove_unused_objects' => 'RemoveUnusedObjects',
        'remove_unused_streams' => 'RemoveUnusedStreams',
        'unembed_fonts' => 'UnembedFonts',
        'resize_images' => 'ResizeImages',
        'max_resolution' => 'MaxResolution',
        'subset_fonts' => 'SubsetFonts',
        'remove_private_info' => 'RemovePrivateInfo',
        'image_encoding' => 'ImageEncoding',
        'image_compression_version' => 'ImageCompressionVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'password' => 'setPassword',
        'allow_reuse_page_content' => 'setAllowReusePageContent',
        'compress_images' => 'setCompressImages',
        'image_quality' => 'setImageQuality',
        'link_duplcate_streams' => 'setLinkDuplcateStreams',
        'remove_unused_objects' => 'setRemoveUnusedObjects',
        'remove_unused_streams' => 'setRemoveUnusedStreams',
        'unembed_fonts' => 'setUnembedFonts',
        'resize_images' => 'setResizeImages',
        'max_resolution' => 'setMaxResolution',
        'subset_fonts' => 'setSubsetFonts',
        'remove_private_info' => 'setRemovePrivateInfo',
        'image_encoding' => 'setImageEncoding',
        'image_compression_version' => 'setImageCompressionVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'password' => 'getPassword',
        'allow_reuse_page_content' => 'getAllowReusePageContent',
        'compress_images' => 'getCompressImages',
        'image_quality' => 'getImageQuality',
        'link_duplcate_streams' => 'getLinkDuplcateStreams',
        'remove_unused_objects' => 'getRemoveUnusedObjects',
        'remove_unused_streams' => 'getRemoveUnusedStreams',
        'unembed_fonts' => 'getUnembedFonts',
        'resize_images' => 'getResizeImages',
        'max_resolution' => 'getMaxResolution',
        'subset_fonts' => 'getSubsetFonts',
        'remove_private_info' => 'getRemovePrivateInfo',
        'image_encoding' => 'getImageEncoding',
        'image_compression_version' => 'getImageCompressionVersion'
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
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['allow_reuse_page_content'] = isset($data['allow_reuse_page_content']) ? $data['allow_reuse_page_content'] : null;
        $this->container['compress_images'] = isset($data['compress_images']) ? $data['compress_images'] : null;
        $this->container['image_quality'] = isset($data['image_quality']) ? $data['image_quality'] : null;
        $this->container['link_duplcate_streams'] = isset($data['link_duplcate_streams']) ? $data['link_duplcate_streams'] : null;
        $this->container['remove_unused_objects'] = isset($data['remove_unused_objects']) ? $data['remove_unused_objects'] : null;
        $this->container['remove_unused_streams'] = isset($data['remove_unused_streams']) ? $data['remove_unused_streams'] : null;
        $this->container['unembed_fonts'] = isset($data['unembed_fonts']) ? $data['unembed_fonts'] : null;
        $this->container['resize_images'] = isset($data['resize_images']) ? $data['resize_images'] : null;
        $this->container['max_resolution'] = isset($data['max_resolution']) ? $data['max_resolution'] : null;
        $this->container['subset_fonts'] = isset($data['subset_fonts']) ? $data['subset_fonts'] : null;
        $this->container['remove_private_info'] = isset($data['remove_private_info']) ? $data['remove_private_info'] : null;
        $this->container['image_encoding'] = isset($data['image_encoding']) ? $data['image_encoding'] : null;
        $this->container['image_compression_version'] = isset($data['image_compression_version']) ? $data['image_compression_version'] : null;
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
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password Specifies document password (if any) encoded with base-64.
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets allow_reuse_page_content
     *
     * @return bool
     */
    public function getAllowReusePageContent()
    {
        return $this->container['allow_reuse_page_content'];
    }

    /**
     * Sets allow_reuse_page_content
     *
     * @param bool $allow_reuse_page_content If true page contents will be reused when document is optimized for equal pages. LinkDuplcateStreams option must be set to true.
     *
     * @return $this
     */
    public function setAllowReusePageContent($allow_reuse_page_content)
    {
        $this->container['allow_reuse_page_content'] = $allow_reuse_page_content;

        return $this;
    }

    /**
     * Gets compress_images
     *
     * @return bool
     */
    public function getCompressImages()
    {
        return $this->container['compress_images'];
    }

    /**
     * Sets compress_images
     *
     * @param bool $compress_images If this flag is set to true images will be compressed in the document. Compression level is specified with ImageQuality property.
     *
     * @return $this
     */
    public function setCompressImages($compress_images)
    {
        $this->container['compress_images'] = $compress_images;

        return $this;
    }

    /**
     * Gets image_quality
     *
     * @return int
     */
    public function getImageQuality()
    {
        return $this->container['image_quality'];
    }

    /**
     * Sets image_quality
     *
     * @param int $image_quality Specifies level of image compression when CompressImages flag is used.
     *
     * @return $this
     */
    public function setImageQuality($image_quality)
    {
        $this->container['image_quality'] = $image_quality;

        return $this;
    }

    /**
     * Gets link_duplcate_streams
     *
     * @return bool
     */
    public function getLinkDuplcateStreams()
    {
        return $this->container['link_duplcate_streams'];
    }

    /**
     * Sets link_duplcate_streams
     *
     * @param bool $link_duplcate_streams If this flag is set to true, Resource streams will be analyzed. If duplicate streams are found (i.e. if stream contents is equal), then thees streams will be stored as one object.  This allows to decrease document size in some cases (for example, when same document was concatenated multiple times).
     *
     * @return $this
     */
    public function setLinkDuplcateStreams($link_duplcate_streams)
    {
        $this->container['link_duplcate_streams'] = $link_duplcate_streams;

        return $this;
    }

    /**
     * Gets remove_unused_objects
     *
     * @return bool
     */
    public function getRemoveUnusedObjects()
    {
        return $this->container['remove_unused_objects'];
    }

    /**
     * Sets remove_unused_objects
     *
     * @param bool $remove_unused_objects If this flag is set to true, all document objects will be checked and unused objects (i.e. objects which does not have any reference) are removed from document.
     *
     * @return $this
     */
    public function setRemoveUnusedObjects($remove_unused_objects)
    {
        $this->container['remove_unused_objects'] = $remove_unused_objects;

        return $this;
    }

    /**
     * Gets remove_unused_streams
     *
     * @return bool
     */
    public function getRemoveUnusedStreams()
    {
        return $this->container['remove_unused_streams'];
    }

    /**
     * Sets remove_unused_streams
     *
     * @param bool $remove_unused_streams If this flag set to true, every resource is checked on it's usage. If resource is never used, then resources is removed. This may decrease document size for example when pages were extracted from document.
     *
     * @return $this
     */
    public function setRemoveUnusedStreams($remove_unused_streams)
    {
        $this->container['remove_unused_streams'] = $remove_unused_streams;

        return $this;
    }

    /**
     * Gets unembed_fonts
     *
     * @return bool
     */
    public function getUnembedFonts()
    {
        return $this->container['unembed_fonts'];
    }

    /**
     * Sets unembed_fonts
     *
     * @param bool $unembed_fonts Make fonts not embedded if set to true. Unembedding a font means removing the embedded byte stream data of the font included in a PDF document.
     *
     * @return $this
     */
    public function setUnembedFonts($unembed_fonts)
    {
        $this->container['unembed_fonts'] = $unembed_fonts;

        return $this;
    }

    /**
     * Gets resize_images
     *
     * @return bool
     */
    public function getResizeImages()
    {
        return $this->container['resize_images'];
    }

    /**
     * Sets resize_images
     *
     * @param bool $resize_images If this flag set to true and CompressImages is true images will be resized if image resolution is greater then specified MaxResolution parameter.
     *
     * @return $this
     */
    public function setResizeImages($resize_images)
    {
        $this->container['resize_images'] = $resize_images;

        return $this;
    }

    /**
     * Gets max_resolution
     *
     * @return int
     */
    public function getMaxResolution()
    {
        return $this->container['max_resolution'];
    }

    /**
     * Sets max_resolution
     *
     * @param int $max_resolution Specifies maximum resolution of images. If image has higher resolution it will be scaled.
     *
     * @return $this
     */
    public function setMaxResolution($max_resolution)
    {
        $this->container['max_resolution'] = $max_resolution;

        return $this;
    }

    /**
     * Gets subset_fonts
     *
     * @return bool
     */
    public function getSubsetFonts()
    {
        return $this->container['subset_fonts'];
    }

    /**
     * Sets subset_fonts
     *
     * @param bool $subset_fonts Fonts will be converted into subsets if set to true. Only those characters that are actually used in the layout are stored in the PDF.
     *
     * @return $this
     */
    public function setSubsetFonts($subset_fonts)
    {
        $this->container['subset_fonts'] = $subset_fonts;

        return $this;
    }

    /**
     * Gets remove_private_info
     *
     * @return bool
     */
    public function getRemovePrivateInfo()
    {
        return $this->container['remove_private_info'];
    }

    /**
     * Sets remove_private_info
     *
     * @param bool $remove_private_info Remove private information (page piece info).
     *
     * @return $this
     */
    public function setRemovePrivateInfo($remove_private_info)
    {
        $this->container['remove_private_info'] = $remove_private_info;

        return $this;
    }

    /**
     * Gets image_encoding
     *
     * @return \Aspose\PDF\Model\ImageEncoding
     */
    public function getImageEncoding()
    {
        return $this->container['image_encoding'];
    }

    /**
     * Sets image_encoding
     *
     * @param \Aspose\PDF\Model\ImageEncoding $image_encoding Image encode which will be used.
     *
     * @return $this
     */
    public function setImageEncoding($image_encoding)
    {
        $this->container['image_encoding'] = $image_encoding;

        return $this;
    }

    /**
     * Gets image_compression_version
     *
     * @return \Aspose\PDF\Model\ImageCompressionVersion
     */
    public function getImageCompressionVersion()
    {
        return $this->container['image_compression_version'];
    }

    /**
     * Sets image_compression_version
     *
     * @param \Aspose\PDF\Model\ImageCompressionVersion $image_compression_version Version of compression algorithm. Possible values are: \"Standard\" - standard compression, \"Fast\" - fast (improved compression which is faster then standard but may be applicable not for all images), \"Mixed\" - mixed (standard compression is applied to images which can not be compressed by  faster algorithm, this may give best compression but more slow then \"Fast\" algorithm. Version \"Fast\" is not applicable for resizing images (standard method will be used). Default is \"Standard\".
     *
     * @return $this
     */
    public function setImageCompressionVersion($image_compression_version)
    {
        $this->container['image_compression_version'] = $image_compression_version;

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


