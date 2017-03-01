<?
error_reporting(E_NONE);
require("includes/funcoes.php");
setcookie("pginicial", "sim");

if($_COOKIE["pginicial"] == "sim") inicia_pagina(false);
else inicia_pagina(true);

?>
 <table width="100%">
					<tr>
						<td width="70%" style="text-align:justify; padding:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px;" align="left" valign="top"><p align="left"><img src="images/bullet.gif" align="absmiddle">&nbsp;       
<b>Projeto Comunitário do Centenário</b><br>
<br>
<center><b>“Monumento ao Voluntário”</b></center>


<p class=MsoNormal><b><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt'>Discrição
básica:</span> </b><span style='mso-spacerun:yes'> </span>Representação de duas
mãos unidas, simbolizando a ajuda de quem está em melhor condição àquele que
está em patamar inferior.<span style='mso-bidi-font-size:10.0pt'><o:p></o:p></span></p>

<p class=MsoNormal>1. OBJETIVOS:</p>

<p class=MsoNormal>O Projeto <b style='mso-bidi-font-weight:normal'>“<u>Monumento
ao Voluntário </u>”</b> tem como objetivos principais:</p>


<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l2 level1 lfo1;tab-stops:list 36.0pt'>Reconhecer
     o trabalho voluntário realizado por milhares de pessoas.</li>
 <li class=MsoNormal style='mso-list:l2 level1 lfo1;tab-stops:list 36.0pt'>Promover
     a cultura do voluntariado. </li>
 <li class=MsoNormal style='mso-list:l2 level1 lfo1;tab-stops:list 36.0pt'>Divulgar
     casos exemplares de voluntariado em Joinville. Oferecendo opções àqueles
     que querem ajudar e não sabem como.</li>
 <li class=MsoNormal style='mso-list:l2 level1 lfo1;tab-stops:list 36.0pt'>Unir
     Rotary em torno de uma bandeira universal do voluntariado, fazendo com que
     entre em contato com projetos já desenvolvidos por outras
     pessoas/entidades.</li>
 <li class=MsoNormal style='mso-list:l2 level1 lfo1;tab-stops:list 36.0pt'>Promover
     um padrão de voluntariado Rotary, ajudando a separar voluntariado de real
     valor social do meramente promocional.</li>
 <li class=MsoNormal style='mso-list:l2 level1 lfo1;tab-stops:list 36.0pt'>Marcar
     o centenário do Rotary International</li>
</ul>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal>2. LOCAL DO PROJETO</p>

<p class=MsoNormal>Em primeira etapa, como projeto piloto, será erguido o <u>Monumento
ao Voluntário</u> em praça central de Joinville, Santa Catarina, Brasil.</p>


<p class=MsoNormal>Este monumento tem dezessete metros de altura e nele
será fixada a roda denteada e abaixo desta a inscrição <b style='mso-bidi-font-weight:
normal'>“HOMENAGEM AO VOLUNTÁRIO”.</b></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal>3. IMPORTÂNCIA DO PROJETO</p>

<p class=MsoNormal>O projeto <u>Monumento ao Voluntário</u>, possuí enorme
importância cultural.</p>


<p class=MsoNormal>Em um mundo cada vez mais materialista e individualista, é
fundamental a promoção e divulgação de ações realizadas em prol de outras
pessoas, sem nenhum benefício material imediato.</p>

<p class=MsoNormal>Apesar de em muitas partes do mundo a ação do<span
style='mso-spacerun:yes'>  </span>voluntariado ser uma prática já consolidada,
em outras, como no Brasil, ela está apenas iniciando.</p>

<p class=MsoNormal>Dessa forma, é natural que pessoas que hoje realizam
trabalhos voluntários encontrem diversos obstáculos como a indiferença de
outros e a descrença por parte de terceiros sobre objetivo de simplesmente
ajudar sem algo material em troca.</p>

<p class=MsoNormal>Forma-se assim um exército numeroso de voluntários, que dedica
parte de sua vida em prol de outros sem esmerar que esse esforço seja
reconhecido.</p>
			  <p>e-mail: <a href="mailto:doar@monumentoaovoluntario.com.br">doar@monumentoaovoluntario.com.br </a></p><br><br>
			  <center><img src="images/rotary_100.jpg"></center>
			  </td>
			  <td width="30%" align="left" valign="top" style="padding:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; border-left: 2px solid #FFFFFF;">
				<? lista_noticias(); ?>
			  </td>
					</tr>
				</table>
<?
especificacoes();
if($_COOKIE["pginicial"] == "sim") fim_pagina(false);
else fim_pagina(true);
?>