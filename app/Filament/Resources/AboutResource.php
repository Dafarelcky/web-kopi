<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Filament\Resources\AboutResource\RelationManagers;
use App\Models\About;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\RichEditor::make('tentang_kami')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('tahun_berdiri')
                    ->required()
                    ->numeric(),
                // Forms\Components\TextInput::make('total_produk')
                //     ->required()
                //     ->numeric(),
                // Forms\Components\TextInput::make('total_pelanggan_puas')
                //     ->required()
                //     ->numeric(),
                Forms\Components\FileUpload::make('image_1')
                    ->image()
                    ->required(),
                Forms\Components\FileUpload::make('image_2')
                    ->image()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tentang_kami')->limit(50),
                Tables\Columns\TextColumn::make('tahun_berdiri'),
                // Tables\Columns\TextColumn::make('total_produk'),
                // Tables\Columns\TextColumn::make('total_pelanggan_puas'),
                Tables\Columns\ImageColumn::make('image_1'),
                Tables\Columns\ImageColumn::make('image_2'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->after(function(Collection $records) {
                            foreach ($records as $key => $value) {
                                if($value->gambar_1) {
                                    Storage::disk('public')->delete($value->gambar_1);
                                };
                                if($value->gambar_2) {
                                    Storage::disk('public')->delete($value->gambar_2);
                                };
                            }
                        }),
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
