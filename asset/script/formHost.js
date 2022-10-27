const hostBtn = document.querySelector("#newHostBtn");
const contactBtnHost = document.querySelector("#updateContactHostBtn");
const hostForm = document.querySelector("#newHostForm");
const contactFormHost = document.querySelector("#updateContactFormHost");


function landingHostForm(){
    if (body){
        contactFormHost.classList.add("hook");
        hostBtn.classList.add("hostSectionButtonActive");
    }
}

function choosedHostSectionForm(){
    hostBtn.addEventListener('click', function (){
        if (hostForm.classList.contains('hook')){
            hostForm.classList.remove('hook');
            contactFormHost.classList.add('hook');
            hostBtn.classList.add('hostSectionButtonActive');
            contactBtnHost.classList.remove('hostSectionButtonActive');
        }
    })
    contactBtnHost.addEventListener('click', function (){
        if (contactFormHost.classList.contains('hook')){
            contactFormHost.classList.remove('hook');
            hostForm.classList.add('hook');
            hostBtn.classList.remove('hostSectionButtonActive');
            contactBtnHost.classList.add('hostSectionButtonActive');
        }
    })
}


