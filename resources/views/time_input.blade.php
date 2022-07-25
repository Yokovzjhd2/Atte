@extends('layouts.')

@section('content')
@if(Auth::check())
<p>ログイン中ユーザー:{{$users->name}}|<a href="/auth">ログアウト</a></p>
@endif

@endsection