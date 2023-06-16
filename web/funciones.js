var k=0;
var datos=[];

function crearFila(){
	x=document.getElementById("tabla").rows.length;
	var table = document.getElementById("tabla");
	var row = table.insertRow(x);
	var cell1 = row.insertCell(0);
	var cell2 = row.insertCell(1);
	var cell3 = row.insertCell(2);
	var cell4 = row.insertCell(3);
	var cell5 = row.insertCell(4);
	var cell6 = row.insertCell(5);
	var cell7 = row.insertCell(6);
	
	for(i=0;i<datos.length;i++){
		element1.options[i+1]=new Option(datos[i]);
	}
	cell1.appendChild(element1);
	
}

function llenarArrayPal(pal, i){
	datos[i]=pal;
}
