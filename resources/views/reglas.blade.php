
@extends('voyager::master')
<title>Comandos Firewall</title>
@section('css')
    @include('voyager::compass.includes.styles')
@stop

@section('page_header')
<div class="container-fluid">
    <h1 class="page-title">
        <i class="voyager-people"></i>
            <p>
                Comandos Firewall
            </p>
        
    </h1>
</div>
@stop

@section('content')
<div class="page-content edit-add">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form autocomplete="off" class="form-edit-add" action="{{ route('comando.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="font-weight-bold">
                                    Comandos Terminal
                                </h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>
                                        <strong>Comando:</strong>
                                    </label>
                                        <textarea class="form-control" name="comando" id="comando" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex justify-content-center text-center">
                                    <button type="submit" class="btn btn-primary">Crear</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection