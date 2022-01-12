function myFunction(x) {
    x.classList.toggle("change");
    var x = document.getElementById("links");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
    x.style.display = "block";
    }
}


function myFunction(x) {
    x.classList.toggle("change");
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
// const topCenter = document.getElementById("topCenter");
// const meBurger = document.querySelector(".navbar");

// meBurger.addEventListener("click", (e) => {
//     console.log(window);

//     topCenter.classList.toggle("different");
    
// })
// if(window.innerWidth < 544){
//     topCenter.classList.toggle("different");
// }
// window.addEventListener("onResize", ()  =>{
//     console.log("test");
// })