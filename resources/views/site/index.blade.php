@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col m8 l8 s12 offset-l2 offset-m2">
            <?php $i = 0; ?>
            @foreach($articles as $article)
                @if($i>0)
                        <div class="divider"></div>
                @endif
                <?php $i++; ?>

                <div class="row">
                    <div class="col m3 s4 l2">
                        <i class="large material-icons">broken_image</i>
                    </div>
                    <div class="col s8 m9 l10">
                        <h4 class="thin" style="font-size: 25pt; ">
                            <a href="{{action('FrontController@show',['id'=>$article->id])}}">
                                {{$article->title}}
                            </a>
                        </h4>

                        <p>
                            <?php /*echo str_limit($article->content,150); */?>
                        </p>


                        <small>Дата создания: {{$article->updated_at}}</small>
                    </div>
                </div>


            @endforeach

        </div>
    </div>
@endsection
