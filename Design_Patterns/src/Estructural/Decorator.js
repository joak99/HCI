function productPaella(name){
	this.name = name;
}

function decorateNameProduct(product, description){
	this.product = product;
	this.description = description
	
	var allName = this.product.name + " " + this.description;
	
	return allName;
}

function executeDecorator(other){

	var name = new productPaella(other);
	var decorated = new decorateNameProduct(name, "La mejor paella de la universidad");

	return decorated;
}