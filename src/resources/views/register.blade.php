@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset("css/register.css")}}">
@endsection
<header>
    <div class="header__div">
        <p class="title__header">FashionablyLate</p>
        <a class="login__button" href="/login">login</a>
    </div>
</header>
@section('content')
<p class="title">Register</p>
<form class="register__form" action="/register" method="POST">
    @csrf
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    <div class="form__div">
        <dl>
            <dt class="name__dt">お名前</dt>
            <dd><input type="text" name="name" placeholder="例：山田　太郎" value="{{old("name")}}"></dd>
            <dt class="email__dt">メールアドレス</dt>
            <dd><input type="text" name="email" placeholder="例：test@example.com" value="{{old("email")}}"></dd>
            <dt class="password__dt">パスワード</dt>
            <dd><input type="text" name="password" placeholder="例：coachtech1106"></dd>
        </dl>
    </div>
    <button class="register__button">登録</button>
</form>
