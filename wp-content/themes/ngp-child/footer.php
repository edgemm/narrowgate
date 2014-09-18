<?php $t =& peTheme(); ?>
<?php $layout =& $t->layout; ?>

<?php $contactFooter = apply_filters( 'pe_theme_contact_footer', true ); ?>

<?php if ( $contactFooter ) : ?>

<section id="contact">
	
	<div id="contact-holder" style="background-color:<?php echo $t->options->get("footerBg"); ?>">

		<?php if ( $t->options->get("footerContactForm") == "yes" ) : ?>
	
			<div class="row pad-top">
				<div class="large-12 columns text-center">
					<div class="page-title">
						<h3 class="text-white"><?php echo $t->options->get("contactHeading"); ?></h3><i class="typcn typcn-mail text-white"></i>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="large-8 large-centered columns page-spiel">
					<p class="text-white">
						<?php echo $t->options->get("contactDescription"); ?>
					</p>
				</div>
			</div>
			<a name="gotocontact"></a>
			<div id="contact-form" class="row">
				<form action="http://edgemultimedia.createsend.com/t/y/s/alrikl/" method="post" class="cm-optin-form">
					<div class="large-10 large-centered columns">
						<div class="form-upper">
							<label for="fieldName" class="contact-label text-white left">Name</label>
							<div class="input-holder">
								<input class="contact-field" id="fieldName" name="cm-name" type="text" />
							</div>
						</div>
					
						
						<div class="form-upper form-last">
							<label for="fieldEmail" class="contact-label text-white left">Email</label>
							<div class="input-holder">
								<input class="contact-field" id="fieldEmail" name="cm-alrikl-alrikl" type="email" required />
							</div>
						</div>
						
						<div class="form-lower">
							<label for="fieldxkjjdr" class="contact-label text-white left">Message</label>
							<div class="input-holder">
								<input class="contact-field" id="fieldxkjjdr" name="cm-f-xkjjdr" type="text" />
							</div>
						</div>

						<div id="form-button">
							<h5><button type="submit"><?php _e('SUBMIT','Pixelentity Theme/Plugin'); ?></button></h5>
						</div>

						<div class="clearfix"></div>
						<br>
						
						<div id="contactFormSent" class="formSent response-message form-sent">
							<i class="typcn typcn-thumbs-up"></i> <?php echo $t->options->get("msgOK"); ?>
						</div>
						<div id="contactFormError" class="formError response-message details-error">
							<i class="typcn typcn-warning"></i> <?php echo $t->options->get("msgKO"); ?>
						</div>
						
					</div>
				</form>
			</div>

		<?php else: ?>

			<br><br>
			<br><br>

		<?php endif; ?>
		
		<div class="row">
			<div class="large-12 columns text-center">
				<div class="social-icons">
					<ul style="background-color:<?php echo $t->options->get("footerBg"); ?>">
						<?php $t->content->socialLinks($t->options->get("footerSocialLinks"),"header"); ?>
					</ul>
					<div class="line"></div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="large-12 columns text-center">
				<h6 class="text-white copy-text"><?php echo $t->options->get("footerCopyright"); ?></h6>
			</div>
		</div>
		
	</div><!--end of contact-holder-->

</section><!--end of Contact section-->

<?php else : ?>

<div id="footer">
	<div class="row">
		<div class="large-12 columns text-center">
			<h6><?php echo $t->options->get("footerCopyright"); ?></h6>
		</div>
	</div>
</div>

<?php endif; ?>
							
<?php $t->footer->wp_footer(); ?>

</body>
</html>
