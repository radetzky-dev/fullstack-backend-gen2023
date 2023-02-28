@extends('layouts.app-master')

@section('content')
    @auth
        <h1>Dashboard</h1>
        <p class="lead">Sei un utente autenticato con ID {{ Auth::id() }}</p>
    @endauth
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

        @foreach ($products as $product)
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                    style="background-image: url('unsplash-photo-1.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">{{ $product->name }}</h2>
                        <h3>€ {{ $product->price }} </h3>
                        <img src="{{ $product->image }}" />
                        <ul class="d-flex list-unstyled mt-auto">

                            <p> {{ $product->description }} </p>
                            <li class="d-flex align-items-center me-3">

                                <small>
                                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $product->id }}" name="id">
                                        <input type="hidden" value="{{ $product->name }}" name="name">
                                        <input type="hidden" value="{{ $product->price }}" name="price">
                                        <input type="hidden" value="{{ $product->image }}"  name="image">
                                        <input type="hidden" value="1" name="quantity">
                                        <button class="px-4 py-2 text-white bg-blue-800 rounded">Inserisci del carrello</button>
                                    </form>



                                </small>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection
