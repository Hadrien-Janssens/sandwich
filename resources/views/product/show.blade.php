<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="flex justify-between items-center mb-3">
                    <h1 class="font-bold text-lg ">{{ Str::ucfirst($product->name) }}</h1>
                    <h2>Catégorie : {{ $product->category->name }}</h2>
                </div>
                <p>Prix : {{ $product->price_normal }} €</p>
                @if ($product->ingredients)
                    <p>Ingrédients : {{ $product->ingredients }}</p>
                @endif
                <div class="flex justify-between">
                    <x-primary-button class="mt-3">Ajouter au panier</x-primary-button>

                    {{-- Admin button --}}
                    @if (Auth::user()->role->name == 'admin')
                        <div class="flex gap-3">
                            <form action="{{ route('product.edit', $product) }}">
                                @csrf
                                <x-secondary-button type="submit" class="mt-3">Modifier le
                                    produit</x-secondary-button>
                            </form>
                            <form action="{{ route('product.destroy', $product) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <x-secondary-button type="submit" class="mt-3">Supprimer le
                                    produit</x-secondary-button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
