

/*** cnvyr.min.js.gz ***/
$(document).ready(function(){$("#signup").click(function(){$("#logincontainer").slideUp("slow",function(){$("#signupcontainer").slideDown("slow")})});$("#signin").click(function(){$("#signupcontainer").slideUp("slow",function(){$("#logincontainer").slideDown("slow")})})});$(function(){$(document).on("click","a.page-scroll",function(b){var a=$(this);$("html, body").stop().animate({scrollTop:$(a.attr("href")).offset().top-70},1500,"easeInOutExpo");b.preventDefault()})});function loader_button(){setTimeout(function(){document.getElementById("enter").style.visibility="visible";document.getElementById("audio").style.display="none"},1000);console.clear()}function hideloader(){document.getElementById("loader").style.visibility="visible";document.getElementById("rest").style.visibility="hidden";document.getElementById("rest").style.display="none";var a=1000;setTimeout(function(){document.getElementById("loader").style.visibility="hidden";document.getElementById("loader").style.display="none";document.getElementById("rest").style.visibility="visible";document.getElementById("rest").style.display="block"},a);console.clear()}function fun1(a,b){document.getElementById("data").style.display="none";document.getElementById("mymodal_p").style.display="none";document.getElementById("mymodal_e").style.display="none";if(a=="Login"){document.getElementById("mymodal_a").style.display="none";document.getElementById("mymodal_s").style.display="none";document.getElementById("mymodal_c").style.display="none";document.getElementById("mymodal_l").style.display="block"}if(a=="About"){document.getElementById("mymodal_a").style.display="block";document.getElementById("mymodal_s").style.display="none";document.getElementById("mymodal_c").style.display="none";document.getElementById("mymodal_l").style.display="none"}else{if(a=="Sponsors"){document.getElementById("mymodal_a").style.display="none";document.getElementById("mymodal_s").style.display="block";document.getElementById("mymodal_c").style.display="none";document.getElementById("mymodal_l").style.display="none"}else{if(a=="Contact"){document.getElementById("mymodal_a").style.display="none";document.getElementById("mymodal_s").style.display="none";document.getElementById("mymodal_c").style.display="block";document.getElementById("mymodal_l").style.display="none"}}}$("li").removeClass("active_menu");$("#"+b).addClass("active_menu")}function fun2(g){var h,f,k,j,i;document.getElementById("mymodal_a").style.display="none";document.getElementById("mymodal_s").style.display="none";document.getElementById("mymodal_c").style.display="none";document.getElementById("mymodal_l").style.display="none";document.getElementById("mymodal_p").style.display="none";document.getElementById("mymodal_e").style.display="none";document.getElementById("data").style.display="none";document.getElementById("explore").style.visibility="visible";if(g=="Technos"){h="It is named after the reason behind the survival of an ancient human race in the 21st century, Technology.";f="It is a blue giant star and at the peak of its life cycle, emitting huge amounts of T-rays or Techno-radiation, as called by the inhabitants of the surrounding planets. These rays provide all the initial raw materials required by the occupants of the planets.";k="Technos is the primary source of all advancements and development in the planetary system of Bits2Bytes. The life forms of this planetary system are heavily dependent on this star.";j="N/A";document.getElementById("explore").style.visibility="hidden"}else{if(g=="Lumin"){h="This planet is named after the unit of luminous flux, or intensity of light.";f="Terrestial Planet with a reflective surface.";k="The planet surface is made up of special crystals that are reflective. When first discovered, this planet was mistaken for a twin for the star Technos. But on further inspection, it was revealed for what it truly was, a uniquely bright planet.";j="The inhabitants, Luminites, here have evolved in vicinity of the reflective crystals on the surface and therefore are sharp eyed. The proximity to these crystals has boosted the natives’ IQ and therefore the prime income of the planet comes from the export of visionory (no pun intended) and ingenious projects and devices (right after the highly acclaimed tourism program Lumin has)."}else{if(g=="Sphinxite"){h="This red jewel of a planet was named after the mythical creature, Sphinx, from Greek mythology.";f="Terrestrial Desert planet.";k="Legend has it that this planet’s sands contain a secret to ultimate knowledge, if only one knows how to seek it. This desert planet is a chief destination for all kinds of travelers and archeologists; mostly for the lore around it. Many have tried multiple times to unlock this planet’s secrets, but in vain. Only a few have been rumored to come back successful and proceed to lead a life of peace and content.";j="As hinted by the name, the occupants of this planet are almost mythical in origin. They are distinguished by their lion like torso, eagle wings, quick wit and quicker reflexes. They are harmless until you actually encounter one. If you do, it is suggested you be prepared for a volley of riddles and questions. If you fail to answer them, they will gobble you faster than you can say “oh no!”. Just kidding. They really are harmless, and will escort you pleasantly to the nearest fast food chain."
}else{if(g=="Cybertron"){h="This planet derives its name from the home world of the sentient war robots, the Autobots and the decepticons.";f="Terrestrial planet with toxic fumes covering the entire surface of the planet.";k="This fully-automated planet works on Techno radiation. Or it used to. The inhabitants used an ingenious device to start the process of making sentient machines but the machines made by the machines caused enormous amounts of toxic fumes, rendering any life forms that depended on any kind of gas, lifeless. Although, that does not hinder the locals in any way, considering they’re all mechanical creatures with chips for brains (and one on their shoulder too if you ask me)";j="The indigenous species of this planet has been a topic for debate all over the galaxy and their origin still remains hidden. The reason behind this galaxy wide is the following question: “Which came first? The machines or the machines that made them?” this question was listed as the highest contributor to migraines among species holding a doctorate."}else{if(g=="Arcadia"){h="This fun loving planet was anointed as it was, after the arcades of old where a human sub-species, called millennials, gathered and socialized.";f="Gaseous (read: Gorgeous) dwarf planet with high amounts of dopamine and oxygen.";k="This devil of a planet is as dangerous as it is alluring. The prime cause of death for the inhabitants is death by happiness, and therefore the officials specialize in unattractive tourism, a first in all neighboring systems, to decrease mortality rate. This planet is all about the fun life. It comes equipped with a virtual shooting range, where you can participate with your friends to a deathmatch; a fully equipped race track, complete with sharp, drift-inducing turns, booster ramps and a useless traffic control system; and, for all the athletes out there, 16 Olympic-sized grounds that adapt to the sport being played (friendly reminder: to pick your jaw up off the floor).";j="The inhabitants here are mostly colonists from the surrounding planets feeding off of the money made by the booming betting industry."}else{if(g=="Ethos"){h="The origin of the name of this planet comes from the Greek (Earth language) word for “character” or “home of horses”, which, by sheer coincidence are ancestors of the prominent species of the planet.";f="Terrestrial Giant in a permanent state of light fog (made up of dust and water vapour)";k="This planet would never have been popularized if not for its fog. For this fog contains large amounts of Moranium (found nowhere else), which temporarily enhances communication and character, or so it is said. It is particularly difficult to prove this as anyone who comes back, has no memory of the place.";j="The inhabitants, Ethicians, having evolved with Moranium in their system, are extraordinary at communication with a strong moral stand on all motifs that drops in on the planet."}else{if(g=="Crypton"){h="Named after the once greatest, technologically advanced planet in the history of planets (may it rest in pieces), and a tomb.";f="Terrestrial giant protected by binary rings. No, literally, the rings are digital and are made up of dust and rock in the shape of 0s and 1s.";k="This planet is famous for its rings and its digital oceans. Like its rings, the oceans can hex any viewer present. That is to say, they are made up of a 16-characters and their respective combination. It is said that anyone who dares to sail these waters successfully, gains a plethora of knowledge on implementation of mathematical and logical reasoning along with the legendary art of debugging any known program.";j="The inhabitants are not much observed, as they never seem to leave the Hex Oceans and know better than to evolve out onto land. They are essential to the natural cycles of the planet and are occasionally seen in groups, competing between themselves and participating in reinforcing the binary rings."}else{if(g=="Imago"){h="Named after the human word “image” meaning impression, or representation of art.";f="Artistic terrestrial planet with faint rings.";k="The planet is a beautiful yellow hue caused by the scattering and absorption of all the other colours due to the atmosphere. This results in an almost permanent state of sunset all around the planet, broken only by orange flashes of gaseous (not harmful) explosions. It is the biggest tourist destination in the galaxy and rightly so, because it is populated with aesthetic mountains, ridges, seas and other landforms.";j="The inhabitants here are highly photogenic, extraordinary at capturing all available aspect to any object that attracts them, and follow a strict diet of indigenous grass and fruit, with an intense exercise regime. The ones who cannot keep up with it are taken care of by natural selection (a highly approved theory by ancient earth humans)."}else{if(g=="Orvillon"){h="Honoured in the name of the first human to ever fly, Orville Wright. (‘Nuf said) ";f="Gas giant with no surface whatsoever.";
k="Having no surface makes it next-to-impossible for anyone to have tea, but the ingenious locals specialize in next-to-impossible. They grow, cultivate and consume tea on clouds of dust and a unique element, Wilburite that solidifies only on contact with the Wrighton found on the skin of the locals. This has resulted in a lot of contest between the occupants of this planet which is very similar to the mythical human game of quidditch.";j="The inhabitants, literally, appearing out of thin air, evolved with wings and a knack for throwing themselves at the (non-existent) ground and missing. Their wings range from a wingspan of 10-300 meters (a human measuring unit)."}}}}}}}}}document.getElementById("mymodal_p").style.display="block";document.getElementById("planet_title").innerHTML=g;document.getElementById("p_name").innerHTML=h;document.getElementById("p_type").innerHTML=f;document.getElementById("p_chars").innerHTML=k;document.getElementById("p_inhab").innerHTML=j}function closem(){$("li").removeClass("active_menu");document.getElementById("data").style.display="block";document.getElementById("mymodal_a").style.display="none";document.getElementById("mymodal_s").style.display="none";document.getElementById("mymodal_c").style.display="none";document.getElementById("mymodal_l").style.display="none";document.getElementById("mymodal_p").style.display="none";document.getElementById("mymodal_e").style.display="none"}function planets_closem(){$("li").removeClass("active_menu");document.getElementById("mymodal_a").style.display="none";document.getElementById("mymodal_s").style.display="none";document.getElementById("mymodal_c").style.display="none";document.getElementById("mymodal_l").style.display="none";document.getElementById("mymodal_p").style.display="none";document.getElementById("mymodal_e").style.display="none";document.getElementById("data").style.display="block"}function plan(){$("li").removeClass("active_menu");document.getElementById("mymodal_a").style.display="none";document.getElementById("mymodal_s").style.display="none";document.getElementById("mymodal_c").style.display="none";document.getElementById("mymodal_l").style.display="none";document.getElementById("mymodal_p").style.display="none";document.getElementById("mymodal_e").style.display="none";document.getElementById("data").style.display="none";document.getElementById("rest").style.animation="blackout 0.8s forwards";document.getElementById("main_screen").style.display="none";setTimeout(function(){var a=document.getElementById("planet_title").innerHTML;if(a=="Lumin"){document.getElementById("planet2").style.display="none";document.getElementById("planet3").style.display="none";document.getElementById("planet4").style.display="none";document.getElementById("planet5").style.display="none";document.getElementById("planet6").style.display="none";document.getElementById("planet7").style.display="none";document.getElementById("planet8").style.display="none";document.getElementById("planet1").style.display="block";document.getElementById("planet1").style.backgroundImage="url(img/planets/Surface/1.jpg)";document.getElementById("planet1").style.backgroundSize="cover";document.getElementById("planet1").style.backgroundRepeat="no-repeat"}else{if(a=="Sphinxite"){document.getElementById("planet1").style.display="none";document.getElementById("planet3").style.display="none";document.getElementById("planet4").style.display="none";document.getElementById("planet5").style.display="none";document.getElementById("planet6").style.display="none";document.getElementById("planet7").style.display="none";document.getElementById("planet8").style.display="none";document.getElementById("planet2").style.display="block";document.getElementById("planet2").style.backgroundImage="url(img/planets/Surface/2.jpg)";document.getElementById("planet2").style.backgroundSize="cover";document.getElementById("planet2").style.backgroundRepeat="no-repeat"}else{if(a=="Cybertron"){document.getElementById("planet1").style.display="none";document.getElementById("planet2").style.display="none";document.getElementById("planet4").style.display="none";document.getElementById("planet5").style.display="none";document.getElementById("planet6").style.display="none";document.getElementById("planet7").style.display="none";document.getElementById("planet8").style.display="none";document.getElementById("planet3").style.display="block";document.getElementById("planet3").style.backgroundImage="url(img/planets/Surface/3.jpg)";document.getElementById("planet3").style.backgroundSize="cover";document.getElementById("planet3").style.backgroundRepeat="no-repeat"}else{if(a=="Arcadia"){document.getElementById("planet1").style.display="none";document.getElementById("planet2").style.display="none";document.getElementById("planet3").style.display="none";document.getElementById("planet5").style.display="none";document.getElementById("planet6").style.display="none";document.getElementById("planet7").style.display="none";document.getElementById("planet8").style.display="none";
document.getElementById("planet4").style.display="block";document.getElementById("planet4").style.backgroundImage="url(img/planets/Surface/4.jpg)";document.getElementById("planet4").style.backgroundSize="cover";document.getElementById("planet4").style.backgroundRepeat="no-repeat"}else{if(a=="Ethos"){document.getElementById("planet1").style.display="none";document.getElementById("planet2").style.display="none";document.getElementById("planet3").style.display="none";document.getElementById("planet4").style.display="none";document.getElementById("planet6").style.display="none";document.getElementById("planet7").style.display="none";document.getElementById("planet8").style.display="none";document.getElementById("planet5").style.display="block";document.getElementById("planet5").style.backgroundImage="url(img/planets/Surface/5.jpg)";document.getElementById("planet5").style.backgroundSize="cover";document.getElementById("planet5").style.backgroundRepeat="no-repeat"}else{if(a=="Crypton"){document.getElementById("planet1").style.display="none";document.getElementById("planet2").style.display="none";document.getElementById("planet3").style.display="none";document.getElementById("planet4").style.display="none";document.getElementById("planet5").style.display="none";document.getElementById("planet7").style.display="none";document.getElementById("planet8").style.display="none";document.getElementById("planet6").style.display="block";document.getElementById("planet6").style.backgroundImage="url(img/planets/Surface/6.jpg)";document.getElementById("planet6").style.backgroundSize="cover";document.getElementById("planet6").style.backgroundRepeat="no-repeat"}else{if(a=="Imago"){document.getElementById("planet1").style.display="none";document.getElementById("planet2").style.display="none";document.getElementById("planet3").style.display="none";document.getElementById("planet4").style.display="none";document.getElementById("planet5").style.display="none";document.getElementById("planet6").style.display="none";document.getElementById("planet8").style.display="none";document.getElementById("planet7").style.display="block";document.getElementById("planet7").style.backgroundImage="url(img/planets/Surface/7.jpg)";document.getElementById("planet7").style.backgroundSize="cover";document.getElementById("planet7").style.backgroundRepeat="no-repeat"}else{if(a=="Orvillon"){document.getElementById("planet1").style.display="none";document.getElementById("planet2").style.display="none";document.getElementById("planet3").style.display="none";document.getElementById("planet4").style.display="none";document.getElementById("planet5").style.display="none";document.getElementById("planet6").style.display="none";document.getElementById("planet7").style.display="none";document.getElementById("planet8").style.display="block";document.getElementById("planet8").style.backgroundImage="url(img/planets/Surface/8.jpg)";document.getElementById("planet8").style.backgroundSize="cover";document.getElementById("planet8").style.backgroundRepeat="no-repeat"}}}}}}}}document.getElementById("data").style.display="block";document.getElementById("rest").style.animation="whiteout 0.8s forwards"},2000)}function main(){$("li").removeClass("active_menu");document.getElementById("mymodal_a").style.display="none";document.getElementById("mymodal_s").style.display="none";document.getElementById("mymodal_c").style.display="none";document.getElementById("mymodal_l").style.display="none";document.getElementById("mymodal_p").style.display="none";document.getElementById("mymodal_e").style.display="none";var a=document.getElementById("main_screen").style.display;if(a=="none"){document.getElementById("data").style.display="none";document.getElementById("rest").style.animation="blackout 0.8s forwards";document.getElementById("planet1").style.display="none";document.getElementById("planet2").style.display="none";document.getElementById("planet3").style.display="none";document.getElementById("planet4").style.display="none";document.getElementById("planet5").style.display="none";document.getElementById("planet6").style.display="none";document.getElementById("planet7").style.display="none";document.getElementById("planet8").style.display="none";setTimeout(function(){document.getElementById("main_screen").style.display="block";document.getElementById("data").style.display="block";document.getElementById("rest").style.animation="whiteout 0.8s forwards"},2000)}else{document.getElementById("data").style.display="block"}};