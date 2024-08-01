<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroResource\Pages;
use App\Filament\Resources\HeroResource\RelationManagers;
use App\Models\Hero;
use Database\Factories\HeroFactory;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class HeroResource extends Resource
{
    protected static ?string $model = Hero::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // add form for heroes table
                FileUpload::make('image'),
                // ->disk('public')
                // ->directory('images'),
                // ->required(),
                TextInput::make('title')
                    ->placeholder('Enter the title of the hero')
                    ->required(),
                TextInput::make('subtitle')
                    ->placeholder('Enter the subtitle of the hero')
                    ->required(),
                TextInput::make('link1')
                    ->placeholder('Enter the first link of the hero')
                    ->required(),
                TextInput::make('link2')
                    ->placeholder('Enter the second link of the hero')
                    ->required(),
                Toggle::make('is_active'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // add field for heroes table
                // ImageColumn::make('image')
                //     ->sortable()
                //     ->searchable(),
                ImageColumn::make('image')
                    ->circular(),
                TextColumn::make('title')
                    ->wrap()
                    ->sortable()
                    ->searchable(),
                TextColumn::make('subtitle')
                    ->wrap()
                    ->sortable()
                    ->searchable(),
                // textColumn::make('link1')
                //     ->wrap(),
                // textColumn::make('link2')
                //     ->wrap(),
                ToggleColumn::make('is_active')
                    ->sortable()
                    ->searchable()
                    ->beforeStateUpdated(
                        function (Hero $hero, $state) {
                            if ($state) {
                                Hero::where('id', '!=', $hero->id)->update(['is_active' => 0]);
                            }
                        }
                    ),
            ])
            ->filters([
                // add filter for heroes table
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHeroes::route('/'),
            'create' => Pages\CreateHero::route('/create'),
            'edit' => Pages\EditHero::route('/{record}/edit'),
        ];
    }
}
