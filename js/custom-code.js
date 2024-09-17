document.addEventListener("DOMContentLoaded", function () {
    function toggleAnswer(id) {
    var answerElement = document.getElementById(id);

    if (answerElement.style.display === "none" || !answerElement.style.display) {
        answerElement.style.display = "block";
        answerElement.style.maxHeight = answerElement.scrollHeight + "px"; // Automatically adjust to the content height
    } else {
        answerElement.style.maxHeight = "0";
        answerElement.style.display = "none"; 
    }
}


    // Apply the toggleAnswer function globally
    window.toggleAnswer = toggleAnswer;
});
