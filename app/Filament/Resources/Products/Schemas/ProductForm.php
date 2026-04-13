<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(3)
            ->components([
                Section::make('Product Details')
                    ->description('Provide the details for the product.')
                    ->icon(Heroicon::ShoppingBag)
                    ->schema([
                        TextInput::make('name')
                            ->label('Product Name')
                            ->placeholder('Enter product name')
                            ->autocomplete('off')
                            ->columnSpanFull()
                            ->required(),
                        RichEditor::make('description')
                            ->label('Description')
                            ->placeholder('Enter product description')
                            ->extraAttributes(['style' => 'min-height: 200px;'])
                            ->columnSpanFull(),
                        TextInput::make('price')
                            ->label('Price')
                            ->placeholder('Enter product price')
                            ->required()
                            ->numeric()
                            ->columns(1)
                            ->prefix('Rp.'),
                        TextInput::make('stock')
                            ->label('Stock')
                            ->placeholder('Enter product stock')
                            ->required()
                            ->numeric()
                            ->default(0),
                ])
                ->columns(2)
                ->columnSpan(2),

                Section::make('Additional Information')
                    ->description('Provide additional information for the product.')
                    ->schema([
                        Select::make('category_id')
                            ->label('Category')
                            ->relationship('category', 'name')
                            ->required(),
                        FileUpload::make('image')
                            ->image()
                            ->directory('product-images')
                            ->columnSpanFull(),
                ]),
            ]);
    }
}
