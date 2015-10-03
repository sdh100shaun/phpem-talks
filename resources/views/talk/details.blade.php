@extends ('layouts.master')

@section('content')
    @if( ! $talk)
        <div class="center-block text-center">
            <h1>There are no future scheduled talks.</h1>
        </div>
    @else
        <div class="center-block text-center">
            <h4>The next Unconference talk is...</h4>
            <h1>{{ $talk->speaker }}</h1>
            <h2>{{ $talk->title }}</h2>

            <h4>{{ $talk->abstract }}</h4>
            <img src="../../images/phpnw15green.png" alt="" style="width: 100px; margin-top: 20px;"/>
        </div>
    @endif
@endsection