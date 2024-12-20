<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            @if (isset($order))

                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <h1 class="font-bold text-lg ">Order #{{ $order->id }}</h1>
                    <ul>
                        @foreach ($order->ligneOrders as $ligneOrder)
                            <li class="px-3 flex justify-between">
                                <span>{{ $ligneOrder->product->name }}</span>
                                <div class="flex gap-5">
                                    <span>taille :{{ $ligneOrder->size }}</span>
                                    @if ($ligneOrder->size === 'big')
                                        <span>{{ $ligneOrder->product->price_big }}€ X
                                            {{ $ligneOrder->quantity }}</span>
                                    @else
                                        <span>{{ $ligneOrder->product->price_normal }}€ X
                                            {{ $ligneOrder->quantity }}</span>
                                    @endif

                                </div>
                            </li>
                        @endforeach
                        <hr class="my-1">
                        <li class="px-3 flex justify-end gap-2 font-semibold">
                            <span>Total</span>
                            <span>{{ $total }}€</span>
                        </li>
                    </ul>
                    <div class="flex justify-end">
                        <div class="flex gap-3">
                            @if ($order->is_sent && Auth::user()->role !== 'user')
                                <form action="{{ route('order.send') }}">
                                    @csrf
                                    <x-secondary-button type="submit" class="mt-3">valider</x-secondary-button>
                                </form>
                            @endif

                            @if (!$order->is_sent && $order->user_id === Auth::id())
                                <form action="{{ route('order.send') }}">
                                    @csrf
                                    <x-secondary-button type="submit" class="mt-3">Envoyer</x-secondary-button>
                                </form>
                                <form action="{{ route('order.destroy', $order) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <x-secondary-button type="submit" class="mt-3">Annuler</x-secondary-button>
                                </form>
                            @endif
                            @if ($order->is_paid)
                                <form action="{{ route('order.destroy', $order) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <x-secondary-button type="submit" class="mt-3">Supprimer</x-secondary-button>
                                </form>
                            @endif
                        </div>


                    </div>
                @else
                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        <h1 class="font-bold text-lg ">Vous n'avez aucun article dans votre panier</h1>
                    </div>
            @endif
        </div>
    </div>
</x-app-layout>
