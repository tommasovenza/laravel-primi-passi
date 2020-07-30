@extends('layouts.app')

@section('content')

    <main>
        <div class="contenitore">

            <div class="sinistra">
                <h2>Prima del corso</h2>

                @foreach ($faqs_list_sinistra as $faq)
                    
                    <h3> {{ $faq['question'] }}</h3>

                    <p> {{ $faq['answer'] }}</p>

                @endforeach

            </div>
        
            <div class="destra">
                <h2>Dopo il corso</h2>

                @foreach ($faqs_list_destra as $faq)
                    
                    <h3> {{ $faq['question'] }}</h3>

                    <p> {{ $faq['answer'] }}</p>

                @endforeach
          
              
            </div>
            
        </div>
    </main>


@endsection
