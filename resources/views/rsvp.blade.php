@extends('layouts.default')

@section('body')
		<!-- Banner -->
		<section id="banner">

			<!--
                ".inner" is set up as an inline-block so it automatically expands
                in both directions to fit whatever's inside it. This means it won't
                automatically wrap lines, so be sure to use line breaks where
                appropriate (<br />).
            -->
			<div class="inner">

				<header>
					<h2>OLDFEST</h2>
				</header>
				<p><strong>You're Invited</strong>
					<br />
					October 26 - 29
					<br />
					in <a href="http://html5up.net">Vancouver, BC</a>.</p>
				<footer>
					<ul class="buttons vertical">
						<li><a href="{{ route('index') }}" class="button fit scrolly">Main Page</a></li>
					</ul>
				</footer>

			</div>

		</section>

		<!-- Main -->
		<article id="main">

			<header class="special container">
				<span class="icon fa-birthday-cake"></span>
			</header>

			<!-- Three -->
			<section class="wrapper style3 container special">

				<header class="major">
					<h2 id="rsvp"><strong>R S V P</strong></h2>
				</header>
				<p>Please indicate if you're coming out, if you're bringing a significant other who I totally already know and think is awesome, and when you plan on arriving / departing. You can change these values later if your plans change.</p>
				{!! Form::open(['route' => 'rsvp']) !!}
				<div class="row">
					<div class="4u 12u(narrower)">
						{!! Form::label('rsvp', 'Will You Be Coming?') !!}
					</div>
					<div class="4u 12u(narrower)">
						{!! Form::checkbox('rsvp', true, $user->rsvp) !!}
					</div>
				</div>
				<div class="row">
					<div class="4u 12u(narrower)">
						{!! Form::label('rsvp', 'Will You Be Bringing Someone?') !!}
					</div>
					<div class="4u 12u(narrower)">
						{!! Form::checkbox('partner', true, $user->partner) !!}
					</div>
				</div>
				<div class="row">
					<div class="4u 12u(narrower)">
						{!! Form::label('arriving', 'When will you arrive?') !!}
					</div>
					<div class="4u 12u(narrower)">
						{!! Form::date('arriving', $user->arriving) !!}
					</div>
				</div>
				<div class="row">
					<div class="4u 12u(narrower)">
						{!! Form::label('departing', 'When will you depart?') !!}
					</div>
					<div class="4u 12u(narrower)">
						{!! Form::date('departing', $user->departing) !!}
					</div>
				</div>
				<br/>
				{!! Form::submit('Submit Form!') !!}
				{!! Form::close() !!}
			</section>

		</article>

		<!-- CTA -->
		<section id="cta">

			<header>
				<h2>Are you <strong>excited</strong>?</h2>
				<p>Me too! Please, let me know when/if you'll be joining us, and throw down some cash on the event budget if you have it to spare <3</p>
			</header>
			<footer>
				<ul class="buttons">
					<li><a href="https://www.paypal.me/deadlugosi" class="button special" target="_blank">Contribute $$$</a></li>
					<li><a href="{{ route('index') }}" class="button">Main Page</a></li>
				</ul>
			</footer>

		</section>
@endsection