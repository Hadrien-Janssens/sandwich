<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <h1 class="font-bold text-lg ">Order #{{ $order->id }}</h1>
                <ul>
                    @foreach ($order->ligneOrders as $ligneOrder)
                        <li class="px-3 flex justify-between">
                            <span>{{ $ligneOrder->product->name }}</span>
                            <div class="flex gap-5">
                                <span>taille :{{ $ligneOrder->size }}</span>
                                <span>{{ $ligneOrder->product->price_normal }}€</span>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div class="flex justify-end">
                    {{-- Admin button --}}
                    @if (Auth::user()->role->name == 'admin')
                        <div class="flex gap-3">

                            <form action="{{ route('order.destroy', $order) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <x-secondary-button type="submit" class="mt-3">Supprimer
                                    la commande</x-secondary-button>
                            </form>
                        </div>
                    @endif

                </div>
            </div>
        </div>
</x-app-layout>
