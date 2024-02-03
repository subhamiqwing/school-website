<?php require_once  "./includes/header.php" ?>

<div class="border-bottom d-flex">
    <div>
        <div class="py-2 px-5 marquee-heading text-white">Updates</div>
    </div>
    <div class="px-1" style="overflow:hidden">
        <div id="scrollContent" class="text-secondary">
            <div class="fs-5">Lorem Ipsum is simply dummy text. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages. It is a long
                established fact that a reader will be distracted by the readable content of a page when looking at its layout</div>
        </div>
    </div>
</div>

<div class="container-fluid position relative p-0">

    <div class="btns-container position-absolute">
        <div class="prev sider-btns position-absolute center">
            <i class="fa-solid fa-angle-left"></i>
        </div>
        <div class="next sider-btns position-absolute center">
            <i class="fa-solid fa-angle-right"></i>
        </div>
    </div>

    <div class="slider position-relative " style="z-index: -10;">
        <div class="slides slide-1">
            <img src="./includes/images/banner-img-1.jpeg" class="img-fluid w-100 h-100" alt="">
        </div>
        <div class="slides slide-2">
            <img src="./includes/images/banner-img-2.jpeg" class="img-fluid w-100 h-100" alt="">
        </div>
        <div class="slides slide-3">
            <img src="./includes/images/banner-img-3.jpeg" class="img-fluid w-100 h-100" alt="">
        </div>
        <div class="slides slide-4">
            <img src="./includes/images/banner-img-4.jpeg" class="img-fluid w-100 h-100" alt="">
        </div>
        <div class="slides slide-5">
            <img src="./includes/images/banner-img-5.jpeg" class="img-fluid w-100 h-100" alt="">
        </div>
    </div>
</div>

<!-- Section From Principals Desk -->
<section class="mt-3">
    <div class="container-fluid">
        <div class="container">
            <!-- Section Heading -->
            <div class="section-heading py-5">
                <h2 class="fw-boldest display-3 text-center ">From Principal's Desk</h2>
            </div>
            <!-- Section COntent -->
            <section class="section section--border w-100 h-100">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <img src="./includes/images/principal-img.jpeg" class="img-fluid w-100 h-100" alt="">
                    </div>
                    <div class="col-lg-6">

                        <figure>
                            <h2 class="section__title">
                                From Principal Desk
                            </h2>
                            <blockquote class="blockquote">
                                <p>Greetings to all and welcome to this institution. As principal of this prestigious institution I feel it's my foremost duty to lead my team to ignite the young minds with zeal and enthusiasm and an insatiable quest for knowledge. In 21st century the students need to develop special skills, critical thinking and effective oral and written communication. Our aim is to make students apt in these skills and become truly global citizens. We are working here to achieve this goal. The workshops and activities are organised to give the students ample opportunity to showcase their talents, discovering themselves, knowing the weakness and strengths. We appreciate and reward them for their achievements. Children here are encouraged to grow with their uniqueness which is appreciated by one and all.</p>
                            </blockquote>
                            <figcaption class="blockquote-footer fs-4 text-end ">
                                Principal, <cite title="Source Title">PM Shri Govt. Girls Model Sen. Sec. School</cite>
                            </figcaption>
                        </figure>
                    </div>s
                </div>
            </section>

        </div>
    </div>
    </div>
</section>

<!-- Counter -->
<section class="container-fluid">
    <div class="container">
        <!-- Section Heading -->
        <div class="section-heading py-5">
            <h2 class="fw-boldest display-3 text-center ">Our Stats</h2>
        </div>

        <div class="container">

            <div id="counter" class="counter">
                <div class="main_counter_area">
                    <div class="overlay py-3">
                        <div class="container">
                            <div class="row">
                                <div class=" row main_counter_content text-center white-text ">
                                    <div class="col-md-3">
                                        <div class="single_counter p-y-2 m-t-1">
                                            <i class="ph ph-student display-1 fw-bold"></i>
                                            <h2 class="statistic-counter text-white">1000</h2>
                                            <span></span>
                                            <p class="text-white">Students</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="single_counter p-y-2 m-t-1">
                                            <i class="ph ph-chalkboard-teacher display-1 fw-bold"></i>
                                            <h2 class="statistic-counter text-white">40</h2>
                                            <p class="text-white">Staff</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="single_counter p-y-2 m-t-1">
                                            <i class="ph ph-timer display-1 fw-bold"></i>
                                            <h2 class="statistic-counter text-white">20</h2>
                                            <p class="text-white">Years </p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="single_counter p-y-2 m-t-1">
                                            <i class="ph ph-graduation-cap display-1 fw-bold"></i>
                                            <h2 class="statistic-counter text-white">12</h2>
                                            <p class="text-white">Classes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: Quick Links -->
