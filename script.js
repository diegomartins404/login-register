var login = document.getElementsByClassName("login")[0];
var signup = document.getElementsByClassName("signup")[0];
function changetosignup(){
  login.style.display = 'none';
  signup.style.display = 'grid';
}
function changetologin(){
  signup.style.display = 'none';
  login.style.display = 'grid';
}