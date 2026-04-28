<?php

namespace App\Filament\Resources\Films\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class FilmForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('News Details')
                    ->description('Tambahkan data film')
                    ->schema([
                        Select::make('category_id')
                            ->required()
                            ->relationship('category', 'name'),
                        TextInput::make('title')
                            ->required(),
                        TextInput::make('director')
                            ->required(),
                        TextInput::make('release_year')
                            ->required()
                            ->numeric(),
                        Textarea::make('review')
                            ->rows(5)
                            ->extraInputAttributes(['style' => 'resize: none'])
                            ->required()
                            ->columnSpanFull(),
                        TextInput::make('link')
                            ->required(),
                        TextInput::make('poster')
                            ->required(),
                    ])->columns(2)
            ])->columns(1);
    }
}
