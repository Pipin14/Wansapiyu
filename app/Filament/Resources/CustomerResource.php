<?php

namespace App\Filament\Resources;

use DateTime;
use Filament\Forms;
use Filament\Tables;
use App\Models\Customer;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\CustomerResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CustomerResource\RelationManagers;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static ?string $navigationIcon = 'heroicon-o-fire';

    protected static ?string $navigationGroup = 'Services';

    protected static ?string $navigationLabel = 'Customer';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_pelanggan')
                    ->required()
                    ->placeholder('Masukan nama pelanggan...', 255),
                Select::make('tipe_paket')
                    ->required()
                    ->options([
                        'paket1' => 'Paket 1',
                        'paket2' => 'Paket 2',
                        'photo_group' => 'Photo Group',
                        'cinematic' => 'Cinematic Video Only',
                        'ultimate' => 'Ultimate',
                    ])
                    ->native(false),
                TextInput::make('harga_paket')
                    ->required()
                    ->placeholder('Masukan total harga...'),
                DateTimePicker::make('waktu')
                    ->native(false)
                    ->hoursStep(2)
                    ->minutesStep(15)
                    ->secondsStep(10)
                    ->prefix('Starts')
                    ->suffix(''),
                TextInput::make('tempat')
                    ->required()
                    ->placeholder('Masukan tempat pemotretan...', 255),
                Select::make('status')
                    ->required()
                    ->options([
                        'paid' => 'Paid',
                        'unpaid' => 'Unpaid',
                    ])
                    ->native(false)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('nama_pelanggan')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('tipe_paket'),
                TextColumn::make('harga_paket'),
                TextColumn::make('waktu'),
                TextColumn::make('tempat'),
                TextColumn::make('status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'paid' => 'success',
                        'unpaid' => 'danger',
                    })
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
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomer::route('/create'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }
}
