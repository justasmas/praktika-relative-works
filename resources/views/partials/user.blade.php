<section class="jumbotron">
    <h5 class=" text-center text-uppercase ">
        TODO
    </h5>
    <ul class="list-group m-5">
        @foreach($data->tasks as $task)
            <li class="btn btn-lg btn-warning list-group-item card-deck m-3 bg-light">
                <div class=" lead list-group-item">
                    <h4>{{$task->name}}</h4>
                </div>
                <form class="list-group-item" method="post" action="{{route('tasks.update', [$task->id])}}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="status" value="{{$task->is_completed ? 0: 1}}"/>
                    <input type="submit" value="" class=" checkbox checkbox-state-{{$task->is_completed}}"/>
                </form>
            </li>
        @endforeach

    </ul>
</section>
