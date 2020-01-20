<!--ARQUIVOS JQUERY  E JAVASCRIPT -->

		<script type="text/javascript" src="../../js/jquery-3.4.0.min.js"></script>
		<script type="text/javascript" src="../../js/materialize.min.js"></script>
        <script type="text/javascript" src="../../js/jquery.mask.min.js"></script>

		<!--INICIALIZACAO JQUERY -->

		<script type="text/javascript">
			$(document).ready(function(){
                $("#telefone").mask("(00) 00000-0000");

                $('.menu-toggle').click(function () {
                    $('.menu-toggle').toggleClass('active')
                    $('nav2').toggleClass('active')
                })

			});
		</script>



	</body>
</html>