<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="font-weight-bold">
                                            Interfaz De Comandos Firewall 1
                                        </h4>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>
                                                <strong>Comando:</strong>
                                            </label>
                                                <input type="text" class="form-control" wire:model="comando">

                                        </div>
                                    </div>
                                </div>

                                <div class="row text-right">
                                    <div class="col-lg-12">
                                        <button type="button" wire:click.prevent="resetInput" class="btn btn-primary"><i class="voyager-brush"></i>Limpiar</button>
                                        <button type="button" wire:click.prevent="store" class="btn btn-success"><i class="voyager-terminal"></i> Ejecutar</button>  
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>
                                    <strong>Salida:</strong>
                                </label>
                                    <textarea disabled class="form-control" wire:model="salida" rows="20"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
