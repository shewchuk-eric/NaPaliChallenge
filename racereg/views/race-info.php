<?php $pageTitle = "Details About Race Schedule And Logistics || Race Information";
      $pageName = 'info';
      $alt = 'image of canoes and competitors before race';
      $hero = selectHero($pageName, $alt, 1920, 280);
      include_once 'views/header.php'; ?>

<section id='mainContent'>
    <h1>Everything You Need To Know</h1>
<?php if(isset($message)) {echo $message;} ?>
    <h2>General Information</h2>
    <p><em>COST:</em><br>ENTRY FEES: (PER CREW) - PAY ONLINE DURING REGISTRATION<br>
        <ul>
            <li>Na Opio crews - $0 (other fees may still apply: escort boat, canoe rental, shuttle, etc.)</li>
            <li>All other crews - $600</li>
        </ul>
    </p>
    <p><em>TOWING: (PER CANOE)</em>
        <ul>
            <li>Nawiliwili Harbor to Hanalei Bay (race start) then from Kiki'aola Harbor (race end) to Nawiliwili Harbor - $150</li>
        </ul>
    </p>
    <p><em>SHUTTLE: (PER PERSON)</em>
        <ul>
            <li>$30 One-way or Round-trip (Pick-up to race start & race finish to drop-off) [subject to change].</li>
        </ul>
    </p>
    <p>*Towing & Shuttle fees (if applicable) will be invoiced once registration is submitted. These items will remain pending until payment is received. If payment is not received within 5 days, these items will be cancelled.</p>
    <p><em>COURSE:</em><br><a href="https://www.google.com/maps/place/Hanalei+Bay/@22.2072817,-159.5173878,3309m/data=!3m2!1e3!4b1!4m6!3m5!1s0x7c06fa94b9ee0563:0xd6a3af0fd27553bf!8m2!3d22.2090776!4d-159.5067583!16zL20vMGY5NXBj" target="_blank">HANALEI BAY</a> TO <a href="https://www.google.com/maps/place/Kikiaola+Small+Boat+Harbor/@21.9592912,-159.694689,829m/data=!3m2!1e3!4b1!4m6!3m5!1s0x7c07a9eab1aaf28b:0x4e0bdeef70ec7d2b!8m2!3d21.9592862!4d-159.6921141!16s%2Fg%2F1v1slfl_" target="_blank">KIKIAOLA SMALL BOAT HARBOR</a>. THE RACE BEGINS IN FRONT OF THE PAVILION.  TEAMS WILL HEAD NORTH OUT OF THE BAY AND TURN WEST TO MAKE THE 37 MILE JOURNEY DOWN SOME OF THE MOST BEAUTIFUL COASTLINE IN THE WORLD.</p>
    <p><em>DIVISIONS:</em><br>NA OPIO – REG SPEC, UNLIMITED<br>UNLIMITED – OPEN, 40, 50+<br>OPEN 18-39<br>MASTERS 40-49<br>SENIOR MASTERS 50-54<br>GOLDEN MASTERS 55-59<br>GRAND MASTERS 60+</p>
    <p><em>AWARDS/LUNCH</em><br>Lunch will be provided to race participants at the finish – awards ceremony to take place approximately ½ hr after the last crew finishes</p>
    <p><em>SHIPPING & TRAILERING INFORMATION:</em><br>If you are shipping a canoe, it must arrive to Kaua’i no later than <span class="alert">Tuesday, August 6th, 2024</span>. Canoes arriving after this date will not make it to the race start in time. Shipping fees must be prepaid by the shipper. We will not pick up canoes that have not been paid for. BILL OF LADING MUST INCLUDE NAME OF CANOE BEING SHIPPED. *See diagram*</p>
    <blockquote>Ship canoes to: (SHIPPER TO PAY SHIPPING FEES)<br>Peter Chow<br>c/o: Kaua’i Outrigger Association<br>P.O. Box 662014<br>Lihue, HI 96766<br>(808)651-7298<br>napalichallenge@gmail.com</blockquote>

    <!-- INSERT IMAGE OF SHIPPING MANIFEST HERE -->
    <p>If you need trailering to the start or back to the Harbor, you must indicate so on your registration. Trailering is $150 from the harbor to the start of the race and then from the finish back to the harbor. *Unless indicated otherwise; canoes will be shipped back COD to the same person who sent it.</p>
    <p><em>SHUTTLE:</em><br><span class="alert">IF YOUR CREW NEEDS SHUTTLE SERVICES, YOU MUST INDICATE SO ON YOUR REGISTRATION FORM. WE WILL NEED TO KNOW WHERE YOU ARE STAYING, SIZE OF YOUR PARTY, AND IF YOU NEED A ROUND-TRIP OR ONE-WAY RIDE. SHUTTLE STOPS, ROUTES, AND TIMES ARE DETERMINED BASED ON NUMBER OF PEOPLE AND LOCATIONS. THIS INFORMATION WILL BE UPDATED PERIODICALLY AS WE MOVE FORWARD – YOU CAN CHECK FOR UPDATES ON KOAPADDLER.ORG</span></p>

    <h2>Race Logistics</h2>
    <p><em>CANOE & ESCORT NUMBERS:</em><br>All canoes must have a race number placed on the front right and left of the canoe. Escort boats must display the same race number in a visible area above the water line. Decals will be assigned at registration on Friday. Do not attempt to place numbers on the vessel when it is wet.</p>
    <p>*Escort boats must check in over the radio on the event operations channel 74 between 6:45a-7:15a the morning of the race.</p>
    <p><em>CANOE RENTAL:</em><br>If you need assistance in renting a canoe, you must indicate so on your registration. All rental fees are payable directly to the club you are renting from. While clubs will do their best to accommodate you, specific canoe types are not guaranteed. If you are renting a canoe – Trailering fees are included in your rental price. <span class="alert">Available canoes will be first-come so plan ahead!</span></p>
    <p><em>COURSE INFORMATION:</em><br>View Course information/map here: <a href="https://www.google.com/maps/d/u/0/edit?mid=11BzQYfQRY5wPQWi0t7yCq8E-bAdL81tf&usp=sharing" target="_blank">Na Pali Challenge</a></p>
    <p><em>STARTS: (CREWS TO START AS NOTED BELOW)</em><br>RACE START WILL BE MARKED BY OFFICIAL BOATS.<br>7:30 NA OPIO AND 60+ START (KANE STARTS)<br>8:00AM OPEN, MASTERS 40-49, SENIOR MASTERS 50-54, GOLDEN MASTERS 55-59 (WAHINE STARTS)<br>8:30AM NA OPIO UNLIMITED, UNLIMITED OPEN, 40 AND 50+ UNLIMITED (KANE STARTS)</p>
    <p><em>CHANGES:</em><br>Officials will make an announcement over the radio every 30 minutes indicating that the water change window has opened. This window will close after 5 minutes by way of radio announcement. Any crews making water changes outside of this time will be assessed a 10 minute time penalty.<br>Approximately one (1) mile before the finish, a buoy will mark the last change area. Any crews making water changes after this marker (regardless of the change window being open) will be assessed a 10 minutes time penalty.</p>
    <p><em>FINISH:</em><br>The Race Finish is outside of Kikiaola Small Boat Harbor. All canoes must pass between the official timing boat and the course finish marker. Canoes that do not pass between the finish marker and the timing boat will not receive a time and will be listed as “DNF” (Did Not Finish).</p>
    <h2>Time Penalties/Escort Rules</h2>
    <ol>
        <li>Any water changes outside of the change window (as announced by officials every 30 minutes) will result in a 10-minute time penalty.</li>
        <li>Any water changes after the “Last Change” marker at the finish will result in a 10-minute time penalty.</li>
        <li>All canoes will pass between the buoy and official timing boat at the finish.  Canoes that finish outside of these markers will not receive a time and will be marked as DNF.</li>
        <li>Escort boats will stay with their paddlers at all times unless otherwise instructed by Officials.</li>
        <li>Every crew must have an escort boat to participate.</li>
        <li>Your escort boat must have mounted VHF radios. (HANDHELDS are okay as backup)</li>
        <li>Escort boats are required to check in with race officials between 6:45a-7:15a on event operations channel 74</li>
        <li>Escort boats will at no time block or cause wake to a canoe.</li>
    </ol>
    <h3><a href="https://www.webscorer.com/racedetails?raceid=324341" target="_blank">2023 RACE RESULTS</a></h3>
    <h3><a href="https://www.webscorer.com/race?raceid=286316" target="_blank">2022 RACE RESULTS</a></h3>
    <p>*Any of this information is subject to change without notice. The latest information will be available on koapaddler.org. Contact napalichallenge@gmail.com with any questions. Our registration team will get back to you as soon as possible.</p>


<section id='mainContent'>
<?php include_once 'footer.php'; ?>  <!-- 'footer.php' has the closing </body> element -->