<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
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

        $user = factory(User::class)->create();

        return UserResource::make($user);
    }
}
