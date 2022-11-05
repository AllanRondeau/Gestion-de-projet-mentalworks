const selectCustomerURL = 'selectCustomer.php';
const dropdownCustomer = document.querySelector('#selectUserObject');
const inputupdtCustomer = document.querySelectorAll('#newCustomerForm input');
const selectHostUrl = 'selectHost.php';
const dropdownHost = document.querySelector('#selectHostObject');
const inputupdtHost = document.querySelectorAll('#newHostForm input');

const selectProjectURL = 'selectProject.php';
const projectListDiv = document.querySelector('#projectListContainer');
const btnSubmitCustomer = document.querySelector('#customerSaveBtn');
const btnSubmitHost = document.querySelector('#hostSaveBtn');

function asyncSelect(url) {
    return new Promise((resolution, reject) => {
        const request = new XMLHttpRequest();
        request.open('POST', url);
        request.responseType = 'json';
        request.onload = () => {
            resolution(request.response);
        }
        request.onerror = () => reject(request.statusText)
        request.send();
    })
}

const promiseCustomer = asyncSelect(selectCustomerURL);
promiseCustomer.then(value => implementSelectWithCustomer(value));
promiseCustomer.then(value => updtCustomerInForm(value));

const promiseHost = asyncSelect(selectHostUrl);
promiseHost.then(value => implementSelectWithHost(value));
promiseHost.then(value => updtHostInForm(value));

const promiseProject = asyncSelect(selectProjectURL);
promiseProject.then(value =>implementDivWithProjects(value));
// promiseProject.then(value =>);


function implementSelectWithCustomer(arrayCustomer) {
    for (let i = 0; i < arrayCustomer.length; i++) {
        let implementsCustomer = Object.values(Object.values(arrayCustomer[i]));
        let j = i + 1
        let newOption = new Option(implementsCustomer[0], j.toString());
        dropdownCustomer.add(newOption, undefined);
    }

}

function updtCustomerInForm(arrayCustomer) {
    dropdownCustomer.addEventListener('change', function () {
        if (this.selectedIndex === 0) {
            btnSubmitCustomer.name = "customerInsertBtn";
            for (let i = 0; i < inputupdtCustomer.length; i++) {
                inputupdtCustomer[i].value = "";
            }
        } else {
            let implementOneCustomer = Object.values(Object.values(arrayCustomer[this.selectedIndex - 1]));
            btnSubmitCustomer.name = "customerUpdateBtn";
            for (let i = 0; i < inputupdtCustomer.length; i++) {
                inputupdtCustomer[i].value = implementOneCustomer[i];
            }
        }
    });
}

function implementSelectWithHost(arrayHost) {
    for (let i = 0; i < arrayHost.length; i++) {
        let implementsHost = Object.values(Object.values(arrayHost[i]));
        let j = i + 1
        let newOption = new Option(implementsHost[0], j.toString());
        dropdownHost.add(newOption, undefined);
    }
}

function updtHostInForm(arrayHost) {
    dropdownHost.addEventListener('change', function () {
        if (this.selectedIndex === 0) {
            btnSubmitHost.name = "hostInsertBtn";
            for (let i = 0; i < inputupdtHost.length; i++) {
                inputupdtHost[i].value = "";
            }
        } else {
            let implementOneHost = Object.values(Object.values(arrayHost[this.selectedIndex - 1]));
            console.log(this.selectedIndex);
            btnSubmitHost.name = "hostUpdateBtn";
            for (let i = 0; i < inputupdtHost.length; i++) {
                inputupdtHost[i].value = implementOneHost[i];
            }
        }
    });
}

function implementDivWithProjects(arrayProject) {
    for (let i = 0; i < arrayProject.length; i++) {
        let implementProjects = Object.values(Object.values(arrayProject[i]));
        let j = i + 1;
        let newProjectDiv = document.createElement("div");
        newProjectDiv.id = i;
        let newTitleProject = document.createElement("h6");
        let newContentProjet = document.createTextNode(arrayProject[0]);
        newTitleProject.appendChild(newContentProjet);
        newProjectDiv.appendChild(newTitleProject);
    }
}
