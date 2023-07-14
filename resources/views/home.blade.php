@extends('layout.main-layout')

@section('pageName')

    home

@endsection

@section('content')

    <main class="py-5">
        <ol>
            @foreach ($trains as $train)
            <div class="border border-black rounded mb-3">
                <div class="border rounded mb-3 bg-primary p-2 text-light text-center">
                    {{ $train -> azienda }}
                </div>
                <div class="mx-5">
                    Code Train: {{ $train -> codice_treno }}, carrozza n° {{$train -> numero_carrozze}}
                </div>
                <div class="d-flex mx-5">
                    <div class="m-3">
                        <div>
                            <span class="fw-bold">
                                Stazione di partenza:
                            </span>
                            <span>
                                {{ $train -> stazione_di_partenza }}
                            </span>
                        </div>
                        <div>
                            <span class="fw-bold">
                                Orario di partenza:
                            </span>
                            <span>
                                {{ $train -> orario_di_partenza }}
                            </span>
                        </div>                      
                    </div>

                    <div class="m-3">
                        <div>
                            <span class="fw-bold">
                                Stazione di arrivo:
                            </span>
                            <span>
                                {{ $train -> stazione_di_arrivo }}
                            </span>
                        </div>
                        <div>
                            <span class="fw-bold">
                                Orario di arrivo:
                            </span>
                            <span>
                                {{ $train -> orario_di_arrivo }}
                            </span>
                        </div>                      
                    </div>
                </div>
            </div>
            @endforeach
    </main>

@endsection

{{-- azienda
stazione di partenza
stazione di arrivo
orario di partenza
orario di arrivo
codice treno
numero carrozze
in orario
cancellato --}}