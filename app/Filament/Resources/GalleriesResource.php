<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleriesResource\Pages;
use App\Filament\Resources\GalleriesResource\RelationManagers;
use App\Models\Galleries;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GalleriesResource extends Resource
{
    protected static ?string $model = Galleries::class;
    
    protected static ?string $navigationIcon = 'heroicon-o-photo';
    
    protected static ?string $navigationGroup = 'Content';
    
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Media Details')
                ->schema([
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Textarea::make('description')
                        ->rows(3)
                        ->columnSpanFull(),
                    Forms\Components\Grid::make(2)
                        ->schema([
                            Forms\Components\Select::make('type')
                                ->options([
                                    'photo' => 'Photo',
                                    'video' => 'Video',
                                ])
                                ->required()
                                ->live(),
                            Forms\Components\DatePicker::make('taken_date')
                                ->label('Date Taken'),
                        ]),
                ]),
            
            Forms\Components\Section::make('Media Files')
                ->schema([
                    Forms\Components\FileUpload::make('file_path')
                        ->label('Main File')
                        ->required()
                        ->directory('gallery')
                        ->visibility('public')
                        ->acceptedFileTypes(function (Forms\Get $get) {
                            return $get('type') === 'video' 
                                ? ['video/*'] 
                                : ['image/*'];
                        }),
                    Forms\Components\FileUpload::make('thumbnail_path')
                        ->label('Thumbnail (for videos)')
                        ->directory('gallery/thumbnails')
                        ->visibility('public')
                        ->image()
                        ->visible(fn (Forms\Get $get) => $get('type') === 'video'),
                ]),
            
            Forms\Components\Section::make('Settings')
                ->schema([
                    Forms\Components\TagsInput::make('tags')
                        ->placeholder('Add tags'),
                    Forms\Components\Grid::make(2)
                        ->schema([
                            Forms\Components\Toggle::make('is_featured')
                                ->label('Featured Media'),
                            Forms\Components\Toggle::make('is_public')
                                ->label('Public Visibility')
                                ->default(true),
                        ]),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('type')
                    ->label('Media Type')
                    ->sortable()
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'photo' => 'Photo',
                        'video' => 'Video',
                        default => $state,
                    }),
                Tables\Columns\TextColumn::make('taken_date')
                    ->label('Date Taken')
                    ->date()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_featured')
                    ->label('Featured')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_public')
                    ->label('Public')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->dateTime()
                    ->sortable(),   
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->options([
                        'photo' => 'Photo',
                        'video' => 'Video',
                    ]),
                Tables\Filters\TernaryFilter::make('is_featured')
                    ->label('Featured'),
                Tables\Filters\TernaryFilter::make('is_public')
                    ->label('Public'),
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
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGalleries::route('/create'),
            'edit' => Pages\EditGalleries::route('/{record}/edit'),
        ];
    }
}