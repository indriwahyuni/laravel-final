@extends('template.index')
@section('content')

    <div class="section">
        <div class="card-panel purple darken-3 white-text">Tutorial CRUD Laravel 5.2 dengan Materializecss</div>
    </div>

    <div class="section">

        @foreach($artikel as $art)
            <div class="row">
                <div class="col s12">
                    <h5>{{ $art->judul_artikel }}</h5>

                    <div class="divider"></div>
                    <p>{{ $art->isi_artikel }}</p>

                    <button class="btn btn-flat pink accent-3 waves-effect waves-light white-text">Readmore <i
                                class="material-icons right">send</i></button>
                    <button class="btn btn-flat purple darken-4 waves-effect waves-light white-text">Edit <i
                                class="material-icons right">mode_edit</i></button>
                    <button class="btn btn-flat red darken-4 waves-effect waves-light white-text">Delete <i
                                class="material-icons right">delete</i></button>
                </div>
            </div>
        @endforeach

    </div>


    <div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large red">
            <i class="large material-icons">add</i>
        </a>
    </div>


@endsection