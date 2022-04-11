<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
	  align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"></h1>
      </div>

			<div class="col-md-12">	

			<?php if(isset($produtos)) : ?>		
					<form action="<?=base_url() ?>produtos/update/<?= $produtos['id']?>" 
					method="post">
						<?php else : ?>
					<form action="<?=base_url() ?>produtos/dados_produto/" method="post">
						<?php endif; ?>
				
					<div class="col-md-6">
						<div class="form-group">
							<label for="nome">Nome</label>
							<input type="text" class="form-control" name="nome" id="nome" 
                            placeholder="nome" required value="<?= isset($produtos) ? $produtos["nome"] :"" ?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="usuario">Descrição</label>
							<input name="descricao" id="descricão" class="form-control" required 
                            value="<?= isset($produtos) ? $produtos["descricao"] :"" ?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="preco">Preço</label>
							<input type="price" class="form-control" name="preco" id="preco"
                             placeholder="Preço" required value="<?= isset($produtos) ? $produtos["preco"] :"" ?>">
						</div>
					</div>

					<div class="form-group">
        				<label>Ativo</label>
        					<select class="form-control" name="ativo" id="ativo" style="width: 30%">
								<option value="1">Ativo</option>
            					<option value="0">Inativo</option>
        					</select>
    				</div>

					<div class="col-md-6">
							<button type="submit" class="btn btn-success btn-xs">
								<i class="fas fa-check"></i> Salvar</button>
							<a href="<?= base_url() ?>produtos" class="btn btn-danger btn-xs">
							<i class="fas fa-times"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>

    </main>
  </div>
</div>