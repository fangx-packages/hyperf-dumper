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

namespace Fangx\Dumper;

use Hyperf\HttpMessage\Base\Response;
use Hyperf\HttpMessage\Stream\SwooleStream;

class HttpResponse extends Response
{
    public static function html(string $content)
    {
        return (new static())
            ->withAddedHeader('content-type', 'text/html; charset=utf-8')
            ->withBody(new SwooleStream($content));
    }
}
