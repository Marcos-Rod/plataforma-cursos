<x-app-layout>

    <section class="bg-cover" style="background-image: url('{{asset('img/home/people.jpg')}}');">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Domina la tecnolog&iacute;a</h1>
                <p class="text-white text-lg mt-2 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Repudiandae
                    tenetur eaque id harum! Vitae repellendus tempore esse. Laborum quas sint delectus perferendis harum
                    cumque nesciunt veritatis porro, fugiat sunt qui.</p>

                <!-- component -->
                <!-- This is an example component -->
                <div class="pt-2 relative mx-auto text-gray-600">
                    <input class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none" type="search" name="search" placeholder="Search">

                    <button type="submit" class="border border-blue-500 bg-blue-500 text-white rounded-md px-4 py-2 h-10 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline absolute right-0 top-0 mt-2">
                        Buscar
                    </button>
                </div>

            </div>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/hd-wallpaper-g95caa36df_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Si longus, levis</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam velit
                    vero necessitatibus eveniet.</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/path-gf7e49987e_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Lorem ipsum</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam velit
                    vero necessitatibus eveniet.</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/spider-web-g1e53bf601_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Quod autem magnum</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam velit
                    vero necessitatibus eveniet.</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/sugarloaf-rock-g898a97d6c_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Addidisti ad extremum</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam velit
                    vero necessitatibus eveniet.</p>
            </article>
        </div>
    </section>

    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">Lorem ipsum dolor sit amet consectetur.</h1>
        <p class="text-center text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <div class="flex justify-center mt-4">
            <a href="{{route('courses.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Cat&aacute;logo de cursos
            </a>
        </div>
    </section>

    <section class="py-24">
        <h1 class="text-center text-gray-600 text-3xl uppercase">&Uacute;ltimos cursos</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($courses as $course)
                <article class="bg-white shadow-lg rounded overflow-hidden">
                    <img class="h-36 w-full object-cover object-center" src="{{$course->image->url}}" alt="">
                    <div class="px-6 py-4">
                        <h2 class="text-xl text-gray-700 mb-2 leading-6">{{Str::limit($course->title, 40)}}</h2>
                        <p class="text-gray-500 text-sm mb-2">Prof: {{$course->teacher->name}}</p>
                        <div class="flex">
                            <ul class="flex text-sm">
                                <li class="mr-1"><i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i></li>
                                <li class="mr-1"><i class="fas fa-star text-{{$course->rating >= 2 ? 'yellow' : 'gray'}}-400"></i></li>
                                <li class="mr-1"><i class="fas fa-star text-{{$course->rating >= 3 ? 'yellow' : 'gray'}}-400"></i></li>
                                <li class="mr-1"><i class="fas fa-star text-{{$course->rating >= 4 ? 'yellow' : 'gray'}}-400"></i></li>
                                <li class="mr-1"><i class="fas fa-star text-{{$course->rating >= 5 ? 'yellow' : 'gray'}}-400"></i></li>
                            </ul>

                            <p class="text-sm text-gray-500 ml-auto"><i class="fas fa-users"></i>({{$course->students_count}})</p>
                        </div>
                        <a href="{{route('courses.show', $course)}}" class="block text-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full mt-4">
                           M&aacute;s informaci&oacute;n
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

</x-app-layout>