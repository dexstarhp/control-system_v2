@extends('../layout/' . $layout)

@section('subhead')
    <title>Registro de usuario</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Registro de usuario</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <form method="post" action="{{ route('usuario.store') }}">
                @csrf
                <!-- BEGIN: Form Layout -->
                <div class="intro-y box p-5">
                    <div>
                        <label for="name" class="form-label">Nombre</label>
                        <input name="name" id="name" type="text" class="form-control w-full" placeholder="Nombre">
                    </div>
                    <div>
                        <label for="email" class="form-label">Email</label>
                        <input name="email" id="email" type="text" class="form-control w-full" placeholder="Correo electronico">
                    </div>
                    <div class="mt-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input name="password" id="password" type="password" class="form-control" placeholder="contraseña">
                    </div>
                    <div class="text-right mt-5">
                        <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancelar</button>
                        <button type="submit" class="btn btn-primary w-24">Guardar</button>
                    </div>
                </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>
@endsection

@section('script')

@endsection
