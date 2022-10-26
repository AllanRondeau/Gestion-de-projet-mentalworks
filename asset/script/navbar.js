const dashboardNav = document.querySelector("#dashboardNav");
const projectsNav = document.querySelector("#projectsNav");
const customerNav = document.querySelector("#customerNav");
const hostNav = document.querySelector("#hostNav");

const dashboardSection = document.querySelector("#dashboard");
const projectsSection = document.querySelector("#projects");
const customerSection = document.querySelector("#customer");
const hostSection = document.querySelector("#host");
const section = document.querySelectorAll("section");
const body = document.querySelector("body")

function landing(){
    if (body) {
        for(let i = 0; i < section.length; i++){
            section[i].classList.add("hook");
        }
        dashboardSection.classList.remove("hook");
    }
}

function navbarSectionChoose(){
    dashboardNav.addEventListener('click', function() {
        if (dashboardSection.classList.contains('hook')){
            for(let i = 0; i < section.length; i++){
                section[i].classList.add("hook");
            }
            dashboardSection.classList.remove("hook");
        }
    })
    projectsNav.addEventListener('click', function() {
        if (projectsSection.classList.contains('hook')){
            for(let i = 0; i < section.length; i++){
                section[i].classList.add("hook");
            }
            projectsSection.classList.remove("hook");
        }
    })
    customerNav.addEventListener('click', function() {
        if (customerSection.classList.contains('hook')){
            for(let i = 0; i < section.length; i++){
                section[i].classList.add("hook");
            }
            customerSection.classList.remove("hook");
        }
    })
    hostNav.addEventListener('click', function() {
        if (hostSection.classList.contains('hook')){
            for(let i = 0; i < section.length; i++){
                section[i].classList.add("hook");
            }
            hostSection.classList.remove("hook");
        }
    })
}