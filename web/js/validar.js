function validarNumero(oEvento)
{
    var evento=oEvento || window.event;
    var codigo=oEvento.charCode || oEvento.keyCode;
    if (((codigo>=48)&&(codigo<=57))||(codigo == 13)||(codigo == 8)||((codigo>=96)&&(codigo<=105))||((codigo>=37)&&(codigo<=40))||(codigo == 46)||(codigo == 110)||(codigo == 190))
        return true;
    else
        return false;
}
