@extends('backend.layouts.app-layout')
@section('title', 'Utilisateur')
@section('content')
    @livewire('User.show-user', ['user' => $user])
@endsection
