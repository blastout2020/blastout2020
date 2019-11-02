<?php

	$this->load->view('user/head');

?>

<body> 

<div id="load-screen">

	<div id="loading"></div>

	<div id="loading1"></div>

</div>

<!-- <div class="loader"></div> -->

<div class="main-agile">

	<!-- banner -->

	<div id="home" class="w3ls-banner"> 

		<!-- banner-text -->

		<div class="slider">

			<div class="callbacks_container">

				<ul class="rslides callbacks callbacks1" id="slider4">

					<li>

						<div class="w3layouts-banner-top">

							<div class="agileits-banner-info">

								<div class="w3layouts-posi-1">

								</div>

								<div class="w3layouts-posi-2">

								</div>

								<h4>Balairung Klaten Association</h4>
								
								<br>
								
								<h2 style="color:white;">Proudly Present</h2>

								<h3>BLASTOUT 2020</h3>

								<h5>"Feel The Real"</h5>

								<div class="w3layouts-posi-3">

								</div>

								<div class="w3layouts-posi-4">

								</div>
								
							    <br><br><br><br><br><br>

									<a href="#maintop" class="scroll">
									    
									   <div style="bottom:20px; display:block; color:#83111b; padding-top:2px; height:35px; width:auto; border-radius:17px; background-color:#e8af14; border: 2px solid #e8af14; -webkit-animation: bounce 2s infinite ease-in-out;">
										
										<div style="font-size:20px;">Click Here to Start Your Blastious Journey!</div>
										
										</div>

									</a>

								

							</div>	

						</div>

					</li>
					<!-- <li>

						<div class="w3layouts-banner-top t2" id="detektor">	

						</div>

					</li> -->

				</ul>

			</div>

			<div class="clearfix"> </div>

		</div>

	</div>	

	<!-- //banner --> 

</div>	

<!-- header --> 

<div class="header" id="maintop">
    
    <div class="menu-utama">
        
        <img src="assets/ico/bo2020.png" display="block" width="150" height="65" alt="logo">
        
        <div class="menu-dalam">
            
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">

			<nav class="cl-effect-6" id="cl-effect-6">

				<ul class="nav navbar-nav">

					<li><a href="#about" class="scroll">Tentang</a></li>

					<li><a href="#services" class="scroll">Manfaat</a></li>

					<li><a href="#team" class="scroll">Tim</a></li>

					<li><a href="#testimoni" class="scroll">Testimoni</a></li>

					<li><a href="#gallery" class="scroll">Galeri</a></li>

					<li><a href="#" class="sign" data-toggle="modal" data-target="#mymodal"><i class="fa fa-sign-in" style="color: white" aria-hidden="true"></i> Login </a></li>

				</ul>

			</nav>

		</div>
            
        </div>
        
    </div>

	<div class="clearfix"></div>

</div>

<!-- //header --> 

	<!-- modal -->

