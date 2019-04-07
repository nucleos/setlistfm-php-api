<?php

/*
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Core23\SetlistFm\Tests\Fixtures;

use Exception;
use Http\Client\Exception as PsrException;

final class ClientException extends Exception implements PsrException
{
}
