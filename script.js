document.addEventListener("DOMContentLoaded", () => {
    const feedbackEntries = document.querySelectorAll(".feedback");
    feedbackEntries.forEach((entry) => {
        entry.addEventListener("click", () => {
            alert("Feedback clicked!");
        });
    });
}