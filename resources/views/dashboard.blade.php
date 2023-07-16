@extends('components.layouts.app', ['title' => 'Dashboard'])


@section('content')
Bienvenido {{ auth()->user()->name }}
@endsection