<div class="modal fade" id="mymodal"  role="dialog">

	<div class="main-agileinfo"> 

		<div class="agileui-forms">

			<div class="container-form">

				<div class="form-item log-in"><!-- login form-->

					<div class="w3table agileinfo"> 

						<div class="w3table-cell register"> 

							<div class="w3table-tophead">

								<h2>Masuk</h2>

							</div>

							<!-- <form action="#" name="login_form" method="post">  -->
							<?php echo form_open(base_url(),['name'=>'login_form'] );?>
								<div class="fields-grid">

									<div class="styled-input agile-styled-input-top">

										<input style="text-transform: uppercase;" type="text" name="Username" required=""> 

										<label>Username</label>

										<span></span>

									</div>

									<div class="styled-input">

										<input type="password" id="showPassword" name="Password" style="width:75%" required="">

										<label>Password</label>

										<input type="button"  onclick="myFunction()" value="show">

									</div>

									<div class="form-group">
									<label>Masukan Captcha : </label>
									<span><?php echo $cap;?></span>
									<input type="text" name="captcha" required>
									<?php echo $captcha_return; ?>
									</div>									

									<input type="submit" id ="butlog" name="login" value="login"> 

								</div>

							<!-- </form> -->
							<?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash()); ?>

							<?php echo form_close()?>  

						</div>

					</div>

				</div>

				<div class="form-item sign-up"><!-- sign-up form-->

					<div class="w3table w3-agileits">

						<div class="w3table-cell register">   

								<h3>Daftar</h3>

							<?php echo form_open(base_url(),['name'=>'register_form'] );?>
							<form>

							<form action="" method="post">

								<div class="fields-grid">

									<div class="styled-input agile-styled-input-top">

										<input type="text" name="nama" disabled>

										<label>Nama</label>

										<span></span>

									</div>

									<div class="styled-input">

										<input type="tel" name="phone" disabled>

										<label>No HP</label>

										<span></span>

									</div>

									<div class="styled-input">

										<input type="text" name="sekolah" disabled>

										<label>Sekolah</label>

										<span></span>

									</div>

									<div class="styled-input">

										<span style="padding-left: 10px">Jurusan : </span>

										<span style="padding-left: 10px"><input type="radio" name="jurusan" value="Saintek" disabled>Saintek</span>

										<span style="padding-left: 10px"><input type="radio" name="jurusan" value="Soshum" disabled>Soshum</span>

									</div>

									<div class="styled-input" id="recaptchareg">

									</div>

									<div class="clear"> </div>
									<input type="submit" id ="butreg" name="register" value="register" disabled>

								</div>


							</form>

						</div>

					</div>

				</div>

			</div>

			<div class="container-info">

				<div class="info-w3lsitem">

					<div class="w3table">

						<div class="w3table-cell">

							<p> Sudah Punya Akun ? </p>

							<div class="btn"> Masuk </div>

						</div>

					</div>

				</div>

				<div class="info-w3lsitem">

					<div class="w3table">

						<div class="w3table-cell">

							<p> Ingin Mendaftar ?</p>

							<div class="btn">Daftar</div>

						</div>

					</div>

				</div>

				<div class="clear"> </div>

			</div> 				

		</div> 

	</div>	

</div>

					 

<!-- //modal -->

<!-- About -->

<div class="content-agileits" id="about">

	<div class="welcome-w3">

		<div class="container">

			<h3 class="w3_tittle">"Tentang Blastout"</h3>

			<div class="welcome-grids">

				<div class="col-md-5 wel-grid1">

					<div class="port-7 effect-2">

						<div class="image-box">

							<img src="<?php echo base_url('assets/images/ketua.jpg')?>" alt="Image-2">

						</div>

						<div class="text-desc">

							<h4>Yoel Adisatya</h4>

							<p>Teknik Fisika - 2017</p>

						</div>

					</div>

				</div>

				<div class="col-md-7 wel-grid">

					<h4>Balairung Klass Try Out</h4>

					<p>BLASTOUT  adalah sebuah perhelatan akbar persembahan Balairung Klaten Association yang akan menghadirkan suasana 'Feel The Real' sbmptn mulai dari pendaftaran,pelaksanana,hingga pengumuman. Semua itu guna memberikan pengalaman adik-adik peserta akan Sbmptn sebenarnya dan juga adik2 peserta bisa mengukur kemampuan diri masing2 dengan adanya perangkingan secara nasional dan regional. Selain itu BlasOut 2019 juga akan memberikan gambaran adik2 peserta mengenai dunia perkuliahan,fakultas2 yg ada di ugm dengan konsep yang sangat menarik melalui gadjah mada fair dengan konsep yang sangat menarik  untuk dinanti2 dan tentunya akan ada banyak persembahan lagi dari kami balairungklass ugm untuk klaten tercinta.</p>

					<p>Lets join and regist your name !!!</p>

					<br>

					<div class="right-sign-grid">

						<!-- <img src="images/sign.png" alt=" "> -->

						<h5>Yoel - Ketua Panitia BlastOut 2020</h5>

					</div>

				</div>

				<div class="clearfix"></div>

			</div>

		</div>

	</div>

</div>

<!-- //About -->

<!-- services -->

