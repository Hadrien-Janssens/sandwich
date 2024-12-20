<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <h1 class="font-bold text-lg mb-3">Modification du produit </h1>
                @if ($errors->any())
                    <div class="text-red-500">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('product.update', $product) }}" class="mt-6 space-y-6" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <x-input-label for="name" :value="__('Nom')" />
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                            :value="old('name', $product->name)" required />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>

                    <div>
                        <x-input-label for="category" :value="__('Catégorie')" />
                        <select name="category_id" id="category_id"
                            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <x-input-error class="mt-2" :messages="$errors->get('category')" />
                    </div>

                    <div>
                        <x-input-label for="price_normal" :value="__('Prix (normal)')" />
                        <x-text-input id="price_normal" name="price_normal" type="number" class="mt-1 block w-full"
                            :value="old('price_normal', $product->price_normal)" required />
                        <x-input-error class="mt-2" :messages="$errors->get('price_normal')" />
                    </div>

                    <div>
                        <x-input-label for="price_big" :value="__('Prix (grand)')" />
                        <x-text-input id="price_big" name="price_big" type="number" class="mt-1 block w-full"
                            :value="old('price_big', $product->price_big)" />
                        <x-input-error class="mt-2" :messages="$errors->get('price_big')" />
                    </div>

                    <div class="flex items-center mt-3 gap-3">
                        <x-primary-button>Modifier</x-primary-button>
                        @if (session('edit-success') === 'Produit modifié avec succès!')
                            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)"
                                class="text-sm text-gray-600 dark:text-gray-400">{{ __('Modifié ✅') }}</p>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
