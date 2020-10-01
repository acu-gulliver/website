@extends('layouts.public')

@section('css')
    <link href="{{asset('static/css/sezioni.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('static/css/interne.css')}}" rel="stylesheet" type="text/css"/>
    <style>
        h4 {
            color: #7b0000 !important;
        }
    </style>
@endsection

@section('content')
    <main id="main_container">

        <section id="briciole">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-1 col-lg-9 col-md-12">
                        <nav class="breadcrumb-container" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/')}}"
                                       title="Vai alla pagina: Home">
                                        Home
                                    </a>
                                    <span class="separator">/</span>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#"
                                       title="Vai alla pagina: Guida tasse e isee">
                                        Guida tasse & ISEE
                                    </a>
                                </li>

                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>


        <section id="intro">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-1 col-lg-10 col-md-10">
                        <div class="titolo-sezione">
                            <h2>Guida alle tasse & ISEE</h2>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="articolo-dettaglio-testo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 lineright">
                        <aside id="menu-sinistro">
                            <h4 class="dropdown">
                                <a data-toggle="collapse" href="#lista-paragrafi" role="button" aria-expanded="true"
                                   aria-controls="lista-paragrafi">
                                    Indice della pagina
                                    <svg class="icon">
                                        <use xlink:href="static/img/bootstrap-italia.svg#it-collapse"></use>
                                    </svg>
                                </a>
                            </h4>
                            <div class="menu-separatore">
                                <div class="bg-oro"></div>
                            </div>
                            <div id="lista-paragrafi" class="list-group collapse show">
                                <a class="list-group-item list-group-item-action" href="#step-1"
                                   title="Vai al paragrafo Titolo paragrafo">Iniziare la procedura ed informazioni
                                    generali</a>
                                <a class="list-group-item list-group-item-action" href="#step-2"
                                   title="Vai al paragrafo Galleria">Componenti nucleo familiare e dati anagrafici</a>
                                <a class="list-group-item list-group-item-action" href="#step-3"
                                   title="Vai al paragrafo Allegati">Autorizzazione</a>
                                <a class="list-group-item list-group-item-action" href="#step-4"
                                   title="Vai al paragrafo Allegati">Inclusione in fascia minima (art.4 bando) ed altri
                                    esoneri</a>
                                <a class="list-group-item list-group-item-action" href="#step-5"
                                   title="Vai al paragrafo Allegati">Situazioni particolari del nucleo familiare</a>
                                <a class="list-group-item list-group-item-action" href="#step-6"
                                   title="Vai al paragrafo Allegati">Avvertenze finali e conferma dei dati</a>
                           
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-9 col-md-8 linetop pt8">
                        <div class="articolo-paragrafi">
                            {{-- PROCEDURA ED INFORMAZIONI GENERALI --}}
                            <div class="row">
                                <div class="offset-md-1 col-md-11 paragrafo">
                                    <a id="step-1"> </a>
                                    <h4>Iniziare la procedura ed informazioni generali</h4>
                                </div>
                            </div>

                            <div class="row">
                                <div class="offset-md-1 col-md-8 paragrafo">
                                    <h6>Iniziare la procedura</h6>
                                </div>

                                <div class="offset-md-1 col-md-8 testolungo">
                                    <p>
                                        Fare il Log-in nella propria <a href="https://esse3web.univpm.it/Home.do"><span
                                                style="color:#008080;">area riservata esse3web.univpm.it</span></a>
                                        e nel menù a tendina a sinistra selezionare
                                        la categoria “Segreteria”
                                        e successivamente la voce “Autocertificazione”.
                                        <br>
                                        <img
                                            src="https://i1.wp.com/www.gulliver.univpm.it/wp-content/uploads/tendina.png?resize=155%2C300&ssl=1"
                                            alt="Menu esse3web">
                                    </p>
                                </div>

                            </div>
                            <div class="row">
                                <div class="offset-md-1 col-md-11 paragrafo">
                                    <h6>Informazioni generali</h6>
                                </div>
                                <div class="offset-md-1 col-md-8 testolungo">
                                    <p>
                                        Lo studente non deve dichiarare l’ISEE, ma deve soltanto rilasciare il consenso
                                        per autorizzare l’Univpm ad acquisire direttamente l’indicatore ISEE dalla banca
                                        dati dell’INPS (specificato più avanti durante la procedura)
                                        <br>
                                        <br>
                                        <strong>DISABILI</strong>: sono concessi d’ufficio in base alla dichiarazione e
                                        alla
                                        documentazione consegnata alla competente segreteria (art.6 bando).
                                        <br>
                                        <br>
                                        <strong>DIPLOMATO 100 E LODE E LAUREATI 110 E LODE <i>(tutte le scuole e gli
                                                atenei di
                                                italia)</i></strong>: concessi d’ufficio in base alle risultanze
                                        acquisite dal sistema
                                        gestionale di Ateneo (art.6 bando).
                                        <br>
                                        <br>
                                        <strong>SUPER BRAVO</strong>: concessi d’ufficio. Se l’esonero non è totale
                                        (media inferiore a
                                        30) è necessario richiedere anche la tassa personalizzata in modo da avere
                                        calcolato l’esonero sulla effettiva fascia di contribuzione (art.6 bando).
                                        <br>
                                        <br>
                                        Dopo aver letto le avvertenze generali cliccare su “inserisci i dati
                                        dell’Autocertificazione”
                                    </p>
                                </div>
                            </div>


                            <div class="row">
                                <div class="offset-md-1 col-md-11 paragrafo">
                                    <a id="step-2"> </a>
                                    <h4>Componenti nucleo familiare e dati anagrafici</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="offset-md-1 col-md-8 paragrafo">
                                    <h6>Componenti nucleo familiare</h6>
                                </div>
                                <div class="offset-md-1 col-md-8 testolungo">
                                    <p>
                                        <img
                                            src="https://i2.wp.com/www.gulliver.univpm.it/wp-content/uploads/striciolino-punto-3.jpg"
                                            alt="">
                                    </p>
                                    <p> Occorre specificare il numero di componenti del
                                        proprio nucleo familiare</p>

                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="offset-md-1 col-md-8 paragrafo">
                                    <h6>Dati anagrafici</h6>
                                </div>
                                <div class="offset-md-1 col-md-8 testolungo">
                                    <p>
                                        <img
                                            src="https://i0.wp.com/www.gulliver.univpm.it/wp-content/uploads/striciolino-punto-31.jpg"
                                            alt="">
                                    </p>
                                    <p>I dati sono già inseriti d’ufficio nella procedura.</p>

                                </div>
                            </div>

                            <div class="row">
                                <div class="offset-md-1 col-md-11 paragrafo">
                                    <a id="step-3"> </a>
                                    <h4>Autorizzazione</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="offset-md-1 col-md-8 testolungo">
                                    <p>
                                        <img
                                            src="https://i0.wp.com/www.gulliver.univpm.it/wp-content/uploads/striciolino-punto-32.jpg"
                                            alt="">
                                        <br>
                                        <br>
                                        È obbligatorio selezionare una delle tre opzioni:
                                        <br>
                                        <br>
                                        <strong>PRIMA OPZIONE</strong> – nel caso in cui non si voglia dichiarare l’ISEE
                                        ma si chiede
                                        comunque un qualche tipo di esonero (inclusione in fascia minima, …)
                                        <br>
                                        <br>
                                        <strong>SECONDA OPZIONE</strong> – si dà l’autorizzazione all’Univpm a
                                        richiedere presso l’Inps
                                        il nostro valore ISEE (è necessario aver presentato domanda di compilazione di
                                        ISEE presso un CAF)
                                        <br>
                                        <br>
                                        <strong>TERZA OPZIONE</strong> – nel caso di redditi esteri. In questo caso è
                                        necessario
                                        compilare anche i punti a) e b)

                                    </p>

                                </div>
                            </div>

                            {{-- FASCIA MINIMA ED ESONERI--}}
                            <div class="row">
                                <div class="offset-md-1 col-md-11 paragrafo">
                                    <a id="step-4"> </a>
                                    <h4>Inclusione in fascia minima (art.4 bando) ed altri
                                        esoneri</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="offset-md-1 col-md-11 paragrafo">
                                    <h6>Inclusione in fascia minima (art.4 bando)</h6>
                                </div>
                                <div class="offset-md-1 col-md-8 testolungo">
                                    <p>
                                        <img
                                            src="https://i0.wp.com/www.gulliver.univpm.it/wp-content/uploads/striciolino-punto-34.jpg"
                                            alt="">
                                        <br>
                                        <br>
                                        L’impedimento deve assorbire almeno 4 mesi ricadenti nel periodo che va dal 1
                                        ottobre al 31 maggio di ciascun anno accademico.
                                        <br>
                                        <br>
                                        I laureandi a Luglio che hanno diritto ad essere inclusi in fascia minima non
                                        dovranno selezionare niente in questo momento e presentare poi richiesta di
                                        rimborso una volta laureati.

                                    </p>

                                </div>
                                <div class="offset-md-1 col-md-11 paragrafo">
                                    <h6>Altri
                                        esoneri</h6>
                                </div>
                                <div class="offset-md-1 col-md-8 testolungo">
                                    <p>
                                        <img
                                            src="https://i0.wp.com/www.gulliver.univpm.it/wp-content/uploads/striciolino-punto-35.jpg"
                                            alt="">

                                    </p>

                                </div>
                            </div>

                            {{-- SITUAZIONI PARTICOLARI --}}

                            <div class="row">
                                <div class="offset-md-1 col-md-11 paragrafo">
                                    <a id="step-5"> </a>
                                    <h4>Situazioni particolari del nucleo familiare</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="offset-md-1 col-md-8 testolungo">
                                    <p>
                                        <img
                                            src="https://i1.wp.com/www.gulliver.univpm.it/wp-content/uploads/striciolino-punto-36.jpg"
                                            alt="">
                                        <br>
                                        <br>
                                        <strong>PARENTE ISCRITTO PRESSO UNA UNIVERSITA’ DELLE MARCHE</strong>: sconto 5%
                                        <br>
                                        <br>
                                        <strong>PARENTE ISCRITTO PRESSO L’UNIVERSITA’ POLITECNICA DELLE MARCHE</strong>:
                                        sconto 10%
                                        <br>
                                        <br>
                                        <strong>ORFANO</strong>: sconto 10%
                                    </p>

                                </div>
                            </div>

                            {{-- AVVERTENZE E CONSEGNA --}}

                            <div class="row">
                                <div class="offset-md-1 col-md-11 paragrafo">
                                    <a id="step-6"> </a>
                                    <h4>Avvertenze finali e conferma dei dati</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="offset-md-1 col-md-11 paragrafo">
                                    <h6>Avvertenze finali</h6>
                                </div>
                                <div class="offset-md-1 col-md-8 testolungo">
                                    <p>
                                        La domanda di tassa personalizzata è esclusivamente ON-LINE.<br>
                                        La domanda va integrata con la specifica documentazione cartacea e con la
                                        ricevuta che si genera dopo aver premuto il bottone “conferma definitiva
                                        autocertificazione” solo nei seguenti casi:
                                        <br>
                                        <br>
                                        - redditi e patrimoni esteri (art 2.5 bando)
                                        <br>
                                        <br>
                                        - grave disagio economico (art.4 bando)
                                        <br>
                                        <br>
                                        - stato di gravidanza (art. 4 bando)
                                        <br>
                                        <br>
                                        - infermità gravi e prolungate (art 4 bando)
                                    </p>

                                </div>
                                <div class="offset-md-1 col-md-11 paragrafo">
                                    <h6>Conferma provvisoria dei dati</h6>
                                </div>
                                <div class="offset-md-1 col-md-8 testolungo">
                                    <p>
                                        <img
                                            src="https://i1.wp.com/www.gulliver.univpm.it/wp-content/uploads/striciolino-punto-38.jpg"
                                            alt="">
                                        Prendo su “OK” si confermeranno soltanto provvisoriamente i dati inseriti e si
                                        tornerà alla pagina iniziale della procedura.
                                    </p>

                                </div>
                                <div class="offset-md-1 col-md-11 paragrafo">
                                    <h6>Conferma definitiva dei dati</h6>
                                </div>
                                <div class="offset-md-1 col-md-8 testolungo">
                                    <p>
                                        <img
                                            src="https://i2.wp.com/www.gulliver.univpm.it/wp-content/uploads/striciolino-punto-39.jpg"
                                            alt="">
                                        A Questo punto sono 3 le opzioni:<br><br>

                                        <strong>MODIFICA I DATI DELL’AUTOCERTIFICAZIONE</strong>: i dati che abbiamo inseriti resteranno
                                        salvati fino alla chiusura della procedura e sarà possibile entrare nella nostra
                                        area riservata e modificarli fino alla scadenza del 21 Dicembre. (N.B. i dati
                                        inseriti ma senza aver premuto su “Conferma definitiva autocertificazione e
                                        stampa ricevuta” non sono validi!)<br><br>

                                        <strong>ELIMINA AUTOCERTIFICAZIONE</strong>: elimina tutti i dati inseriti e permette di
                                        ricominciare la procedura da capo.<br><br>

                                        <strong>CONFERMA DEFINITIVA AUTOCERTIFICAZIONE E STAMPA RICEVUTA</strong>: conferma i dati
                                        inseriti e chiude definitivamente la procedura. SOLTANTO DOPO AVER PREMUTO
                                        QUESTO BOTTONE LA DOMANDA SARA’ VALIDA! Dopo aver premuto il bottone sarà
                                        possibile scaricare un file PDF con la ricevuta della nostra operazione.
                                        Consigliamo di conservare la ricevuta per ogni evenienza.
                                    </p>

                                </div>
                            </div>
                        

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
