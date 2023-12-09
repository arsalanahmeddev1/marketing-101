<?php include "include/head.php"; ?>

<body>
    <?php include "include/header2.php"; ?>
    <main>
        <div class="container m-container">
            <div class="row pt-30 pb-30">
                <div class="col-md-12">
                    <p class="f-arial">
                        <b>what type of posting is this:</b>
                        <span>(see <a href="./about-prohibited.php"
                                class="text-decoration-underline ">prohibited</a>)</span>
                    </p>
                    <form action="" id="redirectForm">
                        <ul class="radios-list">
                            <li class="d-flex gap-2 mb-4">
                                <input type="radio" id="radio1" name="location" class="location" value='gigs'>
                                <label for="radio1" class="f-arial">gig offered</label>
                            </li>
                            <li class="d-flex gap-2">
                                <input type="radio" id="radio2" name="location" value="sale-by-owner-category" class="location">
                                <label for="radio2" class="f-arial">for sale by owner</label>
                            </li>
                            <li class="d-flex gap-2">
                                <input type="radio" id="radio3" name="location" class="location" value="sale-by-dealer-category">
                                <label for="radio3" class="f-arial">for sale by dealer</label>
                            </li>
                            <li class="d-flex gap-2">
                                <input type="radio" id="radio4" name="location" class="location" value='wanted-by-owner-form'>
                                <label for="radio4" class="f-arial">wanted by owner</label>
                            </li>
                            <li class="d-flex gap-2 mb-4">
                                <input type="radio" id="radio5" name="location" class="location" value='wanted-by-owner-form'>
                                <label for="radio5" class="f-arial">wanted by dealer</label>
                            </li>
                            <li class="d-flex gap-2 mb-4">
                                <input type="radio" id="radio6" name="location" value="service-offered-category" class="location">
                                <label for="radio6" class="f-arial">service offered</label>
                            </li>
                            <li class="d-flex gap-2">
                                <input type="radio" id="radio7" name="location" class="location" value='event-class-category'>
                                <label for="radio7" class="f-arial">event / class</label>
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