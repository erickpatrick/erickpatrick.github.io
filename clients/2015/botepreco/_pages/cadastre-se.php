<?php include 'header.php'; ?>

		<div class="inner-content row">
			<div class="col-sm-8">
				<h1 class="inner-content-title inner-content-title-main">Cadastre-se</h1>
				<form action="/" class="form">
					<fieldset>
						<legend>Informe seus dados pessoais</legend>
						<div class="row">
							<div class="form-group form-group-sm has-warning col-sm-6">
								<label for="name" class="control-label">Nome</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Nome">
							</div>
							<div class="form-group form-group-sm has-warning col-sm-6">
								<label for="email" class="control-label">E-mail</label>
								<input type="text" class="form-control" id="email" name="email" placeholder="Email">
							</div>
						</div>
						<div class="row">
							<div class="form-group form-group-sm has-warning col-sm-6">
								<label for="password" class="control-label">Senha</label>
								<input type="password" class="form-control" id="password" name="initialValue" placeholder="Senha">
							</div>
							<div class="form-group form-group-sm has-warning col-sm-6">
								<label for="passwordConfirmation" class="control-label">Confirme a senha</label>
								<input type="password" class="form-control" id="passwordConfirmation" name="Confirme a senha" placeholder="Senha">
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Informe seus telefones para contato</legend>
						<div class="row">
							<div class="form-group form-group-sm has-warning col-sm-6">
								<label for="userType" class="control-label">Tipo de usuário</label>
								<select class="form-control" id="userType" name="userType">
									<option value="pf">Pessoa Física</option>
									<option value="pj">Pessoa Jurídica</option>
								</select>
							</div>
							<div class="form-group form-group-sm has-warning col-sm-6">
								<label for="cpf" class="control-label">CPF</label>
								<input type="text" class="form-control" id="cpf" name="CPF" placeholder="cpf">
								<span class="help-block">formato: 123.456.789-01</span>
							</div>
						</div>
						<div class="row">
							<div class="form-group form-group-sm has-warning col-sm-6">
								<label for="telephoneOne" class="control-label">Telefone 1</label>
								<input type="text" class="form-control" id="telephoneOne" name="telephoneOne" placeholder="">
								<span class="help-block">formato: (12) 3456-7890 ou (12) 23456-7890</span>
							</div>
							<div class="form-group form-group-sm col-sm-6">
								<label for="telephoneTwo">Telefone 2</label>
								<input type="text" class="form-control" id="telephoneTwo" name="telephoneTwo" placeholder="">
								<span class="help-block">formato: (12) 3456-7890 ou (12) 23456-7890</span>
							</div>
							<div class="form-group form-group-sm col-sm-6">
								<label for="telephoneThree">Telefone 3</label>
								<input type="text" class="form-control" id="telephoneThree" name="telephoneThree" placeholder="">
								<span class="help-block">formato: (12) 3456-7890 ou (12) 23456-7890</span>
							</div>
							<div class="form-group form-group-sm col-sm-6">
								<label for="celular">Celular</label>
								<input type="text" class="form-control" id="celular" name="celular" placeholder="">
								<span class="help-block">formato: (12) 3456-7890 ou (12) 23456-7890</span>
							</div>
						</div>
					</fieldset>
					<div class="search-form-advanced__button-wrapper form-group form-group-sm">
					    <button type="button" class="btn btn-danger btn-block">Realizar cadastro</button>
					</div><!-- Submit for -->
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