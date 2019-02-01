function valid(){
var x=document.getElementById('asd');
var y=document.getElementById('as');
if(x.value=="gepl123"&&y.value=="Guhan")
{
    var y=document.getElementById('s');
    alert("Login Successful");
    window.close();
    window.open("1.html");
}
else
{
    alert("Enter the correct Username and Password");
}
}