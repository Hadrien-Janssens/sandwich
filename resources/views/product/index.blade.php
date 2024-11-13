<x-app-layout>
    <div class="pt-12 pb-3">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 space-y-6">
            <div class="flex items-center justify-between grow gap-2">
                <x-text-input placeholder="Rechercher un produit ..." class="grow" />
                @if (Auth::user()->role->name == 'admin')
                    <p>ou</p>
                    <x-primary-button> <a
                            href="{{ route('product.create') }}">{{ __('ajouter un produit') }}</a></x-primary-button>
                @endif
            </div>
        </div>
    </div>


    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <ul>
                @foreach ($categories as $category)
                    <div class="border-b-[1px] my-3">
                        <li class="font-bold uppercase ">{{ $category->name }}</li>
                    </div>


                    <ul class="space-y-2">
                        @foreach ($products as $product)
                            @if ($product->category_id == $category->id)
                                <li class=" flex justify-between items-center gap-5 ">
                                    <a href="{{ route('product.show', $product) }}"
                                        class="grow dark:hover:bg-slate-900 hover:bg-slate-100 rounded-md">
                                        <div class="flex gap-5 items-center p-2">
                                            <p>{{ $product->name }}</p>
                                            <p class="italic">{{ $product->price_normal }} €</p>
                                        </div>
                                    </a>
                                    <div>
                                        <form action="{{ route('orderLigne.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <x-secondary-button type="submit">Ajouter au panier</x-secondary-button>
                                        </form>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                @endforeach
            </ul>
        </div>
    </div>


</x-app-layout>
