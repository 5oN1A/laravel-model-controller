<div class="card p-5 my-5">
    <h2 class="title pb-3 text-center">{{ $movie['title'] }}</h2>
    <h5><strong>Original Title: </strong>{{ $movie['original_title'] }}</h5>
    <p><strong>Nationality: </strong>{{ $movie['nationality'] }}</p>
    <p><strong>Release date: </strong>{{ date('d/m/Y', strtotime($movie['date'])) }}</p>
    <p><strong>Vote: </strong>{{ $movie['vote'] }}</p>
</div>