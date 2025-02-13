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

class CreatePhoto extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                MediaPicker::make('photo')
                ->nativeActionModal()
                ->label('Choose images')
                ->multiple()
                ->reorderable()
                ->showFileName(),
            ])
            ->statePath('data')
            ->model(Photo::class);
    }

    public function create(): void
    {
        $data = $this->form->getState();

        $record = Photo::create($data);

        $this->form->model($record)->saveRelationships();
    }

    public function render(): View
    {
        return view('livewire.create-photo');
    }
}