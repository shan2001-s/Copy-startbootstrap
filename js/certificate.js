$(document).ready(function(){
    $('#repeater').createRepeater();

        $('#repeater_certificate_form').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:"certificate_insert.php",
                method:"POST",
                data:$(this).serialize(),
                success:function(data)
                {
                    $('#repeater_certificate_form')[0].reset();
                    $('#repeater').createRepeater();
                    $('#success_result').html(data);
                  
                }
        
            })
        });
    }) 
 $(document).ready(function(){       
   
    $("body").on( "click", ".delete", function( event ) {
        console.log("delete");
       var result=confirm("Are you sure to delete?");
        if(result)
        {
            var cid=$(this).parents('td').attr('cid');
            event.preventDefault();
            $.ajax({
                url:"delete_crew.php",
                type:"post",
                data:{id:cid},
                error:function(){
                    alert("Fail to delete");
                },
                success:function(results){
                    $('#tbody').html(results);
                    }
            })
        }
        
        
        
    });
}) 