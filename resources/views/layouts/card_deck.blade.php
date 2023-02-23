@php
$comics = config('comics')
@endphp


@section('content')
<div class="top-main-wrapper">
    <a href="#">Current Siries</a>
    <div class="container">
        @foreach ($comics as $comic)
        <div class="card">
            <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
            <p>{{ $comic['series'] }}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection