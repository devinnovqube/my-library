<?php

namespace App\Livewire;

use App\Models\Photo;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\CreateAction;

class ListPhotos extends Component implements HasForms, HasTable
{
    use InteractsWithForms;
    use InteractsWithTable;

    public Photo $photo;

    public function mount(Photo $photo)
    {
        $this->photo = $photo;
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(Photo::query())
            ->columns([
                Tables\Columns\TextColumn::make('url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->recordUrl(
                fn(Photo $record): string => route('photos.show', $record),
            )
            ->headerActions([
                CreateAction::make()
                    ->label('Add Photo')
                    ->url(route('create'))

                    ->icon('heroicon-s-plus')
                    ->color('primary'),
            ])
            ->filters([])
            ->actions([])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([]),
            ]);
    }

    public function render(): View
    {
        return view('livewire.list-photos');
    }
}
