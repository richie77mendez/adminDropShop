
	function HolaMundo(user1,user2){
		var resultado ="Hola Mundo para " + user1 +" y " + user2;
		return resultado;
	}

	function eliminar(id){
		var resultado ="Hola Mundo para " + id;
		return resultado;
	  }

test("Pruebas Unitarias dropshop",function () {
	ok(HolaMundo("Ingeniera","Ivonne"),"Satisfactorio");
	ok(eliminar("prueba"),"Satisfactorio");
})
