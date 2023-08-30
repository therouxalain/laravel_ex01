@extends('master')
@section('title', 'Exemples')
@section('content')
 
 <!-- Exemples Section-->
 <section class="py-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Exemples de questions <br>posées récemment</span></h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            <!-- Project Card 1-->
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">Monsieur Bigras <br>de Rosemère</h2>
                                            <p>... nous demande : <b> "Si l'on dit que plus il y a de fromage gruyère, plus il y a de trous, c'est donc que plus il y a de trous, moins il y a de fromage. Ainsi peut-on dire que <u>plus</u> il y a de fromage, <u>moins</u> il y a de fromage?" </b><br> <br>■ Quelle question insupportable! Ce paradoxe joue sur les notions de logique et de causalité de manière trompeuse. Vous recevrez une mise en demeure de notre part sous peu.</p>
                                        </div>
                                        <img class="img-fluid" width="250" hspace="20"  src="assets/fromage.jpg" alt="..." />
                                        <!-- Source image fromage: https://www.26switzerland.ch/wp-content/uploads/2020/01/Fromages-suisses-01-1310x1311.jpg -->
                                    </div>
                                </div>
                            </div>
                            <!-- Project Card 2-->
                            <div class="card overflow-hidden shadow rounded-4 border-0">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">Josiane Chiasson <br>de Rivière-des-Prairies</h2>
                                            <p>... nous demande : <b> "Quelle heure est-il?" </b><br> <br>■ La réponse est que l'heure diffèrerait entre le moment de sa question et celui de notre réponse. <br>■ Voilà la force d'une intelligence artificielle qui refuse de se plier à des demandes qui ne font pas sens.</p>
                                        </div>
                                        <img class="img-fluid" width="250" hspace="20" src="assets/horloge.webp" alt="..." />
                                        <!-- source image horloge https://thumbs.dreamstime.com/b/visage-d-horloge-9587762.jpg -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Call to action section-->
            <section class="py-5 bg-gradient-primary-to-secondary text-white">
                <div class="container px-5 my-5">
                    <div class="text-center">
                        <h2 class="display-4 fw-bolder mb-4">CheapGPT quène all sceau <br>spiquine ingliche!</h2>
                        <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="questions">Traille euh keschune naou! »</a>
                    </div>
                </div>
            </section>

            @endsection