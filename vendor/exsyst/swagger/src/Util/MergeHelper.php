<?php

/*
 * This file is part of the Swagger package.
 *
 * (c) EXSyst
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EXSyst\Component\Swagger\Util;

/**
 * @internal
 */
class MergeHelper
{
    /**
     * @param string|int|null $original
     * @param string|int|null $external
     * @param bool            $overwrite
     */
    public static function mergeFields(&$original, $external, $overwrite)
    {
        if ($overwrite) {
            $original = null !== $external ? $external : $original;
        } else {
            $original = null === $original ? $external : $original;
        }
    }
}
