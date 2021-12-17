@extends("layouts.template_pengunjung")

@section("page_content")

<header class="masthead">
	<div class="container">
		<div class="masthead-subheading">Welcome To Our Studio!</div>
		<div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
		<a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
	</div>
</header>
<!-- Services-->
<section class="page-section" id="services">
<div class="container">
	<div class="text-center">
		<h2 class="section-heading text-uppercase">Sanggar Tari Melati Ayu</h2>
		<h3 class="section-subheading text-muted">Traditional Dance Vibe</h3>
	</div>
	<div class="row text-center">
		<div class="col-md-4">
			<span class="fa-stack fa-4x">
				<i class="fas fa-user-clock fa-stack-2x text-primary"></i>
				<i class="fas fa-user-clock fa-stack-2x text-primary"></i>
			</span>
			<h4 class="my-3">Pelatihan</h4>
			<p class="text-muted">Sanggar tari melati ayu menyediakan jasa pelatihan seni tari tradisional </p>
		</div>
		<div class="col-md-4">
			<span class="fa-stack fa-4x">
				<i class="far fa-handshake fa-stack-2x text-primary"></i>
				<i class="far fa-handshake fa-stack-2x text-primary"></i>
			</span>
			<h4 class="my-3">Event</h4>
			<p class="text-muted">Selain pelatihan kami menyediakan jasa penari untuk diundang dalam resepsi atau event</p>
		</div>
		<div class="col-md-4"> 
			<span class="fa-stack fa-4x">
				<i class="fas fa-wallet fa-stack-2x text-primary"></i>
				<i class="fas fa-wallet fa-stack-2x text-primary"></i>
			</span>
			<h4 class="my-3">Pembayaran</h4>
			<p class="text-muted">Sistem dalam pembayarannya bisa menggunakan Bayar Langsung di tempat atau melalui transfer.</p>
		</div>
	</div>
</div>
</section>
<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Kategori</h2>
			<h3 class="section-subheading text-muted">Traditional Dance Vibe</h3>
		</div>
		<div class="row">
			<div class="col-lg-4 col-sm-6 mb-4">
				<!-- Portfolio item 1-->
				<div class="portfolio-item">
					<a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
						</div>
						<img class="img-fluid" src="{{ url('/landing') }}/assets/img/portfolio/bali.jpg" alt="..." />
					</a>
					<div class="portfolio-caption">
						<div class="portfolio-caption-heading">Tari Bali</div>
						<div class="portfolio-caption-subheading text-muted">Tari Bali</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mb-4">
				<!-- Portfolio item 2-->
				<div class="portfolio-item">
					<a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
						</div>
						<img class="img-fluid" src="{{ url('/landing') }}/assets/img/portfolio/dayak.jpg" alt="..." />
					</a>
					<div class="portfolio-caption">
						<div class="portfolio-caption-heading">Tari Dayak</div>
						<div class="portfolio-caption-subheading text-muted">Tari Dayak</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mb-4">
				<!-- Portfolio item 3-->
				<div class="portfolio-item">
					<a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
						</div>
						<img class="img-fluid" src="{{ url('/landing') }}/assets/img/portfolio/jaipong.jpg" alt="..." />
					</a>
					<div class="portfolio-caption">
						<div class="portfolio-caption-heading">Tari Jaipong</div>
						<div class="portfolio-caption-subheading text-muted">Tari Jaipong</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
				<!-- Portfolio item 4-->
				<div class="portfolio-item">
					<a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
						</div>
						<img class="img-fluid" src="{{ url('/landing') }}/assets/img/portfolio/merak2.jpg" alt="..." />
					</a>
					<div class="portfolio-caption">
						<div class="portfolio-caption-heading">Tari Merak</div>
						<div class="portfolio-caption-subheading text-muted">Tari Merak</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
				<!-- Portfolio item 5-->
				<div class="portfolio-item">
					<a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
						</div>
						<img class="img-fluid" src="{{ url('/landing') }}/assets/img/portfolio/tari piring.jpg" alt="..." />
					</a>
					<div class="portfolio-caption">
						<div class="portfolio-caption-heading">Tari Piring</div>
						<div class="portfolio-caption-subheading text-muted">Tari Piring</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<!-- Portfolio item 6-->
				<div class="portfolio-item">
					<a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
						</div>
						<img class="img-fluid" src="{{ url('/landing') }}/assets/img/portfolio/topeng.jpg" alt="..." />
					</a>
					<div class="portfolio-caption">
						<div class="portfolio-caption-heading">Tari Topeng</div>
						<div class="portfolio-caption-subheading text-muted">Tari Topeng</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- About-->
