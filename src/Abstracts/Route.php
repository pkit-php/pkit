<?php

namespace Pkit\Abstracts;

use Pkit\Http\Request;
use Pkit\Http\Response;
use Pkit\Http\Route as HttpRoute;

abstract class Route extends HttpRoute
{
  public $middlewares = [];

  /** @abstract */
  public function options(Request $_): Response
  {
    return Response::empty();
  }
  /** @abstract */
  public function delete(Request $_): Response
  {
    return Response::empty();
  }
  /** @abstract */
  public function patch(Request $_): Response
  {
    return Response::empty();
  }
  /** @abstract */
  public function trace(Request $_): Response
  {
    return Response::empty();
  }
  /** @abstract */
  public function post(Request $_): Response
  {
    return Response::empty();
  }
  public function head(Request $_): Response
  {
    return (Response::empty())
      ->header(
        'Accept',
        'application/x-www-form-urlencoded, ' .
          'application/json, ' .
          'application/xml, ' .
          'multipart/form-data'
      );
  }
  /** @abstract */
  public function get(Request $_): Response
  {
    return Response::empty();
  }
  /** @abstract */
  public function put(Request $_): Response
  {
    return Response::empty();
  }
  /** @abstract */
  public function all(Request $_): Response
  {
    return Response::empty();
  }
}
