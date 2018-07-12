<script type="text/javascript">
      function view(id) {
            window.open('http://88.99.67.75/getArchiveData.php?pw=0c20fc30c1cfe46df3ebf7eb6224b16e&source=webpage&output=html&id='+id);
      }
</script>
<main role="main">

  <div class="album py-5 bg-dark">
    <div class="container">

      <div class="row">
            @foreach ($raw_entries as $entry)

              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <h2><a href="/rawindex/{{$user}}/{{$entry->Web_id}}" >#{{$entry->Web_id}}</a></h2>
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary" onclick="view({{$entry->Web_id}});">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Status: {{$entry->Status}}</button>
                        {{-- <button type="button" class="btn btn-sm btn-outline-secondary">Work: {{$entry->Work}}</button> --}}
                        <button type="button" class="btn btn-sm btn-outline-secondary">Worker: {{$entry->Usr_id}}</button>
                      </div>
                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach

              <div class="paginator" style="margin: auto;">
                    {{$raw_entries->links()}}
              </div>

      </div>
    </div>
  </div>
</main>
