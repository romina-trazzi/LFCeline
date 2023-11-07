<!-- prende tutto quello che c'è nel file app della cartella layout -->
@extends('layout.app') 

<!-- si mette al posto dello yield "stylecss" del file app della cartella layout -->

@section('stylecss')

<link rel="stylesheet" href="{{asset('css/bookstore.css')}}" type="text/css">

@endsection

<!-- si mette al posto dello yield "mediquerycss" del file app della cartella layout -->

@section('mediquerycss')

<link rel="stylesheet" href="{{asset('css/mqBookstore.css')}}" type="text/css">

@endsection

<!-- si mette al posto dello yield del file app della cartella layout -->
@section('content')


@endsection