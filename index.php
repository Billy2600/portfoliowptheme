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
		
		<?php
			$wp_query = new WP_Query("category_name=projects");

			if($wp_query->have_posts())
			{
				while ($wp_query->have_posts())
				{
					$wp_query->the_post();
					get_template_part('templates/post', 'projects');
				}
			}
			wp_reset_postdata();
		?>
	</section>

	<section id="blog">
		<h1>Blog</h1>
		<?php
			$wp_query = new WP_Query("category_name=blog");

			if($wp_query->have_posts())
			{
				while ($wp_query->have_posts())
				{
					$wp_query->the_post();
					get_template_part('templates/post', 'homepage');
				}
			}
			wp_reset_postdata();
		?>
	</section>

	<section id="contact">
		<h1>Contact</h1>
		<!-- <form class="contactform">
			<input name="email" type="email" placeholder="Email Address" required>
			<input name="subject" type="subject" placeholder="Subject" required>
			<textarea name="message" placeholder="Enter message here" required></textarea>
			<input type="submit" value="Submit">
		</form> -->
		<?php echo do_shortcode('[contact-form-7 id="27" title="Contact form 1"]'); ?>
	</section>

<?php get_footer(); ?>