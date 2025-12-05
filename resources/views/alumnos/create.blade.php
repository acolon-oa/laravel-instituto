<x-layouts.layout>

    <div class="max-w-xl mx-auto mt-20 p-6 bg-white shadow rounded text-black">

        <h1 class="text-2xl font-bold mb-6">Añadir usuario</h1>

        <form action="{{ route('alumnos.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block font-semibold mb-1">Nombre</label>
                <input type="text" name="nombre"
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring"
                       value="{{ old('nombre') }}" required>

                @error('nombre')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Apellido</label>
                <input type="text" name="apellido"
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring"
                       value="{{ old('apellido') }}" required>

                @error('apellido')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Email</label>
                <input type="email" name="email"
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring"
                       value="{{ old('email') }}" required>

                @error('email')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block font-semibold mb-1">Fecha de nacimiento</label>
                <input type="date" name="fecha_nacimiento"
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring"
                       value="{{ old('fecha_nacimiento') }}" required>

                @error('fecha_nacimiento')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-between">
                <a href="{{ route('alumnos.index') }}"
                   class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition">
                    Cancelar
                </a>

                <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                    Guardar usuario
                </button>
            </div>

        </form>

    </div>

</x-layouts.layout>
