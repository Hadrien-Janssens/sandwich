<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <h1 class="font-bold text-lg mb-3">Inviter un utilisateur</h1>

                <form action="{{ route('user.store') }}" class="mt-6 space-y-6" method="POST">
                    @csrf
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                            :value="old('name')" required />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>

                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                            :value="old('email')" required />
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                    </div>

                    <div>
                        <x-input-label for="role" :value="__('Catégorie')" />
                        <select name="role_id" id="role_id"
                            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full">
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                        <x-input-error class="mt-2" :messages="$errors->get('role')" />
                    </div>


                    <x-primary-button class="mt-3">inviter</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
