<style>
    .flex-box {
        background-color: aqua;
        display: flex;
        flex-direction: row-reverse;
        float: right;
    }

    .flex-box p {
        font-size: 15px;
    }

    .flex-box div {
        margin: 10px;
        padding: 10px;
        background-color: antiquewhite;
        height: 100px;
        width: 100px;
        text-align: center;
    }
</style>
<?php include('../../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="data">
                <div class="extra" style="clear: left; height: 200px">
                    <div class="flex-box">
                        <div>First(1<sup>st</sup>) Box</div>
                        <div>Second(2<sup>nd</sup>) Box</div>
                        <div>Third(3<sup>rd</sup>) Box</div>
                        <div>Forth(4<sup>th</sup>) Box</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../../footer.php') ?>