<?php

namespace App\Http\Requests\Api;

use App\Http\Resources\PropertyResource;
use App\Property;
use Illuminate\Foundation\Http\FormRequest;

class GetPropertiesRequest extends FormRequest
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
      //
    ];
  }

  public function getProperties()
  {
    $query = Property::query();

    if ($this->query->has('name')) {
      $query->where('name', 'like', "%{$this->query('name')}%");
    }

    if ($this->query->has('bedrooms')) {
      $query->where('bedrooms', (int)$this->query('bedrooms'));
    }

    if ($this->query->has('bathrooms')) {
      $query->where('bathrooms', (int)$this->query('bathrooms'));
    }

    if ($this->query->has('storeys')) {
      $query->where('storeys', (int)$this->query('storeys'));
    }

    if ($this->query->has('garages')) {
      $query->where('garages', (int)$this->query('garages'));
    }

    if ($this->query->has('price_from') && $this->query->has('price_to')) {
      $query->whereBetween('price', [
        (int)$this->query('price_from'),
        (int)$this->query('price_to'),
      ]);
    }

    return PropertyResource::collection($query->get());
  }
}
