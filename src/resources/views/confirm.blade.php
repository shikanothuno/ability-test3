@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset("css/confirm.css")}}">
@endsection

@section('content')
<h2 class="title">Confirm</h2>
<form action="thanks.blade.php">
    @csrf

</form>
