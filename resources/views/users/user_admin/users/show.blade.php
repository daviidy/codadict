@extends('layouts.admin')
@section('title', 'Liste des projets')
@section('page_title', 'Liste des utilisateurs')
@section('link_title', 'Liste des Utilisateurs')

@section('content')


    <style media="screen">
    :root {
  font-size: 14px;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}



.contact-card {
  width: 35em;
  height:100%;
  padding-bottom: 15px;
  margin: 0 auto;
  font-size: 1em;
  line-height: 1.5em;
  text-align: center;
  background-color: #ffffff;
  border-radius: 1em;
  box-shadow: 0 0 2em rgba(0, 0, 0, 0.125);
  overflow: hidden;
  transition: 0.125s ease-in-out;
  -webkit-transition: 0.125s ease-in-out;
  -moz-transition: 0.125s ease-in-out;
}
/*.contact-card:hover {
  transform: translateY(-0.5em);
}*/
.contact-card__header-image {
  width: 100%;
  height: 10em;
  padding-top: 2em;
  background-image: url("https://images.unsplash.com/photo-1525498128493-380d1990a112?ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80");
  background-size: cover;
  background-color: #fafafa;
}
.contact-card__avatar {
  width: 10em;
  height: 10em;
  margin: auto;
  background-image: url("/storage/images/users/{{Auth::user()->image}}");
  background-size: cover;
  background-color: #eeeeee;
  border-radius: 100%;
}
.contact-card__name {
  margin-top: 3em;
  margin-bottom: 0.5em;
  font-size: 1.125rem;
}
.contact-card__link {
  display: block;
  padding: 0.5em 1em;
  text-decoration: none;
}
.contact-card__link a {
  color: #424242;
  text-decoration: none;
}
.contact-card__link:hover {
  background-color: #fafafa;
}

    </style>


    <div class="contact-card">
  <div class="contact-card__header-image">
    <div class="contact-card__avatar"></div>
  </div>
  <p class="contact-card__name">{{Auth::user()->name}}</p>
  <ul>
    <li class="contact-card__link contact-card__link--email">
      <a title="Email Callum Brown" href="mailto:"><span>Email :</span> {{Auth::user()->email}}</a>
    </li>
    <li class="contact-card__link contact-card__link--mobile">
      <a title="Call Callum Brown" href="tel:"><span>Entrepeise :</span>{{Auth::user()->company}}</a>
    </li>
    <li class="contact-card__link contact-card__link--mobile">
      <a title="Call Callum Brown" href="tel:"><span>Pays :</span>{{Auth::user()->country}}</a>
    </li>
    <li class="contact-card__link contact-card__link--mobile">
      <a title="Call Callum Brown" href="tel:"><span>Téléphone :</span>{{Auth::user()->phone}}</a>
    </li>
    @foreach($user->projects as $project)
    <li class="contact-card__link contact-card__link--mobile">
      <a title="Call Callum Brown" href="tel:"><span>Projets :</span>{{Auth::user()->projrct}}</a>
    </li>
    @endforeach

  </ul>

</div>
  @endsection
