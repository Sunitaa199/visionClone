<div class="career-slide">
    <?php include 'header.php'; ?>
    <div class="image-container">
        <img src="img-vidio/img/career.avif" alt="slider1" class="d-block">
        <div class="text-overlay">
            <p class="career-title fw ">Careers at Vision Mechatronics</p>
            <p class="para fw">Let's <span style="color:#0098da;">Work</span> Together and <span
                    style="color:#0098da;">Explore</span> Opportunities</p>
            <a href="#"><button class="btn btn-Danger ">KNOW MORE..</button></a>
        </div>
    </div>
</div>

<div class="image-content mb-4">
    <div class="custom-container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-4">
                <div class="img1 text-center">
                    <img src="img-vidio/img/img1content.jpg" alt="Opportunities for students"
                        style="border-radius:55px; height:470px;">
                    <div class="imgtxt-overlay">
                        <h3>Opportunities For students</h3>
                        <p>Unlocking the potential of these who area empowering the future, let us be a part of your
                            growth.</p>
                        <a><button class="btn btn-primary">Apply for Internship</button></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-4">
                <div class="img2">
                    <img src="img-vidio/img/img2content.jpg" alt="Opportunities for professionals"
                        style="border-radius:55px; height:470px;">
                    <div class="imgtxt-overlay">
                        <h3>Opportunities For Professionals</h3>
                        <p>Step to explore the range career opportunities and take your career the next level. Resume
                            journey with us.</p>
                        <a><button class="btn btn-primary">Apply for Current Openings</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const reveals = document.querySelectorAll('.reveal');

        function checkReveal() {
            const windowHeight = window.innerHeight;

            reveals.forEach((reveal) => {
                const elementTop = reveal.getBoundingClientRect().top;
                const elementBottom = reveal.getBoundingClientRect().bottom;

                if (elementTop < windowHeight && elementBottom > 0) {
                    reveal.classList.add('active');
                } else {
                    reveal.classList.remove('active');
                }
            });
        }

        window.addEventListener('scroll', checkReveal);
        checkReveal();
    });
</script>



<div class="content mb-5">
    <div class="container">
        <div class="col-xl-12 col-lg-12 col-sm-12 col-md-12">
            <h1 class="fw" style="font-family:none;">
                <span style="color:#0098da;">WHY</span> Vision Mechatronics?
            </h1><br>
            <p class=" conpara">We always welcome a new talent to the
                Vision Mechatronics family.</p><br>

            <section class="reveal active">
                <p style="text-align:justify;">At <a href="#">Vision Mechatronics</a>, we are proud to function in a
                    work environment that thrives on cultural diversity and mutual trust. Our focus lies on our people,
                    who are our most priceless asset.</p>
                <p style="text-align:justify;">We honour and incentivize Hard work and Dedication to promote a platform
                    for the crazy ones, the misfits, the rebels, the troublemakers, the round pegs in the square holes
                </p>
                <p style="text-align:justify;">Embracing with our core values into action, Vision Mechatronics fosters a
                    diverse work environment characterized by respect and dignity for people and prohibits unlawful
                    discrimination or harassment. We are hiring people looking for Internships and Full-time roles
                    (Including Students and Freshers). Send us your CV<br> We are looking forward to knowing you!</p>
            </section>
            <section class="reveal">
                <h2 style="font-family:none;" class="fw"> <span style="color:#0098da;">Mission</span> WOW!</h2>
                <p style="text-align:justify;">At Vision Mechatronics we offer a special incentive for all employees
                    based on the WOW! mission. In the mission WOW! we look for employees to create, design or propose
                    something that is out of the box,new, attractive and can be classified as WOW!</p>
            </section>
            <section class="reveal">
                <h2 style="font-family:none;" class="fw"> <span style="color:#0098da;">WE</span> OFFER!</h2>
                <ol style="list-style-type:disc;">
                    <li>An opportunity to work with the <a href="productsandservices">leading industry</a> experts </li>
                    <li>All-inclusive on-job learning experience</li>
                    <li>Flexible working environment </li>
                    <li>Additional incentives for skill sets and talent that deliver work quality beyond standardised
                        job descriptions</li>
                </ol>
            </section>
        </div>
    </div>
</div>

<!-- Scroll to Top Button -->
<button id="scrollToTopBtn" class="scroll-to-top">
    ↑
</button>

<script>
const scrollToTopBtn = document.getElementById("scrollToTopBtn");

window.onscroll = function () {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        scrollToTopBtn.style.display = "flex"; 
    } else {
        scrollToTopBtn.style.display = "none"; 
    }
};

scrollToTopBtn.onclick = function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth", 
    });
};
</script>

<?php include 'footer.php'; ?>