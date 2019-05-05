/* TABLA DE BUSQUEDA */
$(document).ready(function () {
    $("#myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});



// Botón subir imagen 1
var triggerUpload = document.getElementById('triggerUpload'),
    upInput = document.getElementById('filePicker'),
    preview = document.querySelector('.preview');

//force triggering the file upload here...
triggerUpload.onclick = function() {
  upInput.click();
};

  function showPreview() {
      preview.innerHTML = "<div class='loadingLogo'></div>";
	    preview.innerHTML += '<img id="img-preview" />';
	    var reader = new FileReader();
	    reader.onload = function () {
	        var img = document.getElementById('img-preview');
	        img.src = reader.result;
	    };
	    reader.readAsDataURL(e.target.files[0]);
      preview.removeChild(document.querySelector('.loadingLogo'));
      document.querySelector('.fileName').innerHTML = fileName + "<b> Uploaded!</b>";
  };
  
  //only do if supported image file
  if (new RegExp(accepted.join("|")).test(ext)) {
    showPreview();
  } else {
    preview.innerHTML = "";
    document.querySelector('.fileName').innerHTML = "Hey! Upload an image file, not a <b>." + ext + "</b> file!";
  }
  




// Botón subir imagen 2
var triggerUpload1 = document.getElementById('triggerUpload1'),
    upInput1 = document.getElementById('filePicker1'),
    preview1 = document.querySelector('.preview1');

//force triggering the file upload here...
triggerUpload1.onclick = function() {
  upInput1.click();
};


upInput1.onchange = function(e) {

  var uploaded1 = this.value,
      ext1 = uploaded1.substring(uploaded1.lastIndexOf('.') + 1),
      ext1 = ext1.toLowerCase(),
      fileName1 = uploaded1.substring(uploaded1.lastIndexOf("\\") + 1),
      accepted1 = ["jpg", "png", "gif", "jpeg"];
  
  /*
    ::Add in blank img tag and spinner
    ::Use FileReader to read the img data
    ::Set the image source to the FileReader data
  */
  function showPreview1() {
      preview1.innerHTML = "<div class='loadingLogo'></div>";
	    preview1.innerHTML += '<img id="img-preview1" />';
	    var reader1 = new FileReader();
	    reader1.onload = function () {
	        var img1 = document.getElementById('img-preview1');
	        img1.src = reader1.result;
	    };
	    reader1.readAsDataURL(e.target.files[0]);
      preview1.removeChild(document.querySelector('.loadingLogo'));
      document.querySelector('.fileName1').innerHTML = fileName1 + "<b> Uploaded!</b>";
  };
  if (new RegExp(accepted1.join("|")).test(ext1)) {
    showPreview1();
  } else {
    preview1.innerHTML = "";
    document.querySelector('.fileName1').innerHTML = "Hey! Upload an image file, not a <b>." + ext1 + "</b> file!";
  }
  
}






