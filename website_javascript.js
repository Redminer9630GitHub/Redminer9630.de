document.getElementById("moreInfoBtn").addEventListener("click", function() {
    var moreInfo = document.getElementById("moreInfo");
    if (moreInfo.style.display === "none") {
        moreInfo.style.display = "block";
        this.textContent = "Weniger anzeigen";
    } else {
        moreInfo.style.display = "none";
        this.textContent = "Mehr über Redminer9630 erfahren";
    }
});
