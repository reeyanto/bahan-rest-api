<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Section::make('Category Details')
                    ->description('Provide the details for the category.')
                    ->icon(Heroicon::OutlinedRectangleStack)
                    ->schema([
                        TextInput::make('name')
                            ->label('Category Name')
                            ->placeholder('Enter category name')
                            ->autocomplete('off')
                            ->required(),
                        RichEditor::make('description')
                            ->label('Description')
                            ->placeholder('Enter category description')
                            ->extraAttributes(['style' => 'min-height: 200px;'])
                            ->columnSpanFull(),
                    ])
            ]);
    }
}
