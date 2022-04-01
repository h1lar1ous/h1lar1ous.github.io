FReader = new FileReader();
 
// событие, когда файл загрузится
FReader.onload = function(e) {
    document.querySelector("#result").src = e.target.result;
};
 
// выполнение функции при выборки файла
document.querySelector(".input__file").addEventListener("change", loadImageFile);
 
// функция выборки файла
function loadImageFile() {
    var file = document.querySelector(".input__file").files[0];
    FReader.readAsDataURL(file);
}
