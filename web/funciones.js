var k=0;
var datos=[];

function crearFila(){
	x=document.getElementById("tabla").rows.length;
	var table = document.getElementById("tabla");
	var row = table.insertRow(x);
	var cell1 = row.insertCell(0);
	
	for(i=0;i<datos.length;i++){
		element1.options[i+1]=new Option(datos[i]);
	}
	cell1.appendChild(element1);
	
}

function llenarArrayPal(pal, i){
	datos[i]=pal;
}
