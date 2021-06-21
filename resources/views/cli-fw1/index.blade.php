@extends('voyager::master')

<title>Admin | Firewall</title>

@livewireStyles

@section('page_header')
<div class="container-fluid">
    <h1 class="page-title">
        <i class="voyager-terminal"></i>
        <p>CLI Firewall 1</p>
    </h1>
</div>
@stop

@section('content')
    @livewire('cli-f-w1-component')
    @livewireScripts
@stop

