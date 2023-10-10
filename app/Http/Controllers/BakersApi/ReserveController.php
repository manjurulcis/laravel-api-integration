<?php
declare(strict_types=1);

namespace App\Http\Controllers\BakersApi;

use App\Services\BakersApi\BakersApiService;
use Illuminate\Http\RedirectResponse;
use App\Services\BakersApi\DataFactories\ReservationFactory;

class ReserveController
{
  public function __construct(
    private readonly BakersApiService $api
  ) {}

  public function __invoke()
  {
    $data = [
        'cake' => 'chocolate',
        'birthday' => '11-05-1990',
        'name' => 'Henri Nordström',
        'address' => 'Vuorikatu 16 A 8',
        'city' => 'Helsinki',
        'message' => '<p>Rich <strong>text</strong> message</p>'
    ];
    return $this->api->reserve((new ReservationFactory)->make(attributes: $data))->order();
    // Whatever else we need to do...
  }
}
