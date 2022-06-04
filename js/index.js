

let welder = document.getElementById("welder");
let blockCareer = document.getElementsByClassName("block-career");

let buttonSelectSpec = document.querySelector('.button-select-spec');
let block = document.querySelector('.block');
let welcomeText = document.querySelector('.welcomeText');
let buttonExit = document.querySelector('.button-exit');


buttonSelectSpec.onclick = function() {
    block.style.display = 'grid';
    welcomeText.style.display = 'none';
};

buttonExit.onclick = function() {
    block.style.display = 'none';
    welcomeText.style.display = 'flex';
};

// document.location.href = "http://www.site.ru";
//welder.onClick = function () {
//    console.log("sadf")
//}
// welder.onmouseover = function() {
//     welder.style.visibility = 'hidden'
//     console.log('onmouseover')
// };
// welder.onmouseout = function() {
//
//     welder.style.visibility = 'visible'
//     console.log('onmouseout')
// };
