<?php

declare(strict_types=1);

class Common
{
    public static function fn_is_empty($var)
    {
        if (!\is_array($var)) {
            return (empty($var));
        } else {
            foreach ($var as $k => $v) {
                if (empty($v)) {
                    unset($var[$k]);
                    continue;
                }

                if (\is_array($v) && self::fn_is_empty($v)) {
                    unset($var[$k]);
                }
            }

            return (empty($var)) ? true : false;
        }
    }
}