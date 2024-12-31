<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use App\Filament\Resources\OrderResource\Widgets\OrderStats;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Tab;

class ListOrders extends ListRecords
{
    protected static string $resource = OrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array{
        return [
            OrderStats::class
        ];
    }

    public function getTabs(): array
    {
        return [
            null => Tab::make(label: 'All'),
            'new' => Tab::make(label: 'New')
                ->modifyQueryUsing(fn ($query) => $query->where('status', 'new')),
            'processing' => Tab::make(label: 'Processing')
                ->modifyQueryUsing(fn ($query) => $query->where('status', 'processing')),
            'shipped' => Tab::make(label: 'Shipped')
                ->modifyQueryUsing(fn ($query) => $query->where('status', 'shipped')),
            'delivered' => Tab::make(label: 'Delivered')
                ->modifyQueryUsing(fn ($query) => $query->where('status', 'delivered')),
            'cancelled' => Tab::make(label: 'Cancelled')
                ->modifyQueryUsing(fn ($query) => $query->where('status', 'cancelled'))
        ];
    }

}
