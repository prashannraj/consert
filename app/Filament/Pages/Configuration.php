<?php

namespace App\Filament\Pages;

use App\Models\Configuration as ModelsConfiguration;
use Filament\Pages\Page;
use Filament\Forms;
use Filament\Notifications\Notification;

class Configuration extends Page implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-cog';

    public $setting;
    public $config;

    public function mount()
    {
        $this->setting = ModelsConfiguration::findorfail(1);
        $this->form->fill([
            'config.logo' => $this->setting->config['logo'],
            'config.thumbnail' => $this->setting->config['thumbnail'],
            'config.favicon' => $this->setting->config['favicon'],
            'config.result_url' => $this->setting->config['result_url'],
            'config.principal_signature' => $this->setting->config['principal_signature'],
            'config.copyright' => $this->setting->config['copyright'],
            'config.contact' => $this->setting->config['contact'],
            'config.landing_description' => $this->setting->config['landing_description'],
        ]);
    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\Card::make()->schema([
                Forms\Components\FileUpload::make('config.logo'),
                Forms\Components\FileUpload::make('config.thumbnail'),
                Forms\Components\FileUpload::make('config.favicon'),
                Forms\Components\TextInput::make('config.result_url')->url(),
                Forms\Components\FileUpload::make('config.principal_signature')->label('Officer Signature'),
                Forms\Components\TextInput::make('config.contact'),
                Forms\Components\TextInput::make('config.copyright')
            ])->columns([
                'sm' => 2
            ]),

            Forms\Components\Card::make()->schema([
                Forms\Components\RichEditor::make('config.landing_description')
            ])
        ];
    }

    public function submit(): void
    {
        $this->setting->update(
            $this->form->getState(),
        );

        Notification::make()
            ->title('Saved successfully')
            ->icon('heroicon-o-badge-check')
            ->iconColor('success')
            ->send();
    }

    protected static string $view = 'filament.pages.configuration';
}
