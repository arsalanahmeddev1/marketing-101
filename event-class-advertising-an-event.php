<?php include "include/head.php"; ?>

<body>
    <?php include "include/header2.php"; ?>
    <main>
        <div class="container m-container">
            <div class="row pt-30 pb-30">
                <div class="col-md-12">
                    <form action="">
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <label for="" class="f-13 f-arial text-green f-700">posting title</label>
                                <input type="text" class="input-field f-500 w-100 ">
                            </div>
                            <div class="col-md-5">
                                <label for="" class="f-13 f-arial text-black f-700">
                                    city or neighborhood</label>
                                <input type="text" class="input-field f-500 w-100 border-black ">
                            </div>
                            <div class="col-md-1 flex-grow-1 ">
                                <label for="" class="f-13 f-arial text-green f-700">
                                    ZIP code</label>
                                <input type="text" class="input-field f-500">
                            </div>
                            <div class="col-md-12 mt-4">
                                <label for="" class="f-13 f-arial text-green f-700">
                                    description</label>
                                <textarea name="" id="" cols="30" rows="10" class="input-field"></textarea>
                                <fieldset class="mt-4">
                                    <legend class="legendtext text-black f-14 mb-0">
                                        posting details</legend>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="" class="f-13 f-arial text-green f-700">venue</label>
                                            <input type="text" class="input-field f-500 w-100 border-black ">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="f-13 f-arial text-green f-700">event start date</label>
                                            <input type="text" class="input-field f-500 w-100" placeholder='select date'>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="" class="f-13 f-arial text-green f-700">event duration</label>
                                            <select class="form-select select-field border-gray" aria-label="Default select example">
                                                <option selected="">-</option>
                                                <option value="1">new</option>
                                                <option value="2">like new</option>
                                                <option value="3">excellent</option>
                                                <option value="4">good</option>
                                                <option value="5">fair</option>
                                                <option value="6">salvage</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <fieldset class="mt-4">
                                                <legend class="legendtext text-black f-14 mb-0 w-259">
                                                    event features (choose up to *three*)</legend>
                                                <div class="row justify-content-between ">
                                                    <div class="col-md-2">
                                                        <div class="d-flex align-items-center gap-2 ">
                                                            <input type="checkbox" id="check1" class="">
                                                            <label for="check1">art/film</label>
                                                        </div>
                                                        <div class="d-flex align-items-center gap-2 ">
                                                            <input type="checkbox" id="check1" class="">
                                                            <label for="check1">fest/fair</label>
                                                        </div>
                                                        <div class="d-flex align-items-center gap-2 ">
                                                            <input type="checkbox" id="check1" class="">
                                                            <label for="check1">literary</label>
                                                        </div>
                                                        <div class="d-flex align-items-center gap-2 ">
                                                            <input type="checkbox" id="check1" class="">
                                                            <label for="check1">sustainability</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="d-flex align-items-center gap-2 ">
                                                            <input type="checkbox" id="check1" class="">
                                                            <label for="check1">career</label>
                                                        </div>
                                                        <div class="d-flex align-items-center gap-2 ">
                                                            <input type="checkbox" id="check1" class="">
                                                            <label for="check1">fitness/health</label>
                                                        </div>
                                                        <div class="d-flex align-items-center gap-2 ">
                                                            <input type="checkbox" id="check1" class="">
                                                            <label for="check1">music</label>
                                                        </div>
                                                        <div class="d-flex align-items-center gap-2 ">
                                                            <input type="checkbox" id="check1" class="">
                                                            <label for="check1">tech</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="d-flex align-items-center gap-2 ">
                                                            <input type="checkbox" id="check1" class="">
                                                            <label for="check1">charitable</label>
                                                        </div>
                                                        <div class="d-flex align-items-center gap-2 ">
                                                            <input type="checkbox" id="check1" class="">
                                                            <label for="check1">food/drink</label>
                                                        </div>
                                                        <div class="d-flex align-items-center gap-2 ">
                                                            <input type="checkbox" id="check1" class="">
                                                            <label for="check1">outdoor</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="d-flex align-items-center gap-2 ">
                                                            <input type="checkbox" id="check1" class="">
                                                            <label for="check1">
                                                                competition</label>
                                                        </div>
                                                        <div class="d-flex align-items-center gap-2 ">
                                                            <input type="checkbox" id="check1" class="">
                                                            <label for="check1">free</label>
                                                        </div>
                                                        <div class="d-flex align-items-center gap-2 ">
                                                            <input type="checkbox" id="check1" class="">
                                                            <label for="check1">
                                                                sale</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="d-flex align-items-center gap-2 ">
                                                            <input type="checkbox" id="check1" class="">
                                                            <label for="check1">dance</label>
                                                        </div>
                                                        <div class="d-flex align-items-center gap-2 ">
                                                            <input type="checkbox" id="check1" class="">
                                                            <label for="check1">kid friendly</label>
                                                        </div>
                                                        <div class="d-flex align-items-center gap-2 ">
                                                            <input type="checkbox" id="check1" class="">
                                                            <label for="check1">singles</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <!-- <div class="col-md-2">
                                            <input type="checkbox" class="">
                                        </div> -->
                                    </div>
                                </fieldset>
                                <fieldset class="mt-4">
                                    <legend class="legendtext text-black f-14 mb-0 w-90">contact info</legend>
                                    <div class="d-flex justify-content-between ">
                                        <div>
                                            <label for="fname" class="f-arial text-black ">example@example.com</label>
                                            <div>
                                                <label for="fname" class="f-arial text-black f-13 f-700">email privacy
                                                    options <a href="javascript:;" class="text-decoration-underline ">[?]</a></label>
                                            </div>
                                            <ul class="radios-list ps-0">
                                                <li class="d-flex gap-2 mb-0">
                                                    <input type="radio" id="radio3" name="location">
                                                    <label for="radio3" class="f-arial">CL mail relay (recommended)</label>
                                                </li>
                                                <li class="d-flex gap-2 mb-0">
                                                    <input type="radio" id="radio4" name="location">
                                                    <label for="radio4" class="f-arial">no replies to this email</label>
                                                </li>
                                            </ul>
                                        </div>
                                        <fieldset class="mt-4 max-670">
                                            <legend class="legendtext text-black f-14 mb-0 w-80">phone/text</legend>
                                            <div>
                                                <input type="checkbox" id="check1" class="show-phone-btn">
                                                <label for="check1" class="f-arial">show my phone number</label>
                                                <input type="checkbox" id="check2" class="show-phone-field" disabled>
                                                <label for="check2" class="f-arial show-phone-label light-gray ">phone
                                                    calls OK</label>
                                                <input type="checkbox" id="check3" class="show-phone-field" disabled>
                                                <label for="check3" class="f-arial show-phone-label light-gray">text/sms
                                                    OK</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="input1" class="f-arial light-gray f-700 f-13">phone
                                                            number</label>
                                                        <input type="text" class="w-100 m-0 gray-500 show-phone-field input-bg-white" id="input1" disabled>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="input2" class="f-arial light-gray f-700 f-13 ">extension</label>
                                                        <input type="text" class=" m-0 gray-500 w-100 show-phone-field input-bg-white" id="input2" disabled>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="input3" class="f-arial light-gray w-50 f-700 f-13">contact
                                                            name</label>
                                                        <input type="text" class="w-100 m-0 gray-500 show-phone-field input-bg-white" id="input3" disabled>
                                                    </div>
                                                    <p class="alert-text ml-12 d-none mt-3">
                                                        ignore texts requesting your login or credit card.
                                                    </p>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </fieldset>
                                <fieldset class="mt-4">
                                    <legend class="legendtext text-black f-14 mb-0 w-90">location info</legend>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="" class="f-13 f-arial text-green f-700">street</label>
                                            <input type="text" class="input-field f-500 w-100 ">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="f-13 f-arial text-black f-700">cross street</label>
                                            <input type="text" class="input-field f-500 w-100 border-black ">
                                        </div>
                                        <div class="col-md-4  ">
                                            <label for="" class="f-13 f-arial text-green f-700">city</label>
                                            <input type="text" class="input-field f-500">
                                        </div>
                                    </div>
                                </fieldset>
                                <input type="checkbox" id="checkbox8">
                                <label for="checkbox8" class="f-arial mt-3">
                                    ok for others to contact you about other services, products or commercial
                                    interests</label>
                                <div class='d-flex justify-content-end '>
                                    <button class="secondry-btn">continue</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </main>
    <script src="./assets/js/main.js"></script>
</body>