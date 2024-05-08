@php

    $active = '';
    $activeSVG = '';
    $inactive =
        'inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group';
    $inactiveSVG =
        'w-4 h-4 me-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300';

@endphp


<div class="font-dmsans my-3 dark:text-white">
    <h4 class="font-bold text-xl lg:text-2xl text-violet-400">Daily.io Proyect</h4>
    <p class="dark:text-slate-400 text-xs lg:text-sm">Gestiona cualquier tipo de proyecto. Asigana responsabilidad,
        establece plazos y haz el seguirmiento a cada tarea de su proyecto</p>
    <div class="my-6 flex justify-between items-center">
        <h2 class="font-bold text-4xl md:text-5xl">{{ $title }}</h2>
        <div class="">

            @isset($namebtn)
                <button
                    class="dark:bg-violet-400 bg-violet-500 flex items-center text-white p-2 px-6 rounded-lg font-semibold text-base hover:bg-violet-600 transition duration-200" data-modal-target="{{ $idModal }}" data-modal-toggle="{{ $idModal }}">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span>Crear {{ $namebtn ?? 'Proyecto' }}</span>
                </button>
            @endisset

        </div>

    </div>
</div>
{{-- TABS --}}
<div class="border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">

        <x-nav.element name="BackLog" route="proyect.index" active="{{ request()->routeIs('proyect.index') }}">
            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" fill="currentColor"
                viewBox="0 0 24 24" class="w-4 h-4 me-2 ">
                <path
                    d="m19,1H5C2.243,1,0,3.243,0,6v12c0,2.757,2.243,5,5,5h14c2.757,0,5-2.243,5-5V6c0-2.757-2.243-5-5-5ZM6.5,18.5c-.828,0-1.5-.672-1.5-1.5s.672-1.5,1.5-1.5,1.5.672,1.5,1.5-.672,1.5-1.5,1.5Zm0-5c-.828,0-1.5-.672-1.5-1.5s.672-1.5,1.5-1.5,1.5.672,1.5,1.5-.672,1.5-1.5,1.5Zm0-5c-.828,0-1.5-.672-1.5-1.5s.672-1.5,1.5-1.5,1.5.672,1.5,1.5-.672,1.5-1.5,1.5Zm11.5,9.5h-7c-.552,0-1-.448-1-1s.448-1,1-1h7c.552,0,1,.448,1,1s-.448,1-1,1Zm0-5h-7c-.552,0-1-.448-1-1s.448-1,1-1h7c.552,0,1,.448,1,1s-.448,1-1,1Zm0-5h-7c-.552,0-1-.448-1-1s.448-1,1-1h7c.552,0,1,.448,1,1s-.448,1-1,1Z" />
            </svg>
        </x-nav.element>

        <x-nav.element name="Sprints" route="sprints.index" active="{{ request()->routeIs('sprints.index') }}">
            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24"
                class="w-4 h-4 me-2" fill="currentColor">
                <path
                    d="m22.037,9.004c-1.009-3.385-3.656-6.032-7.041-7.041-.02-1.086-.906-1.963-1.996-1.963h-2c-1.09,0-1.976.877-1.996,1.963-3.385,1.009-6.032,3.656-7.041,7.041-1.086.02-1.963.906-1.963,1.996v2c0,1.09.877,1.976,1.963,1.996,1.009,3.385,3.656,6.032,7.041,7.041.02,1.086.906,1.963,1.996,1.963h2c1.09,0,1.976-.877,1.996-1.963,3.385-1.009,6.032-3.656,7.041-7.041,1.086-.02,1.963-.906,1.963-1.996v-2c0-1.09-.877-1.976-1.963-1.996Zm-7.042,10.953c-.024-1.082-.908-1.956-1.996-1.956h-2c-1.088,0-1.972.874-1.996,1.956-2.287-.86-4.101-2.673-4.961-4.961,1.082-.024,1.956-.908,1.956-1.996v-2c0-1.088-.874-1.972-1.956-1.996.86-2.287,2.673-4.101,4.961-4.961.024,1.082.908,1.956,1.996,1.956h2c1.088,0,1.972-.874,1.996-1.956,2.287.86,4.101,2.673,4.961,4.961-1.082.024-1.956.908-1.956,1.996v2c0,1.088.874,1.972,1.956,1.996-.86,2.287-2.673,4.101-4.961,4.961Z" />
            </svg>
        </x-nav.element>


        <x-nav.element name="Timeline" route="proyect.timeline" active="{{ request()->routeIs('proyect.timeline') }}">
            <svg class="w-4 h-4 me-2" xmlns="http://www.w3.org/2000/svg"
                    id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M21,15H10.26c-.8,0-1.55-.31-2.12-.88l-1.42-1.41c-.19-.19-.29-.44-.29-.71s.11-.52,.29-.71l1.42-1.41c.57-.57,1.32-.88,2.12-.88h10.74c1.65,0,3,1.35,3,3s-1.35,3-3,3Zm-12.15-4.41h0Zm9.15-4.59h-7.74c-.8,0-1.55-.31-2.12-.88l-1.42-1.41c-.19-.19-.29-.44-.29-.71s.11-.52,.29-.71l1.42-1.41c.57-.57,1.32-.88,2.12-.88h7.74c1.65,0,3,1.35,3,3s-1.35,3-3,3ZM8.85,1.59h0Zm7.15,22.41h-5.74c-.8,0-1.55-.31-2.12-.88l-1.42-1.41c-.19-.19-.29-.44-.29-.71s.11-.52,.29-.71l1.42-1.41c.57-.57,1.32-.88,2.12-.88h5.74c1.65,0,3,1.35,3,3s-1.35,3-3,3Zm-7.15-4.41h0Zm-6.85-.59c-1.1,0-2,.9-2,2s.9,2,2,2,2-.9,2-2-.9-2-2-2Zm0-9c-1.1,0-2,.9-2,2s.9,2,2,2,2-.9,2-2-.9-2-2-2ZM2,1C.9,1,0,1.9,0,3s.9,2,2,2,2-.9,2-2S3.1,1,2,1Z" />
                </svg>
        </x-nav.element>

        <li class="me-2">
            <a href="#"
                class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                <svg class="w-4 h-4 me-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300"
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" id="Layer_1" fill="currentColor"
                    viewBox="0 0 24 24">
                    <path
                        d="M16.5,24a1.5,1.5,0,0,1-1.489-1.335,3.031,3.031,0,0,0-6.018,0,1.5,1.5,0,0,1-2.982-.33,6.031,6.031,0,0,1,11.982,0,1.5,1.5,0,0,1-1.326,1.656A1.557,1.557,0,0,1,16.5,24Zm6.167-9.009a1.5,1.5,0,0,0,1.326-1.656A5.815,5.815,0,0,0,18.5,8a1.5,1.5,0,0,0,0,3,2.835,2.835,0,0,1,2.509,2.665A1.5,1.5,0,0,0,22.5,15,1.557,1.557,0,0,0,22.665,14.991ZM2.991,13.665A2.835,2.835,0,0,1,5.5,11a1.5,1.5,0,0,0,0-3A5.815,5.815,0,0,0,.009,13.335a1.5,1.5,0,0,0,1.326,1.656A1.557,1.557,0,0,0,1.5,15,1.5,1.5,0,0,0,2.991,13.665ZM12.077,16a3.5,3.5,0,1,0-3.5-3.5A3.5,3.5,0,0,0,12.077,16Zm6-9a3.5,3.5,0,1,0-3.5-3.5A3.5,3.5,0,0,0,18.077,7Zm-12,0a3.5,3.5,0,1,0-3.5-3.5A3.5,3.5,0,0,0,6.077,7Z" />
                </svg>
                Users
            </a>
        </li>

    </ul>
</div>
