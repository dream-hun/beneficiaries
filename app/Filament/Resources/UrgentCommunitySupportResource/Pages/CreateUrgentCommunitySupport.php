<?php

namespace App\Filament\Resources\UrgentCommunitySupportResource\Pages;

use App\Filament\Resources\UrgentCommunitySupportResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUrgentCommunitySupport extends CreateRecord
{
    protected static string $resource = UrgentCommunitySupportResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
