@extends('layouts/bootstrap/app')

@section('main')
<main>
  <div class="row g-5">
    <div class="col-md-12">
      
     <div id="app">@{{ message }}</div>

     <script>
      const { createApp, ref } = Vue

      createApp({
        setup() {
          const message = ref('Hello vue!')
          return {
            message
          }
        }
      }).mount('#app')
    </script>


    <script type="text/javascript">
    

      // Make a request for a user with a given ID
      axios.get('/api/articles')
        .then(function (response) {
          // handle success
          console.log(response);
        })
        .catch(function (error) {
          // handle error
          console.log(error);
        })
        .finally(function () {
          // always executed
        });

    </script>

    </div>
  </div>
</main>
@endsection

@section('footer')
<footer class="pt-5 my-5 text-muted border-top">
  <!-- Created by the Bootstrap team &middot; &copy; 2022 -->
</footer>
@endsection