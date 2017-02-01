@extends('layout.app')
@section('content')
    <div class="container-fluid content-block">
        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <img class="img-responsive" src="../logo.png">
            </div>
            <div class="col-md-6 col-md-offset-1">
                <hr class="smallhr">
                <h2>Perfekte Serverintegration</h2>
                <p>
                    Anders als normale Mods bietet die RewiMod eine perfekte serverseite Unterstützung mit sich.
                </p>
                <button class="button" type="button" data-toggle="collapse" data-target="#collapseFeatureIntegration"
                        aria-expanded="false" aria-controls="collapseFeatureIntegration">
                    Mehr erfahren.
                </button>
                <div class="collapse" id="collapseFeatureIntegration">
                    <hr class="feature-divider">
                    <div class="feature-spoiler">
                        ...
                    </div>
                </div>
            </div>
        </div>
        <hr class="feature-divider">
        <div class="row">
            <div class="col-md-6 col-md-offset-1">
                <hr class="smallhr">
                <h2>Forge-Unterstützung</h2>
                <p>
                    Damit du die Mod nicht alleine nutzen musst, bietet sie volle Forge-Unterstützung an.
                </p>
                <button class="button" type="button" data-toggle="collapse" data-target="#collapseFeatureForge"
                        aria-expanded="false" aria-controls="collapseFeatureForge">
                    Mehr erfahren.
                </button>
                <div class="collapse" id="collapseFeatureForge">
                    <hr class="feature-divider">
                    <div class="feature-spoiler">
                        ...
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-1">
                <img class="img-responsive" src="../logo.png">
            </div>
        </div>
        <hr class="feature-divider">
        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <img class="img-responsive" src="../logo.png">
            </div>
            <div class="col-md-6 col-md-offset-1">
                <hr class="smallhr">
                <h2>Eine Community. Ein Projekt.</h2>
                <p>
                    Die RewiMod ist ein Community-Projekt. Das heißt, dass auch Du deinen Teil beisteuern kannst.
                </p>
                <button class="button" type="button" data-toggle="collapse" data-target="#collapseFeatureCommunity"
                        aria-expanded="false" aria-controls="collapseFeatureCommunity">
                    Mehr erfahren.
                </button>
                <div class="collapse" id="collapseFeatureCommunity">
                    <hr class="feature-divider">
                    <div class="feature-spoiler">
                        ...
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection