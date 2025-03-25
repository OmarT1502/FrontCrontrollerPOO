<?php
	class Producto {

		function getproducto($id){
			return "<br/>Se ejecutó getproducto: {$id} <br/>";
		}

		function postproducto($obj) {
			return "<br/>Se ejecutó postProducto: {$obj} <br/>";
		}

		function deleteproducto($id){
			return "<br/>Se ejecutó deleteproducto <br/>";
		}

		function putproducto($obj){
			return "<br/>Se ejecutó putproducto <br/>";
		}
	}
?>

















