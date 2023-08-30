@extends('master')
@section('title', '●●● Ma réponse ●●●')
@section('content')

<!-- Page content-->
<section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><img src="assets/robot_lireAP.png" alt="..." /></div>
                            @isset($data)
                            <h1 class="fw-bolder">Oh! <b>{{$data->name ?? ''}} {{$data->famille ?? ''}}</b>...<br>Quelle bonne question !</h1>
                            <p class="lead fw-normal text-muted mb-0"><u>Vous demandez:</u> <br> «{{$data->question ?? ''}}» </p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                                      Cela dit, le temps me manque pour y répondre malheureusement. <br><br><b>Je ne suis qu'un robot, ne l'oublions pas! </b><br>Et puis, il y a la pénurie de personnel, partout-partout. <br><br>

                            <p style="color:red;">Mais j'ADORE votre question, <b>{{$data->name ?? ''}}</b>... vrai-ment !!!!</p><br>
                            Au plaisir!<br><br>

                            <small>(Vous recevrez ma facture de 760$ par courriel à <b> {{$data->courriel ?? ''}}</b>)</small><br><br>

                            @endisset
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- * * SB Forms Contact Form * *-->
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- This form is pre-integrated with SB Forms.-->
                                <!-- To make this form functional, sign up at-->
                                <!-- https://startbootstrap.com/solution/contact-forms-->
                                <!-- to get an API token!-->
                                <br><br><br><br>
                                <img  src="assets/gameover.png" width="200" alt="..." />
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @endsection