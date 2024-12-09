<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <title>Portfolio - Project</title>
        <meta name="author" content="Abradu Frimpong Kwame">
        <meta name="description" content="This is my Portfolio Project">
        <meta name="keywords" content="SEO Marketing, Digital Marketing">
        
        <link rel="stylesheet" href="./style/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    </head>
    <body>
        <header class="header">
            <div id="menu-btn" class="fas fa-bars">
                
            </div>
            <a href="#home" class="logo active">Portfolio</a>
            <nav class="navbar" id="navbar">
                <a href="#home" class="active">home</a>
                <a href="#about">about</a>
                <a href="#services">services</a>
                <a href="#portfolio">portfolio</a>
                <a href="#contact">contact</a>
            </nav>
            <div class="follow" id="follow">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-youtube"></a>
            </div>
        </header>
        <section class="home" id="home">
            <div class="image" data-aos="fade-up">
                <img src="./Assets/images/black-woman.avif" alt="black women"/>
            </div>
            <div class="content" data-aos="zoom-in">
                <h3>hi, i am abradu frimpong</h3>
                <span>web developer and designer</span>
                <p>I specialize in creating beautiful, functional, and responsive websites. 
                With a passion for innovation and a knack for problem-solving, I bring your 
                digital ideas to life with modern design and cutting-edge technologies.
                </p>
                <a href="#" class="btn">about me</a>
            </div>
        </section>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="./js/script.js"></script>
        <script>
            AOS.init({
                duration: 1500,
                delay: 400,
            })
        </script>
    </body>
</html>