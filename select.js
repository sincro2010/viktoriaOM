let select = document.querySelector('.select');
let selectOption = select.options[select.selectedIndex];
var lastSelected = localStorage.getItem('select');



if(lastSelected) {
    select.value = lastSelected; 
}

select.onchange = function () {
    lastSelected = select.options[select.selectedIndex].value;
    window.location = this.value;
    console.log(lastSelected);
    localStorage.setItem('select', lastSelected);
}

