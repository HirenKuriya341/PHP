<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <div class="container">
                    <h1 class="display-1">Typography</h1>
                    <h6 class="display-6">
                        Documentation and examples for Bootstrap typography, including global settings, headings,
                        body text, lists,
                        and more.
                    </h6>
                    <hr> <br>
                    <hr>
                    <p>All h1 to h6 headings are available.</p>
                    <h1>H1 Heading</h1>
                    <h2>H2 Heading</h2>
                    <h3>H3 Heading</h3>
                    <h4>H4 Heading</h4>
                    <h5>H5 Heading</h5>
                    <h6>H6 Heading</h6>
                    <hr> <br>
                    <hr>
                    <p>All .h1 to .h6 classes are available.</p>
                    <p class="h1">h1. Bootstrap heading</p>
                    <p class="h2">h2. Bootstrap heading</p>
                    <p class="h3">h3. Bootstrap heading</p>
                    <p class="h4">h4. Bootstrap heading</p>
                    <p class="h5">h5. Bootstrap heading</p>
                    <p class="h6">h6. Bootstrap heading</p>
                    <hr>
                    <br>
                    <hr>
                    <p>Customized headings</p>
                    <h3>
                        Fancy display heading
                        <small class="text-muted">With faded secondary text. (class is "text-muted")</small>
                    </h3>
                    <p>Display Headings</p>
                    <h1 class="display-1">Display 1</h1>
                    <h1 class="display-2">Display 2</h1>
                    <h1 class="display-3">Display 3</h1>
                    <h1 class="display-4">Display 4</h1>
                    <h1 class="display-5">Display 5</h1>
                    <h1 class="display-6">Display 6</h1>
                    <hr><br>
                    <hr>
                    <p>Lead</p>
                    <p>Make a paragraph stand out by adding <em class="text-danger">.lead</em>.</p>
                    <p class="lead">
                        This is a lead paragraph. It stands out from regular paragraphs.
                    </p>
                    <hr>
                    <hr>
                    <hr><br>
                </div>
                <div class="container">
                    <h2 class="display-3">Text Utilities</h2>
                    <hr>
                    <hr>
                    <br>
                    <h4>Abbreviations</h4>
                    <h6>Stylized implementation of HTML’s <abbr> element for abbreviations and acronyms to show the
                            expanded version
                            on hover. Abbreviations have a default underline and gain a help cursor to provide
                            additional context on
                            hover and to users of assistive technologies.

                            Add <u>.initialism</u> to an abbreviation for a <u>slightly smaller font-size</u>.</h6>
                    <p><abbr title="attribute">attr</abbr></p>
                    <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>
                    <hr><br>
                    <hr>
                    <h4>Naming a source</h4>
                    <figure>
                        <blockquote class="blockquote">
                            <p>A well-known quote, contained in a blockquote element.</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </figcaption>
                    </figure>
                    <hr><br>
                    <hr>
                    <h4>Alignments</h4>
                    <h6>Align Center</h6>
                    <figure class="text-center">
                        <blockquote class="blockquote">
                            <p>A well-known quote, contained in a blockquote element.</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </figcaption>
                    </figure>
                    <h6>Align End</h6>
                    <figure class="text-end">
                        <blockquote class="blockquote">
                            <p>A well-known quote, contained in a blockquote element.</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>