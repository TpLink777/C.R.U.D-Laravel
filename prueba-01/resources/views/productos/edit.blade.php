<x-layouts.app>
    <div class="max-w-lg mx-auto p-8 bg-white dark:bg-zinc-800 rounded-xl shadow-xl border border-zinc-200 dark:border-zinc-700">
        <h2 class="text-3xl font-bold text-center text-zinc-900 dark:text-zinc-100 mb-8">Editar Producto</h2>
        <form action="{{ route('productos.update', $producto->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            <flux:input label="Nombre" name="nombre" value="{{ $producto->nombre }}" required class="rounded-lg  focus:ring-2 focus:ring-blue-500"/>
            <flux:input label="Cantidad" name="cantidad" type="number" value="{{ $producto->cantidad }}" required class="rounded-lg focus:ring-2 focus:ring-blue-500"/>
            <flux:input label="Categoría" name="categoria" value="{{ $producto->categoria }}" required class="rounded-lg focus:ring-2 focus:ring-blue-500"/>
            <flux:input label="Precio" name="precio" type="number" step="0.01" value="{{ $producto->precio }}" required class="rounded-lg  focus:ring-2 focus:ring-blue-500"/>
            <div class="flex space-x-4">
                <flux:button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 rounded-lg transition duration-300 ease-in-out">Actualizar</flux:button>
                <flux:button as="a" href="{{ route('productos.index') }}" class="w-full bg-gray-600 hover:bg-gray-700 text-white font-medium py-3 rounded-lg transition duration-300 ease-in-out">Cancelar</flux:button>
            </div>
        </form>
    </div>
</x-layouts.app>