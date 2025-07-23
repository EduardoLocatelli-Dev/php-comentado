<?php 

$hierarquia = array(
    array(
         'nome_cargo'=>'CEO',
         'subordinados'=>array(
			//Inicio: Diretos Inicial         	
         	array(
         		'nome_cargo'=>'Diretor comercial',
         		'subordinados'=>array(
         			//Inicio: Gerente de Vendas
         			array(
         				'nome_cargo'=>'Gerente de Vendas'
         			)
         			//Termino: Gerente de Vendas
         			)
         	), //Cada item de array é separado por virgulas.
         	//Termino: Diretor Comercial
         	//Inicio: Diretor FInanceiro
         	array(
         		'nome_cargo'=>'Diretor Financeiro',
         		'subordinados'=>array(
         			//Inicio: Gerente de Contas a Pagar
         			array(
         				'nome_cargo'=>'Gerente de Contas a Pagar',
         				'subordinados'=>array(
         					//Inicio: Supervisor
         					array(
         						'nome_cargo'=>'Supervisor de Pagamentos'
         					)
         					//Termino: Suporvisor de Pagamentos
         				)
         			), //Cada item de array é separado por virgulas.
         			//Termino: Gerente de Contas a Pagar
         			//Inicio: Gerente de Compras
         			array(
         				'nome_cargo'=>'Gerente de Compras',
         				'subordinados'=>array(
         					//Inicio: Supervisor de Suprimentos
         					array(
         						'nome_cargo'=>'Supervisor de Suprimentos',
         						'subordinados'=>array(

         							array(
         								'nome_cargo'=>'Funcionário'
         							)
         						)
         					)
         					//Termino: Supervisor de Suprimentos
         				)
         			)
         			//Termino: Gerente de Compras
         		)
         	)
         	//Termino: Diretor Financeiro
         )
    )

);
//Abaixo vem a função recursiva.
function exibe($cargos){


	$html = '<ul>';
//<ul> unordered list cria uma lista com marcadores(bolinhas).
	foreach ($cargos as $cargo) {
//foreach significa para cada valor dentro do array, repita isso(ou faça algo).
//as é usado com o foreach e significa "como" ou "pega cada item como".
		$html .= "<li>";
//<li> Significa "list item" ou item de lista. Usado para criar itens dentro de listas em HTML.    
		$html .= $cargo['nome_cargo'];

		if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
//isset verifica se uma variavel existe e não é null.
//&& é o operador logico E (ou AND).
//count conta quantos elementos existem em um array.			
			$html .= exibe($cargo['subordinados']);
//.= concatena duas strings, acrescentano um novo valor ao final de uma string existente.
		}

		$html .= "</li>";
//</li> fecha o item.	
	}

	$html .= "</ul>";
//</ul> fecha a lista.
	return $html;

}

echo exibe($hierarquia);

?>