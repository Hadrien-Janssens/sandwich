@php
    $links = [
        'Les Produits' => 'product.index',
        'Mes commandes' => 'order.index',
        'Mon Compte' => 'profile.edit',
    ];
@endphp

<nav>
    <ul class="flex gap-3">
        @foreach ($links as $name => $routeName)
            <li>
                <a href="{{ route($routeName) }}"
                    class="{{ Route::currentRouteName() == $routeName ? 'underline' : '' }}">{{ $name }}</a>
            </li>
        @endforeach

        @if (Auth::user()->role->name == 'admin')
            <li><a href="{{ route('user.index') }}"
                    class="{{ Route::currentRouteName() == 'user.index' ? 'underline' : '' }}">Gestion
                    utilisateur</a></li>
        @endif
        @if (Auth::user()->role->name == 'admin' || Auth::user()->role->name == 'order')
            <li><a href="{{ route('orderAdmin.index') }}"
                    class="{{ Route::currentRouteName() == 'orderAdmin.index' ? 'underline' : '' }}">Gestion des
                    commandes</a>
            </li>
        @endif
    </ul>
</nav>
