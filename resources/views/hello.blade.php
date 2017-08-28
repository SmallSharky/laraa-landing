@extends('layouts.main')

@section('header')

    <div class="title">Hello {{$name}}, welcome to Laraland! : )</div>

@endsection

@section('styles')
    <link href="{{ asset('css/uInfTab.css') }}" rel="stylesheet">
@endsection

@section('scripts')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
@endsection

@section('content')

    Приветствую вас на моем крутом блоге

@endsection

@section('footer')

    @if(isset($copyright))
        <div class="content modal-footer" id="footer">Copyright: {{$copyright}}</div>
    @endif

@endsection
