@extends('layouts.')

@section('content')
<div>
  <h1>Atte</h1>
  <div>
    <p>ホーム</p>
    <p>日付一覧</p>
    <p>ログアウト</p>
  </div>
</div>


<div>
  <!-- <div>{{日にち}}</div> -->
  <table>
    <thead>
      <tr>
        <th>名前</th>
        <th>勤務開始</th>
        <th>勤務終了</th>
        <th>休憩開始</th>
        <th>休憩終了</th>
      </tr>
    </thead>
    <tbody>
      @foreach($items as $item)
      <tr>
        <td>{{$item->user}}</td>
        <td>{{$item->working_start_time}}</td>
        <td>{{$itrm->working_end_time}}</td>
        <td>{{$item->breaking_start_time}}</td>
        <td>{{$item->breaking_end_time}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection

<footer></footer>