<?php
declare(strict_types=1);

namespace App\Services\BakersApi;

use App\Services\Concerns\BuildBaseRequest;
use App\Services\Concerns\CanSendGetRequest;
use App\Services\Concerns\CanSendPostRequest;
use App\Services\BakersApi\Resources\StockResource;

class BakersApiService
{
  use BuildBaseRequest;
  use CanSendGetRequest;
  use CanSendPostRequest;

  public function __construct(
    private readonly string $baseUrl,
    private readonly string $apiToken,
  ) {}

  public function stock(): StockResource
  {
    return new StockResource(
        service: $this,
    );
  }
}
