@extends('guest.app')

@section('content')
    
<section>
    @forelse ($trains as $train)
        <h1>{{ $train->company }}</h1>
    @empty
        
    @endforelse
</section>
@endsection