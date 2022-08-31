<!doctype html>
<html lang=en>
<head>
<meta charset=utf-8>
<title>PHP Function in JavaScript Demo</title>
<style>
body {
    font-family: 'Lato';
    font-weight: 400;
    font-size: 1.4rem;
}
 
p {
    text-align: center;
    margin-bottom: 4rem;
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<p class="unbroken">The United States (U.S. or US)—officially the United States of America (USA), commonly known as America—is a country primarily located in North America, consisting of 50 states, a federal district, five major self-governing territories, 326 reservations, and various possessions. At 3.8 million square miles (9.8 million square kilometers), it is the world's third- or fourth-largest country by total area. With a population of more than 328 million people, it is the third most populous country in the world. The national capital is Washington, D.C., and the most populous city is New York City.</p>
<button type="submit" id="btn">Convert</button>
<p class="broken"></p>
<script>
    btn=document.getElementById("btn");
    btn.addEventListener("click",(e) => {
        e.preventDefault();
        $.ajax({
            method: "POST",
            url: "wrap.php?vid=2",
            data: { text: $("p.unbroken").text() }
        })
        .done(function( response ) {
            $("p.broken").html(response);
        });
    })
</script>
</body>
</html>