
var dive= document.getElementById("bleu");
var divz= document.getElementById("blanc");
//console.log(dive);
  dive.addEventListener( 'mousemove', function (e){
      console.log("faillot");
      document.getElementById('xx2').textContent = e.x;
      document.getElementById('yy2').textContent = e.y;
  });



  divz.addEventListener('mousemove', function (e){
      console.log("ouilaa");
      document.getElementById('xx').textContent = e.x;
      document.getElementById('yy').textContent = e.y;
  });





