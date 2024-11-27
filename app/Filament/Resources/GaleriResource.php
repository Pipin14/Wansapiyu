<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Galeri;
use Filament\Forms\Form;
use App\Models\Portofolio;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\GaleriResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\GaleriResource\RelationManagers;

class GaleriResource extends Resource
{
    protected static ?string $model = Galeri::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('portofolio_id')
                    ->label('Portofolio')
                    ->options(Portofolio::all()->pluck('judul', 'id'))
                    ->rules('required')
                    ->searchable(),
                // ->relationship('portofolio', 'judul'),
                FileUpload::make('galeri_portofolio')
                    ->image()
                    ->disk('public')
                    ->directory('galeri')
                    ->visibility('public')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('portofolio_id'),
                Tables\Columns\TextColumn::make('portofolio.judul')
                    ->label('Judul Portofolio')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\ImageColumn::make('galeri_portofolio')
                    ->square()
                    ->width(100)
                    ->height(100)
                    ->label('Galeri Portofolio')
                    ->default('/path/to/default-image.jpg')
                    ->getStateUsing(function ($record) {
                        return asset('storage/' . $record->galeri_portofolio);
                    }),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListGaleris::route('/'),
            'create' => Pages\CreateGaleri::route('/create'),
            'edit' => Pages\EditGaleri::route('/{record}/edit'),
        ];
    }
}
