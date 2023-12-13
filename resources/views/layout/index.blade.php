@extends('guest.app')

@section('content')
    
<section>
   <div class="container">
    <div class="row">
        @forelse ($trains as $train)
        <div class="col">
            <h1>{{ $train->company }}</h1>
        <h2>{{$train->departure_station}}</h2>
        <h3>{{ $train->arrival_station }}</h3>
        <h4>{{ $train->departure_time }}</h4>
        <h5>{{ $train->train_code }}</h5>
        <h6>{{ $train->price }}</h6>
        </div>
    @empty
        
    @endforelse
    </div>
   </div>
</section>
@endsection