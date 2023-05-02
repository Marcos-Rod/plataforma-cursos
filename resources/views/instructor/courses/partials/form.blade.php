<div class="mb-4">
    {!! Form::label('title', 'Titulo del curso') !!}
    {!! Form::text('title', null, ['class' => 'form-input' . ($errors->has('title') ? ' border-red-600' : '')]) !!}
    @error('title')
    <strong class="text-xs text-red-600">{{ $message }}</strong>
    @enderror
</div>
<div class="mb-4">
    {!! Form::label('slug', 'Slug del curso') !!}
    {!! Form::text('slug', null, ['readonly' => 'readonly', 'class' => 'form-input' . ($errors->has('slug') ? '
    border-red-600' : '')]) !!}

    @error('slug')
    <strong class="text-xs text-red-600">{{ $message }}</strong>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('subtitle', 'Subtitulo del curso') !!}
    {!! Form::text('subtitle', null, ['class' => 'form-input' . ($errors->has('subtitle') ? ' border-red-600' : '')])
    !!}

    @error('subtitle')
    <strong class="text-xs text-red-600">{{ $message }}</strong>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('description', 'Descripción del curso') !!}
    {!! Form::textarea('description', null, ['class' => 'form-input' . ($errors->has('description') ? ' border-red-600'
    : '')]) !!}

    @error('description')
    <strong class="text-xs text-red-600">{{ $message }}</strong>
    @enderror
</div>

<div class="grid grid-cols-3 gap-4">
    <div>
        {!! Form::label('category_id', 'Categoría:') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-input']) !!}
    </div>

    <div>
        {!! Form::label('level_id', 'Nivel:') !!}
        {!! Form::select('level_id', $levels, null, ['class' => 'form-input']) !!}
    </div>
    <div>
        {!! Form::label('price_id', 'Precio:') !!}
        {!! Form::select('price_id', $prices, null, ['class' => 'form-input']) !!}
    </div>
</div>

<h5 class="text-2xl font-bold mt-8 mb-2">Imagen destacada</h5>

<div class="grid grid-cols-2 gap-4">
    <figure>
        @isset($course->image)
        <img class="w-full h-64 object-cover object-center" src="{{ Storage::url($course->image->url) }}" alt=""
            id="picture">
        @else
        <img class="w-full h-64 object-cover object-center"
            src="https://www.vivicetona.it/wp-content/uploads/2017/05/noImg_2-1.jpg" id="picture" alt="">
        @endisset
    </figure>

    <div>
        <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quis eaque quibusdam sit
            optio numquam laboriosam molestiae, eveniet culpa, perspiciatis amet doloremque, illo commodi? Quidem iusto
            reprehenderit non perferendis omnis.</p>

        {!! Form::file('file', ['class' => 'form-input' . ($errors->has('description') ? ' border-red-600'
        : ''), 'id' => 'file', 'accept' => 'image/*']) !!}

        @error('file')
            <strong class="text-xs text-red-600">{{ $message }}</strong>
        @enderror
    </div>
</div>