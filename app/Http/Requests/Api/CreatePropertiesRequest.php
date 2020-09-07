<?php

namespace App\Http\Requests\Api;

use App\Property;
use Maatwebsite\Excel\Excel;
use App\Imports\PropertiesImport;
use App\Http\Resources\PropertyResource;
use Illuminate\Support\Collection;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CreatePropertiesRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      'csv_file' => 'required|file|mimes:csv,txt'
    ];
  }

  /**
   * @return AnonymousResourceCollection
   */
  public function importProperties()
  {
    /** @var Collection $records */
    $records = (new PropertiesImport)->toCollection(
      $this->file('csv_file'),
      null,
      Excel::CSV
    )->first();

    return PropertyResource::collection(
      Property::createMany($records)
    );
  }
}
