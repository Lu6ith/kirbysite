<footer><?php echo $site->copyright()->kirbytext() ?><p>Theme: <a href="http://kirby.leonsiekmann.de/">Frisk</a></p>
		</footer>
	</div>
	<!-- ende von class=alles -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
		$(document).ready(function() {
    $('.toggle').click(function() {
        $('.seitenkopf').toggleClass('mobilemenu');
    });
});
</script>
</body>

</html>