@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset("css/admin.css")}}">
@endsection

@section('content')
<p class="title__header">FashionablyLate</p>
<p class="title">Admin</p>
<form class="admin__form" action="/admin">
    <div class="search__div">
        <input class="search__input" type="text" placeholder="名前やメールアドレスを入力してください">
        <select class="gender__select" name="gender" >
            <option value="" selected>性別</option>
            <option value="man">男性</option>
            <option value="woman">女性</option>
            <option value="othor">その他</option>
        </select>
        <select class="category__select" name="category" >
            <option value="" selected>お問い合わせの種類</option>
            @foreach ($categories as $category)
                <option value="">{{$category->content}}</option>
            @endforeach
        </select>
        <input class="date__input" type="date">
        <button class="search__button">検索</button>
        <button class="reset__button">リセット</button>
    </div>
    <div class="export__div">
        <button class="export__button">エクスポート</button>
    </div>
    <div class="form__div">
        <table>
            <tr class="list-header">
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>お問い合わせの種類</th>
                <th></th>
            </tr>
            @foreach ($contacts as $contact)
            <tr>
                <th>{{$contact->first_name . $contact->last_name}}</th>
                <th>
                    @if ($contact->gender==1)
                        男性
                    @elseif($contact->gender==2)
                        女性
                    @else
                        その他
                    @endif
                </th>
                <th>{{$contact->email}}</th>
                <th>{{$contact->category_id}}</th>
                <th><button class="deteil__button">詳細</button></th>
            </tr>
            @endforeach

        </table>

    </div>
</form>
