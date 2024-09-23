<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BrandResource\Pages;
use App\Filament\Resources\BrandResource\RelationManagers;
use App\Models\Brand;
use App\Models\Teknologi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\FileUpload;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Infolists\Components\Section;


class BrandResource extends Resource
{
    protected static ?string $model = Brand::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            // Menggunakan Group untuk mengelompokkan komponen
            Forms\Components\Section::make('Heading')
                ->schema([
                    Forms\Components\TextInput::make('nama')->required(),
                    Forms\Components\TextInput::make('slug')->required(),
                    Forms\Components\Select::make('teknologis')
                        ->relationship('teknologis','nama')
                        ->multiple()
                        ->required()
                        ->options(function () {
                            return Teknologi::all()->pluck('nama', 'id'); // Mengambil semua teknologi
                        }),
                    Forms\Components\Select::make('team_id')
                        ->required()
                        ->relationship('team','name'),
                    Forms\Components\TextInput::make('link')
                        ->helperText('Harus Diawali https://')
                        ->required()
                        ->maxLength(255)
                        ->columnSpanFull()
                        ->url(),
                ])
                ->columns(2), // Mengatur kolom
                Forms\Components\Section::make('Fitur')
                ->schema([
                    Forms\Components\TextInput::make('fitur_1')->required(),
                    Forms\Components\TextInput::make('fitur_2')->required(),
                    Forms\Components\TextInput::make('fitur_3')->required(),
                    Forms\Components\TextInput::make('fitur_4')->required(),
                ])->columns(2),
                Forms\Components\Section::make('Gambar')
                ->schema([
                    FileUpload::make('image') ->required(),
                    FileUpload::make('image_2')->required(),
                    FileUpload::make('image_3')->required(),
                    FileUpload::make('thumbnail')->required(),
                ])->columns(2),   
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('team.name')
                ->label('Author'),
                Tables\Columns\TextColumn::make('slug')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('link')
                ->url(fn ($record) => $record->link) // Menyediakan fungsi untuk mengakses link
                ->openUrlInNewTab(),
                Tables\Columns\ImageColumn::make('thumbnail'),
                
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
            'index' => Pages\ListBrands::route('/'),
            'create' => Pages\CreateBrand::route('/create'),
            'edit' => Pages\EditBrand::route('/{record}/edit'),
        ];
    }
}