<div class="services jarallax" id="services">

	<div class="container">

		<h3 class="w3_tittle">"Manfaat BlastOut"</h3>

		<div class="services-w3lsrow agileits-w3layouts">

			<div class="col-md-3 col-sm-3 col-xs-6 services-grids">  

				<i class="fa fa-trophy" style="color: #b31522" aria-hidden="true"></i> 

				<h4 style="color: #fff">Rank Nasional</h4>

				<p>Anda akan mengetahui peringkat anda di tingkat nasional</p>

			</div>

			<div class="col-md-3 col-sm-3 col-xs-6 services-grids">

				<div class="w3agile-servs-img">

					<i class="fa fa-newspaper-o" style="color: #b31522" aria-hidden="true"></i> 

					<h4 style="color: #fff">Feel The Real</h4>

					<p>Anda akan merasakan ujian yang didesain mirip dengan SBMPTN</p>

				</div>

			</div>

			<div class="col-md-3 col-sm-3 col-xs-6 services-grids">

				<div class="w3agile-servs-img">

					<i class="fa fa-desktop" style="color: #b31522" aria-hidden="true"></i>

					<h4 style="color: #fff">Sistem Website</h4>

					<p>Anda akan mendapatkan pengalaman sebelum menggunakan website resmi SBMPTN</p>

				</div>

			</div> 	

			<div class="col-md-3 col-sm-3 col-xs-6 services-grids">

				<div class="w3agile-servs-img">

					<i class="fa fa-bank" style="color: #b31522" aria-hidden="true"></i>

					<h4 style="color: #fff">Gadjah Mada Fair</h4>

					<p>Anda akan mendapatkan pandangan tentang jurusan yang ada di UGM</p>

				</div>

			</div> 

			<div class="clearfix"> </div>

		</div>	 

	</div>

</div>	

<!-- //services --> 

<!-- Stats -->

	<div class="stats-agileits">

	<div class="container">

		<h3 class="w3_tittle">"BlastOut 2018"</h3>

	</div>

		<div class="stats-info agileits w3layouts">

		<div class="container">

			<div class="col-md-4 col-sm-4 stats-grid agileits w3layouts stats-grid-3">

				<div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='2700' data-delay='3' data-increment="2">2700</div>

				<div class="stat-info-w3ls">

					<h4 class="agileits w3layouts">Peserta</h4>

				</div>

				<div class="clearfix"></div>

			</div>

			<div class="col-md-4 col-sm-4 agileits w3layouts col-sm-6 stats-grid stats-grid-1">

				<div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='1440' data-delay='3' data-increment="1">1440</div>

				<div class="stat-info-w3ls">

					<h4 class="agileits w3layouts">Saintek</h4>

				</div>

				<div class="clearfix"></div>

			</div>

			<div class="col-md-4 col-sm-4 agileits w3layouts stats-grid stats-grid-2">

				<div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='1260' data-delay='3' data-increment="1">1260</div>

				<div class="stat-info-w3ls">

					<h4 class="agileits w3layouts">Soshum</h4>

				</div>

				<div class="clearfix"></div>

			</div>

			<div class="clearfix"></div>

			</div>

		</div>

	</div>

<!-- //Stats -->  

<!-- team -->

