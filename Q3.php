<html>

<head>
    <title>Hi my Valentine 2024💕</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Color+Emoji&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Single Day">
    <link rel="icon" type="image/x-icon" href="/pics/heart.png">
</head>

<body>
    <div class="header">
        <div class="text">
            <h1 class="fadeIn">Question 3</h1>
            <h2 class="fadeIn">Which one is not my finger?</h2>
            
        </div>
        <div class="photo-group">
            <img class="fadeIn" style ="height: auto; width: 15%;"src="./pics/fing1.jpg" />
            <img class="fadeIn" style ="height: auto; width: 15%;"src="./pics/fing2.jpg" />
            <img class="fadeIn" style ="height: auto; width: 15%;"src="./pics/fing3.jpg" />
            <img class="fadeIn" style ="height: auto; width: 15%;"src="./pics/fing4.jpg" />
        </div>
        <div class="btn-group fadeIn ">
            <button onclick="showPopup('wrong')" class = "btn " 
            style = "color: white; background-color: #2076D1;">1</button>
            <button onclick="showPopup('wrong')" class = "btn "
            style = "color: white; background-color: #2076D1;">2</button>
            <button  onclick="showPopup('correct')" class = "btn " 
            style = "color: white; background-color: #2076D1;">3</button>
            <button  onclick="showPopup('wrong')" class = "btn " 
            style = "color: white; background-color: #2076D1;">4</button>
        </div>
    </div>
    <div id="correctPopup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="hidePopup('correct')">&times;</span>
            <h2>Congratulations!!!</h2>
            <h4>you r my big fan! lol</h4>
            <img class="fadeIn" style ="height: auto; width: 50%;"src="./pics/loveu.gif" />
            <form action="functions.php" method = "post">
                <button class = "next-btn"  onclick="showPopup('correct')" name="to_last"
                    style = "color: white;">Let's see your gift</button>
            </form>
        </div>
    </div>

    <div id="wrongPopup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="hidePopup('wrong')">&times;</span>
            <h2>Almost there !</h2>
            <h4>Try again! i know you can do it</h4>
            <img class="fadeIn" style ="height: auto; width: 50%;"src="./pics/encourage.gif" />
        </div>
    </div>

    <script src="script.js"></script>

    
     
</body>

</html>