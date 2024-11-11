<x-app-layout>


    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">

            <ul class="space-y-2">
                @foreach ($orders as $order)
                    <li class=" flex justify-between items-center gap-5 ">
                        <a href="{{ route('order.show', $order) }}"
                            class="grow dark:hover:bg-slate-900 hover:bg-slate-100 rounded-md">
                            <div class="flex gap-5 items-center p-2">
                                <p>Order #{{ $order->id }} du {{ $order->created_at->format('d/m/Y') }}</p>
                            </div>
                        </a>
                        <div>
                            @if ($order->is_sent)
                                <span>Envoyée</span>
                            @else
                                <span class="text-orange-500">En cours</span>
                            @endif
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-app-layout>
