
<div wire:ignore.self id="edit-item-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">
                   Editing Brand
                </h2>
            </div>
            <form wire:submit.prevent="UpdateBrandData">
                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                    @csrf
                    <div class="col-span-12">
                        <label for="pos-form-1" class="form-label">Name</label>
                        <input type="text" id="title" wire:model.lazy="name" class="form-control flex-1 @error('name') border-danger @enderror" placeholder="Brand Name" >
                        <div class="text-danger mt-2">@error('name'){{$message}}@enderror</div>
                    </div>
                </div>
                <div class="modal-footer text-right">
                    <button wire:click="closeEditModal" type="button" class="btn btn-outline-secondary w-32 mr-1">Cancel</button>
                    <input type="submit" class="btn btn-primary w-32" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>





