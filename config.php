<?php
	session_start();
	class Conectar
	{
		public function con()
		{
			$con =mysql_connect("localhost","root","");
			mysql_query("SET NAMES 'utf8'");
			mysql_select_db("db_simu");
			return $con;
		}

		public static function ruta()
		{
			return "http://localhost/PROYECTO/PG/";
		}

		public function comillas_inteligentes($valor)
		{
			if(get_magic_quotes_gpc()){
				$valor = stripslashes($valor);
			}
			if(!is_numeric($valor)){
				$valor = "'" . mysql_real_escape_string($valor)."'";
			}
			return $valor;
		}
	}
