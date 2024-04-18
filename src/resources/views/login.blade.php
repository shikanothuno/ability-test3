@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset("css/login.css")}}">
@endsection

@section('content')
<h2 class="title">Register</h2>
<form class="register__form" action="/login" method="POST">
    @csrf
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    <div class="form__div">
        <dl>
            <dt class="email__dt">メールアドレス</dt>
            <dd><input type="text" name="email" placeholder="例：test@example.com"></dd>
            <dt class="password">パスワード</dt>
            <dd><input type="text" name="password" placeholder="例：coachtech1106"></dd>
        </dl>
    </div>
    <button>ログイン</button>
</form>
