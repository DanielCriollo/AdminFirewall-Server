<!-- Modal -->

<div wire:ignore.self class="modal fade" id="editIpFw2Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

       <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Editar Ip Firewall 2</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">×</span>

                </button>

            </div>

            <div class="modal-body">

                <form>

                    <div class="form-group">

                        <input type="hidden" wire:model="ip_id">

                        <label for="exampleFormControlInput1">Dirección Ip FW2:</label>

                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Dirección Ip" wire:model="ip">

                        @error('ip') <span class="text-danger">{{ $message }}</span>@enderror

                    </div>

                </form>

            </div>

            <div class="modal-footer">

                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                <button type="button" wire:click.prevent="updateIp()" class="btn btn-primary" data-dismiss="modal">Modificar</button>

            </div>

       </div>

    </div>

</div>