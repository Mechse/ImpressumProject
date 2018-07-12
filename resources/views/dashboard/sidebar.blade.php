<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <br>
          <div class="sidebar-sticky">
                <form action="/rawindex/{{$user}}/{{$entry->Web_id}}" method="post">
                      @csrf
                      <ul class="nav flex-column">

                            @foreach ($datafields as $datafield)
                            <?php $type = $datafield->Type;
                           try{
                                 $val = $datas->$type;
                           } catch(Exception $e){
                                 $val = "";
                           }
                     ?>
                                  <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>{{$type}}:</span>
                          </h6>

                                  <li class="nav-item">
                                        <input type="text" name="{{$type}}" value="{{$val}}"> </li>
                                  <li class="nav-item">
                                        <input type="text" name="{{$type}}_reg" placeholder="{{$type}} RegEx" value="{{$regex[$type]}}"> </li>
                                  @endforeach

                                  <br>
                                  <li class="nav-item">
                                        <button type="submit" name="button">Update</button>

                                        <label for="worked">Worked:</label>
                                          <input id="worked" name="worked" type="checkbox" value={{$worked}} @if($worked){{'checked'}} @else {{'checked'}} @endif></input>

                                  </li>
                                  @#dd($worked)
                      </ul>
                </form>
          </div>
    </nav>
