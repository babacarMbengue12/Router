<?php
/**
 * Created by PhpStorm.
 * User: Babacar Mbengue
 * Date: 01/04/2019
 * Time: 18:58
 */

namespace Babacar\Router\Exceptions;


use Throwable;

class RouteParameterNotMatchException extends RouteException
{
    public function __construct($parameter,$key,$r, int $code = 0, Throwable $previous = null)
    {
        parent::__construct("Le parametre $parameter pattern $key ne match pas '$r' ", $code, $previous);
    }

}