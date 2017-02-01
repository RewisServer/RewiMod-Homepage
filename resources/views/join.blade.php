@extends('layout.app')
@section('content')
    <div id="header">
        <img src="../logo.png" class="img-responsive" id="logo" alt="RewiMod">
    </div>
    <div class="container-fluid content-block">
        <div class="row">

            <div class="col-md-4 col-sm-6">
                <i class="fa fa-github fa-5x"></i>
                <h1>GitHub</h1>
                <p>
                    Das RewiMod-Projekt ist 100% OpenSource. Der Code wird über Git verwaltet und steht jedem auf <a href="https://github.com/RewisServer/RewiMod/" target="_blank">GitHub</a> zur Verfügung.
                </p>
            </div>

            <div class="col-md-4 col-sm-6">
                <i class="fa fa-code fa-5x"></i>
                <h1>Programmieren</h1>
                <p>
                    Die RewiMod ist ein Communityprojekt und jeder mit Grundkenntnissen in Java ist herzlich Willkommen mitzuhelfen. Zur Kommunikation haben wir unseren eigenen <a href="https://discord.gg/ZpAe9qn" target="_blank">Discord Server</a> und im <a href="https://rewinside.tv/Thread/57412-Offiziell-RewiMod/" target="_blank">Rewinside Forum</a> findest du jederzeit die aktuellen Infos zum Projekt.
                </p>
            </div>

            <div class="col-md-4 col-sm-6">
                <i class="fa fa-globe fa-5x"></i>
                <h1>Community</h1>
                <p>
                    Du kannst nicht programmieren, möchtest aber dennoch nicht nur zusehen? Kein Problem! Mithelfen kann jeder, egal ob durch das Beisteueren von Code oder durch das Melden von Bugs oder das Vorschlagen von Ideen und Features. Letzteres macht ihr am besten
                    <a href="https://github.com/RewisServer/RewiMod/issues" target="_blank">hier auf GitHub</a>. Und wer weiß? Vielleicht motiviert euch das Projekt ja sogar Programmieren zu lernen... ;)
                </p>
            </div>

        </div>
    </div>
@endsection