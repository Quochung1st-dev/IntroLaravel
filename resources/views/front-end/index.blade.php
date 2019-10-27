@extends('front-end.layouts.master')
@section('content')
        <div class="container">
            <div class="card-inner card-started active" id="home-card">

                <!-- Started Background -->
                <div class="slide" style="background-image: url(public/front-end/images/bg.jpg);"></div>

                <div class="centrize full-width">
                    <div class="vertical-center">

                        <!-- Started titles -->
                        <div class="title"><span>QUOC</span> HUNG IT</div>
                        <div class="subtitle">
                            I am
                            <div class="typing-title">
                                <p>a <strong>web developer.</strong></p>
                                <p>a <strong>blogger.</strong></p>
                                <p>a <strong>freelancer.</strong></p>
                                <p>a <strong>photographer.</strong></p>
                            </div>
                            <span class="typed-title"></span>
                        </div>

                    </div>
                </div>

            </div>

            <!--
				Card - About
			-->
            <div class="card-inner" id="about-card">
                <div class="row card-container">

                    <!--
						Card Wrap
					-->
                    <div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>

                        <!-- About Image -->
                        <div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url(public/front-end/images/profile.jpg);"></div>

                        <!--
							Inner Top
						-->
                        <div class="content inner-top">
                            <div class="row">
                                <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                                    <div class="title-bg">About Me</div>
                                    <div class="text">
                                        <p>
                                            <strong>Hello, I’m a Patrick</strong>, web-developer based on Paris. <br /> I have rich experience in web site design & building <br /> and customization. Also I am good at <strong>html, css, <br />
											wordpress, php, jquery, bootstrap.</strong>
                                        </p>
                                    </div>
                                    <div class="circle-bts">
                                        <a href="#"><span><i class="icon la la-download"></i>Download CV</span></a>
                                        <a href="#"><i class="icon la la-github"></i></a>
                                        <a href="#"><i class="icon la la-stack-overflow"></i></a>
                                        <a href="#"><i class="icon la la-skype"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--
							Services
						-->
                        <div class="content services">
                            <div class="row">
                                <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

                                    <!-- title -->
                                    <div class="title"><span>Our</span> Services</div>

                                </div>
                            </div>

                            <!-- service items -->
                            <div class="row service-items">

                                <!-- service item -->
                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                                    <div class="service-item card-box">
                                        <div class="icon"><i class="la la-html5"></i></div>
                                        <div class="name">Web Development</div>
                                        <p>
                                            Modern and mobile-ready website that will help of your marketing.
                                        </p>
                                    </div>
                                </div>

                                <!-- service item -->
                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                                    <div class="service-item card-box">
                                        <div class="icon"><i class="la la-music"></i></div>
                                        <div class="name">Music Writing</div>
                                        <p>
                                            Music copying, transcription, arranging and composition Services.
                                        </p>
                                    </div>
                                </div>

                                <!-- service item -->
                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                                    <div class="service-item card-box">
                                        <div class="icon"><i class="la la-bullhorn"></i></div>
                                        <div class="name">Advetising</div>
                                        <p>
                                            Advertising services include television, radio, print, mail and web.
                                        </p>
                                    </div>
                                </div>

                                <!-- service item -->
                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                                    <div class="service-item card-box">
                                        <div class="icon"><i class="la la-gamepad"></i></div>
                                        <div class="name">Game Development</div>
                                        <p>
                                            Developing memorable and unique mobile android, ios games.
                                        </p>
                                    </div>
                                </div>

                                <!-- service item -->
                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                                    <div class="service-item card-box">
                                        <div class="icon"><i class="la la-area-chart"></i></div>
                                        <div class="name">Analytics</div>
                                        <p>
                                            Basic, advanced, custom implementations and online media analysis.
                                        </p>
                                    </div>
                                </div>

                                <!-- service item -->
                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                                    <div class="service-item card-box">
                                        <div class="icon"><i class="la la-camera-retro"></i></div>
                                        <div class="name">Hosting</div>
                                        <p>
                                            Full-day or half-day photo shoots with all necessary equipment.
                                        </p>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!--
							Price Tables
						-->
                        <div class="content pricing">
                            <div class="row">
                                <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

                                    <!-- title -->
                                    <div class="title"><span>Pricing</span> Tables</div>

                                </div>
                            </div>

                            <!-- pricing items -->
                            <div class="row pricing-items">

                                <!-- pricing item -->
                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                                    <div class="pricing-item card-box">
                                        <div class="icon"><i class="la la-tachometer"></i></div>
                                        <div class="name">Basic</div>
                                        <div class="amount">
                                            <span class="dollar">$</span>
                                            <span class="number">22</span>
                                            <span class="period">hour</span>
                                        </div>
                                        <div class="feature-list">
                                            <ul>
                                                <li>Web Development</li>
                                                <li>Advetising</li>
                                                <li>Game Development</li>
                                                <li class="disable">Music Writing</li>
                                                <li class="disable">Photography <strong>new</strong></li>
                                            </ul>
                                        </div>
                                        <div class="lnks">
                                            <a href="#" class="lnk">Buy <span>Basic</span></a>
                                        </div>
                                    </div>
                                </div>

                                <!-- pricing item -->
                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                                    <div class="pricing-item card-box">
                                        <div class="icon"><i class="la la-rocket"></i></div>
                                        <div class="name">Pro</div>
                                        <div class="amount">
                                            <span class="dollar">$</span>
                                            <span class="number">48</span>
                                            <span class="period">hour</span>
                                        </div>
                                        <div class="feature-list">
                                            <ul>
                                                <li>Web Development</li>
                                                <li>Advetising</li>
                                                <li>Game Development</li>
                                                <li>Music Writing</li>
                                                <li>Photography <strong>new</strong></li>
                                            </ul>
                                        </div>
                                        <div class="lnks">
                                            <a href="#" class="lnk">Buy <span>Pro</span></a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!--
							Fun Fact
						-->
                        <div class="content fuct">
                            <div class="row">
                                <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

                                    <!-- title -->
                                    <div class="title"><span>Fun</span> Facts</div>

                                </div>
                            </div>

                            <!-- fuct items -->
                            <div class="row fuct-items">

                                <!-- fuct item -->
                                <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                                    <div class="fuct-item card-box">
                                        <div class="icon"><i class="la la-headphones"></i></div>
                                        <div class="name">47 Albumes Listened</div>
                                    </div>
                                </div>

                                <!-- fuct item -->
                                <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                                    <div class="fuct-item card-box">
                                        <div class="icon"><i class="la la-trophy"></i></div>
                                        <div class="name">15 Awards Won</div>
                                    </div>
                                </div>

                                <!-- fuct item -->
                                <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                                    <div class="fuct-item card-box">
                                        <div class="icon"><i class="la la-lightbulb-o"></i></div>
                                        <div class="name">54 Projects Completed</div>
                                    </div>
                                </div>

                                <!-- fuct item -->
                                <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                                    <div class="fuct-item card-box">
                                        <div class="icon"><i class="la la-flag-o"></i></div>
                                        <div class="name">10 Countries Visited</div>
                                    </div>
                                </div>

                                <!-- fuct item -->
                                <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                                    <div class="fuct-item card-box">
                                        <div class="icon"><i class="la la-book"></i></div>
                                        <div class="name">50+ Books Readed</div>
                                    </div>
                                </div>

                                <!-- fuct item -->
                                <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                                    <div class="fuct-item card-box">
                                        <div class="icon"><i class="la la-code"></i></div>
                                        <div class="name">100 000 Lines of Code</div>
                                    </div>
                                </div>

                                <!-- fuct item -->
                                <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                                    <div class="fuct-item card-box">
                                        <div class="icon"><i class="la la-smile-o"></i></div>
                                        <div class="name">49 Satisfied Customers</div>
                                    </div>
                                </div>

                                <!-- fuct item -->
                                <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                                    <div class="fuct-item card-box">
                                        <div class="icon"><i class="la la-bicycle"></i></div>
                                        <div class="name">1250 km Cycled</div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!--
							Clients
						-->
                        <div class="content clients">
                            <div class="row">
                                <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

                                    <!-- title -->
                                    <div class="title"><span>Our</span> Clients</div>

                                </div>
                            </div>

                            <!-- client items -->
                            <div class="row client-items">

                                <!-- client item -->
                                <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                                    <div class="client-item card-box">
                                        <div class="image">
                                            <a target="_blank" href="https://www.google.com">
												<img src="{!! url('public/front-end/images/clients/client_1.png') !!}" alt="" />
											</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- client item -->
                                <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                                    <div class="client-item card-box">
                                        <div class="image">
                                            <a target="_blank" href="https://www.google.com">
												<img src="{!! url('public/front-end/images/clients/client_3.png') !!}" alt="" />
											</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- client item -->
                                <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                                    <div class="client-item card-box">
                                        <div class="image">
                                            <a target="_blank" href="https://www.google.com">
												<img src="{!! url('public/front-end/images/clients/client_4.png') !!}" alt="" />
											</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- client item -->
                                <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                                    <div class="client-item card-box">
                                        <div class="image">
                                            <a target="_blank" href="https://www.google.com">
												<img src="{!! url('public/front-end/images/clients/client_1.png') !!}" alt="" />
											</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- client item -->
                                <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                                    <div class="client-item card-box">
                                        <div class="image">
                                            <a target="_blank" href="https://www.google.com">
												<img src="{!! url('public/front-end/images/clients/client_3.png') !!}" alt="" />
											</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- client item -->
                                <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                                    <div class="client-item card-box">
                                        <div class="image">
                                            <a target="_blank" href="https://www.google.com">
												<img src="{!! url('public/front-end/images/clients/client_4.png') !!}" alt="" />
											</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- client item -->
                                <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                                    <div class="client-item card-box">
                                        <div class="image">
                                            <a target="_blank" href="https://www.google.com">
												<img src="{!! url('public/front-end/images/clients/client_1.png') !!}" alt="" />
											</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- client item -->
                                <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                                    <div class="client-item card-box">
                                        <div class="image">
                                            <a target="_blank" href="https://www.google.com">
												<img src="{!! url('public/front-end/images/clients/client_3.png') !!}" alt="" />
											</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <!--
				Card - Resume
			-->
            <div class="card-inner" id="resume-card">
                <div class="row card-container">

                    <!--
						Card Wrap
					-->
                    <div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>

                        <!-- Resume Image -->
                        <div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url(public/front-end/images/profile2.jpg);"></div>

                        <!--
							Inner Top
						-->
                        <div class="content inner-top">
                            <div class="row">
                                <div class=" col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                                    <div class="title-bg">Resume</div>
                                </div>
                            </div>
                        </div>

                        <!--
							Resume
						-->
                        <div class="content resume">
                            <div class="row">
                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">

                                    <!-- title -->
                                    <div class="title"><span>My</span> Experience</div>

                                    <!-- resume items -->
                                    <div class="resume-items card-box">

                                        <!-- resume item -->
                                        <div class="resume-item">
                                            <div class="name">Web Development</div>
                                            <div class="date">2013-Present <span>|</span> Facebook Inc.</div>
                                            <p>
                                                Collaborate with creative and development teams on the execution of ideas.
                                            </p>
                                        </div>

                                        <!-- resume item -->
                                        <div class="resume-item">
                                            <div class="name">Front-end Developer</div>
                                            <div class="date">2011-2012 <span>|</span> Google Inc.</div>
                                            <p>
                                                Monitored technical aspects of the front-end delivery for several projects.
                                            </p>
                                        </div>

                                        <!-- resume item -->
                                        <div class="resume-item">
                                            <div class="name">Senior Developer</div>
                                            <div class="date">2009-2010 <span>|</span> Abc Inc.</div>
                                            <p>
                                                Optimize website performance using latest technology.
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">

                                    <!-- title -->
                                    <div class="title"><span>My</span> Education</div>

                                    <!-- resume items -->
                                    <div class="resume-items card-box">

                                        <!-- resume item -->
                                        <div class="resume-item">
                                            <div class="name">Art University</div>
                                            <div class="date">2006-2008 <span>|</span> New York</div>
                                            <p>
                                                Bachelor's Degree in Computer Science ABC Technical Institute, Jefferson, Missouri
                                            </p>
                                        </div>

                                        <!-- resume item -->
                                        <div class="resume-item">
                                            <div class="name">Programming Course</div>
                                            <div class="date">2005-2006 <span>|</span> Paris</div>
                                            <p>
                                                Bachelor's Degree in Computer Science ABC Technical Institute, Jefferson, Missouri
                                            </p>
                                        </div>

                                        <!-- resume item -->
                                        <div class="resume-item">
                                            <div class="name">Web Design Course</div>
                                            <div class="date">2004-2005 <span>|</span> London</div>
                                            <p>
                                                Converted Photoshop layouts to web pages using HTML, CSS, and JavaScript
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--
							Skills
						-->
                        <div class="content skills">
                            <div class="row">
                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">

                                    <!-- title -->
                                    <div class="title"><span>Personal</span> Skills</div>

                                    <!-- skills -->
                                    <div class="skills-list card-box">
                                        <ul>
                                            <li>
                                                <div class="name">Communication</div>
                                                <div class="progress">
                                                    <div class="percentage" style="width:90%;"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="name">Team Work</div>
                                                <div class="progress">
                                                    <div class="percentage" style="width:65%;"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="name">Leadership</div>
                                                <div class="progress">
                                                    <div class="percentage" style="width:75%;"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="name">Language</div>
                                                <div class="progress">
                                                    <div class="percentage" style="width:85%;"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">

                                    <!-- title -->
                                    <div class="title"><span>Professional</span> Skills</div>

                                    <!-- skills -->
                                    <div class="skills-list card-box">
                                        <ul>
                                            <li>
                                                <div class="name">WordPress</div>
                                                <div class="progress">
                                                    <div class="percentage" style="width:90%;"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="name">PHP / MYSQL</div>
                                                <div class="progress">
                                                    <div class="percentage" style="width:65%;"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="name">HTML / CSS / JS</div>
                                                <div class="progress">
                                                    <div class="percentage" style="width:95%;"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="name">Photoshop</div>
                                                <div class="progress">
                                                    <div class="percentage" style="width:85%;"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!--
				Card - Works
			-->
            <div class="card-inner" id="works-card">
                <div class="row card-container">

                    <!--
						Card Wrap
					-->
                    <div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>

                        <!-- Work Image -->
                        <div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url(public/front-end/images/profile3.jpg);"></div>

                        <!--
							Inner Top
						-->
                        <div class="content inner-top">
                            <div class="row">
                                <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                                    <div class="title-bg">Portfolio</div>
                                </div>
                            </div>
                        </div>

                        <!--
							Works
						-->
                        <div class="content works">
                            <div class="row">
                                <div class="col col-m-12 col-t-5 col-d-5 col-d-lg-5">

                                    <!-- title -->
                                    <div class="title"><span>My</span> Portfolio</div>

                                </div>
                                <div class="col col-m-12 col-t-7 col-d-7 col-d-lg-7">

                                    <!-- filters -->
                                    <div class="filter-menu filter-button-group">
                                        <div class="f_btn active">
                                            <label><input type="radio" name="fl_radio" value="grid-item" />All</label>
                                        </div>
                                        <div class="f_btn">
                                            <label><input type="radio" name="fl_radio" value="photo" />Photo</label>
                                        </div>
                                        <div class="f_btn">
                                            <label><input type="radio" name="fl_radio" value="video" />Video</label>
                                        </div>
                                        <div class="f_btn">
                                            <label><input type="radio" name="fl_radio" value="music" />Music</label>
                                        </div>
                                        <div class="f_btn">
                                            <label><input type="radio" name="fl_radio" value="design" />Design</label>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- work items -->
                            <div class="row grid-items">

                                <!-- work item photo -->
                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item photo">
                                    <div class="box-item card-box">
                                        <div class="image">
                                            <a href="images/works/work1.jpg" class="has-popup-image">
												<img src="{!! url('public/front-end/images/works/work1.jpg') !!}" alt="" />
												<span class="info">
													<span class="icon la la-camera-retro"></span>
												</span>
											</a>
                                        </div>
                                        <div class="desc">
                                            <a href="images/works/work1.jpg" class="name has-popup-image">Motorcycle Helmet</a>
                                            <div class="category">Photo</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- work item video -->
                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item video">
                                    <div class="box-item card-box">
                                        <div class="image">
                                            <a href="https://vimeo.com/97102654" class="has-popup-video">
												<img src="{!! url('public/front-end/images/works/work2.jpg') !!}" alt="" />
												<span class="info">
													<span class="icon la la-video-camera"></span>
												</span>
											</a>
                                        </div>
                                        <div class="desc">
                                            <a href="https://vimeo.com/97102654" class="name has-popup-video">Minimalism Shapes</a>
                                            <div class="category">Video</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- work item music -->
                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item music">
                                    <div class="box-item card-box">
                                        <div class="image">
                                            <a href="https://w.soundcloud.com/player/?visual=true&url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F221650664&show_artwork=true" class="has-popup-music">
												<img src="{!! url('public/front-end/images/works/work3.jpg') !!}" alt="" />
												<span class="info">
													<span class="icon la la-music"></span>
												</span>
											</a>
                                        </div>
                                        <div class="desc">
                                            <a href="#" class="name has-popup">Staircase</a>
                                            <div class="category">Music</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- work item design -->
                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item design">
                                    <div class="box-item card-box">
                                        <div class="image">
                                            <a href="#popup-1" class="has-popup-media">
												<img src="{!! url('public/front-end/images/works/work4.jpg') !!}" alt="" />
												<span class="info">
													<span class="icon la la-image"></span>
												</span>
											</a>
                                        </div>
                                        <div class="desc">
                                            <a href="#popup-1" class="name has-popup-media">Mobile Application</a>
                                            <div class="category">Design</div>
                                        </div>
                                        <div id="popup-1" class="popup-box mfp-fade mfp-hide">
                                            <div class="content">
                                                <div class="image">
                                                    <img src="{!! url('public/front-end/images/works/work4.jpg') !!}" alt="">
                                                </div>
                                                <div class="desc">
                                                    <div class="post-box">
                                                        <h1>Mobile Application</h1>
                                                        <div class="blog-detail">Design</div>
                                                        <div class="blog-content">
                                                            <p>
                                                                So striking at of to welcomed resolved. Northward by described up household therefore attention. Excellence decisively nay man yet impression for contrasted remarkably.
                                                            </p>
                                                            <p>
                                                                Forfeited you engrossed but gay sometimes explained. Another as studied it to evident. Merry sense given he be arise. Conduct at an replied removal an amongst. Remaining determine few her two cordially admitting old.
                                                            </p>
                                                            <blockquote>
                                                                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque suscipit.
                                                            </blockquote>
                                                            <p>
                                                                Tiled say decay spoil now walls meant house. My mr interest thoughts screened of outweigh removing. Evening society musical besides inhabit ye my. Lose hill well up will he over on. Increasing sufficient everything men him admiration unpleasing sex.
                                                            </p>
                                                            <ul class="list-style">
                                                                <li>Greatest properly off ham exercise all.</li>
                                                                <li>Unsatiable invitation its possession nor off.</li>
                                                                <li>All difficulty estimating unreserved increasing the solicitude.</li>
                                                            </ul>
                                                            <p>
                                                                Unpleasant astonished an diminution up partiality. Noisy an their of meant. Death means up civil do an offer wound of.
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

                                <!-- work item photo -->
                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item photo">
                                    <div class="box-item card-box">
                                        <div class="image">
                                            <a href="images/works/work5.jpg" class="has-popup-image">
												<img src="{!! url('public/front-end/images/works/work5.jpg') !!}" alt="" />
												<span class="info">
													<span class="icon la la-camera-retro"></span>
												</span>
											</a>
                                        </div>
                                        <div class="desc">
                                            <a href="images/works/work5.jpg" class="name has-popup-image">Gereal Travels</a>
                                            <div class="category">Photo</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- work item music -->
                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item music">
                                    <div class="box-item card-box">
                                        <div class="image">
                                            <a href="https://w.soundcloud.com/player/?visual=true&url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F221650664&show_artwork=true" class="has-popup-music">
												<img src="{!! url('public/front-end/images/works/work8.jpg') !!}" alt="" />
												<span class="info">
													<span class="icon la la-music"></span>
												</span>
											</a>
                                        </div>
                                        <div class="desc">
                                            <a href="#" class="name has-popup">Daylight Entrance</a>
                                            <div class="category">Music</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- work item video -->
                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item video">
                                    <div class="box-item card-box">
                                        <div class="image">
                                            <a href="https://vimeo.com/97102654" class="has-popup-video">
												<img src="{!! url('public/front-end/images/works/work6.jpg') !!}" alt="" />
												<span class="info">
													<span class="icon la la-video-camera"></span>
												</span>
											</a>
                                        </div>
                                        <div class="desc">
                                            <a href="https://vimeo.com/97102654" class="name has-popup-video">Architecture</a>
                                            <div class="category">Video</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- work item design -->
                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item design">
                                    <div class="box-item card-box">
                                        <div class="image">
                                            <a href="#popup-2" class="has-popup-media">
												<img src="{!! url('public/front-end/images/works/work7.jpg') !!}" alt="" />
												<span class="info">
													<span class="icon la la-image"></span>
												</span>
											</a>
                                        </div>
                                        <div class="desc">
                                            <a href="#popup-2" class="name has-popup-media">Social Website</a>
                                            <div class="category">Design</div>
                                        </div>
                                        <div id="popup-2" class="popup-box mfp-fade mfp-hide">
                                            <div class="content">
                                                <div class="image">
                                                    <img src="{!! url('public/front-end/images/works/work7.jpg') !!}" alt="">
                                                </div>
                                                <div class="desc">
                                                    <div class="post-box">
                                                        <h1>Mobile Application</h1>
                                                        <div class="blog-detail">Design</div>
                                                        <div class="blog-content">
                                                            <p>
                                                                So striking at of to welcomed resolved. Northward by described up household therefore attention. Excellence decisively nay man yet impression for contrasted remarkably.
                                                            </p>
                                                            <p>
                                                                Forfeited you engrossed but gay sometimes explained. Another as studied it to evident. Merry sense given he be arise. Conduct at an replied removal an amongst. Remaining determine few her two cordially admitting old.
                                                            </p>
                                                            <blockquote>
                                                                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque suscipit.
                                                            </blockquote>
                                                            <p>
                                                                Tiled say decay spoil now walls meant house. My mr interest thoughts screened of outweigh removing. Evening society musical besides inhabit ye my. Lose hill well up will he over on. Increasing sufficient everything men him admiration unpleasing sex.
                                                            </p>
                                                            <ul class="list-style">
                                                                <li>Greatest properly off ham exercise all.</li>
                                                                <li>Unsatiable invitation its possession nor off.</li>
                                                                <li>All difficulty estimating unreserved increasing the solicitude.</li>
                                                            </ul>
                                                            <p>
                                                                Unpleasant astonished an diminution up partiality. Noisy an their of meant. Death means up civil do an offer wound of.
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

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--
				Card - Blog
			-->
            <div class="card-inner" id="blog-card">
                <div class="row card-container">

                    <!--
						Card Wrap
					-->
                    <div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>

                        <!-- Blog Image -->
                        <div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url(public/front-end/images/profile4.jpg);"></div>

                        <!--
							Inner Top
						-->
                        <div class="content inner-top">
                            <div class="row">
                                <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                                    <div class="title-bg">My Blog</div>
                                </div>
                            </div>
                        </div>

                        <!--
							Blog
						-->
                        <div class="content blog">
                            <div class="row">
                                <div class="col col-m-12 col-t-5 col-d-5 col-d-lg-5">

                                    <!-- title -->
                                    <div class="title"><span>My</span> Blog</div>

                                </div>
                                <div class="col col-m-12 col-t-7 col-d-7 col-d-lg-7">

                                    <!-- filters -->
                                    <div class="all-blog">
                                        <a href="{!! route('all-blog') !!}">All Blog</a>
                                    </div>

                                </div>
                            </div>

                            <!-- blog items -->
                            <div class="row">

                                <!-- blog item -->
                                <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                                    <div class="box-item card-box">
                                        <div class="image">
                                            <a href="blog-post.html">
												<img src="{!! url('public/front-end/images/blog/blog1.jpg') !!}" alt="" />
												<span class="info">
													<span class="icon la la-newspaper-o"></span>
												</span>
												<span class="date"><strong>20</strong>Jun</span>
											</a>
                                        </div>
                                        <div class="desc">
                                            <a href="blog-post.html" class="name">By spite about do of do allow blush</a>
                                            <div class="category">Design</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- blog item -->
                                <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                                    <div class="box-item card-box">
                                        <div class="image">
                                            <a href="blog-post.html">
												<img src="{!! url('public/front-end/images/blog/blog2.jpg') !!}" alt="" />
												<span class="info">
													<span class="icon la la-newspaper-o"></span>
												</span>
												<span class="date"><strong>19</strong>Jun</span>
											</a>
                                        </div>
                                        <div class="desc">
                                            <a href="blog-post.html" class="name">Two Before Arrow Not Relied</a>
                                            <div class="category">Coding</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- blog item -->
                                <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                                    <div class="box-item card-box">
                                        <div class="image">
                                            <a href="blog-post.html">
												<img src="{!! url('public/front-end/images/blog/blog3.jpg') !!}" alt="" />
												<span class="info">
													<span class="icon la la-newspaper-o"></span>
												</span>
												<span class="date"><strong>20</strong>Jun</span>
											</a>
                                        </div>
                                        <div class="desc">
                                            <a href="blog-post.html" class="name">By spite about do of do allow blush</a>
                                            <div class="category">Travel</div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <!--
				Card - Contacts
			-->
            <div class="card-inner" id="contacts-card">
                <div class="row card-container">

                    <!--
						Card Wrap
					-->
                    <div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>

                        <!-- Map -->
                        <div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6">
                            <!-- <div class="map" id="map"></div> -->
                        </div>

                        <!--
							Inner Top
						-->
                        <div class="content inner-top">
                            <div class="row">
                                <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                                    <div class="title-bg">Contacts</div>
                                </div>
                            </div>
                        </div>

                        <!--
							Contacts Info
						-->
                        <div class="content contacts-info">
                            <div class="row">
                                <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

                                    <!-- title -->
                                    <div class="title"><span>Get</span> in Touch</div>

                                </div>
                            </div>

                            <!-- contacts items -->
                            <div class="row contacts-items">

                                <!-- contacts item -->
                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                                    <div class="contacts-item card-box">
                                        <div class="icon"><i class="la la-map-marker"></i></div>
                                        <div class="name">Address</div>
                                        <p>
                                            France, Paris.
                                        </p>
                                    </div>
                                </div>

                                <!-- contacts item -->
                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                                    <div class="contacts-item card-box">
                                        <div class="icon"><i class="la la-at"></i></div>
                                        <div class="name">Email</div>
                                        <p>
                                            adlard@example.com
                                        </p>
                                    </div>
                                </div>

                                <!-- contacts item -->
                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                                    <div class="contacts-item card-box">
                                        <div class="icon"><i class="la la-phone"></i></div>
                                        <div class="name">Phone</div>
                                        <p>
                                            +123 654 78900
                                        </p>
                                    </div>
                                </div>

                                <!-- contacts item -->
                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                                    <div class="contacts-item card-box">
                                        <div class="icon"><i class="la la-check-square"></i></div>
                                        <div class="name">Freelance</div>
                                        <p>
                                            Available
                                        </p>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!--
							Contacts Form
						-->
                        <div class="content contacts-form">
                            <div class="row">
                                <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

                                    <!-- title -->
                                    <div class="title"><span>Contact</span> Form</div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

                                    <!-- form -->
                                    <div class="contact_form card-box">
                                        <form id="cform" method="post">
                                            <div class="row">
                                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                                                    <div class="group-val">
                                                        <input type="text" name="name" placeholder="Full Name" />
                                                    </div>
                                                </div>
                                                <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                                                    <div class="group-val">
                                                        <input type="text" name="email" placeholder="Email Address" />
                                                    </div>
                                                </div>
                                                <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                                                    <div class="group-val">
                                                        <textarea name="message" placeholder="Your Message"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="align-left">
                                                <a href="#" class="button" onclick="$('#cform').submit(); return false;">
													<span class="text">Send Message</span>
													<span class="icon"><i class="la la-arrow-right"></i></span>
												</a>
                                            </div>
                                        </form>
                                        <div class="alert-success">
                                            <p>Thanks, your message is sent successfully.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!--
				Lines Grid
			-->
            <div class="lines-grid">
                <div class="row">
                    <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
                    <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3">
                        <div class="lines">
                            <div class="line-1"></div>
                            <div class="line-2" style="animation-delay: 10s;"></div>
                        </div>
                    </div>
                    <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3">
                        <div class="lines">
                            <div class="line-1"></div>
                        </div>
                    </div>
                    <div class="col col-m-0 col-t-0 col-d-0 col-d-lg-3">
                        <div class="lines">
                            <div class="line-1"></div>
                            <div class="line-2" style="animation-delay: 0s;"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--
		jQuery Scripts
	-->
  @endsection
