<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <div class="container">
                    <h1 class="display-1">Code</h1>
                    <h6 class="display-6">Documentation and examples for displaying inline and multiline blocks of
                        code with
                        Bootstrap.</h6>
                    <hr><br>
                    <hr>
                    <h4>Inline Code</h4>
                    <h6>Wrap inline snippets of code with <code>&lt;code&gt;</code>. Be sure to escape HTML angle
                        brackets.</h6>
                    <div>
                        For example, < section> should be wrapped as inline. <br>
                            code :-
                            For example, <code>& l t ; section & g t ;</code> should be wrapped as inline. <br>
                            <u><em>Rempve spaces between codes.</em></u>
                    </div>
                    <hr>
                    <h4>Variables</h4>
                    <h6>For indicating variables use the <code>&lt;var&gt;</code> tag.</h6>
                    <em>y = mx + b</em>
                    <p class="text-danger">
                        < var>y</ var> = < var>m</ var>
                        < var>x< /var> + < var>b</ var>
                    </p>
                    <hr>
                    <h4>User input</h4>
                    <h6>Use the <code>&lt;kbd&gt;</code> to indicate input that is typically entered via keyboard.
                    </h6>
                    <div>
                        To switch directories, type <kbd>cd</kbd> followed by the name of the directory.<br>
                        To edit settings, press <kbd><kbd>ctrl</kbd> + <kbd>,</kbd></kbd>
                        Note :
                        <p>Here, <em>cd</em>, <em>ctrl + ,</em> and <em>ctrl</em> <em>+</em> <em>,</em> are in
                            <code>&lt;kbd&gt;</code> tag.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>