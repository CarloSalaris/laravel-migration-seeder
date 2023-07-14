@extends('layouts.main-layout')

@section('content')
    <div class="container">

        <div class="row">

            @foreach ($trains as $train)
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 g-3">

                    <div class="card p-3">
                        <p> {{ $train->azienda }} </p>
                        <p> {{ $train->codice }} </p>
                        <p> <b>Stazione di partenza:</b></p>
                        <p>{{ $train->stazione_partenza }} ( {{ $train->orario_partenza }} ) </p>
                        <p> <b>Stazione di arrivo:</b></p>
                        <p>{{ $train->stazione_arrivo }} ( {{ $train->orario_arrivo }} ) </p>
                    </div>

                </div>
            @endforeach

        </div>


    </div>
@endsection
