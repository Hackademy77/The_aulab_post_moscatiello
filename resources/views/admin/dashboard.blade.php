<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1"> 
                Bentornato, Amministratore
            </h1>
        </div>
    </div>
    @if (session('message'))
    <div class="alert alert-success text-center">
          {{session('message')}}
    </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="co1-12">
                <h2>Richieste per ruolo amministratore</h2> 
                 <x-requests-table :roleRequests="$adminRequests" role="amministratore"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="co1-12">
                <h2>Richieste per ruolo revisore</h2>
                 <x-requests-table :roleRequests="$revisorRequests" role="revisore"/>
            </div>
        </div>
    </div>
    <div>
        <div class="container my-5">
             <div class="row justify-content-center" >
                <div class="co1-12">
                    <h2>Richieste per ruolo redattore</h2> 
                    <x-requests-table :roleRequests="$writerRequests" role="redattore"/> 
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="co1-12">
                <h2>I tags della piattaforma</h2>
                <x-metainfo-table :metaInfos="$tags" metaType="tags"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="co1-12">
                <h2>Le categorie della piattaforma</h2>
                <x-metainfo-table :metaInfos="$categories" metaType="categorie"/>
            </div>
        </div>
    </div>

</x-layout>
