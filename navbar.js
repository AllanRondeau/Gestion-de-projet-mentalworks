const dashboardNav = document.querySelector("#dashboardNav");
const projectsNav = document.querySelector("#projectsNav");
const customerNav = document.querySelector("#customerNav");
const hostNav = document.querySelector("#hostNav");

const dashboardSection = document.querySelector("#dashboard")
const projectsSection = document.querySelector("#projects")
const customerSection = document.querySelector("#customer")
const hostSection = document.querySelector("#host")

function landing(){
    dashboardSection.classList.add(".display");
    projectsSection.classList.add(".hook");
    customerSection.classList.add(".hook");
    hostSection.classList.add(".hook");
}

function navbarSectionChoose(){
    dashboardNav.addEventListener('click', () =>{
        if (dashboardSection.classList.contains('.hook')){
            dashboardSection.classList.remove('.hook');
            projectsSection.classList.add('.hook');
            customerSection.classList.add('.hook');
            hostSection.classList.add('.hook');
        }
    })
    projectsNav.addEventListener('click', () =>{
        if (projectsSection.classList.contains('.hook')){
            projectsSection.classList.remove('.hook');
            dashboardSection.classList.add('.hook');
            customerSection.classList.add('.hook');
            hostSection.classList.add('.hook');
        }
    })
    customerNav.addEventListener('click', () =>{
        if (customerSection.classList.contains('.hook')){
            customerSection.classList.remove('.hook');
            dashboardSection.classList.add('.hook');
            projectsSection.classList.add('.hook');
            hostSection.classList.add('.hook');
        }
    })
    hostNav.addEventListener('click', () =>{
        if (hostSection.classList.contains('.hook')){
            hostSection.classList.remove('.hook');
            dashboardSection.classList.add('.hook');
            customerSection.classList.add('.hook');
            projectsSection.classList.add('.hook');
        }
    })
}