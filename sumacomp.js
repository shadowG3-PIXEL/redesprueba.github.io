function calcularPrecio() {
    const procesador = parseFloat(document.getElementById('procesador').value);
    const gpu = parseFloat(document.getElementById('gpu').value);
    const ram = parseFloat(document.getElementById('ram').value);
    const almacenamiento = parseFloat(document.getElementById('almacenamiento').value);

    const total = procesador + gpu + ram + almacenamiento;

    document.getElementById('precio-total').innerText = total > 0 ? `Precio Total: $${total}` : 'Por favor selecciona los componentes.';
}

function borrarOpciones() {
    document.getElementById('procesador').selectedIndex = 0;
    document.getElementById('gpu').selectedIndex = 0;
    document.getElementById('ram').selectedIndex = 0;
    document.getElementById('almacenamiento').selectedIndex = 0;
    document.getElementById('precio-total').innerText = '';
}
