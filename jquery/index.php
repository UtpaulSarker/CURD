<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <input type="text" value="10">
        <input type="text" value="13">
        <input type="text" value="16">
        <input type="text" value="19">
        <input type="text" value="14">
        <input type="text" value="17">
        <input type="text" value="2">
        <input type="text" value="9">
        <input type="text" value="1">
        <input type="text" value="3">
        <input type="text" value="21">
        <input type="text" value="24">
        <input type="text" value="18">
        <input type="text" value="15">
        <input type="text" value="11">

        <button class="btn"> btn</button>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {

            $('.btn').click(function(e) {
                e.preventDefault();
                var id_array = [];

                $('input').each(function(index) {
                    var id = $(this).val();

                    id_array.push(id);
                });

                id_array.sort(function(a, b){return a-b});

                alert(id_array);

            });
        });
    </script>
</body>

</html>