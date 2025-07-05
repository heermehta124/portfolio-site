<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="style-v2.css">
        <meta charset="UTF-8">
        <meta name="color-scheme" content="light only">
        <meta name="theme-color" content="#ffffff" />
        <link rel="stylesheet" href="style.css?v=<?= time(); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>portfolio</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body class="scroll-container">
        <div class="wrapper">
            <div class="cover cover-left"></div>
            <div class="cover cover-right"></div>
            <div class="book">
                <div class="book-page page-left">
                    <div class="profile-page">
                        <img src="photo.jpg" alt="">
                        <h1>Heer Mehta</h1>
                        <h3>Full Stack Developer</h3>
                        <div class="social-media">
                            <a href="https://www.instagram.com/heermehta12/" target="_blank"><i class='bx bxl-instagram-alt'></i></a>
                            <a href="https://www.linkedin.com/in/heermehta120904" target="_blank"><i class='bx bxl-linkedin-square'></i></a>
                            <a href="https://github.com/heermehta124" target="_blank"><i class='bx bxl-github'></i></a>
                        </div>
                        <p>Hey, I'm Heer Mehta, a full stack developer and B.Tech student at SCET, passionate about building clean, responsive web and mobile applications. I enjoy learning new technologies and turning ideas into real-world projects with a strong focus on user experience.</p>
                        <div class="btn-box">
                            <a href="Resume.pdf" class="btn" target="_blank">Download Resume</a>
                            <a href="#" class="btn contact-me">Contact Me</a>
                        </div>
                    </div>
                </div>
                <!-- page 1 & 2 -->
                <div class="book-page page-right turn" id="turn-1">
                    <!-- page 1 (education) -->
                    <div class="page-front">
                        <h1 class="title">Education</h1>
                        <div class="workeduc-box">
                            <div class="workeduc-content">
                                <span class="year"><i class='bx bxs-calendar'></i>2022-2026</span>
                                <h3> Computer Science in B.Tech</h3>
                                <p> Sarvajanik College of Engineering and Technology (SCET), Surat</p>
                            </div>
                            <div class="workeduc-content">
                                <span class="year"><i class='bx bxs-calendar'></i>2020-2022</span>
                                <h3>HSC</h3>
                                <p>Smt. V.D. Desai Wadiwala School, Surat</p>
                            </div>
                            <div class="workeduc-content">
                                <span class="year"><i class='bx bxs-calendar'></i>up to 2020</span>
                                <h3>SSC</h3>
                                <p>Smt. V.D. Desai Wadiwala School, Surat</p>
                            </div>
                        </div>
                        <span class="number-page">1</span>
                        <!-- next-button -->
                        <span class="nextprev-btn" data-page="turn-1">
                            <i class='bx bx-chevron-right'></i>
                        </span>
                    </div>
                    <!-- page 2 (work-experience) -->
                    <div class="page-back">
                        <h1 class="title">Experience</h1>
                        <div class="workeduc-box">
                            <div class="workeduc-content">
                                <span class="year"><i class='bx bxs-calendar'></i>19<sup>th</sup>&nbsp;June 2025</span>
                                <div class="row-title-btn">
                                    <h3 class="tooltip" data-tooltip="Issued by Unstop & K. Ramakrishnan College of Engineering">
                                        Winner - Innovate & Inspire 13
                                    </h3>
                                    <div class="btn-box">
                                        <a href="https://unstop.com/certificate-preview/6dfa3f4c-5607-43fb-a7c1-f1b2b3678270?utm_campaign=" class="btn" target="_blank">View Certificate</a>
                                    </div>
                                </div>
                            </div>
                            <div class="workeduc-content">
                                <span class="year"><i class='bx bxs-calendar'></i>14<sup>th</sup>&nbsp;May 2025</span>
                                <div class="row-title-btn">
                                    <h3 class="tooltip" data-tooltip="Issued by freeCodeCamp : HTML5, CSS3, Flexbox, Grid, and accessibility">
                                        Responsive Web Design
                                    </h3>
                                    <div class="btn-box">
                                        <a href="https://www.freecodecamp.org/certification/heermehta/responsive-web-design" class="btn" target="_blank">View Certificate</a>
                                    </div>
                                </div>
                            </div>
                            <div class="workeduc-content">
                                <span class="year"><i class='bx bxs-calendar'></i>8<sup>th</sup>&nbsp;May 2025</span>
                                <div class="row-title-btn">
                                    <h3 class="tooltip" data-tooltip="Issued by LetsUpgrade in collaboration with NSDC, ITM and GDG MAD">
                                        HTML & CSS Bootcamp
                                    </h3>
                                    <div class="btn-box">
                                        <a href="https://verify.letsupgrade.in/certificate/LUEHTMLMAY125597" class="btn" target="_blank">View Certificate</a>
                                    </div>
                                </div>
                            </div>
                            <div class="workeduc-content">
                                <span class="year"><i class='bx bxs-calendar'></i>April 2025</span>
                                <div class="row-title-btn">
                                    <h3 class="tooltip" data-tooltip="Completed via Forage - Skyscanner : Built a travel UI using React and Backpack">
                                        Front-End Virtual Experience
                                    </h3>  
                                    <div class="btn-box">
                                        <a href="https://forage-uploads-prod.s3.amazonaws.com/completion-certificates/skoQmxqhtgWmKv2pm/km4rw7dihDr3etqom_skoQmxqhtgWmKv2pm_ojrgANYHNzZmLS6n8_1745488677544_completion_certificate.pdf" class="btn" target="_blank">View Certificate</a>
                                    </div>
                                </div>
                            </div>
                            <div class="workeduc-content">
                                <span class="year"><i class='bx bxs-calendar'></i>November 2024</span>
                                <div class="row-title-btn">
                                    <h3 class="tooltip" data-tooltip="Issued by Great Learning Academy Covered fundamentals of React JS for front-end development">
                                        React JS Tutorial
                                    </h3>
                                    <div class="btn-box">
                                        <a href="https://www.mygreatlearning.com/certificate/BUIUTREY" class="btn" target="_blank">View Certificate</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="number-page">2</span>
                        <!-- back-button -->
                        <span class="nextprev-btn back" data-page="turn-1">
                            <i class='bx bx-chevron-left' ></i>
                        </span>
                    </div>
                </div>
                <!-- page 3 & 4 -->
                <div class="book-page page-right turn" id="turn-2">
                    <!-- page 3 (my skills) -->
                    <div class="page-front">
                        <h1 class="title">Skills</h1>
                        <div class="skills-box">
                            <div class="skills-content">
                                <h3>Programming Languages</h3>
                                <div class="content">
                                    <span><i class='bx bxl-python'></i>Python</span>
                                    <span><i class='bx bx-code-alt'></i>C</span>
                                    <span><i class='bx bxl-java'></i>Java</span>
                                    <span><i class='bx bxl-javascript'></i>&nbsp;&nbsp;javaScript &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ES6+)</span>
                                    <span><i class='bx bxl-php'></i>PHP</span>
                                </div>
                            </div>
                            <div class="skills-content">
                                <h3>Front-End</h3>
                                <div class="content">
                                    <span><i class='bx bxl-html5'></i>HTML5</span>
                                    <span><i class='bx bxl-css3'></i>CSS3</span>
                                    <span><i class='bx bxl-bootstrap'></i>Bootstrap</span>
                                    <span><i class='bx bxl-react'></i>React</span>
                                    <span><i class='bx bxl-angular'></i>Angular</span>
                                </div>
                            </div>
                            <div class="skills-content">
                                <h3>Back-End</h3>
                                <div class="content">
                                    <span><i class='bx bxl-nodejs'></i>Node.js</span>
                                    <span><i class='bx bxl-php'></i>PHP</span>
                                    <span><i class='bx bx-code-curly'></i>Django</span>
                                </div>
                            </div>
                            <div class="skills-content">
                                <h3>Database</h3>
                                <div class="content">
                                    <span><i class='bx bxs-data'></i>MySQL</span>
                                    <span><i class='bx bxl-firebase'></i>Firebase</span>
                                </div>
                            </div>
                            <div class="skills-content">
                                <h3>Data Visualization</h3>
                                <div class="content">
                                    <span><i class='bx bx-bar-chart-alt-2'></i>Tableau</span>
                                    <span><i class='bx bx-pie-chart-alt'></i>Flourish</span>
                                </div>
                            </div>
                            <div class="skills-content">
                                <h3>Tools & Platforms</h3>
                                <div class="content">
                                    <span><i class='bx bx-code'></i>VS Code</span>
                                    <span><i class='bx bx-laptop'></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Visual &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Studio</span>
                                    <span><i class='bx bxl-android'></i>&nbsp;&nbsp;&nbsp;Android &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Studio</span>
                                    <span><i class='bx bxl-github'></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Git & &nbsp;&nbsp;&nbsp;&nbsp;GitHub</span>
                                    <span><i class='bx bxs-paint'></i>Canva</span>
                                    <span><i class='bx bx-cube'></i>Fusion 360</span>
                                </div>
                            </div>
                        </div>
                        <span class="number-page">3</span>
                        <!-- next-button -->
                        <span class="nextprev-btn" data-page="turn-2">
                            <i class='bx bx-chevron-right'></i>
                        </span>
                    </div>
                    <!-- page 4 (my projects) -->
                    <div class="page-back">
                        <h1 class="title">Projects</h1>
                        <div class="project-box">
                            <div class="img-box">
                                <img src="proj1.png" alt="">
                            </div>
                            <div class="info-box">
                                <div class="info-title">
                                    <h3>Delicious Restaurant Website</h3>
                                    <p>Designed and developed a static restaurant website with a clean layout and intuitive navigation. Included multiple sections such as Home, About, Menu, Gallery and Services, focusing on aesthetic appeal and user-friendly design</p>
                                    <h3>Tech Used</h3>
                                    <p>HTML, CSS, JavaScript, Bootstrap</p>
                                </div>
                            </div>
                            <div class="btn-box">
                                <a href="https://github.com/heermehta124/Delicious-Restaurant" class="btn" target="_blank">Source Code<i class='bx bx-code-block'></i></a>
                            </div>
                        </div>
                        <span class="number-page">4</span>
                        <!-- back-button -->
                        <span class="nextprev-btn back" data-page="turn-2">
                            <i class='bx bx-chevron-left' ></i>
                        </span>
                    </div>
                </div>
                <!-- page 5 & 6 -->
                <div class="book-page page-right turn" id="turn-3">
                    <!-- page 5 (my projects) -->
                    <div class="page-front">
                        <div class="project-box">
                            <div class="img-box">
                                <img src="proj2.png" alt="">
                            </div>
                            <div class="info-box">
                                <div class="info-title">
                                    <h3>BiteDelight Kiosk Web App</h3>
                                    <p>Developed a digital restaurant kiosk web application featuring a responsive menu interface tailored for both desktop and mobile environments. Emphasized clean UI, seamless user experience, and efficient multi-platform deployment for streamlined food ordering.</p>
                                    <h3>Tech Used</h3>
                                    <p>HTML, CSS, JavaScript, PHP</p>
                                </div>
                            </div>
                            <div class="btn-box">
                                <a href="https://github.com/heermehta124/bitedelight-kiosk" class="btn" target="_blank">Source Code<i class='bx bx-code-block'></i></a>
                                <a href="https://kiosk.lovestoblog.com/" class="btn" target="_blank">Live Preview<i class='bx bx-link-external'></i></a>
                            </div>
                            <div class="btn-box">
                                <a href="https://github.com/heermehta124" class="btn" target="_blank">More Projects</a>
                            </div>
                        </div>
                        <span class="number-page">5</span>
                        <!-- next-button -->
                        <span class="nextprev-btn" data-page="turn-3">
                            <i class='bx bx-chevron-right'></i>
                        </span>
                    </div>
                    <!-- page 6 (contact me) -->
                    <div class="page-back">
                        <h1 class="title">Contact Me</h1>
                        <div class="contact-box">
                            <form action="#">
                                <input type="text" class="field" placeholder="Full Name" required>
                                <input type="email" class="field" placeholder="Email Address" required>
                                <textarea name="" id="" cols="10" rows="5" class="field" placeholder="Your Message" required></textarea>
                                <div class="btn-box">
                                    <input type="submit" class="btn" value="Send Message">
                                </div>
                            </form>
                            <!-- Status message will appear here -->
                            <div id="form-status" class="form-status"></div>
                        </div>
                        <span class="number-page">6</span>
                        <!-- back-button -->
                        <span class="nextprev-btn back" data-page="turn-3">
                            <i class='bx bx-chevron-left' ></i>
                        </span>
                        <a href="#" class="back-profile">
                            <p>Profile</p>
                            <i class='bx bxs-user'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <script src="script.js"></script>
        <script src="contact.js"></script>
        <script>
            const isDarkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;

            if (isDarkMode) {
                document.body.classList.add('force-light');
            }
        </script>
    </body>
</html>
