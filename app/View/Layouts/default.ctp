<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('flat-ui.min');
		echo $this->Html->css('main');


		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div class="Header">
			 <div class="Header-nav">
			 	<?php 
				if(AuthComponent::user('group_id') == 1) {
			 ?>
			 	<a href="/promesa_educativa/users/register">Registrar</a> <?php } ?>
			 	<?php 
				if(AuthComponent::user('id')) {
			 ?>
			<a href="/promesa_educativa/users/logout">Cerrar Sesión</a>
			<?php } ?>
			 </div>
			  
			<section class="Logo">
				<figure class="Logo-imageContainer">
					<?php echo $this->Html->image('promesa_educativa_logo.png',array(
						'alt'=> 'Promesa educativa',
						'class'=> 'Logo-image' ))
					?>
				</figure>
			</section>
		</div>
		<?php 
				if(AuthComponent::user('id')) {
			 ?>
		<aside class="SideMenu">
			<ul>
				<li><a href="">Agrupaciones</a></li>
				<li><a href="">Inscritos</a></li>
				<li><a href="">Maestros</a></li>
				<li><a href="">Instrumentos</a></li>
			</ul>
		</aside>
		<?php } ?>
		<div id="content">

			

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
	<?php echo $this->Html->script('jquery-1.11.1');?>
	<?php echo $this->Html->script('main');?>
	
	 ?>

</body>
</html>
