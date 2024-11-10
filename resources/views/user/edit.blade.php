<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <h1 class="font-bold text-lg mb-3">Compléter mon inscription</h1>

            <form action="{{ route('updateRegistere', $user) }}" class="mt-6 space-y-6">
                @csrf
                @method('PUT')
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)"
                        required />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>
                <div>
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" name="password" type="password" class="mt-1 block w-full"
                        :value="old('password')" required />
                    <x-input-error class="mt-2" :messages="$errors->get('password')" />
                </div>
                <div>
                    <x-input-label for="confirmation" :value="__('Confirmation')" />
                    <x-text-input id="confirmation" name="confirmation" type="password" class="mt-1 block w-full"
                        :value="old('confirmation')" required />
                    <x-input-error class="mt-2" :messages="$errors->get('confirmation')" />
                </div>
                <x-primary-button class="mt-3">S'enregistrer</x-primary-button>
            </form>
        </div>
    </div>
</x-guest-layout>
