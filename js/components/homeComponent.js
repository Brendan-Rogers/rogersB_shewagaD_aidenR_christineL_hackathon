export default {
    template: `
    <div>
	    <header>
			<h1 class="pageTitle">Ontario Summer</h1>
		</header>


			<section class="landingArea">
				<video src="videos/mainCoup.mp4" class="promoVid"></video>
				<router-link :to="{name: 'signup'}"><button class="bookNow">Book your trip</button></router-link>

				<h2 class="welcomeText">Welcome to the Ontario Summer</h2>
				
				<div class="imgWrap">
					<img src="images/top_image_1.png" alt="placeholder" class="ontarioImg">
					<img src="images/top_image_2.png" alt="placeholder" class="ontarioImg">
					<img src="images/top_image_3.png" alt="placeholder" class="ontarioImg hidden">
				</div>

				<div class="flex">
					<h4 class="explore">Explore Ontario</h4>
				</div>

				<p class="promoText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex dolores hic quibusdam fugit libero quaerat tempora ipsum recusandae! Cum voluptates culpa odit hic voluptatibus autem iure natus vel fuga!Ipsum omnis esse quo distinctio laudantium in vel reprehenderit doloribus dicta dolore illo, beatae.</p>
			</section>

			<section class="landmarks">
				
				<div class="landmark">
					<img src="images/main_1.png" alt="placeholder" class="landmarkImg">
					<h3 class="landmarkTitle">Niagara Falls</h3>
					<h4 class="landmarkSub">Natural Wonder of the World</h4>
					<p class="landmarkText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate id laborum, adipisci quibusdam nemo a voluptatum illum perspiciatis ipsam? Exercitationem repellendus consequuntur dicta sunt voluptates voluptas autem non consequatur quae?Minima blanditiis, ullam quae error laudantium facere illum ducimus aperiam laboriosam alias debitis ad explicabo, quos odit enim delectus, mollitia repudiandae officiis ex suscipit cum? Delectus accusantium quisquam voluptatibus cupiditate!</p>
					<div class="flex"><a class="explore">Explore Ontario</a></div>
				</div>

				<div class="landmark">
					<img src="images/main_2.png" alt="placeholder" class="landmarkImg">
					<h3 class="landmarkTitle">Niagara Falls</h3>
					<h4 class="landmarkSub">Natural Wonder of the World</h4>
					<p class="landmarkText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate id laborum, adipisci quibusdam nemo a voluptatum illum perspiciatis ipsam? Exercitationem repellendus consequuntur dicta sunt voluptates voluptas autem non consequatur quae?Minima blanditiis, ullam quae error laudantium facere illum ducimus aperiam laboriosam alias debitis ad explicabo, quos odit enim delectus, mollitia repudiandae officiis ex suscipit cum? Delectus accusantium quisquam voluptatibus cupiditate!</p>
					<div class="flex"><a class="explore">Explore Ontario</a></div>
				</div>

			</section>

			<section class="experience">

				<h3 class="expTitle">Experience</h3>
				<h4 class="lakes">The Great Lakes</h4>

				<div class="activity">
					<img src="images/experience_1.png" alt="placeholder" class="activityImg">
					<h3 class="activityTitle">Water Skiing</h3>
					<p class="activityDesc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam assumenda quae qui, nobis incidunt delectus consequuntur modi libero officia, esse cupiditate voluptatum a natus illum cum molestiae labore quam harum.</p>
					<a class="readMore">Read More</a>
				</div>

				<div class="activity">
					<img src="images/experience_2.png" alt="placeholder" class="activityImg">
					<h3 class="activityTitle">Water Skiing</h3>
					<p class="activityDesc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam assumenda quae qui, nobis incidunt delectus consequuntur modi libero officia, esse cupiditate voluptatum a natus illum cum molestiae labore quam harum.</p>
					<a class="readMore">Read More</a>
				</div>

				<div class="activity">
					<img src="images/experience_3.png" alt="placeholder" class="activityImg">
					<h3 class="activityTitle">Water Skiing</h3>
					<p class="activityDesc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam assumenda quae qui, nobis incidunt delectus consequuntur modi libero officia, esse cupiditate voluptatum a natus illum cum molestiae labore quam harum.</p>
					<a class="readMore">Read More</a>
				</div>

			</section>
		</div>
    `
}
