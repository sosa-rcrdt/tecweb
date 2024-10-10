function validarNombre(){
    var nombre = document.getElementById("form-name");

    if(nombre.value == '' || nombre.value.length >100)
    {
        alert('Mal, muy mal');
    }
}

function validarModelo(){
    var modelo = document.getElementById("form-model")
    const alphaNumericPattern = /^[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]*$/;
        if (!alphaNumericPattern.test(modelo.value) || modelo.value.length > 25) {
            alert("El modelo es requerido, debe ser alfanumérico y tener 25 caracteres o menos.");
        }
}

function validarPrecio() {
    var precio = document.getElementById("form-price");
    const priceValue = parseFloat(precio.value);
    if (isNaN(priceValue) || priceValue <= 99.99) {
        alert("El precio es requerido y debe ser mayor a 99.99.");
    }
};

function validarHistoria(){
    var historia = document.getElementById("form-story");
    if(historia.value.length > 250){
        alert("La historia debe tener a lo más 250 caracteres.");
    }
}

function validarUnidades() {
    var unidades = document.getElementById("form-units")
    const unitsValue = parseInt(unidades.value);
    if (isNaN(unitsValue) || unitsValue < 0) {
        alert("Las unidades deben ser mayores o iguales a 0.");
    }
};

function validarImagen() {
    const imagen = document.getElementById("form-img");
    const imagenDefecto = "nada";
    if (imagen.value == "") {
        imagen.value = imagenDefecto;
    }
};