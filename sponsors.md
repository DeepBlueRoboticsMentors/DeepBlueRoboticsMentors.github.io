---
corporate:
  title: Corporate Sponsors
  image: images/DSC02293.JPG
  content: Thank you very much for your support!
hammerhead_sharks:
  title: Hammerhead Sharks
  amount: $500-$749
  sponsors:
    - title: OnShape
      image: /images/onshape_logo_full.png
      href: https://www.onshape.com/en/
      content: Onshape is the only Software-as-a-Service (SaaS) product development
        platform that combines CAD, built-in PDM, real-time collaboration tools,
        and business analytics.
sponsor_us:
  content: Building a robot is expensive. You can help too!
  link_text: SPONSOR US!
  link_href: sponsor-us
layout: default
permalink: /sponsors
title: Our Sponsors
subtitle: We cannot thank you enough!
short_name: Sponsors
great_white:
  title: Great White
  amount: $2,500+
  sponsors:
    - title: Sequoia Union High School District
      image: images/SUHSD.png
      href: http://www.seq.org/
      content: The Sequoia Union High School District annually serves more than 8900
        9th to 12th grade students, including Carlmont High School.
    - title: Gene Haas Foundation
      image: /images/image.png
      href: https://ghaasfoundation.org/content/ghf/en/home.html
      content: The Gene Haas Foundation was established in 1999, by Gene Haas, founder
        and owner of Haas Automation, Inc., to support the needs of the local
        community, through grants to such local charities as the Boys and Girls
        Clubs, Food Share, Rescue Mission, and others.
tiger_sharks:
  title: Tiger Sharks
  amount: $750-$2499
  sponsors:
    - title: Intuitive Foundation
      image: /images/intuitive.jpg
      href: http://www.intuitive-foundation.org/
      content: The Intuitive Foundation has partnered with FIRST, awarding grants to
        high school robotic teams both in the Bay Area and other parts of the
        US. Over the years, Intuitive has inspired hundreds of students to
        engage in STEM activities.
    - title: FIRST NorCal
      href: https://www.firstinspires.org/robotics/frc
      content: "*FIRST*® inspires young people to be science and technology leaders
        and innovators by engaging them in exciting mentor-based programs that
        build science, engineering, and technology skills, that inspire
        innovation, and that foster well-rounded life capabilities including
        self-confidence, communication, and leadership."
      image: /images/first-horz-rgb.png
reef_sharks:
  title: Reef Sharks
  amount: $250-$499
  sponsors: []
---
<div class="parallax-window" data-parallax="scroll" data-image-src="{{page.corporate.image}}" data-position="center center" data-speed="0.7"></div>

<div class="content-wrap secondary-background">
	<h3 class="main-font title-font white-font">
		{{page.corporate.title}}
	</h3>
	<div class="body-font white-font">
		{{page.corporate.content | markdownify}}
	</div>
</div>

<div class="content-wrap">
	<div id="label">
		<h3 class="main-font subtitle-font center-font">
			{{page.great_white.title}}
		</h3>
		<p class="body-font center-font">
			{{page.great_white.amount}}
		</p>
	</div>
	<div id="sponsors">
    {% for s in page.great_white.sponsors %}
		<div class="sponsor">
			<div class="logo">
				<img src="{{s.image}}">
			</div>
			<div class="description"><a href="{{s.href}}" target='_blank'>{{s.content | markdownify}}</a></div>
		</div>
    {% endfor %}
	</div>


	<div id="label">
		<h3 class="main-font subtitle-font center-font">
			{{page.tiger_sharks.title}}
		</h3>
		<p class="body-font center-font">
			{{page.tiger_sharks.amount}}
		</p>
	</div>
	<div class="list-wrap">
    <div class="list-row">
      {% for s in page.tiger_sharks.sponsors %}
			<div class="list-chunk sponsor-width">
				<img id="sponsor-logo" src="{{s.image}}" />
				<div id="sponsor-text">
					<div class="body-font">
						{{s.content | markdownify}}
					</div>
				</div>
			</div>

      {% comment %}Start a new row after the third sponsor for aesthetic reasons. Change as necessary as sponsors change.{% endcomment %}
      {% assign index = forloop.index %}
      {% if index == 3 %}
    </div>
    <div class="list-row">
      {% endif %}

      {% endfor %}
    </div>
	</div>

	<div id="label">
		<h3 class="main-font subtitle-font center-font">
			{{page.hammerhead_sharks.title}}
		</h3>
		<p class="body-font center-font">
			{{page.hammerhead_sharks.amount}}
		</p>
	</div>
	<div class="list-wrap">
    <div class="list-row">
      {% for s in page.hammerhead_sharks.sponsors %}
			<div class="list-chunk sponsor-width">
				<img id="sponsor-logo" src="{{s.image}}" />
				<div id="sponsor-text">
					<div class="body-font">
						{{s.content | markdownify}}
					</div>
				</div>
			</div>

      {% comment %}Start a new row after sponsors 2, 4, and 6 for aesthetic reasons. Change as necessary as sponsors change.{% endcomment %}
      {% assign index = forloop.index %}
      {% if index == 2 or index == 4 or index == 6 %}
    </div>
    <div class="list-row">
      {% endif %}
      
      {% endfor %}
    </div>
	</div>

	<div id="label">
		<h3 class="main-font subtitle-font center-font">
			{{page.reef_sharks.title}}
		</h3>
		<p class="body-font center-font">
			{{page.reef_sharks.amount}}
		</p>
	</div>
	<div class="list-wrap">
    <div class="list-row">
      {% for s in page.reef_sharks.sponsors %}
			<div class="list-chunk sponsor-width">
				<img id="sponsor-logo" src="{{s.image}}" />
				<div id="sponsor-text">
					<div class="body-font">
						{{s.content | markdownify}}
					</div>
				</div>
			</div>

      {% comment %}Start a new row after sponsors 2, 4, and 6 for aesthetic reasons. Change as necessary as sponsors change.{% endcomment %}
      {% assign index = forloop.index %}
      {% if index == 2 or index == 4 or index == 6 %}
    </div>
    <div class="list-row">
      {% endif %}
      
      {% endfor %}
    </div>
	</div>
</div>

<div id="redirect-wrap">
	<div id="redirect-text">
		<h3 class="sub-font">
			{{page.sponsor_us.content|markdownify}}
		</h3>
	</div>
	<div id="redirect-btn">
		<a class="wsite-button wsite-button-large" href="{{page.sponsor_us.link_href}}">
				<span class="wsite-button-inner"><strong>{{page.sponsor_us.link_text}}</strong></span>
			</a>
	</div>
</div>

<!--#split-wrap creates a horizontal divider between preceding and following content-->
<div id="split-wrap"></div>
<!--END PAGE CONTENT-->
