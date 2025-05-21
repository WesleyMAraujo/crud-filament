<div class="flex gap-6 overflow-x-auto py-4">
    @foreach ($this->getStatuses() as $status)
        <x-filament::card class="w-80 flex-shrink-0">
            <header class="border-b border-gray-300 dark:border-gray-700 px-4 py-3">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                    {{ $status->nome }}
                </h2>
            </header>
            <div class="divide-y divide-gray-300 dark:divide-gray-700">
                @forelse ($status->clientes as $cliente)
                    <div class="p-4 hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                        <p class="text-sm text-gray-500 dark:text-gray-400"><strong>Nome:</strong> {{ $cliente->nome_completo }}</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400"><strong>E-mail:</strong> {{ $cliente->email ?? 'sem email' }}</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400"><strong>Telefone:</strong> {{ $cliente->telefone }}</p>
                    </div>
                @empty
                    <p class="p-4 text-center text-sm text-gray-400 dark:text-gray-500">Nenhum cliente neste status.</p>
                @endforelse
            </div>
        </x-filament::card>
    @endforeach
</div>
