@extends('layout.app')

@section('content')

<div class="container">
    <div class="row">
        @forelse ($trains as $train)
        <div class="col">
            <div class="card">
                <div class="card-title">
                    <h3>{{$train->Azienda}}</h3>
                    <p>{{$train->Codice treno}}</p>
                </div>
                <div class="card-body">
                    <div class="table">
                        <thead>
                            <tr>
                                <th scope="col">Stazione di partenza</th>
                                <th scope="col">Orario di partenza</th>
                                <th scope="col">Stazione di arrivo</th>
                                <th scope="col">Orario di arrivo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$train->Stazione di partenza}}</td>
                                <td>{{$train->Orario di partenza}}</td>
                                <td>{{$train->Stazione di arrivo}}</td>
                                <td>{{$train->Orario di arrivo}}</td>
                            </tr>
                        </tbody>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <p>
              Sorry no trains info  
            </p>
            
        </div>
        @endforelse
        
    </div>
</div>

@endsection