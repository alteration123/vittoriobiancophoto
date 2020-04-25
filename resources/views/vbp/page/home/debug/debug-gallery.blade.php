@if($debug == 'yes')
    @foreach($galleriesJson as $gallery)
        {{ $gallery['name'] }}
        {!! "<br>" !!}
        {{ $gallery['file'] }}
        {!! "<br>" !!}
        {{ $gallery['active'] }}
        {!! "<br>" !!}
        {{ $gallery['classy'] }}
        {!! "<br>" !!}
        @foreach($gallery['photos'] as $photo)
            {{ $photo['file'] }}
            {!! "<br>" !!}
        @endforeach
        {!! "<br>" !!}
    @endforeach
@endif