$(window).load(function(){

  //document.getElementById('imgSalida').style.display = "show";

 $(function() {
  //agrega el evento a el control
  $('#imagen').change(function(e) {
      addImage(e); 
     });

     function addImage(e){
      var file = e.target.files[0],
      imageType = /image.*/;
    
      //if (!file.type.match(imageType))
       //return;
  
      var reader = new FileReader();
      reader.onload = fileOnload;
      if (file != null){
        reader.readAsDataURL(file);
      }else{
        document.getElementById('image').innerHTML = "";
      }
     }
  
     function fileOnload(e) {
      var result=e.target.result;
      document.getElementById('image').innerHTML = '<img id="imgSalida" width="50%" height="50%" src='+result+'    />';
     }
    });
  });