

@foreach ($movies as $movie)
<li><h1>{{ $movie['title']}}</h1>
    <h3>{{ $movie['original_title']}}</h3>
    <p>{{ $movie['nationality']}}</p>
    <p>{{ date('d/m/Y', strtotime($movie['date'])) }}</p>
    <p>{{ $movie['vote']}}</p>
</li>
@endforeach
