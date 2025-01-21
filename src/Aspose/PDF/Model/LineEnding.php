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
 * LineEnding Class 
 *
 * @category Class
 * @description Enumerates the line ending styles to be used in drawing the line.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;
use \Aspose\PDF\ObjectSerializer;

class LineEnding
{
    /**
     * Possible values of this enum
     */
    const NONE = 'None';
    const SQUARE = 'Square';
    const CIRCLE = 'Circle';
    const DIAMOND = 'Diamond';
    const OPEN_ARROW = 'OpenArrow';
    const CLOSED_ARROW = 'ClosedArrow';
    const BUTT = 'Butt';
    const R_OPEN_ARROW = 'ROpenArrow';
    const R_CLOSED_ARROW = 'RClosedArrow';
    const SLASH = 'Slash';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::SQUARE,
            self::CIRCLE,
            self::DIAMOND,
            self::OPEN_ARROW,
            self::CLOSED_ARROW,
            self::BUTT,
            self::R_OPEN_ARROW,
            self::R_CLOSED_ARROW,
            self::SLASH,
        ];
    }
}


