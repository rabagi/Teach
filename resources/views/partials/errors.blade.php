@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>¡Error!</strong> Por favor corrige los errores debajo:<br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif