@if($debug == 'yes')
    @foreach($randomPhotos as $randomFour)
        @foreach($randomFour as $photo)
                {{ $photo['name'] }}
                {!! "<br>" !!}
                {{ $photo['file'] }}
                {!! "<br>" !!}
                {{ $photo['id'] }}
                {!! "<br>" !!}
                {!! "<br>" !!}
        @endforeach
    @endforeach
@endif