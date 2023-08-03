// console.log(123);
// $(<h1>Hello User</h1>)

// мне не удалось подключить библиотеку jQuery, поэтому задание выполнил используя свой код.

function showcats() {
    document.getElementById('kitty').style.opacity = "1";
    document.getElementById('submit1').style.opacity = "0";
    document.getElementById('submit1').style.display = "none"
    document.getElementById('kitty').style.transition = "2s";
 }

  function noshowcats() {
    document.getElementById('kitty').style.opacity = "0";
    document.getElementById('submit1').style.opacity = "1";
    document.getElementById('submit1').style.display = "inline"
    document.getElementById('submit1').style.transition = "1s"
    document.getElementById('kitty').style.transition = "0.5s";
 }


  