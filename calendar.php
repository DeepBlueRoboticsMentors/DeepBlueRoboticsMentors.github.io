<!--INCLUDE NAVIGATION BAR ON ALL PAGES-->
<!--The following PHP code pastes all content within head.php in its place-->
<!--head.php contains the opening body tag, so everything that follows will be within the wsite body-->
<?php 
		$header_referer = __FILE__;
		include ("head.php");?>

<!--BEGIN PAGE CONTENT-->
<!--#jumbotron is the div that contains each page's title and subtitle text-->
<div id="jumbotron">
	<h2 class="main-font header-font">
			CALENDAR
		</h2>
	<h4 class="main-font sub-font">
			What's happening? Find out here!
		</h4>
</div>

<!--#split-wrap creates a horizontal divider between preceding and following content-->
<div id="split-wrap">
</div>
<div class="content-wrap">
	<p class="body-font">
	NOTE: To view the calendar, you must be signed in to a Google account that is a member of the team's parent, mentor/volunteer, or student Google groups. If you are a member of one of those groups but need your Google acccount added to it, please see the footer of any recent message sent to the group for instructions. 
	</p>
	<p class="body-font">
	If the calendar does not display below, try using <a href="https://calendar.google.com/calendar/embed?src=1ammtst2iopqspnr6k93lsjhes%40group.calendar.google.com&ctz=America%2FLos_Angeles">this link</a> to view it. If that doesn't work and you are a Safari user, you might need to use Chrome or Firefox.
	</p>
	<div class="googleCalendar">
		<iframe src="https://calendar.google.com/calendar/embed?title=Deep%20Blue%20Robotics%3A%20Upcoming%20Events&amp;height=800&amp;wkst=1&amp;src=1ammtst2iopqspnr6k93lsjhes%40group.calendar.google.com&amp;color=%235F6B02&amp;ctz=America%2FLos_Angeles" width="1500" height="800" frameborder="0" scrolling="no"></iframe>
	</div>
</div>

<!--#split-wrap creates a horizontal divider between preceding and following content-->
<div id="split-wrap"></div>
<!--END PAGE CONTENT-->

<!--INCLUDE FOOTER ON ALL PAGES-->
<!--The following PHP code pastes all content within foot.php in its place-->
<!--foot.php contains the closing body tag, so everything that precedes will be within the wsite body-->
<?php 
		$header_referer = __FILE__; 
    include ("foot.php");?>
