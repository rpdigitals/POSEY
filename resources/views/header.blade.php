<!-- Header -->
			<!-- Header -->
			<header class="header">
			<nav class="navbar navbar-expand-lg header-nav">
				<div class="navbar-header">
					<a id="mobile_btn" href="/javascript:void(0);">
						<span class="bar-icon">
							<span></span>
							<span></span>
							<span></span>
						</span>
					</a>
					<a href="/" class="navbar-brand logo">
						<img src="/assets/img/logo.png" class="img-fluid" alt="Logo">
					</a>
					<a href="/" class="navbar-brand logo-small">
						<img src="/assets/img/logo-icon.png" class="img-fluid" alt="Logo">
					</a>
				</div>
				<div class="main-menu-wrapper">
					<div class="menu-header">
						<a href="/" class="menu-logo">
							<img src="/assets/img/logo.png" class="img-fluid" alt="Logo">
						</a>
						<a id="menu_close" class="menu-close" href="/javascript:void(0);"> <i class="fas fa-times"></i></a>
					</div>
					<ul class="main-nav">
						<li class="{!! (Request::is('/') ? 'active' : '') !!} ">
							<a href="/">Home </a>
						</li>
						
						<li class="{!! (Request::is('categories') ? 'active' : '') !!}">
							<a href="categories">Categories</a>
						</li>
						<li class="{!! (Request::is('search/all') ? 'active' : '') !!}">
							<a href="search/all">Rechercher <i class="fas fa-search"></i></a>
						</li>
						<li class="has-submenu {!! (Request::is('user_dashboard') ? 'active' : '') !!}" >
							<a href="/user_dashboard">Mon compte <i class="fas fa-chevron-down"></i></a>
							<ul class="submenu">
								<li><a href="/user_dashboard">Tableau de bord</a></li>
								<li><a href="/user_favourites">Favoris</a></li>
								<li><a href="/user_bookings">Mes Commandes</a></li>
								<li><a href="/user_settings">Mon Profil</a></li>
								<li><a href="/user_wallet">Porte-feuille</a></li>
								<li><a href="/user_reviews">Reviews</a></li>
								<li><a href="/user_payments">Payements</a></li>
							</ul>
						</li>
						
						
					</ul>
				</div>
				<ul class="nav header-navbar-rht">
					
				<ul class="nav header-navbar-rht">
					<li class="nav-item desc-list wallet-menu">
						<a href="/user_wallet" class="nav-link header-login">
							<img src="/assets/img/wallet.png" alt="" class="me-2 wallet-img"><span>Porte-feuille:</span> $1875
						</a>
					</li>

					<!-- Notifications -->
					<li class="nav-item dropdown logged-item">
						<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fas fa-bell"></i> <span class="badge badge-pill bg-yellow">{{$notification->count()}}</span>
						</a>
						<div class="dropdown-menu notify-blk dropdown-menu-end notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Tout supprimer  </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									@foreach($notification as $notif)
									<li class="notification-message">
										<a href="#">
											<div class="media d-flex">
												<span class="avatar avatar-sm flex-shrink-0">
													<img class="avatar-img rounded-circle" alt="User Image" src="{{Storage::url($notif->prestataire->photo)}}">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"> <span class="noti-title">{{$notif->prestataire->nom.' '.$notif->prestataire->prenom.' '.
														$notif->contenu.' du service <<'.$notif->service->nom.' >>'}}</span></p>
													<p class="noti-time"><span class="notification-time">{{$notif->created_at->format('d-M-Y à H:i')}}</span></p>
												</div>
											</div>
										</a>
									</li>
									@endforeach
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="#">Voir toutes les notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->

					<!-- chat -->
					<li class="nav-item logged-item">
						<a href="/user_chats" class="nav-link">
							<i class="fa fa-comments" aria-hidden="true"></i>
						</a>
					</li>
					<!-- /user_chats -->

				
					
					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow logged-item">
						<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown" aria-expanded="false">
							<span class="user-img">
								<img class="rounded-circle" src="{{Storage::url($client->photo)}}" alt="">
							</span>
						</a>
						<div class="dropdown-menu dropdown-menu-end">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img class="avatar-img rounded-circle" src="{{Storage::url($client->photo)}}" alt="">
								</div>
								<div class="user-text">
									<h6>{{$client->nom.' '.$client->prenom}}</h6>
									<p class="text-muted mb-0">Client</p>
								</div>
							</div>
							<a class="dropdown-item" href="/user_dashboard">Tableau de bord</a>
							<a class="dropdown-item" href="/user_favourites">Favoris</a>
							<a class="dropdown-item" href="/user_bookings">Mes commandes</a>
							<a class="dropdown-item" href="/user-settings">Profil</a>
							<a class="dropdown-item" href="/all_services">Services</a>
							<a class="dropdown-item" href="/user_chats">Discussions</a>
							<a class="dropdown-item" href="/">Se déconnecter</a>
						</div>
					</li>
				
					<!-- /User Menu -->
						<!-- /Login/Logout button -->

					<ul class="nav header-navbar-rht">
					<li class="nav-item">
						<a class="nav-link header-login" href="{{route('logout')}}" >Deconnexion</a>
					</li>
					</ul>

					<!-- /Login/Logout button -->

					</div>
				
				</ul>
				
			</nav>
		</header>
		<!-- /Header -->

		<!-- /Header -->
