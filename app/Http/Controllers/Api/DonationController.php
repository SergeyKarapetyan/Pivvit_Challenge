<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateDonationRequest;
use App\Models\Donation;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json($this->getSuccessResponse(Donation::all()));
    }

    public function store(CreateDonationRequest $request): JsonResponse
    {
        return response()->json($this->getSuccessResponse(Donation::create($request->all())));
    }

    public function update(Donation $donation, Request $request): JsonResponse
    {
        $donation->update($request->all());
        return response()->json($this->getSuccessResponse($donation));
    }

    public function destroy(int $donationId): JsonResponse
    {
        return response()->json($this->getSuccessResponse(Donation::where('id', $donationId)->delete()));
    }
}
