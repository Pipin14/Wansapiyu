<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Layanan;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\LayananResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\LayananResource\RelationManagers;
use Illuminate\Support\Str;

class LayananResource extends Resource
{
    protected static ?string $model = Layanan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('tipe_paket')
                    ->required()
                    ->options([
                        'Paket 1' => 'Paket 1',
                        'Paket 2' => 'Paket 2',
                        'Photo group' => 'Photo Group',
                        'Cinematic' => 'Cinematic Video Only',
                        'Ultimate' => 'Ultimate',
                    ])
                    ->placeholder('Pilih tipe paket...')
                    ->native(false),
                TextInput::make('harga_paket')
                    ->required()
                    ->placeholder('Masukan harga paket...'),
                MarkdownEditor::make('deskripsi')
                    ->required()
                    ->toolbarButtons([
                        'attachFiles',
                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'heading',
                        'italic',
                        'link',
                        'orderedList',
                        'redo',
                        'strike',
                        'table',
                        'undo',
                    ])
                    ->placeholder('Deskripsi berdasarkan tipe paket...'),
                FileUpload::make('gambar')
                    ->disk('public')
                    ->directory('images/layanans')
                    ->visibility('public')
                    ->image()
                    ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('tipe_paket')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('harga_paket'),
                TextColumn::make('deskripsi')
                    ->getStateUsing(fn($record) => htmlspecialchars($record->deskripsi))
                    ->formatStateUsing(fn($state) => Str::limit($state, 20)),

                ImageColumn::make('gambar')
                    ->square()
                    ->width(100)
                    ->height(100)
                    ->label('Gambar Layanan')
                    ->default('/path/to/default-image.jpg')
                    ->getStateUsing(function ($record) {
                        return asset('storage/' . $record->gambar);
                    }),
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
            'index' => Pages\ListLayanans::route('/'),
            'create' => Pages\CreateLayanan::route('/create'),
            'edit' => Pages\EditLayanan::route('/{record}/edit'),
        ];
    }
}
