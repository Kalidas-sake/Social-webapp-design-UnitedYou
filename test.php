<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CSS Positions</title>
    <style>
        .static{
            background-color: #cae8ca;
            border: 2px solid #4CAF50;
            width: 200px;
            color: teal;
            text-align: center;
        }
        .relative{
            background-color: #cae8ca;
            border: 2px solid #4CAF50;
            width: 200px;
            color: teal;
            text-align: center;
        }
        .relative_new{
            background-color: #cae8ca;
            border: 2px solid #4CAF50;
            width: 400px;
            height: 200px;
            color: teal;
            text-align: center;
            left: 50px;
            top: 50px;
            margin-bottom: 10px;
        }
        .absolute{
            background-color: #cae8ca;
            border: 2px solid #4CAF50;
            width: 200px;
            color: teal;
            text-align: center;
            top: 50px;
            left: 50px;
        }
        .fixed{
            background-color: #cae8ca;
            border: 2px solid #4CAF50;
            width: 200px;
            color: teal;
            text-align: center;
            top: 0;
            right: 0;
            margin-bottom: 100px;
        }
        .sticky{
            background-color: #cae8ca;
            border: 2px solid #4CAF50;
            top: 0;
            padding: 5px;
        }
    </style>
</head>
<body>

<div class="static">
    <p>Static</p>
</div>

<div class="relative">
    <p>Relative</p>
</div>


<div class="relative_new">
    <p>Ancestor</p>
    <div class="absolute">
        <p>Absolute</p>
    </div>
</div>

<br><br>

<div class="fixed">
    <p>Fixed</p>
</div>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, ducimus, repellat. Aspernatur at quae sed veniam. Cumque distinctio dolores est exercitationem explicabo hic libero, neque, porro, quisquam recusandae reprehenderit sit.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deleniti dicta distinctio eligendi esse fugiat harum, incidunt ipsa maxime molestias necessitatibus omnis quae quidem repellat sapiente totam voluptatem voluptates voluptatum?</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deleniti dicta distinctio eligendi esse fugiat harum, incidunt ipsa maxime molestias necessitatibus omnis quae quidem repellat sapiente totam voluptatem voluptates voluptatum?</p>



<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deleniti dicta distinctio eligendi esse fugiat harum, incidunt ipsa maxime molestias necessitatibus omnis quae quidem repellat sapiente totam voluptatem voluptates voluptatum?</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deleniti dicta distinctio eligendi esse fugiat harum, incidunt ipsa maxime molestias necessitatibus omnis quae quidem repellat sapiente totam voluptatem voluptates voluptatum?</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deleniti dicta distinctio eligendi esse fugiat harum, incidunt ipsa maxime molestias necessitatibus omnis quae quidem repellat sapiente totam voluptatem voluptates voluptatum?</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deleniti dicta distinctio eligendi esse fugiat harum, incidunt ipsa maxime molestias necessitatibus omnis quae quidem repellat sapiente totam voluptatem voluptates voluptatum?</p>
<div class="sticky">
    <p>sticky</p>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deleniti dicta distinctio eligendi esse fugiat harum, incidunt ipsa maxime molestias necessitatibus omnis quae quidem repellat sapiente totam voluptatem voluptates voluptatum?</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deleniti dicta distinctio eligendi esse fugiat harum, incidunt ipsa maxime molestias necessitatibus omnis quae quidem repellat sapiente totam voluptatem voluptates voluptatum?</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deleniti dicta distinctio eligendi esse fugiat harum, incidunt ipsa maxime molestias necessitatibus omnis quae quidem repellat sapiente totam voluptatem voluptates voluptatum?</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deleniti dicta distinctio eligendi esse fugiat harum, incidunt ipsa maxime molestias necessitatibus omnis quae quidem repellat sapiente totam voluptatem voluptates voluptatum?</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deleniti dicta distinctio eligendi esse fugiat harum, incidunt ipsa maxime molestias necessitatibus omnis quae quidem repellat sapiente totam voluptatem voluptates voluptatum?</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deleniti dicta distinctio eligendi esse fugiat harum, incidunt ipsa maxime molestias necessitatibus omnis quae quidem repellat sapiente totam voluptatem voluptates voluptatum?</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deleniti dicta distinctio eligendi esse fugiat harum, incidunt ipsa maxime molestias necessitatibus omnis quae quidem repellat sapiente totam voluptatem voluptates voluptatum?</p>




</body>
</html>