const navSlide = () => {
    const burger = document.querySelector(".burger"); //DONT FORGET to add (.) because youre calling a class!!//
    const nav = document.querySelector(".nav-links");
    const navLinks = document.querySelectorAll(".nav-links li");

    //Toggle NAV
    burger.addEventListener("click", () => {
        //Code to toggle nav
        nav.classList.toggle("nav-active");
        //Code to animate links
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = ""; // ("")aka nothing
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 +
                    0.6}s`;
            }
            //using BACKTICKS``
            //DevEd hamburger menu tutorial 26:00 kinda explains the above content
            //the above code creates a calculated delay in the running code for visual effect.
            console.log(index / 7);
        });
        //BURGER ANIMATION
        burger.classList.toggle("sam");
    });
};
// invoke line #1 navSlide or function wont work//
navSlide();

// code that i need to reseach more.
// link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 1.5}s`;
