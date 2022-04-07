	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Elementos</h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
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
				
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2">Fornecedores</h2>
	</div>

	<div class="table-responsive">
		<table class="table table-sm table-dark">
			<thead>
				<tr>
					<th>Nome</th>
					<th>CPF</th>
					<th>Empresa</th>
				</tr>	
			</thead>

        <tbody>
			
        </tbody>
    </table>
  </div>

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2">Produtos</h2>
  </div>

  <div class="table-responsive">
		<table class="table table-sm table-dark">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Descrição</th>
					<th>Preço</th>
				</tr>
      </thead>
		</table>
	</div>
</main>
