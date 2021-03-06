<?php

namespace Swoft\Exception\Http;

/**
 * @uses      UnanthenticatedException
 * @version   2017-11-11
 * @author    huangzhhui <huangzhwork@gmail.com>
 * @copyright Copyright 2010-2017 Swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class UnauthorizedException extends HttpException
{
    protected $code = 401;
}
