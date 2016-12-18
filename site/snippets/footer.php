	</main>
	
	<footer class="sitefooter" role="contentinfo">
	  <?php echo $site->copyright()->kirbytext() ?>
	  <p class="colophon">Site made with <b>&hearts;</b> and <a href="http://getkirby.com">Kirby</a></p>
	</footer>
	<script>
		var a = document.querySelectorAll('a');
		for (var i = 0; i < a.length; i++) {
			if (a[i].host !== window.location.hostname) {
				a[i].setAttribute('target', '_blank');
		 	}
		}
	</script>
</body>
</html>