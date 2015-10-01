<h2>Livre d'or - FuelPHP 1.7.3</h2>
<h3>Il y a actuellement <?php echo $nb; ?> commentaires
	<a class="btn btn-primary pull-right" data-toggle="collapse" href="#collapseCommenter" aria-expanded="false" aria-controls="collapseCommenter">Ecrire un commentaire</a>
</h3>

<div class="clearfix"></div>
<div id="collapseCommenter" class="collapse <?php if (Session::get_flash('error_growl') != ''): ?> in <?php endif; ?>">				
	<?php include('_comment.php'); ?> 
</div>
			
<!--  Commentaires -->
<?php if (isset($comments)): ?>
    <?php include_once('_comments.php'); ?>
<?php endif; ?>
		