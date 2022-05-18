

    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
    




function tourSeachRun(str) {


    var where = $("#destinations").val();
    var type = $("#tour_type").val();
    console.log(where);
    console.log(type);


    if(where==''){ var whereValue="--";} else { var whereValue = where ;}
    if(type==''){ var typeValue="--";} else { var typeValue = type ;}
    var type = $("#tour_type").val();

   var fullurl= str+'/tour-ajex-get/'+whereValue+'/'+typeValue; 
   
   console.log("where :"+fullurl);

   //var loader = '<div class="col-md-12" style="text-align: center; padding:50px;"><img src="' +str+'/assets/img/Magnify-1s-200px.gif" style="size:50px !important;"></div>';
   var loader ='<div class="col-md-12" style="text-align: center; margin:5px 5px 200px 5px !important;"><img src="' +str+'/assets/img/Magnify-1s-200px.gif" style="width:50px !important;"></div>'

  // document.getElementById("div-search-result").innerHTML = loader;
    
   //console.log(fullurl);
    
        if (str == "") {
                document.getElementById("div-search-result").innerHTML = "";
                return;
                } 
        else {
                if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("div-search-result").innerHTML ='';
                    document.getElementById("div-search-result").innerHTML = this.responseText;
                } else {
                    document.getElementById("div-search-result").innerHTML = loader;
                }
            };
            xmlhttp.open("GET",fullurl,true);
            xmlhttp.send();
            
        }

   
        
        
    }



         $( function() {
            $( "#datetimepicker1" ).datepicker(
                {
                    dateFormat: "yy-mm-dd"
                  }
            );

         
          } );



    


        
        