@extends('layouts.app')

@section('content')

   <information :name="{{ json_encode(Auth::user()->name) }}" :email="{{ json_encode(Auth::user()->email) }}"></information>

@endsection