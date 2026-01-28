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
 * AnnotationFlags Class 
 *
 * @category Class
 * @description A set of flags specifying various characteristics of the annotation.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;
use \Aspose\PDF\ObjectSerializer;

class AnnotationFlags
{
    /**
     * Possible values of this enum
     */
    const _DEFAULT = 'Default';
    const INVISIBLE = 'Invisible';
    const HIDDEN = 'Hidden';
    const _PRINT = 'Print';
    const NO_ZOOM = 'NoZoom';
    const NO_ROTATE = 'NoRotate';
    const NO_VIEW = 'NoView';
    const READ_ONLY = 'ReadOnly';
    const LOCKED = 'Locked';
    const TOGGLE_NO_VIEW = 'ToggleNoView';
    const LOCKED_CONTENTS = 'LockedContents';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_DEFAULT,
            self::INVISIBLE,
            self::HIDDEN,
            self::_PRINT,
            self::NO_ZOOM,
            self::NO_ROTATE,
            self::NO_VIEW,
            self::READ_ONLY,
            self::LOCKED,
            self::TOGGLE_NO_VIEW,
            self::LOCKED_CONTENTS,
        ];
    }
}


