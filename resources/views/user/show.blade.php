<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="flex justify-between items-center mb-3">
                    <h1 class="font-bold text-lg ">{{ Str::ucfirst($user->name) }}</h1>
                    <h2>role : {{ $user->role->name }}</h2>
                </div>
                <p>Email : {{ $user->email }}</p>
                <div class="flex justify-end">

                    {{-- Admin button --}}
                    @if (Auth::user()->role->name == 'admin')
                        <div class="flex gap-3">
                            <form action="{{ route('user.edit', $user) }}">
                                @csrf
                                <x-secondary-button type="submit" class="mt-3">Modifier
                                    l'utilisateur</x-secondary-button>
                            </form>
                            <form action="{{ route('user.destroy', $user) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <x-secondary-button type="submit" class="mt-3">Supprimer
                                    l'utilisateur</x-secondary-button>
                            </form>
                        </div>
                    @endif

                </div>
            </div>
        </div>
</x-app-layout>
