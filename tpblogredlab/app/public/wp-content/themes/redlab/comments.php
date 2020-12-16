<div id="comments">
		<?php if ( have_comments() ) : ?>
			<h3> <!--Nombre de commentaires-->
				<?php
				printf( _nx( '1 commentaire sur “%2$s”', '%1$s commentaires on “%2$s”', get_comments_number(), 'Titre du commentaire'),
                number_format_i18n( get_comments_number() ), get_the_title() );
				?>
			</h3>

			<ul>
				<div>
					<div>
						<?php
							wp_list_comments( array(
								'short_ping'  => true,
								'avatar_size' => 50,
							) );
						?>
					</div>
				</div>
			</ul>

		<?php endif; ?>



	</div>