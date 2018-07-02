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
						<li><a href="{{ route('rsvp').'#rsvp' }}" class="button fit scrolly">R S V P</a></li>
					</ul>
				</footer>

			</div>

		</section>

		<!-- Main -->
		<article id="main">

			<header class="special container">
				<span class="icon fa-birthday-cake"></span>
				<h2>I've decided to start <strong>celebrating</strong> birthdays.
					<br />
					Which means enjoying time with friends.</h2>
				<p>The best gift you have to offer is <strong>your company</strong>, and I'm hoping you'll share that with me this year.
					<br />
					If you can't make it, that's <strong>ok</strong> too.
					There will be future invitations, and I will be delighted whenever we manage to find time to coexist.
					<br />
					Please, <a href="{{ route('rsvp').'#rsvp' }}">RSVP</a> and optionally throw down some <a href="https://www.paypal.me/deadlugosi" target="_blank">cash for the festivities</a> if it's not a hardship. I hope to see you there!</p>
			</header>

			<!-- Two -->
			<section class="wrapper style1 container special">
				<div class="row">
					<div class="4u 12u(narrower)">

						<section>
							<span class="icon featured fa-gift"></span>
							<header>
								<h3>There will be Food</h3>
							</header>
							<p>I love to cook and bake, and the place we'll be staying in has a big lovely kitchen, so there will definitely be some of that. If you would also like to contribute a cooked meal or dessert, lmk! Gibsons, a town a mile away, has lovely fresh fish eateries, bakeries, a coffee roaster, and a craft brewery.</p>
						</section>

					</div>
					<div class="4u 12u(narrower)">

						<section>
							<span class="icon featured fa-gift"></span>
							<header>
								<h3>Also Chats</h3>
							</header>
							<p>The big winner from the feedback form was hanging out and not bothering with scheduling outings, which is a totally lovely chill way to enjoy friend times, so that lack of agenda is the agenda. Folks are welcome to wander off on their own adventures if so inclined.</p>
						</section>

					</div>
					<div class="4u 12u(narrower)">

						<section>
							<span class="icon featured fa-gift"></span>
							<header>
								<h3>Potentially Activities</h3>
							</header>
							<p>There is a hot tub, a BBQ, and a billiards table. I will also bring at least one group game, and am seriously considering creating some karaoke tracks from my favorite 90s lesbian indie rock group... and I guess maybe other options. You are also welcome to bring and/or suggest group activities.</p>
						</section>

					</div>
				</div>
			</section>

			<!-- Three -->
			<section class="wrapper style3 container special">

				<header class="major">
					<h2>be tempted by <strong>awesome details</strong></h2>
				</header>

				<div class="row">
					<div class="6u 12u(narrower)">

						<section>
							<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
							<header>
								<h3>Comfy Accommodations</h3>
							</header>
							<p>In addition to large comfortable shared spaces, the house offers five lovely bedrooms with full ensuite bathrooms. Many of the bedrooms have beautiful views and a few have private balconies. The bedrooms include a king, two queens, one full, and one room containing bunk beds and a twin.</p>
						</section>

					</div>
					<div class="6u 12u(narrower)">

						<section>
							<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
							<header>
								<h3>Getting There</h3>
							</header>
							<p>You can fly into Vancouver or take the train up from Portland or Seattle. <a href="https://www.bcferries.com/schedules/mainland/vasc-current.php?scheduleSelect=sch10091802.html" target="_blank">This ferry</a> gets you from north Vancouver to the peninsula coast where the house is located. I will probably be road tripping up across two days, arriving October 26th in the afternoon and can bring two passengers if there's interest.</p>
						</section>

					</div>
				</div>
				<div class="row">
					<div class="6u 12u(narrower)">

						<section>
							<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
							<header>
								<h3>Refreshments</h3>
							</header>
							<p>In addition to stocking the house with ingredients for ample home cooked meals and treats, I will be supplying coffee, tea, beer, wine, spirits, and herbal refreshments. You are welcome to make requests and/or bring your own favorites.</p>
						</section>

					</div>
					<div class="6u 12u(narrower)">

						<section>
							<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
							<header>
								<h3>Outdoorsy Things</h3>
							</header>
							<p>The house is right on the beach and also the head of a forest trail for hikers. We might figure out a way down to the beach for fire and smores. It's likely going to be a bit on the dark and cold side, so keep that in mind when packing.</p>
						</section>

					</div>
				</div>

				<footer class="major">
					<ul class="buttons">
						<li><a href="{{ route('photos').'#photos' }}" class="button">See More</a></li>
					</ul>
				</footer>

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
					<li><a href="{{ route('rsvp').'#rsvp' }}" class="button">R S V P</a></li>
				</ul>
			</footer>
		</section>
@endsection