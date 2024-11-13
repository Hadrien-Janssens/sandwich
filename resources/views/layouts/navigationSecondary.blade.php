@php
    $links = [
        'Les Produits' => 'product.index',
        'Mes commandes' => 'order.index',
        'Panier' => 'order.orderInProcess',
    ];
@endphp

<nav class="max-w-7xl  px-6 lg:px-8 py-2 flex justify-between items-center">
    <div class="grow">
        <ul class="flex gap-3 ">
            @foreach ($links as $name => $routeName)
                <li class="hover:bg-slate-200 dark:hover:bg-gray-800  px-1 rounded duration-200">
                    <a href="{{ route($routeName) }}"
                        class="{{ Route::currentRouteName() == $routeName ? 'underline' : '' }}">{{ $name }}</a>
                </li>
            @endforeach

        </ul>
    </div>
</nav>
