<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Website</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        header {
            background-color: #800000;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        nav {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
        }
        nav a:hover {
            background-color: #555;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        .hero {
            background-image: url('bg.jpg'); 
            background-size: cover;
            background-position: center;
            padding: 50px;
            text-align: center;
        }
        .hero h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #fff;
        }
        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
            color: #fff;
        }
        .cta-btn {
            background-color: #800000;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            text-transform: uppercase;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .cta-btn:hover {
            background-color: #600000;
        }
        .about-section,
        .contact-section,
        .donation-info-section {
            background-size: cover;
            background-position: center;
            padding: 50px;
            margin-top: 30px;
            text-align: center;
            border: 1px solid #ccc; 
            border-radius: 10px; 
        }
        .about-section {
            background-image: url('aboutus.jpg');
        }
        .contact-section {
            background-image: url('contactus.jpg');
        }
        .donation-info-section {
            background-image: url('donationinfo.jpg');
        }
        .section-content {
            background-color: rgba(255, 255, 255, 0.7); 
            padding: 20px;
            border-radius: 10px;
        }
        .contact-section ul {
            list-style: none;
            padding: 0;
        }
        .contact-section ul li {
            display: inline-block;
            margin: 0 10px;
        }
        .contact-section img {
            width: 50px;
            height: auto; 
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Blood Donation </h1>
    </header>
    <nav>
        <a href="#">Home</a>
        <a href="#about">About</a>
        <a href="#donation">Donation Information</a>
        <a href="#contact">Contact</a>
    </nav>
    <div class="container">
        <div class="hero">
            <h1>Donate Blood, Save Lives</h1>
            <p>Your donation can make a huge difference. Find out how you can contribute.</p>
            <button class="cta-btn" onclick="redirectToDonatePage()">Donate Now</button>
        </div>
        <div id="about" class="about-section">
            <div class="section-content">
                <h2>About Us</h2>
                <p>Welcome to our Blood Donation Website! We are dedicated to saving lives through blood donation and raising awareness about the importance of donating blood. Our mission is to ensure a stable and safe blood supply for patients in need.</p>
        <p>At our organization, we believe that every drop of blood counts and has the potential to make a significant impact on someone's life. With each donation, you have the power to save up to three lives. Whether you're a first-time donor or a regular contributor, your generosity is invaluable.</p>
        <p>Our team consists of passionate volunteers, healthcare professionals, and community members who are committed to making a difference. Through educational initiatives, blood drives, and partnerships with local hospitals and blood banks, we strive to create a culture of giving and compassion.</p>
        <p>Join us in our mission to save lives and create a healthier future for all. Together, we can make a positive impact and bring hope to those in need.</p>
            </div>
        </div>
        <div id="donation" class="donation-info-section">
            <div class="section-content">
                <h2>Donation Information</h2>
               <p>Blood donation is a simple and safe process that can save lives. Here's some important information you should know about blood donation:</p>
        <ul>
            <li><strong>Eligibility:</strong> To donate blood, you must be in good health, at least 17 years old (or 16 with parental consent in some states), and meet weight and hemoglobin level requirements.</li>
            <li><strong>Types of Donation:</strong> There are different types of blood donation, including whole blood donation, platelet donation, and plasma donation. Each type serves different purposes and can help patients with various medical conditions.</li>
            <li><strong>Donation Process:</strong> The donation process typically involves registration, a brief medical history screening, a mini-physical examination, and the donation itself, which usually takes about 10-15 minutes for whole blood donation.</li>
            <li><strong>Benefits of Donation:</strong> Donating blood not only helps patients in need but also offers health benefits to the donor, such as reducing the risk of certain health conditions and improving overall well-being.</li>
            <li><strong>Frequency of Donation:</strong> In most cases, whole blood donors can donate every 56 days, while platelet and plasma donors may be able to donate more frequently. It's essential to follow the recommended donation intervals to ensure donor safety.</li>
            <li><strong>Post-Donation Care:</strong> After donating blood, it's essential to stay hydrated, avoid strenuous activities for the rest of the day, and follow any specific post-donation instructions provided by the blood donation center.</li>
        </ul>
        <p>By donating blood, you're making a life-saving difference in the lives of patients who rely on blood transfusions for various medical treatments. Your generosity can help ensure that hospitals have an adequate blood supply to meet patient needs.</p>
        <p>Thank you for considering blood donation!</p>
            </div>
        </div>
        <div id="contact" class="contact-section">
            <div class="section-content">
                <h2>Contact Us</h2>
                <p>Thank you for your interest in contacting us. Whether you have questions about blood donation, want to organize a blood drive, or need assistance, we're here to help.</p>
        <p>You can reach us through the following methods:</p>
        <ul>
            <li><strong>Phone:</strong> +91 8050480504</li>
            <li><strong>Email:</strong> info@blooddonationwebsite.com</li>
            <li><strong>Address:</strong> Rajula city, dist-Amreli,pincode-365541, Gujarat, India</li>
        </ul>
        <p>We also encourage you to connect with us on social media:</p>
        <ul>
            <li><a href="https://www.facebook.com/givebloodnhs/"><img src="facebook.png" alt="Facebook"></a></li>
            <li><a href="https://twitter.com/BloodDonorsIn"><img src="twitter.jpg" alt="Twitter"></a></li>
            <li><a href="https://www.instagram.com/bloodconnectorg/?hl=en"><img src="instagram.jpg" alt="Instagram"></a></li>
        </ul>
        <p>Feel free to contact us anytime. Your support is vital in helping us save lives through blood donation.</p>
    </div>
            </div>
        </div>
    </div>
    <footer>
        &copy; 2024 Blood Donation Website. All rights reserved.
    </footer>
    <script>
        function redirectToDonatePage() {
            window.location.href = "login.php"; 
        }
    </script>
</body>
</html>