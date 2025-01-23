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
 * AnnotationType Class 
 *
 * @category Class
 * @description 
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;
use \Aspose\PDF\ObjectSerializer;

class AnnotationType
{
    /**
     * Possible values of this enum
     */
    const TEXT = 'Text';
    const CIRCLE = 'Circle';
    const POLYGON = 'Polygon';
    const POLY_LINE = 'PolyLine';
    const LINE = 'Line';
    const SQUARE = 'Square';
    const FREE_TEXT = 'FreeText';
    const HIGHLIGHT = 'Highlight';
    const UNDERLINE = 'Underline';
    const SQUIGGLY = 'Squiggly';
    const STRIKE_OUT = 'StrikeOut';
    const CARET = 'Caret';
    const INK = 'Ink';
    const LINK = 'Link';
    const POPUP = 'Popup';
    const FILE_ATTACHMENT = 'FileAttachment';
    const SOUND = 'Sound';
    const MOVIE = 'Movie';
    const SCREEN = 'Screen';
    const WIDGET = 'Widget';
    const WATERMARK = 'Watermark';
    const TRAP_NET = 'TrapNet';
    const PRINTER_MARK = 'PrinterMark';
    const REDACTION = 'Redaction';
    const STAMP = 'Stamp';
    const RICH_MEDIA = 'RichMedia';
    const UNKNOWN = 'Unknown';
    const PDF3_D = 'PDF3D';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TEXT,
            self::CIRCLE,
            self::POLYGON,
            self::POLY_LINE,
            self::LINE,
            self::SQUARE,
            self::FREE_TEXT,
            self::HIGHLIGHT,
            self::UNDERLINE,
            self::SQUIGGLY,
            self::STRIKE_OUT,
            self::CARET,
            self::INK,
            self::LINK,
            self::POPUP,
            self::FILE_ATTACHMENT,
            self::SOUND,
            self::MOVIE,
            self::SCREEN,
            self::WIDGET,
            self::WATERMARK,
            self::TRAP_NET,
            self::PRINTER_MARK,
            self::REDACTION,
            self::STAMP,
            self::RICH_MEDIA,
            self::UNKNOWN,
            self::PDF3_D,
        ];
    }
}


