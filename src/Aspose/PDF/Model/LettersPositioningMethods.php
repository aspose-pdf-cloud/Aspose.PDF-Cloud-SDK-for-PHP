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
 * LettersPositioningMethods Class 
 *
 * @category Class
 * @description It enumerates possible modes of positioning of letters in words in result HTML
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;
use \Aspose\PDF\ObjectSerializer;

class LettersPositioningMethods
{
    /**
     * Possible values of this enum
     */
    const USE_EM_UNITS_AND_COMPENSATION_OF_ROUNDING_ERRORS_IN_CSS = 'UseEmUnitsAndCompensationOfRoundingErrorsInCss';
    const USE_PIXEL_UNITS_IN_CSS_LETTER_SPACING_FOR_IE = 'UsePixelUnitsInCssLetterSpacingForIE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::USE_EM_UNITS_AND_COMPENSATION_OF_ROUNDING_ERRORS_IN_CSS,
            self::USE_PIXEL_UNITS_IN_CSS_LETTER_SPACING_FOR_IE,
        ];
    }
}


