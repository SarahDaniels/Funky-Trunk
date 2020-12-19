<?php
$servername = "localhost";
$username = "mahs_sdaniels";
$password = "mustangs";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link href="mahs_sdaniels.sql" rel="database">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="nav">
        <a href="index.php">Home</a>
        <a href="products.php" class="active">Products</a>
        <a href="about.php">About Us</a>
        <a href="checkout.php">Checkout</a>
        <form id="searchform" class="search2" method="get" action="products.php"/>
        <input class="search2" id="test" type="text" placeholder="Search" name="search" size="10" maxlength="255"/>
    </div>

<div class="stuff">
    <div class="container-fluid">
        <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="card">
            <img class="card-img-top" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw8PDw8QEA8PDw8PDQ8PDw8PDw8NDw8PFREWFhURFRUYHSggGBolGxUVITEhJSkrLi4uFx8zODMtNygtLi0BCgoKDg0OGhAQFSsdIB8tLS0rLSstLSsrKy0rLSstKy0rLSstLS0tLSstLS0tLSstKy0rLS0tLSstLisrLS0sLf/AABEIARMAtwMBIgACEQEDEQH/xAAbAAADAQEBAQEAAAAAAAAAAAAAAQIDBAUGB//EAEQQAAIBAgMEBgYECgsAAAAAAAABAgMRBBIhBTFRYRNBcYGRoQYHFCIywlJiscEzQnJzkpOio9HxIyQlNENTgrKz0vD/xAAYAQEBAQEBAAAAAAAAAAAAAAAAAQMCBP/EAB4RAQEAAgMBAQEBAAAAAAAAAAABAhEDITESYVFB/9oADAMBAAIRAxEAPwD9AiimCGzl0AQAAxgMCQGwABDEAIVhgAhDQWABDEAhMoTAlklMQCZLKJYEsAYwOhDBDALANDYCQxIYCAAAAHYGArCKsIBAhiACSyQEJjYASSWyQESyiWBIDYAdCGkCGADBgAwAGAmCQDATGAAIGMQAAAAhFCAkB3EAmS0UICSWWQwJYwYAdKCwIaALDSBggAYAArBYYIBAMTQCBDBADEUSACYxASAxABLKJYCJZRDATAAA6UMSKAYAgABoQwEwQ2AAJgDAAC4AAhhYBMkoAIYmUxMBCGxATYlmhAEtCKYgOmJRG4tgCAAAdwQgQBcAHEAEzrp4Cb32j27/AANls5fSfcrHNykXTzoxbslq3u7T08Ns5JXnq/o9S/iXhcNGm2/ie5N9R15jO8k/xdIUEtyS7FYmSLkzOTMcq6xc9bDwfVZ8VoefXouHNcTqrKsq0ZRkpUZLJUptRTptJtVYy3u7tFxd96atZqXSop6NXTLhyWV1cZXjMTMtubVo4evh6M/deJlOMGkssXHL8Xa5xXeanql2ysBIxFQMhlsgCWACA60DBAAwAABMBjAUU27LVt2XaezhMGoK71l1vhyR5uGr0qKlWrVIUqdNazqSUIpvdq+87dnbawmJv7PiKNa29U6kZNdq3nOVV2SIZTZmzDN1iBXEBhXbi27XxMMNUnhYQq16aU40p3tVUWnKmmt0nG6T420YtlbRp4rD0sRTvkrU1OKeko33xfNO6fNHbcyp0YQVoRjCOaUssUorNKTlJ2XW5Nt82TawNl0zJmkNx1j3Yt8flfrdq/1jCcqeIfjKn/1Pqtg472jC0azd5TprP+XG8ZeafifD+tivfG0IfRwuf9OrNfIe76uKzlgpRf4mIml2OMJfa2ezHyMb6+qEMR25SxFMhgSwBgB0RZVyEygLuCJKuAwATYH5f6ydouWInSlJ2pRioQ/FvKCk524+9a/I+H9HNq1cLiIVqcmpwkmtbJ26nye7vP2H0r9CobSnGcaio18uTNJOUJr8VStqnz8jj9G/VKqFWNXF1YVcjzKlSzOEmt2ZyS05W1OOSz506x9fptKpminxSfiNiirCbPN3rtoZLYmyWzOqdxyehCZlisRGnHNN2WaEN1/enNQiu+Uku8mlUy38L7CIodd2i+w7x9iZePxP1mVM20mvo4ejH/dL5j6b1af3at+f+SJ8d6d1M21cV9V0YrsWHp/fc+09W8LYSo+OJl5U4fxPZj5GN9fViYxXOkJkMpktgJgJgB0RKQojAaY0xIAGFxBcAuetg8Wpqz+JefNHkAt9zmzaveZLPNpY6a0dpduj8Tphj4vemvBmGWGTSZRu0S0FPEQm7J68LWHUv1WXN6+RjZY6lSefVh086f8Ak05xqX0tWqR+BLjGLtK/W1G25nRKjm+OTn9XdDsyreu25NbE20Wr8kXGW3UW3TdyUdW7IyqYhTjK19EtX13/AJHnzm27t3NcPL4lxXmjacXzN1nc9vxb0yX9p4z87D/igfovoTQyYGjfRzc6njJpPwSPlvS7YFaptR9HCTWKVKanZuEHGKpzbfVZQTf5S4n6DQoxpwhTjpGnCMI/kxVl9hvPHDRiBiRUDJY2QwBgJgB0RZRENRgXcBIaAYA2IBDEO4CYAy6VNzkore2BzY2OL6OUsHCM60XFpScUst9fiaTdr6XPlsZ6R+ksG0tl06iT39BVv+zVs+4/U8PRUIqK3LzfEJmHJl+Osa/Mtk+l206mIpUMTsupQVRtSq5K8IxWVvNeSt1cT6k9yvTU4uL0vufBniVIuLcXo1vHBlLvrS5JFfhvuMlm7g5TZNwE2FDFcGxBASxtkgJgJgB0QkNy13ijRiurzY3Rjw82FUpBcFRX/mxdEufiwisyC4uhjz8WbUMIpu25dbu9AMHLmJTPVo0aUFDLZ9JK0ZO8nJ5XLu0i/AzxOChJ7rS4r3b9tjm3SyPPzI9bYtK+af8ApX2v7jzYYC7ypO636vQ9ii+hpqKSdr33vVu5b4jvZnMyw+KzaSWWXVzNmebk/CdMmtDz9p0brOt8dH2HpyWhz1Emmnqmmn2GUy+bMms7fPZyXM1qYNRbXvac+oh4aPPxPdO2aHMTmX7LH63iJ4WPPxKJdQnOaLCw5/pMl4aHPxYEZyc5bw0OfiyfZIc/FhEuohFvCQ5+LEB3DBRKsBI0ikh2AlG1Fa0nwxGr4J0aqXnJLvIUTRO0J/VcKndCak/JAKMssKb3Knj6kexSqVKcV+8idVneerdqmnJOEXbzOLGyUaWMfVRrQxFuUI0q32wkdTm/aK0Or2ehNc5Z60ZeUYEs3CNqtXI6VlfpauST4f0c5J/sJd5lhsQ8snPW2KqU76aJ1moeTihbRnlhSlwxOHX6dVU/nOWM7+2J6KljqL7ujw1Vv9pjHxa6cYmpXT/melQrZoKXW1r2nlVV+F+rX176cH96NcJVtG3M83PP46xm3pZt5yzkFOrv7DmnM80801xx0jFK+vXa3ajkSOmoznaPZwW/LPknabAwYmbsyZMkDkRKYUMWhDkS5BGjaAxzAB6eUaiJMpMAsUkSmO4FpDUF16ppp809GvAi5SYGSpOpKdOpvxOz4wcepyg5xqP9/AvBPpYYfFX/AAmBimrb8/RzTvy97xNUtU9LxvZ8L7/sXgiFCUYqEMsYxVopJ2S6kjnK6niyKx7ToSv/AIc6Nb9XVhU+UyqWzbQjuvTjUffQyX/deRNTDSlCcHP44Tg3pulFq/mRioydXFOyy18BTpwd7LpoOunFvquqsLdj4GfHlbO5p1lJvp01H71dcasJL9VBfKY5icVXhnlJSvmjBNab4318/IwWJjx8NTLl5cZWmGFdtOpZhWqKOu/U5FiuEfHQmcpS3+B5pfq+NLNRc8VfqM3WRDpMXQs9uG5NSMMlOqLOT0Q+jNO3CWybmjpiyFGZLRv0ZLgUY2A1ygVHfcdyExgXcdyENAXcqLMyosDRSBMm4XAtMRNwTIqJ0ovqXgSqEeCNGNHNkWVCpR4CdNGomc/MN1k4onKaMhnciIcRWKEUTIVixFQrENGiJYGdgKYAagK40wKGiRgO5SZCKQF3FcQ0AMaExoBjEgJVDExksgTJKJZ0iWIpksAJYxSACWNCkBLAdgAtDEhgO4AgAodybjAq40yRgMaZBQFJjJQXJVO5IAAmybjYioTJKEBNwYNABNxtgxXAQAwApMdyEO4F3Am4AWmUZooChkpjuAxokaYFIYhXIpiuDYrgAguJsqAljuS2AMQNiuAyWNk3AGArgA0MAAoEAACKQAADAAAoAAAEAUAAADEIAhCYAAmSAANksQAJgAAf/9k=">
            <div class="card-body">
                <h5 class="card-title">Snoopy Lamp</h5>
                <p class="card-text">Lights up with just a tap!</p>
                <h5>19.99</h5>
                <a href="" class="btn">view</a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="card">
            <img class="card-img-top" src="data:image/jpeg;base64,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">
            <div class="card-body">
                <h5 class="card-title">Corgi Lamp</h5>
                <p class="card-text">Lights up with just a tap!</p>
                <h5>19.99</h5>
                <a href="" class="btn">view</a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="card">
            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpNO5d0TOmi1KMDBeApRYvyuPdj7dbk8F71w&usqp=CAU">
            <div class="card-body">
                <h5 class="card-title">17 Key Kalimba</h5>
                <p class="card-text">A relaxing way to let music into your life!</p>
                <h5>15.99</h5>
                <a href="" class="btn">view</a>
            </div>
        </div>
    </div>   
    <div class="col-lg-3 col-md-3 col-sm-3 ">
        <div class="card">
            <img class="card-img-top" src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSUmoo4erhCvRIduwyvAjV2cGRvO0fnR4JAKHRemBmGNDAvA7rsGKC4ODCyyZbZp0sqDcDNKgNntJTpabPe0QqXF4sevbE36rNuMlEr_MRqgk2WoLPu3sSO2w&usqp=CAE">
            <div class="card-body">
                <h5 class="card-title">Inflatable Dinosaur</h5>
                <p class="card-text">Your new best friend!</p>
                <h5>19.99</h5>
                <a href="" class="btn">view</a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 ">
        <div class="card">
            <img class="card-img-top" src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcRYe1NYf8s2zFTaot49I6OYnbwyinfH4Lbk9WWkKsb6wg8NhA_1M9K33ScKphKuspEUqQOqZG314_FJDKMr7uaiq_8LpG1A6wSusSCN_W3NQ97TJAQW3dvc&usqp=CAE">
            <div class="card-body">
                <h5 class="card-title">We're Not Really Strangers Card Game</h5>
                <p class="card-text">How well do you know the ones closest to you?</p>
                <h5>29.99</h5>
                <a href="" class="btn">view</a>
            </div>
        </div>
    <div class="col-lg-3 col-md-3 col-sm-3 ">
        <div class="card">
            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRJdzat6Ix5iRPSCw6pyGu57HjEOOGxk5VJh-LhOK6J_j5xgJkW9wTuVWm1QSKKwjDPJSlZIDJqU3LOZ-byfZC-9WZSEinjIksOKYXdP4NU&usqp=CAE">
            <div class="card-body">
                <h5 class="card-title">Llama Side Table</h5>
                <p class="card-text">Add a little funky!</p>
                <h5>29.99</h5>
                <a href="" class="btn">view</a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="card">
            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcTlCIidCvZ2pV-mIr4XeVGmbLE2lXCA5rxOCQhQyt3fezhhBeA1DhjYin975YurKVp57UldupbStjsm-0EhgqjxN_5X52EtanpMPXcv-1_8&usqp=CAE">
            <div class="card-body">
                <h5 class="card-title">Flower Cat Hat</h5>
                <p class="card-text">Make your furry friend have more style!</p>
                <h5>19.99</h5>
                <a href="" class="btn">view</a>
            </div>
        </div>
    </div>
</div>
<div class="footer">
  <p><a href="about.php">About Us</a></p>
</div>
</body>
</html>