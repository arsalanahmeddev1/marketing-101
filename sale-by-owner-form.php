<?php include "include/head.php"; ?>

<body>
    <?php include "include/header2.php"; ?>
    <main>
        <div class="container m-container">
            <div class="row pt-30 pb-30">
                <div class="col-md-12">
                    <form action="">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <label for="" class="f-13 f-arial text-green f-700">posting title</label>
                                <input type="text" class="input-field f-500 w-100 ">
                            </div>
                            <div class="col-md-2">
                                <div class="position-relative">
                                    <label for="" class="f-13 f-arial text-black f-700  ">
                                        price</label>
                                    <span class="dollar-sign">$</span>
                                </div>
                                <input type="number" class="input-field f-500 w-100 border-black ps-3 ">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="f-13 f-arial text-black f-700">
                                    city or neighborhood</label>
                                <input type="text" class="input-field f-500 w-100 border-black ">
                            </div>
                            <div class="col-md-2 flex-grow-1 ">
                                <label for="" class="f-13 f-arial text-green f-700">

                                    ZIP code</label>
                                <input type="text" class="input-field f-500">
                            </div>
                            <div class="col-md-12 mt-4">
                                <label for="" class="f-13 f-arial text-green f-700">
                                    description</label>
                                <textarea name="" id="" cols="30" rows="10" class="input-field"></textarea>
                                <fieldset class="mt-4">
                                    <legend class="legendtext text-black f-14 mb-0">posting details</legend>
                                    <div class="row">


                                        <div class="col-md-4">
                                            <label for="" class="f-13 f-arial text-black f-700">
                                                make / manufacturer</label>
                                            <input type="text" class="input-field f-500 w-100 border-black ">
                                            <label for="" class="f-13 f-arial text-black f-700">
                                                model name / number</label>
                                            <input type="text" class="input-field f-500 w-100 border-black ">
                                            <label for="" class="f-13 f-arial text-black f-700">
                                                size / dimensions</label>
                                            <input type="text" placeholder="length x width x height" class="input-field f-500 w-100 border-black ">
                                        </div>
                                        <div class="col-md-4">
                                            <div>
                                                <label for="" class="f-13 f-arial text-black f-700">condition</label>
                                            </div>
                                            <select class="form-select select-field" aria-label="Default select example">
                                                <option selected>-</option>
                                                <option value="1">new</option>
                                                <option value="2">like new</option>
                                                <option value="3">excellent</option>
                                                <option value="4">good</option>
                                                <option value="5">fair</option>
                                                <option value="6">salvage</option>
                                            </select>
                                            <div>
                                                <label for="" class="f-13 f-arial text-green f-700">language of posting</label>
                                            </div>
                                            <select class="form-select select-field" aria-label="Default select example">
                                                <option selected>-</option>
                                                <option value="1">new</option>
                                                <option value="2">like new</option>
                                                <option value="3">excellent</option>
                                                <option value="4">good</option>
                                                <option value="5">fair</option>
                                                <option value="6">salvage</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <div>
                                                <input type="checkbox" id="check1">
                                                <label for="check1" class="f-arial">cryptocurrency ok</label>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="check2">
                                                <label for="check2" class="f-arial">
delivery available</label>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="check2">
                                                <label for="check2" class="f-arial">include "more ads by this user" link</label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <!-- <ul class="radios-list ps-0 mb-0">
                                    <li class="mb-0 max-w-100px">
                                        <input type="radio" id="radio1" name="location" class="" onchange="handleRadioChange('no-pay')">
                                        <label for="radio1" class="f-arial text-green">no pay</label>
                                    </li>
                                    <li class="mb-0 max-w-100px">
                                        <input type="radio" id="radio-pay" name="location" class="" onchange="handleRadioChange('pay')">
                                        <label for="radio-pay" id="pay-label-field" class="f-arial text-green">pay</label>
                                    </li>
                                </ul>
                                <label for="" class="light-gray f-arial f-600 f-13">compensation</label>
                                <input type="text" class="input-field border-black m-0 gray-500 f-arial" id='pay-input-field' disabled placeholder="describe compensation here (please be as detailed as possible)"> -->

                                <fieldset class="mt-4">
                                    <legend class="legendtext text-black f-14 mb-0 w-87">contact info</legend>
                                    <div class="d-flex justify-content-between ">
                                        <div>
                                            <label for="fname" class="f-arial text-black ">example@example.com</label>
                                            <h3 class="f-16 f-arial mb-0">replies use CL mail relay</h3>
                                            <a href="javascript:;">[?]</a>
                                        </div>
                                        <fieldset class="mt-4 max-730">
                                            <legend class="legendtext text-black f-14 mb-0 w-80">phone/text
                                            </legend>
                                            <div>
                                                <input type="checkbox" id="check1" class="show-phone-btn">
                                                <label for="check1" class="f-arial me-2">show my phone number</label>
                                                <input type="checkbox" id="check2" class="show-phone-field" disabled>
                                                <label for="check2" class="f-arial show-phone-label light-gray me-2">phone
                                                    calls OK</label>
                                                <input type="checkbox" id="check3" class="show-phone-field" disabled>
                                                <label for="check3" class="f-arial show-phone-label light-gray">text/sms
                                                    OK</label>
                                                <div class="row">
                                                    <div class="col-md-4">
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
                                                    <p class="alert-text ml-12 d-none mt-3 max-591">
                                                    ignore texts requesting your login or credit card. avoid scams
                                                    </p>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </fieldset>
                                <fieldset class="mt-4">
                                    <legend class="legendtext text-black f-14 mb-0 w-90">location info</legend>
                                    <input type="checkbox" id="check7" class="show-phone-btn2">
                                    <label for="check7" class="f-arial">show address</label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="input1" class="f-arial light-gray f-700 f-13">street</label>
                                            <input type="text" class="w-100 m-0 gray-500 show-phone-field2 input-bg-white" id="input1" disabled>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="input2" class="f-arial light-gray f-700 f-13 ">
                                                cross street</label>
                                            <input type="text" class=" m-0 gray-500 w-100 show-phone-field2 input-bg-white" id="input2" disabled>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="input3" class="f-arial light-gray w-50 f-700 f-13">
                                                city</label>
                                            <input type="text" class="w-100 m-0 gray-500 show-phone-field2 input-bg-white" id="input3" disabled>
                                        </div>
                                        <p class="alert-text ml-12 d-none mt-3">
                                            ignore texts requesting your login or credit card.
                                        </p>
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