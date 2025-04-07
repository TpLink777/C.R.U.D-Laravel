<x-layouts.app>
    <div class="max-w-5xl mx-auto p-6 bg-white dark:bg-zinc-800 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-center text-zinc-900 dark:text-zinc-100 mb-6">Lista de Productos</h2>
        <div class="flex justify-end mb-4">
            <flux:button as="a" href="{{ route('productos.create') }}" color="primary">
                Registrar Nuevo Producto
            </flux:button>
        </div>
        <div class="overflow-hidden border border-zinc-200 dark:border-zinc-700 rounded-lg ">
            <table class="w-full text-sm text-left text-zinc-900 dark:text-zinc-100">
                <thead class="bg-zinc-100 dark:bg-zinc-700">
                    <tr>
                        <th class="px-4 py-3">Nombre</th>
                        <th class="px-4 py-3 text-center">Cantidad</th>
                        <th class="px-4 py-3">Categoría</th>
                        <th class="px-4 py-3 text-right">Precio</th>
                        <th class="px-4 py-3 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-200 dark:divide-zinc-700">
                    @foreach($productos as $producto)
                    <tr class="dark:hover:bg-zinc-700">
                        <td class="px-4 py-3">{{ $producto->nombre }}</td>
                        <td class="px-4 py-3 text-center">{{ $producto->cantidad }}</td>
                        <td class="px-4 py-3">{{ $producto->categoria }}</td>
                        <td class="px-4 py-3 text-right font-semibold">${{ number_format($producto->precio, 3) }}</td>
                        <td class="px-4 py-3 text-center">
                            <flux:button  href="{{ route('productos.edit', $producto->id) }}" color="warning" size="sm">
                                Editar
                            </flux:button>
                            <form action="{{ route('productos.delete', $producto->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <flux:button type="submit" color="danger" size="sm">
                                    Eliminar
                                </flux:button>
                            </form>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>