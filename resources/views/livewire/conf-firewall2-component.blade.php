<div>
    <div>
        @include('livewire.edit-ip-fw2')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-lg-6">

                                <div class="row text-center">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th class="text-center" colspan="2">
                                                    <h4><span style="font-weight: bold"> Dirección IP:</span></h4>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if ($ipe == '')
                                                <tr>
                                                    <td class="text-center" colspan="2">
                                                        <h5>Aún no ingresada.</h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        @include('livewire.create-ip-fw2')
                                                    </td>
                                                </tr>
                                            @else
                                                <tr>
                                                    <td class="text-center">
                                                        {{$ipe->ip}}
                                                    </td>
                                                    <td class="text-center">
                                                        <button data-toggle="modal" data-target="#editIpFw2Modal" wire:click="editIp({{ $ipe->id }})"  class="btn btn-warning"><i class="voyager-edit"></i></button>
                                                    </td>
                                                </tr>
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
