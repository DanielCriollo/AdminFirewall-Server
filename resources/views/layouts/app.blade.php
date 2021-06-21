@extends('voyager::master')

<title>Admin | Firewall</title>

@livewireStyles

@section('page_header')
<div class="container-fluid">
</div>
@stop

@section('content')
<div class="page-content edit-add">
    {{$slot}}
</div>
@livewireScripts
@section('javascript')
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script type="text/javascript">

    window.livewire.on('ipStore', () => {

    $('#createIpFw2Modal').modal('hide');

    });


    window.livewire.on('alert', param => {
        toastr[param['type']](param['message']);
    });
</script>
@stop
@stop

