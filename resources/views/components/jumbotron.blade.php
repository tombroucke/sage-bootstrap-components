<div class="jumbotron {{ $class ?? '' }} {{ $fullwidth ? 'jumbotron-fluid' : '' }} ">
    @if($fullwidth, '<div class="container">')

    @isset($heading)
        <h1 class="display-3">{!! $heading !!}</h1>
    @endisset

    {{ $slot }}

    @endif($fullwidth, '</div>')
</div>
