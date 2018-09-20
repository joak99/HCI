/*Esta funcion permite obtener el valor del select de html(onchange)*/
let menuItems = ["Mariscos", "Vegetariana", "Carne y Pollo"];
let originalPrice;
let ivaCalculate;
let arrayPaellas = [];


function getValueType (paellaType){

	this.paellaType = paellaType;
	if(!arrayPaellas.includes(this.paellaType.value)){
		arrayPaellas.push(this.paellaType.value);
	}else{
		var index = arrayPaellas.indexOf(this.paellaType.value); 
		arrayPaellas.splice(index, 1);
	}

	console.log("productos añadidos al carrito: " + arrayPaellas);
}

function getValuePrice(paellaPrice){

	this.paellaPrice = paellaPrice;
	ivaCalculate = Math.round((this.paellaPrice.value * 19) / 100);
	originalPrice = this.paellaPrice.value - ivaCalculate;
}

function getValueCoin(typeCoin){
	this.typeCoin = typeCoin;
}

function buildPaella(){

	/*Construccion de paella*/
	/*var factory = executeFactory(this.paellaType.value);
	var paellaProduct = generatePaella(factory.type);
	console.log(paellaProduct);*/

	var arrayProducts = [];
	var factory; //= executeFactory(this.paellaType.value);
	var paellaProduct; // = generatePaella(factory.type);

	for(var i=0; i<arrayPaellas.length; i++){
		factory = executeFactory(arrayPaellas[i]);
		paellaProduct = generatePaella(factory.type);

		var paellaObject = {
			paellaType: arrayPaellas[i],
			paella: paellaProduct
		}
		
		arrayProducts.push(paellaObject);
	}

	var composite = buildShoppingCar("paella", arrayProducts);
	console.log(composite);

	/*llamamdo a patrones de diseño prototype y singleton*/
	var buildBase = produceBase(); //prototype
	var executeSingle = executeSingleton();
	console.log(buildBase);
	console.log(executeSingle);

	/*validacion de tipo de moneda para llamado del adaptador*/
	if(this.typeCoin.value == "dolar"){
		console.log("Precio en dolares con iva " + new CalculatePriceDolar().newCalculateDolar(originalPrice));
	}else if(this.typeCoin.value == "euro"){
		console.log("Precio en dolares con iva " + new CalculatePriceEuro().newCalculateEuro(originalPrice));
	}
	
	console.log("Precio Original " + originalPrice);
	console.log("Precio Iva " + ivaCalculate);

	var decorateItems = [];

	for (var i = 0; i < menuItems.length; i++) {
		
		var decorator = new executeDecorator(menuItems[i]);
		decorateItems.push(decorator);
	}

	console.log(decorateItems);
}