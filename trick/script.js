function validate()
{
    var keysuit =localStorage.getItem("keysuit");
    var keynum =localStorage.getItem("keynum");
    var firstnum =localStorage.getItem("firstnum");
    var firstsuit =localStorage.getItem("firstsuit");
    var secondnum =localStorage.getItem("secondnum");
    var secondsuit =localStorage.getItem("secondsuit");
    var thirdnum =localStorage.getItem("thirdnum");
    var thirdsuit =localStorage.getItem("thirdsuit");

    if ((keysuit == firstsuit && keynum== firstnum) ||
        (keysuit==secondsuit && keynum == secondnum )|| 
        (keysuit==thirdsuit &&  keynum == thirdnum) ||
        (firstsuit==thirdsuit &&  firstnum == thirdnum) ||
        (firstsuit==secondsuit && firstnum == secondnum )|| 
        (secondsuit==thirdsuit &&  secondnum == thirdnum))
    {
       
        alert("Please validate the cards correctly");
        return false;

    }
  
    
    
}