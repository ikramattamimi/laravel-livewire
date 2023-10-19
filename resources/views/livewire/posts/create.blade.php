<div>
    @include('flash::message')

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Add Post</h5>

            <form wire:submit='save'>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input wire:model="form.title" type="text" name="title" id="title"
                        class="form-control" placeholder="Add title">

                    @error('form.title')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    <input wire:model="form.body" type="text" name="body" id="body"
                        class="form-control" placeholder="Add body">

                    @error('form.body')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
