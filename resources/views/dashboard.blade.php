@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-8">
    <h1 class="text-4xl font-serif font-bold text-rose-800 mb-8">Gestion des Réservations</h1>

    @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    
    <!-- Tableau des réservations -->
    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="table-auto w-full border-collapse border border-gray-200">
            <thead class="bg-rose-800 text-white">
                <tr>
                    <th class="px-4 py-3 border border-gray-300">Nom</th>
                    <th class="px-4 py-3 border border-gray-300">Email</th>
                    <th class="px-4 py-3 border border-gray-300">Téléphone</th>
                    <th class="px-4 py-3 border border-gray-300">Date</th>
                    <th class="px-4 py-3 border border-gray-300">Heure</th>
                    <th class="px-4 py-3 border border-gray-300">Personnes</th>
                    <th class="px-4 py-3 border border-gray-300">Statut</th>
                    <th class="px-4 py-3 border border-gray-300">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $reservation)
                    <tr class="hover:bg-rose-50">
                        <td class="px-4 py-3 border border-gray-300 text-gray-800">{{ $reservation->name }}</td>
                        <td class="px-4 py-3 border border-gray-300 text-gray-800">{{ $reservation->email }}</td>
                        <td class="px-4 py-3 border border-gray-300 text-gray-800">{{ $reservation->phone }}</td>
                        <td class="px-4 py-3 border border-gray-300 text-gray-800">{{ $reservation->date }}</td>
                        <td class="px-4 py-3 border border-gray-300 text-gray-800">{{ $reservation->time }}</td>
                        <td class="px-4 py-3 border border-gray-300 text-gray-800">{{ $reservation->guests }}</td>
                        <td class="px-4 py-3 border border-gray-300">
                            <form method="POST" action="{{ route('reservations.update', $reservation->id) }}">
                                @csrf
                                @method('PATCH')
                                <div class="relative">
                                    <select name="status" class="border border-gray-300 rounded px-2 py-1 focus:outline-none focus:ring-2 focus:ring-rose-300 appearance-none" onchange="this.form.submit()">
                                        <option value="En attente" {{ $reservation->status == 'En attente' ? 'selected' : '' }}>En attente</option>
                                        <option value="Acceptée" {{ $reservation->status == 'Acceptée' ? 'selected' : '' }}>Acceptée</option>
                                        <option value="Refusée" {{ $reservation->status == 'Refusée' ? 'selected' : '' }}>Refusée</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                        <i class="fas fa-chevron-down text-gray-500"></i>
                                    </div>
                                </div>
                            </form>
                        </td>
                        <td class="px-4 py-3 border border-gray-300 flex space-x-2">
                            <form method="POST" action="{{ route('reservations.update', $reservation->id) }}">
                                @csrf
                                @method('PATCH')
                                <button type="submit" name="status" value="Refusée" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">
                                    Refuser
                                </button>

                            </form>
                            <!-- Delete button -->
                            <form method="POST" action="{{ route('reservations.destroy', $reservation->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">
                                    Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $reservations->links() }}
    </div>
</div>
@endsection