<style>
    .col-css {
        background-color: antiquewhite;
        padding: 10px;
        text-align: center;
        border: 1px solid gray;
    }


    .col-css {
        background-color: antiquewhite;
        padding: 10px;
        text-align: center;
        border: 1px solid gray;
    }
</style>
<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <div class="container">
                    <h1 class="display-1">Grids</h1>
                    <h6 class="display-6">Use our powerful mobile-first flexbox grid to build layouts of all shapes
                        and sizes thanks
                        to a twelve
                        column system, six default responsive tiers, Sass variables and mixins, and dozens of
                        predefined classes.
                    </h6>
                    <hr>
                    <hr><br>
                    <h4>This exapmle is created using 12 equal columns and 1 .row class</h4>
                    <div class="container">
                        <div class="row">
                            <div class="col col-css">
                                Column
                            </div>
                            <div class="col col-css">
                                Column
                            </div>
                            <div class="col col-css">
                                Column
                            </div>
                            <div class="col col-css">
                                Column
                            </div>
                            <div class="col col-css">
                                Column
                            </div>
                            <div class="col col-css">
                                Column
                            </div>
                            <div class="col col-css">
                                Column
                            </div>
                            <div class="col col-css">
                                Column
                            </div>
                            <div class="col col-css">
                                Column
                            </div>
                            <div class="col col-css">
                                Column
                            </div>
                            <div class="col col-css">
                                Column
                            </div>
                            <div class="col col-css">
                                Column
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h4>This exapmle is created using 6 equal columns and 1 .row class</h4>
                    <div class="container">
                        <div class="row">
                            <div class="col col-css">
                                Column
                            </div>
                            <div class="col col-css">
                                Column
                            </div>
                            <div class="col col-css">
                                Column
                            </div>
                            <div class="col col-css">
                                Column
                            </div>
                            <div class="col col-css">
                                Column
                            </div>
                            <div class="col col-css">
                                Column
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h4>This exapmle is created using 3 equal columns and 1 .row class</h4>
                    <div class="container">
                        <div class="row">
                            <div class="col col-css">
                                Column
                            </div>
                            <div class="col col-css">
                                Column
                            </div>
                            <div class="col col-css">
                                Column
                            </div>
                        </div>
                    </div>
                    <hr>
                    <hr><br>
                    <h4>This exapmle is created using 3 equal columns with 2 6 2 ratio <u>(we can use any no. with
                            addition of
                            12)</u> and 1 .row class</h4>
                    <div class="container">
                        <h6>2-6-2</h6>
                        <div class="row">
                            <div class="col-2 col-css">
                                Column
                            </div>
                            <div class="col-6 col-css">
                                Column
                            </div>
                            <div class="col-4 col-css">
                                Column
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="container">
                        <h6>1-3-8</h6>
                        <div class="row">
                            <div class="col-1 col-css">
                                Column
                            </div>
                            <div class="col-3 col-css">
                                Column
                            </div>
                            <div class="col-8 col-css">
                                Column
                            </div>
                        </div>
                    </div>
                    <br>
                    <h6 class="text-danger">If your addition of col is grater than 12 then it ruin your party.</h6>
                    <div class="container">
                        <h6>2-3-10</h6>
                        <div class="row">
                            <div class="col-2 col-css">
                                Column
                            </div>
                            <div class="col-3 col-css">
                                Column
                            </div>
                            <div class="col-10 col-css">
                                Column
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <hr>
                    <h4>Grid Options</h4>
                    <div class="container">
                        <h6>Bootstrap’s grid system can adapt across all six default breakpoints, and any
                            breakpoints you customize.
                            The six default grid tiers are as follow:</h6>
                        <ol>
                            <li> Extra small (xs)</li>
                            <li> Small (sm)</li>
                            <li> Medium (md)</li>
                            <li> Large (lg)</li>
                            <li> Extra large (xl)</li>
                            <li> Extra extra large (xxl)</li>
                        </ol>
                    </div>
                    <hr>
                    <h6>Using a single set of .col-xl-* classes, you can create a basic grid system that starts out
                        stacked and
                        becomes horizontal at the extra large breakpoint (xl).</h6>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-css">col-xl-8</div>
                            <div class="col-xl-4 col-css">col-xl-4</div>
                        </div>
                        <div class="row">
                            <div class="col-sm col-css">col-sm</div>
                            <div class="col-sm col-css">col-sm</div>
                            <div class="col-sm col-css">col-sm</div>
                        </div>
                        <div class="row">
                            <div class="col-xl col-css">col-xl</div>
                            <div class="col-xl col-css">col-xl</div>
                            <div class="col-xl col-css">col-xl</div>
                        </div>
                    </div>
                    <hr>
                    <h4>Mix and match</h4>
                    <h6>
                        Don’t want your columns to simply stack in some grid tiers? Use a combination of different
                        classes for each
                        tier as needed. See the example below for a better idea of how it all works.</h6>
                    <div class="container">
                        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                        <div class="row">
                            <div class="col-md-8 col-css">.col-md-8</div>
                            <div class="col-6 col-md-4 col-css">.col-6 .col-md-4</div>
                        </div>

                        <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
                        <div class="row">
                            <div class="col-6 col-md-4 col-css">.col-6 .col-md-4</div>
                            <div class="col-6 col-md-4 col-css">.col-6 .col-md-4</div>
                            <div class="col-6 col-md-4 col-css">.col-6 .col-md-4</div>
                        </div>

                        <!-- Columns are always 50% wide, on mobile and desktop -->
                        <div class="row">
                            <div class="col-6 col-css">.col-6</div>
                            <div class="col-6 col-css">.col-6</div>
                        </div>
                    </div>
                    <hr>
                    <hr><br>
                    <h4>Row columns</h4>
                    <h6>
                        Use the responsive .row-cols-* classes to quickly set the number of columns that best render
                        your content
                        and layout. Whereas normal .col-* classes apply to the individual columns (e.g., .col-md-4),
                        the row columns
                        classes are set on the parent .row as a shortcut. With .row-cols-auto you can give the
                        columns their natural
                        width.
                        Use these row columns classes to quickly create basic grid layouts or to control your card
                        layouts.</h6>
                    <div class="container">
                        <h6><em>class =>row row-cols-2</em> :- it will arrange all columns with set of 2</h6>
                        <div class="row row-cols-2">
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                        </div>
                    </div>
                    <hr>
                    <div class="container">
                        <h6><em>class =>row row-cols-4</em> :- it will arrange all columns with set of 4</h6>
                        <div class="row row-cols-4">
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                        </div>
                    </div>
                    <hr>
                    <div class="container">
                        <h6><em>class =>row row-cols-6</em> :- it will arrange all columns with set of 6</h6>
                        <div class="row row-cols-6">
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                        </div>
                    </div>
                    <hr>
                    <div class="container">
                        <h6><em>class =>row row-cols-auto</em> :- it will arrange all columns with repected to the
                            page.</h6>
                        <div class="row row-cols-auto">
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                        </div>
                        <div class="row row-cols-auto">
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                        </div>
                        <div class="row row-cols-auto">
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                        </div>
                        <div class="row row-cols-auto">
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                            <div class="col col-css">Column</div>
                        </div>
                    </div>
                    <hr>
                    <hr><br>
                    <h4>Nesting</h4>
                    <h6>To nest your content with the default grid, add a new .row and set of .col-sm-* columns
                        within an existing
                        .col-sm-* column. Nested rows should include a set of columns that add up to 12 or fewer (it
                        is not required
                        that you use all 12 available columns).</h6>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-3 col-css">
                                Level 1: .col-sm-3
                            </div>
                            <div class="col-sm-9 col-css" style="background-color: aquamarine; padding: 10px;">
                                <div class="row">
                                    <div class="col-8 col-sm-6 col-css">
                                        Level 2: .col-8 .col-sm-6
                                    </div>
                                    <div class="col-4 col-sm-6 col-css">
                                        Level 2: .col-4 .col-sm-6
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../../../footer.php') ?>