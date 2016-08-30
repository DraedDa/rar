<div id="menu">
	<ul>
		@if(Auth::check())
			<li><a href="{{ url('auth/logout' )}}">Déconnexion</a></li>
		@else
			<li><a class="{{ Request::is('auth/login') ? 'active' : '' }}" href="{{ url('auth/login' )}}">Connexion</a></li>
			<li><a class="{{ Request::is('auth/register') ? 'active' : '' }}" href="{{ url('auth/register' )}}">Inscription</a></li>
		@endif
		<li><a class="{{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Terrains</a></li>
		<li><a class="{{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Accueil</a></li>
		
		{{-- <li><a href="/RAR/contact">Contact</a></li>
		<li><a href="/RAR/regles">Nos règles</a></li>
		<li><a href="/RAR/inscriptionPartie">Inscription Parties</a></li> --}}
		
	</ul>
</div>