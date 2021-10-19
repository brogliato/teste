<?php 
	

	//Identifica qual tela está sendo visualizada
	$conteudo = empty($_GET['conteudo']) ? 'home' : $_GET['conteudo'];

	class Site
	{
		public function render($conteudo)
		{
			include __DIR__ . '/variaveis-globais.inc.php';
			
			$raiz = __DIR__ . '/../src/Template';
			
			require "$raiz/Layout/header.ctp";
			require "$raiz/Paginas/$conteudo.ctp";
			require "$raiz/Layout/footer.ctp";
		}
		
		public function element($element, $vars = [])
		{
			include __DIR__ . '/variaveis-globais.inc.php';
			extract($vars);
			
			$raiz = __DIR__ . '/../src/Template';
			require "$raiz/Element/$element.ctp";
			return '';
		}
	}

	$site = new Site();
	$site->render($conteudo);
?>