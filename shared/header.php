<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ path('homepage') }}">Symilibnb</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">                   
            <li class="nav-item">
                <a class="nav-link" href="{{ path('homepage') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ path('ads_index') }}">Annonces</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="" class="nav-link">Mon compte</a>
            </li>
        </ul>
    </div>
</nav>