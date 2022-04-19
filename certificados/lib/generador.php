  <script type="text/javascript">
    

  



  function genPDF(){
    var doc = new jsPDF('l', 'mm', 'a4');
    var logo = new Image();

logo.src = 'images/certificado.jpg';

doc.addImage(logo, 'JPEG', 0 , 0,297,210);
    
let nombre = document.getElementsByName('nombre')[0].value;

// var nombre = document.getElementsById('nombre').value;
let documento_1 = document.getElementsByName('documento')[0].value;
let documento = (new Intl.NumberFormat().format(documento_1))

let ciudad = document.getElementsByName('ciudad')[0].value;
let fecha = document.getElementsByName('fecha')[0].value;

let cadenaFecha = fecha.split("-");

let año = cadenaFecha[0];
let dia_mes = cadenaFecha[1];
let dia = cadenaFecha[2];

if (dia_mes==12) {
  mes="Diciembre";
}else if (dia_mes==11) {
  mes="Noviembre";
}else if (dia_mes==10) {
  mes=" Octubre";
}else if (dia_mes==9) {
  mes="Septiembre";
}else if (dia_mes==8) {
  mes=" Agosto";
}else if (dia_mes==7) {
  mes="  Julio";
}else if (dia_mes==6) {
  mes="  Junio";
}else if (dia_mes==5) {
  mes="   Mayo";
}else if (dia_mes==4) {
  mes="  Abril";
}else if (dia_mes==3) {
  mes="  Marzo";
}else if (dia_mes==2) {
  mes=" Febrero";
}else if (dia_mes==1) {
  mes="  Enero";
}else{
  mes="error";
}


    doc.setFontSize(26);
    doc.setFont("times");
 // NOMBRE
    doc.text(80,93,nombre);
//NUMERO DE DOCUMENTO
    doc.text(95,115,documento+"  de  "+ciudad);
    doc.setFontSize(19)
    doc.text(139,142,dia);
    doc.text(156,142,mes);
    doc.text(197,142,año);
    doc.save(documento_1+fecha);


    }

  </script>