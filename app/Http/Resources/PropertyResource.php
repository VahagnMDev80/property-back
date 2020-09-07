<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property int id
 * @property int price
 * @property string name
 * @property int bedrooms
 * @property int bathrooms
 * @property int storeys
 * @property int garages
 */
class PropertyResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @param \Illuminate\Http\Request $request
   * @return array
   */
  public function toArray($request)
  {
    return [
      'id' => $this->id,
      'name' => $this->name,
      'price' => $this->price,
      'bedrooms' => $this->bedrooms,
      'bathrooms' => $this->bathrooms,
      'storeys' => $this->storeys,
      'garages' => $this->garages
    ];
  }
}
