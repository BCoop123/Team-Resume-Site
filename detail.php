<?php

$currentPage = 0;

$resumes = [
	[
		'Title' => 
			'Ben Molloy\'s Resume',
		'Header' => 
		[
				'Name' => 'Ben Molloy',
				'Headshot' => 'assets/images/profile.jpg',
				'Position' => 'Senior Network Analyst Manager',
				'Email' => 'btmolloy2@gmail.com',
				'Phone' => '(513) 374-8989',
				'LinkedIn' => 'https://www.linkedin.com/in/ben-molloy',
				'GitHub' => 'https://www.github.com/btmolloy',
				'Website' =>  'https://www.BenMolloy.com',
		],
		'Summary' =>
			'Current undergraduate majoring in cyber security at Northern Kentucky University with intermediate level knowledge of cyber security, communications, and critical thinking skills. I am eager for a challenge and looking for a full or part-time Co-op or internship to expand my skills while bringing value to my employer.',
		'WorkExperience' =>
		[
			[
				'Job_Title' => "Student Technology Support Specialist",
				'Job_Location' => "Northern Kentucky University",
				'Job_StartFinish' => "February 2022 - August 2023",
				'Job_Descr' => "Diagnosed and resolved a range of hardware, software, and networking issues while delivering technical support and training to end-users.",
				'Job_AchDescr' => "Completed many computer replacement projects and organizational type projects as well.",
				'Job_Ach_1' => "Faculty Replacement Project",
				'Job_Ach_2' => "Office Organization Project",
				'Job_Ach_3' => "File System Organization",
				'Job_Ach_4' => "Stuctured Windows AD configuration",
				'Job_TechUsed_1' => "Bash",
				'Job_TechUsed_2' => "Python",
				'Job_TechUsed_3' => "Pixi",
				'Job_TechUsed_4' => "Dell Command Manager",
				'Job_TechUsed_5' => "UserStatus",
			],
			[
				'Job_Title' => "IT Security Assistant",
				'Job_Location' => "XYZ Tech Solutions",
				'Job_StartFinish' => "June 2022 - August 2022",
				'Job_Descr' => "Assisted in network monitoring, vulnerability assessment, and security automation, contributing to the enhancement of cybersecurity measures within the organization.",
				'Job_AchDescr' => "Implemented automated scripts that streamlined security tasks, increasing operational efficiency by reducing manual effort and saving approximately 10 hours per week.",
				'Job_Ach_1' => "Faculty Replacement Project",
				'Job_Ach_2' => "Office Organization Project",
				'Job_Ach_3' => "File System Organization",
				'Job_Ach_4' => "Stuctured Windows AD configuration",
				'Job_TechUsed_1' => "Wireshark",
				'Job_TechUsed_2' => "Nmap",
				'Job_TechUsed_3' => "Metasploit",
				'Job_TechUsed_4' => "Python",
				'Job_TechUsed_5' => "Bash",
			]
		],
		'ProgressBarSkills' =>
		[
			'Skill_1_Name' => "Python",
			'Skill_1_Progress' => "94",
			'Skill_2_Name' => "JavaScript",
			'Skill_2_Progress' => "96",
			'Skill_3_Name' => "Node.js",
			'Skill_3_Progress' => "92",
		],
		'OtherSkills' =>
		[
			'Other_Skill_1' => "DevOps",
			'Other_Skill_2' => "Teamwork/Communication",
			'Other_Skill_3' => "Git",
			'Other_Skill_4' => "Problem Solving & Critical Thinking",
			'Other_Skill_5' => "Work Well Under Pressure",
			'Other_Skill_6' => "Familiar with VMware and VM setup",
			'Other_Skill_7' => "Fundamental Malware Analysis",
			'Other_Skill_8' => "Web Development",
		],
		'Education' =>
		[
			'Ed_Degree' => "BSc CyberSecurity",
			'Ed_Location' => "Northern Kentucky University",
			'Ed_Time' => "2020 - Present",
		],
		'Awards' =>
		[
			'Award_1_Name' => "Outstanding Achievement in Cybersecurity Scholarship",
			'Award_1_Descr' => "Recognized for exemplary performance and dedication in the field of cybersecurity, demonstrating a strong commitment to advancing knowledge and skills within the discipline.",
			'Award_2_Name' => "Leadership Achievement Award",
			'Award_2_Descr' => "Recognized for exceptional leadership qualities and achievements, showcasing the ability to inspire and guide others towards successful outcomes.",
		],
		'Languages' =>
		[
			'Lang_1' => "Python",
			'Lang_2' => "Java",
			'Lang_3' => "Bash",
		],
		'Interests' =>
		[
			'Interest_1' => "Boldering",
			'Interest_2' => "Working Out",
			'Interest_3' => "Video Games",
		],
		'Projects' =>
		[
			'Project' =>
			[
				'Project_1_IMG' => "./assets/images/project1.jpg",
				'Project_1_Title' => "CodeOptimize: Performance Tuning Project",
				'Project_1_Desc' => "The CodeOptimize project revolved around fine-tuning code for optimal execution, implementing efficiency-driven techniques, and profiling to enhance software speed and resource utilization.",
				'Project_1_Link' => "https://www.codeoptimize-example.com",
			]
		]
	],
	[

	],
	[

	]
]

