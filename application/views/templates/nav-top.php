<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Manyminds</a>
	<div>
		<form action="" method="post">
			<input class="form-control form-control-dark" type="text" name="busca" id="busca" 
      placeholder="Search" aria-label="Search" value="">
		</form>
	</div>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <h6 class="form-control">
          <span>Menu</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>colaborador">
              <span data-feather="file"></span>
              Colaborador / Fornecedor
            </a>
          </li>
					<li class="nav-item">
            <a class="nav-link" href="">
              <span data-feather="shopping-cart"></span>
              Produtos
            </a>
          </li>
        </ul>
      </div>
    </nav>