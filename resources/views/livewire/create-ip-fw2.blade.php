<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createIpFw2Modal">

Agregar
</button>


<!-- Modal -->

<div wire:ignore.self class="modal fade text-left" id="createIpFw2Modal" tabindex="-1" role="dialog" aria-labelledby="createIpFw2ModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="createIpFw2ModalLabel">Agregar Ip Firewall 2</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                     <span aria-hidden="true close-btn">×</span>

                </button>

            </div>

           <div class="modal-body">

                <form>

                    <div class="form-group">

                        <label for="exampleFormControlInput1">Dirección Ip FW2:</label>

                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Dirección Ip" wire:model="ip">

                        @error('ip') <span class="text-danger">{{ $message }}</span>@enderror

                    </div>

                </form>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Cancelar</button>

                <button type="button" wire:click.prevent="storeIp()" class="btn btn-primary close-modal">Guardar</button>

            </div>

        </div>

    </div>

</div>