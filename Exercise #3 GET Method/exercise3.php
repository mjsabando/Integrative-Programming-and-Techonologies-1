<?php
    
    if (isset($_GET['name'])) {
        
        $name = htmlspecialchars($_GET['name']);
        $greeting = "Ahoy, " . $name . "! Welcome aboard. Let me inroduce our Crew!";
    } else {
        
        $greeting = "Ahoy, matey! Welcome aboard. Let me inroduce our Crew!";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pirates of the Caribbean</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="https://placehold.co/32x32/000000/ffffff?text=P">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            @apply bg-zinc-900 text-white scroll-smooth;
            background-color: #18181b;
        }
        .header-bg {
            background-image: url('pocHeaderBg.jpg');
            background-size: cover;
            background-position: center;
        }
        .profile-img {
            @apply w-32 h-32 md:w-48 md:h-48 rounded-full border-4 border-amber-500 shadow-lg object-cover;
            filter: grayscale(100%);
            transition: transform 0.3s ease, filter 0.3s ease;
        }
        .ot-icon {
            @apply w-32 h-32 md:w-48 md:h-48 rounded-full border-4 border-amber-500 shadow-lg object-cover;
            width: 25%;
            height: 25%;
        }
        .profile-img:hover {
            filter: grayscale(0%);
            transform: scale(1.05);
        }
    </style>
