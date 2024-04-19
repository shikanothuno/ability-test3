@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset("css/confirm.css")}}">
@endsection

@section('content')
<p class="title__header">FashionablyLate</p>
<h2 class="title">Confirm</h2>
<form action="/thanks" method="POST">
    @csrf
    <table>
        <tr>
            <th>お名前</th>
            <td>{{$data["name"]}}</td>
        </tr>
        <tr>
            <th>性別</th>
            <td>
                @if ($data["gender"]=="man")
                    男性
                @elseif($data["gender"]=="woman")
                    女性
                @else
                    その他
                @endif
            </td>
        </tr>
        <tr>
            <th></th>
            <td>{{$data["email"]}}</td>
        </tr>
        <tr>
            <th></th>
            <td>{{$data["tell"]}}</td>
        </tr>
        <tr>
            <th></th>
            <td>{{$data["address"]}}</td>
        </tr>
        <tr>
            <th></th>
            <td>{{$data["building"]}}</td>
        </tr>
        <tr>
            <th></th>
            <td>{{$data["category_id"]}}</td>
        </tr>
        <tr>
            <th></th>
            <td>{{$data["content"]}}</td>
        </tr>


    </table>
    <button>送信</button>
    <button>修正</button>

</form>
