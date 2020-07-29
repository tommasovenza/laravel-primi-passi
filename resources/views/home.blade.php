@extends('layouts.app')

@section('content')
    
    <main>

       <div class="hero">

            <div class="hero-title">
                <h1>Diventa <strong>Sviluppatore Web</strong></h1> 
                <p>Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</p>

                <ul>
                    <li>6 mesi di corso intensivo online in diretta</li>
                    <li>Nessuna competenza di programmazione richiesta</li>
                    <li>Siamo certi del tuo successo, altrimenti ti rimborsiamo</li>
                </ul>
            </div>

            <div class="hero-image">
                <img src="{{ asset('img/pc-black.gif') }}" alt="pc-gif">
            </div>
            
       </div>

       
       <section id="blue">
            <div class="fascetta">
                <div class="testo">
                    <h3>98%</h3>
                    <p>La percentuale dei nostri studenti che ora lavora come web developer, oltre la metà a tempo indeterminato.</p>
                </div>

                <div class="testo">
                    <h3><small>€</small>23.000</h3>
                    <p>Lo stipendio medio lordo di partenza degli studenti assunti dalle nostre aziende partner.</p>
                </div>

                <div class="testo">
                    <h3>#1</h3>
                    <p>Siamo il primo istituto online in Italia per indice di gradimento e risultati conseguiti.</p>
                </div>
            </div>
       </section>

        
    </main>
 
@endsection
