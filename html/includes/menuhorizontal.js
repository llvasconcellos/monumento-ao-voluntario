/* 
Estas funçoes e códigos são para o funcionamento do menu horizontal.
*/

var saiu = 0;	//Variável que indica se o mouse está em cima do menu ou já saiu.
var intervalo;	//Intervalo retornado pela função setInterval() serve para depois usar a função clearInterval();
var localizacao = "http://leo/vcds/";

function start(){ //Quando o mouse passar em cima do menu que apareceu então será executada esta função.
	//Esta função seta um intervalo de meio segundo 500 milisegundos para a execução da função checamouse() ou seja,
	//a função checamouse() será executada neste intervalo de tempo até que seja executada o Clear interval.
	saiu = 0;
	intervalo = setInterval(checamouse, 500);
}

function checamouse(){
	if (saiu != 0){//Quando o mouse sai de cima do menu a variavel saiu fica iqual a 1 então:
		escondemenu(); //O menu é escondido 
		clearInterval(intervalo); //Para a repetição da execução desta função.
		saiu = 0;
	}
}

/*function escondeselect(){ //Codigo que procura dentro de um formulário a existência de um menu select. Caso ele exista este ficará escondido.
	if (document.forms[0]){
		for (i = 0; i < document.forms[0].elements.length; i++){
			if (document.forms[0].elements(i).type == "select-one"){
				if (document.forms[0].elements(i).style.visibility == "") document.forms[0].elements(i).style.visibility = "hidden";
				else if (document.forms[0].elements(i).style.visibility == "visible") document.forms[0].elements(i).style.visibility = "hidden";
			}
		}
	}
}*/

function mostramenu_leo(){ //Insere dentro do <div> menucursos a tabela abaixo:
	/*escondemenu();
	escondeselect();*/
	var html = 		'<table width="110" cellpadding="3" cellspacing="0" class="tabela_menu">'
				+	'<tr><td class="celulasubmenu"><a href="vcd_browser.php" class="submenu">VCDs</td></tr>'
				+	'<tr><td class="celulasubmenu"><a href="clientes_browser.php" class="submenu">Clientes</td></tr>'
				+	'<tr><td class="celulasubmenu"><a href="tipos_vcds.php" class="submenu">Tipos de CDs</td></tr>'
				+	"</table>";
	document.all["menuleo"].innerHTML = html;
	document.all["menuleo"].style.position = "absolute";
	document.all["menuleo"].style.visibility = "visible";
	//document.all["menuleo"].style.width = "100%";
	document.all["menuleo"].style.left = "200px";
	document.all["menuleo"].style.top = "110px";
	document.all["menuleo"].style.top = "110px";
}

function escondemenu(){ //Faz qualquer menu que está sendo mostrado seja escondido.
	document.all["menuleo"].innerHTML = "";
	document.all["menuleo"].style.visibility = "hidden";
	/*if (document.forms[0]){ //Codigo que procura dentro de um formulário a existência de um menu select. Caso ele exista este será reamostrado.
		for (i = 0; i < document.forms[0].elements.length; i++){
			if (document.forms[0].elements(i).type == "select-one"){
				if (document.forms[0].elements(i).style.visibility == "hidden") document.forms[0].elements(i).style.visibility = "visible";
			}
		}
	}*/
}