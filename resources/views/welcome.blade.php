@extends('layouts.top')

@section('content')
    @if(Auth::check())
    {{ Auth::user()->name }}
    
            <div class="col-sm-8">
                {{-- タスク一覧 --}}
                @include('tasks.index')
            </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcom to the tasklist</h1>
                {!! link_to_route('signup.get','Sign up now!',[],['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection