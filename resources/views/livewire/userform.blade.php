<div class="p-5 coloredContainer rounded h-100">
    @if($user->id)
    <h3>Modifica utente</h3>
    <button class="btn btn-sm btn-secondary" wire:click="newUser">Nuovo utente</button>
    @else
    <h3>Crea utente</h3>
    @endif
   
    <x-form-success-message/>
    <form wire:submit.prevent ="store">  
        <div class="row g-1">
            <div class="col-12">
                <label for="name">Nome</label>
                <input type="text" class="form-control" wire:model="user.name">
                @error('user.name') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <label for="email">Email</label>
                <input type="text" class="form-control" wire:model="user.email">
                @error('user.email') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <label for="password">Password</label>
                <input type="password" class="form-control" wire:model="password">
                @error('password') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn submitBtn">Salva</button>
            </div>
        </div>

    </form>
</div>
