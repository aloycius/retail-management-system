<?php

namespace App\Modules\Identity\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Identity\Actions\RegisterBusiness;
use App\Modules\Identity\Http\Requests\RegisterRequest;
use Illuminate\Http\JsonResponse;

class RegisterController extends Controller
{
    /**
     * Register a new business and sign its owner in.
     */
    public function __invoke(RegisterRequest $request, RegisterBusiness $registerBusiness): JsonResponse
    {
        $owner = $registerBusiness->handle($request->validated());

        $token = $owner->createToken('auth')->plainTextToken;

        return response()->json([
            'user' => [
                'id' => $owner->id,
                'name' => $owner->name,
                'email' => $owner->email,
                'business' => [
                    'id' => $owner->business->id,
                    'name' => $owner->business->name,
                ],
                'roles' => $owner->roles->pluck('name'),
            ],
            'token' => $token,
        ], 201);
    }
}
