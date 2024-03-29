<x-app-layout>

    <section class="bg-cover" style="background-image: url('{{ asset('img/cursos/cursos-index.jpg') }}')">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Apparet statim, quae sint officia, quae actiones. </h1>
                <p class="text-white text-lg mt-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duo Reges: constructio interrete. Quis istud possit, inquit, negare? Sed quae tandem ista ratio est? De hominibus dici non necesse est.</p>

                @livewire('search')

            </div>
        </div>
    </section>

    @livewire('courses-index')
    
</x-app-layout>