<x-app-layout>
    <nav>
        <ul class="flex gap-3">
            <li><a href="{{ route('orderAdmin.in_process') }}">Commandes envoyées</a></li>
            <li><a href="{{ route('orderAdmin.end_process') }}" class="underline">Commandes validée</a></li>
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
                        <a href="">Voir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
</x-app-layout>
