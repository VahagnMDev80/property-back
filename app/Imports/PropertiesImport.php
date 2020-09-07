<?php

namespace App\Imports;

use App\Property;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class PropertiesImport implements ToModel, WithHeadingRow
{
  use Importable;

  public function model(array $row)
  {
    return new Property([
      'name' => $row['name'],
      'price' => $row['price'],
      'bedrooms' => $row['bedrooms'],
      'bathrooms' => $row['bathrooms'],
      'storeys' => $row['storeys'],
      'garages' => $row['garages']
    ]);
  }

  public function headingRow(): int
  {
    return 1;
  }
}
