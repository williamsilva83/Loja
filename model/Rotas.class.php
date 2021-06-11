<?php 

	Class Rotas {

		public static $pag;

		static function get_SiteHome(){
			return Config::SITE_URL . '/' . Config::SITE_PASTA;
		}

		static function get_SiteRaiz(){
			return $_SERVER['DOCUMENT_ROOT'] . '/' . Config::SITE_PASTA;
		}

		static function get_pagina(){
			if(isset($_GET['pag'])){
				
				$pagina = $_GET['pag'];

				self::$pag = explode('/', $pagina);

				/*echo '<pre>';
				var_dump(self::$pag);
				echo '</pre>';*/

				$pagina = 'controller/' . self::$pag[0] . '.php';
				//$pagina = 'controller/' . $_GET['pag'] . '.php';

				if(file_exists($pagina)){
					include $pagina;
				}
				else{
					include 'erro.php';
				}
			}
		}	
	}
?>