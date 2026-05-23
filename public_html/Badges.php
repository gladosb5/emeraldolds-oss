<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

$id = (int)$_GET['id'];

if(!isset($id) || empty($id) || $id < 1){
	$home = true;
}else{
	$home = false;
}

?>
<div id="Body">
<div id="BadgesContainer" style="border: 1px solid #000">
	<div id="BadgesAndRankings" style="height: auto; overflow: auto;">
		<input type="hidden" name="AccordionExtender_ClientState" id="AccordionExtender_ClientState" value="0">
		<div class="">
			<h4 class="TopAccordionHeader">very epic badges</h4>
		</div>
		<div style="height: auto; overflow: auto; display: block;"><div style="display: block; height: auto; overflow: auto;">
			<div id="CommunityBadges">
				<div class="Legend">
					<ul class="BadgesList">
						<li id="epicperson">
							<h4>epic person</h4>
							<div>gladosb5 picks who is the very epic person and whoever gets this badge is very epic.
								<br>
								<br>
								<br>
								<br>
							</div>
						</li>
						<!-- <li id="SuperModerator">
							<h4>Super Moderator Badge</h4>
							<div>Users with this badge are super moderators. They have 
								special powers on the emeraldnews forum and are able to delete threads that 
								violate the Community Guidelines. They also have special powers on emeraldnews that allow them to approve or 
								disapprove images that other users upload. Rejected images are 
								immediately banished from the site. They are also able to ban users that violate the Community Guidelines
								off the site. This badge is granted by invitation only.</div>
								</li> -->
				</div>
				<!-- <div id="FeaturedBadge_Community">
					<h4>Builders Club</h4>
					<div class="FeaturedBadgeContent">
						<div class="FeaturedBadgeIcon"><img src="/images/Badges/BuildersClub-125x125.png" width="125" height="125" border="0"></div>
						<p>Members of the illustrious Builders Club display this badge 
							proudly. The Builders Club is a paid premium service. Members receive 
							several benefits: they get ten places on their account instead of one, 
							they earn a daily income of 15 emeraldnews, and they receive the exclusive Builders Club 
							construction hat. (Extra emeraldnews can be earned if you donate over $5)</p>
					</div>
				</div> -->
				<div style="clear:both;"></div>
			</div>
		</div></div>
		<!-- <div class="">
			<h4 class="AccordionHeader">Builder Badges</h4>
		</div>
		<div style="height: 0px; overflow: hidden; display: none;"><div style="display: block; height: auto; overflow: hidden;">
			<div id="VisitsBadges">
				<div class="Legend">
					<ul class="BadgesList">
						<li id="Homestead">
							<h4>Homestead Badge</h4>
							<div>The homestead badge is earned by having your personal 
								place visited 100 times. Players who achieve this have demonstrated 
								their ability to build cool things that other emeraldnewsians were interested
								enough in to check out. Get a jump-start on earning this reward by 
								inviting people to come visit your place.
							</div>
						</li>
						<li id="Bricksmith">
							<h4>Bricksmith Badge</h4>
							<div>The Bricksmith badge is earned by having a popular 
								personal place. Once your place has been visited 1000 times, you will 
								receive this award. emeraldnewsians with Bricksmith badges are accomplished 
								builders who were able to create a place that people wanted to explore a
								thousand times. They no doubt know a thing or two about putting bricks 
								together.
							</div>
						</li>
					</ul>
				</div>
				<div id="StatisticsRankingsPane_Visits">
				</div>
				<div style="clear:both;"></div>
			</div>
		</div></div> -->
		<!-- <div class="">
			<h4 class="AccordionHeader">Friendship Badges</h4>
		</div>
		<div style="height: 0px; overflow: hidden; display: none;"><div style="display: block; height: auto; overflow: hidden;">
			<div id="FriendshipBadges">
				<div class="Legend">
					<ul class="BadgesList">
						<li id="Friendship">
							<h4>Friendship Badge</h4>
							<div>This badge is given to players who have embraced the 
								emeraldnews community and have made at least 20 friends. People who have this
								badge are good people to know and can probably help you out if you are 
								having trouble.
							</div>
						</li>
						<li id="Inviter">
							<h4>Inviter Badge</h4>
							<div>emeraldnewsia is a vast uncharted realm, as large as the 
								imagination. Individuals who invite others to join in the effort of 
								mapping this mysterious region are honored in emeraldnewsian society. 
								Citizens who successfully recruit three or more fellow explorers via the
								Share emeraldnews with a Friend mechanism are awarded with this badge.
							</div>
						</li>
					</ul>
				</div>
				<div id="StatisticsRankingsPane_Friendship">
				</div>
				<div style="clear:both;"></div>
			</div>
		</div></div> -->
		<!-- <div class="">
			<h4 class="BottomAccordionHeader">Combat Badges</h4>
		</div>
		<div style="height: 0px; overflow: hidden; display: none;"><div style="display: block; height: auto; overflow: hidden;">
			<div id="CombatBadges">
				<div class="Legend">
					<ul class="BadgesList">
						<li id="CombatInitiation">
							<h4>Combat Initiation Badge</h4>
							<div>This badge is given to any player who has proven his or 
								her combat abilities by accumulating 10 victories in battle. Players who
								have this badge are not complete newbies and probably know how to 
								handle their weapons.
							</div>
						</li>
						<li id="Warrior">
							<h4>Warrior Badge</h4>
							<div>This badge is given to the warriors of emeraldnewsia, who have
								time and time again overwhelmed their foes in battle. To earn this 
								badge, you must rack up 100 knockouts. Anyone with this badge knows what
								to do in a fight!
							</div>
						</li>
						<li id="Bloxxer">
							<h4>Bloxxer Badge</h4>
							<div>Anyone who has earned this badge is a very dangerous 
								player indeed. Those emeraldnewsians who excel at combat can one day hope to 
								achieve this honor, the Bloxxer Badge. It is given to the warrior who 
								has bloxxed at least 250 enemies and who has tasted victory more times 
								than he or she has suffered defeat. Salute!
							</div>
						</li>
					</ul>
				</div>
				<div id="StatisticsRankingsPane_Combat">
				</div>
				<div style="clear:both;"></div>
			</div>
		</div></div> -->
		<!-- <div class="">
			<h4 class="BottomAccordionHeader">emeraldnews Badges</h4>
		</div>
		<div style="height: 0px; overflow: hidden; display: none;"><div style="display: block; height: auto; overflow: hidden;">
			<div id="emeraldnews">
				<div class="Legend">
					<ul class="BadgesList">
						<li id="Verified">
							<h4>Verification Badge</h4>
							<div>Members who have this badge are verified users of emeraldnews. They are able to access features of the site that are otherwise inaccessible to the general public. They also get a special little hat!
												<li id="Beta">
							<h4>Beta Tester Badge</h4>
							<div>Users with this badge are beta testers, meaning they have been around before this website was made public. They are honorable and should be treated with respect like every other user on emeraldnews. People who say they are beta testers that don't have this badge are lying.</div>
												<li id="ProfessionalHacker">
							<h4>Professional Hacker Badge</h4>
							<div>This badge is awarded to the hackers of emeraldnews. Be careful if you see a user with this badge, they might leak your information for just looking at them the wrong way...</div>
						</li>
					</ul>
							</div>
						</li>
					</ul>
				</div>
				<div id="StatisticsRankingsPane_emeraldnews">
				</div>
				<div style="clear:both;"></div>
			</div>
		</div></div> -->
</div>
<script> 
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.AccordionBehavior, {"ClientStateFieldID":"AccordionExtender_ClientState","FramesPerSecond":40,"id":"AccordionExtender"}, null, null, $get("BadgesAndRankings"));
}); 
</script>
				</div>
				
<?php
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php";
?>
<title>emeraldnews - Badges</title>


