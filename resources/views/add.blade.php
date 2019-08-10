@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar animes</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('anime.store') }}">
                        @csrf
                            <div class="form-group">
                                <label for="addanimeform">Nome do anime</label>
                                <input type="text" name="anime" class="form-control" id="addanimeform">
                            </div>
                              <button type="submit">Salvar anime</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
