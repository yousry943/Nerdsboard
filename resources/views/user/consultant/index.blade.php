<!DOCTYPE html>
<html lang="en">
    <head>






                <form   method="post"  action="{{url('add/register/consultant')}}" enctype="multipart/form-data" >

                	    {{csrf_field()}}


name:<input type="text" name="name" ><br>
email:<input type="email" name="email"><br>
bio:<input type="text" name="bio" ><br>


                       <input type="file" name="image" id="image" required  class="form-control-file" id="exampleFormControlFile1">








                        <div class="row m-0 justify-content-center col-12 text-center pb-4">
                            <button type="submit" class="btn btn-outline-info m-2"> <i class="fas fa-check-circle"></i> Save and continue</button>


                        </div>
                </form>





    </body>
</html>
