<style>
    .practice {
        border: 5px solid blue;
        padding: 10px;
        color: blue;
    }

    @media screen and (max-width: 1000px) {
        .practice {
            border: 5px solid red;
            padding: 10px;
            color: red;
        }
    }
</style>
<?php include('../../../../header.php') ?>
<div class="container-fluid px-3">
    <div class="row">
        <?php include('../../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="data">
                <div>
                    <h1>
                        You have one h1 and one paragraph in your page with blue color border. For all the media
                        screen
                        and query
                        selector (maximum width 500px) it should be change to red color border.
                    </h1>
                    <hr>
                    <div class="practice">
                        <h1>This is H1 tag.</h1>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has
                            been the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley
                            of type and
                            scrambled it to make a type specimen book. It has survived not only five centuries, but
                            also
                            the leap
                            into electronic typesetting, remaining essentially unchanged. It was popularised in the
                            1960s with the
                            release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                            desktop
                            publishing
                            software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../../footer.php') ?>