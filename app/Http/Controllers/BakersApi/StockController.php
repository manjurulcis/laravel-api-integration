<?php
declare(strict_types=1);

namespace App\Http\Controllers\BakersApi;

use App\Services\BakersApi\BakersApiService;
use Illuminate\Http\RedirectResponse;

class StockController
{
  public function __construct(
    private readonly BakersApiService $api
  ) {}

  public function __invoke()
  {

    return $this->api->stock()->list();
    // Whatever else we need to do...
  }
}
