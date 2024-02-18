function showPopup(type) {
  document.getElementById(type + "Popup").style.display = "block";
}

function hidePopup(type) {
  document.getElementById(type + "Popup").style.display = "none";
}

window.onload = function () {
  var gifContainer = document.getElementById("gifContainer");
  var textContainer = document.getElementById("textContainer");

  // Show the GIF for 5 seconds
  setTimeout(function () {
    gifContainer.style.display = "none";
    textContainer.style.display = "block";
  }, 5000);
};
