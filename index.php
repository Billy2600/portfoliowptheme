<?php

get_header(); ?>

	<section id="hero">
		William McPherson
	</section>

	<section id="about">
		<h1>About Me</h1>
			My name is William McPherson, but everyone knows me as Billy. I have studied at <a href="http://www.westwood.edu/" target="_blank">Westwood College</a> since January 2011 and graduated in July of 2015, Bachelor's of Science in Game Software Developement program. Currently I am a QA engineer at <a href="https://level10qa.com" target="_blank">Level 10 QA</a>.
	</section>

	<section id="skills">
		<h1>Skills</h1>
		You'll find my skills pretty varied, but here's some of what I can do and/or have experience with: <br />
		<div class="tablist">
			<a class="firsttab" href="javascript:showtab(0,5)">Web</a>
			<a href="javascript:showtab(1,5)">Games</a>
			<a href="javascript:showtab(2,5)">.NET</a>
			<a href="javascript:showtab(3,5)">QA</a>
			<a href="javascript:showtab(4,5)">IT</a>
		</div>

		<ul class="skillslist" id="tab_0">
			<li class="firstitem fiftypercent">HTML5</li>
			<li class="ninetypercent">CSS3</li>
			<li class="seventypercent">PHP5</li>
			<li class="eightypercent">MySQL</li>
			<li class="sixtypercent">Javascript</li>
			<li>JQuery</li>
		</ul>
		<ul class="skillslist" id="tab_1">
			<li class="firstitem ninetypercent">C/C++</li>
			<li class="eightypercent">Limited OpenGL experience</li>
			<li class="seventypercent">Limited DirectX experience</li>
			<li class="sixtypercent">Memory management (heap and stack)</li>
			<li class="fiftypercent">Standard template library</li>
			<li class="fiftypercent">Boost library</li>
		</ul>
		<ul class="skillslist" id="tab_2">
			<li class="firstitem">C# .NET</li>
			<li>WinForms</li>
			<li>Microsoft SQL</li>
			<li>Common Language Runtime</li>
			<li>Unity Engine Scripting</li>
		</ul>
		<ul class="skillslist" id="tab_3">
			<li class="firstitem">Software testing practices</li>
			<li>Writing a test plan</li>
			<li>Black/white box testing</li>
			<li>Unit testing</li>
			<li>Ad-hoc testing</li>
		</ul>
		<ul class="skillslist" id="tab_4">
			<li class="firstitem">Computer assembly and repair</li>
			<li>Some networking (port forwarding, etc)</li>
			<li>LAMP server setup/hosting</li>
			<li>GNU/Linux installation and administration</li>
			<li>Windows installation and administration</li>
		</ul>
	</section>

	<section id="projects">
		<h1>Projects</h1>
		<p>Here are things I have done in the past (both in-school and out).</p>
		
		<img src="/portfolio/img/bazoik_screenshot.jpg" alt="" style="float: left">
		
		<img src="/portfolio/img/vgcatalog_screenshot.png" alt="" style="float: left">
		
		<img src="/portfolio/img/blackrabbit_screenshot.png" alt="" style="float: left">
		
		<img src="/portfolio/img/dxm01_screenshot.png" alt="" style="float: left">
		
		<img src="/portfolio/img/combat_screenshot.png" alt="" style="float: left">
		
		<img src="/portfolio/img/rotw_screenshot.png" alt="" style="float: left">
		
		<img src="/portfolio/img/demonoid_screenshot.png" alt="" style="float: left">
		
        <img src="/portfolio/img/philosophers_screenshot.png" width="150" alt="" style="float: left">
        
		<img src="/portfolio/img/tictactoe_screenshot.png" alt="" style="float: left">
	</section>

	<section id="blog">
		<h1>Blog</h1>
	</section>

	<section id="contact">
		<h1>Contact</h1>
		<form class="contactform">
			<input name="email" type="email" placeholder="Email Address">
			<input name="subject" type="subject" placeholder="Subject">
			<textarea name="message" placeholder="Enter message here"></textarea>
			<input type="submit" value="Submit">
		</form>
	</section>

<?php get_footer(); ?>