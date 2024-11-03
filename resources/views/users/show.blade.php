<x-app-layout title="Users">
    <x-slot name="heading">{{ $user->name }}
    </x-slot>
{{ $user->email }}

{{--    {{ $user->created_at->diffForHumans() }}--}}
</x-app-layout>
