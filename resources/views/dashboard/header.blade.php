<script type="text/javascript">
            function find(id) {
                  //console.log("/rawindex/" + '{{$user}}' +"/"+ id);
                  window.location.href = "/rawindex/" + '{{$user}}' +"/"+ id
            }
</script>

<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/rawindex/{{$user}}">Welcome {{$user}}.</a>
      <input id="finder" class="form-control form-control-dark w-100" type="number" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                  <a class="nav-link" href="#" onclick="find(finder.value)">Search</a>
            </li>
      </ul>
</nav>
