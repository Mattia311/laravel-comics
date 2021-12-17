@extends('layout.app')




@section('content')

<div class="container">
    <div class="row">

        @foreach($comics as $comic)
        <div class="card mt-3">
            <ul>
                <li>{{$comic['title']}}</li>
                <p>{{$comic['description']}}</p>
            </ul>
        </div>
        @endforeach
    </div>
</div>

@endsection