<section class="mt-3">
    <div class="container-fluid">
        <div class="container">
            <!-- Section Heading -->
            <div class="section-heading py-5">
                <h2 class="fw-boldest display-3 text-center ">Quick Navigation</h2>
            </div>
            <!-- Section Content -->
            <!-- Vertical tabs -->
            <div class="container-fluid py-5">
                <div class="container-lg">
                    <div class="v-tabs-cont d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link v-pills active text-start" id="v-pills-imp-tab" data-bs-toggle="pill" data-bs-target="#v-pills-imp" type="button" role="tab" aria-controls="v-pills-imp" aria-selected="true">Important Notice</button>

                            <button class="nav-link text-start v-pills" id="v-pills-events-tab" data-bs-toggle="pill" data-bs-target="#v-pills-events" type="button" role="tab" aria-controls="v-pills v-pills-events" aria-selected="false">Upcoming Events</button>

                            <!-- <button class="nav-link text-start v-pills" id="v-pills-achievements-tab" data-bs-toggle="pill" data-bs-target="#v-pills-achievements" type="button" role="tab" aria-controls="v-pills v-pills-achievements" aria-selected="false">Achievements</button>

                            <button class="nav-link text-start v-pills" id="v-pills-downloads-tab" data-bs-toggle="pill" data-bs-target="#v-pills-downloads" type="button" role="tab" aria-controls="v-pills v-pills-downloads" aria-selected="false">Downloads</button>

                            <button class="nav-link text-start v-pills" id="v-pills-activities-tab" data-bs-toggle="pill" data-bs-target="#v-pills-activities" type="button" role="tab" aria-controls="v-pills v-pills-activities" aria-selected="false">Activities</button>

                            <button class="nav-link text-start v-pills" id="v-pills-news-tab" data-bs-toggle="pill" data-bs-target="#v-pills-news" type="button" role="tab" aria-controls="v-pills v-pills-news" aria-selected="false">Sports/Cultural News</button>

                            <button class="nav-link text-start v-pills" id="v-pills-other-tab" data-bs-toggle="pill" data-bs-target="#v-pills-other" type="button" role="tab" aria-controls="v-pills v-pills-other" aria-selected="false">Other Activities</button> -->
                        </div>
                        <div class="tab-content w-100" id="v-pills-tabContent">
                            <div class="tab-pane position-relative fade show active" id="v-pills-imp" role="tabpanel" aria-labelledby="v-pills-imp-tab" tabindex="0" style="z-index: -10;">
                                <ul class="list-group w-100">
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">SPORTS DAY 2023</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">ENTRY LEVEL ADMISSIONS</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">WORKSHOP ON SEXUAL HARASMENT</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">ZERO PERCENT WASTE SCHOOLS PROGRAMME</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">SELECTION FOR NATIONAL IN KALA UTSAV</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">VISIT FROM MINISTRY EDUCATION</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">MEHANDI COMPETITION ORGANISED</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">DISASTER MANAGEMENT MOCK DRILL</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">SCHOOL TIMING</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="v-pills-events" role="tabpanel" aria-labelledby="v-pills-events-tab" tabindex="0">
                                <ul class="list-group list-group-flush w-100">
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">Lecture Series -Wisdom Unplugged Top Expert, Endless Inspiration</a></li>
                                </ul>
                            </div>
                            <!-- <div class="tab-pane fade" id="v-pills-achievements" role="tabpanel" aria-labelledby="v-pills-achievements-tab" tabindex="0">
                                <ul class="list-group list-group-flush w-100">
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">JOINING LETTER : NATIONAL DEFENCE ACADEMY, KHADAKWASLA</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">NATIONAL TECHNO CULTURAL FEST PARIVARTAN- 2023</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">SANSAD BHARAT DARSHAN</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">Mr Karan Thakur Student of Our College has been awarded by Rajya Puraskay for his commendable job in Scouts and Guide.</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="v-pills-downloads" role="tabpanel" aria-labelledby="v-pills-downloads-tab" tabindex="0">
                                <ul class="list-group list-group-flush w-100">
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">OSCA Committee</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">Staff List</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">Leave form</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">Prospectus Information</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">Naac Report</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="v-pills-activities" role="tabpanel" aria-labelledby="v-pills-activities-tab" tabindex="0">
                                <ul class="list-group list-group-flush w-100">
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">NSS Report day wise 1st day 2nd day 3rd day 4th day 5th day</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">One Day Workshop on Quality Accreditation with NAAC and Institutional Preparedness</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">Communal Harmony Campaign Week & Flag Day</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">Final Schedule Program of National Seminar on Life and Contributions of Dr. BR Ambedkar</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">Principal Conference at DHE Shimla Under Secretary Higher education Shimla</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">Report on Principals' Conference</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
                                <ul class="list-group list-group-flush w-100">
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">Inter College Chess Championship</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">Report on District Youth Festival</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">HPU Inter-College Badminton-Women Tournament Report</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">Report on HP-University Youth Festival Group I Championship</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">Report on HP-University Youth Festival Group II</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">Report on HP-University Youth Festival Group IV</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">Report on Inter College Basketball Tournament</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">Report on Shooting Championship</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="v-pills-news" role="tabpanel" aria-labelledby="v-pills-activities-tab" tabindex="0">
                                <ul class="list-group list-group-flush w-100">
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">Lecture Series on Indian Literary Theory</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">Report on District Youth Festival</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">College Report</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">Report on ROAD SAFETY AWARENESS LECTURE</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">AWARENESS CAMPAIGN FOR RECRUITMENT IN RBI</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">VERMICOMPOST Report</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">FAMILIARIZATION EXERCISE REPORT</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">Blood Donation Camp Report</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="v-pills-other" role="tabpanel" aria-labelledby="v-pills-activities-tab" tabindex="0">
                                <ul class="list-group list-group-flush w-100">
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">Lecture Series on Indian Literary Theory</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">Report on District Youth Festival</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">College Report</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">Report on ROAD SAFETY AWARENESS LECTURE</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">AWARENESS CAMPAIGN FOR RECRUITMENT IN RBI</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">VERMICOMPOST Report</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">FAMILIARIZATION EXERCISE REPORT</a></li>
                                    <li class="list-group-item w-100"><a href="#" class="v-tab-links fs-4">Blood Donation Camp Report</a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<?php require_once  "./includes/footer.php" ?>