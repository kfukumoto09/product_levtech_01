<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Index') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <h3>Welcome to LDMS Cloud!</h3>
        <p>
            LDMS (Laboratory Data Management System) is a application to manage lab notes and experimental data.
        </p>
    </div>
    

    <div class="container-md">
        @each('components.project', $projects, 'project')
    </div>
    
    <div class="container-md">
        <a href="/projects/create">Create a new project</a><br>
    </div>
    
    @can('isAdmin')
        <form method="POST" action="/projects/{{ $projects->first()->id }}">
        	@method('delete')
        	@csrf
        	<button type="submit" class="btn btn-danger">delete</button>
    	</form>
    @else
        <p>-- This content is displayed only for administrators. --</p>
    @endcan

</x-app-layout>


{{--
@extends('layouts.master')

@section('title', 'LDMS Cloud')

@section('content')
    <h1>Welcome to LDMS Cloud!</h1>
    <p>
        LDMS (Laboratory Data Management System) is a application to manage lab notes and experimental data.
    </p>
    <div class="container-md">
        @each('components.project', $projects, 'project')
    </div>
@endsection
--}}