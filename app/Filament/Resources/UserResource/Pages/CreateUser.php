<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Models\User;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;



    /** @var User $user */
    protected function handleRecordCreation(array $data): Model
    {
        $user = parent::handleRecordCreation($data);
        $user->assignRole('admin');

        return $user;
    }
}
