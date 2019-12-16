<nav class="navbar fixed-top navbar-expand-lg navbar-dark "  style="background-color: #33234A;">
    <div class="container ">
    <button type="button" class="btn btn-outline-light">SAFISC</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" 
      aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <button type="button" class="btn btn-outline-light">
            <span id="datetime"></span>
                <script>
                    var dt = new Date();
                    document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
                </script>   
            </button>   
          </li>
          </ul>
      </div>
    </div>
</nav>
