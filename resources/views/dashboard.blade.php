<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 text-center">
                    <h1 class="text-3xl font-bold text-gray-800">
                        ¡Bienvenido, {{ Auth::user()->name }}! 👋
                    </h1>
                    <p class="mt-2 text-lg text-gray-600">
                        Nos alegra verte de nuevo en el sistema. Aquí puedes gestionar tus préstamos y herramientas fácilmente.
                    </p>
                </div>
            </div>
    
            <!-- Contenedor de las tarjetas -->
            <div class=" mt-6 w-full"  style="display: grid; grid-template-columns: repeat(3, 1fr); grid-template-rows: repeat(2, auto); gap: 16px;">
                <!-- Tarjeta 1 -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center transform hover:scale-105 transition">
                    <svg class="w-16 h-16 text-indigo-500 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6z"/>
                    </svg>
                    <h2 class="text-xl font-semibold mt-4">Gestión de Equipos</h2>
                    <p class="text-gray-600 mt-2">Administra fácilmente el préstamo y devolución de equipos.</p>
                </div>
            
                <!-- Tarjeta 2 -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center transform hover:scale-105 transition">
                    <svg class="w-16 h-16 text-green-500 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l4-4m0 0l4-4m-4 4H4m16 0h-8"/>
                    </svg>
                    <h2 class="text-xl font-semibold mt-4">Historial de Préstamos</h2>
                    <p class="text-gray-600 mt-2">Consulta y gestiona los registros de préstamos y devoluciones.</p>
                </div>
            
                <!-- Tarjeta 3 -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center transform hover:scale-105 transition">
                    <svg class="w-16 h-16 text-red-500 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6z"/>
                    </svg>
                    <h2 class="text-xl font-semibold mt-4">Soporte y Ayuda</h2>
                    <p class="text-gray-600 mt-2">¿Necesitas ayuda? Encuentra respuestas a tus preguntas.</p>
                </div>
            
                <!-- Tarjeta 4 -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center transform hover:scale-105 transition">
                    <svg class="w-16 h-16 text-blue-500 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11m-6-6l6 6-6 6"/>
                    </svg>
                    <h2 class="text-xl font-semibold mt-4">Reportes y Estadísticas</h2>
                    <p class="text-gray-600 mt-2">Obtén informes detallados sobre los préstamos realizados.</p>
                </div>
            
                <!-- Tarjeta 5 -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center transform hover:scale-105 transition">
                    <svg class="w-16 h-16 text-yellow-500 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6z"/>
                    </svg>
                    <h2 class="text-xl font-semibold mt-4">Usuarios y Roles</h2>
                    <p class="text-gray-600 mt-2">Gestiona permisos y roles dentro del sistema.</p>
                </div>
            
                <!-- Tarjeta 6 -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center transform hover:scale-105 transition">
                    <svg class="w-16 h-16 text-purple-500 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6z"/>
                    </svg>
                    <h2 class="text-xl font-semibold mt-4">Configuración</h2>
                    <p class="text-gray-600 mt-2">Personaliza la configuración del sistema a tu medida.</p>
                </div>
            </div>

        </div>
    </div>
    
    
</x-app-layout>
