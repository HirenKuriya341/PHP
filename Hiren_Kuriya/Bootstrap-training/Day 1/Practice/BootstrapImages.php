<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
    <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <div class="container">
                    <h1 class="display-1">Images</h1>
                    <h6 class="display-6">
                        Documentation and examples for opting images into responsive behavior (so they never become
                        larger than
                        their parent elements) and add lightweight styles to them—all via classes.
                    </h6>
                    <hr><br>
                    <hr><br>
                    <h4>Classes of images</h4>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-2">Class</div>
                            <div class="col-sm-6">Working</div>
                            <div class="col-sm-4">Example</div>
                        </div>
                        <hr>hr
                        <div class="row">
                            <div class="col-sm-2">img-fluid</div>
                            <div class="col-sm-6">Images in Bootstrap are made responsive with .img-fluid.
                                max-width: 100%; and
                                height: auto; are applied to the image so that it scales with the parent element.
                            </div>
                            <div class="col-sm-4"><img src="nature.jpg" alt="Nature" class="img-fluid"></div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-2">img-thumbnail</div>
                            <div class="col-sm-6">In addition to our border-radius utilities, you can use
                                .img-thumbnail to give an
                                image a rounded 1px border appearance.</div>
                            <div class="col-sm-4"><img src="nature.jpg" alt="Nature" class="img-thumbnail"></div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-2">rounded</div>
                            <div class="col-sm-6">You can use extra <em><u>rounded</u></em> class for rounded image.
                            </div>
                            <div class="col-sm-4"><img src="nature.jpg" alt="Nature" class="img-fluid rounded"></div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-2">float-left <br>float-right <br></div>
                            <div class="col-sm-10">Align images with the helper float classes or text alignment
                                classes. block-level
                                images can be centered using the .mx-auto margin utility class. <br>
                                <p>In <em>bootstrap 5</em> there are <u><em>float-right</em></u> and
                                    <u><em>float-left</em></u> not available, instead if these classes,
                                    <u><em>float-end</em></u>, <u><em>float-start</em></u> and
                                    <u><em>float-center</em> classes are available.</u>
                                </p>
                            </div><br>
                            <div class="col-sm-12">
                                <img src="nature.jpg" alt="" class="float-left">
                                <img src="nature.jpg" alt="" class="float-right">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-2">mx-auto d-block</div>
                            <div class="col-sm-10">Align image in center</div>
                            <div class="col-sm-12"><img src="nature.jpg" class="mx-auto d-block" alt="..."></div>
                            <p>This image`s parent div has class <u>text-center</u> there for it work same as
                                <u>mx-auto d-block</u>
                            </p>
                            <div class="col-sm-12 text-center"><img src="nature.jpg" alt="..."></div>
                        </div>
                    </div>
                    <hr><br>
                    <hr>
                    <h4>Picture tag</h4>
                    <h6>If you are using the <code>&lt;picture&gt;</code> element to specify multiple
                        <code>&lt;source&gt;</code> elements for a specific <code>&lt;img&gt;</code>, make sure to
                        add the .img-*
                        classes to the <img alt=""> and not to the
                        <code>&lt;picture&gt;</code> tag.
                    </h6>
                    <picture>
                        <source srcset="nature.jpg" type="image/svg+xml">
                        <img src="nature.jpg" class="img-fluid img-thumbnail" alt="image">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>