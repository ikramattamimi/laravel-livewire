<div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">Login</h5>

            <form wire:submit='login'>
                <div class="mb-4">
                    <label for="email">Email</label>
                    <input class="form-control" id="email" type="text" wire:model='form.email'
                        placeholder="Enter email">

                    @error('form.email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password">Password</label>
                    <input class="form-control" id="password" type="password" wire:model='form.password'
                        placeholder="Enter password">

                    @error('form.password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button class="btn btn-primary" type="submit">Login</button>
            </form>
        </div>
    </div>

</div>
