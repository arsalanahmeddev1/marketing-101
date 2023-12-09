<?php include "include/head.php"; ?>

<body>
    <?php include "include/header2.php"; ?>
    <main>
        <div class="container m-container">
            <div class="row pt-30 pb-30">
                <div class="col-md-12">
                    <p class="f-arial">
                        <b>choose the location that fits best:</b>
                    </p>
                    <form action="" id="redirectForm">
                        <ul class="radios-list">
                            <li class="d-flex gap-2">
                                <input type="radio" id="radio1" value="san-francisco" class="location" name="location">
                                <label for="radio1" class="f-arial">city of san francisco</label>
                            </li>
                            <li class="d-flex gap-2">
                                <input type="radio" id="radio2" name="location" class="location" value='south-bay'>
                                <label for="radio2" class="f-arial">south bay area</label>
                            </li>
                            <li class="d-flex gap-2">
                                <input type="radio" id="radio3" name="location" class="location" value='east-bay-area'>
                                <label for="radio3" class="f-arial">east bay area</label>
                            </li>
                            <li class="d-flex gap-2">
                                <input type="radio" id="radio4" name="location" class="location" value='peninsula'>
                                <label for="radio4" class="f-arial">peninsula</label>
                            </li>
                            <li class="d-flex gap-2">
                                <input type="radio" id="radio5" name="location" class="location" value='north-bay-marin'>
                                <label for="radio5" class="f-arial">north bay / marin</label>
                            </li>
                            <li class="d-flex gap-2">
                                <input type="radio" id="radio6" name="location" class="location" value='santa-cruz-co'>
                                <label for="radio6" class="f-arial">santa cruz co</label>
                            </li>
                        </ul>
                        <p class="formnote f-arial">
                            <b>please note:</b>
                            your posting will also appear on the main <b>SF bay area</b> site.
                        </p>
                        <button class="secondry-btn f-arial">continue</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="./assets/js/main.js"></script>
</body>