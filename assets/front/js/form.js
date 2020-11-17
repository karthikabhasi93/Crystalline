$("#contactForm").on("submit",function(e){
    e.preventDefault();
    



    $("#contactForm").validate({
        // Specify validation rules
        rules: {
          // The key name on the left side is the name attribute
          // of an input field. Validation rules are defined
          // on the right side
          name: "required",
          number: {
            required:true,
            number:true  
          },
          email: {
            required: true,
            // Specify that email should be validated
            // by the built-in "email" rule
            email: true
          }
        },
        // Specify validation error messages
        messages: {
          name: "Please enter your Name",
          number: "Please enter your Mobile Number",
          email: "Please enter a valid email address"
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            var url = $('#contactForm').data('url');
            var data = $('#contactForm').serializeArray();
            $.post(url,{data:data},function(status){
                var result = JSON.parse(status);
                console.log(result['message']);
                if(result['status']==200){
                    swal("success", result['message'], "success");
                }else{
                    swal("success", result['message'], "error");
                }
                
            })
            $('#contactForm').trigger("reset");

        }
      });


    
  
})


$(document).ready(function(){
  $("#contact").modal()
})

function gotoWhatsapp(){
  var msg = $("#mobile_number").val();
  window.location.href="https://api.whatsapp.com/send?phone=+919539494947&text="+encodeURI(msg);
}