<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
            $('#myDropDown').change(function(){
                //Selected value
                var inputValue = $(this).val();
                alert("value in js "+inputValue);

                //Ajax for calling php function
                $.post('submit.php', { dropdownValue: inputValue }, function(data){
                    alert('ajax completed. Response:  '+data);
                    //do after submission operation in DOM
                });
            });
        });
        </script>
    </head>
<body>
    <!-- <select id="myDropDown">
        <option value='' disabled selected>Sort</option>
        <option value='Games'>Games</option>
        <option value='PC'>Pc</option>
        <option value='Mouse'>Mouse</option>
     </select> -->

</body>
</html>