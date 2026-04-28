<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('News Details')
                    ->description('Tambahkan data berita')
                    ->schema([
                        Select::make('category_id')
                            ->relationship('category', 'name')
                            ->required(),
                        TextInput::make('title')
                            ->required(),
                        Textarea::make('content')
                            ->rows(5)
                            ->extraInputAttributes(['style' => 'resize: none;'])
                            ->required()
                            ->columnSpanFull(),
                        TextInput::make('external_link')
                            ->required(),
                        TextInput::make('image')
                            ->required(),
                        TextInput::make('author')
                            ->required(),
                        TextInput::make('views')
                            ->required()
                            ->numeric()
                            ->default(0),
                    ])->columns(2)
            ])->columns(1);
    }
}
