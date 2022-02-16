<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>search page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
</head>
<body>

<script>
    $(document).ready(function(){
        
        $('#search').keyup(function(){

            var search = $('#search').val();


            $.ajax({

                url:'search1.php',
                data:{search:search},
                type: 'POST',
                success:function(data){

                    if(!data.error){
                        $('#result').html(data);
                    }

                }

            });

        });


    });
</script>

    <div id="container" class="col-xs-6 col-xs-offset-3  ">

        <h2>Search animal for adoption</h2>

        <input type="text" name="search" id="search" class="form-control" placeholder="Search animal "><br><br>

        <h2 class="bg-success" id="result"></h2>

    </div>

</body>
</html>