function home(){
    if (window.confirm("This will Open Home Page")) {
    window.open("../home/homepage.html","_self");
  }
}
function ordernow(){
    if (window.confirm("This will Open Order Page")) {
    window.open("../billing/Customer Information.html","_self");
  }
}
function register(){
    if (window.confirm("This will Open SignUp Page")) {
    window.open("../login/signup.html","_self");
  }
}
function reservation(){
    if (window.confirm("This will Open Reservation Page")) {
    window.open("../reservation/Reservation2.html","_self");
  }
}
function breakfast(){
    alert("                WELCOME TO FOOD LAB\n\nToday's Special Dish is Ven Pongal Please try it Once.\n                                                                         -Thank You");                                         

}
function lunch(){
    alert("                WELCOME TO FOOD LAB\n\nToday's Special Dish is Chettinad Chicken Please try it Once.\n                                                                         -Thank You");                                         

}
function dinner(){
    alert("                WELCOME TO FOOD LAB\n\nToday's Special Dish is Bisi Bele Bath Please try it Once.\n                                                                         -Thank You");                                         

}
function desserts(){
    alert("                WELCOME TO FOOD LAB\n\nToday's Special Dish is Pistachio Phirni Please try it Once.\n                                                                         -Thank You");                                         

}
mybutton = document.getElementsByClassName("button1");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
