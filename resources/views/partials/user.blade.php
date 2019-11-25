<section class="jumbotron jumbotron-fluid">
    <h1 class="text-center text-uppercase ">
        Your tasks
    </h1>
    <ul class="list-group m-5">
        @foreach($data->tasks as $task)
            <li class="list-group-item card-deck m-3 bg-light">
                <div class="list-group-item">
                    <h5>{{$task->name}}</h5>
                </div>
                <form class="list-group-item" method="post" action="{{route('tasks.update', [$task->id])}}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="status" value="{{$task->is_completed ? 0: 1}}"/>
                    <input type="submit" value="" class="checkbox checkbox-state-{{$task->is_completed}}"/>
                </form>
            </li>
        @endforeach

    </ul>
</section>
