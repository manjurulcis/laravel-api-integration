<?php
declare(strict_types=1);

namespace App\Services\Concerns;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

trait BuildBaseRequest
{
  public function withBaseUrl(): PendingRequest
  {
    return Http::baseUrl(
        url: $this->baseUrl,
    );
  }

  public function buildRequestWithBakerApi(): PendingRequest
  {
    return $this->withBaseUrl()->timeout(
        seconds: 15,
    )->withBody('{ "key": "'. config('services.bakersapi.token') .'"}');
  }
}
