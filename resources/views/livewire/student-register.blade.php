<div>
    <form wire:submit.prevent="submit" class="text-center">
        {{ $this->form }}
        <br />
        @if (str_contains(url()->full(), 'register'))
        <button type="submit"
            class="filament-button filament-button-size-md inline-flex items-center justify-center py-1 gap-1 font-medium rounded-lg border transition-colors focus:outline-none focus:ring-offset-2 focus:ring-2 bg-blue-600 focus:ring-inset dark:focus:ring-offset-0 min-h-[2.25rem] px-4 text-sm text-white shadow focus:ring-white border-transparent bg-primary-600 hover:bg-primary-500 focus:bg-primary-700 focus:ring-offset-primary-700 filament-page-button-action">
            Submit Form
        </button>
        @endif
    </form>
</div>