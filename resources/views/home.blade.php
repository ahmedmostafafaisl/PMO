@extends('layouts.app')
@section('section')
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">About</h2>
                <!-- <h3 class="section-subheading text-muted">Make it Real With PMO.</h3> -->
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="{{ asset('assets/assets/img/about/1.jpg') }}"
                            alt="..." />
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h3>Make it Real With PMO</h3>
                            <h4 class="subheading">Post a Job</h4>
                            <p class="text-muted">
                                It’s easy to post a job. Simply fill in a title, description
                                and upload the necessary files and competitive bids come
                                within minutes.
                            </p>
                        </div>
                        <div class="timeline-body">
                            <h4 class="subheading">Choose Suitable Company</h4>
                            <p class="text-muted">
                                No job is too big or too small. We've got companies for jobs
                                of any size or budget. No job is too complex. We can get it
                                done!
                            </p>
                        </div>
                        <div class="timeline-body">
                            <h4 class="subheading">We’re here to help</h4>
                            <p class="text-muted">
                                Our talented team can help you find the best company for the
                                job and our engineers can even manage the project for you.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="{{ asset('assets/assets/img/about/2.jpg') }}"
                            alt="..." />
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h2>What's Great About It?</h2>
                            <h3 class="subheading">Browse Profiles</h3>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                Find professionals you can trust by browsing their samples of
                                previous work and reading their profile reviews.
                            </p>
                        </div>
                        <div class="timeline-heading">
                            <h3>Fast bids</h3>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                Receive obligation free quotes from Companies fast and ensure
                                you complete your project with best prices. 80% of projects
                                get bid on within few hours.
                            </p>
                        </div>
                        <div class="timeline-heading">
                            <h3>Track progress</h3>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                Keep up-to-date and on-the-go. Always know the status of your
                                project from anywhere in the world.
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Team-->

    <!-- Clients-->
    <h2 class="section-heading text-uppercase" style="text-align: center">
        Our Clients
    </h2>
    <div class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                            src="{{ 'assets/assets/img/logos/microsoft.svg' }}" alt="..."
                            aria-label="Microsoft Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                            src="{{ 'assets/assets/img/logos/google.svg' }}" alt="..."
                            aria-label="Google Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                            src="{{ 'assets/assets/img/logos/facebook.svg' }}" alt="..."
                            aria-label="Facebook Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                            src="{{ 'assets/assets/img/logos/ibm.svg' }}" alt="..." aria-label="IBM Logo" /></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact-->
    <section class="page-section" id="contact"></section>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
@endsection
