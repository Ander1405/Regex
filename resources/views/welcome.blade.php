<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regex</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="text-center py-3">
    <h1 class="font-semibold text-4xl">Regex Validaciones</h1>
</div>
<div class="py-12 mx-16">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-gray-200 border-b border-gray-200 ">
                <div>
                        <form action="{{ route('regex') }}" method="POST">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols2 gap-5 md:gap-8 mt-5 mx-7">
                                <div class="grid grid-cols-1">
                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Nombre:</label>
                                    <input name="name" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text"/>
                                    @error('name')
                                        <h1 class="text-red-500">{{ $message }}</h1>
                                    @enderror
                                </div>
                                <div class="grid grid-cols-1">
                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Apellido:</label>
                                    <input name="surname" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text"/>
                                    @error('surname')
                                    <h1 class="text-red-500">{{ $message }}</h1>
                                    @enderror
                                </div>
                                <div class="grid grid-cols-1">
                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Correo electronico:</label>
                                    <input name="email" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" />
                                    @error('email')
                                    <h1 class="text-red-500">{{ $message }}</h1>
                                    @enderror
                                </div>
                                <div class="grid grid-cols-1">
                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Tipo de documento:</label>
                                    <input name="document_type" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" />
                                    @error('document_type')
                                    <h1 class="text-red-500">{{ $message }}</h1>
                                    @enderror
                                </div>
                                <div class="grid grid-cols-1">
                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Documento:</label>
                                    <input name="document" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" />
                                    @error('document')
                                    <h1 class="text-red-500">{{ $message }}</h1>
                                    @enderror
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <button class="border-2 border-purple-500 text-black px-4 py-2 rounded-md text-1xl font-medium hover:bg-purple-500 transition duration-300" type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
