<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
	  align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"></h1>
      </div>

			<div class="col-md-12"
			
						<?php if(isset($usuario)) : ?>		
					<form action="<?=base_url() ?>colaborador/atualizar/<?= $usuario['id'] ?>" 
					method="post">
						<?php else : ?>
					<form action="<?=base_url() ?>colaborador/dados_colaborador" method="post">
					<?php endif; ?>
					<div class="col-md-6">
						<div class="form-group">
							<label for="nome">Nome</label>
							<input type="text" class="form-control" name="nome" id="nome" 
                            placeholder="nome" required value="<?= isset($usuario) ? $usuario["nome"] :"" ?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="usuario">Usuario</label>
							<input name="usuario" id="usuario" class="form-control" required value="<?= isset($usuario) ? $usuario["usuario"] :"" ?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="text" class="form-control" name="email" id="email"
                             placeholder="Insira o seu email" required value="<?= isset($usuario) ? $usuario["email"] :"" ?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="endereco">Endereço</label>
							<input type="text" class="form-control" name="endereco" id="endereco" 
                            placeholder="endereco" required value="<?= isset($usuario) ? $usuario["endereco"] :"" ?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="cpf">CPF</label>
							<input type="number" class="form-control" name="cpf" id="cpf" 
                            placeholder="cpf" pattern="d{3}.\d{3}.\d{3}-d{2}" required value="<?= isset($usuario) ? $usuario["cpf"] :"" ?>">
						</div>
					</div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" minlength="6" class="form-control" name="Senha" required>
                        </div>
                    </div>

					<div class="col-md-6">
							<button type="submit" class="btn btn-success btn-xs">
								<i class="fas fa-check"></i> Salvar</button>
							<a href="<?= base_url() ?>colaborador" class="btn btn-danger btn-xs">
							<i class="fas fa-times"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>

    </main>
  </div>
</div>
