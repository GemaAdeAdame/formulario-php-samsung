function validarLongitud(campo, min, max) {
    return campo.length >= min && campo.length <= max;
}

function validarEmail(email) {
    const expresiones = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
    return expresiones.test(email);

}
function validarFormulario() {
    const nombre = document.querySelector('input[name="nombre"]').value.trim();
    const apellido = document.querySelector('input[name="apellido"]').value.trim();
    const email = document.querySelector('input[name="email"]').value.trim();

    if (!validarLongitud(nombre, 1, 20)) {
        alert('Ey! el nombre debe tener entre 1 y 20 carácteres.');
        return false;
    }

    if (!validarLongitud(apellido, 1, 20)) {
        alert('Ey! el apellido debe tener entre 1 y 20 caracteres.');
        return false;
    }

    if (!validarEmail(email)) {
        alert('Ey! introduzca un correo electrónico válido.');
        return false;
    }

    alert('Buen trabajo! El fomulario se ha rellenado correctamente :)');
    return true;
    
}


