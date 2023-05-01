@extends('layouts.app')

@section('content')
	<div class="bg-cover" style="background-image: url('/images/bg1.webp')">
		<div class="md:px-20 py-24 bg-black opacity-80">
			<p class="mx-5 text-3xl font-bold mb-5 text-leaf">Selamat Datang, di Kupitilizer</p>
			<p class="mx-5 text-4xl font-bold text-white">
				Mari tukarkan limbah ampas kopi
			</p> 
			<p class="mx-5 text-white text-xl font-bold md:text-4xl mt-6 mb-10">   
					anda menjadi <span class="text-leaf md:text-4xl">pupuk</span>
			</p>
			<div class="flex fles-wrap">
				<a data-modal-hide="login-modal" data-modal-target="register-modal" data-modal-toggle="register-modal" type="button" class="mx-5 text-white bg-leaf hover:bg-gray-900 py-3 px-8 rounded-xl">Join Now</a>
				<a href="{{url('/aboutus')}}" class="mx-5 text-white bg-gray-900 hover:bg-leaf py-3 px-8 rounded-xl">Contact Us</a>
			</div>
		</div>
	</div>

	<div class="md:px-20 py-20" style="background-image: url('/images/bg2.webp')">
		<div class="mx-5">
			<h2 class="text-4xl font-bold text-left text-dark mb-10">
				What is <span class="text-leaf">Kupitilizer?</span>
			</h2>
			<div class="">
				<div class="">
					<p class="text-dark text-xl leading-relaxed">
						Kupitilizer is a minimalistic app that has environmental benefits. It features the ability to exchange wasted coffee grounds into organic compost for various plants. Coffee grounds can be a factor in contamination. Kupitilizer also provides other coffee grounds products such as soap, bricks, and other cosmetic products.
					</p>
					<p class="mt-6 text-dark text-xl leading-relaxed">
						With this Kupitilizer, it can help reduce environmental pollution waste and reduce coffee waste generated by almost all communities.
					</p>
				</div>
				<div class="md:flex my-5 justify-between">
					<p class="text-dark text-lg mt-10 md:mt-28">
							"Call Request - Keep Go Green"
					</p>
					<img src="{{asset('images/logo.webp')}}" class="h-48" alt="Kupitilizer Logo" />
				</div>
			</div>
		</div>
	</div>

	<div class="" style="background-image: url('/images/bg3.webp')">
		<div class="md:px-20 py-20 pt-5 bg-black opacity-80">
			<div class="mb-20">
				<p class="text-3xl text-center font-bold text-leaf">Our Features</p>
			</div>
			<div class="flex flex-wrap justify-around">
				<div>
					<div class="bg-leaf p-8 rounded-full mb-3">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
							<path d="M7.5 3.375c0-1.036.84-1.875 1.875-1.875h.375a3.75 3.75 0 013.75 3.75v1.875C13.5 8.161 14.34 9 15.375 9h1.875A3.75 3.75 0 0121 12.75v3.375C21 17.16 20.16 18 19.125 18h-9.75A1.875 1.875 0 017.5 16.125V3.375z" />
							<path d="M15 5.25a5.23 5.23 0 00-1.279-3.434 9.768 9.768 0 016.963 6.963A5.23 5.23 0 0017.25 7.5h-1.875A.375.375 0 0115 7.125V5.25zM4.875 6H6v10.125A3.375 3.375 0 009.375 19.5H16.5v1.125c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V7.875C3 6.839 3.84 6 4.875 6z" />
						</svg>
					</div>
					<p class="text-white text-xl font-bold text-center">Make<br>Request</p>
				</div>

				<div>
					<div class="bg-leaf p-8 rounded-full mb-3">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
							<path fill-rule="evenodd" d="M1.5 9.832v1.793c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875V9.832a3 3 0 00-.722-1.952l-3.285-3.832A3 3 0 0016.215 3h-8.43a3 3 0 00-2.278 1.048L2.222 7.88A3 3 0 001.5 9.832zM7.785 4.5a1.5 1.5 0 00-1.139.524L3.881 8.25h3.165a3 3 0 012.496 1.336l.164.246a1.5 1.5 0 001.248.668h2.092a1.5 1.5 0 001.248-.668l.164-.246a3 3 0 012.496-1.336h3.165l-2.765-3.226a1.5 1.5 0 00-1.139-.524h-8.43z" clip-rule="evenodd" />
							<path d="M2.813 15c-.725 0-1.313.588-1.313 1.313V18a3 3 0 003 3h15a3 3 0 003-3v-1.688c0-.724-.588-1.312-1.313-1.312h-4.233a3 3 0 00-2.496 1.336l-.164.246a1.5 1.5 0 01-1.248.668h-2.092a1.5 1.5 0 01-1.248-.668l-.164-.246A3 3 0 007.046 15H2.812z" />
						</svg>
					</div>
					<p class="text-white text-xl font-bold text-center">Product<br>Info</p>
				</div>

				<div>
					<div class="bg-leaf p-8 rounded-full mb-3">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
							<path fill-rule="evenodd" d="M1.5 6.375c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v3.026a.75.75 0 01-.375.65 2.249 2.249 0 000 3.898.75.75 0 01.375.65v3.026c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 17.625v-3.026a.75.75 0 01.374-.65 2.249 2.249 0 000-3.898.75.75 0 01-.374-.65V6.375zm15-1.125a.75.75 0 01.75.75v.75a.75.75 0 01-1.5 0V6a.75.75 0 01.75-.75zm.75 4.5a.75.75 0 00-1.5 0v.75a.75.75 0 001.5 0v-.75zm-.75 3a.75.75 0 01.75.75v.75a.75.75 0 01-1.5 0v-.75a.75.75 0 01.75-.75zm.75 4.5a.75.75 0 00-1.5 0V18a.75.75 0 001.5 0v-.75zM6 12a.75.75 0 01.75-.75H12a.75.75 0 010 1.5H6.75A.75.75 0 016 12zm.75 2.25a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z" clip-rule="evenodd" />
						</svg>
					</div>
					<p class="text-white text-xl font-bold text-center">Redeem<br>Coupon</p>
				</div>
			</div>
		</div>
	</div>
@endsection