</head>
<body class="scroll-smooth">

    <!-- Header Section -->
    <header class="header-bg relative flex flex-col items-center justify-center h-64 md:h-96 text-center text-white p-4">
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <div class="mt-4 z-10">
            <img src="Pirates of the Caribbean.png" alt="Pirates of the Caribbean Logo" class="rounded-md shadow-lg">
        </div>
    </header>

    <!-- Navigation Bar -->
    <nav id="navigation" class="sticky top-0 z-50 bg-zinc-800 bg-opacity-90 backdrop-blur-md shadow-lg py-4 transition-all duration-300">
        <div class="container mx-auto flex justify-center space-x-8 md:space-x-16">
            <a href="#hero" class="text-gray-200 hover:text-amber-400 font-semibold transition-colors duration-200 transform hover:scale-105" onclick="scrollToSection(event, 'hero')">
                <h3 class="menuItem">HOME</h3>
            </a>
            <a href="#profiles-section" class="text-gray-200 hover:text-amber-400 font-semibold transition-colors duration-200 transform hover:scale-105" onclick="scrollToSection(event, 'profiles-section')">
                <h3 class="menuItem">OUR TEAM</h3>
            </a>
            <a href="#footer" class="text-gray-200 hover:text-amber-400 font-semibold transition-colors duration-200 transform hover:scale-105" onclick="scrollToSection(event, 'footer')">
                <h3 class="menuItem">CONTACT</h3>
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <div id="hero" class="container mx-auto p-4 md:p-8">
        <img src="hero.png" alt="Hero Image" class="w-full rounded-lg shadow-xl">
    </div>

    <!-- Team Cards Section -->
    <div class="container mx-auto py-12 px-4 md:px-8">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-10 text-amber-500 drop-shadow-md"><?php echo $greeting; ?></h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Member 1 -->
            <div class="bg-zinc-800 rounded-xl shadow-lg p-6 flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-300">
                <img src="nueva.jpg" alt="Team member Jean Calvin Nueva" class="profile-img">
                <h3 class="mt-4 text-xl font-bold text-amber-400">JEAN CALVIN NUEVA</h3>
                <p class="mt-2 text-sm text-gray-400">Future Cyber Security</p>
            </div>
            <!-- Member 2 -->
            <div class="bg-zinc-800 rounded-xl shadow-lg p-6 flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-300">
                <img src="quita.png" alt="Team member Ryhea Jean Quita" class="profile-img">
                <h3 class="mt-4 text-xl font-bold text-amber-400">RYHEA JEAN QUITA</h3>
                <p class="mt-2 text-sm text-gray-400">Future Cyber Security Cutie</p>
            </div>
            <!-- Member 3 -->
            <div class="bg-zinc-800 rounded-xl shadow-lg p-6 flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-300">
                <img src="sabando.png" alt="Team member Melvic Jane Sabando" class="profile-img">
                <h3 class="mt-4 text-xl font-bold text-amber-400">MELVIC JANE SABANDO</h3>
                <p class="mt-2 text-sm text-gray-400">Future Data Analyst</p>
            </div>
            <!-- Member 4 -->
            <div class="bg-zinc-800 rounded-xl shadow-lg p-6 flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-300">
                <img src="sama.png" alt="Team member Krisalyn Sama" class="profile-img">
                <h3 class="mt-4 text-xl font-bold text-amber-400">KRISALYN SAMA</h3>
                <p class="mt-2 text-sm text-gray-400">Future Web Developer</p>
            </div>
        </div>
    </div>

    <!-- Our Team Section (Detailed Profiles) -->
    <section id="profiles-section" class="container mx-auto py-12 px-4 md:px-8">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-10 text-amber-500 drop-shadow-md">Our Full Profiles</h2>

        <!-- Profile 1: Jean Calvin Nueva -->
        <div class="bg-zinc-800 rounded-xl shadow-lg p-8 flex flex-col md:flex-row items-center mb-12 transition-transform transform hover:scale-105 duration-300">
            <img src="nuevaT.png" alt="Jean Calvin Nueva" class="ot-icon">
            <div class="md:ml-8 mt-4 md:mt-0 text-center md:text-left">
                <h3 class="text-2xl font-bold text-amber-400">JEAN CALVIN NUEVA</h3>
                <p class="mt-2 text-gray-400">
                    July 17, 2001<br>
                    San Pedro, Laguna<br>
                    "Your Future Cyber Security"
                </p>
                <div class="flex justify-center md:justify-start mt-4 space-x-4">
                    <a href="https://www.facebook.com/share/1AH78icxhK/" target="_blank" class="w-8 h-8 md:w-10 md:h-10">
                        <img src="fb.png" alt="Facebook" class="rounded-full transition-transform transform hover:scale-110">
                    </a>
                    <a href="mailto:nuevajeancalvin_bsit@plmun.edu.ph" class="w-8 h-8 md:w-10 md:h-10">
                        <img src="em.png" alt="Email" class="rounded-full transition-transform transform hover:scale-110">
                    </a>
                    <a href="https://github.com/jcnueva" target="_blank" class="w-8 h-8 md:w-10 md:h-10">
                        <img src="gh.png" alt="Github" class="rounded-full transition-transform transform hover:scale-110">
                    </a>
                </div>
            </div>
        </div>

        <!-- Profile 2: Ryhea Jean Quita -->
        <div class="bg-zinc-800 rounded-xl shadow-lg p-8 flex flex-col md:flex-row-reverse items-center mb-12 transition-transform transform hover:scale-105 duration-300">
            <img src="quitaT.png" alt="Ryhea Jean Quita" class="ot-icon">
            <div class="md:mr-8 mt-4 md:mt-0 text-center md:text-right">
                <h3 class="text-2xl font-bold text-amber-400">RYHEA JEAN QUITA</h3>
                <p class="mt-2 text-gray-400">
                    April 9, 2002<br>
                    641 CRM Avenue Goodyear Park Almanza Uno<br>
                    "Your Future Cyber Security Cutie"
                </p>
                <div class="flex justify-center md:justify-end mt-4 space-x-4">
                    <a href="https://www.facebook.com/ryheajean.quita?mibextid=ZbWKwL" target="_blank" class="w-8 h-8 md:w-10 md:h-10">
                        <img src="fb.png" alt="Facebook" class="rounded-full transition-transform transform hover:scale-110">
                    </a>
                    <a href="mailto:quitaryheajean.bsit@edu.ph" class="w-8 h-8 md:w-10 md:h-10">
                        <img src="em.png" alt="Email" class="rounded-full transition-transform transform hover:scale-110">
                    </a>
                    <a href="https://github.com/ryheajeanquita" target="_blank" class="w-8 h-8 md:w-10 md:h-10">
                        <img src="gh.png" alt="Github" class="rounded-full transition-transform transform hover:scale-110">
                    </a>
                </div>
            </div>
        </div>

        <!-- Profile 3: Melvic Jane Sabando -->
        <div class="bg-zinc-800 rounded-xl shadow-lg p-8 flex flex-col md:flex-row items-center mb-12 transition-transform transform hover:scale-105 duration-300">
            <img src="sabandoT.png" alt="Melvic Jane Sabando" class="ot-icon">
            <div class="md:ml-8 mt-4 md:mt-0 text-center md:text-left">
                <h3 class="text-2xl font-bold text-amber-400">MELVIC JANE SABANDO</h3>
                <p class="mt-2 text-gray-400">
                    December 21, 2004<br>
                    South Daang Hari, Taguig City<br>
                    "Your Future Data Analyst"
                </p>
                <div class="flex justify-center md:justify-start mt-4 space-x-4">
                    <a href="https://www.facebook.com/share/19jcRV46ch/" target="_blank" class="w-8 h-8 md:w-10 md:h-10">
                        <img src="fb.png" alt="Facebook" class="rounded-full transition-transform transform hover:scale-110">
                    </a>
                    <a href="mailto:sabandomelvicjane_bsit@plmun.edu.ph" class="w-8 h-8 md:w-10 md:h-10">
                        <img src="em.png" alt="Email" class="rounded-full transition-transform transform hover:scale-110">
                    </a>
                    <a href="https://github.com/mjsabando" target="_blank" class="w-8 h-8 md:w-10 md:h-10">
                        <img src="gh.png" alt="Github" class="rounded-full transition-transform transform hover:scale-110">
                    </a>
                </div>
            </div>
        </div>

        <!-- Profile 4: Krisalyn Sama -->
        <div class="bg-zinc-800 rounded-xl shadow-lg p-8 flex flex-col md:flex-row-reverse items-center transition-transform transform hover:scale-105 duration-300">
            <img src="samaT.png" alt="Krisalyn Sama" class="ot-icon">
            <div class="md:mr-8 mt-4 md:mt-0 text-center md:text-right">
                <h3 class="text-2xl font-bold text-amber-400">KRISALYN SAMA</h3>
                <p class="mt-2 text-gray-400">
                    July 1, 2004<br>
                    Block 12 Lot 39 Ignacious Street San Jose Townhomes General Trias Cavite<br>
                    "Your Future Web Developer ngani."
                </p>
                <div class="flex justify-center md:justify-end mt-4 space-x-4">
                    <a href="https://www.facebook.com/share/1AwvxMtdR4/" target="_blank" class="w-8 h-8 md:w-10 md:h-10">
                        <img src="fb.png" alt="Facebook" class="rounded-full transition-transform transform hover:scale-110">
                    </a>
                    <a href="mailto:samakrisalyn_bsit@plmun.edu.ph" class="w-8 h-8 md:w-10 md:h-10">
                        <img src="em.png" alt="Email" class="rounded-full transition-transform transform hover:scale-110">
                    </a>
                    <a href="https://github.com/Krisalyn-3J" target="_blank" class="w-8 h-8 md:w-10 md:h-10">
                        <img src="gh.png" alt="Github" class="rounded-full transition-transform transform hover:scale-110">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer id="footer" class="bg-zinc-800 rounded-t-lg shadow-inner py-8 px-4 md:px-8">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center text-center md:text-left">

            <div class="mb-6 md:mb-0">
                <h4 class="text-lg font-bold text-amber-400">Contact</h4>
                <ul class="mt-2 text-gray-400">
                    <li><a href="mailto:plmuncomm@gmail.com" class="hover:text-amber-300">plmuncomm@gmail.com</a></li>
                </ul>
            </div>

            <div class="mb-6 md:mb-0">
                <h4 class="text-lg font-bold text-amber-400">Address</h4>
                <ul class="mt-2 text-gray-400">
                    <li>University Road NBP Reservation<br>Barangay Poblacion, Muntinlupa City Philippines</li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-bold text-amber-400">Useful Links</h4>
                <ul class="mt-2 text-gray-400">
                    <li><a href="https://www.facebook.com/share/19oUst6D52/" target="_blank" class="hover:text-amber-300">PLMun Facebook Page</a></li>
                    <li><a href="https://plmun.edu.ph/student-portal/system/main/index.php" target="_blank" class="hover:text-amber-300">PLMun Portal</a></li>
                    <li><a href="https://www.plmun.edu.ph/" target="_blank" class="hover:text-amber-300">PLMun Website</a></li>
                </ul>
            </div>

        </div>

        <!-- Copyright and Back to Top -->
        <div class="text-center text-gray-500 text-sm mt-8">
            <p>© All Rights Reserved 2025.</p>
        </div>


    </footer>

    <!-- JavaScript for smooth scrolling -->
    <script>
        function scrollToSection(event, sectionId) {
            event.preventDefault();
            const section = document.getElementById(sectionId);
            if (section) {
                window.scrollTo({
                    top: section.offsetTop,
                    behavior: 'smooth'
                });
            }
        }
    </script>

</body>
</html>
