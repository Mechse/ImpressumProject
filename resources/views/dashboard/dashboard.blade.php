<!DOCTlYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>Dashboard {{$entry->Web_id}}</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/dashboard.css" rel="stylesheet">
  </head>

  <body>
        <div style="background-color: #343a40;">
             <h1 style="color: white;">#{{$entry->Web_id}}</h1>
            <h2><a href="http://88.99.67.75/getArchiveData.php?pw=0c20fc30c1cfe46df3ebf7eb6224b16e&source=webpage&output=html&id={{$entry->Web_id}}">View.</a></h2>
          <div class="container-fluid">
            <div class="row">
              <nav style="float:left;">
                   <form action="/rawindex/{{$user}}/{{$entry->Web_id}}" method="post">
                         @csrf
                         <ul class="nav nav-pills flex-column">

                              @foreach ($datafields as $datafield)
                                    <?php $type = $datafield->Type;
                                          try{
                                                $val = $datas->$type;
                                          } catch(Exception $e){
                                                $val = "";
                                          }
                                    ?>
                                    <label style="color: white;" for="{{$type}}">{{$type}}:</label>
                                    <input type="text" name="{{$type}}" value="{{$val}}">
                                    <input type="text" name="{{$type}}_reg" placeholder="{{$type}} RegEx" value="">
                              @endforeach
                              <br>
                              <button type="submit" name="button">Update</button>
                         </ul>

                   </form>
              </nav>

              <main style="color: white;"  class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
                   {{$entry->Raw}}
              </main>
            </div>
          </div>
        </div>
  </body>
</html>
