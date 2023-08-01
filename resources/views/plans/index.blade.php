@extends('layouts.master')

@section('content')
<div id="wrapper">

    <!-- Header -->
    @include('shared.header')

    <!-- sidebar -->
    @include('shared.sidebar')

    <!-- Main Contents -->
    <div class="main_content">
        <div class="bg-gradient-to-tr flex from-blue-400 h-52 items-center justify-center lg:h-80 pb-10 relative to-blue-300 via-blue-400 w-full">

            <div class="text-center max-w-xl mx-auto z-10 relative px-5">
                <div class="lg:text-4xl text-2xl text-white font-semibold mb-3"> Pro Packages </div>
                <div class="text-white text-lg font-medium text-opacity-90"> ¡Elige el plan que más te convenga! Más funciones estarán disponibles gracias a los planes individuales. </div>
            </div>

        </div>
        <div class="max-w-5xl mx-auto p-7">

            <div class="-mt-16 bg-white p-10 relative rounded-md shadow">

                <div class="text-center text-xl font-semibold"> Selecciona tu plan </div>

                <!-- alerts -->
                @include('shared.alerts')

                <!-- Pricing cards -->
                <div class="grid md:grid-cols-3 gap-7 mt-8">
                @foreach ($plans as $plan)
                    <form method="POST" action="{{ route('plans.subscribe', ['id' => $plan->id]) }}">
                            <!-- Card 1 -->
                            <div class="bg-white border border-gray-100 hover:shadow-md p-6 rounded-xl">

                                <div class="font-bold mb-4 text-2xl text-black"> {{ $plan->name }} </div>
                                <div class="font-medium mb-6 text-gray-400 text-base"> {{ $plan->description }} </div>

                                <div class="border-b-2 border-blue-50 flex items-baseline mb-10 pb-8 space-x-2">
                                    <div class="font-semibold text-4xl text-black">${{ $plan->price }}</div>
                                    <div class="font-medium text-gray-400">/Semana</div>
                                </div>

                                
                                <div class="space-y-4 text- font-medium text-gray-400">
                                    @foreach ($plan->benefits as $benefit)
                                        <div class="flex items-center space-x-5">
                                            <i class="icon-feather-check font-bold text-blue-600"></i>
                                            <div> {{$benefit}} </div>
                                        </div>
                                    @endforeach
                                </div>

                                <button type="submit" class="bg-blue-50 mt-8 py-3 rounded-md text-blue-500 w-full font-semibold">SUSCRÍBETE AHORA</button>

                            </div>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection