<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 space-y-6">
            <div class="flex items-center justify-between grow gap-2">
                <x-text-input placeholder="Rechercher un utilisateur ..." class="grow" />

                <p>ou</p>
                <x-primary-button> <a
                        href="{{ route('invitation.create') }}">{{ __('inviter un utilisateur') }}</a></x-primary-button>

            </div>
        </div>
    </div>


    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <ul>
                @foreach ($roles as $role)
                    <div class="border-b-[1px] my-3">
                        <li class="font-bold uppercase ">{{ $role->name }}</li>
                    </div>


                    <ul class="space-y-2">
                        @foreach ($users as $user)
                            @if ($user->role->name === $role->name)
                                <li class=" flex justify-between items-center gap-5 ">
                                    <a href="{{ $role }}"
                                        class="grow dark:hover:bg-slate-900 hover:bg-slate-100 rounded-md">
                                        <div class="flex gap-5 items-center p-2">
                                            <p>{{ $user->name }}</p>
                                        </div>
                                    </a>
                                    <div>
                                        <x-primary-button>modifier</x-primary-button>
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
