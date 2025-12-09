<h1>Crear Producto</h1>

<form action="{{ route('productos.store') }}" method="POST">
    @csrf
    Nombre: <input type="text" name="nombre"><br>
    Precio: <input type="number" step="0.01" name="precio"><br>
    Stock: <input type="number" name="stock"><br>
    Categoría: <input type="text" name="categoria"><br><br>

    <button type="submit">Guardar</button>
</form>