<div class="team jarallax" id="team">

	<div class="container">

		<h3 class="w3_tittle">"Siapakah Mereka"</h3>

		<div class="team-grids">

			<div class="col-md-2 agileinfo-team-grid">

				<img src="<?php echo base_url('assets/images/pictacara.jpg')?>" alt="">

				<div class="captn">

					<h4>Rafi Hidayat</h4>

					<div class="w3l-social">

						<ul>

							<li><a href="https://www.instagram.com/rafihidayat20" target="blank"><i class="fa fa-instagram"></i></a></li>

						</ul>

					</div>

					<h6>"Koor Acara"</h6>

				</div>

			</div>

			<div class="col-md-2 agileinfo-team-grid">

				<img src="<?php echo base_url('assets/images/pictit.jpg')?>" alt="">

				<div class="captn">

					<h4>Rezqy Dwikara</h4>

					<div class="w3l-social">

						<ul>

							<li><a href="https://www.instagram.com/" target="blank"><i class="fa fa-instagram"></i></a></li>

						</ul>

					</div>

					<h6>"Koor IT"</h6>

				</div>

			</div>


			<div class="col-md-2 agileinfo-team-grid">

				<img src="<?php echo base_url('assets/images/pictticketing.jpg')?>" alt="">

				<div class="captn">

					<h4>Diah Rosalina</h4>

					<div class="w3l-social">

						<ul>

							<li><a href="https://www.instagram.com/diahrosalinafirdaus" target="blank"><i class="fa fa-instagram"></i></a></li>

						</ul>

					</div>

					<h6>"Koor Ticketing"</h6>

				</div>

			</div>

			<div class="col-md-2 agileinfo-team-grid">

				<img src="<?php echo base_url('assets/images/pictperkap.jpg')?>" alt="">

				<div class="captn">

					<h4>Irawan A</h4>

					<div class="w3l-social">

						<ul>

							<li><a href="https://instagram.com/irawan_abyantr" target="blank"><i class="fa fa-instagram"></i></a></li>

						</ul>

					</div>

					<h6>"Koor Perkap"</h6>

				</div>

			</div>

			<div class="col-md-2 agileinfo-team-grid">

				<img src="<?php echo base_url('assets/images/pictdanus.jpg')?>" alt="">

				<div class="captn">

					<h4>Bima K</h4>

					<div class="w3l-social">

						<ul>

							<li><a href="https://www.instagram.com/bimakrnwn_" target="blank"><i class="fa fa-instagram"></i></a></li>

						</ul>

					</div>

					<h6>"Koor Danus"</h6>

				</div>

			</div>

			<div class="col-md-2 agileinfo-team-grid">

				<img src="<?php echo base_url('assets/images/picthumpub.jpg')?>" alt="">

				<div class="captn">

					<h4>Rizki Olivia</h4>

					<div class="w3l-social">

						<ul>

							<li><a href="https://www.instagram.com/rizkioliviap" target="blank"><i class="fa fa-instagram"></i></a></li>

						</ul>

					</div>

					<h6>"Koor Humpub"</h6>

				</div>

			</div>

			<div class="clearfix"> </div>

		</div>

		<div class="team-grids">

			<div class="col-md-2 agileinfo-team-grid">

				<img src="<?php echo base_url('assets/images/pictbendahara.jpg')?>" alt="">

				<div class="captn">

					<h4>Puput Redita</h4>

					<div class="w3l-social">

						<ul>

							<li><a href="https://www.instagram.com/puputrps" target="blank"><i class="fa fa-instagram"></i></a></li>

						</ul>

					</div>

					<h6>"Bendahara"</h6>

				</div>

			</div>

			<div class="col-md-2 agileinfo-team-grid">

				<img src="<?php echo base_url('assets/images/pictkeamanan.jpg')?>" alt="">

				<div class="captn">

					<h4>Muh.M.Huda</h4>

					<div class="w3l-social">

						<ul>

							<li><a href="https://www.instagram.com/muchamad_huda" target="blank"><i class="fa fa-instagram"></i></a></li>

						</ul>

					</div>

					<h6>"Koor Keamanan"</h6>

				</div>

			</div>

			<div class="col-md-2 agileinfo-team-grid">

				<img src="<?php echo base_url('assets/images/pictpengawas.jpg')?>" alt="">

				<div class="captn">

					<h4>Erlina Dewi</h4>

					<div class="w3l-social">

						<ul>

							<li><a href="https://www.instagram.com/erlinaadewi_" target="blank"><i class="fa fa-instagram"></i></a></li>

						</ul>

					</div>

					<h6>"Koor Pengawas"</h6>

				</div>

			</div>

			<div class="col-md-2 agileinfo-team-grid">

				<img src="<?php echo base_url('assets/images/pictksk.jpg')?>" alt="">

				<div class="captn">

					<h4>Linda Agustina</h4>

					<div class="w3l-social">

						<ul>

							<li><a href="https://www.instagram.com/lindaagustina" target="blank"><i class="fa fa-instagram"></i></a></li>

						</ul>

					</div>

					<h6>"Koor KSK"</h6>

				</div>

			</div>

			<div class="col-md-2 agileinfo-team-grid">

				<img src="<?php echo base_url('assets/images/pictddd.jpg')?>" alt="">

				<div class="captn">

					<h4>Agustira</h4>

					<div class="w3l-social">

						<ul>

							<li><a href="https://instagram.com/agustiraindras" target="blank"><i class="fa fa-instagram"></i></a></li>

						</ul>

					</div>

					<h6>"Koor DDD"</h6>

				</div>

			</div>

			<div class="col-md-2 agileinfo-team-grid">

				<img src="<?php echo base_url('assets/images/pictkonsumsi.jpg')?>" alt="">

				<div class="captn">

					<h4>Annisa Nur A</h4>

					<div class="w3l-social">

						<ul>

							<li><a href="https://www.instagram.com/annisanazh" target="blank"><i class="fa fa-instagram"></i></a></li>

						</ul>

					</div>

					<h6>"Koor Konsumsi"</h6>

				</div>

			</div>

			<div class="clearfix"> </div>

		</div>

	</div>

</div>

<!-- //team -->

