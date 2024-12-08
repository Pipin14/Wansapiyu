<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Anggota;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AnggotaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AnggotaResource\RelationManagers;
use Illuminate\Support\Str;

class AnggotaResource extends Resource
{
    protected static ?string $model = Anggota::class;

    protected static ?string $navigationIcon = 'heroicon-o-puzzle-piece';
    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_anggota')
                    ->label('Nama Anggota')
                    ->required()
                    ->maxLength(255),
                TextInput::make('role')
                    ->label('Peran')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('photo')
                    ->label('Foto')
                    ->image()
                    ->disk('public')
                    ->previewable(false)
                    ->directory('images/anggota')
                    ->visibility('public')
                    ->default('/images/default-user.png'),
                TextInput::make('linkedin')
                    ->label('LinkedIn')
                    ->url()
                    ->nullable(),
                TextInput::make('twitter')
                    ->label('Twitter')
                    ->url()
                    ->nullable(),
                TextInput::make('instagram')
                    ->label('Instagram')
                    ->url()
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_anggota')
                    ->label('Nama Anggota')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('role')
                    ->label('Role')
                    ->sortable(),
                ImageColumn::make('photo')
                    ->square()
                    ->width(100)
                    ->height(100)
                    ->label('Foto Anggota')
                    ->getStateUsing(function ($record) {
                        return asset('storage/' . $record->photo);
                    }),
                TextColumn::make('linkedin')
                    ->label('LinkedIn')
                    ->formatStateUsing(fn($state) => Str::limit($state, 15)),
                TextColumn::make('twitter')
                    ->label('Twitter')
                    ->formatStateUsing(fn($state) => Str::limit($state, 15)),
                TextColumn::make('instagram')
                    ->label('Instagram')
                    ->formatStateUsing(fn($state) => Str::limit($state, 15)),
            ])
            ->filters([
                //
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
            'index' => Pages\ListAnggotas::route('/'),
            'create' => Pages\CreateAnggota::route('/create'),
            'edit' => Pages\EditAnggota::route('/{record}/edit'),
        ];
    }
}
