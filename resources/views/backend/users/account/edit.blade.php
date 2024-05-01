@extends('backend.layouts.app-layout')
@section('title', 'Modifier utilisateur')
@section('content')
    @livewire('User.edit-user', ['user' => $user])
@endsection
