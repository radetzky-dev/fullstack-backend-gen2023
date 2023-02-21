@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
    <button type="button" class="btn btn-primary">Premi</button>
@endsection

@section('navigation')
    Qui menù di navigazione
@endsection

@section('footer')
    <p>This is my footer</p>
@endsection