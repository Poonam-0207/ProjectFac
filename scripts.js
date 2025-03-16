document.addEventListener("DOMContentLoaded", () => {
    const announcements = document.querySelectorAll(".announcement");
    announcements.forEach((announcement) => {
        announcement.addEventListener("click", () => {
            alert("You clicked on an announcement!");
        });
    });
});