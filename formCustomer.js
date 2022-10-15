const customerBtn = document.querySelector("#newCustomerBtn");
const contactBtn = document.querySelector("#updateContactBtn");
const customerForm = document.querySelector("#newCustomerForm");
const contactForm = document.querySelector("#updateContactForm");


function landingCustomerForm(){
    if (body){
        contactForm.classList.add("hook");
        customerBtn.classList.add("customerSectionButtonActive");
    }
}

function choosedCustomerSectionForm(){
    customerBtn.addEventListener('click', function (){
        if (customerForm.classList.contains('hook')){
            customerForm.classList.remove('hook');
            contactForm.classList.add('hook');
            customerBtn.classList.add('customerSectionButtonActive');
            contactBtn.classList.remove('customerSectionButtonActive');
        }
    })
    contactBtn.addEventListener('click', function (){
        if (contactForm.classList.contains('hook')){
            contactForm.classList.remove('hook');
            customerForm.classList.add('hook');
            customerBtn.classList.remove('customerSectionButtonActive');
            contactBtn.classList.add('customerSectionButtonActive');
        }
    })
}

