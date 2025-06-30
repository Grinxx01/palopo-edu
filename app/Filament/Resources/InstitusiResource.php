<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InstitusiResource\Pages;
use App\Filament\Resources\InstitusiResource\RelationManagers;
use App\Models\Institusi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class InstitusiResource extends Resource
{
    protected static ?string $navigationLabel = 'Daftar Sekolah';
    protected static ?string $navigationIcon = 'heroicon-o-building-library';
    protected static ?string $pluralModelLabel = 'Daftar Sekolah';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            TextInput::make('nama_sekolah')
                ->required()
                ->label('Nama Sekolah'),

            TextInput::make('tingkat_pendidikan')
                ->required()
                ->label('Tingkat Pendidikan'),

            Textarea::make('alamat')
                ->required(),

            Textarea::make('deskripsi')
                ->label('Deskripsi'),

            TextInput::make('url_website')
                ->url()
                ->label('URL Website'),

            FileUpload::make('gambar')
                ->directory('institusi-images')
                ->image()
                ->label('Foto Sekolah'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_sekolah')->searchable()->sortable(),
                TextColumn::make('tingkat_pendidikan')->sortable(),
                TextColumn::make('alamat')->limit(30),
                TextColumn::make('url_website')->limit(20),
                ImageColumn::make('gambar')->circular(),
                TextColumn::make('created_at')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),            ])
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
            'index' => Pages\ListInstitusis::route('/'),
            'create' => Pages\CreateInstitusi::route('/create'),
            'edit' => Pages\EditInstitusi::route('/{record}/edit'),
        ];
    }
}
