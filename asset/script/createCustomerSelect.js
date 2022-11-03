const selectCustomerURL = 'selectCustomer.php';
const dropdownCustomer = document.querySelector('#selectUserObject');
const inputupdtCustomer = document.querySelectorAll('#newCustomerForm input');

function asyncCustomerSelect(url) {
    return new Promise((resolution, rejet) => {
        const request = new XMLHttpRequest();
        request.open('POST', selectCustomerURL);
        request.responseType = 'json';
        request.onload = () => {
            resolution(request.response);
        }
        request.onerror = () => rejet(request.statusText)
        request.send();
    })
}

const promise = asyncCustomerSelect();
promise.then(value => implementSelectWithCustomer(value));
promise.then(value => updtCustomerInForm(value));

function implementSelectWithCustomer(arrayCustomer) {
    for (let i = 0; i < arrayCustomer.length; i++) {
        let implementsCustomer = Object.values(Object.values(arrayCustomer[i]));
        let j = i+1
        let newOption = new Option(implementsCustomer[0], j.toString());
        dropdownCustomer.add(newOption, undefined);
    }

}

function updtCustomerInForm(arrayCustomer) {
    dropdownCustomer.addEventListener('change', function () {
        console.log(this.selectedIndex)
        if (this.selectedIndex === 0){
            inputupdtCustomer[1].disabled = true;
            for (let i = 0; i < inputupdtCustomer.length; i++) {
                inputupdtCustomer[i].value = "";
            }
        }else{
            let implementOneCustomer = Object.values(Object.values(arrayCustomer[this.selectedIndex - 1]));
            console.log(implementOneCustomer);
            inputupdtCustomer[1].disabled = false;
            for (let i = 0; i < inputupdtCustomer.length; i++) {
                inputupdtCustomer[i].value = implementOneCustomer[i];
            }
        }
    });
}
