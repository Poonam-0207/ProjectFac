document.querySelectorAll('nav ul li a').forEach(tab => {
    tab.addEventListener('click', function (e) {
        e.preventDefault();
        // Remove active class from all tabs and sections
        document.querySelectorAll('nav ul li a').forEach(item => item.classList.remove('active'));
        document.querySelectorAll('.content').forEach(section => section.classList.remove('active'));

        // Add active class to clicked tab and corresponding section
        this.classList.add('active');
        const targetId = this.getAttribute('href').substring(1);
        document.getElementById(targetId).classList.add('active');
    });
});