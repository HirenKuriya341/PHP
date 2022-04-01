<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <div class="container">
                    <h1 class="display-1">Lists</h1>
                    <hr>
                    <hr><br>
                    <h4>Unstyled and styled list</h4>
                    <h6>Remove the default list-style and left margin on list items (immediate children only). This
                        only applies to
                        immediate children list items, meaning you will need to add the class for any nested lists
                        as well.</h6>
                    <ul class="list-unstyled">
                        <li>This is a list.</li>
                        <li>It appears completely unstyled.</li>
                        <li>Structurally, it's still a list.</li>
                        <li>However, this style only applies to immediate child elements.</li>
                        <li>Nested lists:
                            <ul>
                                <li>are unaffected by this style</li>
                                <li>will still show a bullet</li>
                                <li>and have appropriate left margin</li>
                            </ul>
                        </li>
                        <li>This may still come in handy in some situations.</li>
                    </ul>
                    <hr>
                    <h4>inline list</h4>
                    <h6>Remove a list’s bullets and apply some light margin with a combination of two classes,
                        <code>.list-inline</code> and <code>.list-inline-item</code>.
                    </h6>
                    <ul class="list-inline">
                        <li class="list-inline-item">This is a list item.</li>
                        <li class="list-inline-item">And another one.</li>
                        <li class="list-inline-item">But they're displayed inline.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>