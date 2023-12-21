<?php include "./include/head.php"; ?>

<body>
    <?php include "./include/header2.php"; ?>
    <main>
        <div class="container m-container">
            <div class="row pt-30 pb-30">
                <div class="col-md-12">
                    <p class="f-arial">
                        <b>which of these applies?</b>
                    </p>
                    <form action="" id="redirectForm">
                        <ul class="radios-list">
                            <li class="d-flex gap-2 align-items-baseline ">
                                <input type="radio" id="radio1"  class="location" name="location" value='event-class-category-first-form'>
                                <label for="radio1" class="f-arial">I'm selling a small number of tickets to an event</label>
                            </li>
                            <li class="d-flex gap-2 align-items-baseline">
                                <input type="radio" id="radio2"  name="location" class="location" value='event-class-business-category'>
                                <label for="radio2" class="f-arial">My business is having a sale</label>
                            </li>
                            <li class="d-flex gap-2 align-items-baseline">
                                <input type="radio" id="radio3"  name="location" class="location" value='gigs-services-form'>
                                <label for="radio3" class="f-arial">I'm offering an event-related service (rentals, transportation, etc.)</label>
                            </li>
                            <li class="d-flex gap-2 align-items-baseline">
                                <input type="radio" id="radio4"  name="location" class="location" value='event-class-advertising-garage'>
                                <label for="radio4" class="f-arial">
                                I'm advertising a garage sale, estate sale, moving sale, flea market, or other non-corporate sale</label>
                            </li>
                            <li class="d-flex gap-2 align-items-baseline">
                                <input type="radio" id="radio5"  name="location" class="location" value='event-class-advertising-a-class'>
                                <label for="radio5" class="f-arial">I'm advertising a class or training session</label>
                            </li>
                            <li class="d-flex gap-2 align-items-baseline">
                                <input type="radio" id="radio6"  name="location" class="location" value='event-class-advertising-an-event'>
                                <label for="radio6" class="f-arial">
                                I'm advertising an event, other than the above
                                </label>
                            </li>
                        </ul>
                        <button class="secondry-btn f-arial">continue</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="./assets/js/main.js"></script>
</body>