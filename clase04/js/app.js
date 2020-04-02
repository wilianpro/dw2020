// esta funcion imprime los numero en orden
// console.log("Imprime los numeros en orden");
// var numeros=[101, 30,99,105,14,5,6,9,77,1, 2, 1001];
// numeros.sort((a, b) => a - b);
// console.log(numeros);
var origen= [2,5,6,9,7,4,3,1,8,10];
var destino=[];
i=0;
    var i,j,k;
    for (i = origen.length; i; i--) {
        j = Math.floor(Math.random() * i);
        k = origen[i - 1];
        origen[i - 1] = origen[j];
        origen[j] = k;
    }
          console.log("números aleatorios : " + origen);
  console.log("---------------------------------------");
  function suma(origen) {
    var destino=[];
    destino=(origen.sort((a,b)=>a-b))
    return destino;
    console.log("Numeros Ordenados: " +destino);
  }
origen.sort((a,b)=>a-b);
console.log("numeros oredenados: "+origen);
