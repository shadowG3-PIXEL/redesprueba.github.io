function calcularPrecio() {
    const procesador = parseFloat(document.getElementById('procesador').value);
    const gpu = parseFloat(document.getElementById('tarjeta_grafica').value);
    const ram = parseFloat(document.getElementById('ram').value);
    const almacenamiento = parseFloat(document.getElementById('almacenamiento').value);
    const fuentePoder = parseFloat(document.getElementById('fuente_poder').value);
    const casePC = parseFloat(document.getElementById('cases').value); // Cambiado de 'cases' a 'case'
    const refrigeracion = parseFloat(document.getElementById('refrigeracion').value);

    // Verifica que no haya NaN en los componentes
    if (isNaN(procesador) || isNaN(gpu) || isNaN(ram) || isNaN(almacenamiento) || 
        isNaN(fuentePoder) || isNaN(casePC) || isNaN(refrigeracion)) {
        document.getElementById('precio-total').innerText = 'Por favor selecciona los componentes.';
        return;
    }

    const total = procesador + gpu + ram + almacenamiento + fuentePoder + casePC + refrigeracion;

    document.getElementById('precio-total').innerText = total > 0 ? `Precio Total:  ${total.toFixed(2)} \Bs` : 'Por favor selecciona los componentes.';
}

function borrarOpciones() {
    document.getElementById('procesador').selectedIndex = 0;
    document.getElementById('tarjeta_grafica').selectedIndex = 0;
    document.getElementById('ram').selectedIndex = 0;
    document.getElementById('almacenamiento').selectedIndex = 0;
    document.getElementById('fuente_poder').selectedIndex = 0;
    document.getElementById('cases').selectedIndex = 0; // Cambiado de 'cases' a 'case'
    document.getElementById('refrigeracion').selectedIndex = 0;
    document.getElementById('precio-total').innerText = '';
}
