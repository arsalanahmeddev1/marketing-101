<?php include "./include/head.php"; ?>

<body>
    <?php include "./include/header2.php"; ?>
    <main>
        <div class="container m-container">
            <div class="row pt-30 pb-30">
                <div class="col-md-12">
                    <p class="f-arial">
                        <b>please choose a category:</b>
                    </p>
                    <form action="" id="redirectForm">
                        <ul class="radios-list">
                            <li class="d-flex gap-2 align-items-baseline ">
                                <input type="radio" id="radio1" value="form" class="location" name="location">
                                <label for="radio1" class="f-arial">computer gigs ($10) <h3 class='f-arial f-12 dark-gray'>(small web design, tech
                                        support, etc projects)</h3></label>
                            </li>
                            <li class="d-flex gap-2 align-items-baseline">
                                <input type="radio" id="radio2" value="form" name="location" class="location">
                                <label for="radio2" class="f-arial">creative gigs ($10) <h3 class='f-arial f-12 dark-gray'>(small design, photography,
                                        illustration projects)</h3></label>
                            </li>
                            <li class="d-flex gap-2 align-items-baseline">
                                <input type="radio" id="radio3" value="form" name="location" class="location">
                                <label for="radio3" class="f-arial">crew gigs ($10) <h3 class='f-arial f-12 dark-gray'>
                                        (low budget film/theatre
                                        opportunities EXCEPT acting, which go under "talent")</h3></label>
                            </li>
                            <li class="d-flex gap-2 align-items-baseline">
                                <input type="radio" id="radio4" value="form" name="location" class="location">
                                <label for="radio4" class="f-arial">
                                    domestic gigs ($10) <h3 class='f-arial f-12 dark-gray'>(cleaning, babysitting, home
                                        care, tutoring, personal
                                        training, etc)</h3></label>
                            </li>
                            <li class="d-flex gap-2 align-items-baseline">
                                <input type="radio" id="radio5" value="form" name="location" class="location">
                                <label for="radio5" class="f-arial">event gigs ($10) <h3 class='f-arial f-12 dark-gray'>
                                        (promotions, catering, wedding
                                        photography, etc)</h3></label>
                            </li>
                            <li class="d-flex gap-2 align-items-baseline">
                                <input type="radio" id="radio6" value="form" name="location" class="location">
                                <label for="radio6" class="f-arial">
                                    labor gigs ($10) <h3 class='f-arial f-12 dark-gray'>(includes moving & hauling)</h3>
                                </label>
                            </li>
                            <li class="d-flex gap-2 align-items-baseline">
                                <input type="radio" id="radio7" value="form" name="location" class="location">
                                <label for="radio7" class="f-arial">
                                    talent gigs ($10)<h3 class='f-arial f-12 dark-gray'>(acting, modeling, music, dance,
                                        etc)</h3></label>
                            </li>
                            <li class="d-flex gap-2 align-items-baseline">
                                <input type="radio" id="radio8" value="form" name="location" class="location">
                                <label for="radio8" class="f-arial">
                                    writing gigs ($10)<h3 class='f-arial f-12 dark-gray'>(includes editing &
                                        translation)</h3></label>
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