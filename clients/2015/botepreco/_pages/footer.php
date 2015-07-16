		<div class="main-network row">
		    <div class="col-sm-6 col-md-9">
		    	<div class="row">
		    		<div class="col-sm-1">
		    			<h3><img class="" src="assets/img/fb-logo.png" alt="" width="30"></h3>	
		    		</div>
		    		<div class="col-sm-11">
		    			<h3><span id="likeCounter">00000</span> pessoas já curtiram nossa página! O que está esperando?</h3>
		    		</div>
		    	</div>
		    </div>
		    <div class="col-sm-6 col-md-3">
		        <a href="https://www.facebook.com/botepreco" class="btn btn-lg btn-default btn-block"  title="Botepreço.com no Facebook">Curta você também!</a>
		    </div>
		</div><!-- main network -->
		<div class="footer row">
			<div class="col-sm-6 col-md-3">
				<h5 class="footer-title">Mapa do site</h5>
				<ul class="footer-links">
					<li><a href="#" title="Página Inicial">Início</a></li>
					<li><a href="#" title="Quer comprar?">Quer comprar?</a></li>
					<li><a href="#" title="Quer vender?">Quer vender?</a></li>
					<li><a href="#" title="Escolha seu 0Km">Escolha seu 0Km</a></li>
					<li><a href="#" title="Como funciona">Como funciona</a></li>
					<li><a href="#" title="Contato">Contato</a></li>
				</ul>
			</div>
			<div class="col-sm-6 col-md-3">
				<h5 class="footer-title">Usuário</h5>
				<ul class="footer-links">
					<li><a href="#" title="Efetuar login">Efetuar login</a></li>
					<li><a href="#" title="Cadastre-se">Cadastre-se</a></li>
					<li><a href="#" title="Esqueci minha senha">Esqueci minha senha</a></li>
					<li><a href="#" title="Minha conta">Minha conta</a></li>
				</ul>
			</div>
			<div class="clearfix visible-xs-block visible-sm-block"></div>
			<div class="col-sm-6 col-md-3">
				<h5 class="footer-title">Institucional</h5>
				<ul class="footer-links">
					<li><a href="#" title="Termos de uso">Termos de uso</a></li>
					<li><a href="#" title="Código de defesa do consumidor">Código de defesa do consumidor</a></li>
				</ul>
			</div>
			<div class="col-sm-6 col-md-3">
				<h5 class="footer-title">Compartilhe</h5>
				<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
					<a class="addthis_button_facebook at300b" title="Compartilhar no Facebook" addthis:url="http://www.botepreco.com" href="#"><span style="background-color: rgb(48, 88, 145);" class="at4-icon aticon-facebook"><span class="at_a11y">Share on facebook</span></span></a>
					<a class="addthis_button_twitter at300b" title="Compartilhar no Twitter" addthis:title="Bote Preço Matriz. Venha conferir nossas ofertas!" href="#"><span style="background-color: rgb(44, 168, 210);" class="at4-icon aticon-twitter"><span class="at_a11y">Share on twitter</span></span></a>
					<a href="#" title="Email" target="_blank" class="addthis_button_email addthis_button_preferred_1 at300b"><span style="background-color: rgb(115, 138, 141);" class="at4-icon aticon-email"><span class="at_a11y">Share on email</span></span></a>
					<a href="#" title="Print" class="addthis_button_print addthis_button_preferred_2 at300b"><span style="background-color: rgb(115, 138, 141);" class="at4-icon aticon-print"><span class="at_a11y">Share on print</span></span></a>
					<div class="atclear"></div>
				</div>
				<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
				<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4e4d11670ff4ab43"></script>
			</div>
		</div>
		<div class="copyright row">
			<div class="col-xs-12">
				<p>
					BotePreco.com &copy; 2013 - <span id="thisYear"></span><br/>
					Todos os direitos reservados<br/>
					<a href="#">Termos de Uso</a>
				</p>
			</div>
		</div>
	</div><!-- main content -->

	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.5/js/bootstrap-select.min.js"></script>
	<script>
		$(function () {
		  	var likeCounter = $('#likeCounter');
		  	var cy = $('#thisYear');
		  	var choiceCarsSelect = $('.choice-cars ');
		  	var selectPicker = $('.selectpicker');

			$.get("https://graph.facebook.com/v2.3/botepreco?fields=likes&access_token=138346436263156|3cc7396b4ca62ac37947525906695c94", 
				function(data) {
					likeCounter.html(data.likes);
				}
			);

			$('[data-toggle="tooltip"]').tooltip();
		    cy.append(document.createTextNode((new Date).getFullYear()));

		    choiceCarsSelect.attr('multiple', 'multiple');
		    selectPicker.selectpicker('refresh');
		});
	</script>
</body>
</html>