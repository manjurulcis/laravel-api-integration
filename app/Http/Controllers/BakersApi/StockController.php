<?php
declare(strict_types=1);

namespace App\Http\Controllers\BakersApi;

use App\Services\BakersApi\BakersApiService;

class StockController
{
  public function __construct(
    private readonly BakersApiService $api
  ) {}

  public function __invoke()
  {
    // This makes the code descriptive
    return $this->api->stock()->list()['cakes'];
  }
}
