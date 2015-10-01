<div id="ecrire_un_commentaire" class="form">

<?php echo Form::open(array("action" => 'livredor/comment', "class"=>"form")); ?>
			
	<div class="form-group <?php //if(form_error('pseudo')): echo 'has-error has-feedback'; endif; ?>">
		<div class="input-group">
	       	<span class="input-group-addon"><i class="fa fa-user"></i></span>
	         <input type="text" name="pseudo" value="" class="form-control" placeholder="Pseudo" required />                           
	    </div>             
	</div>
	
	<div class="form-group margin-10 <?php //if(form_error('text')): echo 'has-error has-feedback'; endif; ?> ">
	   	<div class="input-group">
	       	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
	        <textarea name="text" value="" cols="50" rows="5" class="form-control" placeholder="Commentaire" required></textarea>
	     </div>   
	</div>
	                 
	<input type="submit" value="PUBLIER VOTRE COMMENTAIRE" class="btn btn-primary btn-block" />
	                  
<?php echo Form::close(); ?>
			
</div>
<br />