@extends('layouts.app')

@section('titulo')
    Inicia Sesion en DevStagram
@endsection


@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{asset('img/login.jpg')}}" alt="Imagen login de usuario">
        </div>
        <div class="md:w-4/12  bg-white p-6 rounded-lg shadow">
            <form method="POST" action="{{route('login')}}" novalidate>
                @csrf
                @if(session('mensaje'))
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center mb-1">{{ session('mensaje') }}</p>
                @endif
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input id="email" name="email" type="text" placeholder="Tu Email de Registro"
                           value="{{old('email')}}"
                           class="border p-3 w-full rounded-lg  @error('email') border-red-500 @enderror"/>
                    @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
                    <input id="password" name="password" type="password" placeholder="Pasword de Registro"
                           value="{{old('password')}}"
                           class="border p-3 w-full rounded-lg  @error('password') border-red-500 @enderror"/>
                    @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                        <input type="checkbox" name="remember"> <label for="remember" class="text-gray-500 text-sm"> Manetener mi sesión iniciada </label>
                </div>
                <input
                    type="submit"
                    value="Iniciar Sesion"
                    class=" bg-blue-600 hover:bg-blue-700 transition-colors cursor-pointer w-full p-3 text-white rounded-lg uppercase"
                />
            </form>
        </div>
    </div>
@endsection
