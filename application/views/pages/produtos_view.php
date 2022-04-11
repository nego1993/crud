<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

	<br>
	<br>
		<a href="http://localhost/crud">
            <button type="button" class="btn btn-danger">Voltar</button>
        </a>
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2"></h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<a href="<?= base_url()?>produtos/adicionar" class="btn btn-sm btn-outline-secondary">
				<i class="fas fa-plus-square"></i> Adicionar produtos</a>
			</div>
		</div>
	</div>

	<div class="form-group">
		<h2>Produtos</h2>
	</div>

	<div class="table-responsive">
		<table class="table table-sm table-dark">
			<thead>
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">Descrição</th>
					<th scope="col">Preço</th>
					<th scope="col">Ações</th>
					
				</tr>
			</thead>
			<tbody>
			<?php foreach($produtos as $produto): ?>
				<tr>
				
					<td><?= $produto['nome'] ?></td>
					<td><?= $produto['descricao'] ?></td>
					<td><?= $produto['preco'] ?></td>
					<td>
			
						<?php if($produto['ativo'] != '0') : ?>
						<a href="<?= base_url()?>produtos/editar/<?= $produto["id"] ?>" 
						class="btn btn-outline-primary" >
						<i class="fas fa-pencil-alt"></i>
						</a>
						<?php endif	; ?>
							
						<?php if($produto['ativo'] == '1') : ?>	
						<a href="#" class="btn btn-success btn-lg disabled" tabindex="-1" 
						="button" aria-disabled="true">A</a>
						<?php endif ; ?>

						<?php if($produto['ativo'] == '0') : ?>
						<a href="#" class="btn btn-danger btn-lg disabled" tabindex="-1" 
						role="button" aria-disabled="true">I</a>
						<?php endif ; ?>
								
																	
										</td>
									</tr>
						<?php endforeach;?>
							</tbody>
						</table>
					</div>
				</main>