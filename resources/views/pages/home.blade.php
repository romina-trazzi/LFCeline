<!-- prende tutto quello che c'è nel file app della cartella layout -->
@extends('layout.app') 


<!-- si mette al posto dello yield "stylecss" del file app della cartella layout -->

@section('stylecss')

<link rel="stylesheet" href="{{asset('css/home.css')}}" type="text/css">

@endsection

<!-- si mette al posto dello yield "mediquerycss" del file app della cartella layout -->

@section('mediaquerycss')

<link rel="stylesheet" href="{{asset('css/mq Home.css')}}" type="text/css">

@endsection


<!-- si mette al posto dello yield "content" del file app della cartella layout -->
@section('content')

<!-- Quotation -->
<section class="quotation d_flex">

  <blockquote>  
    <h2> <cite> "Lorem ipsum dolor sit amet, consectetur adipisicing elit. At reiciendis soluta aperiam quidem eaque asperiores animi quos? Amet pariatur rerum at quia, 
    reiciendis asperiores doloribus, harum aperiam iusto provident quos."  </cite> </h2>
  </blockquote>
  
  <figcaption>
    <span> &mdash; Louis Ferdinand Céline, <cite>Viaggio al termine della notte, ed. Blablabla pagg. 24-25</cite> </span> 
  </figcaption>


</section>

<hr class="ink_bar">

<!-- Biography -->
<section class="d_flex mini_bio">

  <div class="mini_bio_text">

    <h3> Bio Celine </h3>

    <p> Louis-Ferdinand Céline (1894-1961) è stato un visionario scrittore francese il cui talento letterario ha lasciato un'impronta indelebile nella storia della letteratura del XX secolo.
    La sua vita fu caratterizzata da una serie di eventi e trasformazioni che contribuirono a plasmare la sua identità: iniziò la sua carriera come medico e lavorò in diverse strutture sanitarie prima di 
    arruolarsi nell'esercito durante la Prima Guerra Mondiale.<br><br>
    Questa esperienza traumatica nei campi di battaglia segnò profondamente la sua psiche e avrebbe influenzato gran parte della sua opera successiva.<br><br> 
    La svolta avvenne negli anni '30 quando, affranto dall'esperienza della guerra e disilluso dalla medicina, Céline abbandonò la professione e si dedicò alla scrittura, fino a 
    divenire uno degli autori più rivoluzionari del XX secolo. <br><br> 
    Il suo romanzo d'esordio, <em>"Viaggio al termine della notte"</em> (1932), fu un capolavoro letterario che rivoluzionò la narrativa contemporanea.<br>
    Quest'opera spietatamente onesta e provocatoria esplorava le miserie umane, la disillusione e la violenza della società, offrendo uno sguardo critico e spesso cinico sulla condizione umana.<br><br>
    Nel 1936, pubblicò <em>"La morte a credito"</em>, un altro romanzo innovativo che continuò a esplorare tematiche oscure e a sfidare le convenzioni letterarie.<br>
    Questi romanzi sono considerati pietre miliari della letteratura moderna.<br><br>
    </p>

    <h3> Le difficoltà </h3> 

    <p> Tuttavia, la carriera di Céline non fu priva di controversie. <br>
    Durante la Seconda Guerra Mondiale, si schierò con il governo collaborazionista di Vichy e scrisse articoli antisemiti che lo resero 
    oggetto di condanna e critica. Dopo la guerra, fuggì in Danimarca per sfuggire alle persecuzioni, ma alla fine fu arrestato e processato per tradimento.<br><br>
    Dopo un periodo di detenzione, Céline tornò in Francia negli anni '50, dove la sua reputazione continuò a suscitare polemiche. Nonostante il suo passato controverso, la sua eredità letteraria 
    rimane incontestabile e continua a ispirare lettori e scrittori di tutto il mondo.<br>
    </p>
  
  </div>

  <div class="mini_bio_img">
    <img src="https://i.pinimg.com/736x/d2/eb/72/d2eb7215e659c235ecd9f5ef67b3b74f--ferdinand-celine.jpg">
    <figcaption> Céline nel 1930 </figcaption>
  </div>

</section>

@endsection


