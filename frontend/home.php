
<?php

include('../backend/methods.php');
include('../backend/preventaccess/is_not_login.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
        }

	

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .card h2 {
            margin-top: 0;
            color: #333;
        }

        .card p {
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .scroll-indicator {
            text-align: center;
            margin-top: 50px;
        }

        .scroll-indicator a {
            color: #00d4ff;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .scroll-indicator a:hover {
            color: #0056b3;
        }
		.btn-card{
			padding: 20px;
          
			display: flex;
			justify-content: end;
			align-items: center;
			
		}
		.logout-btn {

            margin-top: 10px;
            padding: 10px 20px;
            background-color: #00d4ff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
			width: 100px;
			
        }

        .logout-btn:hover {
            background-color: #0056b3;
        }

		.header {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.user-details {
    display: flex;
    align-items: center;
}

.user-details .user-name {
    margin-right: 20px;
    font-weight: bold;
}

.logout-btn-container {
    margin-left: auto;
}

.logout-btn {
    background-color: transparent;
    border: none;
    color: #fff;
    cursor: pointer;
    font-size: 16px;
    text-decoration: underline;
}

.logout-btn:hover {
    color: #f0f0f0;
}

    </style>
</head>
<body>

		<?php
		      include('../backend/database/config.php');
			  include('navigation.php'); 
		?>

	
	<div class="container">
		<div class="btn-card" >

		</div>
        <div class="card">
            <h2>Welcome to Our Website</h2>
            <p>Welcome to our website! Here at Example Company, we are dedicated to providing high-quality products and services to meet your needs.</p>
        </div>

        <div class="card">
            <h2>About Us</h2>
            <p>Example Company has been serving customers since 2005. Our team is comprised of passionate professionals who are committed to excellence in everything we do.</p>
        </div>

        <div class="card">
            <h2>Our Services</h2>
            <p>At Example Company, we offer a wide range of services, including web design, digital marketing, and consulting. Whatever your needs may be, we've got you covered.</p>
        </div>

        <div class="card">
            <h2>Contact Us</h2>
            <p>Have questions or want to learn more about our products and services? Contact us today to speak with a member of our team. We're here to help!</p>
        </div>
    </div>

    <div class="scroll-indicator">
        <a href="#more-content">Scroll Down to See More</a>
    </div>

    <!-- Additional content below for scrolling -->
    <div id="more-content" class="container">
        <div class="card">
            <h2>Our Team</h2>
            <p>Meet the dedicated professionals who make Example Company great. Our team is passionate about what we do and committed to delivering exceptional results.</p>
        </div>

        <div class="card">
            <h2>Testimonials</h2>
            <p>See what our customers have to say about their experiences with Example Company. We take pride in providing excellent service and building lasting relationships.</p>
        </div>

        <div class="card">
            <h2>Recent Projects</h2>
            <p>Check out some of our recent projects to see the quality of work we deliver. From website development to marketing campaigns, we strive for excellence in every project.</p>
        </div>
    </div>
	
</body>
</html>
