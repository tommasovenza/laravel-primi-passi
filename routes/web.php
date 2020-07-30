<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// a quali url il mio sito risponde con un contenuto??? in questo caso solo l'homepage
// qualsiasi altra rotta che non sia qui gestita, se le richiamo, avrò l'errore 404, pagina non trovata!

// route fondamentalmente è una classe. come se fosse un oggetto javascript
// get è il metodo che utilizziamo per far vedere la nostra route (metodo standard di quando navighiamo sul web)

// il primo parametro che passiamo alla funzione get è un url ->(a quale url devo rispondere) il secondo parametro è con cosa devo rispondere

// route dell'homepage la mettiamo per prima come convenzione
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/privacy-policy', function () {
    return view('pp');
})->name('privacy');

Route::get('/domande-frequenti', function () {

    $faqs_list_sinistra = [
        [
            'question' => 'Chi può fare il corso Boolean?',
            'answer' => 'Chiunque abbia una forte curiosità verso il mondo della programmazione e voglia di imparare a fare il mestiere di sviluppatore.
            Età e curriculum non sono una discriminante: infatti, i nostri studenti hanno dai 18 ai 45 anni, sono giovani ragazzi senza alcuna esperienza lavorativa, ma anche affermati professionisti che vogliono cambiare settore.Se non hai mai programmato o se hai già seguito qualche corso ma senti di non aver approfondito abbastanza per diventare programmatore, Boolean è il corso che fa per te.'
        ],

        [
            'question' => 'Che competenze devo avere per iniziare il corso?',
            'answer' => 'Il corso parte da zero, quindi non serve alcuna competenza di programmazione, è necessario però superare il processo di selezione.'
        ],

        [
            'question' => 'In cosa consiste il processo di selezione?',
            'answer' => 'Boolean è un corso intensivo che richiede impegno costante, dedizione e un’attitudine al problem solving. Per assicurarci che ogni studente abbia concrete possibilità di diventare uno sviluppatore e iniziare una nuova carriera, selezioniamo gli studenti tramite un test di logica a risposta multipla e un colloquio motivazionale. Contattaci per iniziare il tuo percorso o per saperne di più!'
        ]
    ];

    $faqs_list_destra = [
        [
            'question' => 'Ho la certezza di essere assunto?',
            'answer' => 'Dipende tutto da te! Come dimostrano numerosi studi di settore, lo sviluppatore web è uno dei mestieri più ricercati in Italia e Boolean fornisce tutte le competenze richieste dalle aziende per iniziare a fare questo lavoro. Oltre a fornirti conoscenze di programmazione, ti presentiamo alle nostre aziende partner che assumono in tutta Italia e ti aiutiamo a prepararti al meglio per i colloqui!'
        ],

        [
            'question' => 'Terminato il corso, sono supportato nella ricerca del lavoro?',
            'answer' => 'Certamente! Verrai presentato a oltre 50 aziende che operano nel settore Internet in Italia. Dalla multinazionale più quotata alla startup in ascesa, avrai l’occasione di presentare te stesso e le tue qualità da neo-sviluppatore. Inoltre, ti affianchiamo nella costruzione del CV, del portfolio di progetti e simuliamo insieme dei colloqui: il tuo successo è il nostro!'
        ],

        [
            'question' => 'Quanti dei vostri ex allievi hanno ricevuto offerte di lavoro?',
            'answer' => 'Il 100%. Tutti gli studenti che hanno terminato il corso hanno ricevuto una o più offerte di lavoro. Il nostro corso fornisce solide basi di programmazione ed essendo il mestiere del developer molto ricercato, le aziende sono sempre ben disposte ad assumere persone competenti e volenterose.'
        ]
    ];

    return view('faq', [
        'faqs_list_sinistra' => $faqs_list_sinistra,
        'faqs_list_destra' => $faqs_list_destra
    ]);
})->name('faq');







