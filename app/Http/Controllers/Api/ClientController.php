<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Models\Client\Client;
use App\Models\Store\StoreRule;
use App\Models\Store\User;
use App\Services\ClientService;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct(protected ClientService $service)
    {
    }

    public function store(ClientRequest $request): JsonResponse
    {
        return response()->json(['client' => $this->service->updateOrCreate($request->validated())]);
    }
    public function creditStamps(Request $request): JsonResponse
    {
        $client = Client::where('mobile', $request->mobile)->first();
        $store = User::find($request->store_id);
        $client->stamps()->create([
            'client_id' => $client->id,
            'store_id' => $request->store_id,
            'stamps' => $request->stamps,
            'expires_at' => now()->addMonths($store->rule->expiration_in_months)->toDateTimeString(),
        ]);
        return response()->json(['client' => $client->refresh()]);
    }
    public function listStamps(int $id): JsonResponse
    {
        return response()->json(['client' => $this->service->listStamps($id)]);
    }
}
