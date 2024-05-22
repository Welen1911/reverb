<div class="flex flex-row mt-8 justify-between items-center">
    <x-primary-button wire:click="processReport">
        Processar relatório
    </x-primary-button>

    <span class="relative flex h-3 w-3">
        <span
        class="absolute animate-ping inline-flex h-full w-full rounded-full opacity-75 {{ $status != 'idle' ? $statusColors[0] : '' }}"
        ></span>
        <span
        class="relative inline-flex rounded-full h-3 w-3 {{ $status != 'idle' ? $statusColors[1] : '' }}"
        ></span>
    </span>
</div>
