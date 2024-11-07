<x-app-layout>
    @if (Auth::user()->role->name == 'admin')
        <x-primary-button> <a href="{{ route('product.create') }}">{{ __('Nouveau') }}</a></x-primary-button>
    @endif

    <div>
        <h2>Liste</h2>
        @foreach ($products as $product)
            <ul>
                <li><a href="{{ route('product.show', $product) }}">{{ $product->name }}</a></li>
            </ul>
        @endforeach
    </div>

</x-app-layout>
