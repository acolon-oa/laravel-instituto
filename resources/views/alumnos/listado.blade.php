<x-layouts.layout>

    <!-- BOTÓN AÑADIR USUARIO A LA IZQUIERDA -->
    <div class="w-full flex justify-start mt-6 ml-10">
        <a href="{{ route('alumnos.create') }}"
            class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
            Añadir usuario
        </a>
    </div>

    <div class="overflow-x-auto h-full w-full">
        <table class="table table-xs table-pin-rows table-pin-cols m-10">
            <thead>
                <tr class="text-white">
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Fecha Nacimiento</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($alumnos as $alumno)
                    <tr class="text-black">
                        <th class="text-white">{{ $loop->iteration }}</th>

                        <td>{{ $alumno->nombre }}</td>
                        <td>{{ $alumno->apellido }}</td>
                        <td>{{ $alumno->email }}</td>

                        <!-- FECHA SOLO -->
                        <td>{{ $alumno->fecha_nacimiento }}</td>

                        <!-- ICONOS -->
                        <td class="flex items-center justify-center gap-4">

                            <!-- EDITAR -->
                            <a href="{{ route('alumnos.edit', $alumno->id) }}">
                                <svg class="w-6 h-6 cursor-pointer" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0z" />
                                </svg>
                            </a>

                            <!-- ELIMINAR -->
                            <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST"
                                onsubmit="return confirm('¿Seguro?')">
                                @csrf
                                @method('DELETE')
                                <button>
                                    <svg class="w-6 h-6 cursor-pointer" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 448 512">
                                        <path
                                            d="M135.2 17.7L141.5 0h165l6.3 17.7L336 32H112l23.2-14.3zM32 96h384l-21.2 371.1c-1.6 28.8-25.3 44.9-54.1 44.9H107.3c-28.9 0-52.5-16.1-54.1-44.9L32 96z" />
                                    </svg>
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.layout>
