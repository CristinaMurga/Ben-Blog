<div class="p-5 container" >
    <h3>Elenco Utenti</h3>
    <table class="table table-sm table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <button class="btn btn-sm editBtn" wire:click="editUser({{ $user->id }})" >Modifica</button>
                    <button class="btn btn-sm removeBtn" wire:click="deleteUser({{ $user->id}})">Cancella</button>
                </td>
                
            </tr>

            @endforeach

        </tbody>
    </table>
</div>
