let date = new Date();
console.log(date.getHours());

let timeCheck = date.getHours();

if(timeCheck > 7 && timeCheck < 20) {
    localStorage.removeItem('dark');
    localStorage.setItem('theme', 'light');

}

if(timeCheck < 7 || timeCheck > 20) {
    localStorage.removeItem('light');
    localStorage.setItem('theme', 'dark');
} 

if(localStorage.getItem('theme', 'light')) {
    document.querySelector('.main-left').classList.add('white-main-left');
    document.querySelector('.main-text').classList.add('white-main-text');
    document.querySelector('.main-info').classList.add('white-main-info');
    document.querySelector('.buttons').classList.add('white-buttons');
    document.querySelector('.main-right-wrapper').classList.add('white-main-right-wrapper');
    document.querySelector('.active').classList.add('white-active');
    document.querySelector('.main-right').classList.add('white-main-right');
}

if(localStorage.getItem('theme', 'dark')) {
    document.querySelector('.main-left').classList.remove('white-main-left');
    document.querySelector('.main-text').classList.remove('white-main-text');
    document.querySelector('.main-info').classList.remove('white-main-info');
    document.querySelector('.buttons').classList.remove('white-buttons');
    document.querySelector('.main-right-wrapper').classList.remove('white-main-right-wrapper');
    document.querySelector('.active').classList.remove('white-active');
    document.querySelector('.main-right').classList.remove('white-main-right');
}

const themeSwitchers = document.querySelectorAll('.change-theme');

themeSwitchers.forEach(switcher => {
    switcher.addEventListener('click', function() {
        applyTheme(this.dataset.theme);

        localStorage.setItem('theme', this.dataset.theme);


    });
});

function applyTheme(themeName) {
    let themeUrl = `css/theme-${themeName}.css`;
    document.querySelector('[title="theme"]').setAttribute('href', themeUrl);
}

