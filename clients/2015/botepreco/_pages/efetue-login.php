<?php include 'header.php'; ?>

		<div class="inner-content row">
			<div class="col-sm-8">
				<h1 class="inner-content-title inner-content-title-main">Efetue Login</h1>
				<form action="/" class="form">
					<div class="row">
						<div class="col-xs-12">
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group form-group-sm">
										<label for="email" class="control-label">E-mail</label>
										<input type="text" class="form-control" id="email" name="email" placeholder="Email">
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group form-group-sm">
										<label for="password" class="control-label">Senha</label>
										<input type="password" class="form-control" id="password" name="initialValue" placeholder="Senha">
									</div>
								</div>
								<div class="col-xs-12">
									<div class="search-form-advanced__button-wrapper form-group form-group-sm">
							    		<button type="button" class="btn btn-danger btn-block">Acessar conta</button>
									</div><!-- Submit for -->
								</div>
							</div>
						</div>
						<div class="login-help-buttons col-xs-12">
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group form-group-sm">
										<a href="#" class="btn btn-default btn-block">Esqueci a senha</a>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group form-group-sm">
										<a href="#" class="btn btn-default btn-block">Ainda não sou usuário</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-4">
				<div class="search-form-quick">
					<div>
						<div class="col-xs-12">
							<form action="" class="form">
								<h4 class="search-form-quick-sidebar-title">Busca Rápida</h4>
								<div class="input-group">
									<input class="form-control" placeholder="" type="text">
									<span class="input-group-btn">
										<button class="btn btn-danger" type="button">Buscar</button>
									</span>
								</div>
							</form>
						</div>
					</div>
				</div><!-- search form quick -->
				<a href="http://botepreco.com" title="botepreco.com">
					<img src="http://botepreco.com/system/internalbanners/8/size400x200/cadastro.jpg?2014" alt="" width="100%">
				</a>
			</div>
		</div>


<?php include 'footer.php'; ?>