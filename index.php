<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<title>Projeto Estudos</title>
	<link rel="stylesheet" type="text/css" href="bootstrap4.5/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap4.5/css/bootstrap-reboot.min.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap4.5/css/style.css"/>
</head>
<body>
	<article>
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-static-top fixed-top">
				<div class="container">
					<a class="navbar-brand h1 mb-0 " href="#" title="Projeto Estudos" data-toggle="tooltip" data-placement="bottom">Projeto Estudo</a>
					<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#NavbarMenu">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="NavbarMenu">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item"><a class="nav-link text-light" href="#Sobre">Sobre</a></li>
							<li class="nav-item"><a class="nav-link text-light" href="#Produtos">Produtos</a></li>
							<li class="nav-item"><a class="nav-link text-light" href="#Representacoes">Representações</a></li>
							<li class="nav-item"><a class="nav-link text-light" href="#Contato">Contato</a></li>
							<li class="nav-item"><a class="nav-link text-light" href="#Demonstracoes">Demonstrações</a></li>
						</ul>
						<ul class="navbar-nav ml-auto">
							<li class="nav-item dropdown">
								<a class="nav-link text-light dropdown-toggle mr-2" data-toggle="dropdown" data-target="#DropdownMenu" href="#">Midias Sociais</a>
								<div class="dropdown-menu bg-dropdown-item" id="DropdownMenu">
									<a class="dropdown-item text-primary" href="#"><img src="images/facebook.svg" width="20" class="img-fluid mr-1 mb-1"/>Facebook</a>
									<a class="dropdown-item text-primary" href="#"><img src="images/instagram.svg" width="20" class="img-fluid mr-1 mb-1"/>Instagram</a>
									<a class="dropdown-item text-primary" href="#"><img src="images/twitter.svg" width="20" class="img-fluid mr-1 mb-1"/>Twitter</a>
									<a class="dropdown-item text-primary" href="#"><img src="images/whatsapp.svg" width="20" class="img-fluid mr-1 mb-1"/>Whatsapp</a>
								</div>
							</li>
						</ul>
						<div class="">
							<form class="form-inline">
								<input type="search" name="search" class="form-control form-control-md mr-1" autocomplete="off" placeholder=" Search... "/>
								<button type="submit" class="btn btn-success btn-md shadown-sm">Search</button>
							</form>
						</div>
					</div>
				</div>
			</nav>
		</header>
		<section>
			<section id="Inicio">
				<div class="carousel slid" id="CarouselSlide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#CarouselSlide" data-slide-to="0" class="active"></li>
						<li data-target="#CarouselSlide" data-slide-to="1"></li>
						<li data-target="#CarouselSlide" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="images/img01.jpg" class="d-block w-100"/>
							<div class="carousel-caption d-none d-md-block">
	    						<h5 class="text-dark display-5">Lorem ipsum dolor sit amet.</h5>
	    						<p>Ut eu enim varius libero cursus bibendum. Nulla laoreet ligula mauris, nec vulputate dolor commodo vitae.</p>
	  						</div>
						</div>
						<div class="carousel-item">
							<img src="images/img02.jpg" class="d-block w-100"/>
							<div class="carousel-caption d-none d-md-block">
	    						<h5 class="text-dark  display-5">Lorem ipsum dolor sit amet.</h5>
	    						<p>Sed pulvinar tristique nulla ut laoreet. Nam vestibulum nisi et convallis placerat. Donec molestie magna sed diam maximus, porta tempor lorem venenatis.</p>
	  						</div>
						</div>
						<div class="carousel-item">
							<img src="images/img03.jpg" class="d-block w-100"/>
							<div class="carousel-caption d-none d-md-block">
	    						<h5 class="text-dark  display-5">Lorem ipsum dolor sit amet.</h5>
	    						<p>Aliquam erat volutpat. Vestibulum suscipit vitae nulla consectetur sollicitudin. Pellentesque ex turpis, porttitor sit amet massa ac, blandit lobortis est.</p>
	  						</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#CarouselSlide" role="button" data-slide="prev">
	    				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    				<span class="sr-only">Anterior</span>
	  				</a>
	  				<a class="carousel-control-next" href="#CarouselSlide" role="button" data-slide="next">
	    				<span class="carousel-control-next-icon" aria-hidden="true"></span>
	    				<span class="sr-only">Próximo</span>
	  				</a>
				</div>
			</section>
			<section id="Sobre">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 order-1 my-5">
							<div class="h2 page-header text-primary bd-lead display-5">About</div>
							<p class="text-dark lead mb-0">
								Duis congue metus eu nunc fringilla, quis fermentum nibh dapibus. Nunc eget imperdiet ipsum. Nullam congue, nunc a luctus suscipit, dui eros tempor urna, sit amet eleifend justo est in orci. Mauris massa dolor, euismod ac orci quis, luctus gravida massa. Nunc quam velit, gravida non ante nec, vestibulum pulvinar neque. Aenean a posuere est. Phasellus dui massa, tempus in convallis vel, sagittis vel odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
								Curabitur eget felis vel mi vehicula iaculis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices. Curabitur eget felis vel mi vehicula iaculis.
							</p>
						</div>
						<div class="col-sm-6 order-2 my-5">
							<img src="images/img04.jpg" class="img-fluid img-responsive shadown-sm"/>
						</div>
					</div>
				</div>
			</section>
			<section id="Produtos">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 order-1 my-5">
							<div class="h2 page-header text-primary bd-lead  display-5">Get to Know Our Products</div>
							<p class="text-dark lead mb-0">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mollis erat at arcu aliquam, eu varius felis tempus. Sed in libero eu odio vulputate egestas. Mauris turpis augue, lobortis sit amet pharetra volutpat, elementum eu nunc. Morbi justo lorem, mattis sit amet mauris consectetur, consectetur tincidunt dolor. Integer venenatis, orci ac tempor vulputate, lorem libero tincidunt ipsum, ac euismod nulla dui id lacus. Suspendisse diam urna, fermentum in velit eu, pharetra facilisis mauris. Fusce aliquet imperdiet urna id maximus. Nullam fermentum nunc pretium, tempor dolor rutrum, pharetra neque.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3 order-1 mb-5">
							<img src="images/produto01.jpeg" class="img-fluid img-responsive shadown-sm"/>
						</div>
						<div class="col-sm-3 order-2 mb-5">
							<img src="images/produto02.jpeg" class="img-fluid img-responsive shadown-sm"/>
						</div>
						<div class="col-sm-3 order-3 mb-5">
							<img src="images/produto03.jpeg" class="img-fluid img-responsive shadown-sm"/>
						</div>
						<div class="col-sm-3 order-4 mb-5">
							<img src="images/produto04.jpeg" class="img-fluid img-responsive shadown-sm"/>
						</div>
					</div>
				</div>
			</section>
			<section id="Representacoes">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 order-1 my-5">
							<div class="h2 page-header text-primary bd-lead  display-5">Meet our representatives</div>
							<p class="text-dark lead mb-0">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mollis erat at arcu aliquam, eu varius felis tempus. Sed in libero eu odio vulputate egestas. Mauris turpis augue, lobortis sit amet pharetra volutpat, elementum eu nunc. Morbi justo lorem, mattis sit amet mauris consectetur, consectetur tincidunt dolor. Integer venenatis, orci ac tempor vulputate, lorem libero tincidunt ipsum, ac euismod nulla dui id lacus. Suspendisse diam urna, fermentum in velit eu, pharetra facilisis mauris. Fusce aliquet imperdiet urna id maximus. Nullam fermentum nunc pretium, tempor dolor rutrum, pharetra neque.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3 order-1 mb-5">
							<img src="images/representante01.jpeg" class="img-fluid img-responsive shadown-sm"/>
							<div class="bg text-center">
								<button type="button" class="btn btn-outline-primary btn-md shadown-sm buttonInfo my-2">Informações</button>
							</div>
						</div>
						<div class="col-sm-3 order-2 mb-5">
							<img src="images/representante02.jpeg" class="img-fluid img-responsive shadown-sm"/>
							<div class="bg text-center">
								<button type="button" class="btn btn-outline-primary btn-md shadown-sm buttonInfo my-2">Informações</button>
							</div>
						</div>
						<div class="col-sm-3 order-3 mb-5">
							<img src="images/representante03.jpeg" class="img-fluid img-responsive shadown-sm"/>
							<div class="bg text-center">
								<button type="button" class="btn btn-outline-primary btn-md shadown-sm buttonInfo my-2">Informações</button>
							</div>
						</div>
						<div class="col-sm-3 order-4 mb-5">
							<img src="images/representante04.jpeg" class="img-fluid img-responsive shadown-sm"/>
							<div class="bg text-center">
								<button type="button" class="btn btn-outline-primary btn-md shadown-sm buttonInfo my-2">Informações</button>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="Contato">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 order-1 my-5">
							<div class="h2 page-header text-primary bd-lead  display-5">Contact</div>
							<div class="alert alert-info fade show alert-dismissible shadown-sm" role="alert">
								<span class="text-dark">Preencha os campos abaixo corretamente !!</span>
							</div>
							<form name="contact" method="POST" action="#">
								<div class="form-row">
									<div class="col-sm-6 order-1">
										<div class="form-group">
											<label class="text-dark lead form-label font-weight-normal" for="nome">Nome</label>
											<input type="text" name="nome" class="form-control form-control-md" autocomplete="off" placeholder=" Nome.. " id="nome" required/>
										</div>
									</div>
									<div class="col-sm-6 order-2">
										<div class="form-group">
											<label class="text-dark lead form-label font-weight-normal" for="email">E-Mail</label>
											<input type="email" name="email" class="form-control form-control-md" autocomplete="off" placeholder=" E-Mail.. " id="email" required/>
										</div>
									</div>
									<div class="col-sm-6 order-3">
										<div class="form-group">
											<label class="text-dark lead form-label font-weight-normal" for="telefone">Telefone</label>
											<input type="tel" name="telefone" class="form-control form-control-md" autocomplete="off" placeholder=" Telefone.. " id="telefone" required/>
										</div>
									</div>
									<div class="col-sm-6 order-4">
										<div class="form-group">
											<label class="text-dark lead form-label font-weight-normal" for="assunto">Assunto</label>
											<input type="text" name="assunto" class="form-control form-control-md" autocomplete="off" placeholder=" Assunto.. " id="assunto" required/>
										</div>
									</div>
									<div class="col-sm-12 order-5">
										<div class="form-group">
											<label class="text-dark lead form-label font-weight-normal" for="mensagem">Mensagem</label>
											<textarea name="mensagem" rows="4" class="form-control form-control-md" autocomplete="off" placeholder=" Mensagem.. " id="mensagem"></textarea>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-sm-6 order-1">
										<div class="form-group">
											<button type="submit" class="btn btn-success btn-md shadown-sm">Enviar</button>
											<button type="reset" class="btn btn-danger btn-md shadown-sm">Resetar</button>
										</div>
									</div>
								</div>
							</form>
							<p class="text-dark mb-0 my-1"><img src="images/mail.svg" width="30" class="img-responsive mr-1"/>
								<a href="https://www.hotmail.com/send=projetoestudo@hotmail.com" style="text-decoration: none;">projetoestudo@hotmail.com</a>
							</p>
							<p class="text-dark mb-0"><img src="images/phone.svg" width="30" class="img-responsive mr-2"/>(44) 0000-0000</p>
						</div>
					</div>
				</div>
			</section>
			<section id="Demonstracoes">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 order-1 my-5">
							<div class="h2 page-header text-primary bd-lead  display-5">See some of our demos</div>
							<p class="text-dark lead mb-0">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mollis erat at arcu aliquam, eu varius felis tempus. Sed in libero eu odio vulputate egestas. Mauris turpis augue, lobortis sit amet pharetra volutpat, elementum eu nunc. Morbi justo lorem, mattis sit amet mauris consectetur, consectetur tincidunt dolor.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3 order-1 mb-5">
							<img src="images/demo01.jpeg" class="img-fluid img-responsive shadown-sm"/>
						</div>
						<div class="col-sm-3 order-2 mb-5">
							<img src="images/demo01.jpeg" class="img-fluid img-responsive shadown-sm"/>
						</div>
						<div class="col-sm-3 order-3 mb-5">
							<img src="images/demo01.jpeg" class="img-fluid img-responsive shadown-sm"/>
						</div>
						<div class="col-sm-3 order-4 mb-5">
							<img src="images/demo01.jpeg" class="img-fluid img-responsive shadown-sm"/>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3 order-1 mb-5">
							<img src="images/demo01.jpeg" class="img-fluid img-responsive shadown-sm"/>
						</div>
						<div class="col-sm-3 order-2 mb-5">
							<img src="images/demo01.jpeg" class="img-fluid img-responsive shadown-sm"/>
						</div>
						<div class="col-sm-3 order-3 mb-5">
							<img src="images/demo01.jpeg" class="img-fluid img-responsive shadown-sm"/>
						</div>
						<div class="col-sm-3 order-4 mb-5">
							<img src="images/demo01.jpeg" class="img-fluid img-responsive shadown-sm"/>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 order-1">
							<div class="h2 page-header text-primary bd-lead  display-5">top sellers</div>
							<p class="text-dark lead mb-0">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut blandit nibh quam, eu finibus elit maximus vitae. Vivamus rhoncus nisl at nibh aliquam, at gravida nibh tincidunt. Sed rutrum mollis odio. Phasellus pretium ornare tellus vel finibus. Suspendisse imperdiet hendrerit blandit. Nulla facilisi. Aenean varius turpis sed ligula pharetra congue.
							</p>
						</div>
						<div class="col-sm-3 order-1 mb-5 my-5">
							<img src="images/vendido01.jpeg" class="img-fluid img-responsive shadown-sm"/>
							<div class="bg-light text-center">
								<button type="button" class="btn btn-outline-primary btn-md shadown-sm buttonInfo my-2" data-toggle="modal" data-target="#ModalDetalhes01">Detalhes</button>
								<div class="modal fade" id="ModalDetalhes01" role="dialog">
									<div class="modal-dialog shadown-sm modal-lg" role="document">
										<div class="modal-content">
											<div class="modal-header bg-light">
												<h5 class="modal-title text-dark font-weight-normal">Detalhes</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<p class="text-dark text-left">
													Etiam eget diam imperdiet, sollicitudin sem vitae, vehicula ante. Maecenas quis mauris sed lorem semper aliquam. Sed finibus sit amet quam eget finibus. Nulla condimentum convallis mi in consectetur. Curabitur a porttitor risus. Vivamus sagittis tempor rhoncus. Pellentesque imperdiet vulputate lorem, eu sollicitudin lorem faucibus vel. Ut tortor est, varius suscipit posuere in, condimentum vel justo. Vivamus ac ligula blandit, faucibus magna eget, pulvinar lectus. Nulla pellentesque libero quis enim elementum, vitae condimentum dui eleifend.
												</p>
											</div>
											<div class="modal-footer bg-light">
												<button type="button" class="btn btn-danger btn-md shadown-sm" data-dismiss="modal">Fechar</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-3 order-2 mb-5 my-5">
							<img src="images/vendido02.jpeg" class="img-fluid img-responsive shadown-sm"/>
							<div class="bg-light text-center">
								<button type="button" class="btn btn-outline-primary btn-md shadown-sm buttonInfo my-2" data-toggle="modal" data-target="#ModalDetalhes02">Detalhes</button>
								<div class="modal fade" id="ModalDetalhes02" role="dialog">
									<div class="modal-dialog shadown-sm modal-lg" role="document">
										<div class="modal-content">
											<div class="modal-header bg-light">
												<h5 class="modal-title text-dark font-weight-normal">Detalhes</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<p class="text-dark text-left">
													Etiam eget diam imperdiet, sollicitudin sem vitae, vehicula ante. Maecenas quis mauris sed lorem semper aliquam. Sed finibus sit amet quam eget finibus. Nulla condimentum convallis mi in consectetur. Curabitur a porttitor risus. Vivamus sagittis tempor rhoncus. Pellentesque imperdiet vulputate lorem, eu sollicitudin lorem faucibus vel. Ut tortor est, varius suscipit posuere in, condimentum vel justo. Vivamus ac ligula blandit, faucibus magna eget, pulvinar lectus. Nulla pellentesque libero quis enim elementum, vitae condimentum dui eleifend.
												</p>
											</div>
											<div class="modal-footer bg-light">
												<button type="button" class="btn btn-danger btn-md shadown-sm" data-dismiss="modal">Fechar</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-3 order-3 mb-5 my-5">
							<img src="images/vendido03.jpeg" class="img-fluid img-responsive shadown-sm"/>
							<div class="bg-light text-center">
								<button type="button" class="btn btn-outline-primary btn-md shadown-sm buttonInfo my-2" data-toggle="modal" data-target="#ModalDetalhes03">Detalhes</button>
								<div class="modal fade" id="ModalDetalhes03" role="dialog">
									<div class="modal-dialog shadown-sm modal-lg" role="document">
										<div class="modal-content">
											<div class="modal-header bg-light">
												<h5 class="modal-title text-dark font-weight-normal">Detalhes</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<p class="text-dark text-left">
													Etiam eget diam imperdiet, sollicitudin sem vitae, vehicula ante. Maecenas quis mauris sed lorem semper aliquam. Sed finibus sit amet quam eget finibus. Nulla condimentum convallis mi in consectetur. Curabitur a porttitor risus. Vivamus sagittis tempor rhoncus. Pellentesque imperdiet vulputate lorem, eu sollicitudin lorem faucibus vel. Ut tortor est, varius suscipit posuere in, condimentum vel justo. Vivamus ac ligula blandit, faucibus magna eget, pulvinar lectus. Nulla pellentesque libero quis enim elementum, vitae condimentum dui eleifend.
												</p>
											</div>
											<div class="modal-footer bg-light">
												<button type="button" class="btn btn-danger btn-md shadown-sm" data-dismiss="modal">Fechar</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-3 order-4 mb-5 my-5">
							<img src="images/vendido01.jpeg" class="img-fluid img-responsive shadown-sm"/>
							<div class="bg-light text-center">
								<button type="button" class="btn btn-outline-primary btn-md shadown-sm buttonInfo my-2" data-toggle="modal" data-target="#ModalDetalhes04">Detalhes</button>
								<div class="modal fade" id="ModalDetalhes04" role="dialog">
									<div class="modal-dialog shadown-sm modal-lg" role="document">
										<div class="modal-content">
											<div class="modal-header bg-light">
												<h5 class="modal-title text-dark font-weight-normal">Detalhes</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<p class="text-dark text-left">
													Etiam eget diam imperdiet, sollicitudin sem vitae, vehicula ante. Maecenas quis mauris sed lorem semper aliquam. Sed finibus sit amet quam eget finibus. Nulla condimentum convallis mi in consectetur. Curabitur a porttitor risus. Vivamus sagittis tempor rhoncus. Pellentesque imperdiet vulputate lorem, eu sollicitudin lorem faucibus vel. Ut tortor est, varius suscipit posuere in, condimentum vel justo. Vivamus ac ligula blandit, faucibus magna eget, pulvinar lectus. Nulla pellentesque libero quis enim elementum, vitae condimentum dui eleifend.
												</p>
											</div>
											<div class="modal-footer bg-light">
												<button type="button" class="btn btn-danger btn-md shadown-sm" data-dismiss="modal">Fechar</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</section>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 order-1 my-5">
						<p class="text-dark text-center font-weight-normal">www.projetoestudo.com.br</p>
						<p class="text-dark text-center font-weight-normal">CopyRight 2020 - Projeto Estudo</p>
						<p class="text-dark text-center font-weight-normal mb-0">WebSite Developed By Roger Panosso</p>
					</div>
				</div>
			</div>
		</footer>
	</article>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="bootstrap4.5/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="bootstrap4.5/js/script.js"></script>
</body>
</html>