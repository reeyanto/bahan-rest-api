<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Product;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class OverviewWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('total_categories', Category::count())
                ->label('Total Categories')
                ->icon(Heroicon::OutlinedRectangleStack)
                ->description('Number of categories in the system.'),
                
            Stat::make('total_products', Product::count())
                ->label('Total Products')
                ->icon(Heroicon::ShoppingBag)
                ->description('Number of products in the system.'),
        ];
    }

    protected function getColumns(): int|array|null
    {
        return 2;
    }
}
