<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="<?php bloginfo( 'pingback_url' ); ?>/../../images/favicon_32x32.ico">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<div id="header" class="container_12">
    <a class="logo" href="http://www.apoema.inf.ufg.br/">
      <span>Apoema, Tecnologia e Inovação</span></a>
    <a href="http://www.inf.ufg.br/" target="_blank" class="inf">
      <span>Instituto de Informática da UFG</span></a> 
  </div>
			<div class="navwrapper">
     <ul id="nav">
  		 <li><a href="/index.php" id="home">Home</a></li>
       <li><a href="#" id="institucional">Institucional</a>
   	   <ul id="submenu">
           <li><a href="<?php bloginfo( 'pingback_url' ); ?>/../../organizacao.html" id="organizacao">Organização</a></li>
           <li><a href="<?php bloginfo( 'pingback_url' ); ?>/../../objetivos.html" id="objetivos">Objetivos</a></li>
           <li><a href="<?php bloginfo( 'pingback_url' ); ?>/../../estruturaorganizacional.html" id="estruturaorganizacional">Estrutura Organizacional</a></li>
           <li><a href="<?php bloginfo( 'pingback_url' ); ?>/../../missaovisaovalores.html" id="missaovisaovalores">Missão, Visão e Valores</a></li>
           <li><a href="<?php bloginfo( 'pingback_url' ); ?>/../../dadoscadastrais.html" id="dadoscadastrais">Dados Cadastrais</a></li>
     	   </ul>
       </li>
       <li><a href="#" id="servicos">Serviços</a>
         <ul id="submenu">
      	  <li><a href="<?php bloginfo( 'pingback_url' ); ?>/../../servicosempresa.html" id="empresa">Empresa</a></li>
      	  <li><a href="<?php bloginfo( 'pingback_url' ); ?>/../../servicosgoverno.html" id="governo">Governo</a></li>
           <li><a href="<?php bloginfo( 'pingback_url' ); ?>/../../servicosinterno.html" id="interno">Pesquisadores do INF</a></li>        
         </ul>
       </li>       
       <li><a href="#" id="inovacao">Projetos</br>e auxílios</a>
         <ul id="submenu">
      	  <li><a href="<?php bloginfo( 'pingback_url' ); ?>/../../projetos.html" id="projetos">Projetos</a></li>
      	  <li><a href="<?php bloginfo( 'pingback_url' ); ?>/../../leidainformatica.html" id="leideinformatica">Lei de Informática</a></li>
           <li><a href="<?php bloginfo( 'pingback_url' ); ?>/../../leidobem.html" id="projetos">Lei do Bem</a></li>           
           <li><a href="<?php bloginfo( 'pingback_url' ); ?>/../../areasdeatuacao.html" id="areasdeatuacao">Áreas de Atuação</a></li>
           <li><a href="<?php bloginfo( 'pingback_url' ); ?>/../../oportunidadesfinanciamentos.html" id="oportunidadesfinanciamentos">Oportunidades / Financiamentos</a></li>         
         </ul>
       </li>
      <li><a href="#" id="propriedade_intelectual">Propriedade intelectual</a>
         <ul id="submenu">
      	  <li><a href="<?php bloginfo( 'pingback_url' ); ?>/../../software.html" id="software">Software</a></li>
		     <li><a href="<?php bloginfo( 'pingback_url' ); ?>/../../patente.html" id="patente">Patente</a></li>
           <li><a href="<?php bloginfo( 'pingback_url' ); ?>/../../procedimentos.html" id="procedimentos">Procedimentos</a></li>
         </ul>
      </li>
      <li><a href="<?php bloginfo( 'pingback_url' ); ?>/../../parceiros.html" id="parceiros">Parceiros</a></li>
      <li><a href="<?php bloginfo( 'pingback_url' ); ?>/../../documentos.html" id="documentos">Documentos</a></li>
      <li><a href="<?php bloginfo( 'pingback_url' ); ?>/../../contato.html" id="contato">Contato</a></li>
     </ul>
  </div>

<div id="promocional-ini"><img src="<?php bloginfo( 'pingback_url' ); ?>/../../images/promocional2.png" width="940" height="320" /></div>

		</header><!-- #masthead -->

	

		<div id="main" class="site-main container_12">
<div id="bottom" class="container_12">
    <div class="grid_3" id="dest1">
      <img class="icone" src="<?php bloginfo( 'pingback_url' ); ?>/../../images/icone_projetos.gif" width="46" height="46" alt="projetos" />
      <h3>Conheça nossos projetos</h3>
      <p>O Apoema dispõe de vários projetos inovadores em diversas áreas tecnológicas.<br>
        <a class="saiba-mais" href="<?php bloginfo( 'pingback_url' ); ?>/../../projetos.html">saiba mais</a></p>
    </div>
    <div class="grid_3" id="dest2"><img class="icone" src="<?php bloginfo( 'pingback_url' ); ?>/../../images/icone_documentos.gif" width="46" height="46" alt="documentos" />
      <h3>Download de documentos</h3>
      <p>Baixe roteiros, modelos de contrato, formulários e outros arquivos.<br>
        <a class="saiba-mais" href="<?php bloginfo( 'pingback_url' ); ?>/../../documentos.html">saiba mais</a></p>
    </div>
    <div class="grid_3" id="dest3"><img class="icone" src="<?php bloginfo( 'pingback_url' ); ?>/../../images/icone_duvidas.gif" width="46" height="46" alt="contato" />
      <h3>Dúvidas ou sugestões?      </h3>
      <p>Quer saber mais sobre o Apoema  ou enviar sugestões? Fale conosco.<br>
        <a class="saiba-mais" href="<?php bloginfo( 'pingback_url' ); ?>/../../contato.html">saiba mais</a></p>
    </div>
    <div class="grid_3" id="dest4"><img src="<?php bloginfo( 'pingback_url' ); ?>/../../images/icone_links.gif" alt="links" width="46" height="46" class="icone" />
      <h3>Marque sua reunião!</h3>
      <p>Acesse o formulário para que possa realizar sua reunião em nossa sala de reuniões.<br>
        <a href="http://goo.gl/forms/g6a0GbIQn1" class="saiba-mais" target="_blank">saiba mais</a></p>
    </div>
  </div>

<div id="promocional">
    <h1>Notícias</h1>
 </div>