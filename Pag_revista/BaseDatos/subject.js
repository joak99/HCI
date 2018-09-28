function searchTupla(){
	var search = document.getElementById('search').value;
	var Data = 'search=' + search;

	$.ajax({
		type: 'GET',
		url: 'backend_revista.php',
		data: Data,
		success : function(resp){
			$('#res').html(resp)
		}
	});

}

function insertUser(){
	var identification = document.getElementById('identification');
	var f_name = document.getElementById('first_name');
	var l_name = document.getElementById('last_name');
	var age = document.getElementById('age');
	var city = document.getElementById('city');

	var dataEn = {'identification' : identification,
				'first_name' : f_name,
				'last_name' : l_name,
				'age': age,
				'city' : city};
	$.ajax({
		type: 'POST',
		url: 'backend_revista.php',
		data: dataEn,
		success : function (resp) {
			$('#res').html(resp)
		}
	});
}

function suscribeUser(){
	//captura info del formulario de inscripcion
}