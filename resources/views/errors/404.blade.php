@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <nav class="panel panel-default">
            <div class="text-center">
              <p>お探しのページは見つかりません</p>
              <a href="{{ route('home') }}" class="btn">
                ホームへ戻る
              </a>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
@endsection