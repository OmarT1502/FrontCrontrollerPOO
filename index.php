<?php

	/***
	 * Modificar el código para que las funciones sean métodos de una clase llamada Producto.
	 * Usar una función php para llamar al método correspondiente de la clase Producto,
	 * dependiendo del método http usado en la solicitud. Ejemplo:
	 * 
	 *     Petición				|		Método a ejecutar
	 * -------------------------------------------------------------
	 * GET localhost/producto/1       	Producto::get(10) 
	 * POST localhost/producto/		  	Producto::post({"id":2, "nombre":"laptop", "precio":10000})
	 *  body: 
	 * 		{"id":2, 
	 * 		 "nombre":"laptop", 
	 * 		 "precio":10000}
	 * 
	 * PUT localhost/producto/		  	Producto::post({"id":2, "nombre":"Computadora de escritorio", "precio":15000})
	 *  body: 
	 * 		{"id":2, 
	 * 		 "nombre":"Computadora de escritorio", 
	 * 		 "precio":15000}
	 * 
	 * DELETE localhost/producto/2    	Producto::delete(2) 
	 */
	
?> 