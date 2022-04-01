let dataBtn = document.querySelector('.data');
let groupBtn = document.querySelector('.group');
let worksBtn = document.querySelector('.works');
let marksBtn = document.querySelector('.marks');
let teachersBtn = document.querySelector('.teachers');
let downloadBtn = document.querySelector('.download');

dataBtn.onclick = () => {
    groupBtn.classList.remove("active");
    worksBtn.classList.remove("active");
    marksBtn.classList.remove("active");
    teachersBtn.classList.remove("active");
    downloadBtn.classList.remove("active");
    dataBtn.classList.add("active");
}

groupBtn.onclick = () => {
    dataBtn.classList.remove("active");
    worksBtn.classList.remove("active");
    marksBtn.classList.remove("active");
    teachersBtn.classList.remove("active");
    downloadBtn.classList.remove("active");
    groupBtn.classList.add("active");
}

worksBtn.onclick = () => {
    dataBtn.classList.remove("active");
    groupBtn.classList.remove("active");
    marksBtn.classList.remove("active");
    teachersBtn.classList.remove("active");
    downloadBtn.classList.remove("active");
    worksBtn.classList.add("active");
}

marksBtn.onclick = () => {
    dataBtn.classList.remove("active");
    groupBtn.classList.remove("active");
    worksBtn.classList.remove("active");
    teachersBtn.classList.remove("active");
    downloadBtn.classList.remove("active");
    marksBtn.classList.add("active");
}

teachersBtn.onclick = () => {
    dataBtn.classList.remove("active");
    groupBtn.classList.remove("active");
    worksBtn.classList.remove("active");
    marksBtn.classList.remove("active");
    downloadBtn.classList.remove("active");
    teachersBtn.classList.add("active");
}

downloadBtn.onclick = () => {
    dataBtn.classList.remove("active");
    groupBtn.classList.remove("active");
    worksBtn.classList.remove("active");
    marksBtn.classList.remove("active");
    teachersBtn.classList.remove("active");
    downloadBtn.classList.add("active");
}