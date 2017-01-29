@extends('layout.app')
@section('content')
    <div id="header">
        <img src="logo.png" class="img-responsive" id="logo" alt="RewiMod">
    </div>
    <div class="container-fluid content-block">
        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <img class="img-responsive" src="../logo.png">
            </div>
            <div class="col-md-6">
                <hr class="smallhr">
                <h2>Downloads</h2>
                <p>
                    Hier seht ihr sämtliche verfügbaren Versionen aufgelistet.
                </p>
                <a href="#newest">Zur neuesten Version springen.</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table table-responsive download-list">
                    <tr>
                        <td>
                            Version
                        </td>
                        <td>
                            Dateigröße
                        </td>
                        <td>
                            Erscheinungsdatum
                        </td>
                        <td colspan="3">
                            Download für Version
                        </td>
                    </tr>
                    <tr>
                        <td>
                            1.0
                        </td>
                        <td>
                            1 mb
                        </td>
                        <td>
                            03.08.2016
                        </td>
                        <td>
                            <a href="#">1.8.x</a>
                        </td>
                        <td>
                            <a href="#">1.9.x</a>
                        </td>
                        <td>
                            <a href="#">1.10.x</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection