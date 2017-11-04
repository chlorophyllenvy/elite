<!DOCTYPE html>
<html lang="en">
<head> 
	<title>Elite Floor and Stone</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"  />
	<meta name="keywords" content="Flooring, contractor, hardwood, tile, carpet, countertop" />
	<meta name="description" content="Elite Floor and Stone - Flooring Contractor:  Offering a full range of flooring sales, repair and installation services  " />
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="home">
	<?php
		include "php/header.php";
	?>
    <div id="hero">
        <div class="headline">
            <section>
                <h1>
                    Elite Floor and Stone
                </h1>
                <p>
                    Located in Monroe, NY, Elite Floor and Stone offers a one-stop shop for all your flooring, stone and tile needs.  We offer free estimates and only use the highest quality products and materials.
                </p>
            </section>
        </div>
        <div class="cta">
            <span>Contact us below with any questions or for a free quote!</span>  
        </div>
        
    </div>
    <div id="about" class="clearfix">
        <h2>About</h2>
        <div class="about-container">
            <img src="img/professionalism.jpg" alt="Professionalism" class="professionalism">
            <h3>Professionalism</h3>
            <p>Professionalism pervades all aspects of Elite Floor and Stone's philosophy and commitment to our clients.  With decades of experience, open and honest communication and the highest quality materials, you can be sure that our services will meet and exceed your expectations. </p>
        </div>
        <div class="about-container">
            <img src="img/expertise.jpg" alt="Expertise" class="expertise">  
            <h3>Expertise</h3>
            <p>Elite Floor and Stone has the competence and skills required for even the most unique and challenging tasks as well as the coupled with the best possible products to provide an outstanding experience for every customer and every job. </p>
        </div>
        <div class="about-container">
            <img src="img/customer-satisfaction.jpg" alt="Customer Satisfaction" class="satisfaction">
            <h3>Customer-Satisfaction</h3>
            <p>Satisfaction.  That's what we want you to feel at the end of any project.  When we leave your house the only thing you should notice is the beautiful work that's been done, no mess and no unfinished business. </p>
        </div>
    </div>
    <div id="services" class="clearfix">
        <h2>Services</h2>
        <div class="services-container clearfix">
            <div class="services">
                <h3>Services</h3>
                 <ul>
                        <li>Installation and removal</li>
                        <li>Prep work</li>
                        <li>Sealing</li>
                        <li>Consulting</li>
                        <li>Inspection</li>
                    </ul>
                   
                
            </div>
            <div class="services">
                <h3>Stone</h3>
                    <ul>
                        <li>Countertops</li>
                        <li>Flooring</li>
                        <li>Patios</li>
                        <li>Pool and Vinyl</li>
                    </ul>
                
            </div>
            <div class="services">
                <h3>Flooring</h3>
                    <ul>
                        <li>Hardwood</li>
                        <li>Tile</li>
                        <li>Carpet</li>
                        <li>Laminate</li>
                    </ul>
            </div>
        </div>
    </div>
    <div id="gallery" class="clearfix">
        <h2>gallery</h2>
        <div class="gallery-container">
            <div class="gallery">
                <a href="gallery/#wood">
                    <span class="title">Wood</span>
                    <span class="link">Click to view our past hardwood work</span>
                </a>
            </div>
            <div class="gallery">
                <a href="gallery/#tile">
                    <span class="title">Tile</span>
                    <span class="link">Click to view our past tile work</span>
                </a>
            </div>
            <div class="gallery">
                <a href="gallery/#stone">
                    <span class="title">Stone</span>
                    <span class="link">Click to view our past stone work</span>
                </a>
            </div>
        </div>
    </div>
    <div id="contact">
        <h2>Contact</h2>
        <form action="/php/submit.php" >
            <h1>Questions? Need a quote? <b>Contact us today!</b></h1>
            <span class="error">
                Please recheck your information and make sure that you provide a message.   
            </span> 
           <fieldset>
                <input type="text" id="name" name="name" placeholder="NAME">
                <input type="phone" id="phone" pattern="[0-9 \-]{10,12}" name="phone" placeholder="PHONE #">
                <input type="email" pattern="[^ @]*@[^ @]*" id="email"  name="email" placeholder="EMAIL ADDRESS">
           </fieldset>
           
            <textarea name="message" id="message" cols="30" rows="8" >Message
                
            </textarea>
            <fieldset>
                 <input type="button" class="submit" value="submit">
                <input type="button" value="Clear Form" class="clear">
            </fieldset>
           
            
            <small>You can also email us directly at: <a href="mailto:floorinstaller@gmail.com">floorinstaller@gmail.com</a></small>
        </form>
    </div>
    <footer class="clearfix">
        <p>Elite Floor and Stone, January 2017.  No personal information is used for any reason other than the express purpose of providing estimates or answering questions posed.  Your information will not be shared or stored for any purpose outside the purview of business dealings with Elite Floor and Stone.</p>
        
        <p>Blue icons in the about section <a href="http://www.freepik.com">designed by Freepik</a></p>
    </footer>
    <?php 
        include("php/scripts.php");
    ?>
</body>
</html>