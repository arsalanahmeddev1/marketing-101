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
                            <li class="d-flex gap-2 align-items-baseline ">
                                <input type="radio" id="radio1" name="location" class="location" value='posting'>
                                <label for="radio1" class="f-arial">
                                    bypass this step <h3 class="f-arial f-12">(your posting may not show up in by-location searches)</h3>
                                </label>
                            </li>
                            <li class="d-flex gap-2">
                                <input type="radio" id="radio2" name="location" class="location" value='posting'>
                                <label for="radio2" class="f-arial">
                                    aptos</label>
                            </li>
                            <li class="d-flex gap-2">
                                <input type="radio" id="radio3" name="location" class="location" value='posting'>
                                <label for="radio3" class="f-arial">


                                    boulder creek</label>
                            </li>
                            <li class="d-flex gap-2">
                                <input type="radio" id="radio4" name="location" class="location" value='posting'>
                                <label for="radio4" class="f-arial">

                                    capitola</label>
                            </li>
                            <li class="d-flex gap-2">
                                <input type="radio" id="radio5" name="location" class="location" value='posting'>
                                <label for="radio5" class="f-arial">


                                    santa cruz</label>
                            </li>
                            <li class="d-flex gap-2">
                                <input type="radio" id="radio6" name="location" class="location" value='posting'>
                                <label for="radio6" class="f-arial">

                                    scotts valley</label>
                            </li>
                            <li class="d-flex gap-2">
                                <input type="radio" id="radio7" name="location" class="location" value='posting'>
                                <label for="radio7" class="f-arial">

                                    soquel</label>
                            </li>
                            <li class="d-flex gap-2 align-items-baseline ">
                                <input type="radio" id="radio8" name="location" class="location" value='posting'>
                                <label for="radio8" class="f-arial">
                                    watsonville
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