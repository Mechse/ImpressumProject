<!DOCTYPE html>
<html lang="de" dir="ltr">

      @include('album.includings')
      @csrf
      <body>
            @include('layout.header')

            @include('album.main')

            @include('layout.footer')
      </body>
</html>
