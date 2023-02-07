<!-- Provider Register Modal -->
<div class="modal account-modal fade multi-step" id="user-register" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header p-0 border-0">
					<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login-header">
						<h3>Devenez un utilisateur</h3>
					</div>
					
					<!-- Register Form -->
					<form action="{{ route('register')}}" method="POST">
						{{csrf_field()}}
						<div class="form-group form-focus">
							<label class="focus-label">Votre adresse mail</label>
							<input type="text" class="form-control" required placeholder="johndoe@exapmle.com" name="email">
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Votre Nom d'utilisateur</label>
							<input type="text" class="form-control" required 
							 name="name">
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Votre Mot de passe</label>
							<input type="password" class="form-control" placeholder="********" required name="password" >
						</div>
						
						<div class="d-grid">
							<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">S'enregistrer</button>
						</div>
						
						
					</form>
					<!-- /Register Form -->
					
				</div>
			</div>
		</div>
	</div>
	<!-- /Provider Register Modal -->
	
	<!-- Provider Login Modal -->
	<div class="modal account-modal fade" id="login_modal">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header p-0 border-0">
					<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login-header">
						<h3>Se connecter <span></span></h3>
					</div>
					<form action="{{route('login')}}" method="POST">
					{{csrf_field()}}

						<div class="form-group form-focus">
							<label class="focus-label">Votre adresse mail *</label>
							<input type="email" name="email" required class="form-control" placeholder="ex : alyciakeys@gmail.com">
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Votre mot de passe *</label>
							<input type="password" name="password" required pattern="{8,}" 
								title="votre mot de passe doit contenir au moins 8 caractères"
								class="form-control" placeholder="********">
						</div>
						<div class="text-right">	
						</div>
						<div class="d-grid">
							<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Se connecter</button>
						</div>
						<div class="login-or">	<span class="or-line"></span>
							<span class="span-or">ou</span>
						</div>
						<div class="d-grid">
							
							<a  class="btn btn-primary btn-block btn-lg login-btn" href="#" data-bs-toggle="modal" data-bs-target="#provider-register">Vous etes prestataire? Rejoignez-nous</a>
								 
								</button>
						</div>
						<div class="text-center dont-have">Vous n'avez pas de compte ? 
							<a  href="#" data-bs-toggle="modal" data-bs-target="#user-register">Inscrivez vous maintenant</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /Provider Login Modal -->
