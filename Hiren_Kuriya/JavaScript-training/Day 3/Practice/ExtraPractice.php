<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <h1 class="display-6">Practice 03 : Try to change windows height and width using Windows object</h1>
                <h1>Edditional W3SCHOOL Practices</h1>
                <hr>
                <div style="margin-top: 50px;">
                    <h3>01) Use the getElementById method to find the < p> element, and change its text to "Hello".</h3>
                    <span style="color: red; text-decoration: underline;">Change text here</span>
                    <p id="demo"></p>
                    <script>
                        document.getElementById('demo').innerHTML = "Hello";
                    </script>
                </div>
                <div style="margin-top: 50px;">
                    <h3>02) Use the getElementsByTagName method to find the first < p> element, and change its text to "Hello".</h3>
                    <p>p Tag with index 0 : <span style="font-weight: 600"></span></p>
                    <p>p Tag with index 1 : <span style="font-weight: 600"></span></p>
                    <p>p Tag with index 2 : <span style="font-weight: 600"></span></p>
                    <p>p Tag with index 3 : <span style="font-weight: 600"></span></p>
                    <script>
                        document.getElementsByTagName('span')[1].innerHTML = "Zeroth";
                        document.getElementsByTagName('span')[2].innerHTML = "First";
                        document.getElementsByTagName('span')[3].innerHTML = "Second";
                        document.getElementsByTagName('span')[4].innerHTML = "Third";
                    </script>
                </div>
                <div style="margin-top: 50px;">
                    <h3>03) Change the text of the first element that has the class name "test".</h3>
                    <p class="test">first class</p>
                    <p class="test">second class</p>
                    <script>
                        document.getElementsByClassName("test")[0].innerHTML = "First test class";
                    </script>
                </div>
                <div style="margin-top: 50px;">
                    <h3>04) Use HTML DOM to change the value of the image's src attribute.</h3>
                    <p>Source Before</p>
                    <img id="image" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/SNice.svg/1200px-SNice.svg.png" alt="smile" width="10%">
                    <p>Source After</p>
                    <img class="image" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/SNice.svg/1200px-SNice.svg.png" alt="smile" width="10%">
                    <script>
                        document.getElementsByClassName('image')[0].src = "https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dmlld3xlbnwwfHwwfHw%3D&w=1000&q=80";
                    </script>
                </div>
                <div style="margin-top: 50px;">
                    <h3>05) Use HTML DOM to change the value of the input field.</h3>
                    <input type="text" id="myText" value="Hello">
                    <script>
                        document.getElementById("myText").value = "Have a nice day!";
                    </script>
                </div>
                <div style="margin-top: 50px;">
                    <h3>06) Change the text color of the < p> element to "red" and Change the font size of the p element to 40
                            pixels..</h3>
                    <p id="color">This style is applied from javascript</p>
                    <script>
                        document.getElementById("color").style.color = "red";
                        document.getElementById("color").style.fontSize = "40px";
                    </script>
                </div>
                <div style="margin-top: 50px;">
                    <h3>07) Use the CSS display property to hide the p element.</h3>
                    <p id="hide">This elemene tis hidden</p>
                    <button onclick="hideDiv()">Hide</button>
                    <button onclick="showDiv()">Show</button>
                    <script>
                        function hideDiv() {
                            document.getElementById('hide').style.display = 'none';
                        }

                        function showDiv() {
                            document.getElementById('hide').style.display = 'block';
                        }
                    </script>
                </div>
                <div style="margin-top: 50px;">
                    <h3>08) Use the eventListener to assign an onclick event to the < button> element.</h3>
                    <button id="demo1">Click me1</button>
                    <p id="demo2">hello</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>
<script type="text/javascript">
    document.getElementById("demo1").addEventListener = ("click", myFunction());

    function myFunction() {
        document.getElementById('demo2').innerHTML = "hello world";
    }
</script>