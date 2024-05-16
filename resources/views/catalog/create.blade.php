@extends('layouts.master')

@section('content')
    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Afegir pel·lícula
                </div>
                <div class="card-body" style="padding:30px">

                    <form method="POST" action="/catalog/create">

                        @csrf
                        <div class="form-group">
                            <label for="titol">Títol</label>
                            <input type="text" name="titol" id="titol" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="any">Any</label>
                            <input type="text" name="any" id="any" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="director">Director</label>
                            <input type="text" name="director" id="director" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="poster">Poster</label>
                            <input type="text" name="poster" id="poster" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="resum">Resum</label>
                            <textarea name="resum" id="resum" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Afegir pel·lícula
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
