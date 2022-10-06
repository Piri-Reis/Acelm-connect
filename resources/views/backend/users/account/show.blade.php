@extends('backend.layouts.app-layout')
@section('title', 'Utilisateur')
@section('content')
    @livewire('show-user', ['user' => $user])
@endsection
