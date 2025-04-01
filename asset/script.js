
var SignUp=document.getElementById("SignUp");
var SignIn=document.getElementById("SignIn");
var otheropptionUp=document.getElementById("otheropptionUp");
var otheropptionIn=document.getElementById("otheropptionIn");

 


otheropptionIn.addEventListener('click', function(){
SignUp.style.display="none";
SignIn.style.display="block";
});

otheropptionUp.addEventListener('click', function(){
SignUp.style.display="block";
SignIn.style.display="none";
});