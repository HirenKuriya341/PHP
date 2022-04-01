<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <div class="container">
                    <h1 class="display-1">Forms</h1>
                    <hr><br>
                    <hr>
                    <h4>Simple Form</h4>
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <h4>Form Text</h4>
                        <p>Form text below inputs can be styled with .form-text. If a block-level element will be
                            used, a top margin
                            is added for easy spacing from the inputs above.</p>
                        <label for="inputPassword5" class="form-label">Password</label>
                        <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                        <div id="passwordHelpBlock" class="form-text">
                            Your password must be 8-20 characters long, contain letters and numbers, and must not
                            contain spaces,
                            special characters, or emoji.
                        </div>
                        <p>input in col-auto, we can use in col-sm-* up to 12</p>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label for="inputPassword6" class="col-form-label">Password</label>
                            </div>
                            <div class="col-auto">
                                <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                            </div>
                            <div class="col-auto">
                                <span id="passwordHelpInline" class="form-text">
                                    Must be 8-20 characters long.
                                </span>
                            </div>
                        </div>
                        <p>Disable input</p>
                        <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>
                    </form>
                    <hr>
                    <p>Whole Disabled Form</p>
                    <p>Add the disabled attribute to a <code>&lt;fieldset&gt;</code> to disable all the controls
                        within. Browsers
                        treat all native form controls (<code>&lt;input&gt;</code>, <code>&lt;select&gt;</code>, and
                        <code>&lt;button&gt;</code> elements) inside a <code>&lt;fieldset disabled&gt;</code> as
                        disabled,
                        preventing both keyboard and mouse
                        interactions on them.
                    </p>
                    <form>
                        <fieldset disabled>
                            <legend>Disabled fieldset example</legend>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Disabled input</label>
                                <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                            </div>
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">Disabled select menu</label>
                                <select id="disabledSelect" class="form-select">
                                    <option>Disabled select</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                                    <label class="form-check-label" for="disabledFieldsetCheck">
                                        Can't check this
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </fieldset>
                    </form>
                    <hr>
                    <hr>
                    <h4>form control</h4>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <hr>
                    <h4>Sizing</h4>
                    <p>Set heights using classes like .form-control-lg and .form-control-sm.</p>
                    <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
                    <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
                    <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
                    <hr>
                    <h4>Readonly</h4>
                    <p>Add readonly property to input tag.</p>
                    <input class="form-control" type="text" value="Disabled readonly input" aria-label="Disabled input example" disabled readonly>
                    <hr>
                    <h4>Readonly Plaintext</h4>
                    <p>Add readonly Property and give value to the input</p>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
                    </div>
                    <hr>
                    <h4>File Input</h4>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                    </div>
                    <div class="mb-3">
                        <label for="formFileDisabled" class="form-label">Disabled file input example</label>
                        <input class="form-control" type="file" id="formFileDisabled" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Small file input example</label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                    </div>
                    <div>
                        <label for="formFileLg" class="form-label">Large file input example</label>
                        <input class="form-control form-control-lg" id="formFileLg" type="file">
                    </div>
                    <hr>
                    <h4>Color Picker</h4>
                    <p>You can change value as per requirement.</p>
                    <p><u>value=#563d7c</u></p>
                    <label for="exampleColorInput" class="form-label">Color picker</label>
                    <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">
                    <p><u>Value=#412asf</u></p>
                    <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#412asf" title="Choose your color">
                    <hr>
                    <h4>Datalists</h4>
                    <label for="exampleDataList" class="form-label">Datalist example</label>
                    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                    <datalist id="datalistOptions">
                        <option value="Rajkot">
                        <option value="Morbi">
                        <option value="Ahemdabad">
                        <option value="Jamnagar">
                        <option value="Amreli">
                    </datalist>
                    <hr>
                    <h4>Default Select</h4>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <h4>Sizing</h4>
                    <p>As same as input styling</p>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>

                    <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <hr>
                    <h4>Multiple select is available</h4>
                    <select class="form-select" multiple aria-label="multiple select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <hr>
                    <h4>Size attribute for option to show on screen</h4>
                    <p>We can use <u>dispable</u> atribute as well in select.</p>
                    <select class="form-select" size="3" aria-label="size 3 select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="1">Four</option>
                        <option value="2">Five</option>
                        <option value="3">Six</option>
                    </select>
                    <hr>
                    <h4>Check box</h4>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Default checkbox
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Checked checkbox
                        </label>
                    </div>
                    <hr>
                    <h4>Radio buttons</h4>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Default radio
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Default checked radio
                        </label>
                    </div>
                    <hr>
                    <h4>Switches</h4>
                    <h6>A switch has the markup of a custom checkbox but uses the <strong>.form-switch</strong>
                        class to render a
                        toggle switch.
                        Consider using role="switch" to more accurately convey the nature of the control to
                        assistive technologies
                        that support this role. In older assistive technologies, it will simply be announced as a
                        regular checkbox
                        as a fallback. Switches also support the disabled attribute.</h6>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox
                            input</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox
                            input</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDisabled" disabled>
                        <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox
                            input</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckCheckedDisabled" checked disabled>
                        <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch
                            checkbox
                            input</label>
                    </div>
                    <hr>
                    <h4>Inine Checkbox and Radio buttons</h4>
                    <h6>Use <strong>.form-check-inline</strong> class for inline checkbox and for inline radio
                        buttons to.</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                        <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                    </div>
                    <hr>
                    <h4>Buttons as radio and checkbox</h4>
                    <h6>Use class <strong>.btn-check</strong> input tag and <strong>.btn btn-*</strong> in lable
                        class.</h6>
                    <h6 class="text-danger">Remeber when we are using buttons for checkbox or radio id of input tag
                        and for
                        attribute of label must be same.</h6>
                    <input type="checkbox" class="btn-check" id="btn-check" autocomplete="off">
                    <label class="btn btn-primary" for="btn-check">Single toggle</label>
                    <input type="checkbox" class="btn-check" id="btn-check-1" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btn-check-1">Single toggle</label>
                    <hr>
                    <h4>Buttons</h4>
                    <h6>Buttons and button styles.</h6>
                    <button class="btn btn-primary">Primary</button>
                    <button class="btn btn-outline-primary">Primary</button><br><br>
                    <button class="btn btn-secondary">secondary</button>
                    <button class="btn btn-outline-secondary">secondary</button><br><br>
                    <button class="btn btn-danger">danger</button>
                    <button class="btn btn-outline-danger">danger</button><br><br>
                    <button class="btn btn-success">success</button>
                    <button class="btn btn-outline-success">success</button><br><br>
                    <button class="btn btn-dark">dark</button>
                    <button class="btn btn-outline-dark">dark</button><br><br>
                    <button class="btn btn-light">light</button>
                    <button class="btn btn-outline-light">light</button><br><br>
                    <hr>
                    <h4>Range</h4>
                    <label for="customRange1" class="form-label">Example range</label>
                    <input type="range" class="form-range" id="customRange1">
                    <hr>
                    <h4>Min and Max Range</h4>
                    <h6> use min and max attribute and also we can use step attribute for integer step values.</h6>
                    <label for="customRange2" class="form-label">Example range</label>
                    <input type="range" class="form-range" min="0" max="5" id="customRange2">
                    <hr>
                    <h4>Input group</h4>
                    <h6>Use span tag with class <strong>input-group-text</strong> for give space and icon before
                        after or in-between
                        the input tag.</h6>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                    </div>

                    <label for="basic-url" class="form-label">Your vanity URL</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text">.00</span>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                        <span class="input-group-text">@</span>
                        <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                    </div>

                    <div class="input-group">
                        <span class="input-group-text">With textarea</span>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                    <hr>
                    <h4>Sizing</h4>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <h6>class is input-group-lg, we can use sm, lg, md, xl, xxl</h6>
                    <div class="input-group input-group-lg">
                        <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                    </div>
                    <hr>
                    <h4>Checkbox and radio</h4>
                    Place any checkbox or radio option within an input group’s addon instead of text. We recommend
                    adding .mt-0 to
                    the .form-check-input when there’s no visible text next to the input.
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox">
                    </div>

                    <div class="input-group">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="radio" value="" aria-label="Radio button for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with radio button">
                    </div>
                    <hr>
                    <h4>Multiple Inputs</h4>
                    <h6>While multiple < input>s are supported visually, validation styles are only available for
                            input groups with
                            a single < input>.</h6>
                    <div class="input-group">
                        <span class="input-group-text">First and last name</span>
                        <input type="text" aria-label="First name" placeholder="First name" class="form-control">
                        <input type="text" aria-label="Last name" placeholder="last name" class="form-control">
                    </div>
                    <hr>
                    <h4>Button addons</h4>
                    <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1">Button</button>
                        <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
                    </div>

                    <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary" type="button">Button</button>
                        <button class="btn btn-outline-secondary" type="button">Button</button>
                        <input type="text" class="form-control" placeholder="" aria-label="Example text with two button addons">
                    </div>

                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username with two button addons">
                        <button class="btn btn-outline-secondary" type="button">Button</button>
                        <button class="btn btn-outline-secondary" type="button">Button</button>
                    </div>
                    <hr>
                    <h4>Buttons with dropdowns</h4>
                    <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>

                    <div class="input-group">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action before</a></li>
                            <li><a class="dropdown-item" href="#">Another action before</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                        <input type="text" class="form-control" aria-label="Text input with 2 dropdown buttons">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <hr>
                    <h4>Custom file input</h4>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupFile01">Upload</label>
                        <input type="file" class="form-control" id="inputGroupFile01">
                    </div>

                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>

                    <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon03">Button</button>
                        <input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                    </div>

                    <div class="input-group">
                        <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                        <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button>
                    </div>
                    <hr>
                    <hr>
                    <br>
                    <h2 class="display-2">Floating lables</h2>
                    <hr>
                    <h4>Simple lable</h4>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <hr>
                    <h4>validation</h4>
                    <h6>Use .is-valid and .is-invalid class for validation.</h6>
                    <form class="form-floating mb-3">
                        <input type="email" class="form-control is-invalid" id="floatingInputInvalid" placeholder="name@example.com" value="test@example.com">
                        <label for="floatingInputInvalid">Invalid input</label>
                    </form>
                    <form class="form-floating">
                        <input type="email" class="form-control is-valid" id="floatingInputInvalid" placeholder="name@example.com" value="test@example.com">
                        <label for="floatingInputInvalid">Invalid input</label>
                    </form>
                    <hr>
                    <h4>Layout</h4>
                    <div class="row g-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com">
                                <label for="floatingInputGrid">Email address</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <label for="floatingSelectGrid">Works with selects</label>
                            </div>
                        </div>
                    </div>
                    <h6>Customized form using col and gutters</h6>
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">State</label>
                            <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>