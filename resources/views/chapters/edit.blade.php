@extends('base')

@section('content')

    <div class="container small" ng-non-bindable>
        <h1>Edit Chapter</h1>
        <form action="{{$chapter->getUrl()}}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            @include('chapters/form', ['model' => $chapter])
        </form>
    </div>

@stop