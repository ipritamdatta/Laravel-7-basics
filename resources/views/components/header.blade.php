<div>
    <h1>This is header</h1>
    <h3>Hi {{$name}}</h3>
    @foreach($fruits as $fruit)
    <p>{{$fruit}}</p>
    @endforeach
</div>