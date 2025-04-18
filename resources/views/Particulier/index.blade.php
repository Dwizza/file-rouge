@extends('layouts.particulier')
@section('content')

   <!-- Start Area 2 -->
	<section class="hero-area2">
		<div class="home-slider">
			<!-- Start Single Slider -->
			<div class="single-slider overlay" style="background-image:url('assets1/images/categories/animaux.jpeg');">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="content">
								<h4 class="title">Animals</h4>
								<p class="des">Giordanr Shirt is the best design of Artist Alex Goot. You should got it for your style</p>
								<div class="button">
									<a href="/clothes" class="btn">Discover Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Single Slider -->
			<!-- Start Single Slider -->
			<div class="single-slider overlay" style="background-image:url('assets1/images/categories/clothes.jpg');">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="content">
								<h4 class="title">Clothes</h4>
								<p class="des">Giordanr Shirt is the best design of Artist Alex Goot. You should got it for your style</p>
								<div class="button">
									<a href="#" class="btn">Discover Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Single Slider -->
			<!-- Start Single Slider -->
			<div class="single-slider overlay" style="background-image:url('assets1/images/categories/immobilier.jpg');">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="content">
								<h4 class="title">Real estate</h4>
								<p class="des">Giordanr Shirt is the best design of Artist Alex Goot. You should got it for your style</p>
								<div class="button">
									<a href="#" class="btn">Discover Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Single Slider -->
			<!-- Start Single Slider -->
			<div class="single-slider overlay" style="background-image:url('assets1/images/categories/maison.jpeg');">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="content">
								<h4 class="title">Maison & jardin</h4>
								<p class="des">Giordanr Shirt is the best design of Artist Alex Goot. You should got it for your style</p>
								<div class="button">
									<a href="#" class="btn">Discover Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Single Slider -->
			<!-- Start Single Slider -->
			<div class="single-slider overlay" style="background-image:url('assets1/images/categories/sport.jpeg');">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="content">
								<h4 class="title">Sports & loisirs</h4>
								<p class="des">Giordanr Shirt is the best design of Artist Alex Goot. You should got it for your style</p>
								<div class="button">
									<a href="#" class="btn">Discover Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Single Slider -->
		</div>
	</section>
	<!--/ End Hero Area 2 -->
	
	<!-- Start Product Area -->
    <div class="product-area section">
            <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Trending Item</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="product-info">
							<div class="nav-main">
								<!-- Tab Nav -->
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#jobs" role="tab">Jobs</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#cars" role="tab">Cars</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#clothes" role="tab">Clothes</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#services" role="tab">services</a></li>
								</ul>
								<!--/ End Tab Nav -->
							</div>
							<div class="tab-content mt-2" id="myTabContent">
								<!-- Start Single Tab -->
								<div class="tab-pane fade show active" id="jobs" role="tabpanel">
									<div class="tab-single">
										<div class="row">

											<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
												@foreach ($annonces->where('category_id','=', 5) as $annonce)
													<div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-shadow duration-300 overflow-hidden flex flex-col h-[440px] group">
														<!-- Image container -->
														<div class="relative w-full h-[220px] bg-gray-200 overflow-hidden">
															<a href="annonceDetails/{{$annonce->id}}" class="block w-full h-full">
																<img src="{{ $annonce->image }}" alt="Image"
																	 class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-500">
															</a>
											
															<!-- Ribbon (optional, like "NEW") -->
															<div class="absolute top-3 left-3 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded">
																NEW
															</div>
															<!-- Profile link (added) -->
															<div class="absolute bottom-3 right-3">
																<a href="{{ route('user.profile.view', $annonce->user->id) }}" class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold px-2 py-1 rounded flex items-center">
																	<svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
																	</svg>
																	Vendeur
																</a>
															</div>
														</div>
											
														<!-- Content -->
														<div class="flex flex-col justify-between flex-1 p-4">
															<h3 class="text-base font-semibold text-gray-800 capitalize mb-1 truncate">
																<a href="annonceDetails/{{$annonce->id}}">{{ $annonce->title }}</a>
															</h3>
											
															<!-- Price -->
															<div class="text-xl font-bold text-orange-500 mb-3">
																${{ number_format($annonce->price, 0, '.', ',') }}
															</div>
											
															<!-- Add to cart -->
															<button class="mt-auto bg-orange-500 text-white w-full py-2 rounded-xl font-medium text-sm tracking-wide hover:bg-orange-600 transition duration-200">
																<i class="ti-shopping-cart mr-1"></i> Add to cart
															</button>
														</div>
													</div>
												@endforeach
											</div>

											
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="cars" role="tabpanel">
									<div class="tab-single">

										<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
											@foreach ($annonces->where('category_id','=', 2) as $annonce)
												<div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-shadow duration-300 overflow-hidden flex flex-col h-[440px] group">
													<!-- Image container -->
													<div class="relative w-full h-[220px] bg-gray-200 overflow-hidden">
														<a href="annonceDetails/{{$annonce->id}}" class="block w-full h-full">
															<img src="{{ $annonce->image }}" alt="Image"
																 class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-500">
														</a>
										
														<!-- Ribbon (optional, like "NEW") -->
														<div class="absolute top-3 left-3 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded">
															NEW
														</div>
														<!-- Profile link (added) -->
														<div class="absolute bottom-3 right-3">
															<a href="{{ route('user.profile.view', $annonce->user->id) }}" class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold px-2 py-1 rounded flex items-center">
																<svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																	<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
																</svg>
																Vendeur
															</a>
														</div>
													</div>
										
													<!-- Content -->
													<div class="flex flex-col justify-between flex-1 p-4">
														<h3 class="text-base font-semibold text-gray-800 capitalize mb-1 truncate">
															<a href="annonceDetails/{{$annonce->id}}">{{ $annonce->title }}</a>
														</h3>
										
														<!-- Price -->
														<div class="text-xl font-bold text-orange-500 mb-3">
															${{ number_format($annonce->price, 0, '.', ',') }}
														</div>
										
														<!-- Add to cart -->
														<button class="mt-auto bg-orange-500 text-white w-full py-2 rounded-xl font-medium text-sm tracking-wide hover:bg-orange-600 transition duration-200">
															<i class="ti-shopping-cart mr-1"></i> Add to cart
														</button>
													</div>
												</div>
											@endforeach
										</div>
										

									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="clothes" role="tabpanel">
									<div class="tab-single">
										<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
											@foreach ($annonces->where('category_id','=', 7) as $annonce)
												<div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-shadow duration-300 overflow-hidden flex flex-col h-[440px] group">
													<!-- Image container -->
													<div class="relative w-full h-[220px] bg-gray-200 overflow-hidden">
														<a href="annonceDetails/{{$annonce->id}}" class="block w-full h-full">
															<img src="{{ $annonce->image }}" alt="Image"
																 class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-500">
														</a>
										
														<!-- Ribbon (optional, like "NEW") -->
														<div class="absolute top-3 left-3 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded">
															NEW
														</div>
														<!-- Profile link (added) -->
														<div class="absolute bottom-3 right-3">
															<a href="{{ route('user.profile.view', $annonce->user->id) }}" class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold px-2 py-1 rounded flex items-center">
																<svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																	<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
																</svg>
																Vendeur
															</a>
														</div>
													</div>
										
													<!-- Content -->
													<div class="flex flex-col justify-between flex-1 p-4">
														<h3 class="text-base font-semibold text-gray-800 capitalize mb-1 truncate">
															<a href="annonceDetails/{{$annonce->id}}">{{ $annonce->title }}</a>
														</h3>
										
														<!-- Price -->
														<div class="text-xl font-bold text-orange-500 mb-3">
															${{ number_format($annonce->price, 0, '.', ',') }}
														</div>
										
														<!-- Add to cart -->
														<button class="mt-auto bg-orange-500 text-white w-full py-2 rounded-xl font-medium text-sm tracking-wide hover:bg-orange-600 transition duration-200">
															<i class="ti-shopping-cart mr-1"></i> Add to cart
														</button>
													</div>
												</div>
											@endforeach
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="services" role="tabpanel">
									<div class="tab-single">
										<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
											@foreach ($annonces->where('category_id','=', 6) as $annonce)
												<div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-shadow duration-300 overflow-hidden flex flex-col h-[440px] group">
													<!-- Image container -->
													<div class="relative w-full h-[220px] bg-gray-200 overflow-hidden">
														<a href="annonceDetails/{{$annonce->id}}" class="block w-full h-full">
															<img src="{{ $annonce->image }}" alt="Image"
																 class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-500">
														</a>
										
														<!-- Ribbon (optional, like "NEW") -->
														<div class="absolute top-3 left-3 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded">
															NEW
														</div>
														<!-- Profile link (added) -->
														<div class="absolute bottom-3 right-3">
															<a href="{{ route('user.profile.view', $annonce->user->id) }}" class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold px-2 py-1 rounded flex items-center">
																<svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																	<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
																</svg>
																Vendeur
															</a>
														</div>
													</div>
										
													<!-- Content -->
													<div class="flex flex-col justify-between flex-1 p-4">
														<h3 class="text-base font-semibold text-gray-800 capitalize mb-1 truncate">
															<a href="annonceDetails/{{$annonce->id}}">{{ $annonce->title }}</a>
														</h3>
										
														<!-- Price -->
														<div class="text-xl font-bold text-orange-500 mb-3">
															${{ number_format($annonce->price, 0, '.', ',') }}
														</div>
										
														<!-- Add to cart -->
														<button class="mt-auto bg-orange-500 text-white w-full py-2 rounded-xl font-medium text-sm tracking-wide hover:bg-orange-600 transition duration-200">
															<i class="ti-shopping-cart mr-1"></i> Add to cart
														</button>
													</div>
												</div>
											@endforeach
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
							</div>
						</div>
					</div>
				</div>
            </div>
    </div>
	<!-- End Product Area -->
	
	<!-- Start Midium Banner  -->
	<section class="midium-banner">
		<div class="container">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="https://cdn.thewirecutter.com/wp-content/media/2024/11/BEST-LAPTOPS-PHOTO-VIDEO-EDITING-2048px-6.jpg" alt="#">
						<div class="content">
							<p>Man's Collectons</p>
							<h3>Man's items <br>Up to<span> 50%</span></h3>
							<a href="#">Shop Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="https://via.placeholder.com/600x370" alt="#">
						<div class="content">
							<p>shoes women</p>
							<h3>mid season <br> up to <span>70%</span></h3>
							<a href="#" class="btn">Shop Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Midium Banner -->

	<!-- Start Most Popular -->
	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Hot Item</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
						<!-- Start Single Product -->
						<div class="single-product">
							<div class="product-img">
								<a href="product-details.html">
									<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
									<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
									<span class="out-of-stock">Hot</span>
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="#">Add to cart</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="product-details.html">Black Sunglass For Women</a></h3>
								<div class="product-price">
									<span class="old">$60.00</span>
									<span>$50.00</span>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                </a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="#">Add to cart</a>
									</div>
								</div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">Women Hot Collection</a></h3>
                                <div class="product-price">
                                    <span>$50.00</span>
                                </div>
                            </div>
                        </div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
									<span class="new">New</span>
                                </a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="#">Add to cart</a>
									</div>
								</div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">Awesome Pink Show</a></h3>
                                <div class="product-price">
                                    <span>$50.00</span>
                                </div>
                            </div>
                        </div>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                </a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="#">Add to cart</a>
									</div>
								</div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">Awesome Bags Collection</a></h3>
                                <div class="product-price">
                                    <span>$50.00</span>
                                </div>
                            </div>
                        </div>
						<!-- End Single Product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- End Most Popular Area -->
	
	<!-- Start Cowndown Area -->
	<section class="cown-down">
		<div class="section-inner ">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-12 padding-right">
						<div class="image">
							<img src="https://cdn.thewirecutter.com/wp-content/media/2024/11/BEST-LAPTOPS-PHOTO-VIDEO-EDITING-2048px-6.jpg" alt="#">
						</div>	
					</div>	
					<div class="col-lg-6 col-12 padding-left">
						<div class="content">
							<div class="heading-block">
								<p class="small-title">Deal of day</p>
								<h3 class="title">Beatutyful dress for women</h3>
								<p class="text">Suspendisse massa leo, vestibulum cursus nulla sit amet, frungilla placerat lorem. Cars fermentum, sapien. </p>
								<h1 class="price">$1200 <s>$1890</s></h1>
								<div class="coming-time">
									<div class="clearfix" data-countdown="2021/02/30"></div>
								</div>
							</div>
						</div>	
					</div>	
				</div>
			</div>
		</div>
	</section>
	<!-- /End Cowndown Area -->
	
	<!-- Start Shop Services Area -->
	<section class="shop-services section home">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over $100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->
	
	<!-- Start Shop Newsletter  -->
	<section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<!-- Start Newsletter Inner -->
						<div class="inner">
							<h4>Newsletter</h4>
							<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Inner -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Newsletter -->
	
	<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
										<div class="quickview-slider-active">
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
										</div>
									</div>
								<!-- End Product slider -->
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content">
                                    <h2>Flared Shift Dress</h2>
                                    <div class="quickview-ratting-review">
                                        <div class="quickview-ratting-wrap">
                                            <div class="quickview-ratting">
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#"> (1 customer review)</a>
                                        </div>
                                        <div class="quickview-stock">
                                            <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                        </div>
                                    </div>
                                    <h3>$29.00</h3>
                                    <div class="quickview-peragraph">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                                    </div>
									<div class="size">
										<div class="row">
											<div class="col-lg-6 col-12">
												<h5 class="title">Size</h5>
												<select>
													<option selected="selected">s</option>
													<option>m</option>
													<option>l</option>
													<option>xl</option>
												</select>
											</div>
											<div class="col-lg-6 col-12">
												<h5 class="title">Color</h5>
												<select>
													<option selected="selected">orange</option>
													<option>purple</option>
													<option>black</option>
													<option>pink</option>
												</select>
											</div>
										</div>
									</div>
                                    <div class="quantity">
										<!-- Input Order -->
										<div class="input-group">
											<div class="button minus">
												<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
													<i class="ti-minus"></i>
												</button>
											</div>
											<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
											<div class="button plus">
												<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
													<i class="ti-plus"></i>
												</button>
											</div>
										</div>
										<!--/ End Input Order -->
									</div>
									<div class="add-to-cart">
										<a href="#" class="btn">Add to cart</a>
										<a href="#" class="btn min"><i class="ti-heart"></i></a>
										<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
									</div>
                                    <div class="default-social">
										<h4 class="share-now">Share:</h4>
                                        <ul>
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Modal end -->

@endsection