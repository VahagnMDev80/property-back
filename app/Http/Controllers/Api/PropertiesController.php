<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CreatePropertiesRequest;
use App\Http\Requests\Api\GetPropertiesRequest;

class PropertiesController extends Controller
{
  public function index(GetPropertiesRequest $request)
  {
    return $request->getProperties();
  }

  public function store(CreatePropertiesRequest $request)
  {
    return $request->importProperties();
  }
}
