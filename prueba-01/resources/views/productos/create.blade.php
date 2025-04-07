<x-layouts.app>
    <div class="max-w-lg mx-auto p-8 bg-white dark:bg-zinc-800 rounded-xl shadow-xl border border-zinc-200 dark:border-zinc-700">
        <h2 class="text-3xl font-bold text-center text-zinc-900 dark:text-zinc-100 mb-8">Registrar Producto</h2>
        <form action="{{ route('productos.store') }}" method="POST" class="space-y-6">
            @csrf
            <flux:input label="Nombre" name="nombre" required autofocus class="rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500"/>
            <flux:input label="Cantidad" name="cantidad" type="number" required class="rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500"/>
            <flux:input label="Categoría" name="categoria" required class="rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500"/>
            <flux:input label="Precio" name="precio" type="number" step="0.01" required class="rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500"/>
            <flux:button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 rounded-lg transition duration-300 ease-in-out">Guardar</flux:button>
        </form>
    </div>
</x-layouts.app>
