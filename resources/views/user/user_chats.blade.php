<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.truelysell.com/template/user-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:13:48 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Truelysell | Template</title>

	<!-- Favicons -->
	<link rel="shortcut icon" href="/assets/img/favicon.png">
	
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap" rel="stylesheet"> 
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="/assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="/assets/plugins/fontawesome/css/all.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>

	<div class="main-wrapper">
	
		<!-- Header -->
		<header class="header">
			<nav class="navbar navbar-expand-lg header-nav">
				<div class="navbar-header">
					<a id="mobile_btn" href="javascript:void(0);">
						<span class="bar-icon">
							<span></span>
							<span></span>
							<span></span>
						</span>
					</a>
					<a href="#" class="navbar-brand logo">
						<img src="/assets/img/logo.png" class="img-fluid" alt="Logo">
					</a>
					<a href="#" class="navbar-brand logo-small">
						<img src="/assets/img/logo-icon.png" class="img-fluid" alt="Logo">
					</a>
				</div>
				<div class="main-menu-wrapper">
					<div class="menu-header">
						<a href="#" class="menu-logo">
							<img src="/assets/img/logo.png" class="img-fluid" alt="Logo">
						</a>
						<a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
					</div>
					<ul class="main-nav">
						<li class="active">
							<a href="/">Acceuil </a>
							
						</li>
						<li >
							<a href="/user_dashboard">Tableau de bord </a>
							
						</li>
						<li>
							<a href="/categories">Categories</a>
						</li>
						
						
						<li >
							<a href="/search/{{'all'}}">Rechercher <i class="fas fa-search"></i></a>
							
						</li>
						
					</ul>
				</div>
				
				<ul class="nav header-navbar-rht">
					<li class="nav-item desc-list wallet-menu">
						<a href="/user_wallet" class="nav-link header-login">
							<img src="/assets/img/wallet.png" alt="" class="me-2 wallet-img"><span>Porte-feuille:</span> $1875
						</a>
					</li>

					<!-- Notifications -->
					<li class="nav-item dropdown logged-item">
						<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fas fa-bell"></i> <span class="badge badge-pill bg-yellow">1</span>
						</a>
						<div class="dropdown-menu notify-blk dropdown-menu-end notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Tout supprimer  </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="#">
											<div class="media d-flex">
												<span class="avatar avatar-sm flex-shrink-0">
													<img class="avatar-img rounded-circle" alt="User Image" src="/assets/img/customer/user-01.jpg">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"> <span class="noti-title">Jeffrey Akridge has booked your service</span></p>
													<p class="noti-time"><span class="notification-time">Today 10:04 PM</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media d-flex">
												<span class="avatar avatar-sm flex-shrink-0">
													<img class="avatar-img rounded-circle" alt="User Image" src="/assets/img/customer/user-02.jpg">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"> <span class="noti-title">Nancy Olson has booked your service</span></p>
													<p class="noti-time"><span class="notification-time">Today 9:45 PM</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media d-flex">
												<span class="avatar avatar-sm flex-shrink-0">
													<img class="avatar-img rounded-circle" alt="User Image" src="/assets/img/customer/user-03.jpg">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"> <span class="noti-title">Ramona Kingsley has booked your service</span></p>
													<p class="noti-time"><span class="notification-time">Yesterday 8:17 AM</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media d-flex">
												<span class="avatar avatar-sm flex-shrink-0">
													<img class="avatar-img rounded-circle" alt="User Image" src="/assets/img/customer/user-04.jpg">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"> <span class="noti-title">Ricardo Lung has booked your service</span></p>
													<p class="noti-time"><span class="notification-time">Yesterday 6:20 AM</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media d-flex">
												<span class="avatar avatar-sm flex-shrink-0">
													<img class="avatar-img rounded-circle" alt="User Image" src="/assets/img/customer/user-05.jpg">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"> <span class="noti-title">Annette Silva has booked your service</span></p>
													<p class="noti-time"><span class="notification-time">17 Sep 2020 10:04 PM</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="#">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->

					<!-- chat -->
					<li class="nav-item logged-item">
						<a href="#" class="nav-link">
							<i class="fa fa-comments" aria-hidden="true"></i>
						</a>
					</li>
					<!-- /chat -->
					
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
							<a class="dropdown-item" href="/favourites">Favoris</a>
							<a class="dropdown-item" href="/user_bookings">Mes commandes</a>
							<a class="dropdown-item" href="/user_settings">Profil</a>
							<a class="dropdown-item" href="/services">Services</a>
							<a class="dropdown-item" href="/chat">Discussions</a>
							<a class="dropdown-item" href="{{route('logout')}}">Logout</a>
						</div>
					</li>
					<!-- /User Menu -->

				</ul>
			</nav>
		</header>
		<!-- /Header -->
		
		<div class="content">
			<div class="container">
				<div class="row">
					


