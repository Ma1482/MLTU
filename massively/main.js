let btnMeun = document.getElementById("menu-btn");
let btn_close = document.getElementById("x");
let license = document.getElementById("license-button");
let navList = document.getElementById("navList");
let licensetitel = document.getElementById("licensetitel");

btnMeun.addEventListener("click",()=>{
    navList.classList.add("show2")
})
x.addEventListener("click",()=>{
    navList.classList.remove("show2")
})
window.onscroll = () => {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 700  ) {
        btnMeun.classList.add("test")
        console.log(document.documentElement.scrollTop)
      } 
    else {
        btnMeun.classList.remove("test")
      }
    //   *************************************************
      if (document.documentElement.scrollTop > 190 ) {
        licensetitel.classList.add("show1")
        console.log(document.documentElement.scrollTop)
      } 
    else {
        licensetitel.classList.remove("show1")
      }
    //   ***********************************************
    if (document.documentElement.scrollTop > 215  ) {
        license.classList.add("show")
        console.log(document.documentElement.scrollTop)
      } 
    else {
        license.classList.remove("show")
      }

     

};

