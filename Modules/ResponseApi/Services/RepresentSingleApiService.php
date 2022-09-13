<?php

namespace Modules\ResponseApi\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Modules\ResponseApi\DTO\ResponseApiDto;

class RepresentSingleApiService
{
    /**
     * @param ResponseApiDto $dto
     * @return User
     */
    public function handle(ResponseApiDto $dto): User
    {
        // create or update in DB and return User
        $user = User::updateOrCreate(
            [
                'email' => $dto->getEmail(),]
            , [
            'name' => $dto->getName(),
            'password' => Hash::make($dto->getKey())
        ]);
        return $user;
    }
}
