<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\User;

class UserController extends Controller
{
    /**
     * @OA\Get(
     *     path="/user",
     *     @OA\Response(
     *         response="200",
     *         description="Return user",
     *         @OA\JsonContent(ref="#/components/schemas/User"),
     *     )
     * )
     *
     * @return UserResource
     */
    public function index()
    {
        $user = factory(User::class)->create();

        return UserResource::make($user);
    }
}
