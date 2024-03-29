<?php
//namespace Respect\Validation\Exceptions;

class JBlac_Validation_Exceptions_PrntException extends JBlac_Validation_Exceptions_AlphaException
{
    public static $defaultTemplates = array(
        self::MODE_DEFAULT => array(
            self::STANDARD => '{{name}} must contain only printable characters',
            self::EXTRA => '{{name}} must contain only printable characters and "{{additionalChars}}"'
        ),
        self::MODE_NEGATIVE => array(
            self::STANDARD => '{{name}} must not contain printable characters',
            self::EXTRA => '{{name}} must not contain printable characters or "{{additionalChars}}"'
        )
    );
}

