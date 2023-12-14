@extends('guest.app')

@section('content')
    
<section>
   <div class="container">
        <div class="row">
            <table class="table table-primary table-hover">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Company</th>
                        <th scope="col">Departure Station</th>
                        <th scope="col">Arrival Station</th>
                        <th scope="col">Departure Date/Time</th>
                        <th scope="col">Arrival Date/Time</th>
                        <th scope="col">Train Code</th>
                        <th scope="col">Price</th>
                        <th scope="col">In time</th>
                        <th scope="col">Canceled</th>
                    </tr>
                    </thead>
                @forelse ($trains as $train)
                    <tbody>
                    <tr>
                        <th scope="row"></th>
                        <td>{{ $train->company }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $train->departure_time }}</td>
                        <td>{{ $train->arrival_time }}</td>
                        <td>{{ $train->train_code }}</td>
                        <td>&euro; {{ $train->price }}</td>
                        <td>{{ $train->in_time ? 'true' : 'false' }}</td>
                        <td>{{ $train->canceled ? 'true' : 'false' }}</td>
                    </tr>
                @empty
                    non ci sono risultati
                @endforelse
                    </tbody>
            </table>
        </div>
    </div>
</section>
@endsection