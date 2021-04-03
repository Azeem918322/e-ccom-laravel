 @extends("index")



 @section('content')

 <div class="footerclass">
 <div class="col-md-3 col-sm-offset-4">
<form action="">
    @csrf
    <label>Email Address</label>
    <input type="email" placeholder="Enter Email" class="form-control"><br>


    <label>Password</label>
    <input type="password" placeholder="Enter Password" class="form-control"><br>
    <button class="btn btn-primary"> Save</button><br>

</form>



</div>
</div>

@endsection

