<?php
    view('partials/header.partial.php', ['title' => 'Create']);
?>
<body>
    <h1>Create</h1>
    <div>   
        <form action="/create" method="post">
            <!--WILL SESSION IN THE EMPLOYEE HERE-->
            <input type="hidden" name="customer" value="<?=$_SESSION['customer']['id']?>">
            <input required type="datetime-local" name="pickup" id="">
            <input required type="datetime-local" name="dropoff" id="">
            <input type="submit" value="Create">
        </form>
    </div>
</body>
</html>