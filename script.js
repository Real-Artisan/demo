sign:boolean = false;
months = ["Jan","Feb"] 

//Toggle sign up!!
function toggleSignup()
{
    var unit = document.getElementById("signup-form")
 if(unit.style.display !== "block")
 {
    unit.style.display = "block"
 }
 else
 {
    unit.style.display = "none"
 }
}