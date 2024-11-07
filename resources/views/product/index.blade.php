<x-app-layout>
    @if (Auth::user()->role->name == 'admin')
        <x-primary-button>{{ __('Nouveau') }}</x-primary-button>
    @endif
    <h1>Affiche la liste des produits</h1>
</x-app-layout>
