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
						<li><a href="{{ route('rsvp') }}" class="button fit scrolly">R S V P</a></li>
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
			<section class="wrapper style3 container special" id="photos">

				<header class="major">
					<h2>check out some <strong>sweet pics</strong></h2>
				</header>

				<div class="row">
					<div class="6u 12u(narrower)">

						<section>
							<a href="#" class="image featured"><img src="images/photos/house_square_beach.jpg" alt="" /></a>
							<p>The back of the house opens down a hill to the beach. There are many stairs. I might get down there once with some assistance if we are allowed to have a fire down there and decide it's worth the trouble.</p>
						</section>

					</div>
					<div class="6u 12u(narrower)">

						<section>
							<a href="#" class="image featured"><img src="images/photos/house_square_billiards.jpg" alt="" /></a>
							<p>They say it's a billiards table and state it's quite nice so be careful not to do it harm. So if anyone is keen on posh pool, that's available ;)</p>
						</section>

					</div>
				</div>
				<div class="row">
					<div class="6u 12u(narrower)">

						<section>
							<a href="#" class="image featured"><img src="images/photos/house_square_bed1.jpg" alt="" /></a>
							<p>I don't know which bedroom this is, but they all have en suite full bathrooms. I'll be claiming one of the ones on the main (stairs free) floor.</p>
						</section>

					</div>
					<div class="6u 12u(narrower)">

						<section>
							<a href="#" class="image featured"><img src="images/photos/house_square_bed2.jpg" alt="" /></a>
							<p>This is probably the "master" bedroom as it has its own balcony with a gorgeous view. It appears to be above the main floor which means it is outside of Margaret-space and therefore up for grabs.</p>
						</section>

					</div>
				</div>

				<div class="row">
					<div class="6u 12u(narrower)">

						<section>
							<a href="#" class="image featured"><img src="images/photos/house_square_bed3.jpg" alt="" /></a>
							<p>Another lovely bedroom, possibly on the main floor, and thus possibly the one I will lay claim to.</p>
						</section>

					</div>
					<div class="6u 12u(narrower)">

						<section>
							<a href="#" class="image featured"><img src="images/photos/house_square_steam.jpg" alt="" /></a>
							<p>Apparently the house has a "steam room" which looks very spa-ready.</p>
						</section>

					</div>
				</div>

				<div class="row">
					<div class="6u 12u(narrower)">

						<section>
							<a href="#" class="image featured"><img src="images/photos/house_square_binoculers.jpg" alt="" /></a>
							<p>The whole house seems to be built to maximize light and views.</p>
						</section>

					</div>
					<div class="6u 12u(narrower)">

						<section>
							<a href="#" class="image featured"><img src="images/photos/house_square_deck_view.jpg" alt="" /></a>
							<p>So if you like looking at nature (which I do), this should be a nice place to hang out.</p>
						</section>

					</div>
				</div>

				<div class="row">
					<div class="6u 12u(narrower)">

						<section>
							<a href="#" class="image featured"><img src="images/photos/house_square_dining.jpg" alt="" /></a>
							<p>The kitchen / dining / living areas look to all be connected, which should be lovely for shared meals and chats.</p>
						</section>

					</div>
					<div class="6u 12u(narrower)">

						<section>
							<a href="#" class="image featured"><img src="images/photos/house_square_dining2.jpg" alt="" /></a>
							<p>There are a ton of windows and skylights on the main floor which will let us maximize enjoyment of the limited fall daylight.</p>
						</section>

					</div>
				</div>

				<div class="row">
					<div class="6u 12u(narrower)">

						<section>
							<a href="#" class="image featured"><img src="images/photos/house_square_doorway.jpg" alt="" /></a>
							<p>This appears to be a better shot of the view from the master balcony from the previous pic.</p>
						</section>

					</div>
					<div class="6u 12u(narrower)">

						<section>
							<a href="#" class="image featured"><img src="images/photos/house_square_fireplace.jpg" alt="" /></a>
							<p>With a two sided fireplace between the kitchen / dining and living room we should be able to manage smores even without a beach bonfire.</p>
						</section>

					</div>
				</div>

				<div class="row">
					<div class="6u 12u(narrower)">

						<section>
							<a href="#" class="image featured"><img src="images/photos/house_square_hottub.jpg" alt="" /></a>
							<p>I hope you all understand my feelings regarding floating in hot water.</p>
						</section>

					</div>
					<div class="6u 12u(narrower)">

						<section>
							<a href="#" class="image featured"><img src="images/photos/house_square_kitchen.jpg" alt="" /></a>
							<p>The kitchen with all the fantastic counter space and two ovens and massive fridge / freezer is filling me with joyful food-love anticipation.</p>
						</section>

					</div>
				</div>

				<div class="row">
					<div class="6u 12u(narrower)">

						<section>
							<a href="#" class="image featured"><img src="images/photos/house_square_livingroom.jpg" alt="" /></a>
							<p>The living room looks to have a ton of super comfy seating.</p>
						</section>

					</div>
					<div class="6u 12u(narrower)">

						<section>
							<a href="#" class="image featured"><img src="images/photos/house_square_livingroom_view.jpg" alt="" /></a>
							<p>And views. Have I mentioned views?</p>
						</section>

					</div>
				</div>

				<div class="row">
					<div class="6u 12u(narrower)">

						<section>
							<a href="#" class="image featured"><img src="images/photos/house_square_outdoors.jpg" alt="" /></a>
							<p>Moar views.</p>
						</section>

					</div>
					<div class="6u 12u(narrower)">

						<section>
							<a href="#" class="image featured"><img src="images/photos/house_square_stairs.jpg" alt="" /></a>
							<p>And the side of the house I will not be venturing down without ample motivation and help ;)</p>
						</section>

					</div>
				</div>
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
					<li><a href="{{ route('rsvp') }}" class="button">R S V P</a></li>
				</ul>
			</footer>

		</section>
@endsection