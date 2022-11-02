const selectCustomerURL = 'selectCustomer.php';
const dropdownCustomer = document.querySelector('#selectUserObject')

const request = new XMLHttpRequest();

request.open('POST', selectCustomerURL);

request.responseType = 'json';
request.send();

request.onload = function(){
    let Customer = request.response;
    for(let i = 0; i<Customer.length; i++){
        let newOption = new
    }
}