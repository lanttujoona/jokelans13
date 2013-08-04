<footer class="footer-of-page">
	<div class="container">
		<div class="row">
			<div class="span12">
                                &copy; Copyright 2003-2013 <a href="http://www.lanttu.org" target="_blank">Lanttu ry</a> - Voima verkkopelitapahtumien takana!
			</div>
		</div>
	</div>
</footer>

<?php if (GOOGLE_ANALYTICS_ID) : ?>
<script>
  var _gaq=[['_setAccount','<?php echo GOOGLE_ANALYTICS_ID; ?>'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

<?php endif; ?>

<?php wp_footer(); ?>


