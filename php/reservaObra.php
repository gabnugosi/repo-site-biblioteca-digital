<?php 
/*Passando os atributos para o php */

//incluir demais campos pertinentes a reserva
$obra = $_POST['obra'];
$usuario = $_POST['usuario'];
$data_hora= getdate();



/* campos a serem adicionados aqui 
  id_emp					INT					NOT NULL	IDENTITY(1,1)		PRIMARY KEY,
	id_usu					INT					NOT NULL,
	iditem_emprestimo		INT					NOT NULL,	
	dt_hora_devolucao		SMALLDATETIME		NOT NULL,
	dt_reserva				DATE				NOT NULL,
	hora_emp				DATE				NOT NULL,
	emprestimo_concluido	BIT					NOT NULL,
*/

/* Fim da atribuição*/
/*Conexão com a base de dados*/ 
$connect = mysql_connect('localhost','root','usbw');///nome_do_servidor,nome_de_usuario,senha 
//$connect = mysql_connect('172.16.48.10','bdigital','bd1g1t@l'); //confirmar nome do servidor

//substituir
$db = mysql_select_db('biblioteca');//nome_da_base_de_dados

//verificação necessária
$query_select = "SELECT tombo FROM livros WHERE tombo = '$tombo'";//consulta tabela livros
$select = mysql_query($query_select,$connect);// query para o banco de dados
$array = mysql_fetch_array($select);// armazena o resultado do select 
$tomboarray = array('tombo'); // seleciona o campo tombo vindo do select 
 
//Verificação se o campo está vazio ou se o cadastro ja existe.


/*verciação se livro existe aqui*/ 

?>