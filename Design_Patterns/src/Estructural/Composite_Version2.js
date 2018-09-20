function shoppingCar(typePaella){ 
    this.typePaella = typePaella;
    var arrayElements = [];

    this.compositeProto = function(){
        var objectComposite = {
           add: function(product){
                console.log(product);
                arrayElements.push(product);

                return arrayElements;
            },

            remove: function (product){

                arrayElements.split(0, arrayElements.length);
                arrayElements.add(product);
            } 
        }

        return objectComposite;
    }
}



function buildShoppingCar(typeProduct, product){

    var car = new shoppingCar(typeProduct); 
    var resultCar;

    for (var i = 0; product.length) {
        resultCar = car.compositeProto().add(product);   
    }

    return resultCar;
}

