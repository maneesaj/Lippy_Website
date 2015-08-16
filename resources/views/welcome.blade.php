<!DOCTYPE html>
<html>
<body>
    <head>
        <title>Graduate Web Developer Here!</title>
        {!! HTML::style('css/portfoliostyle.css') !!}
        <link href='http://fonts.googleapis.com/css?family=Sigmar+One|Raleway|Oswald' rel='stylesheet' type='text/css'>
    </head>
        <header class="header">
            <img src="../img/logo.png"  width="120px" height="120px"
id="logo" onmouseover="this.src='../img/logottransition.png';" onmouseout="this.src='../img/logo.png';" class="logo">
            
            <a href="../img/DeveloperCv.pdf" class="resume" download>Download CV</a>
        </header>
        <div class="container">
            <div class="lippy_box" id="lippy_box">
                <img class="exit_icon" src="../img/cross.png"/>
                <h1><span class="pinkness">Lippy</span></h1>
                <h6>A website which finds lipstick products based on colour</h6>
                <img class="lippy_web_img" src="../img/lippylaptop.png"/>
            </div>
            <section id="section-1">
                <img src="img/Maneesa.png" id="head" class="head">
                <div class="introbox">
                    <p class="intro">Hi, I'm Maneesa! I'm a bit Shy. I'm also a Web Developer!</p>
                </div>
            </section>
            
            <section id="section-2">
                <h3>Portfolio</h3>
                
                <ul class="ch-grid">
	<li>
		<div class="ch-item ch-img-1">
			<div class="ch-info">
				<h3>Lippy</h3>
				<p>Lipstick Match Finder<a href="#" onclick="OverlayDisplay(event)">View website</a></p>
			</div>
		</div>
	</li>
	<li>
		<div class="ch-item ch-img-2">
			<div class="ch-info">
				<h3>Grouchie</h3>
				<p>Clothes illustrations<a href="http://drbl.in/eKMi">View</a></p>
			</div>
		</div>
	</li>
	<li>
		<div class="ch-item ch-img-3">
			<div class="ch-info">
				<h3>Graphic Design Stew</h3>
				<p>Website for a Graphic Designer.<a href="#">View Website</a></p>
			</div>
		</div>
	</li>
</ul>
              
            </section>
            <section id="section-3">
                <h3>Key skills</h3>
                <div id="contact-info_2">
                    <h4>Writing Code</h4>
                    <p>The list of skills I have keeps on growing. The best thing about the web industry is that there is always something new to learn, weather its new software, a new frame work or a new design trend or concept, this industry will keep you busy. So far I'm familiar with technologies including <span class="pinkness">PHP</span>, <span class="pinkness">SQL</span>, <span class="pinkness"> HTML 5</span>, <span class="pinkness"> CSS3</span>,  <span class="pinkness">Javascript/Jquery</span>,<span class="pinkness">Actionscript</span> and <span class="pinkness">Android</span>.</p>

                    <h4>Design and Accessability</h4>
                    <p>I'm familar with  <span class="pinkness">W3C</span> guidelines and the importance of making websites accessable to all people. I'm also proficient in  <span class="pinkness">Photoshop</span> and  <span class="pinkness">Illusrator</span>.</p>

                    <h4>University</h4>
                    <p>I have a  <span class="pinkness">Web development(BA)</span> degree. These are the things that was covered in my course as well as coding:</p>
                    <ul>
                        <li>Localisation</li>
                        <li>Accessability</li>
                        <li>Unity2D</li>
                        <li>Mobilisation</li>
                        <li>UI design</li>
                        <li>Business & Marketing</li>
                        <li>SEO</li>
                        <li>Cross browser testing</li>
                    </ul>
                </div>
                
                 <div id="contact-info_3">
                    <h4>How I made this website..</h4>
                     <p>I made this website using laravel framework. I also used quite a bit of Jquery. My huge head was done by<a target="_blank" href="http://loll3.tumblr.com/"> <span class="pinkness">LOll3</span></a> who is an illustrator from Italy. Check out her work!</p>
                    <h4>Inspiration</h4>
                     <ul>
                         <li>Codrops</li>
                         <li>CSS-Tricks</li>
                         <li>Smashing Magazine</li>
                         <li>Awwwards</li>
                         <li>Web Designer Depot</li>
                         <li>Web Design Tuts+</li>
                         <li>Tree House Blog</li>
                         <li>Noupe</li>
                         <li>Design Shack</li>
                         <li>Creative Bloq</li>
                         <li>Julien Coppola</li>
                     </ul>
                     <h4>Frameworks/CMS</h4>
                    <p>I familar with modern frameworks such as  <span class="pinkness">Laravel</span>, <span class="pinkness"> CakePHP</span> and I'm studying other frameworks such as Zend and Yii. I'm also familiar with  <span class="pinkness">Wordpress</span>.</p>
                     
                 </div>
            </section>
            
            <section id="section-4">
              <!---Who am I ---->
                <h3>Who Am I?</h3>
                <p>I'm a lady human with geeky interests. When I'm not designing websites you will find me scrolling through Tumblr, Playing Team Fortress 2, watching weird documentaries and trashy reality shows about rich people with first world problems.</p>
                
                <p>Prior to discovering the world of web development, I used to scan items at a till for hours on end narrowly avoiding death by bordom.You could say I was born to be creative..</p>
                <p>So.. Please can I have a job? I need to fix my laptop screen.</p>
                <img id="laptop" src="img/macbook screen.png" />
            </section>
            
            <section id="section-5">
            <h3>Get In Touch!</h3>
                <!---Contact ---->
                <div id="form_box">
                 <div class="msgapprove"> </div>    
                {{{Session::get('message')}}}
                    <h3>Contact Me</h3>
                    <ul>
                        {!! Form::open(array('method' => 'POST','url' => '/contact',)) !!}
                            <li>{!! Form::label('', 'Name:'); !!}</li>
                            <li>{!! Form::text('name', '', array('id'=>'name')) !!}</li>
                            <li>{!! Form::label('', 'Email:'); !!}</li>
                            <li>{!! Form::text('email', '', array('id'=>'email')) !!}</li>
                            <li>{!! Form::label('', 'Message:'); !!}</li>
                            <li>{!! Form::textarea('message', '', array('id'=>'message')) !!}</li>
                            <li><span class="submit">{!! Form::submit('Submit', array('id'=>'submitadd','onlick'=>'validateadd()')) !!}</span></li>
                        </form>
                    </ul>
                    <div id="contact-info">
                        <h5 class="email">Email Me:</h5>
                        <a href="maneesajemployment@gmail.com" class="mail">maneesajemployment@gmail.com</a>                    
                    </div>
                </div>
                   
            </section>
            
            <footer>
                <!---Social Media ---->
                <div id="social_media">
                    <a target="_blank" href="https://teamtreehouse.com/maneesajohnson"><img class="treehouse" src="img/treehouse_logo_transp.png"/></a>
                    <a target="_blank" href="https://uk.linkedin.com/pub/maneesa-johnson/b3/bb5/aa7"><img class="treehouse" src="img/Uiconstock-Socialmedia-Linkedin.ico"/></a>
                    <img class="treehouse" src="img/social_twitter_box_white.png"/>
                </div>
                <h5>&copy; <?php echo date("Y")?> Maneesa Johnson. All Rights Reserved</h5>
            </footer>
        </div>
    </body>
<!---Scripts ---->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    {!! HTML::script('js/PortfolioScript.js'); !!}
    </html>
