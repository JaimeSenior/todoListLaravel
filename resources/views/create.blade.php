@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Añadir Nota
                </div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ url('create') }}" method="POST">

                        @csrf

                        

                        <div class="form-group">
                            <label>Titulo</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" id="description" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" name="date" id="date" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>isComplete</label>
                            <input type="number" name="date" id="date" class="form-control">
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Añadir Nota
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


@stop
