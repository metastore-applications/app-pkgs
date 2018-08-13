<?php use MetaStore\App\{Kernel\View, Packages\App}; ?>

<?php View::get( 'header', '_common' ); ?>
<?php View::get( 'navbar', '_common' ); ?>

<main>
	<!-- section-main -->
	<section id="section-main" class="section">
		<div class="container">
			<?php echo App::getCards(); ?>
		</div>
	</section>
	<!-- / section-main -->
</main>

<?php View::get( 'footer', '_common' ); ?>
