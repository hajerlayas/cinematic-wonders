@foreach ($movies as $movie)

<p>
{{ $movie->name }}
<img height="200" src="{{ url('storage/' . $movie->img) }}">
<a href="{{ url("movies/{$movie->id}/times/create") }}">Add Time</a>
</p>

@endforeach