<style>
.bl-main a {
	color: #f0f0f0;
	text-decoration: none;
	font-weight: 700;
	letter-spacing: 2px;
	padding: 0 5px;
	text-transform: uppercase;
	font-size: 80%;
}

.bl-main a:hover {
	color: #fff;
}

.container { height: 100%; }

.bl-main {
	position: absolute;
	width: 100%;
	height: 100%;
	overflow: hidden;
}

.bl-main > section {
	position: absolute;
	width: 50%;
	height: 50%;
}

.bl-main > section:first-child {
	top: 0;
	left: 0;
	background: #F06060;
}

.bl-main > section:nth-child(2) {
	top: 0;
	left: 50%;
	background: #FA987D;
}

.bl-main > section:nth-child(3) {
	top: 50%;
	left: 0;
	background: #72CCA7;
}

.bl-main > section:nth-child(4) {
	top: 50%;
	left: 50%;
	background: #10A296;
}

.bl-box {
	position: relative;
	width: 100%;
	height: 100%;
	cursor: pointer;
	opacity: 1;
	/* Centering with flexbox */
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-pack: center;
    -moz-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -moz-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.bl-box h2 {
	text-align: center;
	margin: 0;
	padding: 20px;
	width: 100%;
	font-size: 1.8em;
	letter-spacing: 2px;
	font-weight: 700;
	text-transform: uppercase;
}

.bl-icon {
	font-family: 'icomoon';
	speak: none;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 1;
	cursor: pointer;
	-webkit-font-smoothing: antialiased;
}

.bl-icon:before {
	display: block;
	font-size: 2em;
	margin-bottom: 10px;
}

.bl-icon-about:before {
	content: "\e000";
}

.bl-icon-works:before {
	content: "\e001";
}

.bl-icon-blog:before {
	content: "\e002";
}

.bl-icon-contact:before {
	content: "\e003";
}

.bl-main > section .bl-icon-close {
	position: absolute;
	top: 20px;
	right: 20px;
	cursor: pointer;
	z-index: 100;
	opacity: 0;
	pointer-events: none;
}

.bl-icon-close:before {
	content: "\e005";
}

.bl-content, 
div.bl-panel-items > div > div {
	opacity: 0;
	pointer-events: none;
	position: absolute;
	top: 60px;
	left: 30px;
	right: 30px;
	bottom: 30px;
	padding: 0 20px;
	overflow: hidden;
	overflow-y: auto;
}

/* Custom content */

.bl-content p {
	margin: 0 auto;
	padding-bottom: 15px;
	font-size: 1.7em;
	line-height: 1.8;
}

.bl-content h2 {
	font-size: 3em;
	font-weight: 300;
	margin: 0 0 20px 0;
}

.bl-content article {
	padding: 20px 40px 20px 0px;
}

.bl-content article h3 {
	font-weight: 700;
	letter-spacing: 2px;
	text-transform: uppercase;
	margin: 0 0 10px 0;
	padding-top: 20px;
	font-size: 1.4em;
}

.bl-content article a {
	color: rgba(0,0,0,0.2);
}

.bl-content > ul {
	list-style: none;
	padding: 0;
	margin: 0;
} 

.bl-content > ul li {
	display: inline-block;
	width: 20%;
	margin: 1%;
}

.bl-content > ul li a {
	display: block;
	padding: 0;
	border: 8px solid rgba(0,0,0,0.1);
}

.bl-content > ul li a img {
	display: block;
	max-width: 100%;
}

/* Panel Items */

div.bl-panel-items,
div.bl-panel-items > div {
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	position: absolute;
}

div.bl-panel-items > div > div {
	width: 60%;
	margin: 0 auto;
	opacity: 1;
	bottom: 90px;
	top: 90px;
	pointer-events: auto;
}

div.bl-panel-items > div > div h3 {
	font-size: 2.4em;
	font-weight: 300;
	margin: 0 0 20px 0;
}

div.bl-panel-items > div > div p {
	font-size: 1.3em;
}

div.bl-panel-items > div > div img {
	float: left;
	margin: 0 20px 20px 0;
	max-width: 100%;
}

div.bl-panel-items {
	top: 100%;
	z-index: 9999;
}

div.bl-panel-items > div {
	background: #3ba5db;
	z-index: 0;
	opacity: 0;
	-webkit-transform: translateY(0);
	-webkit-transition: -webkit-transform 0.5s ease-in-out, opacity 0s linear 0.5s;
	-moz-transform: translateY(0);
	-moz-transition: -moz-transform 0.5s ease-in-out, opacity 0s linear 0.5s;
	transform: translateY(0);
	transition: transform 0.5s ease-in-out, opacity 0s linear 0.5s;
	-ms-transform: translateY(0);
}

div.bl-panel-items nav {
	position: absolute;
	z-index: 9999;
	width: 216px;
	left: 50%;
	top: 0px;
	margin-left: -108px;
	opacity: 0;
	-webkit-transition: opacity 0.2s ease-in-out 0.5s;
	-moz-transition: opacity 0.2s ease-in-out 0.5s;
	transition: opacity 0.2s ease-in-out 0.5s;
}

div.bl-panel-items.bl-panel-items-show nav span {
	float: left;
	margin: 5px;
}

div.bl-panel-items nav span.bl-next-work {
	font-weight: 700;
	letter-spacing: 2px;
	display: block;
	text-transform: uppercase;
	line-height: 2em;
	cursor: pointer;
	margin-right: 2em;
}

div.bl-panel-items.bl-panel-items-show nav {
	opacity: 1;
	top: -70px;
}

div.bl-panel-items > div.bl-show-work {
	z-index: 1000;
	opacity: 1;
	-webkit-transform: translateY(-100%);
	-webkit-transition: -webkit-transform 0.5s ease-in-out;
	-moz-transform: translateY(-100%);
	-moz-transition: -moz-transform 0.5s ease-in-out;
	transform: translateY(-100%);
	transition: transform 0.5s ease-in-out;
	-ms-transform: translateY(-100%);
}

div.bl-panel-items > div.bl-hide-current-work {
	opacity: 0;
	-webkit-transition: -webkit-transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
	-webkit-transform: translateY(-100%) scale(0.5);
	-moz-transition: -moz-transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
	-moz-transform: translateY(-100%) scale(0.5);
	transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
	transform: translateY(-100%) scale(0.5);
	-ms-transform: translateY(-100%) scale(0.5);
	z-index: 0;
}

/* Transition classes and properties */
/* Separated for a better overview and control */

.bl-main > section {
	-webkit-transition: all 0.5s ease-in-out;
	-moz-transition: all 0.5s ease-in-out;
	transition: all 0.5s ease-in-out;
}

.bl-main > section.bl-expand {
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
}

.bl-main > section.bl-expand-top {
	z-index: 100;
}

.bl-main > section:first-child.bl-expand {
	background: #EE4444;
}
.bl-main > section:nth-child(2).bl-expand {
	background: #F98262;
}
.bl-main > section:nth-child(3).bl-expand {
	background: #4BBE8E;
}
.bl-main > section:nth-child(4).bl-expand {
	background: #0D8278;
}

.bl-main.bl-expand-item > section:not(.bl-expand),
.bl-main.bl-expand-item > section.bl-scale-down {
	-webkit-transform: scale(0.5);
	-moz-transform: scale(0.5);
	-ms-transform: scale(0.5);
	transform: scale(0.5);
	opacity: 0;
}

.bl-box {
	-webkit-transition: opacity 0.2s linear 0.5s;
	-moz-transition: opacity 0.2s linear 0.5s;
	transition: opacity 0.2s linear 0.5s;
}

section.bl-expand .bl-box {
	opacity: 0;
	-webkit-transition: opacity 0s linear;
	-moz-transition: opacity 0s linear;
	transition: opacity 0s linear;
}

.bl-box h2 {
	-webkit-transition: all 0.2s ease-in-out;
	-moz-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
}

.no-touch section:not(.bl-expand) .bl-box:hover h2 {
	-webkit-transform: translateY(-15px);
	-moz-transform: translateY(-15px);
	-ms-transform: translateY(-15px);
	transform: translateY(-15px);
}

.bl-content,
.bl-icon-close {
	-webkit-transition: opacity 0.1s linear 0s;
	-moz-transition: opacity 0.1s linear 0s;
	transition: opacity 0.1s linear 0s;
}

section.bl-expand .bl-content,
section.bl-expand .bl-icon-close {
	pointer-events: auto;
	opacity: 1;
	-webkit-transition: opacity 0.3s linear 0.5s;
	-moz-transition: opacity 0.3s linear 0.5s;
	transition: opacity 0.3s linear 0.5s;
}

@media screen and (max-width: 46.5em) {
	.bl-content,
	.bl-box {
		font-size: 75%;
	}

	.bl-expand .bl-box {
		height: 130px;
	}

	.bl-content > ul li {
		width: 40%;
	}
}

</style>

<div class="container">	
			<div id="bl-main" class="bl-main">
				<section>
					<div class="bl-box">
						<h2 class="bl-icon bl-icon-about">About</h2>
					</div>
					<div class="bl-content">
						<h2>About this layout</h2>
						<p>This responsive layout is based on an initial grid of four boxes. Once a box is clicked, it gets resized to fullscreen and the other boxes scale down and fade out. In the work section we experiment with another transition which is to show a panel by making it appear from the bottom while scaling the current one down. To see it in action, open the work section and click on one of the portfolio items and navigate through them.</p>
						<p>
							<a href="http://tympanus.net/Development/ResponsiveMultiLevelMenu/"><strong>&laquo; Previous Demo</strong></a> |
							<a href="http://tympanus.net/codrops/?p=14783"><strong>Back to the Codrops Article</strong></a>
						</p>
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<section id="bl-work-section">
					<div class="bl-box">
						<h2 class="bl-icon bl-icon-works">Works</h2>
					</div>
					<div class="bl-content">
						<h2>My Works</h2>
						<p>Mung bean maize dandelion sea lettuce catsear bunya nuts ricebean tatsoi caulie horseradish pea.</p>
						<ul id="bl-work-items">
							<li data-panel="panel-1"><a href="#"><img src="images/1.jpg" /></a></li>
							<li data-panel="panel-2"><a href="#"><img src="images/2.jpg" /></a></li>
							<li data-panel="panel-3"><a href="#"><img src="images/3.jpg" /></a></li>
							<li data-panel="panel-4"><a href="#"><img src="images/4.jpg" /></a></li>
						</ul>
						<p>Illustrations by <a href="http://dribbble.com/isaac317/click">Isaac Montemayor</a></p>
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<section>
					<div class="bl-box">
						<h2 class="bl-icon bl-icon-blog">Blog</h2>
					</div>
					<div class="bl-content">
						<h2>My Musings</h2>
						<article>
							<h3>Being a Freelance Designer</h3>
							<p>Stumptown helvetica cardigan, odd future seitan tattooed flannel. Kale chips direct trade cray beard. 8-bit etsy butcher post-ironic blog lo-fi mcsweeney's, sustainable pickled umami flexitarian DIY ethical plaid trust fund. Wolf cred organic, terry richardson aesthetic four loko occupy vegan chillwave readymade deep... <a href="#">Read more</a></p>
						</article>
						<article>
							<h3>Working with Photoshop</h3>
							<p>Cosby sweater odd future gluten-free actually dreamcatcher. Fixie cray vice sriracha disrupt, lo-fi pitchfork mcsweeney's swag YOLO meh chambray etsy. Keytar sriracha fanny pack church-key hashtag vice blog. 3 wolf moon VHS helvetica, raw denim deep v shoreditch seitan twee... <a href="#">Read more</a></p>
						</article>
						<article>
							<h3>Making use of Icon Fonts</h3>
							<p>Locavore irony gastropub chillwave, butcher meggings flexitarian pinterest master cleanse godard. Intelligentsia pop-up neutra, williamsburg gastropub godard pinterest swag deep v umami lomo. Butcher next level 90's wolf bushwick, narwhal photo booth YOLO kale chips whatever small batch. Meh viral ethical hella cardigan portland, street art mlkshk meggings mixtape kale chips cliche messenger bag pitchfork... <a href="#">Read more</a></p>
						</article>
						<article>
							<h3>Being a Freelance Designer</h3>
							<p>Stumptown helvetica cardigan, odd future seitan tattooed flannel. Kale chips direct trade cray beard. 8-bit etsy butcher post-ironic blog lo-fi mcsweeney's, sustainable pickled umami flexitarian DIY ethical plaid trust fund. Wolf cred organic, terry richardson aesthetic four loko occupy vegan chillwave readymade deep... <a href="#">Read more</a></p>
						</article>
						<article>
							<h3>Working with Photoshop</h3>
							<p>Cosby sweater odd future gluten-free actually dreamcatcher. Fixie cray vice sriracha disrupt, lo-fi pitchfork mcsweeney's swag YOLO meh chambray etsy. Keytar sriracha fanny pack church-key hashtag vice blog. 3 wolf moon VHS helvetica, raw denim deep v shoreditch seitan twee... <a href="#">Read more</a></p>
						</article>
						<article>
							<h3>Making use of Icon Fonts</h3>
							<p>Locavore irony gastropub chillwave, butcher meggings flexitarian pinterest master cleanse godard. Intelligentsia pop-up neutra, williamsburg gastropub godard pinterest swag deep v umami lomo. Butcher next level 90's wolf bushwick, narwhal photo booth YOLO kale chips whatever small batch. Meh viral ethical hella cardigan portland, street art mlkshk meggings mixtape kale chips cliche messenger bag pitchfork... <a href="#">Read more</a></p>
						</article>
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<section>
					<div class="bl-box">
						<h2 class="bl-icon bl-icon-contact">Contact</h2>
					</div>
					<div class="bl-content">
						<h2>Get in touch</h2>
						<p>Pinterest semiotics single-origin coffee craft beer thundercats irony, tumblr bushwick intelligentsia pickled. Narwhal mustache godard master cleanse street art, occupy ugh selfies put a bird on it cray salvia four loko gluten-free shoreditch. Occupy american apparel freegan cliche. Mustache trust fund 8-bit jean shorts mumblecore thundercats. Pour-over small batch forage cray, banjo post-ironic flannel keffiyeh cred ethnic semiotics next level tousled fashion axe. Sustainable cardigan keytar fap bushwick bespoke.</p>
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<!-- Panel items for the works -->
				<div class="bl-panel-items" id="bl-panel-work-items">
					<div data-panel="panel-1">
						<div>
							<img src="images/1.jpg" />
							<h3>Fixie bespoke</h3>
							<p>Iphone artisan direct trade ethical Austin. Fixie bespoke banh mi ugh, deep v vinyl hashtag. Tumblr gentrify keffiyeh pop-up iphone twee biodiesel. Occupy american apparel freegan cliche. Mustache trust fund 8-bit jean shorts mumblecore thundercats. Pour-over small batch forage cray, banjo post-ironic flannel keffiyeh cred ethnic semiotics next level tousled fashion axe. Sustainable cardigan keytar fap bushwick bespoke.</p>
						</div>
					</div>
					<div data-panel="panel-2">
						<div>
							<img src="images/2.jpg" />
							<h3>Chillwave mustache</h3>
							<p>Squid vinyl scenester literally pug, hashtag tofu try-hard typewriter polaroid craft beer mlkshk cardigan photo booth PBR. Chillwave 90's gentrify american apparel carles disrupt. Pinterest semiotics single-origin coffee craft beer thundercats irony, tumblr bushwick intelligentsia pickled. Narwhal mustache godard master cleanse street art, occupy ugh selfies put a bird on it cray salvia four loko gluten-free shoreditch.</p>
						</div>
					</div>
					<div data-panel="panel-3">
						<div>
							<img src="images/3.jpg" />
							<h3>Austin hella</h3>
							<p>Ethical cray wayfarers leggings vice, seitan banksy small batch ethnic master cleanse. Pug chillwave etsy, scenester meh occupy blue bottle tousled blog tonx pinterest selvage mixtape swag cosby sweater. Synth tousled direct trade, hella Austin craft beer ugh chambray.</p>
						</div>
					</div>
					<div data-panel="panel-4">
						<div>
							<img src="images/4.jpg" />
							<h3>Brooklyn dreamcatcher</h3>
							<p>Fashion axe 90's pug fap. Blog wayfarers brooklyn dreamcatcher, bicycle rights retro YOLO. Wes anderson lomo 90's food truck 3 wolf moon, twee jean shorts. Iphone small batch twee wolf yr before they sold out. Brooklyn echo park cred, portland pug selvage flannel seitan tousled mcsweeney's.</p>
						</div>
					</div>
					<nav>
						<span class="bl-next-work">&gt; Next Project</span>
						<span class="bl-icon bl-icon-close"></span>
					</nav>
				</div>
			</div>
		</div><!-- /container -->
				<script>
			$(function() {
				Boxlayout.init();
			});
		</script>