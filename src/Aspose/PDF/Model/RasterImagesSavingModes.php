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
 * RasterImagesSavingModes Class 
 *
 * @category Class
 * @description Converted PDF can contain raster images(.png, *.jpeg etc.) This enum defines methods of how raster images can be handled during conversion of PDF to HTML
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;
use \Aspose\PDF\ObjectSerializer;

class RasterImagesSavingModes
{
    /**
     * Possible values of this enum
     */
    const AS_PNG_IMAGES_EMBEDDED_INTO_SVG = 'AsPngImagesEmbeddedIntoSvg';
    const AS_EXTERNAL_PNG_FILES_REFERENCED_VIA_SVG = 'AsExternalPngFilesReferencedViaSvg';
    const AS_EMBEDDED_PARTS_OF_PNG_PAGE_BACKGROUND = 'AsEmbeddedPartsOfPngPageBackground';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AS_PNG_IMAGES_EMBEDDED_INTO_SVG,
            self::AS_EXTERNAL_PNG_FILES_REFERENCED_VIA_SVG,
            self::AS_EMBEDDED_PARTS_OF_PNG_PAGE_BACKGROUND,
        ];
    }
}


