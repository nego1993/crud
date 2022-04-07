<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2"></h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<a href="<?= base_url()?>colaborador/adicionar" class="btn btn-sm btn-outline-secondary">
				<i class="fas fa-plus-square"></i> Adicionar Colaborador</a>
			</div>
		</div>
	</div>

	<div class="form-group">
		<h2>Colaboradores</h2>
	</div>

	<div class="table-responsive">
		<table class="table table-sm table-dark">
			<thead>
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">Usuário</th>
					<th scope="col">Email</th>
					<th scope="col">Endereço</th>
					<th scope="col">CPF</th>
					<th scope="col">Senha</th>
					<th scope="col">Ações</th>
					
				</tr>
			</thead>
			<tbody>
			<?php foreach($usuario as $usuario): ?>
				<tr>
					<td><?= $usuario['nome'] ?></td>
					<td><?= $usuario['usuario'] ?></td>
					<td><?= $usuario['email'] ?></td>
					<td><?= $usuario['endereco'] ?></td>
					<td><?= $usuario['cpf'] ?></td>
					<td><?= $usuario['senha'] ?></td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>

</main>
