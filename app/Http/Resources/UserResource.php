<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema(
 *     schema="User",
 *
 *     @OA\Property(property="name", type="string", example="Robbin Ploeger"),
 *     @OA\Property(property="email", type="string", example="robbin@smit.net"),
 *
 * )
 */
class UserResource extends JsonResource
{
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
