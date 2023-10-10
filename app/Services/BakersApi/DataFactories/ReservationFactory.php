<?php
declare(strict_types=1);

namespace App\Services\BakersApi\DataFactories;

use App\Services\BakersApi\DataObjects\Reservation;
use Illuminate\Support\Carbon;

class ReservationFactory
{
  public function make(array $attributes): Reservation
  {
    return new Reservation(
        cake: strval(data_get($attributes, 'cake')),
        birthday: Carbon::parse(strval(data_get($attributes, 'implemented'))),
        name: strval(data_get($attributes, 'name')),
        address: strval(data_get($attributes, 'address')),
        city: strval(data_get($attributes, 'city')),
        message: strval(data_get($attributes, 'message')),
    );
  }
}
