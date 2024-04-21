@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset("css/index.css")}}">
@endsection

@section('content')
<p class="title__header">FashionablyLate</p>
<p class="title">Contact</p>
<form class="contact__form" action="/confirm" method="POST">
    @csrf
    <div class="form__div">
        <dl>
            <dt class="name__dt">お名前<span class="red">※</span></dt>
            <dd>
                <div class="name__div">
                    <input class="name__input" type="text" name="first_name" placeholder="例：山田">
                    <input class="name__input last-name__input" type="text" name="last_name" placeholder="例：太郎">
                </div>
            </dd>
            <dt class="">性別<span class="red">※</span></dt>
            <dd>
                <div class="">
                    <input class="radio-button" type="radio" name="gender" value="man">
                    <label for="man">男性</label>
                    <input class="radio-button" type="radio" name="gender" value="woman">
                    <label for="woman">女性</label>
                    <input class="radio-button" type="radio" name="gender" value="othor">
                    <label for="othor">その他</label>
                </div>
            </dd>
            <dt class="">メールアドレス<span class="red">※</span></dt>
            <dd><input class="email__input" type="email" name="email" placeholder="例：test@example.com"></dd>
            <dt class="">電話番号<span class="red">※</span></dt>
            <dd>
                <div class="tel__div">
                    <input class="tel__input" type="text" name="tel_up" inputmode="numeric" placeholder="080">
                    <div class="tel-child__div">-</div>
                    <input class="tel__input" type="text" name="tel_middle" inputmode="numeric" placeholder="1234">
                    <div class="tel-child__div">-</div>
                    <input class="tel__input" type="text" name="tel_down" inputmode="numeric" placeholder="5678">
                </div>
            </dd>
            <dt class="">住所<span class="red">※</span></dt>
            <dd><input class="address__input" type="text" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3"></dd>
            <dt class="">建物名</dt>
            <dd><input class="building__input" type="text" name="building" placeholder="例：千駄ヶ谷マンション101"></dd>
            <dt class="">お問い合わせの種類<span class="red">※</span></dt>
            <dd>
                <select name="category_id" id="">
                    <option value="" selected>選択してください</option>
                    @foreach ($categories as $category)
                        <option value="{{$loop->iteration}}">{{$category->content}}</option>
                    @endforeach
                </select>
            </dd>
            <dt class="">お問い合わせ内容<span class="red">※</span></dt>
            <dd><textarea name="content" id="" cols="30" rows="10" placeholder="お問い合わせ内容を記述ください"></textarea></dd>
        </dl>
    </div>
    <button>確認画面</button>

</form>
@endsection
