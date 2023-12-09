<?php include "include/head.php"; ?>

<body>
    <?php include "include/header2.php"; ?>
    <main>
        <div class="container m-container">
            <div class="row pt-30 pb-30">
                <div class="col-md-12">
                    <p class="f-arial">
                        <b>which of these applies?</b>
                    </p>
                    <form action="" id="redirectForm">
                        <ul class="radios-list">
                            <li class="d-flex gap-2">
                                <input type="radio" id="radio1" name="location" value='gigs-hire' class="location">
                                <label for="radio1" class="f-arial">I want to hire someone</label>
                            </li>
                            <li class="d-flex gap-2">
                                <input type="radio" id="radio2" name="location" value='gigs-services' class="location">
                                <label for="radio2" class="f-arial">I have a service to offer</label>
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