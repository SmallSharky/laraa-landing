@extends('layouts.ConfigLayout')
@section('scripts')
    <script src="{{asset('js/tinymce/tinymce.min.js')}}"></script>
    <script>
        tinymce.init({
            selector: '#editor'
        });
    </script>
@endsection

@section('content')

    <form method="POST" action="{{action('ArticlesController@update',['articles'=>$article->id])}}"
          enctype="multipart/form-data">
        <input type="hidden" name="_method" value="put">

        <div class="row">
            <div class="input-field col s12 m10 l10">
                <input name="title" type="text" id="title" value="{{$article->title}}">
                <label for="title">Название</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12 m10 l10">
                <textarea name="content" id="editor" class="materialize-textarea">
                    {{$article->content}}
                </textarea>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="input-field col s12 m6 l6">
                <select name="category_id" id="category_id">
                    <option value="" disabled selected>Категория</option>
                    @foreach($categories as $category)
                        @if($article->category_id==$category->id)
                            <option value="{{$category->id}}" selected>{{$category->title}}</option>
                        @else
                            <option value="{{$category->id}}">{{$category->title}}</option>
                        @endif
                    @endforeach
                </select>
                <label for="category_id">Категория</label>
            </div>
            <div class="col s12 m6 l6">
                <div class="switch">
                    <label>

                        <input type="checkbox" name="comments_enable">
                        <span class="lever"></span>
                        Комменты
                    </label>
                </div>
                <br>
                <div class="switch">
                    <label>

                        <input type="checkbox" name="public">
                        <span class="lever"></span>
                        Опубликовать
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m10 l9">
                <h5 class="thin">Тег meta</h5>
                <div class="input-field col l6 m6 s12">
                    <input id="meta_description" type="text" class="validate" name="meta_description">
                    <label for="meta_description">Пояснение</label>
                </div>
                <div class="input-field col l6 m6 s12">
                    <input id="meta_keywords" type="text" class="validate" name="meta_keywords">
                    <label for="meta_keywords">Ключевые слова</label>
                </div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <button class="btn waves-effect waves-light blue" type="submit">
                    <i class="material-icons right">cloud</i>
                    Сохранить
                </button>
            </div>
        </div>
    </form>
    @if(Session::has('message'))
        {{Session::get('message')}}
    @endif
@endsection