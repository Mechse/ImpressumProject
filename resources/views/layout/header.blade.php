<script type="text/javascript">
      function search(webid, usr) {
            console.log("/rawindex/" + usr +"/"+webid);
            window.location.href = "/rawindex/" + usr +"/"+webid;
      }
</script>

<header style="background-color: #343a40;">
      <div >
      <h1 style="color: white;">Hello {{$user}} :)</h1>
      <div style="float:right; padding:3px;">
                  <input type="number" id="webid">
                  <button type="submit" name="button" onclick="search(webid.value, '{{$user}}')">Search</button>
            <a href="/rawindex/{{$user}}">Back Home. | </a><a href="/">LogOut.</a>
            <div>
      <div>
</header>
