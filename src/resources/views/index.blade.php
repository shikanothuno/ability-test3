@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset("css/index.css")}}">
@endsection

@section('content')
<p class="title__header">FashionablyLate</p>
<h2 class="title">Contact</h2>
<form class="contact__form" action="/confirm" method="POST">
    @csrf
    <div class="form__div">
        <dl>
            <dt class="name__dt">お名前<span class="red">※</span></dt>
            <dd>
                <div class="name__div">
                    <input type="text" name="first_name" placeholder="例：山田">
                    <input type="text" name="last_name" placeholder="例：太郎">
                </div>
            </dd>
            <dt class="">性別</dt>
            <dd>
                <div class="">
                    <input type="radio" name="gender" value="man">
                    <label for="man">男性</label>
                    <input type="radio" name="gender" value="woman">
                    <label for="woman">女性</label>
                    <input type="radio" name="gender" value="othor">
                    <label for="othor">その他</label>
                </div>
            </dd>
            <dt class="">メールアドレス</dt>
            <dd><input type="email" name="email" placeholder="例：test@example.com"></dd>
            <dt class="">電話番号</dt>
            <dd>
                <div class="">
                    <input type="text" name="tel_up" inputmode="numeric" placeholder="080">
                    <div>-</div>
                    <input type="text" name="tel_middle" inputmode="numeric" placeholder="1234">
                    <div>-</div>
                    <input type="text" name="tel_down" inputmode="numeric" placeholder="5678">
                </div>
            </dd>
            <dt class="">住所</dt>
            <dd><input type="text" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3"></dd>
            <dt class="">建物名</dt>
            <dd><input type="text" name="building" placeholder="例：千駄ヶ谷マンション101"></dd>
            <dt class="">お問い合わせの種類</dt>
            <dd>
                <select name="category_id" id="">
                    <option value="" selected>選択してください</option>
                    @foreach ($categories as $category)
                        <option value="{{$loop->iteration}}">{{$category->content}}</option>
                    @endforeach
                </select>
            </dd>
            <dt class="">お問い合わせ内容</dt>
            <dd><textarea name="content" id="" cols="30" rows="10" placeholder="お問い合わせ内容を記述ください"></textarea></dd>
        </dl>
    </div>
    <button>確認画面</button>

</form>
@endsection
