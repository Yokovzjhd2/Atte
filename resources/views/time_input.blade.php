<!DOCTYPE html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <div>
    <h1>Atte</h1>
    <div>
      <p>ホーム</p>
      <p>日付一覧</p>
      <p>ログアウト</p>
    </div>
  </div>

  @if(Auth::check())
  <p>{{$users->name}}さんお疲れ様です！</p>
  @endif

  <form action="/working_start" method="POST">
    @csrf
    <input type="submit" name="working_start_time" value="勤務開始">
  </form>
  <form action="/working_end" method="POST">
    <input type="submit" name="working_end_time" value="勤務終了">
  </form>
  <form action="/breaking_start" method="POST">
    <input type="submit" name="breaking_start_time" value="休憩開始">
  </form>
  <form action="/beaking_end" method="POST">
    <input type="submit" name="breaking_end_time" value="休憩終了">
  </form>


</body>