<div class="content">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-lg-12">
					
						<div class="row chat-window">
						
							<!-- Chat User List -->
							<div class="col-lg-5 col-xl-4 chat-cont-left">
								<div class="card mb-sm-3 mb-md-0 contacts_card flex-fill">
									<div class="card-header chat-search">
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="search_btn"><i class="fas fa-search"></i></span>
											</div>
											<input type="text" placeholder="Search" class="form-control search-chat rounded-pill">
										</div>
									</div>
									<div class="card-body contacts_body chat-users-list chat-scroll">
										<a href="/javascript:void(0);" class="media d-flex active">
											<div class="media-img-wrap flex-shrink-0">
												<div class="avatar avatar-away">
													<img src="/assets/img/customer/user-01.jpg" alt="User Image" class="avatar-img rounded-circle">
												</div>
											</div>
											<div class="media-body flex-grow-1">
												<div>
													<div class="user-name">Jeffrey Akridge</div>
													<div class="user-last-chat">Hey, How are you?</div>
												</div>
												<div>
													<div class="last-chat-time">2 min</div>
													<div class="badge badge-success badge-pill">15</div>
												</div>
											</div>
										</a>
										<a href="/javascript:void(0);" class="media d-flex read-chat">
											<div class="media-img-wrap flex-shrink-0">
												<div class="avatar avatar-online">
													<img src="/assets/img/customer/user-02.jpg" alt="User Image" class="avatar-img rounded-circle">
												</div>
											</div>
											<div class="media-body flex-grow-1">
												<div>
													<div class="user-name">Nancy Olson</div>
													<div class="user-last-chat">I'll call you later </div>
												</div>
												<div>
													<div class="last-chat-time">8:01 PM</div>
												</div>
											</div>
										</a>
										<a href="/javascript:void(0);" class="media d-flex">
											<div class="media-img-wrap flex-shrink-0">
												<div class="avatar avatar-away">
													<img src="/assets/img/customer/user-03.jpg" alt="User Image" class="avatar-img rounded-circle">
												</div>
											</div>
											<div class="media-body flex-grow-1">
												<div>
													<div class="user-name">Ramona Kingsley</div>
													<div class="user-last-chat">Give me a full explanation about our project</div>
												</div>
												<div>
													<div class="last-chat-time">7:30 PM</div>
													<div class="badge badge-success badge-pill">3</div>
												</div>
											</div>
										</a>
										<a href="/javascript:void(0);" class="media read-chat d-flex">
											<div class="media-img-wrap flex-shrink-0">
												<div class="avatar avatar-online">
													<img src="/assets/img/customer/user-04.jpg" alt="User Image" class="avatar-img rounded-circle">
												</div>
											</div>
											<div class="media-body flex-grow-1">
												<div>
													<div class="user-name">Ricardo Lung</div>
													<div class="user-last-chat">That's very good UI design</div>
												</div>
												<div>
													<div class="last-chat-time">6:59 PM</div>
												</div>
											</div>
										</a>
										<a href="/javascript:void(0);" class="media read-chat d-flex">
											<div class="media-img-wrap flex-shrink-0">
												<div class="avatar avatar-offline">
													<img src="/assets/img/customer/user-05.jpg" alt="User Image" class="avatar-img rounded-circle">
												</div>
											</div>
											<div class="media-body flex-grow-1">
												<div>
													<div class="user-name">Annette Silva</div>
													<div class="user-last-chat">Yesterday i completed the task</div>
												</div>
												<div>
													<div class="last-chat-time">11:21 AM</div>
												</div>
											</div>
										</a>
										<a href="/javascript:void(0);" class="media read-chat d-flex">
											<div class="media-img-wrap flex-shrink-0">
												<div class="avatar avatar-online">
													<img src="/assets/img/customer/user-06.jpg" alt="User Image" class="avatar-img rounded-circle">
												</div>
											</div>
											<div class="media-body flex-grow-1">
												<div>
													<div class="user-name">Stephen Wilson</div>
													<div class="user-last-chat">What is the major functionality?</div>
												</div>
												<div>
													<div class="last-chat-time">10:05 AM</div>
												</div>
											</div>
										</a>
										<a href="/javascript:void(0);" class="media read-chat d-flex">
											<div class="media-img-wrap flex-shrink-0">
												<div class="avatar avatar-away">
													<img src="/assets/img/customer/user-07.jpg" alt="User Image" class="avatar-img rounded-circle">
												</div>
											</div>
											<div class="media-body flex-grow-1">
												<div>
													<div class="user-name">Ryan Rodriguez</div>
													<div class="user-last-chat">This has allowed me to showcase not only my technical skills</div>
												</div>
												<div>
													<div class="last-chat-time">Yesterday</div>
												</div>
											</div>
										</a>
										<a href="/javascript:void(0);" class="media read-chat d-flex">
											<div class="media-img-wrap flex-shrink-0">
												<div class="avatar avatar-offline">
													<img src="/assets/img/customer/user-08.jpg" alt="User Image" class="avatar-img rounded-circle">
												</div>
											</div>
											<div class="media-body flex-grow-1">
												<div>
													<div class="user-name">Lucile Devera</div>
													<div class="user-last-chat">Let's talk briefly in the evening. </div>
												</div>
												<div>
													<div class="last-chat-time">Sunday</div>
												</div>
											</div>
										</a>
										<a href="/javascript:void(0);" class="media read-chat d-flex">
											<div class="media-img-wrap flex-shrink-0">
												<div class="avatar avatar-online">
													<img src="/assets/img/customer/user-09.jpg" alt="User Image" class="avatar-img rounded-circle">
												</div>
											</div>
											<div class="media-body flex-grow-1">
												<div>
													<div class="user-name">Roland Storey</div>
													<div class="user-last-chat">Do you have any collections? If so, what of?</div>
												</div>
												<div>
													<div class="last-chat-time">Saturday</div>
												</div>
											</div>
										</a>
										<a href="/javascript:void(0);" class="media read-chat d-flex">
											<div class="media-img-wrap flex-shrink-0">
												<div class="avatar avatar-away">
													<img src="/assets/img/customer/user-10.jpg" alt="User Image" class="avatar-img rounded-circle">
												</div>
											</div>
											<div class="media-body flex-grow-1">
												<div>
													<div class="user-name">Lindsey Parmley</div>
													<div class="user-last-chat">Connect the two modules with in 1 day.</div>
												</div>
												<div>
													<div class="last-chat-time">Friday</div>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<!-- Chat User List -->
							
							<!-- Chat Content -->
							<div class="col-lg-7 col-xl-8 chat-cont-right">
							
								<!-- Chat History -->
								<div class="card mb-0">

									<div class="card-header msg_head">
										<div class="d-flex bd-highlight">
											<a id="back_user_list" href="/javascript:void(0)" class="back-user-list">
												<i class="fas fa-chevron-left"></i>
											</a>
											<div class="img_cont">
												<img class="rounded-circle user_img" src="/assets/img/customer/user-01.jpg" alt="">
											</div>
											<div class="user_info">
												<span><strong id="receiver_name">Jeffrey Akridge</strong></span>
												<p class="mb-0">Messages</p>
											</div>
										</div>
									</div>

									<div class="card-body msg_card_body chat-scroll">
										<ul class="list-unstyled">
											<li class="media sent d-flex">
												<div class="avatar flex-shrink-0">
													<img src="/assets/img/provider/provider-01.jpg" alt="User Image" class="avatar-img rounded-circle">
												</div>
												<div class="media-body flex-grow-1">
													<div class="msg-box">
														<div>
															<p>Hello. What can I do for you?</p>
															<ul class="chat-msg-info">
																<li>
																	<div class="chat-time">
																		<span>8:30 AM</span>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</li>
											<li class="media received d-flex">
												<div class="avatar flex-shrink-0">
													<img src="/assets/img/customer/user-01.jpg" alt="User Image" class="avatar-img rounded-circle">
												</div>
												<div class="media-body flex-grow-1">
													<div class="msg-box">
														<div>
															<p>I'm just looking around.</p>
															<p>Will you tell me something about yourself?</p>
															<ul class="chat-msg-info">
																<li>
																	<div class="chat-time">
																		<span>8:35 AM</span>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="msg-box">
														<div>
															<p>Are you there? That time!</p>
															<ul class="chat-msg-info">
																<li>
																	<div class="chat-time">
																		<span>8:40 AM</span>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="msg-box">
														<div>
															<div class="chat-msg-attachments">
																<div class="chat-attachment">
																	<img src="/assets/img/services/service-03.jpg" alt="Attachment">
																	<a href="#" class="chat-attach-download">
																		<i class="fas fa-download"></i>
																	</a>
																</div>
																<div class="chat-attachment">
																	<img src="/assets/img/services/service-04.jpg" alt="Attachment">
																	<a href="#" class="chat-attach-download">
																		<i class="fas fa-download"></i>
																	</a>
																</div>
															</div>
															<ul class="chat-msg-info">
																<li>
																	<div class="chat-time">
																		<span>8:41 AM</span>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</li>
											<li class="media sent d-flex">
												<div class="avatar flex-shrink-0">
													<img src="/assets/img/provider/provider-01.jpg" alt="User Image" class="avatar-img rounded-circle">
												</div>
												<div class="media-body flex-grow-1">
													<div class="msg-box">
														<div>
															<p>Where?</p>
															<ul class="chat-msg-info">
																<li>
																	<div class="chat-time">
																		<span>8:42 AM</span>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="msg-box">
														<div>
															<p>OK, my name is Limingqiang. I like singing, playing basketballand so on.</p>
															<ul class="chat-msg-info">
																<li>
																	<div class="chat-time">
																		<span>8:42 AM</span>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="msg-box">
														<div>
															<div class="chat-msg-attachments">
																<div class="chat-attachment">
																	<img src="/assets/img/services/service-02.jpg" alt="Attachment">
																	<a href="#" class="chat-attach-download">
																		<i class="fas fa-download"></i>
																	</a>
																</div>
															</div>
															<ul class="chat-msg-info">
																<li>
																	<div class="chat-time">
																		<span>8:50 AM</span>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</li>
											<li class="media received d-flex">
												<div class="avatar flex-shrink-0">
													<img src="/assets/img/customer/user-01.jpg" alt="User Image" class="avatar-img rounded-circle">
												</div>
												<div class="media-body flex-grow-1">
													<div class="msg-box">
														<div>
															<p>You wait for notice.</p>
															<p>Consectetuorem ipsum dolor sit?</p>
															<p>Ok?</p>
															<ul class="chat-msg-info">
																<li>
																	<div class="chat-time">
																		<span>8:55 PM</span>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</li>
											<li class="chat-date">Today</li>
											<li class="media received d-flex">
												<div class="avatar flex-shrink-0">
													<img src="/assets/img/customer/user-01.jpg" alt="User Image" class="avatar-img rounded-circle">
												</div>
												<div class="media-body flex-grow-1">
													<div class="msg-box">
														<div>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
															<ul class="chat-msg-info">
																<li>
																	<div class="chat-time">
																		<span>10:17 AM</span>
																	</div>
																</li>
																<li><a href="#">Edit</a></li>
															</ul>
														</div>
													</div>
												</div>
											</li>
											<li class="media sent d-flex">
												<div class="avatar flex-shrink-0">
													<img src="/assets/img/provider/provider-01.jpg" alt="User Image" class="avatar-img rounded-circle">
												</div>
												<div class="media-body flex-grow-1">
													<div class="msg-box">
														<div>
															<p>Lorem ipsum dollar sit</p>
															<div class="chat-msg-actions dropdown">
																<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="fe fe-elipsis-v"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item" href="#">Delete</a>
																</div>
															</div>
															<ul class="chat-msg-info">
																<li>
																	<div class="chat-time">
																		<span>10:19 AM</span>
																	</div>
																</li>
																<li><a href="#">Edit</a></li>
															</ul>
														</div>
													</div>
												</div>
											</li>
											<li class="media received d-flex">
												<div class="avatar flex-shrink-0">
													<img src="/assets/img/customer/user-01.jpg" alt="User Image" class="avatar-img rounded-circle">
												</div>
												<div class="media-body flex-grow-1">
													<div class="msg-box">
														<div>
															<div class="msg-typing">
																<span></span>
																<span></span>
																<span></span>
															</div>
														</div>
													</div>
												</div>
											</li>
										</ul>
									
									</div>
									
									<div class="card-footer">
										<div class="input-group">
											<input class="form-control type_msg mh-auto empty_check" placeholder="Type your message...">
											<button class="btn btn-primary btn_send"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
										</div>
									</div>
									
								</div>

							</div>
							<!-- Chat Content -->
							
						</div>

					</div>
				</div>
			</div>
		</div>
   
	</div>  

	</div>
			</div>
		</div>﻿
		
	
	</div>

	<!-- jQuery -->
	<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="/assets/js/jquery-3.6.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="/assets/js/popper.min.js"></script>
	<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Sticky Sidebar JS -->
	<script src="/assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
	<script src="/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

	<!-- Custom JS -->
	<script src="/assets/js/script.js"></script>
	<script src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
</body>

<!-- Mirrored from html.truelysell.com/template/user-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:13:49 GMT -->
</html>

