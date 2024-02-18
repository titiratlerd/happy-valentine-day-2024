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
            <h1 class="fadeIn">Question 2</h1>
            <h2 class="fadeIn">Where is this place which we went together located in?</h2>
        </div>
        <img class="fadeIn" style ="height: auto; width: 25%;"src="./pics/cafe.jpg" />
        
            <div class="btn-group fadeIn ">
                <button class = "btn " onclick="showPopup('wrong')"
                style = "color: white; background-color: #2076D1;">Pattaya</button>
                <button  class = "btn " onclick="showPopup('wrong')"
                style = "color: white; background-color: #2076D1;">Chiangmai</button>
                <button   class = "btn " onclick="showPopup('correct')"
                style = "color: white; background-color: #2076D1;">Bangkok</button>
                <button   class = "btn " onclick="showPopup('wrong')"
                style = "color: white; background-color: #2076D1;">Loei</button>
            </div>
    </div>
    
    <div id="correctPopup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="hidePopup('correct')">&times;</span>
            <h2>Nice !!!</h2>
            <h4>You are doing awesome </h4>
            <h4>the next one will be the last hardest one</h4>
            <h4>keep going until you reach the end</h4>
            <img class="fadeIn" style ="height: auto; width: 50%;"src="./pics/wow.gif" />
            <form action="functions.php" method = "post">
            <button class = "next-btn"  onclick="showPopup('correct')" name="next2"
                style = "color: white;">NEXT</button>
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