function getDatos(){
    var nombre = prompt('Nombre: ', '');
    var edad = prompt('Edad: ', 0);;

    var div1 = document.getElementById('nombre');
    div1.innerHTML = '<h3>Nombre: ' + nombre + '</h3>';

    var div2 = document.getElementById('edad');
    div2.innerHTML = '<h3>Edad: ' + edad + '</h3>';
}

function ejemplo1(){
    document.write('<h3>Hola Mundo</h3>');
}

function ejemplo2(){
    var nombre = 'Nelson';
    var edad = 20;
    var altura = 1.69;
    var casado = false;

    document.write(nombre);
    document.write('<br/>')
    document.write(edad);
    document.write('<br/>')
    document.write(altura);
    document.write('<br/>')
    document.write(casado);
}

function ejemplo3(){
    var nombre;
    var edad;
    nombre = prompt('Ingresa tu nombre:', '');
    edad = prompt('Ingresa tu edad:', '');
    document.write('Hola ');
    document.write(nombre);
    document.write(', así que tienes ');
    document.write(edad);
    document.write(' años');
}

function ejemplo4(){
    var valor1;
    var valor2;
    valor1 = prompt('Introducir primer número:', '');
    valor2 = prompt('Introducir segundo número', '');
    var suma = parseInt(valor1)+parseInt(valor2);
    var producto = parseInt(valor1)*parseInt(valor2);
    document.write('La suma es ');
    document.write(suma);
    document.write('<br>');
    document.write('El producto es ');
    document.write(producto);
}

function ejemplo5(){
    var nombre;
    var nota;
    nombre = prompt('Ingresa tu nombre:', '');
    nota = prompt('Ingresa tu nota:', '');
    if (nota>5) {
        document.write(nombre+' esta aprobado con un '+nota);
    }
}

function ejemplo6(){
    var num1,num2;
    num1 = prompt('Ingresa el primer número:', '');
    num2 = prompt('Ingresa el segundo número:', '');
    num1 = parseInt(num1);
    num2 = parseInt(num2);
    if (num1>num2) {
        document.write('El número mayor es '+num1);
    }
    else {
        document.write('El número mayor es '+num2);
    }
}

function ejemplo7(){
    var nota1,nota2,nota3;

    nota1 = prompt('Ingresa 1ra. nota:', '');
    nota2 = prompt('Ingresa 2da. nota:', '');
    nota3 = prompt('Ingresa 3ra. nota:', '');

    //Convertimos los 3 string en enteros
    nota1 = parseInt(nota1);
    nota2 = parseInt(nota2);
    nota3 = parseInt(nota3);

    var pro;
    pro = (nota1+nota2+nota3)/3;

    if (pro>=7) {
        document.write('Aprobado');
    }
    else {
        if (pro>=4) {
        document.write('Regular');
        }
        else {
        document.write('Reprobado');
        }
    }
}

function ejemplo8(){
    var valor;
    valor = prompt('Ingresar un valor comprendido entre 1 y 5:', '');
    //Convertimos a entero
    valor = parseInt(valor);
    switch (valor) {
        case 1: document.write('Uno');
        break;

        case 2: document.write('Dos');
        break;

        case 3: document.write('Tres');
        break;

        case 4: document.write('Cuatro');
        break;

        case 5: document.write('Cinco');
        break;

        default:document.write('Debe ingresar un valor comprendido entre 1 y 5.');
    }
}

function ejemplo9(){
    var col;
    col = prompt('Ingresa el color con que quierar pintar el fondo de la ventana (rojo, verde, azul)' , '');
    switch (col) {
        case 'rojo': document.bgColor='#ff0000';
        break;

        case 'verde': document.bgColor='#00ff00';
        break;

        case 'azul': document.bgColor='#0000ff';
        break;
    }
}

function ejemplo10(){
    var x;
    x=1;
    while (x<=100) {
        document.write(x);
        document.write('<br>');
        x=x+1;
    }
}

function ejemplo11(){
    var x=1;
    var suma=0;
    var valor;
    while (x<=5){
        valor = prompt('Ingresa el valor:', '');
        valor = parseInt(valor);
        suma = suma+valor;
        x = x+1;
    }
    document.write("La suma de los valores es "+suma+"<br>");
}

function ejemplo12(){
    var valor;
    do{
        valor = prompt('Ingresa un valor entre 0 y 999:', '');
        valor = parseInt(valor);
        if(valor!=0){
            document.write('El valor '+valor+' tiene ');
            if (valor<10){
                document.write('Tiene 1 dígito')
            }
            else{
                if (valor<100) {
                document.write('Tiene 2 dígitos');
                }
                else {
                document.write('Tiene 3 dígitos');
                }
            }
            document.write('<br><br>');
        }
    }while(valor!=0);
}

function ejemplo13(){
    var f;
    for(f=1; f<=10; f++)
    {
        document.write(f+"  ");
    }
}

function ejemplo14(){
    document.write("Cuidado<br>");
    document.write("Ingresa tu documento correctamente<br>");
    document.write("Cuidado<br>");
    document.write("Ingresa tu documento correctamente<br>");
    document.write("Cuidado<br>");
    document.write("Ingresa tu documento correctamente<br>");
}

function ejemplo15(){
    function mostrarMensaje() {
        document.write("Cuidado<br>");
        document.write("Ingresa tu documento correctamente<br>");
    }
    mostrarMensaje();
    mostrarMensaje();
    mostrarMensaje();
}

function ejemplo16(){
    function mostrarRango(x1,x2) {
        var inicio;
        for(inicio=x1; inicio<=x2; inicio++) {
            document.write(inicio+' ');
        }
    }
    var valor1,valor2;
    valor1 = prompt('Ingresa el valor inferior:', '');
    valor1 = parseInt(valor1);
    valor2 = prompt('Ingresa el valor superior:', '');
    valor2 = parseInt(valor2);
    mostrarRango(valor1,valor2);
}

function ejemplo17(){
    function convertirCastellano(x) {
        if(x==1)
            return "Uno";
        else
            if(x==2)
                return "Dos";
            else
                if(x==3)
                    return "Tres";
                else
                    if(x==4)
                        return "Cuatro";
                    else
                        if(x==5)
                            return "Cinco";
                        else
                            return "Valor incorrecto";
        }
        var valor = prompt("Ingresa un valor entre 1 y 5", "");
        valor = parseInt(valor);
        var r = convertirCastellano(valor);
        document.write(r);
}

function ejemplo18(){
    function convertirCastellano(x) {
        switch (x) {
            case 1: return "Uno";
            case 2: return "Dos";
            case 3: return "Tres";
            case 4: return "Cuatro";
            case 5: return "Cinco";
            default: return "Valor incorrecto";
        }
    }

    var valor = prompt("Ingresa un valor entre 1 y 5", "");
    valor = parseInt(valor);
    var r = convertirCastellano(valor);
    document.write(r);
}