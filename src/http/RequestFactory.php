<?php

namespace Dawan\http;

use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;

class RequestFactory
{

  /**
   * Create a Request instance from super-global variables.
   * This instance represent HTTP request sent by user-agent such as browser
   *
   * @return RequestInterface
   */
  public static function createFromGlobals(): RequestInterface
  {
    return new Request($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
  }
}
