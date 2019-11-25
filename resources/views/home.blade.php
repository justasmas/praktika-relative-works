@extends('layouts.app')

@section('content')
<div class="container">
    @if(auth()->user()->role_id === 1)
        @include('partials.admin')
    @else
        @include( 'partials.user')
    @endif
</div>
@endsection
