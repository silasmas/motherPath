@extends('template.template',['titre'=>__('info.titre.home')])


@section('content')
    <div class="banner">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/bg8.jpg" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-star text-white">
                                    <h2>
                                        MotherPatt</h2>
                                    <h1>La connaissance Psychologique</h1>
                                    <p>Des sessions d’écoute, d’échanges pour examiner la situation du client et puis
                                        établir un calendrier approprié par rapport aux diagnostiques.</p>
                                    <a href="#" class="btn btn-1">Réservation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/bg2.jpg" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-star text-white">
                                    <h2>MotherPatt</h2>
                                    <h1>La consultation</h1>
                                    <p>Des sessions d’écoute, d’échanges pour examiner la situation du client et puis
                                        établir un calendrier approprié par rapport aux diagnostiques.</p>
                                    <a href="#" class="btn btn-1">Réservation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    {{-- <div class="block_1">
                <div class="container">
                  <div class="row g-3 g-sm-5 g-lg-3">
                    <div class="col-lg-4 col-sm-6 col-12">
                      <div class="card">
                        <div class="text-star">
                          <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                              <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                              <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                          </div>
                          <h4>RDC (Kinshasa & Matadi)</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel molestie nisl. Duis ac mi leo.</p>
                      </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                      <div class="card">
                        <div class="text-star">
                          <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                              <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                              <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                          </div>
                          <h4>RC (Brazzavilleà</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel molestie nisl. Duis ac mi leo.</p>
                      </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                      <div class="card">
                        <div class="text-star">
                          <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                              <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                              <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                          </div>
                          <h4>USA (New york)</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel molestie nisl. Duis ac mi leo.</p>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div> --}}
    <div class="about">
        <div class="container">
            <div class="row g-3 g-sm-5 g-lg-0 align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <div class="card">
                        <img src="images/team.jpg" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <h2>A propos de Moi</h2>
                    <h1>Qui est Madame Patricia ?</h1>
                    <p>Madame Patricia est licenciée, formée en Psychothérapie et Counselling. Elle adhère dans
                        l’association des Psycho-thérapeutes Britaniques. Elle fait aussi partie de l’association des
                        thérapeutes Chretiens en Angleterre 󠁧󠁢(Éthiques). </p>
                    <p>Autres études faites et expériences sous-entendu sans oublier que c’est aussi une ministre par un
                        appel divin. </p>
                    <a href="#" class="btn">Savoir plus</a>
                </div>
            </div>
        </div>
    </div>
    <div class="service">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <h2>Services</h2>
                        <h1>Patt Thérapie tire de ses expériences et sa spécialité pour offrir</h1>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-3">
                    <div class="card">
                        <div class="text-center">
                            <div class="icon">
                                <i class="fas fa-assistive-listening-systems"></i>
                            </div>
                            <h4> La Consultation</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, aspernatur?</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="text-center">
                            <div class="icon">
                                <i class="fas fa-assistive-listening-systems"></i>
                            </div>
                            <h4> La Consultation</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, aspernatur?</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="text-center">
                            <div class="icon">
                                <i class="fas fa-assistive-listening-systems"></i>
                            </div>
                            <h4> La Consultation</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, aspernatur?</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="text-center">
                            <div class="icon">
                                <i class="fas fa-assistive-listening-systems"></i>
                            </div>
                            <h4> La Consultation</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, aspernatur?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block_2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-star">
                        <h2>Our Benefits</h2>
                        <h1>Few Reasons Why You Shoul Choose Us ?</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quis atque nihil quibusdam
                            omnis blanditiis expedita necessitatibus tenetur, dolore ex.</p>
                        <ul>
                            <li>
                                <i class="fas fa-check"></i>
                                <h4>Reason01</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, aperiam?</p>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <h4>Reason01</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, aperiam?</p>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <h4>Reason01</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, aperiam?</p>
                            </li>
                        </ul>
                        <a href="#" class="btn">Savoir plus</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg">
                        <div class="block-badge">
                            <span>20</span>
                            <span>Ans</span>
                            <span>Expérience</span>
                        </div>
                        <img src="images/img3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="block_3">
        <div class="container">
            <div class="text-center">
                <h2>Notre équipe</h2>
                <h1>Strong Team Realy To Serv You</h1>
            </div>
            <div id="slider-carousel" class="owl-carousel">
                <div class="item">
                    <a href="detail.html">
                        <div class="card">
                            <div class="card-img">
                                <img src="images/team.jpg" alt="">
                            </div>
                            <div class="text-center">
                                <h5>Pedrien Kinkani</h5>
                                <span>Function</span>
                                <br>
                                <span class="readMore">Voir En Detail</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="detail.html">
                        <div class="card">
                            <div class="card-img">
                                <img src="images/team1.jpg" alt="">
                            </div>
                            <div class="text-center">
                                <h5>Pedrien Kinkani</h5>
                                <span>Function</span>
                                <br>
                                <span class="readMore">Voir En Detail</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="detail.html">
                        <div class="card">
                            <div class="card-img">
                                <img src="images/team2.jpg" alt="">
                            </div>
                            <div class="text-center">
                                <h5>Pedrien Kinkani</h5>
                                <span>Function</span>
                                <br>
                                <span class="readMore">Voir En Detail</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="detail.html">
                        <div class="card">
                            <div class="card-img">
                                <img src="images/team.jpg" alt="">
                            </div>
                            <div class="text-center">
                                <h5>Pedrien Kinkani</h5>
                                <span>Function</span>
                                <br>
                                <span class="readMore">Voir En Detail</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="detail.html">
                        <div class="card">
                            <div class="card-img">
                                <img src="images/team.jpg" alt="">
                            </div>
                            <div class="text-center">
                                <h5>Pedrien Kinkani</h5>
                                <span>Function</span>
                                <br>
                                <span class="readMore">Voir En Detail</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <div class="block_4">
        <div class="container">
            <div id="slider-carousel1" class="owl-carousel">
                <div class="item">
                    <div class="card">
                        <div class="card-img">
                            <img src="images/PLA logo.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <div class="card-img">
                            <img src="images/PLA logo.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <div class="card-img">
                            <img src="images/PLA logo.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <div class="card-img">
                            <img src="images/PLA logo.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
