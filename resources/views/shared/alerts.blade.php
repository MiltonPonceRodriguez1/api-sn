{{-- RESPUESTA SERVER --}}
@if (session('status'))
<div class="bg-{{ session('bg') }}-500 border mt-8 mb-8 p-4 relative rounded-md uk-alert" uk-alert="">
    <button class="uk-alert-close absolute bg-gray-100 bg-opacity-20 m-5 p-0.5 pb-0 right-0 rounded text-gray-200 text-xl top-0">
        <i class="icon-feather-x"></i>
    </button>
    <h3 class="text-lg font-semibold text-white">{{ session('status') }}</h3>
    <p class="text-white text-opacity-75">{{ session('message') }}</p>
</div>
@endif
{{-- FIN RESPUESTA SERVER --}}