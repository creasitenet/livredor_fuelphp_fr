
				<?php if(isset($comments)): ?> 
				  
				    <?php if(count($comments)>0): ?>
				
				        <?php foreach($comments as $i => $e): ?>
				
				            <div id="comment_<?php echo $e->id; ?>" class="comments">
				                                           
				                   <p class="title">Par <?php echo $e->pseudo; ?> le <?php echo date('d-m-Y à H:i:s', $e->created_at); ?> </p>
				                   <p class="text"><?php echo nl2br(htmlentities($e->text)); ?></p>
							
							</div>
				        
				        <?php endforeach; ?>
				        
				    <?php else: ?>
				    <p class="lead text-danger">Pas de commentaires</p>
				    <?php endif; ?>
				
			    <?php else: ?>
				    <p class="lead text-danger">Pas de commentaires</p>
				<?php endif; ?>
				
				
				
