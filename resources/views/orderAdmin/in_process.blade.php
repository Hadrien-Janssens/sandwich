<x-app-layout>
    <nav>
        <ul class="flex gap-3">
            <li><a href="{{ route('orderAdmin.in_process') }}" class="underline">Commandes envoyées</a></li>
            <li><a href="{{ route('orderAdmin.end_process') }}">Commandes validée</a></li>
        </ul>
    </nav>
    <table class="border m-auto mt-10">
        <thead class="border">
            <tr>
                <th>Numéro de commande</th>
                <th>Client</th>
                <th>Date de commande</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr class="border">
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->status }}</td>
                    <td>

                        <form action="{{ route('order.show', $order->id) }}">
                            @csrf
                            <x-secondary-button type="submit" class="mt-3">Voir</x-secondary-button>
                        </form>

                        <form action="{{ route('orderAdmin.validate', $order) }}">
                            @csrf
                            <x-primary-button type="submit" class="mt-3">valider</x-primary-button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
</x-app-layout>
