const nameInputsCustomer = document.querySelectorAll("#newCustomerForm input");

function updtCustomer(name, code, note){
    nameInputsCustomer[0] = name;
    nameInputsCustomer[1] = code;
    nameInputsCustomer[2] = note;
}
