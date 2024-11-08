@php
    $links = [
        'Les Produits' => 'product.index',
        'Mes commandes' => 'order.index',
        'Mon Compte' => 'profile.edit',
    ];
@endphp

<nav class="py-2">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
        <ul class="flex gap-3">
            @foreach ($links as $name => $routeName)
                <li class="hover:bg-slate-200 dark:hover:bg-gray-800  px-1 rounded duration-200">
                    <a href="{{ route($routeName) }}"
                        class="{{ Route::currentRouteName() == $routeName ? 'underline' : '' }}">{{ $name }}</a>
                </li> |
            @endforeach

            @if (Auth::user()->role->name == 'admin')
                <li class="hover:bg-slate-200 dark:hover:bg-gray-800  px-1 rounded duration-200"><a
                        href="{{ route('user.index') }}"
                        class="{{ Route::currentRouteName() == 'user.index' ? 'underline' : '' }}">Gestion
                        utilisateur</a></li> |
            @endif
            @if (Auth::user()->role->name == 'admin' || Auth::user()->role->name == 'order')
                <li class="hover:bg-slate-200 dark:hover:bg-gray-800  px-1 rounded duration-200"><a
                        href="{{ route('orderAdmin.index') }}"
                        class="{{ Route::currentRouteName() == 'orderAdmin.index' ? 'underline' : '' }}">Gestion des
                        commandes</a>
                </li>
            @endif
        </ul>
    </div>
</nav>
