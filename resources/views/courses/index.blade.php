<x-app-layout>

    <section class="bg-cover" style="background-image: url({{ asset('img/cursos/cursos-index.jpg') }})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Apparet statim, quae sint officia, quae actiones. </h1>
                <p class="text-white text-lg mt-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duo Reges: constructio interrete. Quis istud possit, inquit, negare? Sed quae tandem ista ratio est? De hominibus dici non necesse est.</p>

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

    @livewire('course-index')
    
</x-app-layout>