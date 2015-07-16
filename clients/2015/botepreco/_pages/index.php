<?php include 'header.php'; ?>

		<div class="featured-content row">
			<div class="search-form-advanced col-md-4 col-md-push-8 hidden-xs hidden-sm">
				<form class="form" action="/" method="post">
					<div class="form-group form-group-sm">
					    <label for="carMaker">Marca</label>
						<select class="form-control" id="carMaker" name="carMaker">
						  <option value="1">1</option>
						  <option value="2">2</option>
						  <option value="3">3</option>
						  <option value="4">4</option>
						  <option value="5">5</option>
						</select>
					</div><!-- Car Maker-->
					<div class="form-group form-group-sm">
					    <label for="carModel">Modelo</label>
						<select class="form-control" id="carModel" name="carModel">
						  <option value="1">1</option>
						  <option value="2">2</option>
						  <option value="3">3</option>
						  <option value="4">4</option>
						  <option value="5">5</option>
						</select>
					</div><!-- Car Model -->
					<div class="form-group form-group-sm">
					    <label for="carVersion">Versão</label>
						<select class="form-control" id="carVersion" name="carVersion">
						  <option value="1">1</option>
						  <option value="2">2</option>
						  <option value="3">3</option>
						  <option value="4">4</option>
						  <option value="5">5</option>
						</select>
					</div><!-- Car Model -->
					<div class="form-group form-group-sm">
						<label for="">Ano</label>
						<div class="row">
							<div class="col-xs-6">
								<select class="form-control" id="carYearStart" name="carYearStart">
								  <option value="1">1</option>
								  <option value="2">2</option>
								  <option value="3">3</option>
								  <option value="4">4</option>
								  <option value="5">5</option>
								</select>
							</div>
							<div class="col-xs-6">
								<select class="form-control" id="carYearEnd" name="carYearEnd">
								  <option value="1">1</option>
								  <option value="2">2</option>
								  <option value="3">3</option>
								  <option value="4">4</option>
								  <option value="5">5</option>
								</select>
							</div>
						</div>
					</div><!-- Car Year -->
					<div class="form-group form-group-sm">
						<label for="">Preço</label>
						<div class="row">
							<div class="col-xs-6">
								<div class="input-group">
								    <span class="input-group-addon">R$</span>
								    <input type="text" class="form-control" id="carPriceStart" aria-describedby="carPriceStart" placeholder="Mínimo">
								</div>
							</div>
							<div class="col-xs-6">
								<div class="input-group">
								    <span class="input-group-addon">R$</span>
								    <input type="text" class="form-control" id="carPriceEnd" aria-describedby="carPriceEnd" placeholder="Máximo">
								</div>
							</div>
						</div>
					</div><!-- Car Price -->
					<div class="form-group form-group-sm">
						<label for="">Quilometragem</label>
						<div class="row">
							<div class="col-xs-6">
								<div class="input-group">
								    <span class="input-group-addon">KM</span>
								    <input type="text" class="form-control" id="carKmStart" aria-describedby="carPriceStart" placeholder="Mínima">
								</div>
							</div>
							<div class="col-xs-6">
								<div class="input-group">
								    <span class="input-group-addon">KM</span>
								    <input type="text" class="form-control" id="carKmEnd" aria-describedby="carKmEnd" placeholder="Máxima">
								</div>
							</div>
						</div>
					</div><!-- Car KM -->
					<div class="search-form-advanced__button-wrapper form-group form-group-sm">
					    <button type="button" class="btn btn-danger btn-block">Buscar</button>
					</div><!-- Submit for -->
				</form>
			</div><!-- search form advanced -->
			<div class="home-carousel col-md-8 col-md-pull-4">
				<div class="row">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					    <ol class="carousel-indicators">
					        <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
					        <li class="active" data-target="#carousel-example-generic" data-slide-to="1"></li>
					    </ol>
					    <div class="carousel-inner" role="listbox">
					        <div class="item active">
					            <img data-holder-rendered="true" src="http://loremflickr.com/750/430/car?random=5" alt="Second slide [900x500]" height="450" width="100%">
					        </div>
					        <div class="item">
					            <img data-holder-rendered="true" src="http://loremflickr.com/750/430/moto?random=6" alt="Second slide [900x500]" height="450" width="100%">
					        </div>
					    </div>
					    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					        <span class="sr-only">Previous</span>
					    </a>
					    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					        <span class="sr-only">Next</span>
					    </a>
					</div>
				</div>
			</div><!-- home carousel -->
		</div><!-- featured content -->
		<div class="search-form-quick">
			<form class="form col-xs-12" action="">
				<div class="input-group">
					<span class="input-group-addon">Busca rápida</span>
				    <input type="text" class="form-control" id="searchFormQuick" aria-describedby="searchFormQuick" placeholder="Marca, Modelo, Ano, Cor">
				    <span class="input-group-btn">
						<button class="btn btn-danger" type="button">Pesquisar</button>
					</span>
				</div>
			</form>
		</div><!-- qsearch-form-quick -->
		<div class="listing listing-offers">
			<div class="row">
				<div class="col-xs-12">
					<div class="page-header page-header-index">
						<h1>Conheça nossas ofertas em destaque. <small>Bote Preço!</small></h1>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="listing-item col-xs-6 col-md-3">
					<a class="listing-item-image" href="#" title="">
						<span class="listing-item-label label label-success">zero km</span>
						<img src="http://loremflickr.com/200/150/car?random=5" alt="" width="100%" class="img-thumbnail">
					</a>
					<h2 class="listing-car-value">R$ 55.900,00</h2>
					<h3 class="listing-car-name">Ford Ecosport</h3>
					<p><em>1.6 XLS FREESTYLE 8V FLEX 4P MANUAL - 2012/2013</em></p>
					<a href="#" class="btn btn-danger btn-block" title=""><span class="hidden-xs">Clique e </span>Bote o Preço!</a>
				</div>
				<div class="listing-item col-xs-6 col-md-3">
					<a class="listing-item-image" href="#" title=""><img src="http://loremflickr.com/200/150/car?random=2" alt="" width="100%" class="img-thumbnail"></a>
					<h2 class="listing-car-value">R$ 46.000,00</h2>
					<h3 class="listing-car-name">Toyota Corola</h3>
					<p><em>1.8 XEI 16V FLEX 4P AUTOMÁTICO - 2009/2010</em></p>
					<a href="#" class="btn btn-danger btn-block" title=""><span class="hidden-xs">Clique e </span>Bote o Preço!</a>
				</div>
				<div class="clearfix visible-xs-block visible-sm-block"></div>
				<div class="listing-item col-xs-6 col-md-3">
					<a class="listing-item-image" href="#" title=""><img src="http://loremflickr.com/200/150/car?random=3" alt="" width="100%" class="img-thumbnail"></a>
					<h2 class="listing-car-value">R$ 35.900,00</h2>
					<h3 class="listing-car-name">Chevrolet Blazer</h3>
					<p><em>2.4 MPFI ADVANTAGE 4X2 8V FLEXPOWER 4P MANUAL - 2008/2008</em></p>
					<a href="#" class="btn btn-danger btn-block" title=""><span class="hidden-xs">Clique e </span>Bote o Preço!</a>
				</div>
				<div class="listing-item col-xs-6 col-md-3">
					<a class="listing-item-image" href="#" title=""><img src="http://loremflickr.com/200/150/car?random=4" alt="" width="100%" class="img-thumbnail"></a>
					<h2 class="listing-car-value">R$ 22.900,00</h2>
					<h3 class="listing-car-name">Honda Civic</h3>
					<p><em>1.7 LX SEDAN 16V GASOLINA 4P MANUAL - 2004/2005</em></p>
					<a href="#" class="btn btn-danger btn-block" title=""><span class="hidden-xs">Clique e </span>Bote o Preço!</a>
				</div>
				<div class="clearfix visible-xs-block visible-sm-block"></div>
				<div class="listing-item col-xs-6 col-md-3">
					<a class="listing-item-image" href="#" title=""><img src="http://loremflickr.com/200/150/car?random=8" alt="" width="100%" class="img-thumbnail"></a>
					<h2 class="listing-car-value">R$ 35.900,00</h2>
					<h3 class="listing-car-name">Chevrolet Blazer</h3>
					<p><em>2.4 MPFI ADVANTAGE 4X2 8V FLEXPOWER 4P MANUAL - 2008/2008</em></p>
					<a href="#" class="btn btn-danger btn-block" title=""><span class="hidden-xs">Clique e </span>Bote o Preço!</a>
				</div>
				<div class="listing-item col-xs-6 col-md-3">
					<a class="listing-item-image" href="#" title=""><img src="http://loremflickr.com/200/150/car?random=9" alt="" width="100%" class="img-thumbnail"></a>
					<h2 class="listing-car-value">R$ 22.900,00</h2>
					<h3 class="listing-car-name">Honda Civic</h3>
					<p><em>1.7 LX SEDAN 16V GASOLINA 4P MANUAL - 2004/2005</em></p>
					<a href="#" class="btn btn-danger btn-block" title=""><span class="hidden-xs">Clique e </span>Bote o Preço!</a>
				</div>
				<div class="clearfix visible-xs-block visible-sm-block"></div>
				<div class="listing-item col-xs-6 col-md-3">
					<a class="listing-item-image" href="#" title=""><img src="http://loremflickr.com/200/150/car?random=6" alt="" width="100%" class="img-thumbnail"></a>
					<h2 class="listing-car-value">R$ 55.900,00</h2>
					<h3 class="listing-car-name">Ford Ecosport</h3>
					<p><em>1.6 XLS FREESTYLE 8V FLEX 4P MANUAL - 2012/2013</em></p>
					<a href="#" class="btn btn-danger btn-block" title=""><span class="hidden-xs">Clique e </span>Bote o Preço!</a>
				</div>
				<div class="listing-item col-xs-6 col-md-3">
					<a class="listing-item-image" href="#" title=""><img src="http://loremflickr.com/200/150/car?random=7" alt="" width="100%" class="img-thumbnail"></a>
					<h2 class="listing-car-value">R$ 46.000,00</h2>
					<h3 class="listing-car-name">Toyota Corola</h3>
					<p><em>1.8 XEI 16V FLEX 4P AUTOMÁTICO - 2009/2010</em></p>
					<a href="#" class="btn btn-danger btn-block" title=""><span class="hidden-xs">Clique e </span>Bote o Preço!</a>
				</div>
			</div>
		</div><!-- listing listing-offers -->
		<div class="advertising-full-width">
			<div class="row">
				<div class="advertising-image-wrapper col-xs-12">
					<div class="advertising-label label label-warning">propaganda</div>
					<a href="#" title="">
						<img src="http://loremflickr.com/1280/76/bank" alt="" width="100%" height="98">
					</a>
				</div>
			</div>
		</div><!-- advertising full width -->
		<div class="listing listing-negotiation">
			<div class="row">
				<div class="col-xs-12">
					<div class="page-header page-header-index">
						<h1>Negociamos sua proposta. <small>Bote Preço!</small></h1>
					</div>
				</div>
				<div class="clearfix">
					<div class="search-form-negotiation col-md-6">
						<form class="form row" action="/" method="post">
							<div class="form-group form-group-sm col-xs-4 col-md-6">
							    <label for="order">Ordenação</label>
								<select class="form-control" id="order" name="order">
								 	<option value="0" selected="selected">Aleatório</option>
								 	<option value="1">Preço (decrescente)</option>
								 	<option value="2">Preço (crescente)</option>
								 	<option value="3">Ano (mais novos primeiro)</option>
								 	<option value="4">Ano (mais antigos primeiro)</option>
								 	<option value="5">Cadastrados há menos tempo</option>
								 	<option value="6">Cadastrados há mais tempo</option>
								 	<option value="7">Marca / Modelo</option>
								</select>
							</div><!-- Order -->
							<div class="form-group form-group-sm col-xs-4 col-md-3">
							    <label for="show">Exibição</label>
								<select class="form-control" id="show" name="show">
								 	<option value="0" selected="selected">grade</option>
									<option value="1">lista</option>
								</select>
							</div><!-- Order -->
							<div class="form-group form-group-sm col-xs-4 col-md-3">
							    <label for="order">Paginação</label>
								<select class="form-control" id="order" name="order">
									<option value="12" selected="selected">12</option>
									<option value="20">20</option>
									<option value="40">40</option>
									<option value="60">60</option>
								</select>
							</div><!-- Order -->
						</form>
					</div>
					<div class="listing-negotiation-pagination col-md-6">
						<nav>
						    <ul class="pagination">
						        <li class="disabled hidden-xs hidden-sm">
						          	<a href="#" aria-label="Previous" title="">
						            	<span aria-hidden="true">anterior</span>
						        	</a>
						        </li>
						        <li class="active"><a href="#" title="">1</a></li>
						        <li><a href="#" title="">2</a></li>
						        <li><a href="#" title="" title="">3</a></li>
						        <li><a href="#" title="">4</a></li>
						        <li><a href="#" title="">5</a></li>
						        <li class="disabled" title=""><a href="#">...</a></li>
						        <li><a href="#" title="">89</a></li>
						        <li><a href="#" title="">90</a></li>
						        <li class=" hidden-xs hidden-sm">
						         	<a href="#" aria-label="Next" title="">
						            	<span aria-hidden="true">próxima</span>
						        	</a>
						        </li>
						    </ul>
						</nav>
					</div>
				</div><!-- filter and pagination -->
				<div class="listing-item col-xs-6 col-md-3">
					<a class="listing-item-image" href="#" title=""><img src="http://loremflickr.com/200/150/car?random=20" alt="" width="100%" class="img-thumbnail"></a>
					<h2 class="listing-car-value">R$ 55.900,00</h2>
					<h3 class="listing-car-name">Ford Ecosport</h3>
					<p><em>1.6 XLS FREESTYLE 8V FLEX 4P MANUAL - 2012/2013</em></p>
					<a href="#" class="btn btn-danger btn-block" title=""><span class="hidden-xs">Clique e </span>Bote o Preço!</a>
				</div>
				<div class="listing-item col-xs-6 col-md-3">
					<a class="listing-item-image" href="#" title=""><img src="http://loremflickr.com/200/150/car?random=21" alt="" width="100%" class="img-thumbnail"></a>
					<h2 class="listing-car-value">R$ 46.000,00</h2>
					<h3 class="listing-car-name">Toyota Corola</h3>
					<p><em>1.8 XEI 16V FLEX 4P AUTOMÁTICO - 2009/2010</em></p>
					<a href="#" class="btn btn-danger btn-block" title=""><span class="hidden-xs">Clique e </span>Bote o Preço!</a>
				</div>
				<div class="clearfix visible-xs-block visible-sm-block"></div>
				<div class="listing-item col-xs-6 col-md-3">
					<a class="listing-item-image" href="#" title=""><img src="http://loremflickr.com/200/150/car?random=22" alt="" width="100%" class="img-thumbnail"></a>
					<h2 class="listing-car-value">R$ 35.900,00</h2>
					<h3 class="listing-car-name">Chevrolet Blazer</h3>
					<p><em>2.4 MPFI ADVANTAGE 4X2 8V FLEXPOWER 4P MANUAL - 2008/2008</em></p>
					<a href="#" class="btn btn-danger btn-block" title=""><span class="hidden-xs">Clique e </span>Bote o Preço!</a>
				</div>
				<div class="listing-item col-xs-6 col-md-3">
					<a class="listing-item-image" href="#" title=""><img src="http://loremflickr.com/200/150/car?random=23" alt="" width="100%" class="img-thumbnail"></a>
					<h2 class="listing-car-value">R$ 22.900,00</h2>
					<h3 class="listing-car-name">Honda Civic</h3>
					<p><em>1.7 LX SEDAN 16V GASOLINA 4P MANUAL - 2004/2005</em></p>
					<a href="#" class="btn btn-danger btn-block" title=""><span class="hidden-xs">Clique e </span>Bote o Preço!</a>
				</div>
				<div class="clearfix visible-xs-block visible-sm-block"></div>
				<div class="listing-item col-xs-6 col-md-3">
					<a class="listing-item-image" href="#" title=""><img src="http://loremflickr.com/200/150/car?random=24" alt="" width="100%" class="img-thumbnail"></a>
					<h2 class="listing-car-value">R$ 35.900,00</h2>
					<h3 class="listing-car-name">Chevrolet Blazer</h3>
					<p><em>2.4 MPFI ADVANTAGE 4X2 8V FLEXPOWER 4P MANUAL - 2008/2008</em></p>
					<a href="#" class="btn btn-danger btn-block" title=""><span class="hidden-xs">Clique e </span>Bote o Preço!</a>
				</div>
				<div class="listing-item col-xs-6 col-md-3">
					<a class="listing-item-image" href="#" title=""><img src="http://loremflickr.com/200/150/car?random=25" alt="" width="100%" class="img-thumbnail"></a>
					<h2 class="listing-car-value">R$ 22.900,00</h2>
					<h3 class="listing-car-name">Honda Civic</h3>
					<p><em>1.7 LX SEDAN 16V GASOLINA 4P MANUAL - 2004/2005</em></p>
					<a href="#" class="btn btn-danger btn-block" title=""><span class="hidden-xs">Clique e </span>Bote o Preço!</a>
				</div>
				<div class="clearfix visible-xs-block visible-sm-block"></div>
				<div class="listing-item col-xs-6 col-md-3">
					<a class="listing-item-image" href="#" title=""><img src="http://loremflickr.com/200/150/car?random=26" alt="" width="100%" class="img-thumbnail"></a>
					<h2 class="listing-car-value">R$ 55.900,00</h2>
					<h3 class="listing-car-name">Ford Ecosport</h3>
					<p><em>1.6 XLS FREESTYLE 8V FLEX 4P MANUAL - 2012/2013</em></p>
					<a href="#" class="btn btn-danger btn-block" title=""><span class="hidden-xs">Clique e </span>Bote o Preço!</a>
				</div>
				<div class="listing-item col-xs-6 col-md-3">
					<a class="listing-item-image" href="#" title=""><img src="http://loremflickr.com/200/150/car?random=27" alt="" width="100%" class="img-thumbnail"></a>
					<h2 class="listing-car-value">R$ 46.000,00</h2>
					<h3 class="listing-car-name">Toyota Corola</h3>
					<p><em>1.8 XEI 16V FLEX 4P AUTOMÁTICO - 2009/2010</em></p>
					<a href="#" class="btn btn-danger btn-block" title=""><span class="hidden-xs">Clique e </span>Bote o Preço!</a>
				</div>
				<div class="clearfix visible-xs-block visible-sm-block"></div>
				<div class="listing-item col-xs-6 col-md-3">
					<a class="listing-item-image" href="#" title=""><img src="http://loremflickr.com/200/150/car?random=12" alt="" width="100%" class="img-thumbnail"></a>
					<h2 class="listing-car-value">R$ 55.900,00</h2>
					<h3 class="listing-car-name">Ford Ecosport</h3>
					<p><em>1.6 XLS FREESTYLE 8V FLEX 4P MANUAL - 2012/2013</em></p>
					<a href="#" class="btn btn-danger btn-block" title=""><span class="hidden-xs">Clique e </span>Bote o Preço!</a>
				</div>
				<div class="listing-item col-xs-6 col-md-3">
					<a class="listing-item-image" href="#" title=""><img src="http://loremflickr.com/200/150/car?random=13" alt="" width="100%" class="img-thumbnail"></a>
					<h2 class="listing-car-value">R$ 46.000,00</h2>
					<h3 class="listing-car-name">Toyota Corola</h3>
					<p><em>1.8 XEI 16V FLEX 4P AUTOMÁTICO - 2009/2010</em></p>
					<a href="#" class="btn btn-danger btn-block" title=""><span class="hidden-xs">Clique e </span>Bote o Preço!</a>
				</div>
				<div class="clearfix visible-xs-block visible-sm-block"></div>
				<div class="listing-item col-xs-6 col-md-3">
					<a class="listing-item-image" href="#" title=""><img src="http://loremflickr.com/200/150/car?random=14" alt="" width="100%" class="img-thumbnail"></a>
					<h2 class="listing-car-value">R$ 35.900,00</h2>
					<h3 class="listing-car-name">Chevrolet Blazer</h3>
					<p><em>2.4 MPFI ADVANTAGE 4X2 8V FLEXPOWER 4P MANUAL - 2008/2008</em></p>
					<a href="#" class="btn btn-danger btn-block" title=""><span class="hidden-xs">Clique e </span>Bote o Preço!</a>
				</div>
				<div class="listing-item col-xs-6 col-md-3">
					<a class="listing-item-image" href="#" title=""><img src="http://loremflickr.com/200/150/car?random=15" alt="" width="100%" class="img-thumbnail"></a>
					<h2 class="listing-car-value">R$ 22.900,00</h2>
					<h3 class="listing-car-name">Honda Civic</h3>
					<p><em>1.7 LX SEDAN 16V GASOLINA 4P MANUAL - 2004/2005</em></p>
					<a href="#" class="btn btn-danger btn-block" title=""><span class="hidden-xs">Clique e </span>Bote o Preço!</a>
				</div>
				<div class="clearfix visible-xs-block visible-sm-block"></div>
				<div class="listing-item col-xs-6 col-md-3">
					<a class="listing-item-image" href="#" title=""><img src="http://loremflickr.com/200/150/car?random=16" alt="" width="100%" class="img-thumbnail"></a>
					<h2 class="listing-car-value">R$ 35.900,00</h2>
					<h3 class="listing-car-name">Chevrolet Blazer</h3>
					<p><em>2.4 MPFI ADVANTAGE 4X2 8V FLEXPOWER 4P MANUAL - 2008/2008</em></p>
					<a href="#" class="btn btn-danger btn-block" title=""><span class="hidden-xs">Clique e </span>Bote o Preço!</a>
				</div>
				<div class="listing-item col-xs-6 col-md-3">
					<a class="listing-item-image" href="#" title=""><img src="http://loremflickr.com/200/150/car?random=17" alt="" width="100%" class="img-thumbnail"></a>
					<h2 class="listing-car-value">R$ 22.900,00</h2>
					<h3 class="listing-car-name">Honda Civic</h3>
					<p><em>1.7 LX SEDAN 16V GASOLINA 4P MANUAL - 2004/2005</em></p>
					<a href="#" class="btn btn-danger btn-block" title=""><span class="hidden-xs">Clique e </span>Bote o Preço!</a>
				</div>
				<div class="clearfix visible-xs-block visible-sm-block"></div>
				<div class="listing-item col-xs-6 col-md-3">
					<a class="listing-item-image" href="#" title=""><img src="http://loremflickr.com/200/150/car?random=18" alt="" width="100%" class="img-thumbnail"></a>
					<h2 class="listing-car-value">R$ 55.900,00</h2>
					<h3 class="listing-car-name">Ford Ecosport</h3>
					<p><em>1.6 XLS FREESTYLE 8V FLEX 4P MANUAL - 2012/2013</em></p>
					<a href="#" class="btn btn-danger btn-block" title=""><span class="hidden-xs">Clique e </span>Bote o Preço!</a>
				</div>
				<div class="listing-item col-xs-6 col-md-3">
					<a class="listing-item-image" href="#" title=""><img src="http://loremflickr.com/200/150/car?random=19" alt="" width="100%" class="img-thumbnail"></a>
					<h2 class="listing-car-value">R$ 46.000,00</h2>
					<h3 class="listing-car-name">Toyota Corola</h3>
					<p><em>1.8 XEI 16V FLEX 4P AUTOMÁTICO - 2009/2010</em></p>
					<a href="#" class="btn btn-danger btn-block" title=""><span class="hidden-xs">Clique e </span>Bote o Preço!</a>
				</div>
			</div>
			<div class="clearfix row">
				<div class="listing-negotiation-pagination">
					<nav>
					    <ul class="pagination">
					        <li class="disabled hidden-xs hidden-sm">
					          	<a href="#" aria-label="Previous">
					            	<span aria-hidden="true" title="">anterior</span>
					        	</a>
					        </li>
					        <li class="active"><a href="#" title="">1</a></li>
					        <li><a href="#" title="">2</a></li>
					        <li><a href="#" title="">3</a></li>
					        <li><a href="#" title="">4</a></li>
					        <li><a href="#" title="">5</a></li>
					        <li class="hidden-xs hidden-sm"><a href="#" title="">6</a></li>
					        <li class="hidden-xs hidden-sm"><a href="#" title="">7</a></li>
					        <li class="hidden-xs hidden-sm"><a href="#" title="">8</a></li>
					        <li class="hidden-xs hidden-sm"><a href="#" title="">9</a></li>
					        <li class="disabled"><a href="#" title="">...</a></li>
					        <li><a href="#" title="">89</a></li>
					        <li><a href="#" title="">90</a></li>
					        <li class="hidden-xs hidden-sm">
					         	<a href="#" aria-label="Next" title="">
					            	<span aria-hidden="true">próxima</span>
					        	</a>
					        </li>
					    </ul>
					</nav>
				</div>
			</div>
		</div><!-- listing listing-negotiation -->


<?php include 'footer.php'; ?>