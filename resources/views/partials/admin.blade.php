<section class="jumbotron jumbotron-fluid">
    <h1 class=" text-center text-uppercase p-3">
        Users:
    </h1>
    <ul class="list-group m-5">
        @foreach($data as $item)
            <li class="list-group-item m-2 bg-light">
                <a href="{{route('users.show', $item->id)}}"><h5>{{$item->name}}</h5></a>
            </li>
        @endforeach
    </ul>
</section>
