@extends('layouts.base')




@section('main')

<!-- Breadcrumb Area -->
<div id="cr-breadcrumb-area" class="cr-breadcrumb-area section-padding--md">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-8">
                <div class="cr-breadcrumb">
                    <ul class="cr-breadcrumb__pagination">
                        <li><a href="{{ url('/') }}">Accueil</a></li>
                        <li>Contact</li>
                    </ul>
                    <h1>Nous Contacté</h1>
                    {{-- <p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                        rem </p> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Breadcrumb Area -->

<!-- Page Conent -->
<main class="page-content">

    	<!-- Appointment -->
			<div class="appointment bg--white section-padding--xlg">
				<div class="container">
					<div class="row">
						<div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12 offset-0">
							<div class="pg-appintment">
								<div class="pg-appintment__title text-center">
									<h2>PRENDRE UN RENDEZ-VOUS</h2>
								</div>
								<div class="pg-appintment__box">
									<form action="#">
										<div class="row">
											<div class="col-lg-6 col-md-6">
												<div class="single-input">
													<input type="text" name="user-first-name" id="user-first-name" placeholder="Prénoms">
												</div>
											</div>
											<div class="col-lg-6 col-md-6">
												<div class="single-input">
													<input type="text" name="user-last-name" id="user-last-name" placeholder="Nom">
												</div>
											</div>
											<div class="col-lg-6 col-md-6">
												<div class="single-input">
													<input type="email" name="user-email" id="user-email" placeholder="Adresse mail">
												</div>
											</div>
											<div class="col-lg-6 col-md-6">
												<div class="single-input">
													<input type="text" name="user-phone" id="user-phone"  placeholder="Téléphone">
												</div>
											</div>
											<div class="col-lg-6 col-md-6">
												<div class="single-input">
													<select class="select2-another" name="user-select-advisor" id="user-select-advisor">
														<option value="0">Selectionner </option>
														<option value="1">Julia Anderson</option>
														<option value="2">David Miller</option>
														<option value="3">Simon De Andersom</option>
														<option value="4">Martin Smith</option>
													</select>
												</div>
											</div>
											<div class="col-lg-6 col-md-6">
												<div class="single-input">
													<input type="text" name="user-select-date" id="user-select-date" placeholder="Select Date" data-select="datepicker">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="single-input">
													<textarea cols="30" rows="5" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="single-input button">
													<button type="submit" class="cr-btn"><span>Submit</span></button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--// Appointment -->

</main><!-- //Page Conent -->





@endsection