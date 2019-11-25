@extends('layouts.app')

@section('content')
    <section class="container jumbotron jumbotron-fluid">
        <div class="m-5">
            <h2 class="m-2">Create task for user: {{$user->name}})</h2>
            <form method="post" class="form-group" action="{{route('users.store')}}">
                @csrf
                <input name="name" type="text" class="form-control m-2" placeholder="Task"/>
                <input name="id" type="hidden"  value="{{$user->id}}"/>
                <input type="submit" class="btn btn-primary m-2" value="Proceed"/>
            </form>
        </div>
    </section>
@endsection
