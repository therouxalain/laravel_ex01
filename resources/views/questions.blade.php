@extends('master')
@section('title', '■■■ Votre question ■■■')
@section('content')

<!-- Page content-->
<section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><img src="assets/robot.gif" alt="..." /></div>
                            <h1 class="fw-bolder">Que voulez-vous savoir?</h1>
                            <p class="lead fw-normal text-muted mb-0">Trouvons ensemble la réponse!</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- * * SB Forms Contact Form * *-->
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- This form is pre-integrated with SB Forms.-->
                                <!-- To make this form functional, sign up at-->
                                <!-- https://startbootstrap.com/solution/contact-forms-->
                                <!-- to get an API token!-->

                                <!-- prise des questions -->
                                <form method="post" id="contactForm" data-sb-form-api-token="API_TOKEN">
                                @csrf
                                    <!-- Name input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="name" id="name" type="text" placeholder="Entrez votre prénom" data-sb-validations="required" />
                                        <label for="name">Votre prénom</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="famille" id="famille" type="text" placeholder="Entrez votre nom de famille" data-sb-validations="required" />
                                        <label for="name">Votre nom de famille</label>
                                    </div>

                                    <!-- Courriel-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="courriel" id="courriel" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                        <label for="courriel">Courriel</label>
                                    </div>

                                    <!-- Message input-->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" name="question" id="question" type="text" placeholder="Entrez donc votre question" style="height: 10rem" data-sb-validations="required"></textarea>
                                        <label for="message">Entrez donc votre question</label>
                                    </div>
                                    <!-- Submit success message-->
                                    <!---->
                                    <!-- This is what your users will see when the form-->
                                    <!-- has successfully submitted-->
                                    <div class="d-none" id="submitSuccessMessage">
                                        <div class="text-center mb-3">
                                            <div class="fw-bolder">Form submission successful!</div>
                                            To activate this form, sign up at
                                            <br />
                                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                        </div>
                                    </div>
                                    <!-- Submit error message-->
                                    <!---->
                                    <!-- This is what your users will see when there is-->
                                    <!-- an error submitting the form-->
                                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                    <!-- Submit Button-->
                                    <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Soumettre à CheapGPT</button></div>
                                </form>
                       
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @endsection