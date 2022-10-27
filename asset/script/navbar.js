const dashboardNav = document.querySelector("#dashboardNav");
const projectsNav = document.querySelector("#projectsNav");
const customerNav = document.querySelector("#customerNav");
const hostNav = document.querySelector("#hostNav");

const dashboardSection = document.querySelector("#dashboard");
const projectsSection = document.querySelector("#projects");
const customerSection = document.querySelector("#customer");
const hostSection = document.querySelector("#host");
const section = document.querySelectorAll("section");
const navSectionLink = document.querySelectorAll("nav a");
const body = document.querySelector("body")

function landing(){
    if (body) {
        for(let i = 0; i < section.length; i++){
            section[i].classList.add("hook");
        }
        dashboardSection.classList.remove("hook");
        dashboardNav.classList.add("activeNavBtn");
    }
}

function navbarSectionChoose(){
    dashboardNav.addEventListener('click', function() {
        if (dashboardSection.classList.contains('hook')){
            for(let i = 0; i < section.length; i++){
                section[i].classList.add("hook");
            }
            for(let i = 0; i < navSectionLink.length; i++){
                navSectionLink[i].classList.add("inactiveNavBtn");
            }
            dashboardSection.classList.remove("hook");
            dashboardNav.classList.remove("inactiveNavBtn");
            dashboardNav.classList.add("activeNavBtn");
        }
    })
    projectsNav.addEventListener('click', function() {
        if (projectsSection.classList.contains('hook')){
            for(let i = 0; i < section.length; i++){
                section[i].classList.add("hook");
            }
            for(let i = 0; i < navSectionLink.length; i++){
                navSectionLink[i].classList.add("inactiveNavBtn");
            }
            projectsSection.classList.remove("hook");
            projectsNav.classList.remove("inactiveNavBtn");
            projectsNav.classList.add("activeNavBtn");
        }
    })
    customerNav.addEventListener('click', function() {
        if (customerSection.classList.contains('hook')){
            for(let i = 0; i < section.length; i++){
                section[i].classList.add("hook");
            }
            for(let i = 0; i < navSectionLink.length; i++){
                navSectionLink[i].classList.add("inactiveNavBtn");
            }
            customerSection.classList.remove("hook");
            customerNav.classList.remove("inactiveNavBtn");
            customerNav.classList.add("activeNavBtn");
        }
    })
    hostNav.addEventListener('click', function() {
        if (hostSection.classList.contains('hook')){
            for(let i = 0; i < section.length; i++){
                section[i].classList.add("hook");
            }
            for(let i = 0; i < navSectionLink.length; i++){
                navSectionLink[i].classList.add("inactiveNavBtn");
            }
            hostSection.classList.remove("hook");
            hostNav.classList.remove("inactiveNavBtn");
            hostNav.classList.add("activeNavBtn");
        }
    })
}