?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?=$resumes[$currentPage]['Title'];?></title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$resumes[$currentPage]['Title'];?>">
    <meta name="author" content="Your name">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
		<?php /* Only the following line changed from the file in the previous assignment */ ?>
		<div class="mb-4"><a href="index.php" class="btn btn-primary">Back to index</a></div>
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="assets/images/profile.jpg" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?=$resumes[$currentPage]['Header']['Name'];?></h1>
							    <div class="title mb-3"><?=$resumes[$currentPage]['Header']['Position'];?></div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?=$resumes[$currentPage]['Header']['Email'];?></li>
								    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?=$resumes[$currentPage]['Header']['Phone'];?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?=$resumes[$currentPage]['Header']['LinkedIn'];?></a></li>
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?=$resumes[$currentPage]['Header']['GitHub'];?></a></li>
					                <li><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?=$resumes[$currentPage]['Header']['Website'];?></a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?=$resumes[$currentPage]['Summary'];?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    
									<?php
										foreach ($resumes[$currentPage]['WorkExperience'] as $key => $Job) {
											echo '										<article class="resume-timeline-item position-relative pb-5">
											
											<div class="resume-timeline-item-header mb-2">
												<div class="d-flex flex-column flex-md-row">
													<h3 class="resume-position-title font-weight-bold mb-1">' . $Job['Job_Title'] . '</h3>
													<div class="resume-company-name ms-auto">' . $Job['Job_Location'] . '</div>
												</div><!--//row-->
												<div class="resume-position-time">' . $Job['Job_StartFinish'] . '</div>
											</div><!--//resume-timeline-item-header-->
											<div class="resume-timeline-item-desc">
												<p>' . $Job['Job_Descr'] . '</h4>
												<p>' . $Job['Job_AchDescr'] . '</p>
												<ul>
													<li>' . $Job['Job_Ach_1'] . '</li>
													<li>' . $Job['Job_Ach_2'] . '</li>
													<li>' . $Job['Job_Ach_3'] . '</li>
													<li>' . $Job['Job_Ach_4'] . '</li>
												</ul>
												<h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
												<ul class="list-inline">
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">' . $Job['Job_TechUsed_1'] . '</span></li>
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">' . $Job['Job_TechUsed_2'] . '</span></li>
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">' . $Job['Job_TechUsed_3'] . '</span></li>
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">' . $Job['Job_TechUsed_4'] . '</span></li>
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">' . $Job['Job_TechUsed_5'] . '</span></li>
												</ul>
											</div><!--//resume-timeline-item-desc-->

										</article><!--//resume-timeline-item-->';
										}

									?>
								         
							    </div><!--//resume-timeline-->
							    
							    
							    
							    
							    
							    
						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
								        <li class="mb-2">
								            <div class="resume-skill-name"><?=$resumes[$currentPage]['ProgressBarSkills']['Skill_1_Name'];?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?=$resumes[$currentPage]['ProgressBarSkills']['Skill_1_Progress'];?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?=$resumes[$currentPage]['ProgressBarSkills']['Skill_2_Name'];?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?=$resumes[$currentPage]['ProgressBarSkills']['Skill_2_Progress'];?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?=$resumes[$currentPage]['ProgressBarSkills']['Skill_3_Name'];?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?=$resumes[$currentPage]['ProgressBarSkills']['Skill_3_Progress'];?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">
							            <li class="list-inline-item"><span class="badge badge-light">DevOps</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Code Review</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Git</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Unit Testing</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Wireframing</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Sketch</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Balsamiq</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">WordPress</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Shopify</span></li>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold">MSc in Computer Science</div>
								        <div class="resume-degree-org">University College London</div>
								        <div class="resume-degree-time">2013 - 2014</div>
								    </li>
								    <li>
								        <div class="resume-degree font-weight-bold">BSc Maths and Physics</div>
								        <div class="resume-degree-org">Imperial College London</div>
								        <div class="resume-degree-time">2010 - 2013</div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
								    <li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name">Award Name Lorem</div>
								        <div class="resume-award-desc">Award desc goes here, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.</div>
								    </li>
								    <li class="mb-0 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name">Award Name Ipsum</div>
								        <div class="resume-award-desc">Award desc goes here, ultricies nec, pellentesque.</div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold">English</span> <small class="text-muted font-weight-normal">(Native)</small></li>
								    <li class="mb-2 align-middle"><span class="resume-lang-name font-weight-bold">French</span> <small class="text-muted font-weight-normal">(Professional)</small></li>
								    <li><span class="resume-lang-name font-weight-bold">Spanish</span> <small class="text-muted font-weight-normal">(Professional)</small></li>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-1">Climbing</li>
								    <li class="mb-1">Snowboarding</li>
								    <li class="mb-1">Cooking</li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image1.jpg" alt="Project 1" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 1</h5>
									<p class="card-text">Brief description of Project 1.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image2.jpg" alt="Project 2" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 2</h5>
									<p class="card-text">Brief description of Project 2.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image3.jpg" alt="Project 3" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 3</h5>
									<p class="card-text">Brief description of Project 3.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Your names</small>
    </footer>

    

</body>
</html> 

