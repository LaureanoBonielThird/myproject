@extends ('layout.app')

@section ('content')
            <h1> Services </h1>

            <u1 class = "list-group">
                @if(count($services)>0)
                @foreach($services as $services)
                <li class = "list-group-item">{{$services}}</li>
                @endforeach
            </u1>
            @endif
@endsection