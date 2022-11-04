const btnAddProject = document.querySelector('#projectsButtonAdd');
const backbtn = document.querySelector('#backToProjectListBtn');
const projectList = document.querySelector('#projectList');
const projectForm = document.querySelector('#projectForm');

function hookProjectList(){
    btnAddProject.addEventListener('click', function (){
        if(projectForm.classList.contains('hook')){
            projectForm.classList.remove('hook');
            projectList.classList.add('hook');
        }
    })
}

function backToProjectList(){
    backbtn.addEventListener('click', function (){
        if (projectList.classList.contains('hook')){
            projectList.classList.remove('hook');
            projectForm.classList.add('hook');
        }
    })
}
