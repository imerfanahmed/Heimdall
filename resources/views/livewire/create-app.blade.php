<div class="">
    <form class="mx-3 my-4" wire:submit="saveApp">
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">App Name</label>
                <input wire:model="appName" type="text" class="form-control" name="example-text-input" placeholder="any-name">
            </div>
            <div>
                @error('appName') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div  class="modal-footer">
            <a wire:click="$dispatch('modal.close')" class="btn me-auto">Close</a>
            <button type="submit" class="btn btn-primary">Create App</button>
        </div>

    </form>
</div>
