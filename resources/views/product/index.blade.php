<x-app-layout>

    <div class="flex items-center justify-between grow gap-2">
        <x-text-input placeholder="Rechercher un produit ..." class="" />
        @if (Auth::user()->role->name == 'admin')
            <x-primary-button> <a
                    href="{{ route('product.create') }}">{{ __('ajouter un produit') }}</a></x-primary-button>
        @endif
    </div>

    <div>
        @foreach ($categories as $category)
            <ul>
                <div class="border-b-[1px] mt-3">
                    <li class="font-bold uppercase ">{{ $category->name }}</li>
                </div>


                @foreach ($products as $product)
                    @if ($product->category_id == $category->id)
                        <ul>
                            <li><a href="{{ route('product.show', $product) }}">{{ $product->name }}</a></li>
                        </ul>
                    @endif
                @endforeach
            </ul>
        @endforeach
    </div>

</x-app-layout>
