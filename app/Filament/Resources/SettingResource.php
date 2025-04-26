<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Creagia\FilamentCodeField\CodeField;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        $isDemo = env('IS_DEMO', false);
        return $form
            ->schema([
                Forms\Components\Section::make()->schema([
                    Forms\Components\TextInput::make('sitename')->required()->disabled($isDemo),
                    Forms\Components\TextInput::make('purchase_key')->required()->disabled($isDemo),
                ]),
                Forms\Components\Section::make()->schema([
                    Forms\Components\SpatieMediaLibraryFileUpload::make('logo')->collection('logo')->required()->disabled($isDemo),
                    Forms\Components\SpatieMediaLibraryFileUpload::make('favicon')->collection('favicon')->required()->disabled($isDemo),
                    Forms\Components\SpatieMediaLibraryFileUpload::make('og_image')->collection('ogimage')->required()->disabled($isDemo),
                ])->columns(3),
                Forms\Components\Section::make()->schema([
                    Forms\Components\TextInput::make('email_host')->disabled($isDemo),
                    Forms\Components\TextInput::make('email_port')->disabled($isDemo),
                    Forms\Components\TextInput::make('email_username')->disabled($isDemo),
                    Forms\Components\TextInput::make('email_password')->disabled($isDemo),
                    Forms\Components\TextInput::make('email_from')->columnSpan('full')->disabled($isDemo),
                ])->columns(2),
                Forms\Components\Section::make()->schema([
                    Forms\Components\Textarea::make('meta_title'),
                    Forms\Components\Textarea::make('meta_keywords'),
                    Forms\Components\Textarea::make('meta_description'),
                ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('sitename'),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageSettings::route('/'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }
}
