<?php

namespace App;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static Property create(array $attributes)
 */
class Property extends Model
{
  /**
   * @var string[]
   */
  protected $fillable = [
    'name', 'price', 'bedrooms', 'bathrooms', 'storeys', 'garages'
  ];

  /**
   * create many properties
   *
   * @param Collection $records
   * @return Collection
   */
  static public function createMany(Collection $records)
  {
    $created = collect([]);

    $records->each(function (Collection $record) use ($created) {
      $created->add(static::create($record->all()));
    });

    return $created;
  }
}