<!-- feedback -->

<div class="feedback_dot jarallax" id="testimoni">

	<div class=" feedback">

		<div class="container">

			<h3 class="w3_tittle">"Testimoni BlastOut 2018"</h3>

			<div class="agileits-feedback-grids">

				<div id="owl-demo" class="owl-carousel owl-theme">

					<div class="item">

						<div class="icon-w3l">

							<i class="fa fa-quote-left" style="color: #b31522" aria-hidden="true"></i>

						</div>

						<div class="feedback-info">

							<div class="feedback-top">

								<p>BO motivated banget dahh, dari BO banyak belajar sihh terutama pas lihat mas dan mbak bklass itu loo kok keren2 bet.. pengin saya,bisalah kudu bisa kek mas mbak bklass lahh wkwk. Dari BO kita bisa tahu tuhh sejauh mana kita belajar insyaallah, mbok disemangatin lagi belajarnya mumpung masih dikasih kesempatan belajar ya too. pokoknya BO mantavv djiwa </p>

							</div>

							<div class="feedback-grids">

								<div class="feedback-img">

									<img src="<?php echo base_url('assets/images/t1.jpg')?>" alt="" />

								</div>

								<div class="feedback-img-info">

									<h5>Alfi Sholihati</h5>

									<p>UGM, Kehutanan - 2018</p>

								</div>

								<div class="clearfix"> </div>

							</div>

						</div>	

					</div>
					<div class="item">

						<div class="icon-w3l">

							<i class="fa fa-quote-left" style="color: #b31522" aria-hidden="true"></i>

						</div>

						<div class="feedback-info">

							<div class="feedback-top">

								<p>Dengan mengikuti blastout saya bisa merasakan bagaimana SBMPTN itu. Blastout berbeda dengan TO lainnya, disini soalnya berbobot dan lengkap.  Pengawasnya juga gak main-main, dijamin hasil usaha sendiri gak tengok kanan kiri. Selain itu, ada pembahasan soal juga yang pastinya menambah ilmu. Pokoknya ga rugi deh ikut Blastout.</p>

							</div>

							<div class="feedback-grids">

								<div class="feedback-img">

									<img src="<?php echo base_url('assets/images/t9.jpg')?>" alt="" />

								</div>

								<div class="feedback-img-info">

									<h5>Rindi Tintiana</h5>

									<p>UGM, Proteksi Tanaman - 2018</p>

								</div>

								<div class="clearfix"> </div>

							</div>

						</div>	

					</div>

					<div class="item">

						<div class="icon-w3l">

							<i class="fa fa-quote-left" style="color: #b31522" aria-hidden="true"></i>

						</div>

						<div class="feedback-info">

							<div class="feedback-top">

								<p>blastout menjadi ajang kita untuk mengetahui seberapa jauh kemampuan kita untuk menghadapi SBMPTN ataupun Utul, gak nyesel ikut blastout 2018 deh </p>

							</div>

							<div class="feedback-grids">

								<div class="feedback-img">

									<img src="<?php echo base_url('assets/images/t2.jpg')?>" alt="" />

								</div>

								<div class="feedback-img-info">

									<h5>Ito Fajar Margoseto</h5>

									<p>Polines, Konstruksi Gedung - 2018</p>

								</div>

								<div class="clearfix"> </div>

							</div>

						</div>	

					</div>

					<div class="item">

						<div class="icon-w3l">

							<i class="fa fa-quote-left" style="color: #b31522" aria-hidden="true"></i>

						</div>

						<div class="feedback-info">

							<div class="feedback-top">

								<p>Awalnya cuman pengen latihan aja ngikut-ngikut tryout, tapi ternyataaa cinta begitu hebatnyaaa dengan soal yang bikin penasaran karenaaa menantang sampeee diulang-ulang lagi dirumah, DAN BUKAN CUMAN DAPET SENSASI THE REAL SBMPTN AJA TAPI DAPET HIBURAN YANG BIKIN REFRESHHHH GEWLAAA DEEE, BLASTOUT MEMANG MANTAAAPPP 😍😍😍</p>

							</div>

							<div class="feedback-grids">

								<div class="feedback-img">

									<img src="<?php echo base_url('assets/images/t3.png')?>" alt="" />

								</div>

								<div class="feedback-img-info">

									<h5>Emilia Sanjaya</h5>

									<p>UGM, Sosial Ekonomi Pertanian - 2018</p>

								</div>

								<div class="clearfix"> </div>

							</div>

						</div>	

					</div>

					<div class="item">

						<div class="icon-w3l">

							<i class="fa fa-quote-left" style="color: #b31522" aria-hidden="true"></i>

						</div>

						<div class="feedback-info">

							<div class="feedback-top">

								<p>Soal-soal TryOutnya membantu sekali untuk bersiap menghadapi SBMPTN</p>

							</div>

							<div class="feedback-grids">

								<div class="feedback-img">

									<img src="<?php echo base_url('assets/images/t5.jpg')?>" alt="" />

								</div>

								<div class="feedback-img-info">

									<h5>Awanda Suryaning Taristi</h5>

									<p>UNDIP, Desain Arsitektur - 2018</p>

								</div>

								<div class="clearfix"> </div>

							</div>

						</div>	

					</div>

					<div class="item">

						<div class="icon-w3l">

							<i class="fa fa-quote-left" style="color: #b31522" aria-hidden="true"></i>

						</div>

						<div class="feedback-info">

							<div class="feedback-top">

								<p>Ngaak nyesel ikut bo, soal2nya udah kaya sbm benerann, penilaiannya pun sudah sesuai ketenuan. Dan yang paling seru banyak acara hiburan dan ada opak ganjar juga wkwk. Seru deh pokoknya, beda banget sama to2 yg lain. Udah berpuluh2 kali ikut to cuma blastout yang paling grennng!</p>

							</div>

							<div class="feedback-grids">

								<div class="feedback-img">

									<img src="<?php echo base_url('assets/images/t6.jpg')?>" alt="" />

								</div>

								<div class="feedback-img-info">

									<h5>Enny Suryanti</h5>

									<p>UGM, Fakultas Hukum - 2018</p>

								</div>

								<div class="clearfix"> </div>

							</div>

						</div>	

					</div>

					<div class="item">

						<div class="icon-w3l">

							<i class="fa fa-quote-left" style="color: #b31522" aria-hidden="true"></i>

						</div>

						<div class="feedback-info">

							<div class="feedback-top">

								<p>Tahun kemarin ikut blastout soshum, soal TO nya mantap lah kayak sbm beneran, terus sistem tryoutnya juga berasa beneran sbm, penilaian pun juga kayak sbm, nggak nyesel ikut to blastout pokoknya. dan fyi satu2nya TO yg aku ikuti cuma blastout karena memang tdk mengecewakan. ceilah. intinya jgn lupa ikut blastout 2019, banyak ilmu dan pengalaman yang bakal bermanfaat!</p>

							</div>

							<div class="feedback-grids">

								<div class="feedback-img">

									<img src="<?php echo base_url('assets/images/t7.jpg')?>" alt="" />

								</div>

								<div class="feedback-img-info">

									<h5>Dania Titivany G</h5>

									<p>UNS, Ilkom - 2018</p>

								</div>

								<div class="clearfix"> </div>

							</div>

						</div>	

					</div>

					<div class="item">

						<div class="icon-w3l">

							<i class="fa fa-quote-left" style="color: #b31522" aria-hidden="true"></i>

						</div>

						<div class="feedback-info">

							<div class="feedback-top">

								<p>BlasOut tuh...acaranya keren, menarik, pembicara dan guest star nya juga oke, mengedukasi, dan memotivasi. Tapi, yang paling utama dan wow banget, kita bisa ngrasain pengalaman the real SBMPTN saat itu juga. Pokonya ga bakal nyesel dah ikut BlastOut, karena BlastOut "Feel The Real SBMPTN" 👌</p>

							</div>

							<div class="feedback-grids">

								<div class="feedback-img">

									<img src="<?php echo base_url('assets/images/t10.jpg')?>" alt="" />

								</div>

								<div class="feedback-img-info">

									<h5>Anwar Bayu Priyanto</h5>

									<p>UGM, D3 Sistem Informasi Geografis dan Penginderaan Jauh - 2018</p>

								</div>

								<div class="clearfix"> </div>

							</div>

						</div>	

					</div>

					<div class="item">

						<div class="icon-w3l">

							<i class="fa fa-quote-left" style="color: #b31522" aria-hidden="true"></i>

						</div>

						<div class="feedback-info">

							<div class="feedback-top">

								<p>Banyak banget yang ikut, ribuan. Ngga nyesel ikut TO-nya. Soalnya berbobot dan mengasah otak banget. Dari situ jadi sadar,kalau kita harus belajar walaupun cuma TO. Dan hasil TO-nya menjadi cambuk untuk belajar lebih giat buat SBMPTN</p>

							</div>

							<div class="feedback-grids">

								<div class="feedback-img">

									<img src="<?php echo base_url('assets/images/t8.jpg')?>" alt="" />

								</div>

								<div class="feedback-img-info">

									<h5>Mercia Widyasari</h5>

									<p>PKN STAN, D I Kepabeanan dan Cukai - 2018</p>

								</div>

								<div class="clearfix"> </div>

							</div>

						</div>	

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<!-- //feedback -->

