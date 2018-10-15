<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        setTimeout(function(){
            $.ajax({
              url: "ajax/temp.php",
              dataType: 'json',
              success: function(result){
                  //{"error":1,"message":"Fail","status":100,"itemtitle":"please enter title","itemalias":"please enter alias","itemdescription":"Please enter description"}
                  var response = result.value;
                  for (var key in response) {
                        if (response.hasOwnProperty(key)) {
                            console.log(key + " -> " + response[key]);
                            //itemtitle_error
                            $("#"+key+"_error").html(response[key]);
                        }
                  }
                  
              }
            });
        }, 2000);
    });
</script>

<div class="test">
<div id="itemtitle_error"></div>
<div id="itemalias_error"></div>
<div id="itemdescription_error"></div>
<div id="displaystatus_error"></div>
</div>