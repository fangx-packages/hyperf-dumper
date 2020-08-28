<?php

declare(strict_types=1);

/**
 * Fangx's Packages
 *
 * @link     https://nfangxu.com
 * @document https://pkg.nfangxu.com
 * @contact  nfangxu@gmail.com
 * @author   nfangxu
 * @license  https://pkg.nfangxu.com/license
 */

if (! function_exists('hd')) {
    function hd(...$args)
    {
        return \Fangx\Dumper\Dumper::hd(count($args) === 1 ? $args[0] : $args);
    }
}