<!-- gallery-->

<div class="gallery jarallax" id="gallery">

	<div class="container">

		<h3 class="w3_tittle">"Lihat Koleksi Kami"</h3>

		<div class="gallery-grids">

			<section>

				<ul id="da-thumbs" class="da-thumbs">

					<li>

						<a href="<?php echo base_url('assets/images/gmf4.jpg')?>" class="b-link-stripe b-animate-go  thickbox">

							<img src="<?php echo base_url('assets/images/gmf4.jpg')?>" alt="" />	

							<div>

								<h5>Antri yang Tertib</h5>

							</div>

						</a>

					</li>

					<li>

						<a href="<?php echo base_url('assets/images/gm2.jpg')?>" class="b-link-stripe b-animate-go  thickbox">

							<img src="<?php echo base_url('assets/images/gm2.jpg')?>" alt="" />

							<div>

								<h5>Harap Fokus</h5>

							</div>

						</a>

					</li>

					<li>

						<a href="<?php echo base_url('assets/images/gmf5.jpg')?>" class="b-link-stripe b-animate-go  thickbox">

							<img src="<?php echo base_url('assets/images/gmf5.jpg')?>" alt="" />

							<div>

								<h5>Tambah Teman Tambah Relasi</h5>

							</div>

						</a>

					</li>

					<li>

						<a href="<?php echo base_url('assets/images/gmf2.jpg')?>" class="b-link-stripe b-animate-go  thickbox">

							<img src="<?php echo base_url('assets/images/gmf2.jpg')?>" alt="" />	

							<div>

								<h5>Pak Ganjar Pranowo</h5>

							</div>

						</a>

					</li>

					<li>

						<a href="<?php echo base_url('assets/images/gmf1.jpg')?>" class="b-link-stripe b-animate-go  thickbox">

							<img src="<?php echo base_url('assets/images/gmf1.jpg')?>" alt="" />

							<div>

								<h5>Suasana GMF</h5>

							</div>

						</a>

					</li>

					<li>

						<a href="<?php echo base_url('assets/images/gmf3.jpg')?>" class="b-link-stripe b-animate-go  thickbox">

							<img src="<?php echo base_url('assets/images/gmf3.jpg')?>" alt="" />

							<div>

								<h5>Guest Star</h5>

							</div>

						</a>

					</li>

					<li>

						<a href="<?php echo base_url('assets/images/gm6.jpg')?>" class="b-link-stripe b-animate-go  thickbox">

							<img src="<?php echo base_url('assets/images/gm6.jpg')?>" alt="" />

							<div>

								<h5>Fashion Show di GMF</h5>

							</div>

						</a>

					</li>

					<li>	

						<a href="<?php echo base_url('assets/images/panitia.jpg')?>" class="b-link-stripe b-animate-go  thickbox">

							<img src="<?php echo base_url('assets/images/panitia.jpg')?>" alt="" />

							<div>

								<h5>Panitia BlastOut 2018</h5>

							</div>

						</a>

					</li>

					<li>

						<a href="<?php echo base_url('assets/images/gmf.jpg')?>" class="b-link-stripe b-animate-go  thickbox">

							<img src="<?php echo base_url('assets/images/gmf.jpg')?>" alt="" />

							<div>

								<h5>Stand Fakultas di GMF</h5>

							</div>

						</a>

					</li>

				</ul>

			</section>

		</div>

	</div>

</div>
	<script>
	  function myFunction() {
	  var x = document.getElementById("showPassword");
	  if (x.type === "password") {
	    x.type = "text";
	  } else {
	    x.type = "password";
	  }
	}	
	</script>

<!--//gallery-->

<?php

	$this->load->view('user/foot');

?>
