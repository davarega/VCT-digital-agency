<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>VCT Digital Agency</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
	<style>
		body { font-family: 'Roboto', Arial, sans-serif; margin: 0; background: #f7f7f7; color: #222; }
		header { background: #222; color: #fff; padding: 40px 0; text-align: center; }
		header h1 { margin: 0; font-size: 2.5em; }
		header p { margin: 10px 0 0; font-size: 1.2em; }
		nav { background: #444; padding: 10px 0; text-align: center; }
		nav a { color: #fff; text-decoration: none; margin: 0 15px; font-weight: 700; }
		.container { max-width: 1100px; margin: 40px auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.07); }
		.section { margin-bottom: 40px; }
		.section h2 { color: #1a73e8; margin-bottom: 15px; }
		.services { display: flex; flex-wrap: wrap; gap: 30px; }
		.service { flex: 1 1 250px; background: #f1f5fb; padding: 20px; border-radius: 6px; box-shadow: 0 1px 4px rgba(0,0,0,0.04); }
		.team { display: flex; gap: 30px; flex-wrap: wrap; }
		.member { flex: 1 1 200px; text-align: center; }
		.member img { border-radius: 50%; width: 100px; height: 100px; object-fit: cover; }
		.contact-form { max-width: 500px; margin: 0 auto; }
		.contact-form input, .contact-form textarea { width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 4px; border: 1px solid #ccc; }
		.contact-form button { background: #1a73e8; color: #fff; border: none; padding: 12px 30px; border-radius: 4px; font-size: 1em; cursor: pointer; }
		footer { background: #222; color: #fff; text-align: center; padding: 20px 0; margin-top: 40px; }
		@media (max-width: 700px) {
			.services, .team { flex-direction: column; }
		}
	</style>
</head>
<body>
	<header>
		<h1>VCT Digital Agency</h1>
		<p>Empowering Your Business with Innovative Digital Solutions</p>
	</header>
	<nav>
		<a href="#about">About</a>
		<a href="#services">Services</a>
		<a href="#team">Team</a>
		<a href="#contact">Contact</a>
	</nav>
	<div class="container">
		<section id="about" class="section">
			<h2>About Us</h2>
			<p>
				VCT Digital Agency is a full-service digital agency specializing in web development, branding, digital marketing, and creative solutions.
				Our mission is to help businesses grow and succeed in the digital era by delivering innovative, tailored strategies and exceptional results.
			</p>
		</section>
		<section id="services" class="section">
			<h2>Our Services</h2>
			<div class="services">
				<div class="service">
					<h3>Web Development</h3>
					<p>Custom websites, e-commerce platforms, and web applications built for performance and scalability.</p>
				</div>
				<div class="service">
					<h3>Digital Marketing</h3>
					<p>SEO, SEM, social media marketing, and content strategies to boost your online presence.</p>
				</div>
				<div class="service">
					<h3>Branding & Design</h3>
					<p>Logo design, brand identity, and creative assets that make your business stand out.</p>
				</div>
				<div class="service">
					<h3>UI/UX Consulting</h3>
					<p>Intuitive user experiences and interfaces that engage and convert your audience.</p>
				</div>
			</div>
		</section>
		<section id="team" class="section">
			<h2>Meet Our Team</h2>
			<div class="team">
				<div class="member">
					<img src="https://randomuser.me/api/portraits/men/32.jpg" alt="John Doe">
					<h4>John Doe</h4>
					<p>Founder & CEO</p>
				</div>
				<div class="member">
					<img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Jane Smith">
					<h4>Jane Smith</h4>
					<p>Lead Designer</p>
				</div>
				<div class="member">
					<img src="https://randomuser.me/api/portraits/men/54.jpg" alt="Mike Lee">
					<h4>Mike Lee</h4>
					<p>Senior Developer</p>
				</div>
				<div class="member">
					<img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Sara Kim">
					<h4>Sara Kim</h4>
					<p>Marketing Strategist</p>
				</div>
			</div>
		</section>
		<section id="contact" class="section">
			<h2>Contact Us</h2>
			<form class="contact-form" method="post" action="#">
				<input type="text" name="name" placeholder="Your Name" required>
				<input type="email" name="email" placeholder="Your Email" required>
				<textarea name="message" rows="5" placeholder="Your Message" required></textarea>
				<button type="submit">Send Message</button>
			</form>
		</section>
	</div>
	<footer>
		&copy; <?php echo date('Y'); ?> VCT Digital Agency. All rights reserved.
	</footer>
</body>
</html>
