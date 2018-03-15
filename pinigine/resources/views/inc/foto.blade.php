<div class="text-center">
<h3 class="text-center">Baldų pavyzdžiai</h3>
@foreach($user as $users)
      <a id="brd"class="gal" href="failai/{{$users->name}}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="gal img-thumbnail" src="failai/{{$users->name}}" alt=""width="304" height="236"/></a>
@endforeach  
    </div>
    
    <div align="center"class="container">
  <h2 class="text-center">Image</h2>
  <p class=text-center>The .img-responsive class makes the image scale nicely to the parent element (resize the browser window to see the effect):</p>
  <a class="gal" href="//storage/baldai/TV AZ V1.jpg" data-lightbox="example" data-title="Click the right half of the image to move forward."><img class="gal img-thumbnail" src="woodpose/TV AZ V1 VIZ2.jpg" alt=""width="608" height="472"/></a>
</div>
