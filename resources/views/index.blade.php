
@extends('layouts.main')

@section('title','Events')

@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Busque o evento</h1>
            <form action="">
                <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
            </form>
    </div>
   
    <div id="events-container" class="col-md-12">
        <h2>Próximos eventos</h2>
        <p class="subtitle">Veja os eventos dos próximos dias</p>
        
        <div id="cards-container" class="row">
            @foreach($events as $event)
                <div class="card col-md-3" id="img">
                    <img src="img/events/{{ $event->image }}" alt="{{ $event->title }}" >
                    <div class="card-boby">
                        <p class="card-date">{{ date('d/m/y', strtotime($event->date)) }}</p>
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-participants"> X participantes</p>
                        <a href="/events/{{ $event->id }}" class="btn btn-primary"> Saber mais </a>
                    </div>

                </div> 
            @endforeach
            @if(count($events) == 0)
                <p class="event">Não há eventos disponíveis</p>
            @endif
        </div>

    </div>

@endsection