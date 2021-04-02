<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BlogQL</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
        <script src="{{ mix('js/app.js') }}" defer></script>
    
</head>
<body>
      <div id="app">
          <router-view></router-view>
      </div>
              
      






    <script>
    import Post from './components/Post.vue'
        export default {
            components:{
                appPost:Post
            }
        }
    </script>


</body>
</html>
