<style>
    .container1 {
        border: 2px solid blue;
        margin: 10px;
        height: 600px;
        color: black;
    }

    .left-div {
        float: left;
        width: 30%;
        height: max-content;
        border: 2px solid red;
        margin: 10px;
    }


    .center-div {
        float: left;
        width: 30%;
        height: max-content;
        border: 2px solid green;
        margin: 10px;
    }


    .right-div {
        float: left;
        width: 30%;
        height: max-content;
        border: 2px solid blue;
        margin: 10px;
    }

    .overflow-visble {
        overflow: visible;
        background-color: antiquewhite;
        height: 100px;
    }

    .overflow-hidden {
        overflow: hidden;
        height: 100px;
        background-color: azure;
    }

    .overflow-scroll {
        overflow: scroll;
        height: 100px;
        background-color: aquamarine;
    }
</style>
<?php include('../../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="data">
                <h1>Suppose we have a div with specific height and width and we need to arrange more text into it.
                    Use
                    overflow
                    properties.</h1>
                <div class="container1">
                    <div class="left-div">
                        <h3>Overflow text with visible property</h3>
                        <div class="overflow-visble">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has
                            been the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley
                            of type and
                            scrambled it to make a type specimen book.
                        </div>
                        <p> It has survived not only five centuries, but also the leap
                            into electronic typesetting, remaining essentially unchanged. It was popularised in the
                            1960s with the
                            release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                            desktop
                            publishing
                            software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                    <div class="center-div">
                        <h3>overflow text with hidden property</h3>
                        <div class="overflow-hidden">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has
                            been the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley
                            of type and
                            scrambled it to make a type specimen book.
                        </div>
                        <p> It has survived not only five centuries, but also the leap
                            into electronic typesetting, remaining essentially unchanged. It was popularised in the
                            1960s with the
                            release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                            desktop
                            publishing
                            software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                    <div class="right-div">
                        <h3>Overflow text with scroll property</h3>
                        <div class="overflow-scroll">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has
                            been the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley
                            of type and
                            scrambled it to make a type specimen book.
                        </div>
                        <p> It has survived not only five centuries, but also the leap
                            into electronic typesetting, remaining essentially unchanged. It was popularised in the
                            1960s with the
                            release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                            desktop
                            publishing
                            software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                    <h2 style="color: red;"><u>NOTE</u> : auto propert is Similar to scroll, but it adds scrollbars
                        only when necessary.</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../../footer.php') ?>