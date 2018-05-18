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
		<div class="blogpost">
			<img src="/img/uploads/thumbs/1_09072017002235screen%20shot%202016-04-22%20at%202.26.58%20pm.png">
			<p>One word. Doom. It's a simple name that can invoke a lot of things. Deathmatch, modding, programming. Doom is and was a lot of things to a lot of people. It's also known for being ported to everything. Why is this the case? Why Doom and not its older brother Wolfenstein 3D? I have compiled a list of six reasons why I think that's the case, based on my own knowledge of Doom and programming in general.</p>
			<p><a href="#" class="continuelink">Continue reading &raquo;</a></p>
		</div>

		<div class="blogpost">
			<img src="/img/uploads/thumbs/1_04162017190334nes-classic-edition-box.png">
			<p>I'm sure you remember the buzz around the launch of the Wii. The Wii was huge, everyone was talking about it, and it was a giant success for Nintendo. At the the time, I really wanted one, but I wasn't able to get one until a couple years after launch. "Not a big deal", I thought, "it was a huge seller, so it makes sense that stores couldn't keep it in stock." Now, I'm not sure if this was actually the case, or it was intentional under stocking by Nintendo, but Nintendo seems to have taken this idea and run with it in later years.</p>
			<p><a href="#" class="continuelink">Continue reading &raquo;</a></p>
		</div>

		<div class="blogpost">
			<img src="/img/uploads/thumbs/1_10222016121910Rayman2GreatEscape_DCBox.jpg">
			<p>Some games fall into a category I call “mystical”. These games inspire the imagination and there seems to be more to the world than what you can see at face value. One of exemplary game series are that of the character Rayman. Just look at Rayman himself, he has no arms or legs, so his body parts just float! When I first played the demo for the Dreamcast version of Rayman 2 at nine years old, I knew it was something special. Though strangely, I didn’t really play Rayman 2 until this year. Perhaps it’s because when I rented Rayman 1 many years ago, I was put off by the crushing difficulty. Thankfully that’s not the case with the second one.</p>
			<p><a href="#" class="continuelink">Continue reading &raquo;</a></p>
		</div>
	</section>

	<section id="contact">
		<h1>Contact</h1>
		<form class="contactform">
			<input name="email" type="email" placeholder="Email Address" required>
			<input name="subject" type="subject" placeholder="Subject" required>
			<textarea name="message" placeholder="Enter message here" required></textarea>
			<input type="submit" value="Submit">
		</form>
	</section>

<?php get_footer(); ?>