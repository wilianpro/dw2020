console.log("----Ejercisio 1----");
var nro1 = prompt("Dime el Primer Valor");
console.log("Imprimiendo tabla del "+nro1);
var i=0;
for (i=1; i<11; i++){
  console.log(nro1+"x"+i+"= "+nro1*i);
}
console.log("----Ejercisio 2----");

  var nro3= prompt("dime el primer valor");
  var nro4= prompt("dime el seguno valor");
  while (nro3>nro4) {
  console.log("El primer valor no debe ser mayor al segundo");
  nro++;
  nro4+=nro3;
}
console.log("Imprimiendo valor del Primer numero: "+nro3);
for(i=1; i<11; i++){
  console.log(nro3+"x"+i+"= "+nro3*i);
}
console.log("Impreimiendo Tabla del segundo nuemro de valor: "+nro4);
for(i=1; i<11; i++){
  console.log(nro4+"x"+i+"= "+nro4*i);
}