<section class="page-section" id="about">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">About</h2>
			<h3 class="section-subheading text-muted">Informasi Tentang Sanggar Tari Melati Ayu</h3>
		</div>
		<ul class="timeline">
			<li>
				<div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ url('/landing') }}/assets/img/about/1.png" alt="..." /></div>
				<div class="timeline-panel">
					<div class="timeline-heading">
						<h4 class="subheading">Aplikasi Sanggar Tari</h4>
					</div>
					<div class="timeline-body"><p class="text-muted">Aplikasi sanggar tari adalah aplikasi yang menangani pengelolaan data murid, pelatih, jadwal, penyewaan,dan transaksi yang ada di dalam sanggar tari. </p></div>
				</div>
			</li>
			<li class="timeline-inverted">
				<div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ url('/landing') }}/assets/img/about/2.png" alt="..." /></div>
				<div class="timeline-panel">
					<div class="timeline-heading">
						<h4 class="subheading">Sumber Data Penelitian</h4>
					</div>
					<div class="timeline-body"><p class="text-muted">Sumber data penelitian terdiri dari sumber data primer dan sumber data sekunder, Sumber data primer dilakukan dengan metode wawancara langsung dengan pihak sanggar tari dan juga observasi dokumen dan data secara langsung di Sanggar Tari Melati Ayu yang dilakukan selama 3 (tiga) bulan. Penelitian ini dilakukan dengan tahapan analisis, perancangan, implementasi dan pengujian aplikasi.</p></div>
				</div>
			</li>
			<li>
				<div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ url('/landing') }}/assets/img/about/3.png" alt="..." /></div>
				<div class="timeline-panel">
					<div class="timeline-heading">
						<h4 class="subheading">Tahap Analisis</h4>
					</div>
					<div class="timeline-body"><p class="text-muted">Tahap analisis dilakukan setelah memperoleh data primer yang kemudian dituangkan menjadi proses bisnis yang dituliskan di dalam bentuk narasi dan model flowchart.</p></div>
				</div>
			</li>
			<li class="timeline-inverted">
				<div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ url('/landing') }}/assets/img/about/4.png" alt="..." /></div>
				<div class="timeline-panel">
					<div class="timeline-heading">
						<h4 class="subheading">Tahap Perancangan</h4>
					</div>
					<div class="timeline-body"><p class="text-muted">Setelah tahap analisis dilanjutkan dengan tahap perancangan data dengan menggunakan model Entity Relationship Diagram (ERD), model aliran data dengan menggunakan Flowchart Diagram dan Kamus Data, setelah itu dirancang juga rancangan antar muka aplikasi. Dari Hasil rancangan dibuatlah aplikasi sanggar tari dengan menggunakan database MySQL, dan bahasa pemrograman PHP. </p></div>
				</div>
			</li>
			<li class="timeline-inverted">
				<div class="timeline-image">
					<h4>
						Sanggar 
						<br />
						Tari
						<br />
						Story!
					</h4>
				</div>
			</li>
		</ul>
	</div>
</section>
<!-- Team-->
<section class="page-section bg-light" id="team">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Kelompok 1</h2>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="team-member">
					<img class="mx-auto rounded-circle" src="{{ url('/landing') }}/assets/img/team/1.jpg" alt="..." />
					<h4>Adria Tisnawati Aprilia</h4>
					<p class="text-muted"></p>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>	
				</div>
			</div>
			<div class="col-lg-4">
				<div class="team-member">
					<img class="mx-auto rounded-circle" src="{{ url('/landing') }}/assets/img/team/foto1.jpg" alt="..." />
					<h4>Febby Saka Wuni</h4>
					<p class="text-muted"></p>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="team-member">
					<img class="mx-auto rounded-circle" src="{{ url('/landing') }}/assets/img/team/3.jpg" alt="..." />
					<h4>Feby Maulana Hendrayatno</h4>
					<p class="text-muted"></p>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Aplikasi sanggar tari adalah aplikasi yang menangani pengelolaan data murid, pelatih, jadwal, penyewaan, dan transaksi yang ada di dalam sanggar tari.  </p></div>
		</div>
	</div>
</section>
<<<<<<< HEAD
<!-- Clients-->
<div class="py-5">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-3 col-sm-6 my-3">
				<a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{ url('/landing') }}/assets/img/logos/microsoft.svg" alt="..." /></a>
			</div>
			<div class="col-md-3 col-sm-6 my-3">
				<a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{ url('/landing') }}/assets/img/logos/google.svg" alt="..." /></a>
			</div>
			<div class="col-md-3 col-sm-6 my-3">
				<a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{ url('/landing') }}/assets/img/logos/facebook.svg" alt="..." /></a>
			</div>
			<div class="col-md-3 col-sm-6 my-3">
				<a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{ url('/landing') }}/assets/img/logos/ibm.svg" alt="..." /></a>
			</div>
		</div>
	</div>
</div>

@endsection
=======
@endsection
>>>>>>> 1d86614f03d9b6dc6510d3b964626a7e527704c7
