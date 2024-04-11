@extends("front.base-front")

@section("title")
    @parent
    
@stop



@section("content")
@parent -
<img src="{{asset('/images/ImageFondCoeurVert 2.png')}}" height="500" width="100%" >
<div class="d-flex flex-nowrap align-self-center mt-2 ">
        <div class="d-flex justify-content-around bg-primary w-100 "> 
            <div class="flex-item align-self-center ">           
                <a class="  mt-auto text-light  text-decoration-none">NOS CHIFFRES</a>
                <a class="fw-bold  text-light text-decoration-none">MARQUANTS :</a>
            </div> 
            <div class="flex-item align-self-center " >
            <i class="bi bi-person-fill-add fa-5x fs-1 " style="color:#ffffff"></i>
                <a class="text-black font-weight-bold text-decoration-none  fs-3">800</a>
                <a class="text-decoration-none text-light ">  sensibilisés</a>
            </div>
            <div class="flex-item align-self-center  ">
                <i class="bi bi-person-fill-add fs-1 " style="color:#ffffff"></i>
                <a class="text-black font-weight-bold text-decoration-none  fs-3"> 640 </a>
                <a class="text-decoration-none text-light"> inscrits</a>
            </div>
        </div>  
    </div>
    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="container mt-5 mb-3">
                <p class="text-primary text-uppercase fw-bold">la  <span class="text-dark text-uppercase fw-bold">leucémie</span> c'est quoi ?</p>
            <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Qu'est-ce que la Leucémie ?
                </button>
            </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        La leucémie, souvent perçue comme une maladie impitoyable, est en réalité un groupe de cancers affectant le sang et la moelle osseuse, qui est le berceau de la production des cellules sanguines. Cette maladie se caractérise par une prolifération anormale et incontrôlée de leucocytes, ou globules blancs, qui sont normalement des composants cruciaux de notre système immunitaire.<br><br>

                        Le processus de développement de la leucémie commence dans la moelle osseuse, où les cellules souches hématopoïétiques se transforment en différents types de cellules sanguines. Dans un organisme sain, ce processus est régulé et équilibré. Cependant, dans le cas de la leucémie, des mutations génétiques surviennent dans ces cellules souches, entraînant une production excessive et anarchique de leucocytes immatures et dysfonctionnels. Ces cellules leucémiques envahissent progressivement le sang, réduisant la place et les ressources pour les cellules sanguines saines, comme les globules rouges et les plaquettes. Cette invasion perturbe les fonctions vitales du sang, comme le transport de l'oxygène, la coagulation et la lutte contre les infections.<br><br>

                        Il existe plusieurs types de leucémie, chacun se distinguant par son évolution et son traitement. Les leucémies aiguës, dont le développement est rapide et agressif, nécessitent une intervention médicale immédiate. Parmi elles, la leucémie lymphoblastique aiguë, fréquente chez les enfants, et la leucémie myéloïde aiguë, plus courante chez les adultes, sont les plus connues. À l'opposé, les leucémies chroniques se développent lentement, parfois sur plusieurs années, et se manifestent souvent chez les adultes. Parmi celles-ci, la leucémie lymphoïde chronique et la leucémie myéloïde chronique sont les plus répandues.<br><br>

                        Le mystère entourant l'origine exacte de ces mutations génétiques demeure. Les facteurs de risque identifiés comprennent certains antécédents génétiques, une exposition à des radiations ou à des substances chimiques toxiques, et des traitements antérieurs par chimiothérapie ou radiothérapie. Malgré ces connaissances, la leucémie peut survenir sans cause apparente, ce qui souligne l'importance de la recherche continue dans ce domaine.<br><br>

                        En comprenant mieux ce qu'est la leucémie, ses types et son développement, nous pouvons non seulement améliorer les traitements et le soutien aux patients, mais aussi renforcer notre engagement collectif dans la lutte contre cette maladie complexe et multiforme.
                    </div>
                </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Symptômes et Diagnostic
                </button>
            </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        La leucémie, présente des symptômes qui peuvent être confondus avec ceux de maladies moins graves, rendant son diagnostic précoce difficile. Parmi les manifestations courantes, on note une fatigue persistante et inexpliquée, souvent accompagnée d'une faiblesse générale. Cette lassitude est le reflet d'une anémie causée par le manque de globules rouges sains. Les patients peuvent également observer une tendance accrue aux ecchymoses ou aux saignements, signe d'un déficit en plaquettes sanguines, ainsi qu'une susceptibilité aux infections due à une diminution de leucocytes fonctionnels.<br><br>

                        Des symptômes plus spécifiques incluent des douleurs osseuses et articulaires, conséquence de la pression exercée par les cellules leucémiques sur l'environnement de la moelle osseuse. Des ganglions lymphatiques enflés, une rate ou un foie élargis, reflétant l'accumulation de cellules leucémiques dans ces organes. De plus, des symptômes comme la fièvre, la transpiration nocturne et une perte de poids inexpliquée peuvent être présents.<br><br>

                        Le diagnostic de la leucémie débute généralement par une analyse sanguine complète, qui peut révéler une augmentation anormale du nombre de leucocytes ou une baisse des autres types de cellules sanguines. Toutefois, ces anomalies ne sont pas spécifiques à la leucémie et nécessitent des investigations supplémentaires.<br><br>

                        Pour confirmer le diagnostic, un examen de la moelle osseuse est souvent réalisé. Cette procédure, connue sous le nom de biopsie de moelle osseuse, implique le prélèvement d'un échantillon de moelle pour examiner la présence et le type de cellules leucémiques. Des analyses génétiques et moléculaires peuvent également être effectuées sur ces échantillons pour identifier des mutations spécifiques, aidant ainsi à déterminer le sous-type de leucémie et à orienter le traitement.<br><br>

                        Des examens d'imagerie comme la radiographie, l'échographie ou la tomographie par ordinateur (CT scan) peuvent être utilisés pour évaluer l'impact de la leucémie sur d'autres organes.<br><br>

                        En somme, la reconnaissance précoce des symptômes et un diagnostic précis sont essentiels pour une prise en charge efficace de la leucémie. Ces étapes initiales sont cruciales pour établir un plan de traitement adapté et augmenter les chances de réussite thérapeutique.
                    </div>
                </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Traitement de la Leucémie
                </button>
            </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Le traitement de la leucémie a connu d'importantes avancées au cours des dernières années, offrant aux patients des thérapies adaptées à la spécificité de leur maladie. La stratégie thérapeutique dépend principalement du type de leucémie, de son stade d'évolution, de l'âge du patient, et de sa santé générale.<br><br>

                        La chimiothérapie demeure le pilier du traitement de la leucémie. Elle consiste à utiliser des médicaments puissants pour tuer les cellules leucémiques ou arrêter leur croissance. Ces médicaments peuvent être administrés par voie orale ou intraveineuse et sont souvent utilisés en combinaison pour augmenter leur efficacité. La chimiothérapie est généralement administrée en cycles, alternant périodes de traitement et de repos.<br><br>

                        La radiothérapie, qui utilise des rayonnements à haute énergie pour détruire les cellules cancéreuses, peut être employée pour cibler des zones spécifiques où les cellules leucémiques se sont accumulées, comme la rate ou les ganglions lymphatiques.<br><br>

                        La transplantation de moelle osseuse est une autre option de traitement importante, particulièrement dans les cas de leucémies aiguës. Elle implique le remplacement de la moelle osseuse malade par des cellules souches saines provenant d'un donneur compatible, permettant ainsi de régénérer une moelle osseuse fonctionnelle.<br><br>

                        Parmi les avancées médicales récentes, on compte le développement des thérapies ciblées et de l'immunothérapie. Les thérapies ciblées utilisent des médicaments ou des substances chimiques pour identifier et attaquer spécifiquement les cellules leucémiques, minimisant ainsi les dommages aux cellules saines. L'immunothérapie, quant à elle, renforce le système immunitaire du patient pour qu'il soit mieux à même de combattre le cancer.<br><br>

                        Des progrès ont également été réalisés dans la compréhension génétique de la leucémie, afin de développer des traitements personnalisés basés sur le profil génétique de chaque patient. Cette approche de médecine de précision ouvre de nouvelles perspectives dans le traitement de la leucémie, offrant espoir et optimisme aux patients et à leurs familles.<br><br>

                        Ces avancées témoignent de l'importance de la recherche et du soutien à l'innovation dans la lutte contre la leucémie. En investissant dans la science, nous ouvrons la voie à des traitements plus efficaces et moins invasifs, améliorant ainsi la qualité de vie et les taux de survie des patients.
                    </div>
                </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Sensibilisation et Prévention
                </button>
            </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        La sensibilisation à la leucémie joue un rôle crucial dans la prévention et le diagnostic précoce de cette maladie. En informant le public sur les symptômes et les traitements, on augmente la probabilité de détection précoce, ce qui est essentiel pour améliorer les chances de survie et l'efficacité des traitements. Parallèlement, la sensibilisation contribue à déstigmatiser la maladie et à encourager les discussions ouvertes et informatives.<br><br>

                        Une dimension particulièrement importante de cette sensibilisation l'importance du don de moelle osseuse. L'inscription sur les listes de donneurs de moelle osseuse est un geste qui peut littéralement sauver des vies, en particulier pour les patients atteints de leucémie pour qui une transplantation de moelle osseuse est souvent la seule option curative. Chaque personne qui s'ajoute à la liste de donneurs augmente les chances de trouver un donneur compatible pour les patients en attente, offrant ainsi un espoir tangible pour un avenir meilleur.<br><br>

                        En somme, la sensibilisation et l'engagement actif de chacun dans les démarches de prévention et de soutien, comme le don de moelle osseuse, sont essentiels pour combattre efficacement la leucémie et soutenir ceux qui en sont affectés.
                    </div>
                </div>
        </div>
    </div>
            </div>
          <div class="container mt-5 mb-3">
          <div class="d-flex">
            <p class="font-weight-bold text-primary">NOS PROCHAINES</p>
            <p class="font-weight-bold ">&nbsp; SENSIBILISATIONS :</p>
        </div>
        <div id="myCarousel" data-interval="5000" class="carousel slide carousel-fade bg-primary rounded" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($images as $key => $image)
                <li data-target="#myCarousel" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
                @endforeach
            </ol>

            <div class="carousel-inner">
                @foreach($images as $key => $image)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <div class="row align-items-center">
                        <div class="col-2">
                        </div>
                        <div class="col-4 ">
                            <h2 class="fw-bold text-light">{{ $image->titre }}</h2>
                            <p class="text-white">{{ $image->description }}</p>
                        </div>
                        <div class="col-5">
                            <img src="{{ $image->lien }}" class="w-100 h-50  img-fluid" alt="{{ $image->titre }}" style=" height: 300px !important;" >
                        </div>
                        <div class="col-1">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <a class="carousel-control-prev " href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
        </div>
        <div class="col-md-12"> 
               <div class="container">
        <div class="d-flex">
            <p class="font-weight-bold text-primary">NOS</p>
            <p class="font-weight-bold ">&nbsp; VIDEOS :</p>
        </div>
        <div class="d-flex row mt-5">
            @foreach($videos as $video)
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $video->titre }}</h5>
                            <p class="card-text">{{ $video->description }}</p>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="{{ $video->lien }}" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center w-100">
                 <button type="button" class="btn btn-primary " > voir toutes nos videos</button>
            </div>
        </div>
    </div> 
       
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@stop