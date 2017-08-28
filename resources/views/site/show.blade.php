@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col m8 l8 s12 offset-l2 offset-m2">
            <h2>{{$article->title}}</h2>
            <small>Дата создания: {{$article->updated_at}}</small>
            <div style="font-family: Roboto condensed light">
                <?php echo $article->content; ?>
            </div>
        </div>
    </div>
@endsection