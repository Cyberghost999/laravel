<div>
    <h1>This is a test header</h1>
    <h3>Hello {{$name}}</h3>
    <ul>
    @foreach ($fruits as $fruit)
        <li>{{$fruit}}</li>
    @endforeach
    </ul>
</div>