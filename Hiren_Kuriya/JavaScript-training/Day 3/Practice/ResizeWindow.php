<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <h1 class="display-6">Practice 03 : Try to change windows height and width using Windows object</h1>
                <div class="container m-5">
                    <div class="row">
                        <div class="col-md-4">
                            <form class="form-control" action="javascript:void()">
                                <em class="text-danger">Height & Width must be from 0px to 1200px.</em>
                                <div class="mb-3">
                                    <label for="height" class="form-label">Height</label>
                                    <input type="number" class="form-control" id="height" placeholder="Height">
                                </div>
                                <div class="mb-3">
                                    <label for="width" class="form-label">Width</label>
                                    <input type="number" class="form-control" id="width" placeholder="Width">
                                </div>
                                <h3 class="text-info">This function will resize window only one time.</h3>
                                <button class="btn btn-success w-100 mb-3" id="btn-1" onclick="resizeWindow()">Click
                                    me!</button>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <h1 class="text-dark h3 fw-bolder">Create new window first</h1>
                            <button class="btn btn-success w-100 mb-3" onclick="openWindow()">Create window</button>
                            <h1 class="text-warning h4">Move window to 100px height and 100px width only one time.
                            </h1>
                            <button class="btn btn-success w-100 mb-3" id="btn-2" onclick="MoveWindow()">Move window</button>
                            <h1 class="text-warning h4">Move window to 100px height and 100px width every one time.
                            </h1>
                            <button class="btn btn-success w-100 mb-3" id="btn-3" onclick="MoveWindowby()">Move window</button>
                            <h1 class="text-danger h4">Close window</h1>
                            <button class="btn btn-danger w-100 mb-3" id="btn-4" onclick="closeWindow()">Close window</button>
                        </div>
                        <div class="col-md-4">
                            <form class="form-control" action="javascript:void()">
                                <em class="text-danger">Height & Width must be from 0px to 1200px.</em>
                                <div class="mb-3">
                                    <label for="height" class="form-label">Height</label>
                                    <input type="number" class="form-control" id="height1" placeholder="Height">
                                </div>
                                <div class="mb-3">
                                    <label for="width" class="form-label">Width</label>
                                    <input type="number" class="form-control" id="width1" placeholder="Width">
                                </div>
                                <h3 class="text-info">This function will resize window every time you will hit the
                                    button.</h3>
                                <button class="btn btn-success w-100 mb-3" id="btn-5" onclick="WinResizeBy()">Click
                                    me!</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>
<script type="text/javascript">
    let myWindow;
    document.getElementById('btn-1').disabled = "true";
    document.getElementById('btn-2').disabled = "true";
    document.getElementById('btn-3').disabled = "true";
    document.getElementById('btn-4').disabled = "true";
    document.getElementById('btn-5').disabled = "true";

    function openWindow() {
        myWindow = window.open("./Practice-03.html", "", "width=200, height=100");
        document.getElementById('btn-1').disabled = "";
        document.getElementById('btn-2').disabled = "";
        document.getElementById('btn-3').disabled = "";
        document.getElementById('btn-4').disabled = "";
        document.getElementById('btn-5').disabled = "";
    }

    function resizeWindow() {
        var width, height;
        width = document.getElementById('width').value;
        height = document.getElementById('height').value;
        if (height > 1200) {
            alert("Height must be less than 1200");
        }
        if (width > 1200) {
            alert("Width must be less than 1200");
        }
        myWindow.resizeTo(width, height);
    }

    function WinResizeBy() {
        var width, height;
        width = document.getElementById('width1').value;
        height = document.getElementById('height1').value;
        if (height > 1200) {
            alert("Height must be less than 1200");
        }
        if (width > 1200) {
            alert("Width must be less than 1200");
        }
        myWindow.resizeBy(width, height);
    }

    function MoveWindow() {
        myWindow.moveTo(100, 100);
    }

    function MoveWindowby() {
        myWindow.moveBy(100, 100);
    }

    function closeWindow() {
        myWindow.close();
    }
</script>