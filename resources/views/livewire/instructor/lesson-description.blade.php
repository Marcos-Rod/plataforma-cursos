<div>
    <article class="card" x-data="{open: false}">
        <div class="card-body bg-gray-100">
            <header>
                <h1 x-on:click="open = !open">Descripción de la lección</h1>
            </header>

            <div x-show="open">
                <hr class="my-2">

                @if ($lesson->description)
                <form wire:submit.prevent="update">
                    <textarea class="form-input" wire:model="description.name"></textarea>
                    @error('description.name')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror

                    <div class="flex justify-end mt-4">
                        <button class="btn btn-danger text-sm" type="button" wire:click="destroy">Eliminar</button>
                        <button class="btn btn-primary text-sm ml-2" type="submit">Actualizar</button>
                    </div>
                </form>
                @else
                <div wire:submit.prevent="update">
                    <textarea class="form-input" wire:model="name" placeholder="Agrega una descripción de la lección"></textarea>
                    @error('name')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror

                    <div class="flex justify-end mt-4">
                        <button class="btn btn-primary text-sm ml-2" wire:click="store">Agregar</button>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </article>
</div>