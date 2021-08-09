<style>
.imgceo {
    border-radius: 50%;
}

.card-img-top {
    width: 100%;
    height: 18vw;
    /* height: max-content; */
    object-fit: scale-down;
}

.slick-track{
    display: flex;
    justify-content:center;
}
</style>
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>About</h2>
            <ol>
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li>About</li>
            </ol>
        </div>

    </div>
</section>


<section id="team" class="team" data-aos="fade-up">
    <div class="container">

        <div class="section-title aos-init aos-animate" data-aos="fade">
            <h2 class="text-uppercase">Get To Know About Us</h2>
        </div>

        <!-- Ceo Line -->
        <div class="row dgtCeo">

            <div id="teamCEO"></div>

        </div>
        <!-- End Ceo Line -->

        <div id="teamApi" class="row dgtTeam">
            <!-- <div id="teamApi"></div> -->
        </div>

        <!-- Video Line -->
        <div class="row dgtVideo mt-2">

        <div class="section-title aos-init aos-animate" data-aos="fade-up">
            <h2>Our <strong>History</strong></h2>
        </div>

            <div class="col-lg-12 aos-init">
                <div class="member aos-init aos-animate d-flex" data-aos="fade-up">
                    <div class="member-img align-self-center">
                        <h2 class="text-center text-uppercase pt-2 font-monospace">Dian Global Tech Is</h2>
                        <div class="container-fluid mt-4">
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <iframe class="w-100 vh-100" src="https://www.youtube.com/embed/m2dCMOed7ww"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen>
                                    </iframe>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-12 mt-2">
                                    <p class="text-center text-wrap font-monospace fs-5">
                                        Dian Global Tech is an INFORMATION AND TECHNOLOGY (IT)
                                        consulting services company established in October 2009
                                        by experienced practitioners in their respective fields.
                                    </p>
                                    <p class="text-center text-wrap font-monospace fs-5">
                                        We start our journey in SISTEM INFORMASI MANAJEMEN SEKOLAH (SIMS) and now,
                                        we create custom made apps based on our partners and clients demands.
                                        With a wide network, professionalism and commitment, we are able to consistently
                                        provide high quality services, and CUSTOMER SATISFACTION IS EVERYTHING to us
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- End Video Line -->

    </div>
</section>

<section id="about-us" class="about-us shadow-sm">
    <div class="container aos-init aos-animate" data-aos="fade-up">
        
        <div class="section-title aos-init aos-animate" data-aos="fade-up">
            <h2>Our <strong>Mission</strong></h2>
        </div>

        <div class="row content">
            <div class="col-lg-6 aos-init aos-animate" data-aos="fade-right">
            <h3>Our Goals</h3>
            <p>We provide most valuable information</p>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 aos-init aos-animate" data-aos="fade-left">
            <h4><i class="bi bi-briefcase p-2"></i><strong>Mission</strong></h4>
            <ul>
                <li>
                    <p class="fst-italic">
                    Provide the best Information and Technology services to each of our partners and clients who cooperate with us.
                    </p>
                </li>
            </ul>
            <h4><i class="bi bi-bullseye p-2"></i><strong>Vision</strong></h4>
            <ul>
                <li>
                    <p class="fst-italic">
                    Become the leading consultant in Information and Technology field by always providing Innovative solutions to each of our partners and clients, and to compete on a national and international scale.
                    </p>
                </li>
            </ul>
            </div>
        </div>

    </div>
</section>

<!-- ======= About Us Section ======= -->
<section id="benefits" class="about-us">
    <div class="container" data-aos="fade-up">

        <div class="section-title aos-init aos-animate" data-aos="fade-up">
            <h2>Cooperation Benefits</h2>
        </div>
        <!-- <h2 class="text-center text-capitalize my-2 text-uppercas">Cooperation Benefits</h2> -->
        <!-- Cooperation Line -->
        <div class="row services benefits">
            <!-- <div class="section benefits"> -->
            <div class="col-lg-3 col-md-4 d-flex justify-content-evenly" data-aos="zoom-in" data-aos-delay="100">
                <div class="card" style="width: 10rem; border: none;">
                    <img src="<?php echo base_url('/uploads/aboutus/Partner_Oriented@4x-8.png'); ?>" class="img-fluid"
                        alt="Oriented">
                    <div class="card-body">
                        <p class="card-text">
                        <h6 class="text-center">Partner & Client Oriented</h6>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 d-flex justify-content-evenly" data-aos="zoom-in" data-aos-delay="200">
                <div class="card" style="width: 10rem; border: none;">
                    <img src="<?php echo base_url('/uploads/aboutus/Eficient@4x-8.png'); ?>" class="img-fluid"
                        alt="Solution">
                    <div class="card-body">
                        <p class="card-text">
                        <h6 class="text-center">Effective & Efficient Solution</h6>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 d-flex justify-content-evenly" data-aos="zoom-in" data-aos-delay="300">
                <div class="card" style="width: 10rem; border: none;">
                    <img src="<?php echo base_url('/uploads/aboutus/Innovation@4x-8.png'); ?>" class="img-fluid"
                        alt="Innovative">
                    <div class="card-body">
                        <p class="card-text">
                        <h6 class="text-center">Innovative</h6>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 d-flex justify-content-evenly" data-aos="zoom-in" data-aos-delay="400">
                <div class="card" style="width: 10rem; border: none;">
                    <img src="<?php echo base_url('/uploads/aboutus/Service_Commitment@4x-8.png'); ?>" class="img-fluid"
                        alt="Commitment">
                    <div class="card-body">
                        <p class="card-text">
                        <h6 class="text-center">Service Commitment</h6>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 d-flex justify-content-evenly" data-aos="zoom-in" data-aos-delay="500">
                <div class="card" style="width: 10rem; border: none;">
                    <img src="<?php echo base_url('/uploads/aboutus/Professional_Quality@4x-8.png'); ?>" class="img-fluid" 
                        alt="Quality">
                    <div class="card-body">
                        <p class="card-text">
                        <h6 class="text-center">Professional Quality</h6>
                        </p>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>
        <!-- End Cooperation Line -->
        
    </div>
</section>
<!-- End About Us Section -->