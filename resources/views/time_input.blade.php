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

  <form action="/home" method="POST">
  @csrf
    <input type="submit" name="working_start_time" value="勤務開始">
    <input type="submit" name="working_end_time" value="勤務終了">
    <input type="submit" name="breaking_start_time" value="休憩開始">
    <input type="submit" name="breaking_end_time" value="休憩終了">
  </form>

</body>