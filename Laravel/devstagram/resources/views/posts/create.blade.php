@extends('layouts.app')

@section('titulo')
    Crear una nueva Publicacion
@endsection

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            Imagen aqui
        </div>
        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0">
            <form action="/register" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input id="name" name="name" type="text" placeholder="Tu nombre"
                           value="{{old('name')}}"
                           class="border p-3 w-full rounded-lg  @error('name') border-red-500 @enderror"/>
                    @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <input
                    type="submit"
                    value="Crear Cuenta"
                    class=" bg-blue-600 hover:bg-blue-700 transition-colors cursor-pointer w-full p-3 text-white rounded-lg uppercase"
                />
            </form>
        </div>
    </div>
@endsection
