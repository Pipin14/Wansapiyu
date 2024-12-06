<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\AboutUs;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AboutUsResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AboutUsResource\RelationManagers;

class AboutUsResource extends Resource
{
    protected static ?string $model = AboutUs::class;

    protected static ?string $navigationIcon = 'heroicon-o-identification';
    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('section')
                    ->label('Section')
                    ->required()
                    ->placeholder('e.g., Sejarah, Visi Misi'),
                Textarea::make('konten')
                    ->rows(4)
                    ->columnSpan(2)
                    ->label('Konten')
                    ->required(),
                FileUpload::make('gambar')
                    ->required()
                    ->label('Gambar')
                    ->disk('public')
                    ->directory('images/about_us')
                    ->visibility('public')
                    ->image()
                    ->previewable(false)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('section')->label('Section')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('konten')->label('Konten')
                    ->getStateUsing(fn($record) => htmlspecialchars($record->konten))
                    ->formatStateUsing(fn($state) => Str::limit($state, 30)),
                ImageColumn::make('gambar')
                    ->square()
                    ->width(100)
                    ->height(100)
                    ->label('Gambar AboutUs')
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
            'index' => Pages\ListAboutUs::route('/'),
            'create' => Pages\CreateAboutUs::route('/create'),
            'edit' => Pages\EditAboutUs::route('/{record}/edit'),
        ];
    }
}
