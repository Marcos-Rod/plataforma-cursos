<x-app-layout>

    <div class="container py-8 grid grid-cols-5">

        <aside>
            <h1 class="font-bold text-lg mb-4">Edicion de curso</h1>
            <ul class="text-sm text-gray-600">
                <li class="leading-7 mb-1 border-l-4 border-indigo-400 pl-2">
                    <a href="">Información del curso</a>
                </li>
                <li class="leading-7 mb-1 border-l-4 border-transparent pl-2">
                    <a href="">Lecciones del curso</a>
                </li>
                <li class="leading-7 mb-1 border-l-4 border-transparent pl-2">
                    <a href="">Metas del curso</a>
                </li>
                <li class="leading-7 mb-1 border-l-4 border-transparent pl-2">
                    <a href="">Estudiantes</a>
                </li>
            </ul>
        </aside>

        <div class="col-span-4 card ">
            <div class="card-body textgray-600">
                <h1 class="text-2xl fint-bold uppercase">Información del curso</h1>
                <hr class="mt-2 mb-6">

                {!! Form::model($course, ['route' => ['instructor.courses.update', $course], 'method' => 'put', 'files' => true]) !!}
                <div class="mb-4">
                    {!! Form::label('title', 'Titulo del curso') !!}
                    {!! Form::text('title', null, ['class' => 'form-input']) !!}
                </div>
                <div class="mb-4">
                    {!! Form::label('slug', 'Slug del curso') !!}
                    {!! Form::text('slug', null, ['class' => 'form-input']) !!}
                </div>

                <div class="mb-4">
                    {!! Form::label('subtitle', 'Subtitulo del curso') !!}
                    {!! Form::text('subtitle', null, ['class' => 'form-input']) !!}
                </div>

                <div class="mb-4">
                    {!! Form::label('description', 'Descripción del curso') !!}
                    {!! Form::textarea('description', null, ['class' => 'form-input']) !!}
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
                        <img class="w-full h-64 bg-cover bg-center" src="{{ $course->image->url }}" alt="" id="picture">
                    </figure>

                    <div>
                        <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quis eaque quibusdam sit optio numquam laboriosam molestiae, eveniet culpa, perspiciatis amet doloremque, illo commodi? Quidem iusto reprehenderit non perferendis omnis.</p>

                        {!! Form::file('file', ['class' => 'form-input', 'id' => 'file']) !!}
                    </div>
                </div>
                
                <div class="flex justify-end">
                    {!! Form::submit('Actualizar información', ['class' => 'btn btn-primary']) !!}
                </div>
                
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <x-slot name="js">
        <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
        <script>
            //Slug automático
            document.getElementById("title").addEventListener('keyup', slugChange);

            function slugChange() {

                title = document.getElementById("title").value;
                document.getElementById("slug").value = slug(title);

            }

            function slug(str) {
                var $slug = '';
                var trimmed = str.trim(str);
                $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
                replace(/-+/g, '-').
                replace(/^-|-$/g, '');
                return $slug.toLowerCase();
            }


            //CKEDITOR

            ClassicEditor
                .create(document.querySelector('#description'), {
                    toolbar: ['heading', '|', 'bold', 'italic', 'link', 'blockQuote'],
                    heading: {
                        options: [{
                                model: 'paragraph',
                                title: 'Paragraph',
                                class: 'ck-heading_paragraph'
                            },
                            {
                                model: 'heading1',
                                view: 'h1',
                                title: 'Heading 1',
                                class: 'ck-heading_heading1'
                            },
                            {
                                model: 'heading2',
                                view: 'h2',
                                title: 'Heading 2',
                                class: 'ck-heading_heading2'
                            }
                        ]
                    }
                })
                .catch(error => {
                    console.log(error);
                });

            //Cambiar imagen
            document.getElementById("file").addEventListener('change', cambiarImagen);

            function cambiarImagen(event) {
                var file = event.target.files[0];

                var reader = new FileReader();
                reader.onload = (event) => {
                    document.getElementById("picture").setAttribute('src', event.target.result);
                };

                reader.readAsDataURL(file);
            }
        </script>
    </x-slot>

</x-app-layout>