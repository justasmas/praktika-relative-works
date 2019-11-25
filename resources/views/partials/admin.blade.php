<section class="jumbotron">
    <h1 class="display-4 text-center text-uppercase p-3">
        Users:
    </h1>
    <ul class="list-group m-5">
        @foreach($data as $item)
            <li class="list-group-item m-2 bg-light">
                <a href="{{route('users.show', $item->id)}}"><h6 class="my-4 btn btn-lg btn-danger">{{$item->name}}</h6></a>
            </li>
        @endforeach
    </ul>
</section>
