<script type="text/javascript">
      function direct(id) {
            switch (id) {
                  case 'out':
                        window.location.href = "/";
                        break;
                  case 'view':
                        window.open('http://88.99.67.75/getArchiveData.php?pw=0c20fc30c1cfe46df3ebf7eb6224b16e&source=webpage&output=html&id=' + {{$entry->Web_id}});
                        break;

                  case 'home':
                        window.location.href = "/rawindex/{{$user}}";
                        break;
            }
      }
</script>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <br>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">#{{$entry->Web_id}}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group mr-2">
                        <button value="out" id="out" class="btn btn-sm btn-outline-secondary" onclick="direct(out.value)">Log Out</button>
                        <button value="view" id="view" class="btn btn-sm btn-outline-secondary" onclick="direct(view.value)">View</button>
                        <button value="home" id="home" class="btn btn-sm btn-outline-secondary" onclick="direct(home.value)">Back Home</button>
                  </div>
            </div>
      </div>
      <p>
            {{$entry->Raw}}
      </p>
</main>
</div>
</div>
</body>
