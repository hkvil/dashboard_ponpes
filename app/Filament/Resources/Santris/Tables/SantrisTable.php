<?php

namespace App\Filament\Resources\Santris\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;

class SantrisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto_url')
                    ->label('Foto Profil')
                    ->disk('public'),
                TextColumn::make('nama_madrasah')
                    ->badge()
                    ->searchable(),
                TextColumn::make('tahun_pelajaran')
                    ->searchable(),
                TextColumn::make('alamat_madrasah')
                    ->searchable(),
                TextColumn::make('kabupaten_kota_madrasah')
                    ->searchable(),
                TextColumn::make('madrasah_induk')
                    ->searchable(),
                TextColumn::make('nomor_urut')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('nomor_induk')
                    ->searchable(),
                TextColumn::make('nisn')
                    ->searchable(),
                TextColumn::make('nama_santri')
                    ->searchable(),
                TextColumn::make('jenis_kelamin')
                    ->badge()
                    ->searchable(),
                TextColumn::make('kelas')
                    ->searchable(),
                TextColumn::make('tempat_lahir')
                    ->searchable(),
                TextColumn::make('tanggal_lahir')
                    ->date()
                    ->sortable(),
                TextColumn::make('tgl_lahir')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('bln_lahir')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('thn_lahir')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('ayah')
                    ->searchable(),
                TextColumn::make('ibu')
                    ->searchable(),
                TextColumn::make('desa_kelurahan')
                    ->searchable(),
                TextColumn::make('kecamatan')
                    ->searchable(),
                TextColumn::make('kabupaten_kota')
                    ->searchable(),
                TextColumn::make('ijazah_nomor')
                    ->searchable(),
                TextColumn::make('ijazah_tahun')
                    ->numeric()
                    ->sortable(),
                IconColumn::make('lulus')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
