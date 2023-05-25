<html>
<head>
    <title>List</title>
</head>
<body>
<h1>All the Ads</h1>
<div class="ads_container">
    @foreach($ads as $ad)
       <div class="ad">
           <h2>{{$ad->title}}</h2>
           <h3>{{$ad->description}}</h3>
           <h4>{{$ad->price}}</h4>
           <div class="row">
               <a href="{{route('advertisement.edit',$ad->id)}}">
                   Edit this AD
               </a>
               <form action="delete">
                   <input type="submit" value="Delete this AD" />
               </form>
           </div>
       </div>
    @endforeach
</div>
<style>
    .ads_container{
        padding:20px;
        width: min(400px,99%);
        background-color: darkorange;
        border-radius: 10px;
    }
    .ad{
        background: white;
        color: black;
        padding:20px;
        margin-block: 10px;
        border-radius: 10px;
    }
    .row{
        display: flex;
    }
</style>
</body>
</html>
