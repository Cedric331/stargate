@extends('layouts.app')

@section('header')
<link rel="stylesheet" href="{{ asset('api/css/style.css') }}" />
<script src="{{ asset('api/js/all.js') }}"></script>
@endsection

@section('content')

<div class="row">
    <div class="col-md-2">
        <nav class="flex-column bg-light navbar-light sticky-top">
         <h4 class="text-center my-2">Personnages</h4>
            <hr>
            <a class="nav-link" href="#personnage">Personnages</a>
            <a class="nav-link" href="#personnagePagination">Personnages avec pagination</a>
            <a class="nav-link" href="#personnageNom">Personnage par nom</a>
         <h4 class="text-center my-2">Planètes</h4>
            <hr>
            <a class="nav-link" href="#planete">Planetes</a>
            <a class="nav-link" href="#planeteNom">Planete par nom</a>
        </nav>
    </div>

    <div class="page-wrapper container my-5 d-flex justify-content-center col-md-10">
        <div class="dark-box"></div>
        <div class="content">
            <!-- START_INFO -->
            <h1 class="mb-3">Documentation API</h1>
            <hr>
            <p>Avant d'utiliser l'API, vous devez générer un token depuis votre <a href="{{ route('account-index') }}">compte</a> qu'il vous suffira ensuite de transmettre lors des requêtes.
            <br class="my-2">
            <a href="{{ asset('api/collection.json') }}">Obtenir la collection Postman</a>
            <!-- END_INFO -->

            <!-- START_aa7c403060782129486eaf1c2ac85aef -->
            <h2 id="personnage" class="mt-4">Récupère l'ensemble des personnages</h2>
            <hr>
            <h3>HTTP Request</h3>
            <p><code>GET api/personnages</code></p>
            <blockquote>
                <p>Example request:</p>
            </blockquote>
            <pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/personnages" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
            <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/personnages"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
            <blockquote>
                <p>Example response (401):</p>
            </blockquote>
            <pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>

            <!-- END_aa7c403060782129486eaf1c2ac85aef -->
            <!-- START_735df3d2d78874ca4d1287d565f2d109 -->
            <h2 id="personnagePagination">Récupère l'ensemble des personnages avec pagination</h2>
            <hr>
            <h3>HTTP Request</h3>
            <p><code>GET api/personnages/paginate/{pagination}</code></p>
            <p>$pagination par défault à comme valeur 15</p>
            <blockquote>
                <p>Example request:</p>
            </blockquote>
            <pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/personnages/paginate/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
            <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/personnages/paginate/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
            <blockquote>
                <p>Example response (401):</p>
            </blockquote>
            <pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>

            <!-- END_735df3d2d78874ca4d1287d565f2d109 -->
            <!-- START_3d0535518f14e9504549de61301ddee8 -->
            <h2 id="personnageNom">Permet de récupérer les personnages via le nom</h2>
            <hr>
            <h3>HTTP Request</h3>
            <p><code>GET api/personnages/{name}</code></p>
            <blockquote>
                <p>Example request:</p>
            </blockquote>
            <pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/personnages/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
            <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/personnages/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
            <blockquote>
                <p>Example response (401):</p>
            </blockquote>
            <pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
            <!-- END_3d0535518f14e9504549de61301ddee8 -->
            <!-- START_129fa617725f71aeceb83754d1f2fb2d -->
            <h2 id="planete">Retourne l'ensemble des planètes</h2>
            <hr>
            <h3>HTTP Request</h3>
            <p><code>GET api/planetes</code></p>
            <blockquote>
                <p>Example request:</p>
            </blockquote>
            <pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/planetes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
            <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/planetes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
            <blockquote>
                <p>Example response (401):</p>
            </blockquote>
            <pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
            <!-- END_129fa617725f71aeceb83754d1f2fb2d -->
            <!-- START_0173da3cd9876acf45da964bccd2a5e2 -->
            <h2 id="planeteNom">Permet de récupérer les planètes via le nom</h2>
            <hr>
            <h3>HTTP Request</h3>
            <p><code>GET api/planetes/{planetes}</code></p>
            <blockquote>
                <p>Example request:</p>
            </blockquote>
            <pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/planetes/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
            <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/planetes/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
            <blockquote>
                <p>Example response (401):</p>
            </blockquote>
            <pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
            <!-- END_0173da3cd9876acf45da964bccd2a5e2 -->
        </div>
    </div>
</div>
@endsection
