<?php
declare(strict_types=1);

namespace App\Http\Controllers\BakersApi;

use App\Services\BakersApi\BakersApiService;
use Illuminate\Http\Request;

class DeliveryController
{
  public function __construct(
    private readonly BakersApiService $api
  ) {}

  public function __invoke(Request $request)
  {
    return $this->api->delivery()->list('helsinki');
    // Whatever else we need to do...
  }
}
