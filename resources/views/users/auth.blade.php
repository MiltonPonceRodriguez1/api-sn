@extends('layouts.master')

@section('content')
<style>
    body {
        background-color: #f0f2f5;
    }
</style>

@include('shared.toasts')


<div class="lg:flex max-w-5xl min-h-screen mx-auto p-6 py-10">
    <div class="flex flex-col items-center lg: lg:flex-row lg:space-x-10">

        <div class="lg:mb-12 flex-1 lg:text-left text-center">
            <img src="{{ asset( env('LOGO_SRC') ) }}" alt="" class="lg:mx-0 lg:w-52 mx-auto w-40">
            <p class="font-medium lg:mx-0 md:text-2xl mt-6 mx-auto sm:w-3/4 text-xl"> Conéctate con amigos y el mundo que te rodea en Socialite.</p>
        </div>
        <div class="lg:mt-0 lg:w-96 md:w-1/2 sm:w-2/3 mt-10 w-full">
            <form class="p-6 space-y-4 relative bg-white shadow-lg rounded-lg" method="POST" action="{{url('login')}}">
                @csrf
                <input type="email" placeholder="Correo electrónico" name="email" class="with-border">
                <input type="password" placeholder="Contraseña" name="password" class="with-border">
                <button type="submit" class="bg-blue-600 font-semibold p-3 rounded-md text-center text-white w-full">
                    Iniciar Sesión
                </button>
                <a href="#" class="text-blue-500 text-center block"> ¿Has olvidado tu contraseña? </a>
                <hr class="pb-3.5">
                <div class="flex">
                    <a href="#register" type="submit" class="bg-green-600 hover:bg-green-500 hover:text-white font-semibold py-3 px-5 rounded-md text-center text-white mx-auto" uk-toggle>
                        Crear una nueva cuenta
                    </a>
                </div>
            </form>

        </div>

    </div>
</div>

<!-- This is the modal -->
<div id="register" uk-modal>
    <div class="uk-modal-dialog uk-modal-body rounded-xl shadow-2xl p-0 lg:w-5/12">
        <button class="uk-modal-close-default p-3 bg-gray-100 rounded-full m-3" type="button" uk-close></button>
        <div class="border-b px-7 py-5">
            <div class="lg:text-2xl text-xl font-semibold mb-1"> Registrarte</div>
            <div class="text-base text-gray-600"> Es rápido y fácil.</div>
        </div>
        <form class="p-7 space-y-5" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="grid lg:grid-cols-2 gap-5">
                <input type="text" placeholder="Nombre" name="name" class="with-border">
                <input type="text" placeholder="Apellido" name="surname" class="with-border">
            </div>

            <input type="text" placeholder="Nickname" name="nickname" class="with-border">
            <input type="email" placeholder="Correo electrónico" name="email" class="with-border">

            <input type="password" placeholder="Contraseña" name="password" class="with-border">
            <input type="password" placeholder="Confrimar tu contraseña" name="password_confirmation" class="with-border">

            <div class="grid lg:grid-cols-2 gap-3">
                <div>
                    <label class="mb-0"> Sexo </label>
                    <select class="selectpicker mt-2 with-border" name="gender">
                        <option value="male">Masculino</option>
                        <option value="female">Femenino</option>
                        <option value="other">Otro</option>
                    </select>

                </div>
                <div>
                    <label class="mb-2"> Número de telefono </label>
                    <input type="text" placeholder="+(52)55 5445 0543" name="phone" class="with-border">
                </div>
            </div>
            <p class="text-xs text-gray-400 pt-3">
                Al hacer clic en "Registrarte", aceptas nuestras
                <a href="#" class="text-blue-500"> Condiciones</a>,
                la<a href="#"> Política de privacidad</a> y
                la<a href="#"> Política de cookies</a>.
                Es posible que te enviemos notificaciones por SMS, que puedes desactivar cuando quieras.
            </p>
            <div class="flex">
                <button type="submit" class="bg-blue-600 font-semibold mx-auto px-10 py-3 rounded-md text-center text-white">
                    Registrarte
                </button>
            </div>
        </form>

    </div>
</div>
@endsection