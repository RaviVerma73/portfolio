
<?php $__env->startSection('content'); ?>
	<div class="page new-skin">

		<!-- preloader -->
		<div class="preloader">
			<div class="centrize full-width">
				<div class="vertical-center">
					<div class="spinner">
						<div class="double-bounce1"></div>
						<div class="double-bounce2"></div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- background -->
		<div class="background gradient">
			<ul class="bg-bubbles">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>

		<!--
			Container
		-->
		<div class="container opened" data-animation-in="fadeInLeft" data-animation-out="fadeOutLeft">

			<!--
				Header
			-->
			<header class="header">

				<!-- header profile -->
				<div class="profile">
					<div class="title"><?php echo e($data['about']->name); ?></div>
					<?php
						$designation = explode(',', $data['about']->designation);
					?>
					<div class="subtitle subtitle-typed">
						<div class="typing-title">
						<?php $__currentLoopData = $designation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<p><?php echo e($d_val); ?></p>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					</div>
				</div>

				<!-- menu btn -->
				<!--<a href="#" class="menu-btn"><span></span></a>-->

				<!-- menu -->
                <?php echo $__env->make('portfolio.layout._sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- menu -->


			</header>

			<!--
				Card - Started
			-->
			<div class="card-started" id="home-card">

				<!--
					Profile
				-->
				<div class="profile no-photo">

					<!-- profile image -->
					<?php
						$imageUrl = asset('storage/img/'.$data['about']->image);
					?>

					<div class="slide" style="background-image: url('<?php echo e($imageUrl); ?>');"></div>

					<!-- profile titles -->
					<div class="title"><?php echo e($data['about']->name); ?></div>
					<!--<div class="subtitle">Web Designer</div>-->
					<div class="subtitle subtitle-typed">
						<div class="typing-title">
						

						<?php $__currentLoopData = $designation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<p><?php echo e($val); ?></p>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						</div>
					</div>

					<!-- profile socials -->
					<div class="social">
						<a target="_blank" href="https://dribbble.com/"><span class="fa fa-dribbble"></span></a>
						<a target="_blank" href="https://twitter.com/"><span class="fa fa-twitter"></span></a>
						<a target="_blank" href="https://github.com/"><span class="fa fa-github"></span></a>
						<a target="_blank" href="https://www.spotify.com/"><span class="fa fa-spotify"></span></a>
						<a target="_blank" href="https://stackoverflow.com/"><span
								class="fa fa-stack-overflow"></span></a>
					</div>

					<!-- profile buttons -->
					<div class="lnks">
						<a href="<?php echo e(asset('storage/Doc/'.$data['about']->cv)); ?>" class="lnk" target='_blank'>
							<span class="text">Download CV</span>
							<span class="ion ion-archive"></span>
						</a>
						<a href="#" class="lnk discover">
							<span class="text">Contact Me</span>
							<span class="arrow"></span>
						</a>
					</div>

				</div>

			</div>

			<!-- 
				Card - About
			-->
			<div class="card-inner animated active" id="about-card">
				<div class="card-wrap">

					<!-- 
						About 
					-->
					<div class="content about">

						<!-- title -->
						<div class="title">About Me</div>

						<!-- content -->
						<div class="row">
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="text-box">
									<p>
										<?php echo e($data['about']->descreption); ?>

									</p>
								</div>
							</div>
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="info-list">
									<ul>
										<?php if($data['about']->age): ?>
										<li><strong>Age . . . . .</strong><?php echo e($data['about']->age); ?></li>
										<?php endif; ?>
										<?php if($data['about']->residence): ?>
										<li><strong>Residence . . . . .</strong><?php echo e($data['about']->residence); ?></li>
										<?php endif; ?>
										<?php if($data['about']->freelance): ?>
										<li><strong>Freelance . . . . .</strong><?php echo e($data['about']->freelance); ?></li>
										<?php endif; ?>
										<?php if($data['about']->address): ?>
										<li><strong>Address . . . . .</strong><?php echo e($data['about']->address); ?></li>
										<?php endif; ?>
									</ul>
								</div>
							</div>
							<div class="clear"></div>
						</div>

					</div>

					<!--
						Services
					-->
					<div class="content services">

						<!-- title -->
						<div class="title">My Services</div>

						<!-- content -->
						<div class="row service-items border-line-v">
							<!-- service item -->
							<?php $__currentLoopData = $data['services']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $s_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								
								<div class="col col-d-6 col-t-6 col-m-12 border-line-h">
									<div class="service-item">
										<div class="icon">
											<span class="<?php echo e($s_val->icon); ?>"></span>
										</div>
										<div class="name">
											<span><?php echo e($s_val->name); ?> </span>
										</div>
										<div class="desc">
											<div>
												<p><?php echo e($s_val->description); ?></p>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<!-- service item -->
							
							<!-- service item -->
							
							<!-- service item -->
							
						</div>
						<div class="clear"></div>

					</div>

					<!--
						Price Tables
					-->
					

					<!--
						Fun Fact
					-->
					

					<!--
						Clients
					-->
					

					<!-- Quote -->
					<div class="content quote">

						<!-- title -->
						<div class="title">
							<span>Quote</span>
						</div>

						<!-- content -->
						<div class="row">
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="revs-item">
									<div class="text">
										<div>
											<?php echo e($data['about']->quota); ?>

										</div>
									</div>
									<div class="user">
										<div class="img">
											<img src="<?php echo e($imageUrl); ?>" alt="<?php echo e($data['about']->name); ?>" style="width: 57px;height: 55px;" />
										</div>
										<div class="info">
											<div class="name"><?php echo e($data['about']->name); ?></div>
											<div class="company"><?php echo $designation[0] ?></div>
										</div>
										<div class="clear"></div>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>

					</div>

				</div>
			</div>

			<!--
				Card - Resume
			-->
			<div class="card-inner" id="resume-card">
				<div class="card-wrap">

					<!--
						Resume
					-->
					<div class="content resume">

						<!-- title -->
						<div class="title">Resume</div>

						<!-- content -->
						<div class="row">

							<!-- experience -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="resume-title border-line-h">
									<div class="icon"><i class="fa fa-briefcase"></i></div>
									<div class="name">Experience</div>
								</div>
								<div class="resume-items">
									<div class="resume-item border-line-h active">
										<div class="date">2013 - Present</div>
										<div class="name">Art Director</div>
										<div class="company">Facebook Inc.</div>
										<p>
											Collaborate with creative and development teams on the execution of ideas.
										</p>
									</div>
									<div class="resume-item border-line-h">
										<div class="date">2011 - 2012</div>
										<div class="name">Front-end Developer</div>
										<div class="company">Google Inc.</div>
										<p>
											Monitored technical aspects of the front-end delivery for several projects.
										</p>
									</div>
									<div class="resume-item">
										<div class="date">2009 - 2010</div>
										<div class="name">Senior Developer</div>
										<div class="company">Abc Inc.</div>
										<p>
											Optimize website performance using latest technology.
										</p>
									</div>
								</div>
							</div>

							<!-- education -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="resume-title border-line-h">
									<div class="icon"><i class="fa fa-university"></i></div>
									<div class="name">Education</div>
								</div>
								<div class="resume-items">
									<div class="resume-item border-line-h">
										<div class="date">2006 - 2008</div>
										<div class="name">Art University</div>
										<div class="company">New York</div>
										<p>
											Bachelor's Degree in Computer Science ABC Technical Institute, Jefferson,
											Missouri
										</p>
									</div>
									<div class="resume-item border-line-h">
										<div class="date">2005 - 2006</div>
										<div class="name">Programming Course</div>
										<div class="company">Paris</div>
										<p>
											Coursework - Git, WordPress, Javascript, iOS, Android.
										</p>
									</div>
									<div class="resume-item">
										<div class="date">2004 - 2005</div>
										<div class="name">Web Design Course</div>
										<div class="company">London</div>
										<p>
											Converted Photoshop layouts to web pages using HTML, CSS, and JavaScript
										</p>
									</div>
								</div>
							</div>

							<div class="clear"></div>
						</div>

					</div>

					<!--
						Skills
					-->
					<div class="content skills">

						<!-- title -->
						<div class="title">My Skills</div>

						<!-- content -->
						<div class="row">

							<!-- skill item -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="skills-list">
									<div class="skill-title border-line-h">
										<div class="icon"><i class="fa fa-paint-brush"></i></div>
										<div class="name">Design</div>
									</div>
									<ul>
										<li class="border-line-h">
											<div class="name">Web Design</div>
											<div class="progress">
												<div class="percentage" style="width:90%;"></div>
											</div>
										</li>
										<li class="border-line-h">
											<div class="name">Write Music</div>
											<div class="progress">
												<div class="percentage" style="width:65%;"></div>
											</div>
										</li>
										<li class="border-line-h">
											<div class="name">Photoshop</div>
											<div class="progress">
												<div class="percentage" style="width:75%;"></div>
											</div>
										</li>
										<li>
											<div class="name">Graphic Design</div>
											<div class="progress">
												<div class="percentage" style="width:85%;"></div>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<!-- skill item -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="skills-list dotted">
									<div class="skill-title border-line-h">
										<div class="icon"><i class="fa fa-flag"></i></div>
										<div class="name">Languages</div>
									</div>
									<ul>
										<li class="border-line-h">
											<div class="name">English</div>
											<div class="progress">
												<div class="percentage" style="width:90%;"></div>
											</div>
										</li>
										<li class="border-line-h">
											<div class="name">German</div>
											<div class="progress">
												<div class="percentage" style="width:60%;"></div>
											</div>
										</li>
										<li class="border-line-h">
											<div class="name">Italian</div>
											<div class="progress">
												<div class="percentage" style="width:30%;"></div>
											</div>
										</li>
										<li>
											<div class="name">French</div>
											<div class="progress ">
												<div class="percentage" style="width:70%;"></div>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<!-- skill item -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="skills-list circles">
									<div class="skill-title border-line-h">
										<div class="icon"><i class="fa fa-code"></i></div>
										<div class="name">Coding</div>
									</div>
									<ul>
										<li>
											<div class="name">WordPress</div>
											<div class="progress p90">
												<span>90%</span>
											</div>
										</li>
										<li>
											<div class="name">PHP / MYSQL</div>
											<div class="progress p75">
												<span>75%</span>
											</div>
										</li>
										<li>
											<div class="name">Angular / JavaScript</div>
											<div class="progress p85">
												<span>85%</span>
											</div>
										</li>
										<li>
											<div class="name">HTML / CSS</div>
											<div class="progress p95">
												<span>95%</span>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<!-- skill item -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="skills-list list">
									<div class="skill-title border-line-h">
										<div class="icon"><i class="fa fa-list"></i></div>
										<div class="name">Knowledge</div>
									</div>
									<ul>
										<li>
											<div class="name">Website hosting</div>
										</li>
										<li>
											<div class="name">iOS and android apps</div>
										</li>
										<li>
											<div class="name">Create logo design</div>
										</li>
										<li>
											<div class="name">Design for print</div>
										</li>
										<li>
											<div class="name">Modern and mobile-ready</div>
										</li>
										<li>
											<div class="name">Advertising services include</div>
										</li>
										<li>
											<div class="name">Graphics and animations</div>
										</li>
										<li>
											<div class="name">Search engine marketing</div>
										</li>
									</ul>
								</div>
							</div>

							<div class="clear"></div>
						</div>

					</div>

					<!--
						Testimonials
					-->
					<div class="content testimonials">

						<!-- title -->
						<div class="title">Testimonials</div>

						<!-- content -->
						<div class="row testimonials-items">

							<!-- client item -->
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="revs-carousel default-revs">
									<div class="owl-carousel">
										<div class="item">
											<div class="revs-item">
												<div class="text">
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum
													dolor sit amet, consectetur adipiscing elit.
												</div>
												<div class="user">
													<div class="img"><img src="images/man1.jpg" alt="" /></div>
													<div class="info">
														<div class="name">Helen Floyd</div>
														<div class="company">Art Director</div>
													</div>
													<div class="clear"></div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="revs-item">
												<div class="text">
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum
													dolor sit amet, consectetur adipiscing elit.
												</div>
												<div class="user">
													<div class="img"><img src="images/man1.jpg" alt="" /></div>
													<div class="info">
														<div class="name">Robert Chase</div>
														<div class="company">CEO</div>
													</div>
													<div class="clear"></div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="revs-item">
												<div class="text">
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum
													dolor sit amet, consectetur adipiscing elit.
												</div>
												<div class="user">
													<div class="img"><img src="images/man1.jpg" alt="" /></div>
													<div class="info">
														<div class="name">Helen Floyd</div>
														<div class="company">Art Director</div>
													</div>
													<div class="clear"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="clear"></div>
						</div>

					</div>

				</div>
			</div>

			<!--
				Card - Works
			-->
			<div class="card-inner" id="works-card">
				<div class="card-wrap">

					<!--
						Works
					-->
					<div class="content works">

						<!-- title -->
						<div class="title">Recent Works</div>

						<!-- filters -->
						<div class="filter-menu filter-button-group">
							<div class="f_btn active">
								<label><input type="radio" name="fl_radio" value="grid-item" />All</label>
							</div>
							
							
							<div class="f_btn">
								<label><input type="radio" name="fl_radio" value="E-commerce" />E-commerce</label>
							</div>
							<div class="f_btn">
								<label><input type="radio" name="fl_radio" value="design" />Content</label>
							</div>
						</div>

						<!-- content -->
						<div class="row grid-items border-line-v">
						<?php
							$type = [
								0 => 'E-commerce',
								1 => 'design'
							];
						?>
						
						<?php $__currentLoopData = $data['work']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key_w => $val_w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col col-d-6 col-t-6 col-m-12 grid-item <?php echo e($type[$key_w]); ?> border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="#popup-1" class="has-popup-media">
											<img src="<?php echo e(asset('storage/work_img/'.$val_w->image)); ?>" alt="" />
											<span class="info">
												<span class="ion ion-images"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="#popup-1" class="name has-popup-media"><?php echo e($val_w->title); ?></a>
										<div class="category">Content</div>
									</div>
									<div id="popup-1" class="popup-box mfp-fade mfp-hide">
										<div class="content">
											<div class="image">
												<img src="images/works/work4.jpg" alt="">
											</div>
											<div class="desc">
												<div class="post-box">
													<h1>Mobile Application</h1>
													<div class="blog-detail">Design</div>
													<div class="blog-content">
														<p>
															So striking at of to welcomed resolved. Northward by
															described up household therefore
															attention. Excellence decisively nay man yet impression for
															contrasted remarkably.
														</p>
														<p>
															Forfeited you engrossed but gay sometimes explained. Another
															as studied it to evident.
															Merry sense given he be arise. Conduct at an replied removal
															an amongst. Remaining
															determine few her two cordially admitting old.
														</p>
														<blockquote>
															Vestibulum ante ipsum primis in faucibus orci luctus et
															ultrices posuere cubilia
															Curae; Pellentesque suscipit.
														</blockquote>
														<p>
															Tiled say decay spoil now walls meant house. My mr interest
															thoughts screened of outweigh
															removing. Evening society musical besides inhabit ye my.
															Lose hill well up will he over on.
															Increasing sufficient everything men him admiration
															unpleasing sex.
														</p>
														<ul class="list-style">
															<li>Greatest properly off ham exercise all.</li>
															<li>Unsatiable invitation its possession nor off.</li>
															<li>All difficulty estimating unreserved increasing the
																solicitude.</li>
														</ul>
														<p>
															Unpleasant astonished an diminution up partiality. Noisy an
															their of meant. Death means
															up civil do an offer wound of.
														</p>
													</div>
													<a href="#" class="button">
														<span class="text">View Project</span>
														<span class="arrow"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<!-- work item photo -->
							

							<!-- work item video -->
							

							<!-- work item music -->
							

							<!-- work item design -->
							

							<!-- work item photo -->
							

							<!-- work item music -->
							

							<!-- work item video -->
							

							<!-- work item design -->
							

							<div class="clear"></div>
						</div>

					</div>

				</div>
			</div>

			<!--
				Card - Blog
			-->
			<div class="card-inner blog" id="blog-card">
				<div class="card-wrap">

					<!-- Blog -->
					<div class="content blog">

						<!-- title -->
						<div class="title">
							<span>Blog</span>
						</div>

						<!-- content -->
						<div class="row border-line-v">
							<!-- blog item -->
							<?php $__currentLoopData = $data['blog']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key_b => $val_b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col col-d-6 col-t-6 col-m-12">
								<div class="box-item">
									<div class="image">
										<a href="blog-post-new.html">
											<img src="<?php echo e(asset('storage/blog_img/'.$val_b->image)); ?>" alt="By spite about do of allow" />
											<span class="info">
												<span class="ion ion-document-text"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="blog-post-new.html">
											<span class="date"><?php echo e(date('M d, Y',strtotime($val_b->created_at))); ?></span>
										</a>
										<a href="blog-post-new.html" class="name"><?php echo e($val_b->title); ?></a>
										<div class="text">
											<p><?php echo e($val_b->description); ?></p>
										</div>
									</div>
								</div>
							</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<!-- blog item -->
							
							<!-- blog item -->
							
							<!-- blog item -->
							
							<div class="clear"></div>
						</div>

						

					</div>

				</div>
			</div>

			<!--
				Card - Contacts
			-->
			<div class="card-inner contacts" id="contacts-card">
				<div class="card-wrap">

					<!--
						Conacts Info
					-->
					<div class="content contacts">

						<!-- title -->
						<div class="title">Get in Touch</div>

						<!-- content -->
						<div class="row">
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="map" id="map"></div>
								<div class="info-list">
									<ul>
										<li><strong>Address . . . . .</strong> <?php echo e($data['about']->address); ?></li>
										<li><strong>Email . . . . .</strong> <?php echo e($data['about']->email); ?></li>
										<li><strong>Phone . . . . .</strong> <?php echo e($data['about']->phone); ?></li>
										<li><strong>Freelance . . . . .</strong> <?php echo e($data['about']->freelance); ?></li>
									</ul>
								</div>
							</div>
							<div class="clear"></div>
						</div>

					</div>

					<!--
						Contact Form
					-->
					<div class="content contacts">

						<!-- title -->
						<div class="title">Contact Form</div>

						<!-- content -->
						<div class="row">
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="contact_form">
									<form id="cform" method="post" >
										<div class="row">
											<div class="col col-d-6 col-t-6 col-m-12">
												<div class="group-val">
													<input type="text" class="full_name" name="name" placeholder="Full Name" />
													<span class='error_name' style='color:red'></span>
												</div>
											</div>
											<div class="col col-d-6 col-t-6 col-m-12">
												<div class="group-val">
													<input type="text" class="email" name="email" placeholder="Email Address" />
													<span class='error_email' style='color:red'></span>
												</div>
											</div>
											<div class="col col-d-12 col-t-12 col-m-12">
												<div class="group-val">
													<textarea class="message" name="message"  placeholder="Your Message"></textarea>
													<span class='error_message' style='color:red'></span>
												</div>
											</div>
										</div>
										<div class="align-left">
											<a href="#" class="button contact_submit" onclick="contact_submit(); return false;">
												<span class="text">Send Message</span>
												<span class="arrow"></span>
											</a>
										</div>
									</form>
									<div class="alert-success">
										<p>Thanks, your message is sent successfully.</p>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>

					</div>

				</div>
			</div>

		</div>

		<div class="s_overlay"></div>
		<div class="content-sidebar">
			<div class="sidebar-wrap search-form">
				<aside id="secondary" class="widget-area">
					<section id="search-2" class="widget widget_search">
						<label>
							<span class="screen-reader-text">Search for:</span>
							<input type="search" class="search-field" placeholder="Search …" value="" name="s">
						</label>
						<input type="submit" class="search-submit" value="Search">
					</section>
					<section class="widget widget_recent_entries">
						<h2 class="widget-title">
							<span class="widget-title-span"><span class="first-word">Recent</span> Posts</span>
						</h2>
						<ul>
							<li>
								<a href="#">Creativity Is More Than</a>
							</li>
							<li>
								<a href="#">Designing the perfect</a>
							</li>
							<li>
								<a href="#">Music Player Design</a>
							</li>
							<li>
								<a href="#">A Song And Dance Act</a>
							</li>
							<li>
								<a href="#">By spite about do of allow</a>
							</li>
						</ul>
					</section>
					<section class="widget widget_recent_comments">
						<h2 class="widget-title">
							<span class="widget-title-span"><span class="first-word">Recent</span> Comments</span>
						</h2>
						<ul>
							<li class="recentcomments">
								<span class="comment-author-link">JOHN SMITH</span> on <a href="#">Creativity Is More
									Than</a>
							</li>
							<li class="recentcomments">
								<span class="comment-author-link">ADAM SMITH</span> on <a href="#">Creativity Is More
									Than</a>
							</li>
							<li class="recentcomments">
								<span class="comment-author-link">admin</span> on <a href="#">Designing the perfect</a>
							</li>
							<li class="recentcomments">
								<span class="comment-author-link">admin</span> on <a href=#">Designing the perfect</a>
							</li>
							<li class="recentcomments">
								<span class="comment-author-link">James</span> on <a href="#">Designing the perfect</a>
							</li>
						</ul>
					</section>
					<section class="widget widget_archive">
						<h2 class="widget-title">
							<span class="widget-title-span">
								<span class="first-letter">Archives</span>
							</span>
						</h2>
						<ul>
							<li>
								<a href="#">November 2018</a>
							</li>
						</ul>
					</section>
					<section class="widget widget_categories">
						<h2 class="widget-title">
							<span class="widget-title-span"><span class="first-letter">Categories</span></span>
						</h2>
						<ul>
							<li class="cat-item cat-item-2">
								<a href="#">Design</a>
							</li>
							<li class="cat-item cat-item-3">
								<a href="#">Music</a>
							</li>
						</ul>
					</section>
					<section class="widget widget_meta">
						<h2 class="widget-title">
							<span class="widget-title-span"><span class="first-letter">Meta</span></span>
						</h2>
						<ul>
							<li><a href="#">Log in</a></li>
							<li><a href="#">Entries feed</a></li>
							<li><a href="#">Comments feed</a></li>
							<li><a href="#">WordPress.org</a></li>
						</ul>
					</section>
				</aside>
			</div>
			<span class="close"></span>
		</div>

	</div>

	<!-- bslthemes.com buttons html begin -->
	<div class="bsl-popup" data-theme="ryancv" data-category="html">
		<div class="bsl-popup__buttons"></div>
		<div class="bsl-popup__content bsl-popup__content-related">
			<div class="bsl-popup__menu"></div>
			<div class="bsl-popup__tabs">
				<div class="bsl-popup__tab bsl-popup__tab-demo"></div>
				<div class="bsl-popup__tab bsl-popup__tab-all"></div>
				<div class="bsl-popup__tab bsl-popup__tab-related"></div>
				<div class="bsl-popup__tab bsl-popup__tab-version"></div>
			</div>
		</div>
		<div class="bsl-popup__content bsl-popup__content-help"></div>
	</div>
	<!-- bslthemes.com buttons html end -->
<?php $__env->stopSection(); ?>
<!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
function contact_submit(){
    var full_name = $('.full_name').val();
    var email = $('.email').val();
    var message = $('.message').val();
	var falge = true;
	if(full_name == ''){
		$('.error_name').html('Full name field is required.')
		falge = false;
	}else{
		$('.error_name').html('')
	}
	if(email == ''){
		$('.error_email').html('Email field is required.')
		falge = false;
	}else{
		$('.error_email').html('')
	}
	if(message == ''){
		$('.error_message').html('Message field is required.')
		falge = false;
	}else{
		$('.error_message').html('')
	}
	
	if(falge){	
		$.ajax({
			url: "<?php echo e(route('contact')); ?>", // Use Blade syntax to generate the route URL
			type: "POST",
			dataType:'json',
			data: {
				full_name: full_name,
				email: email,
				message: message,
				_token: "<?php echo e(csrf_token()); ?>" // Important: CSRF token for Laravel
			},
			beforeSend: function () {
				$('.contact_submit').css('disabled', true); //Disable the button before sending request
			},
			success: function(res){
				if(res.status){
					$('.full_name').val('');
					$('.email').val('');
					$('.message').val('');
					  toastr.success(res.message);
				}else{
					toastr.error(res.message);
				}
			},
			error: function(xhr){
				var error = JSON.parse(xhr.responseText);
				console.log(error)
			}
			
		});
	}
}
</script> 

<?php echo $__env->make('portfolio.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel-Crud\project-rvi\resources\views/portfolio/index.blade.php ENDPATH**/ ?>