@extends('layouts.app')

@section('title', 'Aksamedia Academy')

@section('content')
    <p>This is my first page in second module</p>
    
    @component('alert')
        @slot('title')
            Password tidak valid
        @endslot

        @slot('body')
            Password minimal harus 8 karakter
        @endslot
    @endcomponent
@endsection
