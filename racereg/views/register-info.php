<?php $pageTitle = "How To Register For The Na Pali Challenge";
      $pageName = 'reg';
      $description = "Find all the information you need in order to register to participate in the Na Pali Challenge outrigger race.";
      $alt = 'Beginning of unlimited class race';
      $hero = selectHero($pageName, $alt);
      include_once 'views/header.php'; ?>

<section id='mainContent'>
    <h1>How To Register For The Race</h1>
<?php if(isset($message)) {echo $message;} ?>

<h2>Section 1 – Registration</h2>
    <p>Registration for the 2024 Na Pali Challenge opens on July 1st. Please read through all registration requirements before starting your registration as the process has changed from previous years.</p>
        <ul>
            <li>Paddler Information – Names, DOBs, and HCRA ID numbers for all 12 crew members.</li>
                <ul>
                    <li>All paddlers must be valid in <a href="https://hcrapaddler.com/" target="_blank">HCRAPaddler.</a> Check with your home association Race Secretary on validation procedures.</li>
                    <li>You should indicate if shuttle services are needed.</li>
                </ul>
            <li>Canoe information – name and color or indicate you need to borrow a canoe.</li>
                <ul>
                    <li>KOA will make every effort to have canoes available to rent to off island crews, but may not be able to meet the demand. Please plan accordingly. If you need to ship a canoe, please see <a href="index.php?action=docs">shipping information</a></li>
                </ul>
            <li>Escort Boat information – Escort boat name, HA#, Captain name, and HCRA Escort Form.</li>
                <ul>
                    <li>All escort boats must complete the <a href="https://forms.gle/xeGSRbno9EvHJS3k9" target="_blank">HCRA Escort Registration</a> online.</li>
                    <li>The Escort boat owner and captain (if different) will need to complete and sign an HCRA Waiver and upload that and a copy of the vessel registration to the online form.</li>
                    <li>There is a $100 fee – this will provide insurance for any KOA/HCRA sanctioned race (not just Na Pali) for one calendar year.</li>
                    <li>Once completed, you will receive PDF confirmation of your submission. You will need to upload this PDF to your Na Pali registration.</li>
                    <li>OR provide proof of insurance with CGL limits of $1,000,000.</li>
                    <li>Any changes to escort boats/escort information must be made no later than 24 hours prior to the start of the race.</li>
                </ul>
            </ul>
        <p>Online Registration closes Saturday 8/3 at 5PM<br>All fees due by Friday 8/9 at 5PM</p>
        <p>In-person registration will be at <a href="https://www.google.com/maps/place/Napali+Brewing+Co./@22.0520735,-159.336377,17z/data=!3m1!4b1!4m6!3m5!1s0x7c06e1d3843769a3:0x12fe340ef236f755!8m2!3d22.0520735!4d-159.3338021!16s%2Fg%2F11kpk64v7w?entry=ttu" target="_blank">Na Pali Brewing Company</a> in Wailua from 10am to 2pm on Friday the 9th.  Signs or a KOA representative will direct you to the meeting area inside the brewery.</p>
        <p>A MANDATORY coaches meeting will be held on Friday the 9th at 5pm at the <a href="https://www.google.com/maps/place/Napali+Brewing+Co./@22.0520735,-159.336377,17z/data=!3m1!4b1!4m6!3m5!1s0x7c06e1d3843769a3:0x12fe340ef236f755!8m2!3d22.0520735!4d-159.3338021!16s%2Fg%2F11kpk64v7w?entry=ttu" target="_blank">Na Pali Brewing Company</a> in Wailua.  The meeting will be held in the same room as the registration/check-in.</p>


</section>
<?php include_once 'footer.php'; ?>  <!-- 'footer.php' has the closing </body> element -->