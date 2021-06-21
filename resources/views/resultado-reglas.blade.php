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

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>
                                    Reglas 
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($reglas as $regla)
                                <tr>
                                    <td>{{$regla}}</td>
                                </tr>
                                @endforeach     
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop