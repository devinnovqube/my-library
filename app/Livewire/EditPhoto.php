<?php

namespace App\Livewire;

use App\Models\Photo;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use RalphJSmit\Filament\MediaLibrary\Forms\Components\MediaPicker;


class EditPhoto extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public Photo $record;

    public function mount(): void
    {
        $this->record = Photo::get();

        $this->form->fill($this->record->attributesToArray());
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                MediaPicker::make('photos')
                ->nativeActionModal()
                ->label('Choose images')
                ->multiple()
                ->reorderable()
                ->showFileName(),
            ])
            ->statePath('data')
            ->model($this->record);
    }

    public function save(): void
    {
        $data = $this->form->getState();

        $this->record->update($data);
    }

    public function render(): View
    {
        return view('livewire.edit-photo');
    }
}
